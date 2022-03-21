<?php
header('Content-Type: application/json');

require_once('db_register.php');

$sqlQuery = "SELECT id,domain_name FROM users ORDER BY id";

$result = mysqli_query($connection,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($connection);

echo json_encode($data);
?>

<!DOCTYPE html>
<html>
<head>
<title>Creating Dynamic Data Graph using PHP and Chart.js</title>
<style type="text/css">
BODY {
    width: 550PX;
}

#chart-container {
    width: 100%;
    height: auto;
}
</style>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>


</head>
<body>
    <div id="chart-container">
        <canvas id="graphCanvas"></canvas>
    </div>
</body>
<script src="carts.js"><script>
</html>