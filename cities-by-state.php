<?php
require_once "db.php";
$state_id = $_POST["state_id"];
$result = mysqli_query($conn,"SELECT * FROM lab where state_id = $state_id");
?>
<option value="">Select Lab</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["name"];?>"><?php echo $row["name"];?></option>
<?php
}
?>