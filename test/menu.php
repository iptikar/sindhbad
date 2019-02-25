

<!DOCTYPE html>
<html>
<head>
	<title>Menu Test</title>


	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>
.navbar-nav.navbar-left  .btn { position: relative; z-index: 2; padding: 4px 19px; margin: 10px auto; transition: transform 0.3s; }
.navbar-nav.navbar-right  .btn { position: relative; z-index: 3; padding: 4px 19px; margin: 10px auto; transition: transform 0.3s; }
.container-fluid .barzinho {background-color:#35AE8D;}
.navbar .navbar-collapse { position: relative; background-color:#35AE8D;}

.navbar .navbar-collapse .navbar-left > li:last-child { padding-left: 22px; }
.navbar .navbar-collapse .navbar-right > li:last-child { padding-right: 22px; }

#nav-collapse2 { position: absolute; z-index: 1; top: 0; left: 0; right: 0; bottom: 0; margin: 0; padding-right: 120px; padding-left: 0px; width: 100%;}
#nav-collapse4 { position: absolute; z-index: 1; top: 0; left: 0; right: 0; bottom: 0; margin: 0; padding-right: 120px; padding-left: 342px; width: 100%; }
#nav-collapse3 { position: absolute; z-index: 2; top: 0; left: 0; right: 0; bottom: 0; margin: 0; padding-right: 120px; padding-left: 0px; width: 100%; }

.navbar.navbar-default .nav-collapse { background-color: #35AE8D; }
.navbar.navbar-inverse .nav-collapse { background-color: #222; }
.navbar .nav-collapse .navbar-form { border-width: 0; box-shadow: none; }
.nav-collapse>li { float: left; color:#35AE8D }

.btn.btn-circle { border-radius: 50px; }
.btn.btn-outline { background-color: transparent; }

.navbar-nav.navbar-right .btn:not(.collapsed) {
    background-color: rgb(111, 84, 153);
    border-color: rgb(111, 84, 153);
    color: rgb(255, 255, 255);
}

.navbar-nav.navbar-left .btn:not(.collapsed) {
    background-color: rgb(111, 84, 153);
    border-color: rgb(111, 84, 153);
    color: rgb(255, 255, 255);
}

.navbar.navbar-default .nav-collapse,
.navbar.navbar-inverse .nav-collapse {
    height: auto !important;
    transition: transform 0.3s;
    transform: translate(0px,-50px);
}
.navbar.navbar-default .nav-collapse.in,
.navbar.navbar-inverse .nav-collapse.in {
    transform: translate(0px,0px);
}

/*Mult-level*/

.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}



.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}

/*mult-level*/





@media screen and (min-width: 768px) {
    .navbar .navbar-collapse li li a:hover{
        background-color: #35AE8D;
        color:#ffffff;
    }
    .navbar .navbar-collapse li li a:active{
        color:#000000;
    }

    .navbar .navbar-collapse li li a:hover > .badge{
        background-color: #ffffff;
        color:#000000;
    }
}

      
    .boton{
        display: block;
        width:44px;
        height:34px;
        line-height:16px;
    }

    .dropdown-submenu>.dropdown-menu {
        top: 0;
        right: 100%;
    }
}
</style>

<script>
    $(document).ready(function(){
$('.dropdown-submenu>a').unbind('click').click(function(e){
$(this).next('ul').toggle();
e.stopPropagation();
e.preventDefault();
});
});
</script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Eventos<span class="caret"></span></a>
                  	<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
		              	<li><a href="#">Some action</a></li>
		              	<li><a href="#">Some other action</a></li>
		              	<li class="divider"></li>
		              	<li class="dropdown-submenu">
		                	<a href="#" >Eventos</a>
		                	<ul class="dropdown-menu" role="menu">
		                  		<li><a href="#">Second level</a></li>
		                  		<li class="dropdown-submenu">
		                    		<a href="#">Even More..</a>
		                    		<ul class="dropdown-menu">
		                        		<li><a href="#">3rd level</a></li>
		                    			<li class="dropdown-submenu"><a href="#">3rd level</a>
    	                    			    <ul class="dropdown-menu" role="menu">
    	                        		<li><a href="#">4th level</a></li>
		                    			<li><a href="#">4th level</a></li>
		                    		</ul>
                                         
		                    			</li>
		                    		</ul>
		                  		</li>
		                  		<li><a href="#">Second level</a></li>
		                  		<li><a href="#">Second level</a></li>
                			</ul>
              			</li>
            		</ul>
                </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    



    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?php

$fakepages = array();
$fakepages[0] = array('id' => 1, 'parent_id' => 0, 'title' => 'Parent Page');

$fakepages[1] = array('id' => 2, 'parent_id' => 1, 'title' => 'Sub Page');
$fakepages[2] = array('id' => 3, 'parent_id' => 2, 'title' => 'Sub Sub Page');
$fakepages[3] = array('id' => 4, 'parent_id' => 3, 'title' => 'sdfsdf');
$fakepages[4] = array('id' => 5, 'parent_id' => 0, 'title' => 'alone');
$fakepages[5] = array('id' => 6, 'parent_id' => 1, 'title' => 'Sub Page');
$fakepages[6] = array('id' => 7, 'parent_id' => 5, 'title' => 'alone Page');
$fakepages[7] = array('id' => 8, 'parent_id' => 0, 'title' => 'alone Page');
function buildTree(array $elements, $parentId = 0) {
    $branch = array();

    foreach ($elements as $element) {
        if ($element['parent_id'] == $parentId) {
            $children = buildTree($elements, $element['id']);
            if ($children) {
                $element['children'] = $children;
            }
            $branch[] = $element;
        }
    }

    return $branch;
}




function getULLitree($array, $ulclass = null , $lidropdowclass = null, $submenu = false) {

	if($ulclass == null) {

		$ulclass = 'nav navbar-nav';
	}

$lisub = '';
if($submenu === true) {

	$lisub  = 'dropdown-submenu'; 
} else {

	$lisub = "dropdown";
}

	$list = "<ul class = '$ulclass'>";

	


	foreach( $array as $key => $value) {

		
		
		
		if(isset($value['children'])) {

		// Before and after 
		//$menu = $value['children'][0]['children']	


				$list .= "<li class = 'dropdown-submenu'><a a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button'>".$value['title']."<span class='caret'></span></a>".getULLitree($value['children'], 'dropdown-menu multi-level', true)."</li>";
			
			
			

		}   

		else {

			$list .= "<li><a href='#''>".$value['title'].'</a></li>';

		}

		

	
	
		 
	}

	$list  .= '</ul>';

	return $list;
}





$tree = buildTree($fakepages );

$getlist = getULLitree($tree, '','');



?>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
   
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
<!--
      <ul class="nav navbar-nav">
        

        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Eventos<span class="caret"></span></a>
                  	<ul class="dropdown-menu multi-level">
		              	<li><a href="#">Some action</a></li>
		              	<li><a href="#">Some other action</a></li>
		              	<li class="divider"></li>
		              	<li class="dropdown-submenu">
		                	<a href="#" >Eventos</a>
		                	<ul class="dropdown-menu" role="menu">
		                  		<li><a href="#">Second level</a></li>
		                  		<li class="dropdown-submenu">
		                    		<a href="#">Even More..</a>
		                    		<ul class="dropdown-menu">
		                        		<li><a href="#">3rd level</a></li>
		                    			<li class="dropdown-submenu"><a href="#">3rd level</a>
    	                    			    <ul class="dropdown-menu" role="menu">
    	                        		<li><a href="#">4th level</a></li>
		                    			<li><a href="#">4th level</a></li>
		                    		</ul>
                                         
		                    			</li>
		                    		</ul>
		                  		</li>
		                  		<li><a href="#">Second level</a></li>
		                  		<li><a href="#">Second level</a></li>
                			</ul>
              			</li>
            		</ul>
                </li>
      </ul>
  -->
      
      <?php 
echo $getlist
      ?>
    
    


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



</body>
</html>
</html>

<?php 


//echo $tree;
echo "<pre>";
//print_r($fakepages);
print_r($tree);


echo "</pre>";
?>