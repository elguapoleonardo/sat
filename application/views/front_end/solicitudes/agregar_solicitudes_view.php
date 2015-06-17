<div class="modal fade modal-lg" id="agregar_solicitud" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">

            <div class="modal-header"><!-- modal-header -->
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="limpiar('agregar')"><i class="icon-remove-sign bigger-110"></i></button>
			<h1><i class="icon-group"></i> Registro de Solicitudes</h1>
			</div><!-- modal-header -->

			<div class="modal-body" style="max-height:400px;"><!-- modal-body -->
				<form id="form_agregar_usuarios" name="form_agregar_usuarios" class="form-horizontal" role="form" enctype="multipart/form-data"/>
					<div class="form-group col-lg-12">
						<div id="dialogo" style="display:none;"><div class="notify"></div></div> <!-- DIALOGO --> 
						<div class="col-md-4 col-md-offset-4" style="position:relative; display:none;" id="msj"></div><!-- ALERTA --> 
					</div>	
					
					<div class="control-group">
						<label for="id_cliente" class="control-label col-lg-2 control-label"><b>Codigo de Cliente</b></label>
						<div class="controls">
							<input type="text" name="id_cliente" id="id_cliente" placeholder="Codigo de Cliente" />
						</div>
					</div>

					<div class="control-group">
						<label for="nombre_solicintate" class="control-label col-lg-2 control-label"><b>Nombre de Solicitante</b></label>
						<div class="controls">
							<input type="text" name="nombre_solicintate" id="nombre_solicintate" placeholder="Nombre de Solicitante" />
						</div>
					</div>

					<div class="control-group">
						<label for="apellido_solicitante" class="control-label col-lg-2 control-label"><b>Apellido de Solicitante</b></label>
						<div class="controls">
							<input type="text" name="apellido_solicitante" id="apellido_solicitante" placeholder="Apellido de Solicitante" />
						</div>
					</div>
					
					<div class="control-group">
						<label for="direccion_solicitante" class="control-label col-lg-2 control-label"><b>Direccion de Solicitante</b></label>
					 	 <div class="controls">
							<textarea name="direccion_solicitante" id="direccion_solicitante" class="form-control autosize-transition span3" placeholder="Direccion del Solicitante"></textarea>
						</div>
					</div>
					
					<div class="control-group">
						<label for="telefono1_solicitante" class="control-label col-lg-2 control-label"><b>Telefono 1</b></label>
					  	<div class="controls">
							<input class="span2 input-mask-phone" type="text" name="telefono1_solicitante" id="telefono1_solicitante" placeholder="Telefono" />
						</div>
					</div>

					<div class="control-group">
						<label for="telefono2_solicitante" class="control-label col-lg-2 control-label"><b>Telefono 2</b></label>
					  	<div class="controls">
							<input class="span2 input-mask-phone" type="text" name="telefono2_solicitante" id="telefono2_solicitante" placeholder="Telefono" />
						</div>
					</div>
					
					<div class="control-group">
						<label for="fecha_ingreso_solicitud" class="control-label col-lg-2 control-label"><b>Fecha de Infreso</b></label>
					  	<div class="controls">
							<input class="span2 input-mask-phone" type="text" name="fecha_ingreso_solicitud" id="fecha_ingreso_solicitud" placeholder="Fecha de Ingreso" />
						</div>
					</div>

					<div class="control-group">
						<label for="estdo_solicitud" class="control-label col-lg-2 control-label"><b>Elegir Estado</b></label>
						<div class="controls col-lg-10">	
							<select name="estdo_solicitud" id="estdo_solicitud" class="chzn-select" data-placeholder="Estado...">
								<option value=""/></option>
								<option value="1">En Proceso</option>
								<option value="2">Aprobada</option>
								<option value="3">Activado</option>
								<option value="4">Enviado</option>
								<option value="5">Instalada</option>
								<option value="6">Devolucion</option>
							</select>
						</div>
					</div>

					<div class="control-group">
						<label for="CorreoUsu" class="control-label col-lg-2 control-label"><b>Correo Electronico</b></label>
					  	<div class="controls">
							<input type="text" name="CorreoUsu" id="CorreoUsu" placeholder="E-mail" />
						</div>
					</div>
					 					
					<div class="control-group">
						<label for="DUIEmp" class="control-label col-lg-2 control-label"><b>DUI de empleado</b></label>
					  	<div class="controls">
							<input class="span2 input-mask-dui" type="text" name="DUIEmp" id="DUIEmp" placeholder="DUI" />
						</div>
					</div>
					
					<div class="control-group">
						<label for="NITEmp" class="control-label col-lg-2 control-label"><b>NIT de empleado</b></label>
					  	<div class="controls">
							<input class="span3 input-mask-nit" type="text" name="NITEmp" id="NITEmp" placeholder="NIT" />
						</div>
					</div>

					<div class="control-group">
						<label for="ContratoEmp" class="control-label col-lg-2 control-label"><b>Contrato Empleado</b></label>
						<div class="controls col-lg-10">	
							<input type="file" id="id-input-file-2" name="ContratoEmp" />
						</div>
					</div>	

					<div class="control-group">
						<label for="FotoUsu" class="control-label col-lg-2 control-label"><b>Foto de perfil</b></label>
						<div class="controls col-lg-10">	
							<input type="file" id="id-input-file-3" name="FotoUsu"/>
						</div>
					</div>
				</form>
			</div><!-- modal-body -->

			<div class="modal-footer">
				<button class="btn btn-primary" type="button" onclick="verificar_estados('agregar')">
					<i class="icon-save bigger-110"></i>
					Guardar
				</button>
				<button class="btn btn-warning" type="reset" onclick="limpiar('agregar')">
					<i class="icon-refresh bigger-110"></i>
					Limpiar
				</button>
			</div><!-- modal-footer -->
		</div><!-- modal-content -->
	</div><!-- modal-dialog -->
</div><!-- modal-->