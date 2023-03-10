


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
        <div class="container">
        <div class="card-body">
                <?= $this->Form->create($user) ?>
                <fieldset>

                  <th class=" bg-white text-start text-primary pe-3">
                    <?= $this->Form->control('first_name',['class'=>'form-control','required'=>false]); ?>
                  </th>
                  <br>
                  <th class=" bg-white text-start text-primary pe-3">
                    <?= $this->Form->control('last_name',['class'=>'form-control','required'=>false]); ?>
                  </th>
                  <br>
                  <th class=" bg-white text-start text-primary pe-3">
                    <?= $this->Form->control('email',['class'=>'form-control','required'=>false]); ?>
                  </th>
                  <br>
                  <th class=" bg-white text-start text-primary pe-3">
                    <?= $this->Form->control('phone',['class'=>'form-control','required'=>false]); ?>
                  </th>
                  <br>
                  <th class=" bg-white text-start text-primary pe-3">
                    <?= $this->Form->control('address',['class'=>'form-control','required'=>false]); ?>
                  </th>
                  <br>
                  <th class=" bg-white text-start text-primary pe-3">
                    <?= $this->Form->control('country',['class'=>'form-control','required'=>false]); ?>
                  </th>
                  <br>
                  <th class=" bg-white text-start text-primary pe-3">
                    <?= $this->Form->control('state',['class'=>'form-control','required'=>false]); ?>
                  </th>
                  <br>
                  <th class=" bg-white text-start text-primary pe-3">
                    <?= $this->Form->control('city',['class'=>'form-control','required'=>false]); ?>
                  </th>
                  <br>
                  <th class=" bg-white text-start text-primary pe-3">
                    <?= $this->Form->control('zip_code',['class'=>'form-control','required'=>false]); ?>
                  </th>



                </fieldset>
                <br>
                <?= $this->Form->button(__('Save'),['class'=>"btn bg-gradient-primary w-20 my-4 mb-2"]) ?>
                <?= $this->Html->link(__('Back'), ['controller'=> 'Users', 'action'=>'profile',], ['class'=> 'btn bg-gradient-primary w-20 my-4 mb-2'],['class' => 'side-nav-item','id'=>'forgot-btn']) ?>
                <?= $this->Form->end() ?>

</div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  



  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>


  <?= $this->Html->script(['wow.min']) ?>
  <?= $this->Html->script(['easing.min']) ?>
  <?= $this->Html->script(['waypoints.min']) ?>
  <?= $this->Html->script(['owl.carousel.min']) ?>
  <?= $this->Html->script(['main']) ?>

  <!-- Template Javascript -->
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