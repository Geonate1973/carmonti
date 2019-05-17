<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
<title>Documento sin título</title>
</head>

<body>
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
								mail( "desarrollo@geodreamspro.com", $subject, $mensaje, $from );
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
</body>
</html>