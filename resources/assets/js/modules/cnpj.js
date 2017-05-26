Module("inConv.CNPJ", function( CNPJ ){

  CNPJ.fn.initialize = function() {
    this.modalConsult             = $('#captchaModal');
    this.errorMessage             = $('.erroCNPJ');

    this.fieldCNPJ                = $('#cnpj');
    this.fieldCaptcha             = $('#captcha');
    this.wrapFieldCNPJ            = this.fieldCNPJ.parents('.form-group');

    this.btnCloseErrorMessage     = this.errorMessage.find('.close');
    this.btnPopulateFields        = $('.openModalCnpj');
    this.btnConsultCNPJ           = this.modalConsult.find("#consultarCNPJ");

    this.urlGetConsultParameters  = '/consult-params';
    this.urlPostConsultParameters = '/consult-cnpj';

    this.imgCaptcha               = $('.img_modal_captcha');
    this.srcImgCaptcha            = '//' + location.hostname + '/images/progress.gif';

    this.formFields               = {
      cep          : $('#cep'),
      name         : $('#name'),
      trading_name : $('#trading_name'),
      cnae_main    : $('#cnae_main'),
      address      : $('#address'),
      house_number : $('#house_number'),
      district     : $('#district'),
      city         : $('#city'),
      uf           : $('#uf'),
      email        : $('#email'),
      phone        : $('#phone'),
      complement   : $('#complement')
    };

    this.addEventListeners();

  }

  CNPJ.fn.addEventListeners = function(event) {
    this.btnPopulateFields.on('click', this.openModalCNPJ.bind(this) );
    this.modalConsult.on('show.bs.modal', this.getConsultParameters.bind(this) );
    this.modalConsult.on('hidden.bs.modal', this.closeModalConsult.bind(this) );
    this.modalConsult.on('submit', this.postConsultParameters.bind(this) );
    this.btnCloseErrorMessage.on('click', this.closeErrorMessage.bind(this) );
  }

  CNPJ.fn.closeErrorMessage = function(event) {
    event.preventDefault();

    this.errorMessage.fadeOut().css('visibility','hidden');
  }

  CNPJ.fn.openModalCNPJ = function(event) {
    event.preventDefault();
    if( !this.fieldCNPJ.val() ) {
      this.wrapFieldCNPJ.addClass('has-error');
    } else {
      this.wrapFieldCNPJ.removeClass('has-error')
      this.modalConsult.modal("show");
    }
  }

  CNPJ.fn.postConsultParameters = function(event) {
    event.preventDefault();

    var param = {
      captcha : this.fieldCaptcha.val(),
      cnpj    : this.fieldCNPJ.val(),
      cookie  : this.btnConsultCNPJ.data('cookie'),
      _token  : this.modalConsult.find('input[name=_token]').val()
    },
    btnConsultCNPJ           = this.btnConsultCNPJ,
    modalConsult             = this.modalConsult,
    urlPostConsultParameters = this.urlPostConsultParameters,
    resetConsult             = this.resetConsult,
    imgCaptcha               = this.imgCaptcha,
    srcImgCaptcha            = this.srcImgCaptcha,
    btnConsultCNPJ           = this.btnConsultCNPJ,
    errorMessage             = this.errorMessage,
    fieldCaptcha             = this.fieldCaptcha,
    formFields               = this.formFields;

    $.ajax({
      type: "GET",
      url : urlPostConsultParameters + '/' + param.cnpj.replace(/[^\d]+/g,'') + '/' + param.captcha + '/' + param.cookie,
      beforeSend: function() {
        btnConsultCNPJ.html('Aguarde! Consultando...');
      },
      success : function(dados){

        formFields.name.val( dados.nome_fantasia );
        formFields.trading_name.val( dados.razao_social );
        formFields.cnae_main.val( dados.cnae_principal );
        formFields.email.val( dados.email );
        formFields.phone.val( dados.telefone );

        formFields.house_number.val( dados.numero );
        formFields.complement.val( normatizeName(dados.complemento) );

        $.getJSON("//viacep.com.br/ws/"+ dados.cep.split(/[\. ,:-]+/g).join('') +"/json/?callback=?", function( dados ) {
          if ( !("erro" in dados) ) {

            formFields.cep.val( dados.cep );
            formFields.address.val( normatizeName( dados.logradouro ) );
            formFields.district.val( normatizeName(dados.bairro) );
            formFields.uf.val( dados.uf );
            formFields.city.val( normatizeName(dados.localidade) );

          } else {
            alert("CEP não encontrado.");
          }
        });

      },
      complete: function() {
        modalConsult.modal('hide');

        imgCaptcha.attr('src', srcImgCaptcha);
        btnConsultCNPJ.html('Consultar');
        fieldCaptcha.val('');

      },
      error: function() {
        modalConsult.modal('hide');

        imgCaptcha.attr('src', srcImgCaptcha);
        btnConsultCNPJ.html('Consultar');
        fieldCaptcha.val('');
        errorMessage.css('visibility','visible').fadeIn();
      }
    }, "json");

  }

  CNPJ.fn.resetConsult = function(){
    this.imgCaptcha.attr('src', this.srcImgCaptcha);
    this.btnConsultCNPJ.html('Consultar');
    this.fieldCaptcha.val('');
  }

  CNPJ.fn.closeModalConsult = function() {
    this.resetConsult();
  }

  CNPJ.fn.getConsultParameters = function(event) {
    var imgCaptcha     = this.imgCaptcha,
        btnConsultCNPJ = this.btnConsultCNPJ,
        modalConsult   = this.modalConsult,
        errorMessage   = this.errorMessage,
        resetConsult   = this.resetConsult;

    $.get(this.urlGetConsultParameters + '', function( dados ) {
      imgCaptcha.attr('src', dados.captchaBase64 );
      btnConsultCNPJ.data('cookie', dados.cookie );
    }).fail(function() {
      modalConsult.modal('hide');
      errorMessage.css('visibility','visible').fadeIn();

      this.imgCaptcha.attr('src', this.srcImgCaptcha);
      this.btnConsultCNPJ.html('Consultar');
      this.fieldCaptcha.val('');
    });
  }

});
