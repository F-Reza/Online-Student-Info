<?php include("config.php");?>
<!--/*---------------------
Authorized::Forhad Reza
-----------*/-->
<!--Output-1 --> <center>
<div id="Tab-Middle"> 
<br /> <h3> Show the information about all the sections: </h3>
<table border="2" cellspacing="0" width="35%">
<?php
	echo "<tr>";
	echo "<th> SI No: </th>";
	echo "<th> Section </th>";
	echo "<th> Male </th>";
	echo "<th> Female </th>";
	echo "<th> Total </th>";
	echo "</tr>";
	
//SELECT All Students	 
	$sql = "SELECT * FROM StudentInformationTbl ORDER BY Section";
	$result = $conn->query($sql);
	$i=0;$i++;
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()) {
			echo "<tr align=center>";
			echo "<td>".$i. "</td>";
			echo "<td>". $row['Section']."</td>";
			echo "<td>". $row['Male']."</td>";
			echo "<td>". $row['Female']."</td>";
			echo "<td>". $row['Total']."</td>";
			echo "</tr>";$i++;
		}
	}else{
		echo "0 results";
	}	
?>
</table>	
<br /><a href="index.php">Go Home</a>
</div>
</center>