<thead>
		<tr>
			<!-- <th>Id</th> -->
			<th>Year</th>
			<th>Total Sales</th>
		</tr>
</thead>
<tbody>
		<?php $result = $sales->salesPerYear();
			$count=0;
			while ($item = $result->fetch_assoc()) {
			if ($count == 0) {
				echo "<div class='row'>";
			}
			?>

		<tr>
			<!-- <td><?php echo $item["id"]; ?></td> -->
			<td><?php echo $item["Year"]; ?></td>
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
				echo "<td colspan='3'>No Results</td>";
			}
			?>
	</tbody>