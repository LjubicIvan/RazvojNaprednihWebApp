<?php

$s = $_REQUEST["s"];
$hint = "";
if ($s !== "") {
    $s = strtolower($s);
    $len=strlen($s);





$db = mysqli_connect("localhost","root","","1410inventory");

if($db) {

$result = mysqli_select_db($db, "1410inventory") or die("Problem baze");
$sql="SELECT * FROM user where firstname LIKE '%$s%' OR lastname LIKE '%$s%'";

$result = mysqli_query($db, $sql) or die("Problem upita");

echo "<table>
      <tr>
      <th>First name</th>
      <th>Last name</th>
      <th>Actions</th>
      </tr>";
$n=mysqli_num_rows($result);
if ($n > 0){
	while ($myrow=mysqli_fetch_row($result)){
            echo "<tr>";
            echo "<td>" . $myrow[1] . "</td>";
            echo "<td>" . $myrow[2] . "</td>";
            echo "<td>
                <a href='#details'>DETAILS</a>
                <a href='#update'>UPDATE</a>
                <a href='#delete'>DELETE</a>
            </td>";

            echo "</tr>";
            
		}
        echo "</table>";
	}
else {

}	
}
else {
echo "<br>Nije proslo spajanje<br>";
}
	
}


?>