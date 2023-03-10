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
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

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
    <?= $this->Html->css(['usercss/style']) ?>

    <?= $this->Html->script(['signupval']) ?>

    <!-- Customized Bootstrap Stylesheet -->

</head>

<body>
    <!-- Navbar -->
    <?= $this->element('flash/navbar') ?>

    <!-- Registration Form -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="/img/about.jpg" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h4 class="section-title bg-white text-start text-primary pe-3">Register</h4>
                    <br>
                    <div class="users form">
                        <?= $this->Flash->render() ?>
                        <?= $this->Form->create($user) ?>
                        <fieldset>
                            <br>

                            <h4 class=" bg-white text-start text-primary pe-3">
                                <?= $this->Form->control('first_name',['class'=>'form-control','required'=>false]); ?>
                            </h4>
                            <h4 class=" bg-white text-start text-primary pe-3">
                                <?= $this->Form->control('last_name',['class'=>'form-control','required'=>false]); ?>
                            </h4>
                            <h4 class=" bg-white text-start text-primary pe-3">
                                <?= $this->Form->control('email',['class'=>'form-control','required'=>false]); ?>
                            </h4>
                            <h4 class=" bg-white text-start text-primary pe-3">
                                <?= $this->Form->control('phone',['class'=>'form-control','required'=>false]); ?>
                            </h4>
                            <h4 class=" bg-white text-start text-primary pe-3">
                                <?= $this->Form->control('address',['class'=>'form-control','required'=>false]); ?>
                            </h4>


                            
                            <div class="bg-white text-start text-primary pe-3">
                                <?= $this->Form->label('country_id', __('Country')); ?>
                                <?= $this->Form->select('country',$countries, ['class' => 'form-control', 'id' => 'country']); ?>
                            </div>

                            <!-- State field -->
                            <div class="form-group">
                                <?= $this->Form->label('state_id', __('State')); ?>
                                <?= $this->Form->select('state', [], ['class' => 'form-control', 'id' => 'state']); ?>
                            </div>
                            <!-- City field -->
                            <div class="form-group">
                                <?= $this->Form->label('city_id', __('City')); ?>
                                <?= $this->Form->select('city', [], ['class' => 'form-control', 'id' => 'city']); ?>
                            </div>
                           
                            <h4 class=" bg-white text-start text-primary pe-3">
                                <?= $this->Form->control('zip_code',['class'=>'form-control','required'=>false]); ?>
                            </h4>
                            <h4 class=" bg-white text-start text-primary pe-3">
                                <?= $this->Form->control('password',['class'=>'form-control','required'=>false]); ?>
                            </h4>
                            <h4 class=" bg-white text-start text-primary pe-3">
                                <?= $this->Form->control('confirmpassword',['class'=>'form-control','required'=>false,'type'=>'password']); ?>
                            </h4>


                            <br>
                        </fieldset>
                        <?= $this->Form->submit(__('Register'),['id'=>'register-btn']); ?>
                        <?= $this->Form->end() ?>


                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Footer Start -->
    <?= $this->element('flash/footer') ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script Files -->

    <?= $this->Html->script(['wow.min']) ?>
    <?= $this->Html->script(['easing.min']) ?>
    <?= $this->Html->script(['waypoints.min']) ?>
    <?= $this->Html->script(['owl.carousel.min']) ?>
    <?= $this->Html->script(['main']) ?>
    <script>
        $(document).ready(function() {
            // Event listener for country field
            $('#country').change(function() {
                var country_id = $(this).val();

                // Ajax call to get states
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    url: '<?= $this->Url->build(['controller' => 'Users', 'action' => 'getStates']); ?>',
                    type: 'POST',
                    data: {
                        country_id: country_id
                    },
                    dataType: 'json',
                    success: function(states) {
                        // Populate state field with options
                        var options = '<option value=""></option>';
                        $.each(states, function(key, value) {
                            options += '<option value="' + key + '">' + value + '</option>';
                        });
                        $('#state').html(options);
                    }
                });
            });
            $('#state').change(function() {
                var state_id = $(this).val();

                // Ajax call to get states
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    url: '<?= $this->Url->build(['controller' => 'Users', 'action' => 'getCity']); ?>',
                    type: 'POST',
                    data: {
                        state_id: state_id
                    },
                    dataType: 'json',
                    success: function(cities) {
                        // Populate state field with options
                        var options = '<option value=""></option>';
                        $.each(cities, function(key, value) {
                            options += '<option value="' + key + '">' + value + '</option>';
                        });
                        $('#city').html(options);
                    }
                });
            });
        });
    </script>

</body>

</html>