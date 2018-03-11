<?php
	include('config.php');
	echo '<table  class="table table-hover table-bordered" id="sampleTable">
		<thead>
                    <tr>
			<td align="center">ID</td>
			<td align="center">Date</td>
			<td align="center">Title</td>
			<td align="center">Type</td>
			<td align="center">Description</td>
                        <td align="center">Status</td>
                        <td align="center">Set as Read </td>
                    </tr>
		</thead>
		<tbody>';
						
		$sql= "select * from tbl_notification";
								
		$results=$mysqli->query($sql);
		if($results->num_rows >0){
			//output data of each row
			while($row=$results->fetch_array()){
				echo '<tr>';
				echo '<td id="id" align="center">'.$row["notification_id"].'</td>';
				echo '<td id="date" align="center">'.$row["date"].'</td>';
				echo '<td id="title" align="center">'.$row["notification_title"].'</td>';
				echo '<td id="type" align="center">'.$row["notification_type"].'</td>';
				echo '<td id="desc" align="center">'.$row["notification_desc"].'</td>';
				echo '<td id="status" align="center">'.$row["status"].'</td>';
				if($row['status']=="unread")
                                    echo '<td id="set_as_read" align="center"><input type="checkbox" onclick="document.location.href=\'setasread.php?id='.$row["notification_id"].'\'"/></td>';
                                else 
                                    echo '<td></td>';
                                echo '</tr>';
			}
		}
		else{
                    echo "0 results";
		}
		$mysqli->close();
		echo	'</tbody>
		</table>';

       
                                        
?>