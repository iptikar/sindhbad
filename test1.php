<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Sortable - Display as grid</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
  <style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: 450px; }
  #sortable li { margin: 3px 3px 3px 0; padding: 1px; float: left; width: 100px; height: 90px; font-size: 4em; text-align: center; }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
	  $('#sortable')
    .sortable({
       revert       : true,
       connectWith  : "#sortable",
       stop         : function(event,ui){ /* do whatever here */ 
		   
				var el = $( "#sortable" ).children();
				// Get the children value 
				var data = JSON.stringify($( "#sortable" ).children());
				
				// Get the nodevalue 
				var livalue = [];
				
				for(var i = 0; i < el.length; i++) {
					
						
					
					// Get the child nodes value 
					var nod = $(el[i]).text();
					
					livalue.push(nod);
					
					
					}
					
				//alert(data);
				$('.df').html(JSON.stringify(livalue));
		   }
    });
    
    $( "#sortable" ).disableSelection();
  } );
  </script>
</head>
<body>
 
<ul id="sortable">
  <li class="ui-state-default">1</li>
  <li class="ui-state-default">2</li>
  <li class="ui-state-default">3</li>
  <li class="ui-state-default">4</li>
  <li class="ui-state-default">5</li>
  <li class="ui-state-default">6</li>
  <li class="ui-state-default">7</li>
  <li class="ui-state-default">8</li>
  <li class="ui-state-default">9</li>
  <li class="ui-state-default">10</li>
  <li class="ui-state-default">11</li>
  <li class="ui-state-default">12</li>
</ul>
 
 
 
<div class = "df">

</div>
</body>
</html>
