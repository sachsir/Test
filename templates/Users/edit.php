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
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <!-- <link href="../assets/css/nucleo-icons.css" rel="stylesheet" /> -->

  <!-- Css Files -->
  <?= $this->Html->css(['nucleo-icons']) ?>
  <?= $this->Html->css(['nucleo-svg']) ?>
  <?= $this->Html->css(['material-dashboard']) ?>
  <!-- <link href="../assets/css/nucleo-svg.css" rel="stylesheet" /> -->
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <!-- <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" /> -->
</head>

<body class="bg-gray-200">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        
        <?= $this->element('flash/adminside') ?>
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100"
      style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">User Details</h4>

                </div>
              </div>
      
              <div class="card-body">
                <?= $this->Form->create($user) ?>
           
                    <?= $this->Form->control('first_name',['class'=>'form-control','required'=>false]); ?>
                    <?= $this->Form->control('last_name',['class'=>'form-control','required'=>false]); ?>
                    <?= $this->Form->control('email',['class'=>'form-control','required'=>false]); ?>
                    <?= $this->Form->control('phone',['class'=>'form-control','required'=>false]); ?>
                    <?= $this->Form->control('address',['class'=>'form-control','required'=>false]); ?>
                    <?= $this->Form->control('country',['class'=>'form-control','required'=>false]); ?>
                    <?= $this->Form->control('state',['class'=>'form-control','required'=>false]); ?>
                    <?= $this->Form->control('city',['class'=>'form-control','required'=>false]); ?>
                    <?= $this->Form->control('zip_code',['class'=>'form-control','required'=>false]); ?>

                <br>
                <?= $this->Form->button(__('Save'),['class'=>"btn bg-gradient-primary w-100 my-4 mb-2"]) ?>
                <?= $this->Form->end() ?>

                <div>
                  <?= $this->Html->link(__('Back'), ['controller'=> 'Users', 'action'=>'adminprofile',], ['class'=> 'btn bg-gradient-primary w-100 my-4 mb-2'],['class' => 'side-nav-item','id'=>'forgot-btn']) ?>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
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

  <script>
      

$(document).ready(function() {
    
    jQuery.validator.addMethod("regex", function(value, element, param) { return value.match(new RegExp("^" + param + "$")); });
    var ALPHA_REGEX = "[a-zA-Z]*";
   

  $('form').validate({
    rules:{
        first_name: {
            required: true,
            regex: ALPHA_REGEX,
            minlength:3,
            
        },
        last_name: {
            required: true,
            regex: ALPHA_REGEX,
            minlength:3,
        },
        email: {
            required: true,
        },
        phone: {
            required: true,
            digits: true,
            maxlength: 12,
            minlength:10,  
        },

        address: {
            required: true,
            regex: ALPHA_REGEX,
            minlength:3,
           
        },
        country: {
            required: true,
            regex: ALPHA_REGEX,
           
        },
        state: {
            required: true,
            regex: ALPHA_REGEX,
            
           
        },
        city: {
            required: true,
            regex: ALPHA_REGEX,
           
           
        },
        zip_code: {
            required: true,
            digits: true,
            minlength:5,
           
        },
      
        
    },
    
    messages:{
        first_name: 
        {
        required: "**Please enter First Name**",
        regex : "**Please enter characters only**",
        minlength: "**Minimum length of Firstname should be 3**",
    
    
    },
        last_name: 
        {
        required: "**Please enter Last Name**",
        regex : "**Please enter characters only**",
        minlength: "**Minimum length of Lastname should be 3**",
    
    
    },
        email: "**Please enter Email-id including . and @**",

        phone: {
          required: "**Please enter Phone Number**",
          digits: "**Please enter Digits Only**",
          minlength: "**Minimum length of Phone Number should be 10 digits**",
          maxlength: "**Maximum length of Phone Number should be 12 digits**",
           
        },
        address: {
            required: "**Please enter your Address**",
            regex : "**Please enter characters only**",
            minlength:"**Minimum length of Address should be 3**",
           
        },
       
        country: {
            required: "**Please enter your Country**",
            regex : "**Please enter characters only**",
           
           
        },
        state: {
            required: "**Please enter your State**",
            regex : "**Please enter characters only**",
            
           
        },
        city: {
            required: "**Please enter your City**",
            regex : "**Please enter characters only**",
          
           
        },
        zip_code: {
            required: "**Please enter your Zip Code**",
            digits: "**Please enter Digits Only**",
            minlength:5,
           
        },

      
 
    
  }
})
}); 

                   
    </script>
</body>

</html>