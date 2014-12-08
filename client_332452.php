<html>
<head>
  <link href="asset/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="asset/css/navbar-fixed-top.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="asset/js/bootstrap.js"> </script> 
</head>
<body>

    <div class="container">
		<div class="jumbotron">
			<h3>
				<center>
					<b><font face="comic sains ms" size="6">
						Tugas Kuis 2 Remidi </br> 
						by </br> 
						Cephi Prasintasari (12/332452/SV/01167)
					   </font>
					</b>
				</center>
			</h3>
			
		</div>
		<table class="table table-bordered">
			<tr>
				<td>ID</td>
				<td>Weather</td>
				<td>Picture</td>
			</tr>
		  
		<?php
		require_once('nusoap/lib/nusoap.php');
		$url = 'http://wsf.cdyne.com/WeatherWS/Weather.asmx?WSDL';
		$client = new nusoap_client($url, 'WSDL');
		$result = $client->call('GetWeatherInformation');
		//print_r($result['GetWeatherInformationResult']['WeatherDescription']);
		foreach($result['GetWeatherInformationResult']['WeatherDescription'] as $weather){
		echo "<tr>";
		echo "<td>".$weather['WeatherID']."</td>"; 
		echo "<td>".$weather['Description']."</td>";
		echo "<td> <img src='".$weather['PictureURL']."'></td>";
		echo "</tr>";
		}
		?>
        </table>
	</div>
	
</body>
</html>