

<?php
  session_start();
  //error_reporting(0);
  include('includes/dbconnection.php');
  if (strlen($_SESSION['sturecmsstuid']==0)) {
    header('location:logout.php');
    } else{
    
    ?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
    
      <title>file upload</title>
      <!-- plugins:css -->
      <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
      <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
      <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
      <!-- endinject -->
      <!-- Plugin css for this page -->
      <link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
      <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">
      <!-- End plugin css for this page -->
      <!-- inject:css -->
      <!-- endinject -->
      <!-- Layout styles -->
      <link rel="stylesheet" href="./css/style.css">
      <!-- End layout styles -->
    
    </head>
    <body>
      <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
      <?php include_once('includes/header.php');?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_sidebar.html -->
          <?php include_once('includes/sidebar.php');?>
          <!-- partial -->
          <div class="main-panel">
            <div class="content-wrapper">
              <div class="row purchace-popup">
                <div class="col-12 stretch-card grid-margin">
                  <div class="card card-secondary">
                    <span class="card-body d-lg-flex align-items-center">
                    <form action="upload-file.php" method="post" class="mb-lg-0" enctype="multipart/form-data"> Select File
                    <input type="file" name="anyfile" id="anyfile">
                      <input type="submit" class="btn btn-warning purchase-button btn-sm my-1 my-sm-0 ml-auto" value="upload file" name="submit">           
                      <?php
                          if (isset($_FILES['anyfile'])) {
                            $FileName = $_FILES['anyfile']['name'];
                            $TmpName = $_FILES['anyfile']['tmp_name'];
                            
                            if (move_uploaded_file($TmpName, $FileName)) {
                              echo "File uploaded successfully.";
                          
                              // Insert file details into the database table
                              $query = "INSERT INTO files (`file-name`) VALUES ('$FileName')";
                              $result = $dbh->query($query); // Assuming $dbh is the PDO database connection object
                          
                              if ($result) {
                                  echo " File details stored in the database.";
                              } else {
                                  echo " Failed to store file details in the database.";
                              }
                          } else {
                              echo " Failed to upload the file";
                          }
                          
                          }
                      ?>
                    </form>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         <?php include_once('includes/footer.php');?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="./vendors/chart.js/Chart.min.js"></script>
    <script src="./vendors/moment/moment.min.js"></script>
    <script src="./vendors/daterangepicker/daterangepicker.js"></script>
    <script src="./vendors/chartist/chartist.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="./js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html><?php }  ?>