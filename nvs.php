<?php 
include 'header.php';
?>
<div class="col-lg-6 col-lg-offset-3">
<div class="row">
	<h1 class="text-center"><strong> NON VERIFIED STUDENTS</strong></h1>
	<br><br>
	<?php
	$qu="SELECT * FROM user where role='student' and isverified=0";
	$fire=mysqli_query($con,$qu);

	?>
	<table class="table table-border">
	<thead>
		<tr>
			<th>UID</th>
			<th>NAME </th>
			<th>EMAIL</th>
			<th>MOBILE NO</th>
			<th>PROFILE IMAGE</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach($fire as $row)
		{
			?>
		<td><?php echo $row['uid'];  ?></td>
		<td><?php echo $row['name'];  ?></td>
		<td><?php echo $row['email'];  ?></td>
		<td><?php echo $row['mobile'];  ?></td>
		<td><?php echo $row['profile_image'];  ?></td>
<?php
}

		?>
	</tbody>

	</table>

</div>

</div>
