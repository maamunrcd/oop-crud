<?php
include './database.php';
if (isset($_REQUEST["add_student"])) {
    $data = $_REQUEST;
    extract($data);
    if (!empty($student_name) && !empty($student_email) ) {
        if ($obj->Insert("students", "student_name='$student_name',student_email='$student_email',student_phone='$student_phone',student_address='$student_address',student_type='$student_type',student_group='$student_group',student_status='1'")) {
            header('Location:view.php');
        } else {
            return false;
        }
    }else{
        header("Location:index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bower_components/bootstrap/dist/js/bootstrap.min.js">
        <link rel="stylesheet" href="bower_components/jquery/dist/jquery.min.js">
        <style>
            .registation{
                margin-top: 30px;
            }
            .registation .btn{
                border-radius: 0;
                padding: 7px 20px;
            }
            form{
                margin-top: 15px;
                padding: 20px 20px 10px 20px;
                border: 1px solid #B0BEC5;
            }
            form .form-group{
                margin:10px 0;
            }
            form .form-control{
                border-radius: 0;
                border: 1px solid #CFD8DC;
                color:#999999;
            }
            .add_btn{
                margin-right: 30px;
            }
        </style>
    </head>