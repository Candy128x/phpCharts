<?php

$dataPoints = array(
	array("x" => -50, "y" => 6.285),
	array("x" => -40, "y" => 4.656),
	array("x" => -30, "y" => 3.530),
	array("x" => -20, "y" => 2.731),
	array("x" => -15, "y" => 2.419),
	array("x" => -10, "y" => 2.151),
	array("x" => -5, "y" => 1.920),
	array("x" => 0, "y" => 1.720),
	array("x" => 5, "y" => 1.546),
	array("x" => 10, "y" => 1.394),
	array("x" => 15, "y" => 1.261),
	array("x" => 20, "y" => 1.144),
	array("x" => 25, "y" => 1.040),
	array("x" => 30, "y" => 0.948),
	array("x" => 40, "y" => 0.794),
	array("x" => 50, "y" => 0.670),
	array("x" => 60, "y" => 0.570),
	array("x" => 70, "y" => 0.487),
	array("x" => 75, "y" => 0.45)
);

?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "Viscosity of Ethanol at Different Temperatures"
	},
	axisX: {
		title: "Temperature",
		suffix: " °C"
	},
	axisY: {
		title: "Viscosity (in mPa·s)",
		suffix: " mPa·s"
	},
	data: [{
		type: "area",
		markerSize: 0,
		xValueFormatString: "#,##0 °C",
		yValueFormatString: "#,##0.000 mPa·s",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
