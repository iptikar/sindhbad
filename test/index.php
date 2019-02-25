<!doctype html>
<html lang="en" manifest="example.appcache">
   
	<head >
	
		<title>Hello World </title>
		<link href = "css/style.css" rel = "stylesheet" type = "text/css"/>
		
		<script type = "text/javascript">
		
		console.log(window.applicationCache);
		function onUpdateReady() {
  console.log('found new version!');
}
window.applicationCache.addEventListener('updateready', onUpdateReady);
if(window.applicationCache.status === window.applicationCache.UPDATEREADY) {
  onUpdateReady();
}
		</script>	
	</head>
	
	<body>
		<h1 >If i update here i need to update there </h1>
	
	</body>
	
	
</html>
