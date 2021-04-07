<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>| Online Student Information |</title>
	<!-- CSS -->
	<link rel="stylesheet" href="main.css" />
</head>
<body>
	<!-- Header 
	/*---------------------
Authorized::Forhad Reza
-----------*/
	-->
	<header>
	<div id="header"><p id="IT">| Online Student Information |</p></div>
	</header>
	
	
<center>
<?php
include("config.php");

// Data Insert using HTML Form
if(isset($_GET["submit"])){
$Male= $_GET["Male"];
$Female = $_GET["Female"];
$Section = $_GET["Section"];
$Total = $Male + $Female;


//INSERTION
$sql = "INSERT INTO StudentInformationTbl 
VALUES ($Male,$Female,$Total,'$Section');";

if ($conn->query($sql) === TRUE) {
	echo "<br><span style='color:#fff';> Record INSERT successfully </span> <br>";
  
}else {
	echo "<div style='background:#f7b0ab;; min-height:40px;font-size:18px; 
	text-align:center;padding-top:20px;   '>
	<span style='color:#00';>Error Inserting Record : </span>
	<span style='color:#b76c50;';>" . $conn->error ."</span></div><br>";

}
}

?>	

<?php
include("config.php");

// Data Insert using HTML Form
if(isset($_GET["Update"])){
$Male= $_GET["Male"];
$Female = $_GET["Female"];
$Section = $_GET["Section"];
$Total = $Male + $Female;


//INSERTION
$sql = "UPDATE StudentInformationTbl 
SET Male= $Male, Female= $Female, Total= $Total WHERE Section= '$Section';";

if ($conn->query($sql) === TRUE) {
	echo "<br><span style='color:#fff';> Record UPDATE successfully </span> <br>";
  
}else {
	echo "<div style='background:#f7b0ab;; min-height:40px;font-size:18px; 
	text-align:center;padding-top:20px;   '>
	<span style='color:#00';>Error Updating Record : </span>
	<span style='color:#b76c50;';>" . $conn->error ."</span></div><br>";

}
}

?>

</center>


<div id="main_wrapper">
<center>
<!-- Box-Left -->
<div id="Tab"> 

<form action="" method="GET">
	<br /><br />
	<table border="1" cellspacing="0" class="Tbl-1">
		<tr>
			<th colspan=2><h2>Record Insertion Form</h2></th>
		</tr>
		<tr>
			<td>Number of Male students:</td>
			<td><input type="number" name="Male" required class="box"/></td>
		</tr>
		<tr>
			<td>Number of Female students:</td>
			<td><input type="number" name="Female" required class="box" /></td>
		</tr>
		<tr>
			<td>Section Name:</td>
			<td><input type="text" name="Section" required class="box"/></td>
		</tr>
		<tr>
			<td colspan=2>
			<input type="submit" name="submit" class="Submit" value="Insert"/>
			<input type="submit" name="Update" class="Submit" value="Update"/>
			<input type="reset" name="reset" class="Reset" value="Reset"/>
			</td>
		</tr>
	</table> 	
</form>


<a href="output-1.php"><button class="btn"> Result-1 </button> </a>
<a href="output-2.php"><button class="btn"> Result-2 </button> </a>
<a href="output-3.php"><button class="btn"> Result-3 </button> </a>

</div>
</center>	
	<!-- Footer -->
	<footer>
		<div id="footer">
			<p>&copy All Right Reserved By <a href="#">  Next_Digit </a></p>
		</div>
	</footer>
	
</div>	
<!--/*---------------------
Authorized::Forhad Reza
-----------*/-->
</body>
</html>

 