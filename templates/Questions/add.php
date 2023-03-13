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
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

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
  <?php echo $this->Html->meta('csrfToken', $this->request->getAttribute('csrfToken')); ?>
</head>

<body class="bg-gray-200">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
      
        <!-- End Navbar -->
        <?= $this->element('flash/adminside') ?>
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Add a Question</h4>
                
                </div>
              </div>
              <div class="card-body">
              <?= $this->Form->create($question) ?>
            <fieldset>
                <legend><?= __('Add Question') ?></legend>

                    <select name="course_id" id="course_id">
                        <option value="" disabled selected>Select Course</option>
                        <?php foreach ($course as $course): ?>

                            <option value='<?php echo h($course->id) ?>'><?php echo h($course->course_name) ?></option>
                        <?php
                        endforeach; ?>
                    </select>

                    <select name="content_id" id="content_id" style="width:140px">
                        <option value="Select Content" disabled selected >Select Content</option>
                        <?php foreach ($content as $content): ?>

                            <option value='<?php echo h($content->id) ?>'><?php echo h($content->text) ?></option>
                        <?php
                        endforeach; ?>
                    </select>
                      <!-- 
                   <select name="content_id" id="">
                        <option value="" disabled selected>Select Content</option>
                        <?php foreach ($content as $content): ?>

                            <option value='<?php echo h($content->id) ?>'><?php echo h($content->text) ?></option>
                        <?php
                        endforeach; ?>
                    </select> -->
                   <?php echo $this->Form->control('question'); ?>
                   <?php echo $this->Form->control('option_a'); ?>
                   <?php echo $this->Form->control('option_b'); ?>
                   <?php echo $this->Form->control('option_c'); ?>
                   <?php echo $this->Form->control('option_d'); ?>
                   <?php echo $this->Form->control('answer');  ?>
          

                   <?= $this->Form->button(__('Add'),['class'=>"btn bg-gradient-primary w-100 my-4 mb-2"]) ?>
            <?= $this->Form->end() ?>
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
</body>

</html>
<script>
        $(document).ready(function() {
            var csrfToken = $('meta[name="csrfToken"]').attr('content');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': csrfToken // this is defined in app.php as a js variable
                }
            });
            $("#course_id").on('change', function() {

                var id = $(this).val();
                $("#content_id").find('option').remove();
                $.ajax({
                    type: "post",
                    url: '/questions/getmodel',
                    data: {
                        'id': id
                    },

                    cache: false,
                    success: function(html) {
                        $("#content_id").html(html);
                    }
                });
               
            });

        });
    </script>
    <script>
   $(document).ready(function () { 
     $('form').validate({
      
                rules: {

                  course_id: {
                    required: true,
                    },
                  content_id: {
                    required: true,
                    },
                  question: {
                    required: true,
                    },
        
                  option_a: {
                    required: true,
                    },
                  option_b: {
                    required: true,
                    },
        
                  option_c: {
                    required: true,
                    },
                  option_d: {
                    required: true,
                    },
                  answer: {
                    required: true,
                    },
        
                },

                messages: {
                  course_id:{
                    required: "*Please Select Course Id*",
                  },
                  content_id:{
                    required: "*Please Select Content Id*",
                  },
                  question:{
                    required: "*Please Enter Question Content*",
                  },
                  option_a:{
                    required: "*Please Enter Option A*",
                  },
                  option_b:{
                    required: "*Please Enter Option B*",
                  },
                  option_c:{
                    required: "*Please Enter Option C*",
                  },
                  option_d:{
                    required: "*Please Enter Option D*",
                  },
                  answer:{
                    required: "*Please Enter Answer*",
                  },
                },
                submitHandler: function (form) {
                form.submit();
        }
                   
   });
   });
            
        
</script>