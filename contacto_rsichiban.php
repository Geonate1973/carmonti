<!DOCTYPE HTML>
<html>
<head><meta name="viewport" content="width=device-width"/>
<title>RS Ichiban Alquiler de Cuartos, habitaciones para Estudiantes, Serumistas, Deportistas, trabajadores, para 1 persona</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="busco cuarto, cuartos, habitaciones, habitacion, alquiler, serumista, estudiante, carrion, hospital">
<meta name="description" content="Alquiler de cuartos, habitaciones">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- favicon -->
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
<!-- STYLES & JQUERY 
================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/icons.css"/>
<link rel="stylesheet" type="text/css" href="css/skinblue.css"/><!-- Change skin color here -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<script src="js/jquery-1.9.0.min.js"></script><!-- scripts at the bottom of the document -->
</head>
<body>
<div class="boxedtheme">
<!-- TOP LOGO & MENU
================================================== -->
<div class="grid">
	<div class="row space-bot">
		<!--Logo-->
		<div class="c4">
			<a href="index.html">
				<img src="images/logo.png" class="logo" alt="">
			</a>
		</div>
		<!--Menu-->
		<div class="c8">
			<nav id="topNav">

			</nav>
		</div>
	</div>
</div>
<!-- HEADER
================================================== -->
<div class="undermenuarea">
	<div class="boxedshadow">
	</div>
	<div class="grid">
		<div class="row">
			<div class="c8">
				<h1 class="titlehead">FORMULARIO de Ingreso</h1>
			</div>
			<div class="c4">
				<h1 class="titlehead rightareaheader"><i class="icon-map-marker"></i> Informes al  991 252 841</h1>
			</div>
		</div>
	</div>
</div>
<!-- CONTENT
================================================== -->
<div class="grid">
		<div class="shadowundertop"></div>
		<div class="row space-bot">
			<div class="c12">
		<iframe class="gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.0365621037695!2d-77.02358117080657!3d-12.170444788498276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b79cbf46693b%3A0xda6a342fc046b1e5!2sAv.+Defensores+del+Morro+666%2C+Cercado+de+Lima+15064%2C+Per%C3%BA!5e0!3m2!1ses-419!2sbr!4v1510346990547" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

			</div>
		</div>
		<div class="row space-top">
			<!-- CONTACT FORM -->
			<div class="c8 space-top">
				<h1 class="maintitle">
				<span><i class="icon-envelope-alt"></i> Ingreso tus datos!!</span>
				</h1>
				<div class="wrapcontact">
					<div class="done">
						<div class="alert-box success ctextarea">
							 Tu mensaje a sido enviado. Gracias! <a href="" class="close">x</a>
						</div>
					</div>
<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    Nombre Completo:<br>
    <input name="name" type="text" value="" size="30" required /><br>
    Email:<br>
    <input name="email" type="text" value="" size="30" required /><br>
	Direccion Completa:<br>
    <input name="direccion" type="text" value="" size="30" required /><br>
	Distrito:<br>
    <input name="distrito" type="text" value="" size="30" required /><br>
	Celular:<br>
    <input name="celular" type="text" value="" size="30" required /><br>
	Telefono Casa:<br>
    <input name="telefono" type="text" value="" size="30" required /><br>
    
    <input type="submit" class="button" value="Send email"/>
    </form>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
    $direccion=$_REQUEST['direccion'];
	$distrito=$_REQUEST['distrito'];
	$referencia=$_REQUEST['referencia'];
	$telefono=$_REQUEST['telefono'];
    $message=$_REQUEST['message'];
	if (($name=="")||($email=="")||($direccion=="") || ($distrito=="")|| ($referencia=="") ||($telefono=="")||($message==""))
        {
        echo "Requiere llenar todas los datos, regresa al <a href=\"\">formulario</a> por favor.";
        }
    else{   
		$mensaje = "
			Nombre: " . $name . " 
			Email: " . $email . " 
			Direccion: " . $direccion . " 
			Distrito: " . $distrito . " 
			Referencia:: " . $referencia . " 
			Telefono: ".$telefono."
			Su mensaje es el siguiente:  ". $message . " 
			Enviado el " . date('d/m/Y', time());
		
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Mensaje desde formulario CV CARMONTI";
        mail("informes@carmontiperu.com, geonate@gmail.com", $subject, $mensaje, $from);
        echo "Ya enviamos tu correo, dentro de poco nuestro personal se contactará contigo, gracias por confiar en nosotros!";
        }
    }  
?>

				</div>
			</div>
			<div class="c4 space-top">
				<h1 class="maintitle">
				<span><i class="icon-map-marker"></i> Ubicanos</span>
				</h1>
				<p>
					<a class="link-2" href="more.html">CARMONTI EIRL.</a>
				</p>
				<dl>
					<dt>Av. Defensores del Morro, 666 Oficina 55</dt>
					<dd><span>Telefono:</span>+1 340 7910</dd>
					<dd>E-mail: <a href="mailto:informes@carmontiperu.com">informes@carmontiperu.com</a></dd>
				</dl>
				<br/>

			</div>
		</div>
</div><!-- end grid -->

<!-- FOOTER
================================================== -->
<div id="wrapfooter">
	<div class="grid">
		<div class="row" id="footer">
			<!-- to top button  -->
			<p class="back-top floatright">
				<a href="#top"><span></span></a>
			</p>
			<!-- 1st column -->
			<div class="c3">
				<img src="images/logo-footer.png" style="padding-top: 70px;" alt="">
			</div>

			<!-- 3rd column -->
			<div class="c3">
				<h2 class="title"><i class="icon-envelope-alt"></i> Contacto</h2>
				<hr class="footerstress">
				<dl>
					<dt>Av. Defensores del Morro (ex Huaylas) 666 <br>CC Huaylas 2do piso Of.55</dt>
					<dd><span>Telefono:</span>+1 340 7910</dd>
					<dd>E-mail: <a href="mailto:informacion@carmontiperu.com">informacion@carmontiperu.com</a></dd>
				</dl>
				<ul class="social-links" style="margin-top:15px;">
					<li class="twitter-link smallrightmargin">
					<a href="#" class="twitter rotate has-tip" target="_blank" title="Follow Us on Twitter">Twitter</a>
					</li>
					<li class="facebook-link smallrightmargin">
					<a href="#" class="facebook rotate has-tip" target="_blank" title="Join us on Facebook">Facebook</a>
					</li>
					<li class="google-link smallrightmargin">
					<a href="#" class="google rotate has-tip" title="Google +" target="_blank">Google</a>
					</li>
					<li class="linkedin-link smallrightmargin">
					<a href="#" class="linkedin rotate has-tip" title="Linkedin" target="_blank">Linkedin</a>
					</li>
					<li class="pinterest-link smallrightmargin">
					<a href="#" class="pinterest rotate has-tip" title="Pinterest" target="_blank">Pinterest</a>
					</li>
				</ul>
			</div>

		</div>
	</div>
</div>
<!-- copyright area -->
<div class="copyright">
	<div class="grid">
		<div class="row">
			<div class="c6">
				 Editado por <a href="http://www.geodreamspro.com" target="_blank">GEODREAMS</a> &copy; 2017. Todos los derechos reservados.
			</div>
			<div class="c6">
				<span class="right">
				Premium Template by WowThemesNet </span>
			</div>
		</div>
	</div>
</div>

</div>
<!-- JAVASCRIPTS
================================================== -->
<!-- all -->
<script src="js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="js/common.js"></script>

<!-- cycle -->
<script src="js/jquery.cycle.js"></script>

<!-- twitter -->
<script src="js/jquery.tweet.js"></script>

<!-- contact form -->
<script src="js/contact.js"></script>

</body>
</html>