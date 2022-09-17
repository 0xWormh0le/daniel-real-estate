<?php
if(!isset($searchItem)) {
	$searchItem = "search_table";
	$tableSelector = ".dataTable";
}
?>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable search-white">
	<label class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect mdl-button--icon" for="{{ $searchItem }}" title="Search terms(s)">
	  	<i class="material-icons">search</i>
	  	<span class="sr-only">Search terms(s)</span>
	</label>
	<div class="mdl-textfield__expandable-holder">
	  	<input class="mdl-textfield__input" type="search" id="{{ $searchItem }}" placeholder="Search term...">
	  	<label class="mdl-textfield__label" for="{{ $searchItem }}">
	  		Search term...
	  	</label>
	</div>
</div>
<script>
  $(document).on('input', "#{{ $searchItem }}", function(){
      var oTable = $('{{ $tableSelector }}').dataTable();
      oTable.fnFilter($(this).val());
  });
</script>