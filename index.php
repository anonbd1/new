<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
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
    <style>@font-face{font-family:Montserrat;font-style:normal;font-weight:200;src:url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCvr6Hw5aXo.woff2) format('woff2')}@font-face{font-family:Montserrat;font-style:normal;font-weight:300;src:url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCs16Hw5aXo.woff2) format('woff2')}@font-face{font-family:Montserrat;font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw5aXo.woff2) format('woff2')}@font-face{font-family:Montserrat;font-style:normal;font-weight:500;src:url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw5aXo.woff2) format('woff2')}@font-face{font-family:Montserrat;font-style:normal;font-weight:600;src:url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w5aXo.woff2) format('woff2')}@font-face{font-family:Roboto;font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu4mxK.woff2) format('woff2')}html{-webkit-box-sizing:border-box;box-sizing:border-box;font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;-ms-overflow-style:scrollbar;height:100%}*,::after,::before{-webkit-box-sizing:inherit;box-sizing:inherit}@-ms-viewport{width:device-width}main{display:block}body{margin:0;font-family:Roboto,"Helvetica Neue",Arial,sans-serif;font-size:.875rem;font-weight:400;line-height:1.71429;color:#999;background-color:#25313f}p{margin-top:0;margin-bottom:1.42857em}a{color:#1976d2;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects}a,button,textarea{-ms-touch-action:manipulation;touch-action:manipulation}button,textarea{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button{overflow:visible;text-transform:none}button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none}textarea{overflow:auto;resize:vertical;letter-spacing:0}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}h4{font-family:Montserrat,sans-serif;line-height:1.1;color:#fff;font-size:1.5rem;margin:1.25rem 0 .625rem;font-weight:400;letter-spacing:-.05em}.container-fluid{margin-right:auto;margin-left:auto;padding-right:3px;padding-left:3px;width:100%}.row{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-3px;margin-left:-3px}.col{position:relative;width:100%;min-height:1px;padding-right:3px;padding-left:3px;-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;max-width:100%}.form-control{display:block;width:100%;padding:.5625rem 1.2em;font-size:.875rem;line-height:1.57143;color:#fff;background-color:#25313f;background-image:none;background-clip:padding-box;border:1px solid rgba(153,153,153,.2);border-radius:0.25rem;-webkit-box-shadow:none;box-shadow:none}.form-control::-ms-expand{background-color:transparent;border:0}.form-control::-webkit-input-placeholder{color:#bbb;opacity:1}.form-control:-ms-input-placeholder{color:#bbb;opacity:1}.form-control::-ms-input-placeholder{color:#bbb;opacity:1}.btn{display:inline-block;font-weight:400;text-align:center;white-space:nowrap;vertical-align:middle;border:1px solid transparent;padding:.5625rem 1.2em;line-height:1.57143;border-radius:0.25rem}.btn-blue{-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.15),0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 0 rgba(255,255,255,.15),0 1px 1px rgba(0,0,0,.075)}.btn-danger{-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.15),0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 0 rgba(255,255,255,.15),0 1px 1px rgba(0,0,0,.075)}.badge{display:inline-block;padding:.4em;font-size:90%;font-weight:600;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:0.25rem;font-family:Montserrat,sans-serif}.badge-pill{padding-right:0.6em;padding-left:0.6em;border-radius:10rem}.badge-blue{color:#fff;background-color:#0275d8}.badge-primary{color:#fff;background-color:#1976d2}.badge-success{color:#000;background-color:#38d57a}.badge-danger{color:#fff;background-color:#f33}.badge-white{color:#111;background-color:#fff}.clearfix::after{display:block;clear:both;content:""}.main-wrapper{overflow:hidden;padding:0 30px 7.5rem;background:#25313f}.mr-0{margin:0!important}.pd-20{padding:1.25rem!important}.mr-r-10{margin-right:.625rem!important}.btn{display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;font-size:.875rem;font-family:Montserrat,sans-serif;border-width:2px;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;color:#999}.btn-blue{color:#fff;background-color:#0275d8;border-color:#0275d8;-webkit-box-shadow:none;box-shadow:none}.btn-danger{color:#fff;background-color:#f33;border-color:#f33;-webkit-box-shadow:none;box-shadow:none}button,textarea{font-family:inherit}button::-webkit-input-placeholder,textarea::-webkit-input-placeholder{color:#bbb;opacity:1}button:-moz-placeholder,textarea:-moz-placeholder{color:#bbb;opacity:1}button::-moz-placeholder,textarea::-moz-placeholder{color:#bbb;opacity:1}button:-ms-input-placeholder,textarea:-ms-input-placeholder{color:#bbb;opacity:1}.page-title{height:5em;line-height:5em;margin:0 -2.14286em;padding:0 2.14286em;position:relative}.page-title .page-title-left{-webkit-box-flex:1;-ms-flex:1;flex:1}.page-title .page-title-heading{display:inline-block;font-family:Montserrat,sans-serif}.widget-body{padding:20px}</style>
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
