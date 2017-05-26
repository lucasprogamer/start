Module("inConv.CEP", function(CEP){
  CEP.fn.initialize = function( fieldCEP ) {
    this.fieldCEP = fieldCEP;
    this.patternCEP = /^[0-9]{8}$/;

    this.address = $('#address');
    this.bairro = $('#district');
    this.city = $('#city');
    this.uf = $('#uf');
    this.goToField = $('#house_number');

    this.addEventListeners();
  };

  CEP.fn.addEventListeners = function(event) {
    this.fieldCEP
      .on('blur', this.onFieldCepBlur.bind( this ));
  };
  CEP.fn.onFieldCepBlur = function(event) {
    var cep = this.fieldCEP.val().replace(/\D/g, '');

    if (cep != "") {
      if( this.patternCEP.test(cep) ) {
        var address = this.address,
            bairro = this.bairro,
            city = this.city,
            uf = this.uf,
            goToField = this.goToField;;

            address.val("...").attr('disabled','disabled');
            bairro.val("...").attr('disabled','disabled');
            city.val("...").attr('disabled','disabled');
            uf.val("...").attr('disabled','disabled');

        $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function( dados ) {
          if ( !("erro" in dados) ) {
            address.val( dados.logradouro ).removeAttr('disabled');
            bairro.val( dados.bairro ).removeAttr('disabled');
            city.val( dados.localidade ).removeAttr('disabled');
            uf.val( dados.uf ).removeAttr('disabled');

            goToField.focus();

          } else {
            address.val("").removeAttr('disabled');
            bairro.val("").removeAttr('disabled');
            city.val("").removeAttr('disabled');
            uf.val("").removeAttr('disabled');
            alert("CEP não encontrado.");
          }
        });
      }
    }
  };
});
