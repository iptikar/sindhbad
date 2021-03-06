<?php
session_start();


if(!isset($_SESSION['3vmigUCQdJGRrvG-username-agent'])) {

  header('Location:http://'.$_SERVER["HTTP_HOST"].'/dowgroup');
}

// Require controller 
require('../controller/controller.php');

// Get the object 
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
  <link href="../administrator/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../administrator/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../administrator/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../administrator/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
       <?php include 'header.php'; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Assignment </h1>
         
          <?php if(isset($_POST['submit'])) :?>

          <?php if($obj->sendMesasge() == true) :?>
            <div class="alert alert-success" role="alert">
Message Send Successfully.
</div>

          <?php endif; ?>

          <?php endif; ?>
         
         
          
          <p class="mb-4"></a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Shared Files</h6>
            </div>

            <?php
            var_dump($obj->getFilesFromFolder('name'));
            ?>
            <div class="card-body">
              <div class="table-responsive">
                

<div class = "col-md-6">
                <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "post">
                   <div class="form-group">
    <label for="subject">Subject</label>
    <input name = "subject" type="text" class="form-control" id="subject" aria-describedby="emailHelp" placeholder="Subject" #565656
    >
  </div>


        <div class="form-group">
    <label for="message">Message</label>
    
    <textarea id = "message" class="form-control" name = "message" placeholder="Message..."></textarea>
  </div>


<div class="form-group">

<button name = "submit" type="submit" class="btn btn-primary">Send</button>
</div>

</form>



</div>



              </div>
            </div>
          </div>

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
  <script src="../administrator/vendor/jquery/jquery.min.js"></script>
  <script src="../administrator/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../administrator/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../administrator/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../administrator/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../administrator/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../administrator/js/demo/datatables-demo.js"></script>

</body>

</html>
