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

  <title>Dow Group Dash Board</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include 'side-menu.php' ;?>



    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

<?php include 'header.php' ;?>
        <!-- Topbar -->
        
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          

          <!-- Content Row -->
         
          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-md-6">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Add User</h6>
                  
                </div>
                <!-- Card Body -->


                <div class="card-body">
                  
                  <?php if(isset($_POST['submit'])) :?>

                  <?php if($obj->CreateUser('submit') === true) :?>


<div class="alert alert-success">
  <strong>Success!</strong> File uploaded successfully.
</div>

<?php else :?>
                    <div class="alert alert-danger">
  <strong>Danger!</strong> <?= $obj->CreateUser('submit');?>
</div>
                  <?php endif ;?>

                  

                  <?php endif ;?>
                  
                   <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "post">
                   
                    <?php if(isset($_POST['add-category'])) :?>

                   <?php if($obj->addFileCategory() === true) :?>

                    <div class="alert alert-success" role="alert">
  Category added sucessfully !.
</div>              
                <?php else :?>


                    <div class="alert alert-danger" role="alert">
  <?=$obj->addFileCategory(); ?>
</div>              
                   <?php endif; ?>

                   <?php endif; ?>



                    <div class="form-group">
    <label for="firstname">Category Name</label>
    <input name="category-name" type="text" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Category Name..." required="">
  </div>


  <?php if(count($obj->getCategory()) > 0) :?>
    <div class="form-group">
    <label for="file-discription">Category</label>
    <select class = "form-control" name = "parent">

    <option value = "">Select Parent</option>

    <?php
    $list = $obj->GetCategories();

    $tree = $obj->GetTreeCategory($list, '', '');

    ?>

    <?= $tree;?>

        
    
</select>
  </div>

<?php endif; ?>



                    <button name = "add-category" type="submit" class="btn btn-primary">Add Category</button>


                


                 </form>


                </div>
              </div>
            </div>



            <!-- Pie Chart -->
            <div class="col-md-6">
              <div class="card shadow ">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Upload File</h6>
                  <div class="dropdown no-arrow">
                   
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      
                    </div>




                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">

    <?php if(isset($_POST['upload'])) :?>

    <?php if($obj->FinalUploadFiles('file') === true ) :?>
        

<div class="alert alert-success">
  <strong>Success!</strong> File uploaded sucessfully.
</div>

<?php else :?>

<div class="alert alert-danger">
  <strong></strong> <?= $obj->FinalUploadFiles('file'); ?>
</div>

    <?php endif; ?>
    <?php endif; ?>
    <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "post" enctype="multipart/form-data">
    

      <div class = "form-group">
                          
       <label class = "col-md-12 control-label">Upload Images</label>

       <div class="form-group"><label class="col-md-2 control-label"></label><div class="col-xs-4"><input type="file" name="file[]" required=""></div><div class="col-xs-4"> <br><input name="title[]" type="text" class="form-control" id="title" placeholder="Please enter file tittel..." required=""> <button type = "button" class = "btn btn-default addButton"><i class = "fa fa-plus"></i></button></div></div>
       

       
    

    </div>

    <div class  =  "added-images" style  =  "min-height:100px;" id = "add-file-120">
                                                  
   
    </div>





<?php if(count($obj->getCategory()) > 0) :?>
    <div class="form-group">
    <label for="file-discription">Category</label>
    <select class = "form-control" name = "category" required>

    




<option value = "">Select Category</option>
<?= $tree; ?>




        
    
</select>
  </div>

<?php endif; ?>



    

   <div class="form-group">
<button name="upload" type="submit" class="btn btn-primary">Upload</button>
</div>
                
</form>



                </div>
              </div>
            </div>
          

          </div>

          <!-- Content Row -->
         

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
  <script src="vendor/chart.js/Chart.min.js"></script>

  <script>
  
/*  
$(document).ready(function (){

$('input[name=file]').change(function () {
      
    
  var discription = $('#file-discription').val();

  if(discription == '') {

    alert('Please type discription about the file');

    return;


  }

    var file = this.files[0];
    
      
    var formData = new FormData();
      
      
      
    formData.append('file', file);
    formData.append('about', discription);
   
    
   
    
    
    var url = '../ajax/uploadimage.php';
      
      
    $.ajax({
    url: url,  //Server script to process data
    type: 'POST',
    data: formData,
    contentType: false,
    processData: false,
    //Ajax events
    success: function(result){
        
        $("input[type=text], textarea, input[type=file]").val("");
        //$('input').val('');
        alert(result);
        
         
    }
      
  });

});

});
*/

jQuery("form").on('click', '.addButton', function(){
        
        /*
        // We need to count the element 
        var images = jQuery('input[name="file[]"]').length;
      
        // Max five files 
        if(images > 6 ) {
          
          jQuery("#file-alert-140").text('Maximun only 5 files allowed.')
          return false ;
          
          }

          */
        
        jQuery("#add-file-120").append('<div class = "form-group" ><label class = "col-md-2 control-label"></label><div class = "col-xs-4"><input type = "file" name = "file[]"  required></div><div class = "col-xs-4"> <br/><input name="title[]" type="text" class="form-control" id="title" placeholder="Please enter file tittel..."required><button type = "button" class = "btn btn-default removeButton"><i class = "fa fa-minus"></i></button></div></div>');

        
        
        });
      

         // Removing the file 
         jQuery("form").on('click', '.removeButton', function(e){
        
        $(this).parents('.form-group').remove();
        //var $row    = $(this).parents('.form-group'),
                //$option = $row.find('[name="option[]"]');

            // Remove element containing the option
            //$row.remove();
      
      });


  </script>

  <!-- Page level custom scripts -->


</body>

</html>
