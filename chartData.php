
    <script type="text/javascript">
        var data = {
            labels: ["0", "10", "20", "30", "40","50","60 seconds"],
            datasets: [
      		{
      			label: "Utilization",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [
                            <?php
                                for($i=0;$i<7;$i++)
                                    $val[$i] = $val[$i+1];
                                $val[6] = rand(1,100);
                                    
                                for($i=0;$i<7;$i++){
                                    echo $val[$i];
                                    if($i!=6)
                                        echo ",";
                                }
                            ?>
                            ]
      		}
//               , 
//      		{
//      			label: "My Second dataset",
//      			fillColor: "rgba(151,187,205,0.2)",
//      			strokeColor: "rgba(151,187,205,1)",
//      			pointColor: "rgba(151,187,205,1)",
//      			pointStrokeColor: "#fff",
//      			pointHighlightFill: "#fff",
//      			pointHighlightStroke: "rgba(151,187,205,1)",
//      			data: [28, 48, 40, 19, 86]
//      		}
        ]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ];
      
        var ctxl = $("#lineChartDemo").get(0).getContext("2d");
        var lineChart = new Chart(ctxl).Line(data);
      
        var ctxp = $("#pieChartDemo").get(0).getContext("2d");
        var pieChart = new Chart(ctxp).Pie(pdata);
    </script>