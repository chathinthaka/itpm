<?php

//fetch.php

include("database_connection.php");

$query = "SELECT * FROM customer";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();
$output = '
<table id="datatable_id" class="table">
	<tr>
		<th>Customer Name</th>
		<th>Customer Number</th>
		<th>Password</th>
		<th>Status</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
';
if($total_row > 0)
{
	foreach($result as $row)
	{
		$output .= '
		<tr>
			<td width="20%">'.$row["customer_name"].'</td>
			<td width="20%">'.$row["customer_number"].'</td>
			<td width="20%">'.$row["password"].'</td>
			<td width="20%">'.$row["status"].'</td>

			<td width="10%">
				<button type="button" name="edit" class="btn btn-primary btn-xs edit" id="'.$row["id"].'">Edit</button>
			</td>
			<td width="10%">
				<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'">Delete</button>
			</td>
		</tr>
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="6" align="center">Data not found</td>
	</tr>
	';
}
$output .= '</table>';
echo $output;
?>

<script type="text/javascript">
	$(document).ready(function(){  

	$('#datatable_id').DataTable();
});
</script>