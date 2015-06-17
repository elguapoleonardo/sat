<div class="modal fade modal-lg" id="modificar_orden" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">

            <div class="modal-header"><!-- modal-header -->
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="limpiar('modificar')"><i class="icon-remove-sign bigger-110"></i></button>
			<h1><i class="icon-group"></i> Modificar de Ordenes</h1>
			</div><!-- modal-header -->

			<div class="modal-body" style="max-height:400px;"><!-- modal-body -->
				<form id="form_modificar_ordenes" name="form_modificar_ordenes" class="form-horizontal" role="form" enctype="multipart/form-data"/>
					<div class="form-group col-lg-12">
						<div id="dialogo2" style="display:none;"><div class="notify"></div></div> <!-- DIALOGO --> 
						<div class="col-md-4 col-md-offset-4" style="position:relative; display:none;" id="msj2"></div><!-- ALERTA --> 
					</div>	
					
					<div class="control-group">
						<label for="numero_orden2" class="control-label col-lg-2 control-label"><b>Numero de Orden</b></label>
						<div class="controls">
							<input type="text" name="numero_orden2" class="input-mini" id="numero_orden2" placeholder="Orden" />
						</div>
					</div>

					<div class="control-group">
						<label for="codigo_cliente2" class="control-label col-lg-2 control-label"><b>Codigo de Cliente</b></label>
						<div class="controls">
							<input type="text" name="codigo_cliente2" class="input-mini" id="codigo_cliente2" placeholder="Codigo" />
						</div>
					</div>
					
					<div class="control-group">
						<label for="nombre_cliente2" class="control-label col-lg-2 control-label"><b>Nombre de Cliente</b></label>
						<div class="controls">
							<input type="text" name="nombre_cliente2" id="nombre_cliente2" placeholder="Nombre de Cliente" />
						</div>
					</div>
					
					<div class="control-group">
						<label for="direccion_cliente2" class="control-label col-lg-2 control-label"><b>Direccion del Cliente</b></label>
					 	 <div class="controls">
							<textarea name="direccion_cliente2" id="direccion_cliente2" class="form-control autosize-transition span3" placeholder="Direccion del Cliente"></textarea>
						</div>
					</div>
					
					<div class="control-group">
						<label for="categoria_orden2" class="control-label col-lg-2 control-label"><b>Elegir Categoria</b></label>
						<div class="controls col-lg-10">	
							<select name="categoria_orden2" id="categoria_orden2" class="chzn-select" data-placeholder="Categoria...">
								<option value=""/></option>
								<option value="Cable">Cable</option>
								<option value="Internet">Internet</option>
								<option value="Telefono">Telefono</option>
							</select>
						</div>
					</div>
					
					<div class="control-group">
						<label for="problema_cliente2" class="control-label col-lg-2 control-label"><b>Problema del Cliente</b></label>
					 	 <div class="controls">
							<textarea name="problema_cliente2" id="problema_cliente2" class="form-control autosize-transition span3" placeholder="Problema del Cliente"></textarea>
						</div>
					</div>
					
					<div class="control-group">
						<label for="tipo_problema2" class="control-label col-lg-2 control-label"><b>Tipo Problema</b></label>
						<div class="controls col-lg-10">	
							<select name="tipo_problema2" id="tipo_problema2" class="chzn-select" data-placeholder="Tipo...">
								<option value=""/></option>
								<option value="1">Mala Señal</option>
								<option value="2">No Tiene Señal</option>
								<option value="3">Wifi Libre</option>
								<option value="4">Contraseña Wifi</option>
								<option value="5">Moden Desconfigurado</option>
								<option value="6">Recuperar Moden</option>
								<option value="7">Cambiar Moden</option>
								<option value="8">Renovación de Contrato</option>
								<option value="9">otros</option>
							</select>
						</div>
					</div>

					<div class="control-group">
						<label for="id_tecnico2" class="control-label col-lg-2 control-label"><b>Tecnico</b></label>
						<div class=" controls col-lg-10">
							<select id="id_tecnico2" name="id_tecnico2" class="chzn-select" data-placeholder="Tecnico...">
							<option value=""/>
								<?php
									$i_tecnicos = &get_instance();
									$i_tecnicos->load->model('Tecnicos_model'); 
									$tecnicos = $i_tecnicos->Tecnicos_model->lista_tecnicos();
									//print_r($horas);
									foreach ($tecnicos as $tecnico )
									{
										echo "<option value='".$tecnico['id_tecnico']."'/>".$tecnico['nombre_tecnico'];
									}
								?>
							</select>
						</div>
					</div>
					
					<div class="control-group">
						<label for="estado_orden2" class="control-label col-lg-2 control-label"><b>Estado Orden</b></label>
						<div class="controls col-lg-10">	
							<select name="estado_orden2" id="estado_orden2" class="chzn-select" data-placeholder="Estado...">
								<option value=""/></option>
								<option value="Oficina">Oficina</option>
								<option value="Campo">Campo</option>
								<option value="Sin Solucion">Sin solucion</option>
								<option value="Resuelto">Solucionado</option>
								<option value="Otros">Otros</option>
							</select>
						</div>
					</div>
					
					<div class="control-group">
						<label for="solucion_problema2" class="control-label col-lg-2 control-label"><b>Solucion</b></label>
					 	 <div class="controls">
							<textarea name="solucion_problema2" id="solucion_problema2" class="form-control autosize-transition span3" placeholder="Solucion"></textarea>
						</div>
					</div>

					<div class="control-group">
						<div class="row-fluid input-append">
							<label for="fecha_elaboracion2" class="control-label col-lg-2 control-label"><b>Fecha de Elaboración</b></label>
							<div class="controls">
								<input class="date-picker input-small" name="fecha_elaboracion2" id="fecha_elaboracion2" placeholder="Fecha de Elaboración" type="text" data-date-format="yyyy-mm-dd">
								<span class="add-on"><i class="icon-calendar"></i></span>
							</div>
						</div>
					</div>
					
					<div class="control-group">
						<div class="row-fluid input-append">
							<label for="fecha_finalizacion2" class="control-label col-lg-2 control-label"><b>Fecha de Resolución</b></label>
							<div class="controls">
								<input class="date-picker input-small" name="fecha_finalizacion2" id="fecha_finalizacion2" placeholder="Fecha de Resolución" type="text" data-date-format="yyyy-mm-dd">
								<span class="add-on"><i class="icon-calendar"></i></span>
							</div>
						</div>
					</div>

					<div class="control-group">
						<label for="observaciones2" class="control-label col-lg-2 control-label"><b>Observaciones</b></label>
					 	<div class="controls">
							<textarea name="observaciones2" id="observaciones2" class="form-control autosize-transition span3" placeholder="Observaciones"></textarea>
						</div>
					</div>
					
				</form>
			</div><!-- modal-body -->

			<div class="modal-footer">
				<button class="btn btn-primary" type="button" onclick="verificar_estados('modificar')">
					<i class="icon-save bigger-110"></i>
					Actualizar
				</button>
				<button class="btn btn-warning" type="reset" onclick="limpiar('agregar')">
					<i class="icon-remove bigger-110"></i>
					Cancelar
				</button>
			</div><!-- modal-footer -->
		</div><!-- modal-content -->
	</div><!-- modal-dialog -->
</div><!-- modal-->