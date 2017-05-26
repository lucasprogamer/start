function normatizeName( str, escape = 'de, do, da, e, dos' ){
  if( !str || !str.length ){
    return false;
  }

  var arrName = [];
  var value = str.toLowerCase().split(' ');
  var keywords = ( !escape || !escape.length ) ? [] : escape.replace(/\s+/, '').toLowerCase().split(',');
  for (var i = 0, len = value.length; i < len; i++) {
    if ( !in_array( value[i], keywords ) ) {
      arrName[i] = capitaliseFirst( value[i] );
    } else {
      arrName[i] = value[i];
    }
  }
  return arrName.join(' ');
}

function capitaliseFirst( str ) {
  return str.charAt(0).toUpperCase() + str.slice(1).toLowerCase();
}

function in_array( search, array ) {
  for ( i = 0; i < array.length; i++ ) {
    if( array[i] === search )
      return true;
  }
  return false;
}


function unaccents(str){
  var accents    = 'ÀÁÂÃÄÅàáâãäåÒÓÔÕÕÖØòóôõöøÈÉÊËèéêëðÇçÐÌÍÎÏìíîïÙÚÛÜùúûüÑñŠšŸÿýŽž';
  var accentsOut = "AAAAAAaaaaaaOOOOOOOooooooEEEEeeeeeCcDIIIIiiiiUUUUuuuuNnSsYyyZz";
  str = str.split('');
  var strLen = str.length;
  var i, x;
  for (i = 0; i < strLen; i++) {
    if ((x = accents.indexOf(str[i])) != -1) {
      str[i] = accentsOut[x];
    }
  }
  return str.join('');
};
