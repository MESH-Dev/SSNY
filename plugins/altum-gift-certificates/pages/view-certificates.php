<?php

		global $wpdb;
		
		$purchased_gift_certificates_sql = 'SELECT * FROM wp_gift_certificate_purchases LEFT JOIN wp_wpsc_purchase_logs ON purchase_log_id = wp_wpsc_purchase_logs.id WHERE wp_wpsc_purchase_logs.processed = 3';
		
		$purchased_gift_certificates_rows = $wpdb->get_results($purchased_gift_certificates_sql, ARRAY_A);

		//var_dump($purchased_gift_certificates_rows);
?>
		
<div id="altum-gift-certificates" class="view-gift-certificates">

<h2>View Gift Certificates</h2>

<table>
	<thead>
		<tr>			
			<th>Code</th>
			<th>From</th>
			<th>To</th>
			<th>Amount</th>
			<th>Date</th>
			<th>Purchase ID</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			foreach($purchased_gift_certificates_rows as $row){
			
				echo '<tr>';
				
					echo '<td>'.$row['gift_certificate_code'].'</td>';
					echo '<td>'.$row['from'].'</td>';	
					echo '<td>'.$row['to'].'</td>';
					echo '<td>'.$row['value'].'</td>';					
					echo '<td>'.date('m/j/Y', $row['date']).'</td>';
					echo '<td>'.$row['purchase_log_id'].'</td>';
				
				echo '</tr>';
			
			}
			
		?>
		
	</tbody>

</table>

</div>