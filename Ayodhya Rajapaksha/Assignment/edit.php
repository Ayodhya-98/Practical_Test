<?php
session_start();
require'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit</title>
  </head>
  <body>
    <div class="container mt-5">

        <?php include('massage.php');?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    
                        <h4>Edit Your Details Here 
                            <a href="index.php"class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>

                    <div class="card-body">

                    

                        <form action="code.php"method="POST">
                            <input type="hidden" name="S_No" value="<?=$S_No?>">

                       <div class="mb-3">
                       <label>Bank_Name</label>
                        <input type="text" name="Bank_Name"  class="form_control">
                       </div>

                       <div class="mb-3">
                       <label>Branch</label>
                        <input type="text" name="Branch"  class="form_control">
                       </div>

                       <div class="mb-3">
                       <label>Branch_Code</label>
                        <input type="text" name="Branch_Code"  class="form_control">
                       </div>

                       <div class="mb-3">
                       <label>Account_Number</label>
                        <input type="text" name="Account_Number" class="form_control">
                       </div>

                       <div class="mb-3">
                        <button type="Submit" name="Update"  class="btn btn-primary">Update </button>
                       </div>

                       
                        
                        </form>
                            </form>

                            <?php
                        if(isset($_GET['S_No']))
                        {
                            $S_No = mysqli_real_escape_string($con,$_GET['S_No']);
                            $query="SELECT*FROM bank_details WHERE S_No='S_No'";
                            $query_run=mysqli_query($con,$query);

                            if(mysqli_num_rows($query_run)>0)
                            {
                                $bank_details=mysqli_fetch_array($query_run);
                                ?>

                        <?php
                                
                            }

                            else
                            {
                                echo"<h4>No Such S_NO Found</h4>";
                            }    
                        }
                        ?>
                                <?php
                                
                            
                        
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>