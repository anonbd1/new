<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/pace.css">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>⧼@̼⧽⧼A̼⧽⧼N̼⧽⧼O̼⧽⧼N̼⧽⧼B̼⧽⧼D̼⧽</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600%7CRoboto:400" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script data-pace-options='{ "ajax": false, "selectors": [ "img" ]}' src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <script>
var myVar=setInterval(function(){myTimer()},1000);
function myTimer() {
    var d = new Date();
    document.getElementById("horas").innerHTML = d.toLocaleTimeString();
}
</script>
<script type="text/javascript">
function Mudaestado(el) {
        var display = document.getElementById(el).style.display;
        if(display == "none")
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'none';
    }
</script>
</head>

<body>
        <!-- /.site-sidebar -->
        <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <center><h4 class="page-title-heading mr-0 mr-r-10">⧼@̼⧽⧼A̼⧽⧼N̼⧽⧼O̼⧽⧼N̼⧽⧼B̼⧽⧼D̼⧽</h4></center>
                </div>
            </div>
                        <!-- /.widget-heading -->
                        <div class="widget-body">
                            <button type="button" id="sh_apr" onclick="Mudaestado('aprovadasapp');" class="btn btn-blue">APPROVED [ <span id="aprovada_conta">0</span> ]</button>

                            <br>

                            <p id="aprovadasapp"></p>

                            <br><br>

                            <button type="button" id="sh_rep" onclick="Mudaestado('reprovadasapp');" class="btn btn-danger">REJECTED [ <span id="reprovada_conta">0</span> ]</button>

                            <br>

                            <p id="reprovadasapp"></p>
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                        <!-- .widget-heading -->
                        <div class="widget-body">
                            <div class="container-fluid pd-20">
                                <div class="row">
                                    <div class="col">
                                        

                                    <textarea id="lista" placeholder="" class="form-control" style="resize:none;outline:none;width:100%; height:150px;"></textarea><br>

                                    <center><button type="button" id="iniciar" onclick="start()" class="btn btn-blue">Start</button> ㅤㅤㅤ ㅤ ㅤ ㅤㅤㅤ ㅤ ㅤ <button type="button" onclick="stop()" id="parar" class="btn btn-danger">Stop</button></center>

                                    
                                    </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col-lg-6 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
    <center>STATUS: <span class="bagde badge-pill badge-primary" id="demo">WAITING</span> - 
APPROVED: <span id="CLIVE" class="badge badge-blue">0</span> - 
REJECTED: <span id="CDIE" class="badge badge-danger">0</span> - 
TESTED: <span id="testado" class="badge badge-white">0</span> - 
TOTAL: <span id="carregada" class="badge badge-white">0</span></center>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<br>
<center><span class="badge badge-blue">Checker Modified by:</span>  <span class="badge badge-success"><a href = "https://telegram.dog/hackerbd1" style="color:white">⧼@̼⧽⧼A̼⧽⧼N̼⧽⧼O̼⧽⧼N̼⧽⧼B̼⧽⧼D̼⧽</a></span></center>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="js.js"></script>
    <script src="jquery-ui.js"></script>
    <script src="jquery.js"></script>
</body>

</html>
