<?php
    session_start();
    require'dbcon.php';

?>

<?php include ('includes/header.php');?>

  <div class="container mt-4">

    <?php include('massage.php');?>
    
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Details
                        <a href="student_create.php"class="btn btn-danger float-end">ADD DETAILS</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S_No</th>
                                    <th>Bank_Name</th>
                                    <th>Branch</th>
                                    <th>Branch_Code</th>
                                    <th>Account_Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query="SELECT*FROM bank_details";
                                $query_run=mysqli_query($con,$query);

                                if(mysqli_num_rows($query_run)>0)
                                {
                                    foreach($query_run as $bank_details)
                                    {
                                        //echo 
                                        ?>
                                        <tr>
                                            <td><?=$bank_details['S_No'];?></td>
                                            <td><?=$bank_details['Bank_Name'];?></td>
                                            <td><?=$bank_details['Branch'];?></td>
                                            <td><?=$bank_details['Branch_Code'];?></td>
                                            <td><?=$bank_details['Account_Number'];?></td>
                                            <td>
                                                <a href="view.php?id=<?=$bank_details['S_No'];?>"  class="btn btn-info  btn-sm">VIEW</a>
                                                <a href="edit.php?id=<?=$bank_details['S_No'];?>" class="btn btn-success btn-sm">EDIT</a>
                                                <form action="code.php" method="POST" class="d-inline" >
                                                <button type="submit" name="Delete Record" value="<?=$bank_details['S_No'];?>" class="btn btn-danger  btn-sm">DELETE</a>
                                                </form>
                                            </td>
                                        </tr>

                                        <?php
                                    }
                                }
                                else
                                {
                                    echo"<h5> No Record Found</h5>";

                                }

                                ?>
                                

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>
        </div>

    </div>
  </div>
 
  <?php include ('includes/header.php');?>
    