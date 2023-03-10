<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Result> $result
 */
?>







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
                    <h1 style="color:white; margin-left:30px;">Test History</h1>
                </nav>

                <div class="container-fluid py-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="card my-4">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">

                                </div>
                                <br>
                                <div class="result index content">
    <div class="table-responsive m-4">
        <table>
            <thead class="m-4">
                <tr class="m-4">
                    
                    <th class="px-4"><?= h('Course Name') ?></th>
                    <th class="px-4"><?= h('Total Questions') ?></th>
                    <th class="px-4"><?= h('Right Answers') ?></th>
                    <th class="px-4"><?= h('Wrong Answer') ?></th>
                    <th class="px-4"><?= h('Score') ?></th>
                    <th class="px-4"><?= h('Test Date/Time') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $result): ?>
                <tr>
                    <td class="px-4"><?= h($result->question->course->course_name) ?></td>
                    <td class="px-4"><?= $this->Number->format($result->result->total_questions) ?></td>
                    <td class="px-4"><?= $this->Number->format($result->result->right_answers) ?></td>
                    <td class="px-4"><?= $this->Number->format($result->result->total_questions - $result->result->right_answers) ?></td>
                    <td class="px-4"><?= $this->Number->format($result->result->right_answers*10) ?></td>
                    
                    <?php 
                        $cre_time = $result->date;
                        $date = new DateTime($cre_time, new DateTimeZone('UTC'));
                        $date->setTimezone(new DateTimeZone("Asia/Kolkata"));
                        $cre_time = $date->format('d-m-Y H:i:a');
                      ?>

                      <td class="px-4">
                        <?= $cre_time ?>
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