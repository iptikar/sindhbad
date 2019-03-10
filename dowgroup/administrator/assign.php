<?php 
session_start();
ob_start();
if(!isset($_SESSION['3vmigUCQdJGRrvG-username'])) {


header('Location:http://'.$_SERVER["HTTP_HOST"].'/dowgroup');
}


require '../controller/controller.php';
$obj = new DowGroup();



?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/gh/mar10/fancytree@2/dist/skin-win8/ui.fancytree.min.css" rel="stylesheet">
  
 

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
   <?php include 'side-menu.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
       <?php include 'header.php' ;?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Users</h1>
         

          <p class="mb-4"></a>.</p>

<?php
          
/*
function listFolderFiles($dir){
    $ffs = scandir($dir);

    unset($ffs[array_search('.', $ffs, true)]);
    unset($ffs[array_search('..', $ffs, true)]);

    // prevent empty ordered elements
    if (count($ffs) < 1)
        return;



    echo '<ol>';
    foreach($ffs as $ff){
        echo '<li>'.$ff;
        if(is_dir($dir.'/'.$ff)) listFolderFiles($dir.'/'.$ff);
        echo '</li>';
    }
    echo '</ol>';
    
}



echo "<pre>";

print_R(listFolderFiles('../public'));

echo "</pre>";

echo "<pre>";

print_R($obj->GetCategories());

echo "</pre>";

*/



?>



        
          <!-- DataTales Example -->

<form action = "<?= $_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'] ?>" method = "POST">
               <?php if(isset($_POST['assign-files'])) :?>

            <?php if($obj->assignDoc() === true) :?>

              <div class="alert alert-success">
  <strong>Success!</strong> Assignment made sucessfully.
</div>
            <?php endif ;?>

            <?php endif; ?>


          <div class="card shadow mb-4">

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Documents</h6>
            </div>

            
            
           
            <div class="card-body" style = "height: 300px; overflow: scroll;">
              <div class="table-responsive">
                 

                 <div class="list-group">
  
               
              

                 </div>
<br/>
<br/>
<ul>
<?php
  $hostname = $_SERVER['HTTP_HOST'];
  $dir = $hostname.'/dowgroup/public';

?>
<?php foreach($obj->GetFiles() as $each) :?>

<?php
  $eachfiles = json_decode($each['files'], true);
  $eachtitles = json_decode($each['title'], true);
?>
<li> <strong><?= $each['name']; ?></strong>
<ul class="list-group">
    <?php foreach( $eachfiles as $key => $value) :?>
      <?php 
        $path = $dir.'/'.$each['name'].'/'.$value;
      ?>

  <li class="list-group-item"><input name = "files[]" value = "<?= $path ;?>" type="checkbox"> <?= $value ?>

<span style="float:right;"><?= $eachtitles[$key]; ?></span></li>


  <?php endforeach ;?>
</ul>
</li>
<?php endforeach; ?>

</ul>




                 

                

              </div>
            </div>
          </div>

<div class = "card shadow mb-4" >
  
  
  <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Users</h6>
  </div>

  <div class = "">
    <?php if(count($obj->GetUsers()) > 0) :?>
      <ul class="list-group">
      <?php foreach($obj->GetUsers() as $item) :?>

  <li class="list-group-item"><input name = "users[]"value = "<?= $item['email'] ;?>" type="checkbox"> <?= $item['firstname'].' '.$item['lastname'] ?></li>


      <?php endforeach ;?>
    </ul>

    <?php endif ;?>
    
  </div>

</div>

        <div clas = "form-control">
                   <button name="assign-files" type="submit" class="btn btn-primary">Assign</button> 

                 </div>
</form>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

  <script src="https://cdn.jsdelivr.net/gh/mar10/fancytree@2/dist/jquery.fancytree-all-deps.min.js"></script>
  
  <?php
    $d = '[
            {title: "Node 1"},
            {title: "Node 2", key: "id2"},
            {title: "Folder 3", folder: true, children: [
                {title: "Node 3.1"},
                {title: "Node 3.2"}
            ]},
            {title: "Folder 2", folder: true}
        ]';

        $mat = [];

      foreach($obj->GetFiles() as $each) {

        $fuck = [];
        

        foreach(json_decode($each['files'] , true) as $key => $value) {

           $fuck[] = ['title' => $value];

        }
        

        $mat[] = ['title' => $each['name'], 'folder'=> true, 'children' => $fuck];
        
        
        

        
        
        
        
      




      }

      $mat = json_encode($mat);


  ?>
   <script>
      
    /*  
    $("#tree").fancytree({
        checkbox: true,
        source: <?= $mat; ?>,
        activate: function(event, data){
            $("#statusLine").text("Active node: " + data.node);
        }
    });

    */
    
    </script>

</body>

</html>
