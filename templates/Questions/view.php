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
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Question Details</h4>

                </div>
              </div>
              <div class="card-body">
                <!-- <h3>
                  <?= h($question->id) ?>
                </h3> -->
                <table>
                  <tr>
                    <th>
                      <?= __('Question: ') ?>
                    </th>
                    <td>
                      <?= h($question->question) ?>
                    </td>
                  </tr>
                  <tr>
                    <th>
                      <?= __('Option A: ') ?>
                    </th>
                    <td>
                      <?= h($question->option_a) ?>
                    </td>
                  </tr>
                  <tr>
                    <th>
                      <?= __('Option B: ') ?>
                    </th>
                    <td>
                      <?= h($question->option_b) ?>
                    </td>
                  </tr>
                  <tr>
                    <th>
                      <?= __('Option C: ') ?>
                    </th>
                    <td>
                      <?= h($question->option_c) ?>
                    </td>
                  </tr>
                  <tr>
                    <th>
                      <?= __('Option D: ') ?>
                    </th>
                    <td>
                      <?= h($question->option_d) ?>
                    </td>
                  </tr>
                  <tr>
                    <th>
                      <?= __('Answer:') ?>
                    </th>
                    <td>
                      <?= h($question->answer) ?>
                    </td>
                  </tr>
                 
                 
                </table>
                <div class="related">
                  <?php if (!empty($question->test)) : ?>
                  <div class="table-responsive">
                    <table>
                      <tr>
                        <th>
                          <?= __('Id') ?>
                        </th>
                        <th>
                          <?= __('Question Id') ?>
                        </th>
                        <th>
                          <?= __('User Id') ?>
                        </th>
                        <th>
                          <?= __('Selected Option') ?>
                        </th>
                        <th>
                          <?= __('Date') ?>
                        </th>
                        <th>
                          <?= __('Result Id') ?>
                        </th>
                        <th class="actions">
                          <?= __('Actions') ?>
                        </th>
                      </tr>
                      <?php foreach ($question->test as $test) : ?>
                      <tr>
                        <td>
                          <?= h($test->id) ?>
                        </td>
                        <td>
                          <?= h($test->question_id) ?>
                        </td>
                        <td>
                          <?= h($test->user_id) ?>
                        </td>
                        <td>
                          <?= h($test->selected_option) ?>
                        </td>
                        <td>
                          <?= h($test->date) ?>
                        </td>
                        <td>
                          <?= h($test->result_id) ?>
                        </td>
                        <td class="actions">
                          <?= $this->Html->link(__('View'), ['controller' => 'Test', 'action' => 'view', $test->id]) ?>
                          <?= $this->Html->link(__('Edit'), ['controller' => 'Test', 'action' => 'edit', $test->id]) ?>
                          <?= $this->Form->postLink(__('Delete'), ['controller' => 'Test', 'action' => 'delete', $test->id], ['confirm' => __('Are you sure you want to delete # {0}?', $test->id)]) ?>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </table>
                  </div>
                  <?php endif; ?>


                  <div class="text-center">
                    <?= $this->Html->link(__('Back'), ['controller'=> 'Questions', 'action'=>'index',], ['class'=> 'btn bg-gradient-primary w-100 my-4 mb-2'],['class' => 'side-nav-item','id'=>'forgot-btn']) ?>
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
</body>

</html>