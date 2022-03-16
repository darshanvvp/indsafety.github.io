<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>

      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Patient Form Insert</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
  
<body>
    <center>
        <?php
  
       
        $conn = mysqli_connect("localhost", "root", "", "health");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $first_name =  $_REQUEST['first_name'];
        $last_name = $_REQUEST['age'];
        $gender =  $_REQUEST['optionsRadios'];
        $address = $_REQUEST['address'];
$number = $_REQUEST['number'];
        $email = $_REQUEST['email'];
$aadhar = $_REQUEST['aadhar'];


$checkbox1=$_POST['check_p']; 

$chk="";
$chh="";

foreach($checkbox1 as $chk1)
{

$chk .= $chk1.",";



}




$cinf =  $_REQUEST['optionsRadios1'];
$date =  $_REQUEST['date'];

$sta_dropdown =  $_REQUEST['country-dropdown'];
$cty_dropdown =  $_REQUEST['state-dropdown'];
$lab_dropdown =  $_REQUEST['city-dropdown'];

$sql1 =  "SELECT name FROM states where id = $sta_dropdown";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $sta_dropdowna=$row["name"];
  }
} else {
  $sta_dropdowna='';
}


$sql2 =  "SELECT name FROM cities where id = $cty_dropdown";
$result1 = $conn->query($sql2);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row = $result1->fetch_assoc()) {
    $cty_dropdowna=$row["name"];
  }
} else {
  $cty_dropdowna='';
}




$sql4 =  "SELECT name FROM lblk where country_id='$lab_dropdown'";
$result5 = $conn->query($sql4);

if ($result5->num_rows > 0) {
  // output data of each row
  while($row = $result5->fetch_assoc()) {
    $lk_dropdowna=$row["name"];
  }
} else {
  $lk_dropdowna='';
}








          
        // Performing insert query execution
        // here our table name is health
        $sql = "INSERT INTO p VALUES ('$first_name', 
            '$last_name','$gender','$address','$email','$aadhar','$number','$chk','$chh','$cinf','$date','$sta_dropdowna','$cty_dropdowna','$lab_dropdown')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>Patient Detail's Save successfully.</h3>"; 



  

  
          
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
       

 mysqli_close($conn);
        ?>
    </center>



<div id="page-wrapper" >
            <div id="page-inner">
                
                 
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Patient Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">                                  
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Patient Name</label>
                                           

                                           <?php echo $first_name;?>
                                        </div>
                                        <div class="form-group">
                                            <label>Age</label>
                                            <?php echo $last_name;?>
                                        </div>


                                        <div class="form-group">
                                            <label>Gender</label>
                                            <?php echo $gender;?>
                                        </div>



                                        <div class="form-group">
                                            <label>Address</label>
                                            <?php echo $address;?>
                                        </div>
 <div class="form-group">
                                            <label>Number</label>
                                            <?php echo $number;?>
                                        </div>


<div class="form-group">
                                            <label>E-Mail Address</label>
                                            <?php echo $email;?>
                                        </div>

<div class="form-group">
                                            <label>Aadhar No.</label>
                                           <?php echo $aadhar;?>
                                        </div>


                                      
                                        
                                 
    </div>
                                
                                <div class="col-md-6">
                                    
                                            <div class="form-group">
                                            <label>Testing</label>
                                            <div class="checkbox">
                                                <label>
                                                    <?php echo $chk;?>
                                                </label>
                                            </div>
                                           
                                        </div>

                                        <div class="form-group">
                                            <label>COVID INFECTION</label>
                                            <?php echo $cinf;?> 
                                        </div>
                                        
<div class="form-group">
                                            
                                            <?php echo $date;?>
                                        </div>


 <div class="form-group">
                                        <label for="country">State</label>
<?php echo $sta_dropdowna;?>


</div>



<div class="form-group">
<label for="state">City</label>
<?php echo $cty_dropdowna;?>
</div>                        
<div class="form-group">
<label for="city">Lab</label>
<?php echo $lab_dropdown;?><?php echo $lk_dropdowna;?>
</div>





                                    </form>

                                         </form>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->

<Br/>

<a href="<?php echo $lk_dropdowna;?>">View</a>

<a href="index.php">HOME</a>
<a href="form.php">BACK</a>


</form>






    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   



</body>
  
</html>