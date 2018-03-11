<?php
	include('config.php');
	echo '<table  class="table table-hover table-bordered" id="sampleTable">
							<thead>
							<tr>
								<td>
								</td>
								<td align="center">ID</td>
								<td align="center">Machine Name</td>
								<td align="center">Location</td>
								<td align="center">Power</td>
								<td align="center">Usage Info</td>
								<td align="center">State</td>	
								<td align="center">Switch</td>
							</tr>
							</thead>
							<tbody>';
						
								$sql= "select a.component_id, a.component_name, a.power, r.name, l.day_in_minutes, c.status from tbl_appliances a, "
									."tbl_room_configuration c, tbl_room r, tbl_log_meta l where a.component_id = c.component_id and r.room_id = c.room_id "
									."and c.component_id = l.component_id ";
								
								$results=$mysqli->query($sql);
								if($results->num_rows >0){
									//output data of each row
									while($row=$results->fetch_array()){
										echo '<tr>'
											.'<td>'
											.'</td>';
										echo '<td id="component_id" align="center">2018dev'.$row["component_id"].'</td>';
                                
										echo '<td id="component_name" align="center">'.$row["component_name"].'</td>';
										echo '<td id="room_name" align="center">'.$row["name"].'</td>';
										echo '<td id="power" align="center">'.$row["power"].'</td>';
										echo '<td id="total_hours_per_day" align="center">'.$row["day_in_minutes"].'</td>';
										echo '<td id="status" align="center">'.$row["status"].'</td>';
										if($row["status"]=="ON"){
											echo '
												<td align="center">
											      <div class="toggle-flip">
													<label>
														<input type="checkbox" checked id="ctrl_button'.$row["component_id"].'" onclick="check(this);"><span class="flip-indecator" data-toggle-on="ON" data-toggle-off="OFF"></span>
													</label>
												  </div>
												</td>
											</tr>';
                                                                                }
										else{
											echo '
											  <td align="center">
											       <div class="toggle-flip">
													<label>
														<input type="checkbox" id="ctrl_button'.$row["component_id"].'" onclick="check(this);"><span class="flip-indecator" data-toggle-on="ON" data-toggle-off="OFF"></span>
													</label>
												  </div>
											  </td>
											</tr>';
                                                                                }
									}
								}
								else{
									echo "0 results";
								}
								$mysqli->close();
					echo	'</tbody>
							</table>';
?>