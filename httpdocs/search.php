<div id="cse-search-form" style="width: 100%;">Loading</div>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript"> 
  google.load('search', '1', {language : 'en'});
  google.setOnLoadCallback(function() {
    var customSearchOptions = {};  var customSearchControl = new google.search.CustomSearchControl(
      '007347563796559572405:nwsyiaffud8', customSearchOptions);
    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    var options = new google.search.DrawOptions();
    options.setAutoComplete(true);
    customSearchControl.setAutoCompletionId('007347563796559572405:nwsyiaffud8+qptype:1');
    options.enableSearchboxOnly("http://www.micomputsolutions.co.uk/search-result.php" , null, false);//seems to stop new page opening in search result (not sure)
    customSearchControl.draw('cse-search-form', options);
  }, true);
</script>
<link rel="stylesheet" href="http://www.google.com/cse/style/look/default.css" type="text/css" />
<style type="text/css">
  input.gsc-input {
    border-color: #D9D9D9;
  }
  input.gsc-search-button {
    border-color: #666666;
    background-color: #CECECE;
  }</style>