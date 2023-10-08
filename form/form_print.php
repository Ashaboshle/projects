<?php
require('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="view.php"></a>
    <a href="logout.php"></a></p>

<html>
<head>
<title>APPLICANT DETAILS</title>	
</head>
<body>
	<h1>Applicant Details</h1>
	<form>
		<fieldset>			
    <?php
$count=1;
$id=$_REQUEST['id'];
$sql ="Select * from details order by id asc;";
$sql=mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($sql)) { ?>
<legend></legend>
<img src="images/<?php echo $row['image'];?>"width="150" height="150" align="right">
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<label>id:</label>
<td align="center"><?php echo $row["id"]; ?></td><br><br>
<label>First Name:</label>
<td align="center"><?php echo $row["first_name"]; ?></td><br><br>
<label>Last Name:</label>
<td align="center"><?php echo $row["last_name"]; ?></td><br><br>
<label>Email:</label>
<td align="center"><?php echo $row["email"]; ?></td><br><br>
<label>Mobile NO:</label>
<td align="center"><?php echo $row["mobile_num"]; ?></td><br><br>
<label>DOB:</label>
<td align="center"><?php echo $row["dob"]; ?></td><br><br>
<label>Gender:</label>
<td align="center"><?php echo $row["gender"]; ?></td><br><br>
<label>Address:</label>
<td align="center"><?php echo $row["address"]; ?></td><br><br>
<label>Hobbies:</label>
<td align="center"><?php echo $row["hobbies"]; ?></td><br><br>
<?php $count++; }?>
		</fieldset>
<div class="text-center">
<button onclick="window.print();"class"btn btn-primary" id="print-btn">print</button>
        </div>
	</form>
</body>
</html>