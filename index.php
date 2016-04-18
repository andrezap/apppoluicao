<html>
<head>
<title>PHP in HTML Example</title>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<meta charset="UTF-8">
</head>
<body>
	<div class="container">

	<div class="row">
		<div class="center">
			<img src="graph.php" class="col-md-offset-3">
		</div>
	</div>
		<div class="row">
			Classificação :
			<div class="well">
				
				<div class="row">
					<div class="col-md-6">
						<h4> <span class="label label-success">BOM (0..50) </span></h4>
					</div>
					<div class="col-md-6">
						<h4> <span class="label label-warning">Moderado (50..100) </span></h4>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6">
						<h4></h4> <h4><span class="label label-default">Prejudicial para alguns grupos (100..150)</span></h4>				
					</div>

					<div class="col-md-6">
						<h4><span class="label label-danger" style="background-color:#FB4A01 !important">Prejudicial (151..200)</span></h4>
					</div>
				</div>
			
				<div class="row">
					<div class="col-md-6">
						<h4><span class="label label-danger" style="background-color:#6839C3 !important">Muito Prejudicial (201..300) </span> </h4>
					</div>

					<div class="col-md-6">
						<h4><span class="label label-danger"  style="background-color:#840226">Perigoso ao extremo (+300)</span><h4>		
					</div>
				</div>
			<div>
		</div>
	</div>
</body>
</html>