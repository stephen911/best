
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
        <title>Basic Information</title>

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

            <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.html -->
        </div>

        <!-- Header Layout -->
        <?php include ("navbar.php") ?>

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
                                        <li class="breadcrumb-item active">My Documents</li>
                                    </ol>

                                    <div class="card border-left-3 border-left-primary card-2by1">
                                <div class="card-body">
                                    <div class="media flex-wrap align-items-center">
                                        <div class="media-left">
                                            <i class="material-icons text-muted-light">credit_card</i>
                                        </div>
                                        <div class="media-body"
                                             style="min-width: 180px">
                                             <strong>My Documents</strong>
                                        </div>
                                        <div class="media-right mt-2 mt-xs-plus-0">
                                            <a class="btn btn-success"
                                               href="dashboard.php">Dashboard</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    <h1 class="h2">My Documents</h1>
                                    <div class="card">
                                        
                                    </div>

                                    

                                    <div class="form-group row">
                                                <label for="avatar"
                                                       class="col-sm-3 col-form-label form-label">Award Letter</label>
                                                <div class="col-sm-9">
                                                    <div class="media align-items-center">
                                                        <div class="media-left">
                                                            <div class="icon-block rounded">
                                                                <i class="material-icons text-muted-light md-36">photo</i>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="custom-file"
                                                                 style="width: auto;">
                                                                <input type="file"
                                                                       id="awardLetter"
                                                                       class="custom-file-input">
                                                                <label for="awardLetter"
                                                                       class="custom-file-label">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="avatar"
                                                       class="col-sm-3 col-form-label form-label">National ID</label>
                                                <div class="col-sm-9">
                                                    <div class="media align-items-center">
                                                        <div class="media-left">
                                                            <div class="icon-block rounded">
                                                                <i class="material-icons text-muted-light md-36">photo</i>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="custom-file"
                                                                 style="width: auto;">
                                                                <input type="file"
                                                                       id="nationalID"
                                                                       class="custom-file-input">
                                                                <label for="nationalID"
                                                                       class="custom-file-label">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="avatar"
                                                       class="col-sm-3 col-form-label form-label">Birth Certificate</label>
                                                <div class="col-sm-9">
                                                    <div class="media align-items-center">
                                                        <div class="media-left">
                                                            <div class="icon-block rounded">
                                                                <i class="material-icons text-muted-light md-36">photo</i>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="custom-file"
                                                                 style="width: auto;">
                                                                <input type="file"
                                                                       id="birthcertificate"
                                                                       class="custom-file-input">
                                                                <label for="birthcertificate"
                                                                       class="custom-file-label">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="avatar"
                                                       class="col-sm-3 col-form-label form-label">Student ID</label>
                                                <div class="col-sm-9">
                                                    <div class="media align-items-center">
                                                        <div class="media-left">
                                                            <div class="icon-block rounded">
                                                                <i class="material-icons text-muted-light md-36">photo</i>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="custom-file"
                                                                 style="width: auto;">
                                                                <input type="file"
                                                                       id="studentId"
                                                                       class="custom-file-input">
                                                                <label for="studentId"
                                                                       class="custom-file-label">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="avatar"
                                                       class="col-sm-3 col-form-label form-label">Passport Photo</label>
                                                <div class="col-sm-9">
                                                    <div class="media align-items-center">
                                                        <div class="media-left">
                                                            <div class="icon-block rounded">
                                                                <i class="material-icons text-muted-light md-36">photo</i>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="custom-file"
                                                                 style="width: auto;">
                                                                <input type="file"
                                                                       id="passport"
                                                                       class="custom-file-input">
                                                                <label for="passport"
                                                                       class="custom-file-label">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                                <div id="page-nav"
                                     class="col-lg-auto page-nav">
                                    <div data-perfect-scrollbar>
                                        <div class="page-section pt-lg-32pt">
                                            <ul class="nav page-nav__menu">
                                                <li class="nav-item">
                                                    <a href="#"
                                                       class="nav-link active">My Documents</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="dashboard.php"
                                                       class="nav-link">Basic Information</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="student-account-edit.php"
                                                       class="nav-link">Edit account</a>
                                                </li>
                                                
                                                <!-- <li class="nav-item">
                                                    <a href="student-account-edit-profile.html"
                                                       class="nav-link">Profile &amp; Privacy</a>
                                                </li> -->
                                            </ul>
                                            <div class="page-nav__content">
                                                <button class="btn btn-success">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <?php include ("sidebar.php") ?>

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

        <!-- Highlight.js -->
        <script src="assets/js/hljs.js"></script>

        <!-- App Settings (safe to remove) -->
        <script src="assets/js/app-settings.js"></script>

        
         <!-- Custom JS -->
    <script src="assets\js\index.js"></script>

    </body>


<!-- Mirrored from learnplus.demo.frontendmatter.com/student-account-edit-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:24:33 GMT -->
</html>