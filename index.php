<?php 
include 'cn.php';
session_start();
if(isset($_SESSION['username'])) {

$agentStyle = $studentStyle = $userStyle = $roleStyle = "";
if($_SESSION["role"] == 2){
    $agentStyle = $studentStyle = $userStyle = $roleStyle = "display:none";
    if(in_array(25, $_SESSION["permission"])) {
        $agentStyle = "";
    }
    if(in_array(26, $_SESSION["permission"])) {
        $studentStyle = "";
    }
    if(in_array(27, $_SESSION["permission"])) {
        $userStyle = "";
    }
    if(in_array(28, $_SESSION["permission"])) {
        $roleStyle = "";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--  Title -->
    <title>Looadmin</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.ico" />
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="dist/libs/owl.carousel/dist/assets/owl.carousel.min.css">
    
    <!-- Core Css -->
    <link  id="themeColors"  rel="stylesheet" href="dist/css/style.min.css" />
  </head>
  <body>
    <!-- Preloader -->
    <div class="preloader">
      <img src="favicon.ico" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!-- Preloader -->
    <div class="preloader">
      <img src="favicon.ico" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme"  data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <!-- Sidebar Start -->
      <?php include("aside.php"); ?>
      <!--  Sidebar End -->
      <!--  Main wrapper -->
      <div class="body-wrapper">
        <!--  Header Start -->
       <?php include("header.php"); ?>
        <!--  Header End -->
        <div class="container-fluid">
          <!--  Owl carousel -->
          
          
           <div class="row">
                <div class="col-lg-3 col-md-3">
                  <div class="card text-center">
                      <a href="agents.php">
                    <div class="card-body" style="background:#EBF3FE;">
                        <?
      include 'cn.php';                                                  
 $query8 = "SELECT COUNT(*) AS SUM FROM staff";
$result8 = mysqli_query($con,$query8);
$rows8 = mysqli_fetch_assoc($result8);
$r= $rows8['SUM'];
                                                        ?>
                      <img src="agents.png" class="rounded-1 img-fluid" width="90" />
                      <div class="mt-n2">
                       
                        <h3 class="card-title mt-3">Total Agencies</h3>
                        <h4 class="mb-0 fs-5"><?echo $r; ?></h4>
                        
                      </div>
                      
                    </div>
                    </a>
                  </div>
                </div>
                
                
                
                <div class="col-lg-3 col-md-3">
                  <div class="card text-center">
                      <a href="users.php">
                    <div class="card-body" style="background:#EBF3FE;">
                        <?
       include 'cn.php';                                                  
 $queryu8 = "SELECT COUNT(*) AS SUM FROM users";
$resultu8 = mysqli_query($con,$queryu8);
$rowsu8 = mysqli_fetch_assoc($resultu8);
$ru= $rowsu8['SUM'];
                                                        ?>
                      <img src="users.png" class="rounded-1 img-fluid" width="90" />
                      <div class="mt-n2">
                       
                        <h3 class="card-title mt-3">Total Users</h3>
                        <h4 class="mb-0 fs-5"><?echo $ru; ?></h4>
                        
                      </div>
                      
                    </div>
                    </a>
                  </div>
                </div>
                
                
                 <div class="col-lg-3 col-md-3">
                  <div class="card text-center">
                      <a href="all-students.php">
                    <div class="card-body" style="background:#EBF3FE;">
                         
                        <?
      include 'cn.php';                                                  
 $querys8 = "SELECT COUNT(*) AS SUM FROM students";
$results8 = mysqli_query($con,$querys8);
$rowss8 = mysqli_fetch_assoc($results8);
$rs= $rowss8['SUM'];
                                                        ?>
                      <img src="users.png" class="rounded-1 img-fluid" width="90" />
                      <div class="mt-n2">
                       
                        <h3 class="card-title mt-3">Total Students</h3>
                        <h4 class="mb-0 fs-5"><?echo $rs; ?></h4>
                        
                      </div>
                      
                    </div>
                    </a>
                  </div>
                </div>
                
                
                <div class="col-lg-3 col-md-3">
                  <div class="card text-center">
                       <a href="roles.php">
                    <div class="card-body" style="background:#EBF3FE;">
                        <?
       include 'cn.php';                                                  
 $queryt8 = "SELECT COUNT(*) AS SUM FROM department";
$resultt8 = mysqli_query($con,$queryt8);
$rowst8 = mysqli_fetch_assoc($resultt8);
$rt= $rowst8['SUM'];
                                                        ?>
                      <img src="management_3975182.png" class="rounded-1 img-fluid" width="90" />
                      <div class="mt-n2">
                       
                        <h3 class="card-title mt-3">Total Roles</h3>
                        <h4 class="mb-0 fs-5"><?echo $rt; ?></h4>
                        
                      </div>
                      
                    </div>
                    </a>
                  </div>
                </div>
         
        </div>
        
        <div class="row">
          
            <div class="col-lg-8 d-flex align-items-strech">
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-sm-flex d-block align-items-center justify-content-between mb-7">
                    <div class="mb-3 mb-sm-0">
                      <h5 class="card-title fw-semibold">Agencies</h5>
                     
                    </div>
                    <!--<div>-->
                    <!--  <select class="form-select">-->
                    <!--    <option value="1">March 2023</option>-->
                    <!--    <option value="2">April 2023</option>-->
                    <!--    <option value="3">May 2023</option>-->
                    <!--    <option value="4">June 2023</option>-->
                    <!--  </select>-->
                    <!--</div>-->
                  </div>
                  <div class="table-responsive">
                    <table class="table align-middle text-nowrap mb-0">
                      <thead>
                        <tr class="text-muted fw-semibold">
                          <th scope="col" class="ps-0">Agency Name</th>
                          <th scope="col">Director Name</th>
                          <th scope="col">Status</th>
                          <!--<th scope="col">Students</th>-->
                        </tr>
                      </thead>
                      <tbody class="border-top">
                          <?php
    
include 'cn.php';
        $sqla ="SELECT * FROM `staff` order by id desc limit 6 ";
        $runa =mysqli_query($con,$sqla);
        $i=1;
         while($rowa = $runa->fetch_assoc()) {

    ?>
                        <tr>
                          <td class="ps-0">
                            <div class="d-flex align-items-center">
                              <!--<div class="me-2 pe-1">-->
                              <!--  <img src="agentprofile/<?php// echo $rowa['profile'];  ?>" class="rounded-circle" width="40" height="40" alt="">-->
                              <!--</div>-->
                              <div>
            
                               <h6 class="fw-semibold mb-1"><a href="view-agent.php?id=<?php echo $rowa['id']; ?>" style="color:#000;"><?php echo $rowa['agencyname'];  ?></a></h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p class="mb-0 fs-3"><?php echo $rowa['directorname'];  ?></p>
                          </td>
                          <td>
                             <?php
                     if( $row['status']==0 ){
                     ?>
                       <span class="badge fw-semibold py-1 w-85 bg-light-success text-success">Active</span>
                      <?php }else{ ?>
                       <span class="badge fw-semibold py-1 w-85 bg-light-danger text-danger">Inactive</span>
                      <?php } ?>
                          </td>
                          <!--<td>-->
                          <!--  <p class="fs-3 text-dark mb-0">$3.9K</p>-->
                          <!--</td>-->
                        </tr>
                        <?php } ?>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <h5 class="card-title fw-semibold">Announcements</h5>
                <?php
    
include 'cn.php';
        $sqlan ="SELECT * FROM `announcements`";
        $runan =mysqli_query($con,$sqlan);
        $i=1;
         while($rowan = $runan->fetch_assoc()) {

    ?>
                  <div class="mt-4 pb-3 border-bottom">
                    <div class="d-flex align-items-center">
                        <?php
                     if( $rowan['announce_type']==News ){
                     ?>
                        <span class="bg-light-primary text-primary badge"><i class="ti ti-article"></i> News</span>
                      <?php } elseif( $rowan['announce_type']==Event ){ ?>
                      <span class="bg-light-warning text-warning badge"><i class="ti ti-calendar-event"></i> Event</span>
                      <?php } elseif( $rowan['announce_type']==Holiday ){ ?>
                      <span class="bg-light-success text-success badge"><i class="ti ti-calendar-event"></i> Holiday</span>
                      <?php } ?>
                     
            <span class="fs-3 ms-auto"><?php echo $rowan['date'];?></span>
                    </div>
                    <br> 
                    <span class="fs-3 lh-sm"><?php echo $rowan['description'];?></span>
                   
                  </div>
                 
                  <?php } ?>
                </div>
              </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
             <div class="card w-100 position-relative overflow-hidden">
   <div class="card-body">
      <div class="d-flex align-items-center justify-content-between mb-4">
         <h5 class="card-title mb-0 fw-semibold"> Students </h5>
         <div>
            <select class="form-select text-dark" " id="monthSelect" onchange="handleChange()">
               
            </select>
         </div>
      </div>
      <div id="most-visited-embeded" style="width: 990px; height: 265px;">
         
            
         </div>
      </div>
      <!--<div class="d-flex align-items-center justify-content-center">-->
      <!--  <div class="me-4">-->
      <!--    <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>-->
      <!--    <span>San Francisco</span>-->
      <!--  </div>-->
      <!--  <div>-->
      <!--    <span class="round-8 bg-secondary rounded-circle me-2 d-inline-block"></span>-->
      <!--    <span>Diego</span>-->
      <!--  </div>-->
      <!--</div>-->
   </div>
</div>
            </div>
            
           
        </div>
        
        
      </div>
      <div class="dark-transparent sidebartoggler"></div>
    <div class="dark-transparent sidebartoggler"></div>
    </div>
    <!--  Shopping Cart -->
    <div class="offcanvas offcanvas-end shopping-cart" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header py-4">
        <h5 class="offcanvas-title fs-5 fw-semibold" id="offcanvasRightLabel">Shopping Cart</h5>
        <span class="badge bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
      </div>
      <div class="offcanvas-body h-100 px-4 pt-0" data-simplebar>
        <ul class="mb-0">
          <li class="pb-7">
            <div class="d-flex align-items-center">
              <img src="dist/images/products/product-1.jpg" width="95" height="75" class="rounded-1 me-9 flex-shrink-0" alt="" />
              <div>
                <h6 class="mb-1">Supreme toys cooker</h6>
                <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                <div class="d-flex align-items-center justify-content-between mt-2">
                  <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                  <div class="input-group input-group-sm w-50">
                    <button class="btn border-0 round-20 minus p-0 bg-light-success text-success " type="button" id="add1"> - </button>
                    <input type="text" class="form-control round-20 bg-transparent text-muted fs-2 border-0  text-center qty" placeholder="" aria-label="Example text with button addon" aria-describedby="add1" value="1" />
                    <button class="btn text-success bg-light-success  p-0 round-20 border-0 add" type="button" id="addo2"> + </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="pb-7">
            <div class="d-flex align-items-center">
              <img src="dist/images/products/product-2.jpg" width="95" height="75" class="rounded-1 me-9 flex-shrink-0" alt="" />
              <div>
                <h6 class="mb-1">Supreme toys cooker</h6>
                <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                <div class="d-flex align-items-center justify-content-between mt-2">
                  <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                  <div class="input-group input-group-sm w-50">
                    <button class="btn border-0 round-20 minus p-0 bg-light-success text-success " type="button" id="add2"> - </button>
                    <input type="text" class="form-control round-20 bg-transparent text-muted fs-2 border-0  text-center qty" placeholder="" aria-label="Example text with button addon" aria-describedby="add2" value="1" />
                    <button class="btn text-success bg-light-success  p-0 round-20 border-0 add" type="button" id="addon34"> + </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="pb-7">
            <div class="d-flex align-items-center">
              <img src="dist/images/products/product-3.jpg" width="95" height="75" class="rounded-1 me-9 flex-shrink-0" alt="" />
              <div>
                <h6 class="mb-1">Supreme toys cooker</h6>
                <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                <div class="d-flex align-items-center justify-content-between mt-2">
                  <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                  <div class="input-group input-group-sm w-50">
                    <button class="btn border-0 round-20 minus p-0 bg-light-success text-success " type="button" id="add3"> - </button>
                    <input type="text" class="form-control round-20 bg-transparent text-muted fs-2 border-0  text-center qty" placeholder="" aria-label="Example text with button addon" aria-describedby="add3" value="1" />
                    <button class="btn text-success bg-light-success  p-0 round-20 border-0 add" type="button" id="addon3"> + </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <div class="align-bottom">
          <div class="d-flex align-items-center pb-7">
            <span class="text-dark fs-3">Sub Total</span>
            <div class="ms-auto">
              <span class="text-dark fw-semibold fs-3">$2530</span>
            </div>
          </div>
          <div class="d-flex align-items-center pb-7">
            <span class="text-dark fs-3">Total</span>
            <div class="ms-auto">
              <span class="text-dark fw-semibold fs-3">$6830</span>
            </div>
          </div>
          <a href="eco-checkout.html" class="btn btn-outline-primary w-100">Go to shopping cart</a>
        </div>
      </div>
    </div>

    <!--  Mobilenavbar -->
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar" aria-labelledby="offcanvasWithBothOptionsLabel">
      <nav class="sidebar-nav scroll-sidebar">
        <div class="offcanvas-header justify-content-between">
          <img src="favicon.ico" alt="" class="img-fluid">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body profile-dropdown mobile-navbar" data-simplebar=""  data-simplebar>
          <ul id="sidebarnav">
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span>
                  <i class="ti ti-apps"></i>
                </span>
                <span class="hide-menu">Apps</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level my-3">
                <li class="sidebar-item py-2">
                  <a href="#" class="d-flex align-items-center">
                    <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-chat.svg" alt="" class="img-fluid" width="24" height="24">
                    </div>
                    <div class="d-inline-block">
                      <h6 class="mb-1 bg-hover-primary">Chat Application</h6>
                      <span class="fs-2 d-block fw-normal text-muted">New messages arrived</span>
                    </div>
                  </a>
                </li>
                <li class="sidebar-item py-2">
                  <a href="#" class="d-flex align-items-center">
                    <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-invoice.svg" alt="" class="img-fluid" width="24" height="24">
                    </div>
                    <div class="d-inline-block">
                      <h6 class="mb-1 bg-hover-primary">Invoice App</h6>
                      <span class="fs-2 d-block fw-normal text-muted">Get latest invoice</span>
                    </div>
                  </a>
                </li>
                <li class="sidebar-item py-2">
                  <a href="#" class="d-flex align-items-center">
                    <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-mobile.svg" alt="" class="img-fluid" width="24" height="24">
                    </div>
                    <div class="d-inline-block">
                      <h6 class="mb-1 bg-hover-primary">Contact Application</h6>
                      <span class="fs-2 d-block fw-normal text-muted">2 Unsaved Contacts</span>
                    </div>
                  </a>
                </li>
                <li class="sidebar-item py-2">
                  <a href="#" class="d-flex align-items-center">
                    <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-message-box.svg" alt="" class="img-fluid" width="24" height="24">
                    </div>
                    <div class="d-inline-block">
                      <h6 class="mb-1 bg-hover-primary">Email App</h6>
                      <span class="fs-2 d-block fw-normal text-muted">Get new emails</span>
                    </div>
                  </a>
                </li>
                <li class="sidebar-item py-2">
                  <a href="#" class="d-flex align-items-center">
                    <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-cart.svg" alt="" class="img-fluid" width="24" height="24">
                    </div>
                    <div class="d-inline-block">
                      <h6 class="mb-1 bg-hover-primary">User Profile</h6>
                      <span class="fs-2 d-block fw-normal text-muted">learn more information</span>
                    </div>
                  </a>
                </li>
                <li class="sidebar-item py-2">
                  <a href="#" class="d-flex align-items-center">
                    <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-date.svg" alt="" class="img-fluid" width="24" height="24">
                    </div>
                    <div class="d-inline-block">
                      <h6 class="mb-1 bg-hover-primary">Calendar App</h6>
                      <span class="fs-2 d-block fw-normal text-muted">Get dates</span>
                    </div>
                  </a>
                </li>
                <li class="sidebar-item py-2">
                  <a href="#" class="d-flex align-items-center">
                    <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-lifebuoy.svg" alt="" class="img-fluid" width="24" height="24">
                    </div>
                    <div class="d-inline-block">
                      <h6 class="mb-1 bg-hover-primary">Contact List Table</h6>
                      <span class="fs-2 d-block fw-normal text-muted">Add new contact</span>
                    </div>
                  </a>
                </li>
                <li class="sidebar-item py-2">
                  <a href="#" class="d-flex align-items-center">
                    <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-application.svg" alt="" class="img-fluid" width="24" height="24">
                    </div>
                    <div class="d-inline-block">
                      <h6 class="mb-1 bg-hover-primary">Notes Application</h6>
                      <span class="fs-2 d-block fw-normal text-muted">To-do and Daily tasks</span>
                    </div>
                  </a>
                </li>
                <ul class="px-8 mt-7 mb-4">
                  <li class="sidebar-item mb-3">
                    <h5 class="fs-5 fw-semibold">Quick Links</h5>
                  </li>
                  <li class="sidebar-item py-2">
                    <a class="fw-semibold text-dark" href="#">Pricing Page</a>
                  </li>
                  <li class="sidebar-item py-2">
                    <a class="fw-semibold text-dark" href="#">Authentication Design</a>
                  </li>
                  <li class="sidebar-item py-2">
                    <a class="fw-semibold text-dark" href="#">Register Now</a>
                  </li>
                  <li class="sidebar-item py-2">
                    <a class="fw-semibold text-dark" href="#">404 Error Page</a>
                  </li>
                  <li class="sidebar-item py-2">
                    <a class="fw-semibold text-dark" href="#">Notes App</a>
                  </li>
                  <li class="sidebar-item py-2">
                    <a class="fw-semibold text-dark" href="#">User Application</a>
                  </li>
                  <li class="sidebar-item py-2">
                    <a class="fw-semibold text-dark" href="#">Account Settings</a>
                  </li>
                </ul>
              </ul>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="app-chat.html" aria-expanded="false">
                <span>
                  <i class="ti ti-message-dots"></i>
                </span>
                <span class="hide-menu">Chat</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="app-calendar.html" aria-expanded="false">
                <span>
                  <i class="ti ti-calendar"></i>
                </span>
                <span class="hide-menu">Calendar</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="app-email.html" aria-expanded="false">
                <span>
                  <i class="ti ti-mail"></i>
                </span>
                <span class="hide-menu">Email</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    
    <!--  Search Bar -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content rounded-1">
          <div class="modal-header border-bottom">
            <input type="search" class="form-control fs-3" placeholder="Search here" id="search" />
            <span data-bs-dismiss="modal" class="lh-1 cursor-pointer">
              <i class="ti ti-x fs-5 ms-3"></i>
            </span>
          </div>
          <div class="modal-body message-body" data-simplebar="">
            <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
            <ul class="list mb-0 py-2">
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="#">
                  <span class="fs-3 text-black fw-normal d-block">Modern</span>
                  <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="#">
                  <span class="fs-3 text-black fw-normal d-block">Dashboard</span>
                  <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="#">
                  <span class="fs-3 text-black fw-normal d-block">Contacts</span>
                  <span class="fs-3 text-muted d-block">/apps/contacts</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="#">
                  <span class="fs-3 text-black fw-normal d-block">Posts</span>
                  <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="#">
                  <span class="fs-3 text-black fw-normal d-block">Detail</span>
                  <span class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="#">
                  <span class="fs-3 text-black fw-normal d-block">Shop</span>
                  <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="#">
                  <span class="fs-3 text-black fw-normal d-block">Modern</span>
                  <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="#">
                  <span class="fs-3 text-black fw-normal d-block">Dashboard</span>
                  <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="#">
                  <span class="fs-3 text-black fw-normal d-block">Contacts</span>
                  <span class="fs-3 text-muted d-block">/apps/contacts</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="#">
                  <span class="fs-3 text-black fw-normal d-block">Posts</span>
                  <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="#">
                  <span class="fs-3 text-black fw-normal d-block">Detail</span>
                  <span class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="#">
                  <span class="fs-3 text-black fw-normal d-block">Shop</span>
                  <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
   <!--  Customizer -->
   <button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
    <i class="ti ti-settings fs-7" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Settings"></i>
  </button>
  <div class="offcanvas offcanvas-end customizer" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" data-simplebar="">
    <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
      <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">Settings</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-4">
      <div class="theme-option pb-4">
        <h6 class="fw-semibold fs-4 mb-1">Theme Option</h6>
        <div class="d-flex align-items-center gap-3 my-3">
          <a href="javascript:void(0)"  onclick="toggleTheme('dist/css/style.min.css')"  class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 light-theme text-dark">
            <i class="ti ti-brightness-up fs-7 text-primary"></i>
            <span class="text-dark">Light</span>
          </a>
          <a href="javascript:void(0)" onclick="toggleTheme('dist/css/style-dark.min.css')" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 dark-theme text-dark">
            <i class="ti ti-moon fs-7 "></i>
            <span class="text-dark">Dark</span>
          </a>
        </div>
      </div>
      <div class="theme-direction pb-4">
        <h6 class="fw-semibold fs-4 mb-1">Theme Direction</h6>
        <div class="d-flex align-items-center gap-3 my-3">
          <a href="index.html" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">
            <i class="ti ti-text-direction-ltr fs-6 text-primary"></i>
            <span class="text-dark">LTR</span>
          </a>
          <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/rtl/index.html" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">
            <i class="ti ti-text-direction-rtl fs-6 text-dark"></i>
            <span class="text-dark">RTL</span>
          </a>
        </div>
      </div>
      <div class="theme-colors pb-4">
        <h6 class="fw-semibold fs-4 mb-1">Theme Colors</h6>
        <div class="d-flex align-items-center gap-3 my-3">
          <ul class="list-unstyled mb-0 d-flex gap-3 flex-wrap change-colors">
            <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
              <a href="javascript:void(0)" class="rounded-circle position-relative d-block customizer-bgcolor skin1-bluetheme-primary active-theme " onclick="toggleTheme('dist/css/style.min.css')"  data-color="blue_theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="BLUE_THEME"><i class="ti ti-check text-white d-flex align-items-center justify-content-center fs-5"></i></a>
            </li>
            <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
              <a href="javascript:void(0)"  class="rounded-circle position-relative d-block customizer-bgcolor skin2-aquatheme-primary " onclick="toggleTheme('dist/css/style-aqua.min.css')"  data-color="aqua_theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="AQUA_THEME"><i class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
            </li>
            <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
              <a href="javascript:void(0)" class="rounded-circle position-relative d-block customizer-bgcolor skin3-purpletheme-primary" onclick="toggleTheme('dist/css/style-purple.min.css')"  data-color="purple_theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="PURPLE_THEME"><i class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
            </li>
            <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
              <a href="javascript:void(0)" class="rounded-circle position-relative d-block customizer-bgcolor skin4-greentheme-primary" onclick="toggleTheme('dist/css/style-green.min.css')"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="GREEN_THEME"><i class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
            </li>
            <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
              <a href="javascript:void(0)" class="rounded-circle position-relative d-block customizer-bgcolor skin5-cyantheme-primary" onclick="toggleTheme('dist/css/style-cyan.min.css')"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="CYAN_THEME"><i class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
            </li>
            <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
              <a href="javascript:void(0)" class="rounded-circle position-relative d-block customizer-bgcolor skin6-orangetheme-primary" onclick="toggleTheme('dist/css/style-orange.min.css')"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ORANGE_THEME"><i class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="layout-type pb-4">
        <h6 class="fw-semibold fs-4 mb-1">Layout Type</h6>
        <div class="d-flex align-items-center gap-3 my-3">
          <a href="index.html" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">              
            <i class="ti ti-layout-sidebar fs-6 text-primary"></i>
            <span class="text-dark">Vertical</span>
          </a>
          <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/horizontal/index.html" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">
            <i class="ti ti-layout-navbar fs-6 text-dark"></i>
            <span class="text-dark">Horizontal</span>
          </a>
        </div>
      </div>
      <div class="container-option pb-4">
        <h6 class="fw-semibold fs-4 mb-1">Container Option</h6>
        <div class="d-flex align-items-center gap-3 my-3">
          <a href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 boxed-width text-dark">              
            <i class="ti ti-layout-distribute-vertical fs-7 text-primary"></i>
            <span class="text-dark">Boxed</span>
          </a>
          <a href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 full-width text-dark">
            <i class="ti ti-layout-distribute-horizontal fs-7"></i>
            <span class="text-dark">Full</span>
          </a>
        </div>
      </div>
      <div class="sidebar-type pb-4">
        <h6 class="fw-semibold fs-4 mb-1">Sidebar Type</h6>
        <div class="d-flex align-items-center gap-3 my-3">
          <a  href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 fullsidebar">              
            <i class="ti ti-layout-sidebar-right fs-7"></i>
            <span class="text-dark">Full</span>
          </a>
          <a  href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center text-dark sidebartoggler gap-2">
            <i class="ti ti-layout-sidebar fs-7"></i>
            <span class="text-dark">Collapse</span>
          </a>
        </div>
      </div>
      <div class="card-with pb-4">
        <h6 class="fw-semibold fs-4 mb-1">Card With</h6>
        <div class="d-flex align-items-center gap-3 my-3">
          <a href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 text-dark cardborder">              
            <i class="ti ti-border-outer fs-7"></i>
            <span class="text-dark">Border</span>
          </a>
          <a href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 cardshadow">
            <i class="ti ti-border-none fs-7"></i>
            <span class="text-dark">Shadow</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  
 <?php
// Assuming you have a database connection established in cn.php
include 'cn.php';
// Get current month and year
$currentMonth = date('m')-1;
$currentYear = date('Y');

// Get the month from $_GET or use the current month
if (!empty($_GET['month'])) {
    $month = mysqli_real_escape_string($con, $_GET['month']);
} else {
    $month = $currentMonth;
}

// Calculate the number of days in the current month
$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $currentYear);

// Initialize arrays for chart data
// $categories = [];
$studentsData = [];


// Query to fetch the sum of students for each day in the current month
$query = "SELECT DAY(created) AS day, COUNT(*) AS total_students 
          FROM students 
          WHERE MONTH(created) = $month AND YEAR(created) = $currentYear 
          GROUP BY DAY(created)";
$result = mysqli_query($con, $query);

// Initialize an array to hold fetched data
$studentCountByDay = array_fill(1, $daysInMonth, 0); // Initialize all days with 0 students

// Fetch data from the database and update the student count for each day
while ($row = mysqli_fetch_assoc($result)) {
    $day = (int)$row['day'];
    $studentCountByDay[$day] = (int)$row['total_students'];
    print_r( $studentCountByDay[$day]);
}

// Populate the studentsData array based on fetched data
// for ($i = 1; $i <= $daysInMonth; $i++) {
for ($i = 1; $i <= $daysInMonth; $i++) {
    $studentsData[] = $studentCountByDay[$i];
}
// Shift the indices for studentsData from [0] to [30] to [1] to [31]
array_unshift($studentsData, null);
unset($studentsData[0]);


$categories = array_keys($studentsData);

array_unshift($categories, null);
unset($categories[0]);


// Take only the first 6 elements from the arrays
// $studentsData = array_slice($studentsData, 0, 6);
// $categories = array_slice($categories, 0, 6);

// Close the database connection
mysqli_close($con);
?>

  <!--  Customizer -->
    <!--  Import Js Files -->
    <script src="dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="dist/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!--  core files -->
    <script src="dist/js/app.min.js"></script>
    <script src="dist/js/app.init.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <script src="dist/js/custom.js"></script>
    <!--  current page js files -->
    <script src="dist/libs/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="dist/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="dist/js/dashboard.js"></script>
    <script src="dist/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="dist/js/widget/card-custom.js"></script>
     <script src="dist/js/apps/chat.js"></script>
    <script src="dist/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="dist/js/widgets-charts.js"></script>
    
    <script>
   // Get the select element
var selectElement = document.getElementById('monthSelect');

// Function to handle the change event
function handleChange() {
    var selectedMonth = selectElement.options[selectElement.selectedIndex].value;
    // Append the selected month to the URL
    window.location.href = window.location.pathname + '?month=' + selectedMonth;
}

// Function to generate options for the past three months
function generatePastThreeMonthsOptions(selectedValue) {

    var currentMonth = new Date().getMonth() + 1; // Adding 1 to make it 1-indexed
    var currentYear = new Date().getFullYear();

    var months = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ];

    var numberOfMonths = 3;
    for (var i = currentMonth - 1; i >= Math.max(1, currentMonth - numberOfMonths); i--) {
        var option = document.createElement('option');
        option.value = i;
        option.textContent = months[i - 1] + ' ' + (i <= currentMonth ? currentYear : currentYear - 1);
        if (i == selectedValue) {
            option.selected = true;
        }
        selectElement.appendChild(option);
    }
}

// Parse the URL and get the 'month' parameter value
var urlParams = new URLSearchParams(window.location.search);
var selectedMonth = urlParams.get('month');

// Generate options for the past three months with the selected value
generatePastThreeMonthsOptions(selectedMonth);



 // =====================================
  // Most Visited
  // =====================================
 // Function to get the number of days in a specific month
 var studentsData = <?php echo json_encode(array_values($studentsData)); ?>;
    var categories = <?php echo json_encode(array_values($categories)); ?>;
    
var options = {
    series: [
        {
            name: "Total Students",
            data:  studentsData,
        },
    ],
    chart: {
        height: 265,
        type: 'bar',
        fontFamily: "Plus Jakarta Sans,sans-serif",
        foreColor: '#adb0bb',
        toolbar: {
            show: false,
        },
        stacked: true,
    },
    colors: ["var(--bs-primary)"],
    plotOptions: {
        bar: {
            borderRadius: [6],
            horizontal: false,
            barHeight: '60%',
            columnWidth: '40%',
            borderRadiusApplication: 'end',
            borderRadiusWhenStacked: 'all',
        }
    },
    stroke: {
        show: false
    },
    dataLabels: {
        enabled: false,
    },
    legend: {
        show: false,
    },
    grid: {
        show: false,
    },
    yaxis: {
        tickAmount: 4,
    },
    xaxis: {
        categories: categories,
        axisTicks: {
            show: false
        }
    },
    tooltip: {
        theme: 'dark',
        fillSeriesColor: false,
        x: {
            show: false
        }
    },
};

var chart = new ApexCharts(document.querySelector("#most-visited-embeded"), options);
chart.render();
    </script>
  </body>
</html>
<?php
}
else {
  header("location:login.php");
}
?>