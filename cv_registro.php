<!DOCTYPE HTML>
<html>

<head>
	<meta name="viewport" content="width=device-width"/>
	<title>CARMONTI EIRL Agencia de Empleos Personal para restautante, mozo, azafata, nana, enfermera.</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="agencia, empleos, personal, ayudante, mozo,azafata, mecanico, enfermera, choferes, chofer, cocinero, nana, muchacha, cama dentro, semanal, por dia, importante, pequeño, bebe, niño, stress, especialista, crianza, filtro ">
	<meta name="description" content="Agencia de empleos, donde encontraras la solucion a tus problemas.">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
	<!-- STYLES & JQUERY 
================================================== -->
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/icons.css"/>
	<link rel="stylesheet" type="text/css" href="css/skinblue.css"/>
	<!-- Change skin color here -->
	<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
	<script src="js/jquery-1.9.0.min.js"></script>
	<!-- scripts at the bottom of the document -->
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
						<ul id="responsivemenu">
							<li class="active"><a href="index.html"><i class="icon-home homeicon"></i><span class="showmobile">Inicio</span></a>
							</li>
							<li><a href="#">Nosotros</a>
								<ul style="display: none;">
									<li><a href="about.html">Quienes Somos</a>
									</li>

								</ul>
							</li>
							<li><a href="servicios.html">Servicios</a>
							<li><a href="cv_registro.php">Envía tu CV</a></li>
							</li>
							<li><a href="faq.html">Preguntas</a>
							</li>

							<li class="last"><a href="contacto.php">Contacto</a>
							</li>

						</ul>
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
						<h1 class="titlehead">Registro de Datos</h1>
					</div>
					<div class="c4">
						<h1 class="titlehead rightareaheader"><i class="icon-map-marker"></i> Llamanos al  949-759-205 // 01-340 7910</h1>
					</div>
				</div>
			</div>
		</div>
		<!-- CONTENT
================================================== -->
		<div class="grid">
			<div class="shadowundertop"></div>
			<div class="row space-bot">

			</div>
			<div class="row space-top">
				<!-- CONTACT FORM -->
				<div class="c8 space-top">
					<h1 class="maintitle">
				<span><i class="icon-envelope-alt"></i> Ingreso de datos para Bolsa de trabajo</span>
				</h1>
				
					<div class="wrapcontact">
						<div class="done">
							<div class="alert-box success ctextarea">
								Tu mensaje a sido enviado. Gracias! <a href="" class="close">x</a>
							</div>
						</div>
						<?php
						$action = $_REQUEST[ 'action' ];
						if ( $action == "" ) /* display the contact form */ {
							?>
						<form action="" method="POST" enctype="multipart/form-data">
							<input type="hidden" name="action" value="submit">
							Nombre Completo:<br>
							<input name="name" type="text" value="" size="30" required/><br>
							<label  for="name">Sexo</label>
							<select name="sexo" id="sexo">
								<option value="masculino">Masculino</option>
								<option value="femenino">Femenino</option>
							</select> <br>
							<label for="name">N° DNI*</label>
							<input id="dni" name="dni" class="text" type="number" required/><br>
							<label for="name">Fecha nacimiento</label>
							<input id="fecha_de_nacimiento" name="fecha_de_nacimiento" class="text" type="date" required/><br>
							<label ><strong>Empleo que buscas:</strong></label>
							<select name="tipo_de_empleo" id="tipo_de_empleo">
								<option VALUE="servicio_domestico">Servicio Doméstico</option>
								<option VALUE="nanas">Nanas y Niñeras</option>
								<option VALUE="enfermera">Enfermera técnica</option>
								<option VALUE="chef">Chef y cocineros</option>
								<option VALUE="azafatas">Azafatas</option>
								<option VALUE="choferes">Choferes</option>
								<option VALUE="limpieza">Servicio de limpieza</option>
								<option VALUE="seguridad">Personal de seguridad</option>
								<option VALUE="operarios">Operarios</option>
								<option value="Asistente Administrativo Contable">Asistente Administrativo Contable</option>
								<option value="Secretarias">Secretarias</option>
								<option value="Recepcionista y/o Atencion al cliente">Recepcionista y/o Atención al cliente</option>
								<option value="Tecnico informatico y de Maquinas">Técnico informático y de Maquinas</option>
								<option VALUE="Personal de limpieza empresa">Personal de limpieza para empresas</option>
								<option VALUE="Personal de seguridad empresa">Personal de seguridad para empresas</option>
								<option VALUE="Personal de ventas empresa">Personal de ventas para empresas</option>
							</select> <br>
							<label><strong>Modalidad:</strong></label>
							<select name="tipo_de_cama" id="tipo_de_cama">
								<option value="cama afuera">cama afuera</option>
								<option value="cama adentro">cama adentro</option>
							</select><br> Pretención Salarial (soles):<br>
							<input name="sueldo" type="number" value="" size="30" required/><br> Email:
							<br>
							<input name="email" type="email" value="" size="30" required/><br> Direccion Completa:<br>
							<input name="direccion" type="text" value="" size="30" required/><br> Distrito:
							<br>
							<input name="distrito" type="text" value="" size="30" required/><br> Celular:
							<br>
							<input name="celular" type="number" value="" size="30" required/><br> Telefono Fijo:<br>
							<input name="telefono" type="number" value="" size="30" required/><br> Mensaje:
							<br>
							<textarea name="message" rows="7" cols="30" required></textarea><br>
							<input type="submit" class="button" value="Send email"/>
						</form>
						<?php
						} else /* send the submitted data */ {
							$name = $_REQUEST[ 'name' ];
							$sexo = $_REQUEST[ 'sexo' ];
							$dni = $_REQUEST[ 'dni' ];
							$fecha_de_nacimiento = $_REQUEST[ 'fecha_de_nacimiento' ];
							$tipo_de_empleo = $_REQUEST[ 'tipo_de_empleo' ];
							$tipo_de_cama = $_REQUEST[ 'tipo_de_cama' ];
							$sueldo = $_REQUEST[ 'sueldo' ];
							$email = $_REQUEST[ 'email' ];
							$direccion = $_REQUEST[ 'direccion' ];
							$distrito = $_REQUEST[ 'distrito' ];
							$celular = $_REQUEST[ 'celular' ];
							$telefono = $_REQUEST[ 'telefono' ];
							$message = $_REQUEST[ 'message' ];
							if ( ( $name == "" ) || ( $sexo == "" )|| ( $dni == "" )|| ( $fecha_de_nacimiento == "" )|| ( $tipo_de_empleo == "" )|| ( $tipo_de_cama == "" )|| ( $sueldo == "" )|| ( $email == "" ) || ( $direccion == "" ) || ( $distrito == "" ) || ( $celular == "" ) || ( $telefono == "" ) || ( $message == "" ) ) {
								echo "Requiere llenar todas los datos, regresa al <a href=\"\">formulario</a> por favor.";
							} else {
								$mensaje = "
			Nombre: " . $name . " 
			Sexo: " . $sexo . " 
			DNI: " . $dni . " 
			F.N.: " . $fecha_de_nacimiento . " 
			Tipo de Empleo: " . $tipo_de_empleo . " 
			Opcion: " . $tipo_de_cama . "
			Pretencion Salarial: " . $sueldo . " 
			Email: " . $email . " 
			Direccion: " . $direccion . " 
			Distrito: " . $distrito . " 
			Celular:: " . $celular . " 
			Telefono: " . $telefono . "
			Su mensaje es el siguiente:  " . $message . " 
			Enviado el " . date( 'd/m/Y', time() );

								$from = "From: $name<$email>\r\nReturn-path: $email";
								$subject = "Mensaje desde formulario CV CARMONTI";
								mail( "monicanamihas@carmontiperu.com, carlossilva@carmontiperu.com, desarrollo@geodreamspro.com", $subject, $mensaje, $from );
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
						<dd>E-mail: <a href="mailto:informes@carmontiperu.com">informes@carmontiperu.com</a>
						</dd>
					</dl>
					<br/>

				</div>
			</div>
		</div>
		<!-- end grid -->

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
							<dd>E-mail: <a href="mailto:informacion@carmontiperu.com">informacion@carmontiperu.com</a>
							</dd>
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