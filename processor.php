<?php

require '../loader/autoloader.php';
require '../fragement/deep.php';
 if (isset($_GET['action'])) {
     switch ($_GET['action']) {
        case 'update':
            extract($_POST);
            // extract($_POST);
    updateuser($id, $title, $name, $gender, $email, $contact, $telegram, $lincesed, $nameofschool, $region, $district, $foodpref, $heard);

            break;

        case 'removecart':
            extract($_POST);
            deletefromcart($id);
            break;

        default:

        break;
    }
 }
