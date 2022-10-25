<thead>
		<tr>
			<!-- <th>Id</th> -->
			<!-- <th>Product Name</th> -->
			<th>Date</th>
			<!-- <th>Sales Quantity</th> -->
			<th>Total Sales</th>
		</tr>
	</thead>
<tbody>
		<?php $result = $sales->salesPerDay();
			$count=0;
			while ($item = $result->fetch_assoc()) {
			if ($count == 0) {
				echo "<div class='row'>";
			}
			?>

		<tr>
			<!-- <td><?php echo $item["id"]; ?></td> -->
			<!-- <td><?php echo $item["name"]; ?></td> -->
			<?php
			$date = strtotime($item["order_date"]);
			
			?>
			<td><?php echo date('F d Y', $date); ?></td>
			<td><?php echo "P".$item["totalp"]; ?></td>
		</tr>
		<?php
			$count++;
			if($count==4)
			{
			  echo "</div>";
			  $count=0;
			}
			}
			if ($count == 0) {
				echo "<td colspan='2'>No Results</td>";
			}
			?>
	</tbody>