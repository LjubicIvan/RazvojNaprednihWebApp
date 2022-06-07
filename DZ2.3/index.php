<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
    border: 1px solid #ddd;
    padding: 8px;
}

th {text-align: left;
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #89a0c2;
    color: white;
}
</style>
<?php

$s = $_REQUEST["s"];
$hint = "";

$s = strtolower($s);
$len=strlen($s);
   
$db = mysqli_connect("localhost","root","");

if($db) {

$result = mysqli_select_db($db, "1410inventory") or die("Došlo je do problema prilikom odabira baze...");
if ($s == "") {
	$sql="SELECT * FROM customer";
}
else{
$sql="SELECT * FROM customer where first_name LIKE '$s%'";
}
$result2 = mysqli_query($db, $sql) or die("Došlo je do problema prilikom izvrsavanja upita...");
$n=mysqli_num_rows($result2);

if ($n > 0){
	
		echo "<table class=table>
			<thead>
			 <th>Ime</th>
			 <th>Prezime</th>
			 <th>Email</th>
			</thead>";
	while ($myrow=mysqli_fetch_row($result2)){
		 
		echo " <tbody>
			  <tr>
			    <td data-label='Ime'>$myrow[2]</td>
			    <td data-label='Prezime'>$myrow[3]</td>
			    <td data-label='Email'>$myrow[4]</td>
			 </tr>
		       </tbody>";
			
			

		}
		 echo "</table>";
	}
else {
echo "<span>Nema rezultata za prikaz<br></span>";
}	
}
else {
echo "<br>Nije proslo spajanje<br>";
}

?>