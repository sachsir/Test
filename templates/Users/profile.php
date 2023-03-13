<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>eLEARNING - eLearning HTML Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
    rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->

  <!-- <link href="lib/animate/animate.min.css" rel="stylesheet"> -->
  <!-- <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- <link href="css/style.css" rel="stylesheet"> -->

  <?= $this->Html->css(['usercss/animate.min']) ?>
  <?= $this->Html->css(['usercss/owl.carousel.min']) ?>
  <?= $this->Html->css(['usercss/bootstrap.min']) ?>
  <?= $this->Html->css(['usercss/admin/style']) ?>
  <?= $this->Html->css(['usercss/style']) ?>

  <!-- Customized Bootstrap Stylesheet -->

  <!-- Template Stylesheet -->
</head>

<body>
  <?= $this->element('flash/loginsidenav') ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-2">
        <?= $this->element('flash/adminsidebar') ?>

      </div>
      <div class="col-sm-10">
        <br><br>
        <nav class="navbar navbar-dark bg-dark" style="height:60px; width:1370px" ;>
          <h1 style="color:white; margin-left:30px;">Profile</h1>
        </nav>
        <br><br>
        <?php
                foreach($users as $show){

                    if($show->email == $user->email){
                      ?>


        <div class="col-auto my-auto">
          <div class="h-100">
            <h2 class="mb-1" style="margin-left:20px; ">
              <?php echo $show->first_name; ?>
            </h2>
          </div>

        </div>
        <br>
        <div style="margin-left:350px;margin-top:-90px;">
          
          <?= $this->Html->link(__('Edit Profile'), ['controller'=> 'users', 'action'=>'useredit',$show->id], ['class'=> 'btn bg-gradient-primary w-15 my-4 mb-2'],['class' => 'side-nav-item','id'=>'forgot-btn']) ?>

          </div>
        <div class="row">
          <div class="row">

            <div class="col-12 col-xl-5">
              <div class="card card-plain h-100">


                <div class="card-body p-3">


                  <ul class="list-group">
                    <h4>
                      <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full
                          Name:</strong> &nbsp;
                        <?php echo $show->first_name.'&nbsp'.$show->last_name;?>
                      </li>
                    </h4>

                    <h4>
                      <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp;
                        <?php echo $show->email?>
                      </li>
                    </h4>
                    <h4>
                      <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Address:</strong>
                        &nbsp;
                        <?php echo $show->address?>
                      </li>
                    </h4>
                    <h4>
                      <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Phone:</strong> &nbsp;
                        <?php echo $show->phone?>
                      </li>
                    </h4>
                    <h4>
                      <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">City:</strong> &nbsp;
                        <?php echo $show->city?>
                      </li>
                    </h4>
                    <h4>
                      <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">State:</strong> &nbsp;
                        <?php echo $show->state?>
                      </li>
                    </h4>
                    <h4>
                      <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Zip Code:</strong>
                        &nbsp;
                        <?php echo $show->zip_code?>
                      </li>
                    </h4>
                    <h4>
                      <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Country:</strong>
                        &nbsp;
                        <?php echo $show->country?>
                      </li>
                    </h4>

                    <?php 
                    }}
                    ?>


                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>





      </div>
    </div>

  </div>






  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- <script src="lib/wow/wow.min.js"></script> 
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script> -->



  <?= $this->Html->script(['wow.min']) ?>
  <?= $this->Html->script(['easing.min']) ?>
  <?= $this->Html->script(['waypoints.min']) ?>
  <?= $this->Html->script(['owl.carousel.min']) ?>
  <?= $this->Html->script(['main']) ?>

  <!-- Template Javascript -->


</body>

</html>