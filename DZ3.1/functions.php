<?php

function get_employees($id=0)
{
	global $connection;
	$query="SELECT * FROM employees";
	if($id != 0)
	{
		$query.=" WHERE emp_no=".$id." LIMIT 100";
	}
	$response=array();
	$result=mysqli_query($connection, $query);
	while($row=mysqli_fetch_array($result,MYSQLI_BOTH))
		{
			$response[]=$row;
		}
	header('Content-Type: application/json');
	echo json_encode($response);
	


}

function insert_employee()
	{
		global $connection;

        $data = json_decode(file_get_contents('php://input'), true);
        $email=$data["email"];
        $number_em=$data["Number"];
        $last_Name=$data["lastName"];
		$first_Name=$data["firstName"];

        $query="INSERT INTO employees VALUES (NULL,'".$email."','".$number_em."','".$last_Name."','".$first_Name."',DATE(NOW()))";

    if(mysqli_query($connection, $query))
		{
			$broj_redaka = mysqli_affected_rows($connection);
			
			if ($broj_redaka > 0){
				$response=array(
				'status' => 1,
				'query' => $query,
				'broj_redaka' => $broj_redaka,
				'status_message' =>'Employee Added Successfully.'
				);
				
			}
			else {
				$response=array(
				'status' => 0,
				'query' => $query,
				'broj_redaka' => $broj_redaka,
				'status_message' =>'Employee Insert Error.'
				);
				
			}
			
		}
		else
		{

			$response=array(
				'status' => 0,
				'query' => $query,
				'status_message' =>'Employee Addition Error.',
				'sql_error' => mysqli_error($connection)
				
			);
		}

		header('Content-Type: application/json');
		echo json_encode($response);
    }


function update_employee()
	{
		global $connection;

        $data = json_decode(file_get_contents('php://input'), true);
        $email=$data["email"];
        $number_em=$data["Number"];
        $last_Name=$data["lastName"];
		$first_Name=$data["firstName"];

        $query="INSERT INTO employees VALUES (NULL,'".$email."','".$number_em."','".$last_Name."','".$first_Name."',DATE(NOW()))";

        $result=mysqli_query($connection, $query);
		$broj_redaka = mysqli_affected_rows($connection);;    

    	if($result)
		{
			$response=array(
				'status' => 1,
				'query' => $query,
				'broj_redaka' => $broj_redaka,
				'status_message' =>'Employee Updated Successfully.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'query' => $query,
				'broj_redaka' => $broj_redaka,
				'status_message' =>'Employee Updation Failed.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}    


function delete_employee($id)
	{
	global $connection;
	$query="DELETE FROM employees WHERE emp_no=".$id;
	if($result = mysqli_query($connection, $query))
	{
		$response=array(
			'status' => 1,
			'status_message' =>'Izbrisan'
		);
	}
	else
	{
		$response=array(
			'status' => 0,
			'status_message' =>'Greska'
		);
	}
	header('Content-Type: application/json');
	echo json_encode($response);
	}

    

?>
