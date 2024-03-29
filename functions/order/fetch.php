<?php

//fetch.php

include('database_connection.php');

$query = "SELECT * FROM order_test";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();
$output = '
<table class="table">
	<tr>
		<th>Customer Name</th>
		<th>Product Number</th>
		<th>Quantity</th>
		<th>Unit Price</th>
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
			<td width="20%">'.$row["product_name"].'</td>
			<td width="20%">'.$row["quantity"].'</td>
			<td width="20%">'.$row["unit_price"].'</td>
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
		<td colspan="7" align="center">Data not found</td>
	</tr>
	';
}
$output .= '</table>';
echo $output;
?>