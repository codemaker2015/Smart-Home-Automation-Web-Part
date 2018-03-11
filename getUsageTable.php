<?php
	include('config.php');
	echo '<table  class="table table-hover table-bordered" id="sampleTable" >
							<thead>
							<tr>
								<td align="center" class="sorting">Date</td>
								<td align="center">ID</td>
								<td align="center">Machine Name</td>
								<td align="center">Location</td>
								<td align="center">Start Time</td>
								<td align="center">End Time</td>
                                                                <td align="center">Usage (min) </td>
							</tr>
							</thead>
							<tbody>';
						
								$sql= "select a.component_id, a.component_name,r.name, l.date, l.start_time, l.end_time from tbl_appliances a, "
									."tbl_room_configuration c, tbl_room r, tbl_log_status l where a.component_id = c.component_id and r.room_id = c.room_id "
									."and c.component_id = l.component_id ";
								
								$results=$mysqli->query($sql);
								if($results->num_rows >0){
									//output data of each row
									while($row=$results->fetch_array()){
										echo '<tr>';
										echo '<td id="date" align="center">'.$row["date"].'</td>';
										echo '<td id="component_id" align="center">2018dev'.$row["component_id"].'</td>';
										echo '<td id="component_name" align="center">'.$row["component_name"].'</td>';
										echo '<td id="room_name" align="center">'.$row["name"].'</td>';
										echo '<td id="stime" align="center">'.$row["start_time"].'</td>';
										echo '<td id="etime" align="center">'.$row["end_time"].'</td>';
										
                                                                                $datetime1 = date_create(date('Y-m-d').$row["start_time"]);
                                                                                $datetime2 = date_create(date('Y-m-d').$row["end_time"]);
                                                                                $interval = date_diff($datetime1,$datetime2);
                                                                                echo '<td id="diff" align="center">'.$interval->format("%i").'</td>';
                                                                                            
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