
<?php
session_start();
require'dbcon.php'?>

  <?php include ('includes/header.php');?>
    <div class="container mt-5">

        <?php include('massage.php');?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    
                        <h4>Add Your Details Here 
                            <a href="index.php"class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php"method="POST">

                       <div class="mb-3">
                       <label>Bank_Name</label>
                        <input type="text" name="Bank_Name" class="form_control">
                       </div>

                       <div class="mb-3">
                       <label>Branch</label>
                        <input type="text" name="Branch" class="form_control">
                       </div>

                       <div class="mb-3">
                       <label>Branch_Code</label>
                        <input type="text" name="Branch_Code" class="form_control">
                       </div>

                       <div class="mb-3">
                       <label>Account_Number</label>
                        <input type="text" name="Account_Number" class="form_control">
                       </div>

                       <div class="mb-3">
                        <button type="Submit" name="Save"class="btn btn-primary">Save</button>
                       </div>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <?php include ('includes/footer.php');?>