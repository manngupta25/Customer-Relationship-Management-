<?php

session_start();
if(!isset($_SESSION['uname'])){
    header("location:/Project/admin.php");
}else{}
$conn = new mysqli("localhost", "root", "", "c_project");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Relationship Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="navbar navbar-expand-md navbar-dark sticky-top bg-dark">
        <a class="navbar-brand" href="/Project/home/home.php"> MY CRM</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/PROJECT/lead\new_cust.php">
                        Lead
                    </a>

                </li>
                <!----<li class="nav-item">
                    <a class="nav-link" href="/Project/payment.php">Opportunities</a>
                </li>----->
                <li class="nav-item">
                    <a class="nav-link">Nothing</a>
                </li>
            </ul>
        </div>
        <div class="text-end">
            <a href="/Project/home/logout.php" class="btn btn-light">Logout</a>
        </div>
    </div>
    <div class="container ">
        <div class="row text-center mt-5 ">
            <div class="card p-3 m-auto shadow ">
                <div class="card-header bg-secondary text-white">Total Lead Sources</div>
                <div class="card-body"><?php
                echo $conn->query("SELECT * FROM `source` WHERE 1")->num_rows;
                ?></div>
            </div>
            <div class="card p-3 m-auto shadow ">
                <div class="card-header bg-secondary text-white">Total Lead </div>
                <div class="card-body"><?php
                echo $conn->query("SELECT * FROM `lead_data` WHERE 1")->num_rows;
                ?></div>
            </div>
            <div class="card p-3 m-auto shadow ">
                <div class="card-header bg-secondary text-white">Total Opportunities</div>
                <div class="card-body"><?php
                echo $conn->query("SELECT * FROM `lead_data` WHERE status=2")->num_rows;
                ?></div>
            </div>
        </div>

</html>