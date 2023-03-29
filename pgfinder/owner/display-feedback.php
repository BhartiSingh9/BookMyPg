<?php
session_start();
require './class/dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>BookMyPG PGOwner</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->

    <!-- partial -->
    <?php 
    include('./pgownertheme/top-menu.php');
    ?>
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
    <?php
    include('./pgownertheme/sidebar.php');
    ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
              
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Feedback Table</h4> 
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered" style="word-wrap: break-word">
                      <thead>
                        <tr>
                           
                          <th style="font-size:20px">
                            User Name
                          </th>
                          
                          <th style="font-size:20px">
                            Feedback Details
                          </th>
                          <th style="font-size:20px">
                            Feedback Date
                          </th>
                          <th style="font-size:20px">
                            Feedback Reply
                          </th>
                          <th style="font-size:20px">
                            Action
                          </th>
                    
                        </tr>
                      </thead>
                     
                      <tbody class="table-info">
                           <?php
                           $msg="";
                          
                      $selectq=mysqli_query($connection,"SELECT *
FROM
    `tbl_user_master`
    INNER JOIN `tbl_feedback` 
        ON (`tbl_user_master`.`user_id` = `tbl_feedback`.`user_id`)
    INNER JOIN `tbl_pg_master` 
        ON (`tbl_pg_master`.`pg_id` = `tbl_feedback`.`pg_id`) where tbl_pg_master.pg_id ='{$_SESSION['pg_id']}'")or die(mysqli_error($connection));
                     
                          
                          while($arearow = mysqli_fetch_array($selectq))
                          {
                           
                              echo "<tr>";
                              
                             
                              echo "<td>{$arearow['user_fname']}</td>";
                              
                              echo "<td>{$arearow['feedback_details']}</td>";
                              echo "<td>{$arearow['feedback_date']}</td>";
                              echo "<td>{$arearow['feedback_reply']}</td>";
                              echo "<td> <a href='reply-feedback.php?eid={$arearow['feedback_id']}'><img src='myimages/edit.png'>";
                              echo "</tr>";
                             
                          }
                      
                            ?>
                        <tr class="table-info">
                          
                        </tr>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           
              
            
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <?php
        include('./pgownertheme/footer.php');
        ?>
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
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
