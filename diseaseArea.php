<!DOCTYPE html>
<html>
<head>
	<title>Disease Area</title>
	<script type="text/javascript">
		function raj(){
			document.getElementById("def").style.display="none";
			document.getElementById("raj").style.display="block";
			document.getElementById("tn").style.display="none";	
			document.getElementById("kar").style.display="none";	
		}
		function tn()
		{
			document.getElementById("def").style.display="none";
			document.getElementById("raj").style.display="none";
			document.getElementById("tn").style.display="block";	
			document.getElementById("kar").style.display="none";	
		}
		function kar()
		{
			document.getElementById("def").style.display="none";
			document.getElementById("raj").style.display="none";
			document.getElementById("tn").style.display="none";	
			document.getElementById("kar").style.display="block";	
		}
	</script>
</head>
<body>
	<h1 align="center">Disease in Your Area</h1>
	<hr>

	<div id="container">
		<h2 align="center"> Disease in your area! </h2>
		<div id="statenav" style="border:solid 1px black;">
			<button style="color: brown;font-weight: bolder;width:33%;" onclick="raj()">RAJASTHAN</button>
			<button style="color: brown;font-weight: bolder;width:33%;" onclick="tn()">TAMIL NADU</button>
			<button style="color: brown;font-weight: bolder;width:33.3%;" onclick="kar()">KARNATAKA</button>
		</div>
		<div id="def" style="border:solid 1px black;margin-top: 20px;position: absolute;width: 1348px;">
			This is default div
		</div>
		<div id="raj" style="border:solid 1px black;margin-top: 20px;position: absolute;display: none;width: 1348px;">
			<a href="#" target="blank">Rajasthan Area Disease</a>
		</div>
		<div id="tn" style="border:solid 1px black;margin-top: 20px;position: absolute;display: none;width: 1348px;">
			<a href="#" target="blank">Tamil Nadu Area Disease</a>
		</div>
		<div id="kar" style="border:solid 1px black;margin-top: 20px;position: absolute;display: none;width: 1348px;">
			<a href="#" target="blank">Karnataka Area Disease</a>
		</div>
	</div>
</body>
</html>