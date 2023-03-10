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
                    <h1 style="color:white; margin-left:30px;">Result</h1>
                </nav>

                <br>
                <table>
                    <tr>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        <th>
                            <?= __('Total Questions') ?>
                        </th>
                        <td>
                            <?= $this->Number->format($result->total_questions) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?= __('Right Answers') ?>
                        </th>
                        <td>
                            <?= $this->Number->format($result->right_answers) ?>
                        </td>
                    </tr>
                </table>

                <div class="related">
                    <?php if (!empty($result->test)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th>
                                    <?= __('Selected Option') ?>
                                </th>
                            </tr>
                            <?php foreach ($result->test as $test) : ?>
                            <tr>
                                <td>
                                    <?= h($test->selected_option) ?>
                                </td>

                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                    <?php endif; ?>
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
</body>

</html>