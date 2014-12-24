/***************************************************************************************
To parse the URL

Usage: getUrlVars() --> returns all the url query terms as object
        getUrlvar('id'); --> returns the value for the key named 'id'
***************************************************************************************/

$.extend({
  getUrlVars: function(){
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
      hash = hashes[i].split('=');
      vars.push(hash[0]);
      vars[hash[0]] = hash[1];
    }
  /** returns the value for a query string - fragments are removed. **/
    for(var i = 0; i < vars.length; i++)
    {
      vars[vars[i]] = (vars[vars[i]]).split('#')[0];
    }

    return vars;
  },

  getUrlVar: function(name){
    return $.getUrlVars()[name];
  }
});
