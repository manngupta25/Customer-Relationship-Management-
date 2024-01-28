<?php
$conn = new mysqli("localhost", "root", "", "c_project");
$id = 0;

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>

<body>

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
                </li>---->
                <li class="nav-item">
                    <a class="nav-link">Nothing</a>
                </li>
            </ul>

        </div>
        <div class="text-end">
            <a href="/Project/home/logout.php" class="btn btn-light">
                </i>Logout</a>
        </div>

    </nav>

    <div class="container-fluid mt-5 p-2">
        <div class="text-right">
            <a href="manage_lead.php" class="btn btn-sm btn-flat btn-primary">Add New Lead</a>
        </div>
        <div class="row">
            <div class="col-md-1">
                <div class="" style="height: 100%;">

                </div>
            </div>
            <div class="">
                <!-- Nav tabs -->  
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#new">New Prospect</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#working">Working</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#oppor">Opportunity</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#notatarget">Not a Target</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#opporlost">Opportunity Lost</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#inactive">Inactive</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="new" class="container tab-pane active"><br>
                        <h3></h3>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-light text-center">
                                    <tr>
                                        <th>#</th>
                                        <th>Customer ID.</th>
                                        <th>Date</th>
                                        <th>Customer Name</th>
                                        <th>Patient Name</th>
                                        <th>Contact No.</th>
                                        <th>Address</th>
                                        <th>Doctor Name</th>
                                        <th>Hospital Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php 
                                    $sql1="SELECT * FROM `cust_data` INNER JOIN `lead_data`WHERE cust_data.id = lead_data.cust_id AND lead_data.status = 0;";
                                    $resultset=$conn->query($sql1);
                                    $cust_ID=22030001;
                                    $count=1;
                                    if($resultset->num_rows>0)
                                    {
                                        while($row = $resultset->fetch_assoc())
                                        {
                                            echo"<tr>";
                                            echo"<td>".$count++."</td>";
                                            echo"<td>".$cust_ID++."</td>";
                                            echo "<td>".$row['date']."</td>";
                                            echo"<td>".$row['name']."</td>";
                                            echo"<td>".$row['p_name']."</td>";
                                            echo"<td>".$row['con_no']."</td>";
                                            echo"<td>".$row['p_addr']."</td>";
                                            echo"<td>".$row['dr_name']."</td>";
                                            echo"<td>".$row['hos_name']."</td>";
                                        ?>
                                    <td>
                                        <div class="btn-group ">
                                            <a href="view_lead.php?view=<?php echo $row['cust_id']; ?>" class="btn btn-light border">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>

                                            <a href="manage_lead.php?edit=<?php echo $row['cust_id']; ?>"
                                                class="btn btn-light border"><i class='fa fa-edit'></i></a>

                                            <a href="new_cust.php?delete=<?php echo $row['id']; ?>"
                                                class="btn btn-light border"><i class='fa fa-trash'></i></a>
                                        </div>
                                    </td>
                                    <?php
                                            echo"</tr>";
                                        }
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="working" class="container tab-pane fade"><br>
                        <h3></h3>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-light text-center">
                                    <tr>
                                        <th>#</th>
                                        <th>Customer ID.</th>
                                        <th>Date</th>
                                        <th>Customer Name</th>
                                        <th>Patient Name</th>
                                        <th>Contact No.</th>
                                        <th>Address</th>
                                        <th>Doctor Name</th>
                                        <th>Hospital Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php 
                                    $sql1="SELECT * FROM `cust_data` INNER JOIN `lead_data`WHERE cust_data.id = lead_data.cust_id AND lead_data.status = 1;";
                                    $resultset=$conn->query($sql1);
                                    $cust_ID=22030001;
                                    $count=1;
                                    if($resultset->num_rows>0)
                                    {
                                        while($row = $resultset->fetch_assoc())
                                        {
                                            echo"<tr>";
                                            echo"<td>".$count++."</td>";
                                            echo"<td>".$cust_ID++."</td>";
                                            echo "<td>".$row['date']."</td>";
                                            echo"<td>".$row['name']."</td>";
                                            echo"<td>".$row['p_name']."</td>";
                                            echo"<td>".$row['con_no']."</td>";
                                            echo"<td>".$row['p_addr']."</td>";
                                            echo"<td>".$row['dr_name']."</td>";
                                            echo"<td>".$row['hos_name']."</td>";
                                            ?>
                                    <td>
                                        <div class="btn-group ">
                                            <a href="view_lead.php?view=<?php echo $row['cust_id']; ?>" class="btn btn-light border">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>

                                            <a href="manage_lead.php?edit=<?php echo $row['cust_id']; ?>"
                                                class="btn btn-light border"><i class='fa fa-edit'></i></a>

                                            <a href="new_cust.php?delete=<?php echo $row['id']; ?>"
                                                class="btn btn-light border"><i class='fa fa-trash'></i></a>
                                        </div>
                                    </td>
                                    <?php
                                            echo"</tr>";
                                        }
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div id="oppor" class="container tab-pane fade"><br>
                        <h3></h3>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-light text-center">
                                    <tr>
                                        <th>#</th>
                                        <th>Customer ID.</th>
                                        <th>Date</th>
                                        <th>Customer Name</th>
                                        <th>Patient Name</th>
                                        <th>Contact No.</th>
                                        <th>Address</th>
                                        <th>Doctor Name</th>
                                        <th>Hospital Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php 
                                    $sql1="SELECT * FROM `cust_data` INNER JOIN `lead_data`WHERE cust_data.id = lead_data.cust_id AND lead_data.status = 2;";
                                    $resultset=$conn->query($sql1);
                                    $cust_ID=22030001;
                                    $count=1;
                                    if($resultset->num_rows>0)
                                    {
                                        while($row = $resultset->fetch_assoc())
                                        {
                                            echo"<tr>";
                                            echo"<td>".$count++."</td>";
                                            echo"<td>".$cust_ID++."</td>";
                                            echo "<td>".$row['date']."</td>";
                                            echo"<td>".$row['name']."</td>";
                                            echo"<td>".$row['p_name']."</td>";
                                            echo"<td>".$row['con_no']."</td>";
                                            echo"<td>".$row['p_addr']."</td>";
                                            echo"<td>".$row['dr_name']."</td>";
                                            echo"<td>".$row['hos_name']."</td>";
                                            ?>
                                    <td>
                                        <div class="btn-group ">
                                            <a href="view_lead.php?view=<?php echo $row['cust_id']; ?>" class="btn btn-light border">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>

                                            <a href="manage_lead.php?edit=<?php echo $row['cust_id']; ?>"
                                                class="btn btn-light border"><i class='fa fa-edit'></i></a>

                                            <a href="new_cust.php?delete=<?php echo $row['id']; ?>"
                                                class="btn btn-light border"><i class='fa fa-trash'></i></a>
                                        </div>
                                    </td>
                                    <?php
                                            echo"</tr>";
                                        }
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="notatarget" class="container tab-pane fade"><br>
                        <h3></h3>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-light text-center">
                                    <tr>
                                        <th>#</th>
                                        <th>Customer ID.</th>
                                        <th>Date</th>
                                        <th>Customer Name</th>
                                        <th>Patient Name</th>
                                        <th>Contact No.</th>
                                        <th>Address</th>
                                        <th>Doctor Name</th>
                                        <th>Hospital Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php 
                                    $sql1="SELECT * FROM `cust_data` INNER JOIN `lead_data`WHERE cust_data.id = lead_data.cust_id AND lead_data.status = 3;";
                                    $resultset=$conn->query($sql1);
                                    $cust_ID=22030001;
                                    $count=1;
                                    if($resultset->num_rows>0)
                                    {
                                        while($row = $resultset->fetch_assoc())
                                        {
                                            echo"<tr>";
                                            echo"<td>".$count++."</td>";
                                            echo"<td>".$cust_ID++."</td>";
                                            echo "<td>".$row['date']."</td>";
                                            echo"<td>".$row['name']."</td>";
                                            echo"<td>".$row['p_name']."</td>";
                                            echo"<td>".$row['con_no']."</td>";
                                            echo"<td>".$row['p_addr']."</td>";
                                            echo"<td>".$row['dr_name']."</td>";
                                            echo"<td>".$row['hos_name']."</td>";
                                            ?>
                                    <td>
                                        <div class="btn-group ">
                                            <a href="view_lead.php?view=<?php echo $row['cust_id']; ?>" class="btn btn-light border">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>

                                            <a href="manage_lead.php?edit=<?php echo $row['cust_id']; ?>"
                                                class="btn btn-light border"><i class='fa fa-edit'></i></a>

                                            <a href="new_cust.php?delete=<?php echo $row['id']; ?>"
                                                class="btn btn-light border"><i class='fa fa-trash'></i></a>
                                        </div>
                                    </td>
                                    <?php
                                            echo"</tr>";
                                        }
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="opporlost" class="container tab-pane fade"><br>
                        <h3></h3>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-light text-center">
                                    <tr>
                                        <th>#</th>
                                        <th>Customer ID.</th>
                                        <th>Date</th>
                                        <th>Customer Name</th>
                                        <th>Patient Name</th>
                                        <th>Contact No.</th>
                                        <th>Address</th>
                                        <th>Doctor Name</th>
                                        <th>Hospital Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php 
                                    $sql1="SELECT * FROM `cust_data` INNER JOIN `lead_data`WHERE cust_data.id = lead_data.cust_id AND lead_data.status = 4;";
                                    $resultset=$conn->query($sql1);
                                    $cust_ID=22030001;
                                    $count=1;
                                    if($resultset->num_rows>0)
                                    {
                                        while($row = $resultset->fetch_assoc())
                                        {
                                            echo"<tr>";
                                            echo"<td>".$count++."</td>";
                                            echo"<td>".$cust_ID++."</td>";
                                            echo "<td>".$row['date']."</td>";
                                            echo"<td>".$row['name']."</td>";
                                            echo"<td>".$row['p_name']."</td>";
                                            echo"<td>".$row['con_no']."</td>";
                                            echo"<td>".$row['p_addr']."</td>";
                                            echo"<td>".$row['dr_name']."</td>";
                                            echo"<td>".$row['hos_name']."</td>";
                                            ?>
                                    <td>
                                        <div class="btn-group ">
                                            <a href="view_lead.php?view=<?php echo $row['cust_id']; ?>" class="btn btn-light border">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>

                                            <a href="manage_lead.php?edit=<?php echo $row['cust_id']; ?>"
                                                class="btn btn-light border"><i class='fa fa-edit'></i></a>

                                            <a href="new_cust.php?delete=<?php echo $row['id']; ?>"
                                                class="btn btn-light border"><i class='fa fa-trash'></i></a>
                                        </div>
                                    </td>
                                    <?php
                                            echo"</tr>";
                                        }
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="inactive" class="container tab-pane fade"><br>
                        <h3></h3>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-light text-center">
                                    <tr>
                                        <th>#</th>
                                        <th>Customer ID.</th>
                                        <th>Date</th>
                                        <th>Customer Name</th>
                                        <th>Patient Name</th>
                                        <th>Contact No.</th>
                                        <th>Address</th>
                                        <th>Doctor Name</th>
                                        <th>Hospital Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php 
                                    $sql1="SELECT * FROM `cust_data` INNER JOIN `lead_data`WHERE cust_data.id = lead_data.cust_id AND lead_data.status = 5;";
                                    $resultset=$conn->query($sql1);
                                    $cust_ID=22030001;
                                    $count=1;
                                    if($resultset->num_rows>0)
                                    {
                                        while($row = $resultset->fetch_assoc())
                                        {
                                            echo"<tr>";
                                            echo"<td>".$count++."</td>";
                                            echo"<td>".$cust_ID++."</td>";
                                            echo "<td>".$row['date']."</td>";
                                            echo"<td>".$row['name']."</td>";
                                            echo"<td>".$row['p_name']."</td>";
                                            echo"<td>".$row['con_no']."</td>";
                                            echo"<td>".$row['p_addr']."</td>";
                                            echo"<td>".$row['dr_name']."</td>";
                                            echo"<td>".$row['hos_name']."</td>";
                                            ?>
                                    <td>
                                        <div class="btn-group ">
                                            <a href="view_lead.php?view=<?php echo $row['cust_id']; ?>" class="btn btn-light border">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>

                                            <a href="manage_lead.php?edit=<?php echo $row['cust_id']; ?>"
                                                class="btn btn-light border"><i class='fa fa-edit'></i></a>

                                            <a href="new_cust.php?delete=<?php echo $row['id']; ?>"
                                                class="btn btn-light border"><i class='fa fa-trash'></i></a>
                                        </div>
                                    </td>
                                    <?php
                                            echo"</tr>";
                                        }
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
<?php
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];

        $dlt="DELETE FROM `lead_data` WHERE cust_id=$id";

        if($conn->query($dlt)){
            $id = $_GET['delete'];

            $dlt2 = "DELETE FROM `cust_data` WHERE id=$id";
            if($conn->query($dlt2)){

            echo"<script>alert('Your data has been deleted successfully')</script>";}
            
            
        }else{
        echo"<script>alert('Sorry, there was an error in deleting your data')</script>";
    }
    }

    
?>
<!---<div class="row">
            <div class="col-md-1">
                <div class="" style="height: 100%;">

                </div>
            </div>
            <div class="ml-2 ">


                <h1 class=" text-center text-muted">Details of New Customer</h1><br>
                <div class="list-group-item list-group-item-action list-item rounded-0">
                    <?php 
                    $sql1="SELECT * FROM `cust_data` WHERE 1";
                    $resultset=$conn->query($sql1);
                    $cust_ID=22030001;
                    if($resultset->num_rows>0)
                    {
                    while($row = $resultset->fetch_assoc())
                    {
                ?>
                
                    <div class="row ">
                        <div class="col-lg-6 col-sm-12 ">
                            <div class="d-flex">
                                <div class="col-auto text-muted pl-3">Customer ID:</div>
                                <div class="col-auto flex-glow-1 flex-shrink-1">
                                    <p class="m-0 truncate-1">
                                        <b><?php echo $cust_ID; ?></b>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="col-auto text-muted pl-3">Date:</div>
                                <div class="col-auto flex-glow-1 flex-shrink-1">
                                    <p class="m-0 truncate-1">
                                        <b><?php  echo $row['date']; ?></b>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="col-auto text-muted pl-3">Name:</div>
                                <div class="col-auto flex-glow-1 flex-shrink-1">
                                    <p class="m-0 truncate-1">
                                        <b><?php  echo $row['name']; ?></b>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="col-auto text-muted pl-3">Patient Name:</div>
                                <div class="col-auto flex-glow-1 flex-shrink-1">
                                    <p class="m-0 truncate-1">
                                        <b><?php  echo $row['p_name']; ?></b>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="col-auto text-muted pl-3">Patient Age:</div>
                                <div class="col-auto flex-glow-1 flex-shrink-1">
                                    <p class="m-0 truncate-1">
                                        <b><?php  echo $row['p_age']; ?></b>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="col-auto text-muted pl-3">Patient Gender:</div>
                                <div class="col-auto flex-glow-1 flex-shrink-1">
                                    <p class="m-0 truncate-1">
                                        <b><?php  echo $row['p_gen']; ?></b>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="col-auto text-muted pl-3">Contact Number:</div>
                                <div class="col-auto flex-glow-1 flex-shrink-1">
                                    <p class="m-0 truncate-1">
                                        <b><?php  echo $row['con_no']; ?></b>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="d-flex">
                                <div class="col-auto text-muted pl-3">Patient Address:</div>
                                <div class="col-auto flex-glow-1 flex-shrink-1">
                                    <p class="m-0 truncate-1">
                                        <b><?php  echo $row['p_addr']; ?></b>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="col-auto text-muted pl-3">Patient Pincode:</div>
                                <div class="col-auto flex-glow-1 flex-shrink-1">
                                    <p class="m-0 truncate-1">
                                        <b><?php  echo $row['p_pin']; ?></b>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="col-auto text-muted pl-3">Relation With Patient:</div>
                                <div class="col-auto flex-glow-1 flex-shrink-1">
                                    <p class="m-0 truncate-1">
                                        <b><?php  echo $row['rel_pat']; ?></b>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="col-auto text-muted pl-3">Doctor Name:</div>
                                <div class="col-auto flex-glow-1 flex-shrink-1">
                                    <p class="m-0 truncate-1">
                                        <b><?php  echo $row['dr_name']; ?></b>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="col-auto text-muted pl-3">Hospital Name:</div>
                                <div class="col-auto flex-glow-1 flex-shrink-1">
                                    <p class="m-0 truncate-1">
                                        <b><?php  echo $row['hos_name']; ?></b>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="col-auto text-muted pl-3">Health Issue:</div>
                                <div class="col-auto flex-glow-1 flex-shrink-1">
                                    <p class="m-0 truncate-1">
                                        <b><?php  echo $row['helth_iss']; ?></b>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="text-right">
                        <a href="" class="btn btn-sm btn-flat btn-light border">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                            View Lead
                        </a>
                        <a href="manage_lead.php?edit=<?php echo $row['id']; ?>"
                            class="btn btn-sm btn-flat btn-primary">Edit Detail</a>
                        <a href="new_cust.php?delete=<?php echo $row['id']; ?>"
                            class="btn btn-sm btn-flat btn-primary">Delete Detail</a>
                    </div>
                    <?php
                                //$cust_ID++;    
                                //echo"<hr>";
                                
                                }
                                
                            //}else{
                                //echo"<script>alert('No Data found....')</script>";
                        }
                        ?>
                </div>


            </div>
        </div>
</div>---->