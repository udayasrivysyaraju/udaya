<?PHP

$con = mysqli_connect("localhost","root","","udaya");
$s = mysqli_query($con,"select * from details");
?>
<div style="border:2px solid black;height:500px;width:600px;margin-left:400px;margin-top:50px;background-color:pink;">
<h1 style="text-align:center;">EMPLOYEE DETAILS:</h1>
<table border=2 align="center" style="margin-top:100px;background-color:white;width:550px;height:200px;">
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>Address</th>
		<th>Salary</th>
		<th>Remove</th>
		<th>Edit</th>
	</tr>
	 <from method="POST">
<?PHP

while($r = mysqli_fetch_array($s))
{
?>	
	
	<tr>
		
		<td><?PHP echo $r['id']; ?></td>
		<td><?PHP echo $r['name']; ?></td>
		<td><?PHP echo $r['address']; ?></td>
		<td><?PHP echo $r['salary']; ?></td>
		<?php echo '<td align="center">
        <button type="submit" name="delete" id="delete" ><a href="del.php?id='.$r['id'].'">Delete</a></button>
        </td>    
           '?>
		<?php echo '<td align="center">
        <button type="submit" name="update" id="update" ><a href="update1.php?id='.$r['id'].'">EDIT/UPDATE</a></button>
        </td>    
           '?>
		 
	</tr>
		
<?PHP
}
?>
  </form>
</table>
</div>