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

<body class="g-sidenav-show  bg-gray-200">

  <!-- End Navbar -->
  <?= $this->element('flash/adminside') ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
      data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
         
          <h6 class="font-weight-bolder mb-0">Questions Content</h6>
        </nav>
      
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Question Content List</h6>
              </div>
            </div>
            <br>
            <table>
              <thead>
                <tr>

                  <th>
                    <?= $this->Paginator->sort('course_id') ?>
                  </th>
                  <th>
                    <?= $this->Paginator->sort('text') ?>
                  </th>
                  <th class="actions">
                    <?= __('Actions') ?>
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($questionContent as $questionContent): ?>
                <tr>
                  <td>
                    <?= $this->Number->format($questionContent->course_id) ?>
                  </td>
                  <td>
                    <div style="width:700px;">
                      <?= h($questionContent->text) ?>
                    </div>
                  </td>

                  <td class="actions">
                    <?= $this->Html->link(__(''), ['action' => 'view', $questionContent->id],['class'=>'fa-solid fa-eye']) ?>
                    <?= $this->Html->link(__(''), ['action' => 'edit', $questionContent->id],['class'=>'fa-solid fa-edit']) ?>
                    <?= $this->Form->postLink(__(''), ['action' => 'delete', $questionContent->id], ['class'=>'fa-solid fa-trash','confirm' => __('Are you sure you want to delete # {0}?', $questionContent->id)]) ?>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>

        </div>
      </div>

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