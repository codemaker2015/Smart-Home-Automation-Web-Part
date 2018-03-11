<?php
include 'config.php';
$sql = "select * from tbl_notification where status = 'unread'";
                    $results=$mysqli->query($sql);
            
while($row=$results->fetch_array()){                                 
                                 $datetime1 = date_create($row["date"]);
                                 $interval = date_diff($datetime1,date_create(date('Y-m-d H:i:s')));
                            echo date('Y-m-d H:i:s');
                            echo $row["date"];
                            echo $interval->format("%s");
 }
                        
?>