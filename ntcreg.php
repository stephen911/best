<?php
 include 'functions.php';
 checker();
 $user = users();
//  var_dump($_SESSION['id']);

if (isset($_POST['btnupdate'])) {
    extract($_POST);
    updateuser($id, $title, $name, $gender, $email, $contact, $telegram, $lincesed, $nameofschool, $region, $district, $foodpref, $heard);
}
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
        <title>NTC CPD Training</title>

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
                                        <li class="breadcrumb-item active">NTC CPD Training</li>
                                    </ol>

                                    <div class="card border-left-3 border-left-primary card-2by1">
                                <div class="card-body">
                                    <div class="media flex-wrap align-items-center">
                                        <div class="media-left">
                                            <i class="material-icons text-muted-light">account_box</i>
                                        </div>
                                        <div class="media-body"
                                             style="min-width: 180px">
                                             <strong>Fill your NTC CPD Training forms</strong>
                                        </div>
                                        <div class="media-right mt-2 mt-xs-plus-0">
                                            <a class="btn btn-success"
                                               href="dashboard.php">Go to Dashboard</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-left-3 border-left-primary card-2by1">
                                <div class="card-body">
                                    <div class="media flex-wrap align-items-center">
                                        <div class="media-left">
                                            <i class="material-icons text-muted-light">credit_card</i>
                                        </div>
                                        <div class="media-body"
                                             style="min-width: 180px">
                                             <small>Please we humbly entreat you to make payment right away to book your seat. Please call +233 246 535 961 when you have successfully made payment. Thank you</small>
                                        </div>
                                        <div class="media-right mt-2 mt-xs-plus-0">
                                            <button class="btn btn-success"
                                               >Pay Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    <h1 class="h2">NTC CPD Training</h1>
                                    <form action="" method="POST">
                                    <div class="card">
                                        <div class="list-group list-group-fit">
                                        <div class="list-group-item">
                                                <div class="form-group m-0" role="group" aria-labelledby="label-status">
                                                    <div class="form-row">
                                                        <label id="label-status" for="status"
                                                            class="col-md-3 col-form-label form-label">Title
                                                            </label>
                                                        <div class="col-md-9">
                                                            <select id="custom-select"
                                                                class="form-control custom-select" name="title">
                                                                <option selected value="<?php echo  ($user['title'] == '') ? '' : $user['title']; ?>"><?php echo  ($user['title'] == '') ? 'Select your title' : $user['title']; ?></option>
                                                                <option value="Dr.">Dr.</option>
                                                                <option value="Fr.">Fr.</option>
                                                                <option value="Sis.">Sis.</option>
                                                                <option value="Mr.">Mr.</option>
                                                                <option value="Mrs.">Mrs.</option>
                                                                <option value="Ms./Miss">Ms./Miss</option>
                                                                

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group m-0"
                                                     role="group"
                                                     aria-labelledby="label-certname">
                                                    <div class="form-row">
                                                        <label id="label-certname"
                                                               for="certname"
                                                               class="col-md-3 col-form-label form-label">Name on Certificate</label>
                                                        <div class="col-md-9">
                                                            <input id="certname"
                                                                   type="text"
                                                                   placeholder="Name to be shown on Certificate"
                                                                   value="<?php echo  ($user['name'] == '') ? '' : $user['name']; ?>"
                                                                   class="form-control" name="name">

                                                                   <input id="certname"
                                                                   type="hidden"
                                                                   placeholder="Name to be shown on Certificate"
                                                                   value="<?php echo  $user['id']; ?>"
                                                                   class="form-control" name="id">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group m-0" role="group" aria-labelledby="label-status">
                                                    <div class="form-row">
                                                        <label id="label-status" for="status"
                                                            class="col-md-3 col-form-label form-label">Sex
                                                            </label>
                                                        <div class="col-md-9">
                                                            <select id="custom-select"
                                                                class="form-control custom-select" name="gender">
                                                                <option selected value="<?php echo  ($user['gender'] == '') ? '' : $user['gender']; ?>"><?php echo  ($user['gender'] == '') ? 'Select Gender' : $user['gender']; ?></option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                                <option value="Prefer not to say">Prefer not to say</option>
                                                                
                                                                

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group m-0"
                                                     role="group"
                                                     aria-labelledby="label-email">
                                                    <div class="form-row">
                                                        <label id="label-email"
                                                               for="email"
                                                               class="col-md-3 col-form-label form-label">Your email address</label>
                                                        <div class="col-md-9">
                                                            <div role="group"
                                                                 class="input-group input-group-merge">
                                                                <input id="email"
                                                                       type="email"
                                                                       placeholder="Your email address"
                                                                       value="<?php echo  ($user['email'] == '') ? '' : $user['email']; ?>"
                                                                       class="form-control form-control-prepended" name="email">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        <i class="material-icons">email</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <small class="form-text text-muted">Note that if you change your email, you will have to confirm it again.</small>
                                                        </div>
                                                    </div>
                                                </div>
</div>
                                                <div class="list-group-item">
                                                <div class="form-group m-0"
                                                     role="group"
                                                     aria-labelledby="label-phonenumber">
                                                    <div class="form-row">
                                                        <label id="label-phonenumber"
                                                               for="phonenumber"
                                                               class="col-md-3 col-form-label form-label">Personal contact number</label>
                                                        <div class="col-md-9">
                                                            <input id="phonenumber"
                                                                   type="text"
                                                                   placeholder="Your phone number"
                                                                   value="<?php echo  ($user['contact'] == '') ? '' : $user['contact']; ?>"
                                                                   class="form-control" name="contact">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group m-0"
                                                     role="group"
                                                     aria-labelledby="label-telegram">
                                                    <div class="form-row">
                                                        <label id="label-telegram"
                                                               for="telegram"
                                                               class="col-md-3 col-form-label form-label">Telegram App contact number</label>
                                                        <div class="col-md-9">
                                                            <input id="telegram"
                                                                   type="text"
                                                                   placeholder="Your telegram number"
                                                                   value="<?php echo  ($user['telegram'] == '') ? '' : $user['telegram']; ?>"
                                                                   class="form-control" name="telegram">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group m-0"
                                                     role="group"
                                                     aria-labelledby="label-lastname">
                                                    <div class="form-row">
                                                        <label id="label-lastname"
                                                               for="lastname"
                                                               class="col-md-3 col-form-label form-label">National teachers council license number</label>
                                                        <div class="col-md-9">
                                                            <input id="lastname"
                                                                   type="text"
                                                                   placeholder="No. should be like PT/000660/2022"
                                                                   value="<?php echo  ($user['lincesed'] == '') ? '' : $user['lincesed']; ?>"
                                                                   class="form-control" name="lincesed">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-group m-0"
                                                     role="group"
                                                     aria-labelledby="label-schname">
                                                    <div class="form-row">
                                                        <label id="label-schname"
                                                               for="schname"
                                                               class="col-md-3 col-form-label form-label">Name of School</label>
                                                        <div class="col-md-9">
                                                            <input id="schname"
                                                                   type="text"
                                                                   placeholder="Name of School"
                                                                   value="<?php echo  ($user['nameofschool'] == '') ? '' : $user['nameofschool']; ?>"
                                                                   class="form-control" name="nameofschool">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input id="customCheck01"
                                                           type="checkbox"
                                                           class="custom-control-input">
                                                    <label for="customCheck01"
                                                           class="custom-control-label">Check this custom checkbox</label>
                                                </div>
                                            </div> -->
                                            <div class="list-group-item">
                                            <div class="form-group m-0" role="group"
                                                aria-labelledby="label-region">
                                                <div class="form-row">
                                                    <label id="label-region" for="region"
                                                        class="col-md-3 col-form-label form-label">Region</label>
                                                    <div class="col-md-9">
                                                        <select id="custom-select8" class="form-control custom-select" name="region">
                                                            <option selected value="<?php echo  ($user['region'] == '') ? '' : $user['region']; ?>"><?php echo  ($user['region'] == '') ? 'Select you region' : $user['region']; ?>
                                                            </option>
                                                            <option value="Greater Accra">Greater Accra</option>
                                                            <option value="Ashanti Region">Ashanti Region</option>
                                                            <option value="Eastern Region">Eastern Region</option>
                                                            <option value="Central Region">Central Region</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            
                                            
                                            <div class="list-group-item">
                                            <div class="form-group m-0" role="group"
                                                aria-labelledby="label-highestEduLevel">
                                                <div class="form-row">
                                                    <label id="label-highestEduLevel" for="highestEduLevel"
                                                        class="col-md-3 col-form-label form-label">District or Municipality</label>
                                                    <div class="col-md-9">
                                                        <select id="custom-select9" class="form-control custom-select" name="district">
                                                            <option selected value="<?php echo  ($user['district'] == '') ? '' : $user['district']; ?>"> <?php echo  ($user['district'] == '') ? 'Choose your District or Municipality' : $user['district']; ?>
                                                            </option>
                                                            <option value="Adenta Municipality">Adenta Municipality</option>
                                                            <option value="Ga - East Municipality">Ga - East Municipality</option>
                                                            <option value="La Nkwantanang Madina Municipality">La Nkwantanang Madina Municipality</option>
                                                            <option value="other">other</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="all">
                                        <div id="specify" style="display: none;">
                                            <div class="list-group-item toggle-target target-report" data-lookup="1">

                                                <div class="form-group m-0" role="group"
                                                    aria-labelledby="label-specify">
                                                    <div class="form-row">
                                                        <label id="label-specify" for="specify"
                                                            class="col-md-3 col-form-label form-label">specify</label>
                                                        <div class="col-md-9">
                                                            <input id="specify" type="text" placeholder="Specify your district or municipality"
                                                                value="<?php echo  ($user['dother'] == '') ? '' : $user['dother']; ?>" class="form-control" name="dother">
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
</div>
<div id="east" class="list-group-item" style="display: none;">
                                            <div id="east" class="form-group m-0" role="group"
                                                aria-labelledby="label-venuepref">
                                                <div class="form-row">
                                                    <label id="label-venuepref" for="venuepref"
                                                        class="col-md-3 col-form-label form-label">Venue Preference</label>
                                                    <div class="col-md-9">
                                                        <select id="custom-select2" class="form-control custom-select" name="venue">
                                                            <option selected value="<?php echo  ($user['venue'] == '') ? '' : $user['venue']; ?>"><?php echo  ($user['venue'] == '') ? 'Choose a venue of your choice' : $user['venue']; ?>
                                                            </option>
                                                            <option value="Ashongmang Presby Church">Ashongmang Presby Church</option>
                                                            <option value="Kwabenya SHS">Kwabenya SHS</option>
                                                            

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
</div>
                                        <div class="list-group-item">
                                            <div class="form-group m-0" role="group"
                                                aria-labelledby="label-foodpref">
                                                <div class="form-row">
                                                    <label id="label-foodpref" for="foodpref"
                                                        class="col-md-3 col-form-label form-label">Food Preference</label>
                                                    <div class="col-md-9">
                                                        <select id="custom-select2" class="form-control custom-select" name="foodpref">
                                                            <option selected  value="<?php echo  ($user['foodpref'] == '') ? '' : $user['foodpref']; ?>">Choose food Preference <?php echo  ($user['foodpref'] == '') ? 'Choose food Preference ' : $user['foodpref']; ?>
                                                            </option>
                                                            <option value="Waakye with chicken">Waakye with chicken</option>
                                                            <option value="Jollof with chicken">Jollof with chicken</option>
                                                            <option value="plain rice with chicken">plain rice with chicken</option>
                                                            <option value="Ga-kenkey with Sardine">Ga-kenkey with Sardine</option>
                                                            

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="form-group m-0" role="group"
                                                aria-labelledby="label-heard">
                                                <div class="form-row">
                                                    <label id="label-heard" for="heard"
                                                        class="col-md-3 col-form-label form-label">How did you hear/know of this training</label>
                                                    <div class="col-md-9">
                                                        <select id="custom-select2" class="form-control custom-select" name="heard">
                                                            <option  selected value="<?php echo  ($user['heard'] == '') ? '' : $user['heard']; ?>">select how you heard about this training<?php echo  ($user['heard'] == 'select how you heard about this training') ? '' : $user['heard']; ?>
                                                            </option>
                                                            <option value="website">TUCEE Website</option>
                                                            <option value="gnacc">GNACC Website</option>
                                                            <option value="facebook">Facebook</option>
                                                            <option value="whatsapp">WhatsApp</option>
                                                            <option value="instagram">Instagram</option>
                                                            <option value="friend">Friend</option>
                                                            <option value="radio">Radio</option>
                                                            <option value="other">other</option>
                                                            

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        
                                            
                                            
                                        </div>

                                        
                                    </div>

                                    
                                    <div class="page-nav__content">
                                                <button type="submit" name="btnupdate" class="btn btn-success">Save</button>
                                            </div>  

                                    </form>
                                    <!-- <div class="card border-left-3 border-left-primary card-2by1">
                                <div class="card-body">
                                    <div class="media flex-wrap align-items-center">
                                        <div class="media-left">
                                            <i class="material-icons text-muted-light">credit_card</i>
                                        </div>
                                        <div class="media-body"
                                             style="min-width: 180px">
                                             <small>Please we humbly entreat you to make payment right away to book your seat. Please call +233 246 535 961 when you have successfully made payment. Thank you</small>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div> -->


                                    <div class="card">
                                        <div class="list-group list-group-fit">
                                                        <div class="col-sm-9">
                                                            <div role="group"
                                                                 class="input-group input-group-merge form-control-prepended">
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
                                                       class="nav-link active">NTC CPD Training</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="payment.php"
                                                       class="nav-link">Payment</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="certification.php"
                                                       class="nav-link">Cerification</a>
                                                </li>
                                                <!-- <li class="nav-item">
                                                    <a href="student-account-edit-profile.html"
                                                       class="nav-link">Profile &amp; Privacy</a>
                                                </li> -->
                                            </ul>
                                            <!-- <div class="page-nav__content">
                                                <button class="btn btn-success">Submit</button>
                                            </div> -->
                                        </div>
                                    </div>
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

        <script src="assets/js/view.js"></script>

        <!-- Highlight.js -->
        <script src="assets/js/hljs.js"></script>

        <!-- App Settings (safe to remove) -->
        <script src="assets/js/app-settings.js"></script>


        <script>
            var paymentForm = document.getElementById('paymentForm');

            paymentForm.addEventListener('submit', payWithPaystack, false);

            function payWithPaystack() {
                
                var handler = PaystackPop.setup({
                
                    key: 'pk_test_25b3d5f8bfb5621c4569175877020aafe6085a0a', // Replace with your public key
                
                    email: '<?php echo $email; ?>',
                
                    amount: <?php echo $amount * 100; ?>, // the amount value is multiplied by 100 to convert to the lowest currency unit
                
                    currency: 'GHS', // Use GHS for Ghana Cedis or USD for US Dollars
                
                    firstname: '<?php echo $fname; ?>',
                
                    lastname: '<?php echo $lname; ?>',
                
                    ref: '<?php echo $myref; ?>', // Replace with a reference you generated
                    metadata: {
                        custom_fields : 
                            [
                                    {
                                        display_name: 'Mobile Number',
                                        variable_name: 'mobile_number',
                                        value:"+233556676471"
                                    }
                                    
                            
                            ]
                    },
                
                    callback: function(response) {
                
                    //this happens after the payment is completed successfully
                
                    var reference = response.reference;
                    var fname  = '<?php echo $fname; ?>';
                    var lname = '<?php echo $lname; ?>';
                    var email = '<?php echo $email; ?>';
                    var amount = '<?php echo $amount; ?>';
                
                    //   alert('Payment complete! Reference: ' + reference);
                    // window.location='success.php?ref='+ reference + '&fname=' + fname + '&lname=' + lname + '&email=' + email + '&amount=' + amount ;
                    
                    // Make an AJAX call to your server with the reference to verify the transaction
                    
                        if(response.status == "success"){
                            var myrf = '<?php echo $myref; ?>';
                            var mimi = 'dollar';
                            var formdt = $('#paymentForm')[0]; // You need to use standard javascript object here
                            var formData = new FormData(formdt);
                        
                            var opt = {
                                url : "dollar.php?action=paysuccess",
                                type: "post",
                                data:formData ,
                                contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                                processData: false,
                                cache:false, // NEEDED, DON'T OMIT THIS

                                success: function(rep){
                                setTimeout(function () { 
                                    swal({
                                    title: "Success!",
                                    text: "<small>You purchase is successfull  </small>",
                                    type: "success",
                                    html: true,
                                    confirmButtonText: "OK"
                                    },
                                    function(isConfirm){
                                    if (isConfirm) {
                                        window.location = "profile.php";
                                    }
                                    }); }, 1000);
                                }
                                
                            }
                            $.ajax(opt);
                        
                            

                                
                        
                        }            
                    },
                
                    onClose: function() {
                
                    alert('Transaction was not completed, window closed.');
                
                    },
                
                });
                
                handler.openIframe();
                
                }
        </script>


    <script src="https://js.paystack.co/v1/inline.js"></script>

    </body>


<!-- Mirrored from learnplus.demo.frontendmatter.com/student-account-edit-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 May 2022 13:24:33 GMT -->
</html>
