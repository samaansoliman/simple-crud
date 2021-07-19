

<?php



session_start();

if (!empty($_SESSION['user'])) {
    header('LOCATION: index.php');
}

require "lib.php";



if (isset($_POST['username'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //img data
    // print_r($_FILES['img']);die;
    $tmp = $_FILES['img']['tmp_name'];
    $type = $_FILES['img']['type'];
    // $imgname = $_FILES['img']['name'];
    // echo $type;die;
    $typeofar = explode("/", $type);
    // print_r($typeofar);die;
    $ext = $typeofar[1];

    $imgfullname = $username . "." . $ext;



    $newpassword = hash_pass($password);




    $re =  register($username, $email, $newpassword, $imgfullname);

    if ($re == true) {

        move_uploaded_file($tmp, 'userimg/' . $username . "." . $ext);

        echo "user added succsufly";
    } else {
        echo "failed data";
    }
}


include "design/register.html";






































/*
session_start();


// الريكوير علشان اعمل استدعاء الفانكشن 
require"lib.php";

if(isset($_POST['username']))
{
// طباعه الارراي للتاكد من انها تعمل
// print_r($_POST);
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

//  استدعاء بيانات ادخال العملاع من قواعد البيانات  بعد كتابتها في صفحه الريجستر
$re = register($username , $email, $password);

if($re == true)
    {
        echo"user added succsufly";
    }
    else
    {
        echo"failed to add data";
    }

}

include "design/register.html";
*/
