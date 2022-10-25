<thead>
		<tr>
			<!-- <th>Id</th> -->
			<!-- <th>Product Name</th> -->
			<th>Month</th>
			<!-- <th>Sales Quantity</th> -->
			<th>Total Sales</th>
		</tr>
</thead>
<tbody>
		<?php $result = $sales->salesPerMonth();
			$count=0;
			while ($item = $result->fetch_assoc()) {
			if ($count == 0) {
				echo "<div class='row'>";
			}
			?>

		<tr>
			<!-- <td><?php echo $item["id"]; ?></td> -->
			<?php
			// $dateObj   = DateTime::createFromFormat('!m', $item["month"]);
			// $monthName = $dateObj->format('F');
			?>
			<!-- <td><?php //echo $monthName; ?></td> -->
			<?php
			$date = strtotime($item["order_date"]);
			
			?>
			<td><?php echo date('F Y', $date); ?></td>
			<!-- <td><?php echo $item["Sales"]."pcs"; ?></td> -->
			<td><?php echo "P".$item["total"]; ?></td>
		</tr>
		<?php
			$count++;
			if($count==4)
			{
			  echo "</div>";
			  $count=0;
			}
			}if ($count == 0) {
				echo "<td colspan='2'>No Results</td>";
			}
			?>
	</tbody>