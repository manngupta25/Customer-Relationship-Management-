<?php
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <?php require_once 'manage_lead.php'; ?>
    <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark">
        <a class="navbar-brand" href="/Project/home/home.php"> MY CRM</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="/Project/home/home.php">Home</a>
                </li>
                <li class="nav-item  active">
                    <a class="nav-link " href="#">
                        Lead<span class="sr-only">(current)</span>
                    </a>
                </li>
                <!----<li class="nav-item">
                    <a class="nav-link" href="/Project/payment.php">Opportunities</a>
                </li>--->
                <li class="nav-item">
                    <a class="nav-link">Nothing</a>
                </li>
            </ul>

        </div>
        <div class="text-end">
            <a href="/Project/home/logout.php" class="btn btn-light">Logout</a>
        </div>

    </nav>
    <div class="content py-3">
        <div class="container">
        <div class="card card-outline card-navy shadow rounded-0">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="card-header">
                    <div class="card-title">
                        <h5 class="card-title">Add New Lead </h5>
                    </div>
                </div>
                <div class="card-body">

                    <div class="container ">

                        <div class="row">
                            <div class=" col-lg-6 col-md-6 col-sm-12">
                                <fieldset>
                                    <legend class=" text-muted h4">Personal Details</legend>
                                    <div class="">
                                        <input type="hidden" name="id" >
                                        <label for="date" class="form-label">Date:</label>
                                        <input type="date" class="form-control" name="date" id="" ><br>
                                        <label for="name" class="form-label">Name:</label>
                                        <input type="text" class="form-control" name="name" id="" ><br>
                                        <label for="pname" class="form-label">Patient Name:</label>
                                        <input type="text" name="pname" class="form-control" id=""><br>
                                        <label for="page" class="form-label">Age:</label>
                                        <input type="number" class="form-control" name="page" id="" ><br>
                                        <label for="pgender" class="form-label">Gender:</label>
                                        <select name="pgender" class="form-control" id="" >
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select><br>
                                        <label for="mobno" class="form-label">Contact No.:</label>
                                        <input type="number" class="form-control" name="mobno" id="" ><br>
                                        <label for="address" class="form-label">Address:</label>
                                        <textarea name="address" class="form-control" id="" cols="20"
                                            rows="" ></textarea><br>
                                        <label for="pincode" class="form-label">Pincode:</label>
                                        <input type="number" class="form-control" name="pincode" id="" ><br>
                                        <label for="prelat" class="form-label">Relation with Patient:</label>
                                        <input type="text" class="form-control" name="prelat" id=""><br>
                                        <label for="drname" class="form-label">Doctor Name:</label>
                                        <input type="text" class="form-control" name="drname" id="" ><br>
                                        <label for="hname" class="form-label">Hospital Name:</label>
                                        <input type="text" class="form-control" name="hname" id="" ><br>
                                        <label for="hissue" class="form-label">Health Issue:</label>
                                        <input type="text" class="form-control" name="hissue" id="" ><br>
                                    </div>
                                </fieldset>
                            </div>
                            <div class=" col-lg-6 col-md-6 col-sm-12 ">
                                <fieldset>
                                    <legend class="text-muted h4">Lead Information</legend>
                                    <div class="">
                                        <label for="interest" class="form-label">Intersted In:</label>
                                        <input type="text" class="form-control" name="interest" id="" ><br>
                                        <label for="remark" class="form-label">Remark:</label>
                                        <textarea name="remark" class="form-control" id="" cols="20"
                                            rows="" value=""></textarea><br>
                                        <label for="lsource" class="form-label">Lead Source:</label>
                                        <select name="lsource" class="form-control" id=""  ?>">

                                            <option value="1">Facebook Ad</option>
                                            <option value="2">Company Website</option>
                                            <option value="3">Google AD</option>
                                            <option value="4">Instagram</option>
                                            <option value="6">Other Source</option>
                                            <option value="5">Referral</option>
                                        </select><br>
                                        <label for="status" class="form-label">Status:</label>
                                        <select name="status" class="form-control" id="">
                                            <option value="0">New/Prospect</option>
                                            <option value="1">Working</option>
                                            <option value="2">Opportunity</option>
                                            <option value="3">Not a Target</option>
                                            <option value="4">Opportunity Lost</option>
                                            <option value="5">Inactive</option>
                                        </select><br>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="card-footer py-2 text-right">
                        
                            <input type="submit" class="btn btn-primary " name="submit" value="Submit">
                            
                            <a href="new_cust.php">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>

</body>

</html>
<?php

    if(isset($_POST['submit']))
    {
        $Date = $_POST['date'];
        $Name = $_POST['name'];
        $Patient_name = $_POST['pname'];
        $Patient_age = $_POST['page'];
        $Patient_gender = $_POST['pgender'];
        $Patient_mobno = $_POST['mobno'];
        $Patient_address = $_POST['address'];
        $Patient_pincode = $_POST['pincode'];
        $Patient_relation = $_POST['prelat'];
        $Doctor_name = $_POST['drname'];
        $Hospital_name = $_POST['hname'];
        $Health_issue = $_POST['hissue'];

        $Interest = $_POST['interest'];
        $remark = $_POST['remark'];
        $leadsour = $_POST['lsource'];
        $Status = $_POST['status'];

        

      
        $sql="INSERT INTO `cust_data`( `date`,`name`, `p_name`, `p_age`, `p_gen`, `con_no`, `p_addr`, `p_pin`, `rel_pat`, `dr_name`, `hos_name`, `helth_iss`) 
         VALUES ('$Date','$Name','$Patient_name', '$Patient_age', '$Patient_gender', '$Patient_mobno', '$Patient_address','$Patient_pincode','$Patient_relation','$Doctor_name','$Hospital_name','$Health_issue')";
        if($conn->query($sql))
            {
                $sql2="SELECT id FROM cust_data ORDER BY id DESC LIMIT 1";
                $resultset=$conn->query($sql2);
                
                $row = $resultset->fetch_assoc();
                $id=$row['id'];
                $sql1="INSERT INTO `lead_data`(`cust_id`,`interest_in`, `remark`, `lead_source`, `status`) VALUES ($id,'$Interest','$remark','$leadsour','$Status')";
                //print_r($sql1);
                if($conn->query($sql1)){
                
                }
               echo"<script>alert('Your has been saved successfully')</script>";
               header("location: new_cust.php");
            }
        else 
        {
            echo "Sorry, there was an error in saving your data";
        }
    }
    
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
    
        $result=$conn->query("SELECT * FROM `cust_data` WHERE id = $id");
        if($result->num_rows>0){
            $row = $result->fetch_array();

            $Date = $row['date'];
            $Name = $row['name'];
            $Patient_name = $row['p_name'];
            $Patient_age = $row['p_age'];
            $Patient_gender = $row['p_gen'];
            $Patient_mobno = $row['con_no'];
            $Patient_address = $row['p_addr'];
            $Patient_pincode = $row['p_pin'];
            $Patient_relation = $row['rel_pat'];
            $Doctor_name = $row['dr_name'];
            $Hospital_name = $row['hos_name'];
            $Health_issue = $row['helth_iss'];
        }
    }
    
   if(isset($_POST['update']))
    {
        $Date = $_POST['date'];
        $Name = $_POST['name'];
        $Patient_name = $_POST['pname'];
        $Patient_age = $_POST['page'];
        $Patient_gender = $_POST['pgender'];
        $Patient_mobno = $_POST['mobno'];
        $Patient_address = $_POST['address'];
        $Patient_pincode = $_POST['pincode'];
        $Patient_relation = $_POST['prelat'];
        $Doctor_name = $_POST['drname'];
        $Hospital_name = $_POST['hname'];
        $Health_issue = $_POST['hissue'];

        $Interest = $_POST['interest'];
        $remark = $_POST['remark'];
        $leadsour = $_POST['lsource'];
        $Status = $_POST['status'];

        $conn->query("");
    }
?>