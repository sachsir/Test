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

    <!-- CSS Files -->
    <?= $this->Html->css(['usercss/animate.min']) ?>
    <?= $this->Html->css(['usercss/owl.carousel.min']) ?>
    <?= $this->Html->css(['usercss/bootstrap.min']) ?>
    <?= $this->Html->css(['usercss/admin/style']) ?>
    <?= $this->Html->css(['usercss/style']) ?>


    <!-- Customized Bootstrap Stylesheet -->

    <!-- Template Stylesheet -->
</head>

<body>
    <!-- Navbar -->
    <?= $this->element('flash/loginsidenav') ?>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-sm-2">
                <?= $this->element('flash/adminsidebar') ?>
            </div>
            <div class="col-sm-10">
                <br><br>
                <nav class="navbar navbar-dark bg-dark" style="height:60px; width:1370px" ;>
                    <h1 style="color:white; margin-left:30px;">Courses List</h1>
                </nav>

                <div class="container-fluid py-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="card my-4">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">

                                </div>
                                <br>
                                <table>
                                    <thead>
                                        <tr>

                                            <th>
                                                <?= $this->Paginator->sort('course_category') ?>
                                            </th>
                                            <th>
                                                <?= $this->Paginator->sort('course_name') ?>
                                            </th>
                                            <th>
                                                <?= $this->Paginator->sort('image') ?>
                                            </th>
                                            <th>
                                                <?= $this->Paginator->sort('description') ?>
                                            </th>
                                            <th class="actions">
                                                <?= $this->Paginator->sort('Actions') ?>
                                            </th>


                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($course as $course): ?>
                                        <tr>

                                            <td>
                                                <?= h($course->course_category->category_name) ?>
                                            </td>


                                            <td>
                                                <?= h($course->course_name) ?>
                                            </td>

                                            <td>
                                                <?= $this->Html->image($course->image,array('class'=>'courseimagecss')) ?>
                                            </td>

                                            <td>
                                                <div style="width:200px;">
                                                    <?= h($course->description) ?>
                                                </div>
                                            </td>

                                            <td class="actions">
                                            <?= $this->Html->link(__('View Details'), ['action' => 'courseview', $course->id,], ['class'=> 'btn bg-gradient-primary w-15 my-4 mb-2'],['class' => 'side-nav-item','id'=>'forgot-btn']) ?>
                                            &nbsp; <?= $this->Html->link(__('Start Test'), ['controller'=> 'users', 'action'=>'quiztest',$course->id], ['class' => 'btn bg-gradient-primary w-20 my-4 mb-2']) ?>


                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>


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
</body>

</html>