<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>	
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>






</head>
<body>
  <form action="patient_insert.php" method="post">
                       <div id="page-wrapper" >
            <div id="page-inner">
                
                 <!-- /. ROW  -->
                 <hr />
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
                                            <input class="form-control" type="text" name="first_name" id="firstName" placeholder="Patient Name"/>
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>Age</label>
                                            <input class="form-control" placeholder="Age" type="text" name="age" id="age" />
                                        </div>


                                        <div class="form-group">
                                            <label>Gender</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="Male" checked />Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="Fe-Male"/>Fe-Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="Other"/>Other
                                                </label>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" rows="3" placeholder="Address" type="text" name="address" id="address"></textarea>
                                        </div>
 <div class="form-group">
                                            <label>Number</label>
                                            <input class="form-control" placeholder="Number" type="number" name="number" id="number" />
                                        </div>


<div class="form-group">
                                            <label>E-Mail Address</label>
                                            <input class="form-control" placeholder="E-Mail" type="text" name="email" id="emailAddress" />
                                        </div>

<div class="form-group">
                                            <label>Aadhar No.</label>
                                            <input class="form-control" placeholder="Aadhar Number" type="text" name="aadhar" id="aadharnumber" />
                                        </div>


                                      
                                        
                                 
    </div>
                                
                                <div class="col-md-6">
                                    
                                            <div class="form-group">
                                            <label>Testing</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="check_p[]" value="Hypertension"/>Hypertension
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="check_p[]" value="Diabetes"/>Diabetes
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>COVID INFECTION</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios1" id="optionsRadios4" value="No" checked />NO
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios1" id="optionsRadios5" value="Yes"/>Yes
                                                </label>
                                            </div>
                                        </div>
                                        
<div class="form-group">
                                            <label>Date</label>
                                            <input class="form-control" placeholder="Date ( DD-MM-YYYY )" type="text" name="date" id="date" />
                                        </div>


 <div class="form-group">
                                        <label for="country">State</label>
<select class="form-control" id="country-dropdown" name="country-dropdown">
<option value="">Select State</option>
<?php
require_once "db.php";
$result = mysqli_query($conn,"SELECT * FROM states");
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["id"];?>"><?php echo $row["name"];?></option>
<?php
}
?>
</select>


</div>



<div class="form-group">
<label for="state">City</label>
<select class="form-control" id="state-dropdown" name="state-dropdown">
</select>
</div>                        
<div class="form-group">
<label for="city">Lab</label>
<select class="form-control" id="city-dropdown" name="city-dropdown">
</select>
</div>






                                            <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
                                        
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


</form>


<script>
$(document).ready(function() {
$('#country-dropdown').on('change', function() {
var country_id = this.value;
$.ajax({
url: "states-by-country.php",
type: "POST",
data: {
country_id: country_id
},
cache: false,
success: function(result){
$("#state-dropdown").html(result);
$('#city-dropdown').html('<option value="">Select Lab First</option>'); 
}
});
});    
$('#state-dropdown').on('change', function() {
var state_id = this.value;
$.ajax({
url: "cities-by-state.php",
type: "POST",
data: {
state_id: state_id
},
cache: false,
success: function(result){
$("#city-dropdown").html(result);
}
});
});
});
</script>






    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
