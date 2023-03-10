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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Css Files -->

    <?= $this->Html->css(['usercss/animate.min']) ?>
    <?= $this->Html->css(['usercss/owl.carousel.min']) ?>
    <?= $this->Html->css(['usercss/bootstrap.min']) ?>
    <?= $this->Html->css(['usercss/admin/style']) ?>
    <?= $this->Html->css(['usercss/style']) ?>


</head>

<body>
    <!-- Navbar -->

    <div class="container-fluid">
        <?= $this->element('flash/loginsidenav') ?>
        <div class="row">
            <!-- Sidebar -->
            <div class="col-sm-2">
                <?= $this->element('flash/adminsidebar') ?>
            </div>

            <div class="col-sm-10">
                <br><br>
                <div class="navbar navbar-dark bg-dark" style="height:60px; width:1240px;text-align:center">
                    <h1 style="color:white; margin-left:30px;">
                        Test
                        <br>

                    </h1>
                </div>


                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->



                    <!-- The slideshow -->
                    <div class="carousel-inner" data-interval="false" data-mdb-interval="false">
                        <div class="carousel-item active" data-interval="false">
                            <div class="container-fluid" data-interval="false">
                                <div class="modal-dialog" data-interval="false">
                                    <div class="modal-content" data-interval="false">
                                        <div class="modal-header" data-interval="false">
                                            <h3>Demo Ques(Content)</h3>
                                        </div>
                                        <div class="modal-header">
                                            <h3>Ques:</h3>
                                        </div>
                                        <div class="modal-body">
                                            <!-- <div class="col-xs-3 5"></div> -->
                                            <div class="quiz" id="quiz" data-toggle="buttons">
                                                <label class="element-animation1 btn btn-lg btn-danger btn-block"><span
                                                        class="btn-label"><i
                                                            class="glyphicon glyphicon-chevron-right"></i></span> <input
                                                        type="radio" name="q_answer" value="1">a) option a</label>
                                                <label class="element-animation2 btn btn-lg btn-danger btn-block"><span
                                                        class="btn-label"><i
                                                            class="glyphicon glyphicon-chevron-right"></i></span> <input
                                                        type="radio" name="q_answer" value="2">b) option b </label>
                                                <label class="element-animation3 btn btn-lg btn-danger btn-block"><span
                                                        class="btn-label"><i
                                                            class="glyphicon glyphicon-chevron-right"></i></span> <input
                                                        type="radio" name="q_answer" value="3">c) option c </label>
                                                <label class="element-animation4 btn btn-lg btn-danger btn-block"><span
                                                        class="btn-label"><i
                                                            class="glyphicon glyphicon-chevron-right"></i></span> <input
                                                        type="radio" name="q_answer" value="4">d) option d </label>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <?= $this->Form->create(null) ?>
                        <?php
                        foreach($questions as $questions){
                        ?>

                        <div class="carousel-item" data-interval="false">
                            <div class="modal-dialog" data-interval="false">
                                <div class="modal-content" data-interval="false">
                                    <div class="modal-header" data-interval="false">
                                        <h3>
                                            <?php echo $questions->question_content->text; ?>
                                        </h3>
                                    </div>
                                    <div class="modal-header">
                                        <h3>Ques:
                                            <?php echo $questions->question; ?>
                                        </h3>
                                    </div>
                                    <div class="modal-body w-100">
                                   
                                        <div class="quiz" id="quiz" data-toggle="buttons" name="quizans">
                                            <label class="element-animation1 btn btn-lg btn-danger btn-block"><span
                                                    class="btn-label"><i
                                                        class="glyphicon glyphicon-chevron-right"></i></span> <input
                                                    type="radio" name="<?php echo $questions->id; ?>" value="A">a)
                                                <?php echo $questions->option_a; ?>
                                            </label>
                                            <label class="element-animation2 btn btn-lg btn-danger btn-block"><span
                                                    class="btn-label"><i
                                                        class="glyphicon glyphicon-chevron-right"></i></span> <input
                                                    type="radio" name="<?php echo $questions->id; ?>" value="B">b)
                                                <?php echo $questions->option_b; ?>
                                            </label>
                                            <label class="element-animation3 btn btn-lg btn-danger btn-block"><span
                                                    class="btn-label"><i
                                                        class="glyphicon glyphicon-chevron-right"></i></span> <input
                                                    type="radio" name="<?php echo $questions->id; ?>" value="C">c)
                                                <?php echo $questions->option_c; ?>
                                            </label>
                                            <label class="element-animation4 btn btn-lg btn-danger btn-block"><span
                                                    class="btn-label"><i
                                                        class="glyphicon glyphicon-chevron-right"></i></span> <input
                                                    type="radio" name="<?php echo $questions->id; ?>" value="D">d)
                                                <?php echo $questions->option_d; ?>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }   
                        ?>
                        <div class="carousel-item">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3>You are now done with all the questions</h3>
                                    </div>
                                    <div class="modal-header">
                                        <?= $this->Form->submit(__('Submit Test'),[ 'class'=>"btn bg-gradient-primary w-100 my-4 mb-2"]); ?>
                                    </div>
                                    <div class="modal-body">
                                        <!-- <div class="col-xs-3 5"></div> -->
                                        <!-- <div class="modal-header">
                                            <h3>You can check the Result once you submit.</h3>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="btn bg-gradient-primary w-100 my-4 mb-2" style="color:black;">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script Files -->

    <?= $this->Html->script(['wow.min']) ?>
    <?= $this->Html->script(['easing.min']) ?>
    <?= $this->Html->script(['waypoints.min']) ?>
    <?= $this->Html->script(['owl.carousel.min']) ?>
    <?= $this->Html->script(['main']) ?>

    <!-- Template Javascript -->


    <script>
        const myCarouselElement = document.querySelector('#myCarousel')

        const carousel = new bootstrap.Carousel(myCarouselElement, {
            interval: 2000,
            touch: false
        })

    </script>

    
</body>

</html>

<style>
    label.btn {
        padding: 18px 60px;
        white-space: normal;
        -webkit-transform: scale(1.0);
        -moz-transform: scale(1.0);
        -o-transform: scale(1.0);
        -webkit-transition-duration: .3s;
        -moz-transition-duration: .3s;
        -o-transition-duration: .3s
    }

    label.btn:hover {
        text-shadow: 0 3px 2px rgba(0, 0, 0, 0.4);
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -o-transform: scale(1.1);
    }

    label.btn-block {
        text-align: left;
        position: relative
    }

    label .btn-label {
        position: absolute;
        left: 0;
        top: 0;
        display: inline-block;
        padding: 0 10px;
        background: #49548b;
        height: 100%
    }

    label .glyphicon {
        top: 34%
    }

    .element-animation1 {
        animation: animationFrames ease .8s;
        animation-iteration-count: 1;
        transform-origin: 50% 50%;
        -webkit-animation: animationFrames ease .8s;
        -webkit-animation-iteration-count: 1;
        -webkit-transform-origin: 50% 50%;
        -ms-animation: animationFrames ease .8s;
        -ms-animation-iteration-count: 1;
        -ms-transform-origin: 50% 50%;
        background: grey;
        width: 400px;
    }

    .element-animation2 {
        animation: animationFrames ease 1s;
        animation-iteration-count: 1;
        transform-origin: 50% 50%;
        -webkit-animation: animationFrames ease 1s;
        -webkit-animation-iteration-count: 1;
        -webkit-transform-origin: 50% 50%;
        -ms-animation: animationFrames ease 1s;
        -ms-animation-iteration-count: 1;
        -ms-transform-origin: 50% 50%;
        background: grey;
        width: 400px;
    }

    .element-animation3 {
        animation: animationFrames ease 1.2s;
        animation-iteration-count: 1;
        transform-origin: 50% 50%;
        -webkit-animation: animationFrames ease 1.2s;
        -webkit-animation-iteration-count: 1;
        -webkit-transform-origin: 50% 50%;
        -ms-animation: animationFrames ease 1.2s;
        -ms-animation-iteration-count: 1;
        -ms-transform-origin: 50% 50%;
        background: grey;
        width: 400px;
    }

    .element-animation4 {
        animation: animationFrames ease 1.4s;
        animation-iteration-count: 1;
        transform-origin: 50% 50%;
        -webkit-animation: animationFrames ease 1.4s;
        -webkit-animation-iteration-count: 1;
        -webkit-transform-origin: 50% 50%;
        -ms-animation: animationFrames ease 1.4s;
        -ms-animation-iteration-count: 1;
        -ms-transform-origin: 50% 50%;
        background: grey;
        width: 400px;
    }

    @keyframes animationFrames {
        0% {
            opacity: 0;
            transform: translate(-1500px, 0px)
        }

        60% {
            opacity: 1;
            transform: translate(30px, 0px)
        }

        80% {
            transform: translate(-10px, 0px)
        }

        100% {
            opacity: 1;
            transform: translate(0px, 0px)
        }
    }

    @-webkit-keyframes animationFrames {
        0% {
            opacity: 0;
            -webkit-transform: translate(-1500px, 0px)
        }

        60% {
            opacity: 1;
            -webkit-transform: translate(30px, 0px)
        }

        80% {
            -webkit-transform: translate(-10px, 0px)
        }

        100% {
            opacity: 1;
            -webkit-transform: translate(0px, 0px)
        }
    }

    .modal-header {
        background-color: transparent;
        color: inherit
    }

    .modal-body {
        min-height: 300px
    }

    .carousel-inner img {
        width: 100%;
        height: 100%;
    }
</style>