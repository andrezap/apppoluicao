<html>
<head>
<title>PHP in HTML Example</title>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<meta charset="UTF-8">
<meta http-equiv="refresh" content="60;url=index.php" />
</head>
<body>
	<div class="container">
		<div class="row text-center">
			<h1>Monitoramento de Níveis de Poluentes</h1>
		</div>
		<div class="row text-center">
			<h4>Localização : 	</h4>
		</div>

		<div class="row">
			<div class="center">
				<img src="graph.php" class="col-md-offset-3">
			</div>
		</div>
		<div class="well">
			<div class="row">
				<?php include('request.php'); ?>
				<div>
					<h4> O<sub>3</sub> </h4>
					<h4>Nível Atual: <span class="label label-default" title="Nível Atual" ><?php echo ozonio();?></span> </h4>
				</div>
				<hr/>
				<table style="padding:10px;width:80%;">
				    <tbody>
				        <tr>
				            <td style="text-align:right;color:#888;">Concentração:</td>
				            <td><small>0</small></td>
				            <td></td>
				            <td colspan="2" style="text-align:center;"><small>0.06</small></td>
				            <td></td>
				            <td colspan="2" style="text-align:center;"><small>0.076</small></td>
				            <td></td>
				            <td colspan="2" style="text-align:center;"><small>0.096</small></td>
				            <td></td>
				            <td colspan="2" style="text-align:center;"><small>0.116</small></td>
				            <td></td>
				            <td style="text-align:right;"><small>0.375</small></td>
				        </tr>
				        <tr>
				            <td style="text-align:right;color:#888;">AQI Range:</td>
				            <td colspan="3" style="width:20%;text-align:center;background-color:#009966;color:#ffffff">
				                <center><span style="width:0px;margin-left:0%;"><small>Good</small></span></center>
				            </td>
				            <td colspan="3" style="width:20%;text-align:center;background-color:#ffde33;color:#000000">
				                <center><span style="width:0px;margin-left:0%;"><small>Moderate</small></span></center>
				            </td>
				            <td colspan="3" style="width:20%;text-align:center;background-color:#ff9933;color:#000000">
				                <center><span style="width:0px;margin-left:0%;"><small>Unhealthy for Sensitive Groups</small>
				                </span></center>
				            </td>
				            <td colspan="3" style="width:20%;text-align:center;background-color:#cc0033;color:#ffffff">
				                <center><span style="width:0px;margin-left:0%;"><small>Unhealthy</small></span></center>
				            </td>
				            <td colspan="3" style="width:20%;text-align:center;background-color:#660099;color:#ffffff">
				                <center><span style="width:0px;margin-left:0%;"><small>Very Unhealthy</small></span></center>
				            </td>
				        </tr>
				    </tbody>
				</table>
			</div>
			<br/>
			<div class="row">

				<div><h4> NO<sub>2</sub> </h4>
					<h4>Nível Atual: <span class="label label-default" title="Nível Atual" ><?php echo no2();?></span>
				</h4></div>
				<hr/>
				<table style="padding:10px;width:80%;">
					<tbody>
						<tr>
						<td style="text-align:right;color:#888;">Concentração:</td>
						<td><small>0</small></td>
						<td></td>
						<td colspan="2" style="text-align:center;"><small>12</small></td>
						<td></td>
						<td colspan="2" style="text-align:center;"><small>35.5</small></td>
						<td></td>
						<td colspan="2" style="text-align:center;"><small>55.5</small></td>
						<td></td>
						<td colspan="2" style="text-align:center;"><small>150.5</small></td>
						<td></td>
						<td colspan="2" style="text-align:center;"><small>250.5</small></td>
						<td></td>
						<td colspan="2" style="text-align:center;"><small>350.5</small></td>
						<td></td>
						<td style="text-align:right;"><small>500.5</small></td>
						</tr>
						<tr>
						<td style="text-align:right;color:#888;">Nível AQI:</td>
						<td colspan="3" style="width:14%;text-align:center;background-color:#009966;color:#ffffff"><center><span style="width:0px;margin-left:0%;"><small>Good</small></span></center></td>
						<td colspan="3" style="width:14%;text-align:center;background-color:#ffde33;color:#000000"><center><span style="width:0px;margin-left:0%;"><small>Moderate</small></span></center></td>
						<td colspan="3" style="width:14%;text-align:center;background-color:#ff9933;color:#000000"><center><span style="width:0px;margin-left:0%;"><small>Unhealthy for Sensitive Group</small></span></center></td>
						<td colspan="3" style="width:14%;text-align:center;background-color:#cc0033;color:#ffffff"><center><span style="width:0px;margin-left:0%;"><small>Unhealthy</small></span></center></td>
						<td colspan="3" style="width:14%;text-align:center;background-color:#660099;color:#ffffff"><center><span style="width:0px;margin-left:0%;"><small>Very Unhealthy</small></span></center></td>
						<td colspan="3" style="width:14%;text-align:center;background-color:#7e0023;color:#ffffff"><center><span style="width:0px;margin-left:0%;"><small>Hazardous</small></span></center></td>
						<td colspan="3" style="width:14%;text-align:center;background-color:#7e0023;color:#ffffff"><center><span style="width:0px;margin-left:0%;"><small></small></span></center></td>
						</tr>
					</tbody>
				</table>
			</div>
			<br/>
			<div class="row">

			<div><h4> SO<sub>2</sub> </h4>
				<h4>Nível Atual: <span class="label label-default" title="Nível Atual" ><?php echo so2();?></span>
			</h4></div>
			<hr/>

			<table style="padding:10px;width:80%;">
			    <tbody>
			        <tr>
			            <td style="text-align:right;color:#888;">Concentração:</td>
			            <td><small>0</small></td>
			            <td></td>
			            <td colspan="2" style="text-align:center;"><small>3</small></td>
			            <td></td>
			            <td colspan="2" style="text-align:center;"><small>76</small></td>
			            <td></td>
			            <td colspan="2" style="text-align:center;"><small>186</small></td>
			            <td></td>
			            <td style="text-align:right;"><small>304</small></td>
			        </tr>
			        <tr>
			            <td style="text-align:right;color:#888;">AQI Range:</td>
			            <td colspan="3" style="width:25%;text-align:center;background-color:#009966;color:#ffffff">
			                <center><span style="width:0px;margin-left:0%;"><small>Good</small></span></center>
			            </td>
			            <td colspan="3" style="width:25%;text-align:center;background-color:#ffde33;color:#000000">
			                <center><span style="width:0px;margin-left:0%;"><small>Moderate</small></span></center>
			            </td>
			            <td colspan="3" style="width:25%;text-align:center;background-color:#ff9933;color:#000000">
			                <center><span style="width:0px;margin-left:0%;"><small>Unhealthy for Sensitive Group</small></span></center>
			            </td>
			            <td colspan="3" style="width:25%;text-align:center;background-color:#cc0033;color:#ffffff">
			                <center><span style="width:0px;margin-left:0%;"><small>Unhealthy</small></span></center>
			            </td>
			        </tr>
			    </tbody>
			</table>
		</div>
	</div>
</body>
</html>