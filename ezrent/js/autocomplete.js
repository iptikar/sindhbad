$(function() {
	var baseurl = $('#baseurl').val();
	$( "#countryField" ).autocomplete({
	minLength:2,
	source: function( request, response ) {
	$.ajax({
	  url: baseurl+"back_office/countries/search_by_title",
	  dataType: "json",
	  data: {term: request.term},
	  type:"POST",
	  success: function(data) {
				  response($.map(data, function(item) {
				  return {
					  label: item.label,
					  };
			  }));
		  }
	  });
	},
	});
	$( "#cityField" ).autocomplete({
	minLength:2,
	source: function( request, response ) {
	$.ajax({
	  url: baseurl+"back_office/cities/search_by_title",
	  dataType: "json",
	  data: {term: request.term},
	  type:"POST",
	  success: function(data) {
				  response($.map(data, function(item) {
				  return {
					  label: item.label,
					  };
			  }));
		  }
	  });
	},
	});
});
