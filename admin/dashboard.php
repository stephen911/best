<?php
 include 'functions.php';
 checker();
 $user = users();
//  var_dump($_SESSION['id']);
?>
<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    
<!-- Mirrored from learnplus.demo.frontendmatter.com/student-account-edit-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:24:33 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dashboard</title>

         <meta name="robots"
              content="noindex">

        <!-- Custom Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500%7CRoboto:400,500&amp;display=swap"
              rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="../assets/vendor/perfect-scrollbar.css"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="../assets/css/material-icons.css"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="../assets/css/fontawesome.css"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="../assets/vendor/spinkit.css"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="../assets/css/app.css"
              rel="stylesheet">

    </head>

    <body class=" layout-fluid">

        <div class="preloader">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>

            <!-- <div class="sk-bounce">
    <div class="sk-bounce-dot"></div>
    <div class="sk-bounce-dot"></div>
  </div> -->

            <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.html -->
        </div>

        <!-- Header Layout -->
        <?php include 'navbar.php';
         ?>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content">

                <div data-push
                     data-responsive-width="992px"
                     class="mdk-drawer-layout js-mdk-drawer-layout">
                    <div class="mdk-drawer-layout__content page ">

                        <div class="container-fluid page__container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                            <h1 class="h2">Dashboard</h1>

                            <div class="card border-left-3 border-left-primary card-2by1">
                                <div class="card-body">
                                    <div class="media flex-wrap align-items-center">
                                        <div class="media-left">
                                            <i class="material-icons text-muted-light">account_box</i>
                                        </div>
                                        <div class="media-body"
                                             style="min-width: 180px">
                                            Your are welcome Admin! <strong><?php echo $user['title'].' '.$user['name']; ?></strong>
                                        </div>
                                        <div class="media-right mt-2 mt-xs-plus-0">
                                        <a class="btn btn-sm btn-danger"
                                                            href="ntcreg.php">Set Certficate Date</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            

                                <div class="col-lg-8">

                                            <div class="table-responsive border-bottom"
                                                 data-toggle="lists"
                                                 data-lists-values='["js-lists-values-employee-name"]'>

                                                <div class="search-form search-form--light mb-3">
                                                    <input type="text"
                                                           class="form-control search"
                                                           placeholder="Search">
                                                    <button class="btn"
                                                            type="button"
                                                            role="button"><i class="material-icons">search</i></button>
                                                </div>

                                                <table class="table mb-0">
                                                <thead>
                                                        <tr>
                                                            <th colspan="2">
                                                                <a href="javascript:void(0)"
                                                                   class="sort"
                                                                   data-sort="js-lists-values-employee-name">name</a>
                                                                <a href="javascript:void(0)"
                                                                   class="sort"
                                                                   data-sort="js-lists-values-employee-title">Region</a>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    
                                                    <thead>
                                                        <tr>

                                                            <th>Name</th>

                                                            <th style="width: 100px;">Email</th>
                                                            <th style="width: 51px;">Contact</th>
                                                            <th style="width: 100px;">Region</th>
                                                            <th style="width: 51px;">District</th>
                                                            <th style="width: 51px;">Trainin Date</th>
                                                            <th style="width: 100px;">License Number</th>
                                                            <th style="width: 51px;">Name of school</th>
                                                            <th style="width: 24px;"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="list"
                                                           id="search">

                                                        <tr>

                                                            <td>

                                                                <span class="js-lists-values-employee-name">Kalum Atherton</span>

                                                            </td>

                                                            <td>nana@gmail.com</td>
                                                            <td>0247678736</td>
                                                            <td>Greater Accra</td>
                                                            <td>Abura district</td>
                                                            <td>14th, june 2022</td>
                                                            <td>pt/000666/2022</td>
                                                            <td>New sherperd school</td>
                                                        </tr>

                                                        

                                                        
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                <!-- <div class="col-lg-5">

                                    

                                    <div class="card card-2by1">
                                        <div class="card-header">
                                            <h4 class="card-title">Rewards</h4>
                                            <p class="card-subtitle">Your latest achievements</p>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="btn btn-primary btn-circle"><i class="material-icons">thumb_up</i></div>
                                            <div class="btn btn-danger btn-circle"><i class="material-icons">grade</i></div>
                                            <div class="btn btn-success btn-circle"><i class="material-icons">bubble_chart</i></div>
                                            <div class="btn btn-warning btn-circle"><i class="material-icons">keyboard_voice</i></div>
                                            <div class="btn btn-info btn-circle"><i class="material-icons">event_available</i></div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <h4 class="card-title">Forum Activity</h4>
                                                    <p class="card-subtitle">Latest forum topics &amp; replies</p>
                                                </div>
                                                <div class="media-right">
                                                    <a class="btn btn-sm btn-primary"
                                                       href="student-forum.html"> <i class="material-icons">keyboard_arrow_right</i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="list-group list-group-fit">

                                            <li class="list-group-item forum-thread">
                                                <div class="media align-items-center">
                                                    <div class="media-left">
                                                        <div class="forum-icon-wrapper">
                                                            <a href="student-forum-thread.html"
                                                               class="forum-thread-icon">
                                                                <i class="material-icons">description</i>
                                                            </a>
                                                            <a href="student-profile.html"
                                                               class="forum-thread-user">
                                                                <img src="../assets/images/people/50/guy-1.jpg"
                                                                     alt=""
                                                                     width="20"
                                                                     class="rounded-circle">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <a href="student-profile.html"
                                                               class="text-body"><strong>Luci Bryant</strong></a>
                                                            <small class="ml-auto text-muted">5 min ago</small>
                                                        </div>
                                                        <a class="text-black-70"
                                                           href="student-forum-thread.html">Am I learning the right way?</a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-group-item forum-thread">
                                                <div class="media align-items-center">
                                                    <div class="media-left">
                                                        <div class="forum-icon-wrapper">
                                                            <a href="student-forum-thread.html"
                                                               class="forum-thread-icon">
                                                                <i class="material-icons">description</i>
                                                            </a>
                                                            <a href="student-profile.html"
                                                               class="forum-thread-user">
                                                                <img src="../assets/images/people/50/guy-2.jpg"
                                                                     alt=""
                                                                     width="20"
                                                                     class="rounded-circle">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <a href="student-profile.html"
                                                               class="text-body"><strong>Magnus Goldsmith</strong></a>
                                                            <small class="ml-auto text-muted">7 min ago</small>
                                                        </div>
                                                        <a class="text-black-70"
                                                           href="student-forum-thread.html">Can someone help me with the basic Setup?</a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-group-item forum-thread">
                                                <div class="media align-items-center">
                                                    <div class="media-left">
                                                        <div class="forum-icon-wrapper">
                                                            <a href="student-forum-thread.html"
                                                               class="forum-thread-icon">
                                                                <i class="material-icons">description</i>
                                                            </a>
                                                            <a href="student-profile.html"
                                                               class="forum-thread-user">
                                                                <img src="../assets/images/people/50/woman-1.jpg"
                                                                     alt=""
                                                                     width="20"
                                                                     class="rounded-circle">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <a href="student-profile.html"
                                                               class="text-body"><strong>Katelyn Rankin</strong></a>
                                                            <small class="ml-auto text-muted">12 min ago</small>
                                                        </div>
                                                        <a class="text-black-70"
                                                           href="student-forum-thread.html">I think this is the right way?</a>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div> -->
                            <!-- </div> -->

                        </div>

                    </div>
                    

                    <?php include 'sidebar.php'; ?>

                <!-- App Settings FAB -->
                

            </div>
        </div>

        <!-- jQuery -->
        <script src="../assets/vendor/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="../assets/vendor/popper.min.js"></script>
        <script src="../assets/vendor/bootstrap.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script src="../assets/vendor/perfect-scrollbar.min.js"></script>

        <!-- MDK -->
        <script src="../assets/vendor/dom-factory.js"></script>
        <script src="../assets/vendor/material-design-kit.js"></script>

        <!-- App JS -->
        <script src="../assets/js/app.js"></script>

        <!-- Highlight.js -->
        <script src="../assets/js/hljs.js"></script>

        <!-- App Settings (safe to remove) -->
        <script src="../assets/js/app-settings.js"></script>

    </body>


<!-- Mirrored from learnplus.demo.frontendmatter.com/student-account-edit-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:24:33 GMT -->
</html>
