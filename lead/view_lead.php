<?php
$conn = new mysqli("localhost", "root", "", "c_project");
$id=$_GET['view'];
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
                    <a class="nav-link " href="new_cust.php">
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
            <a href="/Project/home/logout.php" class="btn btn-light">Logout</a>
        </div>

    </nav>
    <div class="container mt-4 mb-4 shadow" style="height:1000px;">
        <div class="row">
            <div class="col-sm-3 card-header" style="height:1000px;">
                <ul class="nav nav-pills flex-column mt-2 card" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#personal"><i class="fa fa-info-circle"
                                aria-hidden="true"></i> Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#followup"><i class="fa fa-mobile"
                                aria-hidden="true"></i> Follow Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#note"><i class="fa fa-comment"
                                aria-hidden="true"></i> Notes</a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-9 mt-2">
                <div class="tab-content mt-2 border" style="">
                    <div id="personal" class=" tab-pane active">

                        <table class="table table-hover  ">

                            <?php 
                                $sql1="SELECT * FROM `cust_data` INNER JOIN `lead_data`WHERE cust_data.id = lead_data.cust_id AND cust_data.id=$id";
                                $resultset=$conn->query($sql1);
                                $cust_ID=22030001;
                                if($resultset->num_rows>0)
                                    {
                                        while($row = $resultset->fetch_assoc())
                                        {
                            ?>
                            <tbody class="">
                                <tr>
                                    <td>Customer ID</td>
                                    <?php echo"<td>".$cust_ID++."</td>";?>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-center"><b>Personal details</b></td>
                                </tr>
                                <tr>
                                    <td>Date</td>
                                    <?php echo "<td>".$row['date']."</td>";?>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <?php echo"<td>".$row['name']."</td>";?>
                                </tr>
                                <tr>
                                    <td>Patient Name</td>
                                    <?php echo"<td>".$row['p_name']."</td>";?>
                                </tr>
                                <tr>
                                    <td>Age</td>
                                    <?php echo"<td>".$row['p_age']."</td>";?>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <?php echo"<td>".$row['p_gen']."</td>";?>
                                </tr>
                                <tr>
                                    <td>Contact No.</td>
                                    <?php echo"<td>".$row['con_no']."</td>";?>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <?php echo"<td>".$row['p_addr']."</td>";?>
                                </tr>
                                <tr>
                                    <td>Pincode</td>
                                    <?php echo"<td>".$row['p_pin']."</td>";?>
                                </tr>
                                <tr>
                                    <td>Relation With Patient</td>
                                    <?php echo"<td>".$row['rel_pat']."</td>";?>
                                </tr>
                                <tr>
                                    <td>Doctor Name</td>
                                    <?php echo"<td>".$row['dr_name']."</td>";?>
                                </tr>
                                <tr>
                                    <td>Hospital Name</td>
                                    <?php echo"<td>".$row['hos_name']."</td>";?>
                                </tr>
                                <tr>
                                    <td>Health Issue</td>
                                    <?php echo"<td>".$row['helth_iss']."</td>";?>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-center"><b>Lead Information</b></td>
                                </tr>
                                <tr>
                                    <td>Interested In </td>
                                    <?php echo"<td>".$row['interest_in']."</td>";?>
                                </tr>
                                <tr>
                                    <td>Remark</td>
                                    <?php echo"<td>".$row['remark']."</td>";?>
                                </tr>
                                <tr>
                                    <td>Lead Source</td>
                                    <?php 
                                        switch($row['lead_source']){
                                            case 1:
                                                echo"<td> Facebook Ad</td>";
                                            break;
                                            case 2:
                                                echo"<td> Company Website</td>";
                                            break;
                                            case 3:
                                                echo"<td> Google Ads</td>";
                                            break;
                                            case 4:
                                                echo"<td> Instagram</td>";
                                            break;
                                            case 5:
                                                echo"<td> Referral</td>";
                                            break;
                                            case 6:
                                                echo"<td> Other Sources</td>";
                                            break;
                                            default:
                                            echo"<td>Some Error</td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <?php 
                                        switch($row['status']){
                                            case 0:
                                                echo"<td> New Prospect</td>";
                                            break;
                                            case 1:
                                                echo"<td> Working</td>";
                                            break;
                                            case 2:
                                                echo"<td> Opportunity</td>";
                                            break;
                                            case 3:
                                                echo"<td> Not a Target</td>";
                                            break;
                                            case 4:
                                                echo"<td> Oppotunity Lost</td>";
                                            break;
                                            case 5:
                                                echo"<td> Inactive</td>";
                                            break;
                                            default:
                                            echo"<td>Some Error</td>";
                                        }
                                    ?>
                                </tr>
                                <?php
                                            echo"</tr>";
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div id="followup" class="container tab-pane fade">
                        <div class="mt-3">
                            <div class="text-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#followup1">
                                    Add New Follow Up
                                </button>
                            </div>
                            <div class="modal" id="followup1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="" method="POST">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h6 class="modal-title">Add New Follow Up</h6>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">

                                                <label for="followuptype" class="form-label">Follow Up Type :</label>
                                                <select name="followuptype" class="form-control list-group" id="">
                                                    <option value="By Call" class="list-group-item">By Call</option>
                                                    <option value="By Message" class="list-group-item ">By Message</option>
                                                </select><br>
                                                <label for="date" class="form-label">FollowUp Date</label>
                                                <input type="date" name="date" class="form-control" id=""><br>
                                                <label for="time" class="form-label">FollowUp Time</label>
                                                <input type="time" name="time" class="form-control" id=""><br>
                                                <label for="remark" class="form-label">Remark :</label>
                                                <textarea name="remark" id="" class="form-control" cols="50" rows="3">
                                                </textarea>

                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="submit" name="submit"
                                                    class="btn btn-primary">Submit</button>
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="container">
                                <?php 
                                $sql2="SELECT * FROM `followup_data` WHERE cust_id = $id";
                                $result=$conn->query($sql2);
                                if($result->num_rows>0)
                                    {
                                        while($row = $result->fetch_assoc())
                                        {
                                ?>
                                <div class="card m-3 shadow">
                                    <div class="m-4 ">
                                        <div class="row mt-1">
                                            <div class="col-sm-3 text-muted">Follow Up Type</div>
                                            <div class="col-sm-1 text-muted">:</div>
                                            <div class="col-sm-8"><?php echo $row['followup_type']; ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 text-muted">Follow Up Date</div>
                                            <div class="col-sm-1 text-muted">:</div>
                                            <div class="col-sm-8"><?php echo $row['date']; ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 text-muted">Follow Up Time</div>
                                            <div class="col-sm-1 text-muted">:</div>
                                            <div class="col-sm-8"><?php echo $row['time']; ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 text-muted">Remark</div>
                                            <div class="col-sm-1 text-muted">:</div>
                                            <div class="col-sm-8"><?php echo $row['remark']; ?></div>
                                        </div>
                                        <div class="text-right">
                                        <div class="btn-group btn-group-sm ">
                                            <a href="" class="btn btn-light border">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                View
                                            </a>

                                            <a href=""
                                                class="btn btn-light border"><i class='fa fa-edit'></i>Edit</a>
                                                
                                            <a href=""
                                                class="btn btn-light border"><i class='fa fa-trash'></i>Delete</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                        }
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                    <div id="note" class="container tab-pane fade"> 
                    <div class="mt-3">
                            <div class="text-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#note1">
                                    Add New Note
                                </button>
                            </div>
                            <div class="modal" id="note1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="" method="POST">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h6 class="modal-title">Add New Note</h6>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <label for="notes" class="form-label">Notes :</label>
                                                <textarea name="notes" id="" class="form-control" cols="50" rows="3">
                                                </textarea>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="submit" name="submit1"
                                                    class="btn btn-primary">Submit</button>
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="container">
                                <?php 
                                $sql1="SELECT * FROM `notes_data` WHERE cust_id =  $id";
                                $result=$conn->query($sql1);
                                if($result->num_rows>0)
                                    {
                                        while($row = $result->fetch_assoc())
                                        {
                                ?>
                                <div class="card m-3 shadow">
                                    <div class="m-4 ">
                                        <div class="row mt-1">
                                            <div class="col-sm-3 text-muted">Notes</div>
                                            <div class="col-sm-1 text-muted">:</div>
                                            <div class="col-sm-8"><?php echo $row['notes']; ?></div>
                                        </div>
                                        <div class="text-right">
                                        <div class="btn-group btn-group-sm ">
                                            <a href="" class="btn btn-light border">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                View
                                            </a>

                                            <a href=""
                                                class="btn btn-light border"><i class='fa fa-edit'></i>Edit</a>
                                                
                                            <a href=""
                                                class="btn btn-light border"><i class='fa fa-trash'></i>Delete</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                        }
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

</body>

</html>
<?php
if(isset($_POST['submit']))
    {
        $Followup_type = $_POST['followuptype'];
        $Date = $_POST['date'];
        $Time = $_POST['time'];
        $Remark = $_POST['remark'];
        

      
        $sql="INSERT INTO `followup_data`(`cust_id`, `followup_type`, `date`, `time`, `remark`) VALUES ('$id','$Followup_type','$Date','$Time','$Remark')";
        if($conn->query($sql))
            {
               echo"<script>alert('Your has been saved successfully')</script>";
               
            }
        else 
        {
            echo "Sorry, there was an error in saving your data";
        }
    }
    if(isset($_POST['submit1']))
    {
        $Notes = $_POST['notes'];
        

      
        $sql="INSERT INTO `notes_data`(`cust_id`, `notes`) VALUES ('$id','$Notes')";
        if($conn->query($sql))
            {
               echo"<script>alert('Your has been saved successfully')</script>";
               
            }
        else 
        {
            echo "Sorry, there was an error in saving your data";
        }
    }
?>