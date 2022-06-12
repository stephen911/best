<?php
 include 'functions.php';
 checker();
 $user = users();
//  var_dump($_SESSION['id']);

?>

<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    
<!-- Mirrored from learnplus.demo.frontendmatter.com/student-billing.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:24:35 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Certification</title>

        <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
        <meta name="robots"
              content="noindex">

        <!-- Custom Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500%7CRoboto:400,500&amp;display=swap"
              rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="assets/vendor/perfect-scrollbar.css"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="assets/css/material-icons.css"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="assets/css/fontawesome.css"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="assets/vendor/spinkit.css"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="assets/css/app.css"
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

            <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.php -->
        </div>

        <!-- Header Layout -->
        <?php include 'navbar.php'; ?>
            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content">

                <div data-push
                     data-responsive-width="992px"
                     class="mdk-drawer-layout js-mdk-drawer-layout">
                    <div class="mdk-drawer-layout__content page ">

                        <div class="container-fluid page__container p-0">
                            <div class="row m-0">
                                <div class="col-lg container-fluid page__container">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                        <li class="breadcrumb-item active">Certification</li>
                                    </ol>

                                    <h1 class="h2">Certification</h1>

                                    <div class="card border-left-3 border-left-danger card-2by1">
                                        <div class="card-body">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    Download your Certificate
                                                    <!-- <strong class="text-danger">$25.00</strong> <a href="#">#8331</a> -->
                                                </div>
                                                <div class="media-right">
                                                    <a href="#" id="download-btn"
                                                       class="btn btn-success float-right">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    

                                    <!-- Pagination -->
                                    <!-- <div class="container"> -->
       
        <!-- <label>
            Name:
            <input id="name" type='text'>
        </label> -->
        <!-- <a href="#" id="download-btn" download>Download</a> -->
        <canvas id="canvas" height="350px" width="500px"></canvas>
        
            
            <input id="name" type='hidden' value="<?php echo $user['title'].' '.$user['name']; ?>">
       
    <!-- </div> -->
                                    

                                </div>
                                
                            </div>
                        </div>

                    </div>

                    <?php include 'sidebar.php'; ?>


                <!-- App Settings FAB -->
                

            </div>
        </div>

        <!-- jQuery -->
        <script src="assets/vendor/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="assets/vendor/popper.min.js"></script>
        <script src="assets/vendor/bootstrap.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script src="assets/vendor/perfect-scrollbar.min.js"></script>

        <!-- MDK -->
        <script src="assets/vendor/dom-factory.js"></script>
        <script src="assets/vendor/material-design-kit.js"></script>

        <!-- App JS -->
        <script src="assets/js/app.js"></script>
        <script src="assets/js/cert.js"></script>

        <!-- Highlight.js -->
        <script src="assets/js/hljs.js"></script>

        <!-- App Settings (safe to remove) -->
        <script src="assets/js/app-settings.js"></script>

        <!-- List.js -->
        <script src="assets/vendor/list.min.js"></script>
        <script src="assets/js/list.js"></script>

    </body>


<!-- Mirrored from learnplus.demo.frontendmatter.com/student-billing.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:24:35 GMT -->
</html>