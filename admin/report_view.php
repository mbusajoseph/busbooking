<?php  
include('../functions.php'); 
 
if (!isAdmin()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
} 
 
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fine Bookings Admin</title>
	<!-- Bootstrap Styles-->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="../assets/fontawesome/css/all.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="custom-styles.css" rel="stylesheet" />
</head>
    
    
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="header-admin.php">CROWN BOOKINGS</a>
            </div> 
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu" style="display: block; padding: 10px; z-index: 1;">

                    <li>
                        <a href="header-admin.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
					<li>
                        <a href="bookings_view.php"><i class="fa fa-money"></i>Bookings</a>
                    </li>
                    <li>
                        <a href="buses_view.php"><i class="fa fa-truck"></i>Buses</a>
                    </li>
                    
                    <li>
                        <a href="seats_view.php"><i class="fa fa-sitemap"></i>Seats</a>
                    </li>
                    <li>
                        <a href="availability_view.php"><i class="fa fa-check-circle"></i> Availability</a>
                    </li>
                    <li>
                        <a href="routes_view.php"><i class="fa fa-road"></i> Routes</a>
                    </li>
                    <li>
                        <a href="report_view.php"><i class="fa fa-chart-line"></i> Report</a>
                    </li>    

                        </ul>
                  
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Welcome 
                            
                            <small> 
                            <div>
       <?php  if (isset($_SESSION['user'])) : ?>
       <strong><?php echo $_SESSION['user']['username']; ?></strong>
 
     <small>
         <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
         <br>
         <a href="../index.php?logout='1'" style="color: red;">logout</a>
         &nbsp; <a href="create_user.php"> + add user</a>
       </small> 
 
    <?php endif ?>
                </div>
                            </small>
                        </h1>
                     
                    </div>
                  </div> 
                
                <!--user widgets-->
 <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-body">
                                <i class="fa fa-users fa-5x"></i>
<!--                                <h3>number of customers to go here</h3>-->
                            </div>
                            <div class="panel-footer back-footer-red">
                                <a href="customers_view.php" style="text-decoration: none;color: white"><strong>Customers</strong></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-brown">
                            <div class="panel-body">
                                <i class="fas fa-dollar-sign fa-5x"></i>
<!--                                <h3>number of bookings to go here</h3>-->
                            </div>
                            <div class="panel-footer back-footer-brown">
                                <a href="bookings_view.php" style="text-decoration: none;color: white"><strong>Bookings</strong></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body">
                                <i class="fa fa fa-calendar fa-5x"></i>
                                <h3><?php $today=date('D/M/d/Y'); echo $today; ?></h3>
                            </div>
                            <div class="panel-footer back-footer-green">
                                <strong>Date</strong>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-body">
                                <i class="fa fa-user fa-5x"></i>
                                <h3><?php echo $_SESSION['user']['username']; ?><?php echo ucfirst($_SESSION['user']['user_type']); ?></h3>
                            </div>
                            <div class="panel-footer back-footer-blue">
                                <a href="<?php echo PREPEND_PATH; ?>membership_profile.php" style="text-decoration:none;color: white"><strong>Account</strong></a>

                            </div>
                        </div>
                    </div>
                </div>
                
<!--admin widgets row-->
 <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body">
                                <i class="fa fa-truck fa-5x"></i>
                                <h3></h3>
                            </div>
                            <div class="panel-footer back-footer-green">
                                <a href="buses_view.php" style="text-decoration: none;color: white"><strong>Buses</strong></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-body">
                                <i class="fa fa-sitemap fa-5x"></i>
                                <h3> </h3>
                            </div>
                            <div class="panel-footer back-footer-blue">
                                <a href="seats_view.php" style="text-decoration: none;color: white"><strong>Seats</strong></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-body">
                                <i class="fa fa fa-check-circle fa-5x"></i>
                                <h3> </h3>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-brown">
                            <div class="panel-body">
                                <i class="fa fa-road fa-5x"></i>
                                <h3> </h3>
                            </div>
                            <div class="panel-footer back-footer-brown">
                               <a href="routes_view.php" style="text-decoration: none;color: white"> <strong>Routes</strong></a>

                            </div>
                        </div>
                    </div>
                </div>
                <!--row ends here-->

               <div class="card mt-2">
                   <div class="card-header py-1">
                       <h5>Report</h5>
                   </div>
                   <div class="card-body">
                       <table class="table table-borderless shadow">
                           <thead>
                            <th>BUS (No. Plate)</th>
                            <th>SEAT NUMBER</th>
                            <th>CUSTOMER</th>
                            <th>PHONE NUMBER</th>
                            <th>CHARGE</th>
                            <th>DEPARTURE</th>
                            <th>BOOKED <ON></ON></th>
                           </thead>
                           <tbody>
                               <?php foreach ($report as $key => $detail): ?>
                               <tr>
                                   <td><?php echo $detail['bus'] ?></td>
                                   <td><?php echo $detail['seat'] ?></td>
                                   <td><?php echo $detail['booked_by'] ?></td>
                                   <td><?php echo $detail['phone'] ?></td>
                                   <td><?php echo number_format($detail['amount']) ?></td>
                                   <td><?php echo $detail['departure'] ?></td>
                                   <td><?php echo $detail['date_booked'] ?></td>
                               </tr>
                               <?php endforeach ?>
                           </tbody>
                       </table>
                   </div>
               </div>
                
                 <!-- /. ROW  -->
                
				 <footer>
                     <strong>
                     <p>
                         <center>Bus online Booking System. Developed By: BIST EVENING group 1
                              
                     </center> 
                         </p>
                     </strong>
                </footer>
				</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
   <script type="text/javascript" src="../assets/js/popper.min.js"></script>
   <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    </body>
</html>
