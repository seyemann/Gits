<?php 
session_start();
require ('header.php');
?>
<div style="text-align: left;">
<div id="cse" style="width: 100%;">Loading</div>
<script src="http://www.google.co.uk/jsapi" type="text/javascript"></script>
<script type="text/javascript"> 
  google.load('search', '1', {language : 'en'});
  google.setOnLoadCallback(function() {
    var customSearchOptions = {};  var customSearchControl = new google.search.CustomSearchControl(
      '007347563796559572405:nwsyiaffud8', customSearchOptions);
    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    var options = new google.search.DrawOptions();
    options.setAutoComplete(true);
    customSearchControl.setAutoCompletionId('007347563796559572405:nwsyiaffud8+qptype:1');
    customSearchControl.draw('cse', options);
    customSearchControl.setLinkTarget(google.search.Search.LINK_TARGET_SELF);
    function parseParamsFromUrl() {
      var params = {};
      var parts = window.location.search.substr(1).split('\x26');
      for (var i = 0; i < parts.length; i++) {
        var keyValuePair = parts[i].split('=');
        var key = decodeURIComponent(keyValuePair[0]);
        params[key] = keyValuePair[1] ?
            decodeURIComponent(keyValuePair[1].replace(/\+/g, ' ')) :
            keyValuePair[1];
      }
      return params;
    }

    var urlParams = parseParamsFromUrl();
    var queryParamName = "q";
    if (urlParams[queryParamName]) {
      customSearchControl.execute(urlParams[queryParamName]);
    }
  }, true);
</script>
<link rel="stylesheet" href="http://www.google.com/cse/style/look/default.css" type="text/css" /> 
</div>




<?php require ('footer.php');?>