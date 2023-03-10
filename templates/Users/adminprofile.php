<!--
=========================================================
* Material Dashboard 2 - v3.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <?= $this->Html->css(['nucleo-icons']) ?>
  <?= $this->Html->css(['nucleo-svg']) ?>
  <?= $this->Html->css(['material-dashboard']) ?>
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
</head>

<body class="g-sidenav-show bg-gray-200">
  <?= $this->element('flash/adminside') ?>
  <div class="main-content position-relative max-height-vh-100 h-100">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
      data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
         
          <h6 class="font-weight-bolder mb-0">Profile</h6>
        </nav>
      
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4"
        style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
      </div>
      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row gx-4 mb-2">
          <div class="col-auto">
           
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                <?php echo $users->first_name; ?>
              </h5>

            </div>
          </div>

          <div class="col-auto my-auto">
            <div class="h-100">
              <h2 class="mb-1">

              </h2>
            </div>

          </div>
          <br>
          <div style="margin-left:300px;margin-top:-70px;">
          
          <?= $this->Html->link(__('Edit Profile'), ['controller'=> 'users', 'action'=>'edit',$users->id], ['class'=> 'btn bg-gradient-primary w-15 my-4 mb-2'],['class' => 'side-nav-item','id'=>'forgot-btn']) ?>

          </div>
          <div class="row">
       
            <div class="row">

              <div class="col-12 col-xl-4">
                <div class="card card-plain h-100">


                  <div class="card-body p-3">


                    <ul class="list-group">
                      <h3>
                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full
                            Name:</strong> &nbsp;
                          <?php echo $users->first_name.'&nbsp'.$users->last_name;?>
                        </li>
                      </h3>

                      <h3>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong>
                          &nbsp;
                          <?php echo $users->email?>
                        </li>
                      </h3>
                      <h3>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Address:</strong>
                          &nbsp;
                          <?php echo $users->address?>
                        </li>
                      </h3>
                      <h3>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Phone:</strong>
                          &nbsp;
                          <?php echo $users->phone?>
                        </li>
                      </h3>
                      <h3>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">City:</strong>
                          &nbsp;
                          <?php echo $users->city?>
                        </li>
                      </h3>
                      <h3>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">State:</strong>
                          &nbsp;
                          <?php echo $users->state?>
                        </li>
                      </h3>
                      <h3>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Zip Code:</strong>
                          &nbsp;
                          <?php echo $users->zip_code?>
                        </li>
                      </h3>
                      <h3>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Country:</strong>
                          &nbsp;
                          <?php echo $users->country?>
                        </li>
                      </h3>


                  </div>

                  <!-- Sidenav Type -->
                  <!-- Navbar Fixed -->

                  <!--   Core JS Files   -->
                  <script src="../assets/js/core/popper.min.js"></script>
                  <script src="../assets/js/core/bootstrap.min.js"></script>
                  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
                  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
                  <script>
                    var win = navigator.platform.indexOf('Win') > -1;
                    if (win && document.querySelector('#sidenav-scrollbar')) {
                      var options = {
                        damping: '0.5'
                      }
                      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
                    }
                  </script>
                  <!-- Github buttons -->
                  <script async defer src="https://buttons.github.io/buttons.js"></script>
                  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
                  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>

                 

</body>

</html>