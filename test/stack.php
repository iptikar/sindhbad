<!DOCTYPE html>
<html>
	<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
<body>
	
<!-- JavaScript and Ajax code -->
 <script>
  $(document).ready(function(){
  $('#addrecord').click(function(event){
  event.preventDefault();
  $.ajax({
   url: "new.php",
   type:"post",
   data: $("#addnewteamform").serialize(),
   success: function(data){

	console.log(data);
    $('form').trigger("reset");
   }
   });
   });
   });
   </script>

  <!-- HTML Plus Form code -->
 <form id="addnewteamform">
   <h4 style="font-family: Times New Roman, Times, serif;">ID</h4>
   <input class="form-control" name="id" id="id"  style="margin- 
      left:100px; 
      background: url(icons/id.png) no-repeat scroll 5px 5px; padding- 
      left:35px;
      border-radius: 6px 6px 6px 6px; width:360px; margin-top:-40px;"  
      type="text" placeholder="Your ID Here">
   <br>
   <h4 style="font-family: Times New Roman, Times, serif;">Name</h4>
   <input class="form-control" name="name"  style="margin-left:100px; 
      width:360px; background: url(icons/name2.png) no-repeat scroll 5px 
      5px; 
      padding-left:35px; border-radius: 6px 6px 6px 6px; margin-top:-40px;"  
      type="text" placeholder="Your Name Here">
   <br>
   <h4 style="font-family: Times New Roman, Times, serif;">Position</h4>
   <input class="form-control" name="position" style="margin-left:100px; 
      width:360px;  background: url(icons/position.png) no-repeat scroll 5px 
      5px; padding-left:35px; border-radius: 6px 6px 6px 6px; margin- 
      top:-40px; 
      "  type="text" placeholder="Your Position Here">
   <input type = "button" id = "addrecord" value = "submit"/>
</form>
</body>
</html>
