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

$connect = mysqli_connect("localhost", "root", "");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM customer
	WHERE first_name LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM customer";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Ime </th>
							<th>Prezime</th>
							<th>Email</th>
							
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row[2].'</td>
				<td>'.$row[3].'</td>
				<td>'.$row[4].'</td>
				
				
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}


?>