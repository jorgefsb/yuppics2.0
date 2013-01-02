	<div class="container-fluid">
		
		<div class="row-fluid">
			
			<div class="row-fluid intro">
				
				<div class="span9 center">
					<h1>Imprime tus momentos especiales</h1>
					<p>por tan sólo 100.00MXN sin consto de envío con yuppics.com</p>

					<a href="#modal_ingreso" role="button" class="btn btn-intro" data-toggle="modal">Ingresa con tu cuenta</a>
					Ó
					<!-- <a class="btn btn-intro">Ingresa via Facebook</a> -->
					<input type="button" class="btn btn-link btn-intro" value="Conectate vía Facebook" id="loginFb"/>
				</div>

			</div>

		</div>
	</div>

	<div id="modal_ingreso" class="modal span8 hide fade">
		<div class="modal-header">
			<!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3>Modal header</h3> -->
		</div>
		<div class="modal-body">

			<div class="span12 center">
				<h1>yuppics</h1>
			</div>

			<div class="span11 center">
				<h3 class="muted">Imprime tus momentos especiales con yuppics</h3>
			</div>
			<div class="span5">
				<form id="frm_login" action="<?php echo base_url('customer/login'); ?>" method="POST" class="form-horizontal" 
					data-sendajax="true" data-alert="login_alert">
					<div class="control-group">
						<span>Ingresa tus datos para entrar o <a href="#modal_registro" role="button" data-toggle="modal">Registrate</a></span>
					</div>

					<div class="control-group">
						<div id="login_alert" class="alert hide">
							<button type="button" class="close">×</button>
							<span></span>
						</div>
					</div>
					
					<div class="control-group">
						<input type="text" name="email" id="email" class="input-block-level" placeholder="Email">
					</div>
					<div class="control-group">
						<input type="password" name="password" id="password" class="input-block-level" placeholder="Password">
					</div>
					<div class="control-group">
						<input type="submit" class="btn btn-block" value="Ingresa a tu cuenta en Yuppics">
					</div>
				</form>
			</div>
			<div class="span1 tacenter vamodal"><strong>Ó</strong></div>
			<div class="span5">
				<div style="margin-top:30px;">
					<input type="button" class="btn btn-link" value="Conectate vía facebook" id="loginFb"/>
				</div>
				<span>Ac magnis ultrices pulvinar! Nec dolor tincidunt rhoncus aliquet natoque</span>
			</div>

		</div>
		<!-- <div class="modal-footer">
			<a href="#" class="btn">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div> -->
	</div>

	<div id="modal_registro" class="modal hide fade">
		<form action="<?php echo base_url('customer/register/')?>" method="POST" class="form-horizontal" data-sendajax="true" data-alert="register_alert">
			<div class="modal-header">
				<!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>Modal header</h3> -->
			</div>
			<div class="modal-body">

				<div class="span12" style="text-align:center;">
					<h3 class="muted">Registro</h3>
				</div>

				<div class="span12">
						<div class="control-group">
							<div id="register_alert" class="alert hide">
								<button type="button" class="close">×</button>
								<span></span>
							</div>
						</div>

						<div class="control-group">
							<label for="firstname" class="control-label">Nombre</label>
							<div class="controls">
								<input type="text" name="firstname" value="<?php echo set_value('firstname')?>" class="" id="firstname" placeholder="Nombre" autofocus required maxlength="30">
							</div>
						</div>

						<div class="control-group">
							<label for="lastname" class="control-label">Apellido Paterno</label>
							<div class="controls">
								<input type="text" name="lastname" value="<?php echo set_value('lastname')?>" class="" id="lastname" placeholder="Apellido Paterno" maxlength="40">
							</div>
						</div>

						<div class="control-group">
							<label for="email" class="control-label">E-mail</label>
							<div class="controls">
								<input type="email" name="email" value="<?php echo set_value('email')?>" class="" id="email" placeholder="email@ejemplo.com" required maxlength="60">
								<span class="help-block">Asegurate de introducir un email valido</span>
							</div>
						</div>

						<div class="control-group">
							<label for="username" class="control-label">Usuario</label>
							<div class="controls">
								<input type="text" name="username" value="<?php echo set_value('username')?>" class="" id="username" placeholder="Usuario" required maxlength="15">
							</div>
						</div>

						<div class="password-container">
							<div class="control-group">
								<label for="password" class="control-label">Password</label>
								<div class="controls">
									<input type="password" name="password" value="" class="strong-password" id="password" placeholder="Password" required maxlength="15">
									<div class="help-inline"><div class="strength-indicator"><div class="meter"></div></div></div>
									<span class="help-block">6 caracteres mínimo</span>
								</div>
							</div>

							<div class="control-group">
								<label for="repassword" class="control-label">Repetir password</label>
								<div class="controls">
									<input type="password" name="repassword" value="" class="strong-password" id="repassword" placeholder="Re-password" required maxlength="15">
									<span class="help-block">6 caracteres mínimo</span>
								</div>
							</div>
						</div>
					
				</div>
				

			</div>
			<div class="modal-footer">
				<!-- <a href="#" class="btn">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a> -->
				<button type="submit" class="btn btn-primary">Registrarme</button>
				<button type="reset" class="btn">Limpiar</button>
			</div>
		</form>
	</div>


<!-- 
	<div id="modal_ingreso" class="container-fluid well">
		<div class="row-fluid">

			

		</div>
	</div> -->