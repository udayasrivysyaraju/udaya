
<?PHP
include "config.php";
	
	if(isset($_POST['up']))
	{
		
		$id = $_POST['id'];
		$name=$_POST['name'];
		$address=$_POST['address'];
		$salary=$_POST['salary'];
		
		$sql="UPDATE `details` SET `name`='$name',`address`='$address',`salary`='$salary' WHERE `id`='$id'";
		
		$result = $conn->query($sql);
		if($result){
			echo'<script>alert("successfully updated");</script>';
			header('location:fetch.php');
		}
	}
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		
		$sql="SELECT * FROM `details` WHERE `id`='$id'";
		$result=$conn->query($sql);
		
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				$name=$row['name'];
				$address=$row['address'];
				$salary=$row['salary'];
				$id=$row['id'];
			}
		}
	}	

?>
<body style="background-color:#97C1A9;">
<div align="center" style="border:2px solid black;width:25%;margin:0 auto;margin-top:200px;background-color:#B6CFB6;">
	<form action="" method="POST">
		<h2>NEW DETAILS</h2>
		<div >
		<input type="Hidden" name="id" value="<?PHP echo $id; ?>">
		<div>
		<div style="padding:5px;text_align:center;">
		<input type="text" name="name" placeholder="enter name" value="<?PHP echo $name; ?>">
		</div>
		<br><br>
		<div style="padding:5px;text_align:center;">
		<input type="text" name="address" placeholder="enter address" value="<?PHP echo $address; ?>">
		</div>
		<br><br>
		<div style="padding:5px;text_align:center;">
		<input type="number" name="salary" placeholder="enter salary" value="<?PHP echo $salary; ?>">
		</div>
		<br><br>
		<div style="padding:5px;text_align:center;">
		<input type="submit" name="up" value="UPDATE NOW">
		</div>
	</form>
</div>	
