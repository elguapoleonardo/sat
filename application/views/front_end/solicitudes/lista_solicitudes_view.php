	
<div class="row-fluid">
	<div class="span12">	
		<table id="lista_solicitudes" class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th class="center">
						<label>
							<span class="lbl"><b>N°</b></span>
						</label>
					</th>
					<th>Nombre</th>
					<th class="hidden-phone">Apellidos</th>
					<th class="hidden-480">Direccion</th>
					<th class="hidden-480">
						<i class="icon-phone bigger-110 hidden-phone"></i>
						Telefono 1
					</th>
					<th class="hidden-phone">
						<i class="icon-phone bigger-110 hidden-phone"></i>
						Telefono 2
					</th>
					<th>Estado</th>
					<th>Herrmientas</th>
				</tr>
			</thead>

			<tbody>
			<?php 
				$contador=0;
				foreach ($lista as $item)
				{
					?>
					<tr>
						<td class="center">
							<label>
								<?php $contador++; echo $contador; ?>
							</label>
						</td>

						<td><a href="#"><?php echo $item['nombres_solicitante']; ?></a></td>
						<td class="hidden-phone"><?php echo $item['apellidos_solicitante']; ?></td>
						<td class="hidden-480"><?php echo $item['direccion_solicitante']; ?></td>
						<td class="hidden-480"><?php echo $item['telefono1_solicitante']; ?></td>
						<td class="hidden-phone"><?php echo $item['telefono2_solicitante']; ?></td>
						

						<td>
							<span class="label label-info"><?php echo $item['estado_solicitud']; ?></span>
						</td>

						<td>
							<div class="hidden-phone visible-desktop btn-group">
								<button class="btn btn-mini btn-success">
									<i class="icon-pencil bigger-140"></i>
								</button>

								<button class="btn btn-mini btn-danger">
									<i class="icon-trash bigger-140"></i>
								</button>

								<button class="btn btn-mini btn-info">
									<i class="icon-zoom-in bigger-140"></i>
								</button>
							</div>

							<div class="hidden-desktop visible-phone">
								<div class="inline position-relative">
									<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">
										<i class="icon-cog icon-only bigger-110"></i>
									</button>

									<ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">

										<li>
											<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
												<span class="green">
													<i class="icon-pencil bigger-120"></i>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
												<span class="red">
													<i class="icon-trash bigger-120"></i>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
												<span class="blue">
													<i class="icon-zoom-in bigger-120"></i>
												</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</td>
					</tr>


					<?php
				}
			?>
			</tbody>
		</table>
	</div><!--/span-->
</div><!--/row-->

<script>
	$(document).ready(function()
	{

		grid_solicitudes = $('#lista_solicitudes').dataTable( 
		{
		  	"oLanguage": 
			  	{
		            "sLengthMenu": "Mostrar _MENU_ ",
		            "sZeroRecords": "No se encontraron registros relacionados con la busqueda.",
		            "sInfo": "Mostrando _START_ - _END_ de _TOTAL_",
		          	//"sInfoEmpty": "Showing 0 to 0 of 0 records",
		            "sInfoEmpty": "Vacio",
		            "sInfoFiltered": "(Busqueda entre _MAX_  registros.)",
		            "sEmptyTable": "No hay datos disponible en la tabla",
		            "sLodadingRecords": "Cargando...",
		            "sProcessing": "Procesando...",
		            "sPrevious": "Anterior",
		            "sNext": "Siguiente",
		            "sLast": "Ultimo",
		            "First": "Primero",
		            "sSearch": "<div class='nav-search' style='margin:-10px 0px;'><div class='nav-seach'><br><span class='input-icon'>_INPUT_<i class='icon-search nav-search-icon' style='padding:0px 7px;'></i></span></div>"
		        },
			  	
		  	"fnDrawCallback": function ( oSettings ) 
		  		{
					if ( oSettings.bSorted || oSettings.bFiltered )
						{
							for ( var i=0, iLen=oSettings.aiDisplay.length ; i<iLen ; i++ )
								{
									$('td:eq(0)', oSettings.aoData[ oSettings.aiDisplay[i] ].nTr ).html( i+1 );
								}
						}
				},
			
			//"aoColumns": [{ "bSortable": false, "aTargets": [0]}, null, null, null, { "bSortable": false }],
			"aoColumnDefs": [{ "bSortable": false, "aTargets": [ 0,7] }],"aaSorting": [[ 0, 'asc' ]]
		});	


		$('div.dataTables_length').append('<label><button title="Agregar Solicitud" id="llamada_add_solicitud" class="btn btn-mini btn-success" data-toggle="modal" data-target="#agregar_solicitud" onclick="cambiar_msjalerta(mensajevacio); limpiar()"><i class="icon-plus bigger-110"></i></button></label>   <label><a href="solicitudes/reporte" title="Generar Reporte" id="llamda_reporte_solicitudes" target="_blank" class="btn btn-mini btn-yellow" ><i class="icon-print bigger-110"></i></a></label>    <label><a href="solicitudes/reporte" title="Generar Reporte" id="llamda_reporte_solicitudes" target="_blank" class="btn btn-mini btn-info" ><i class="icon-search bigger-110"></i></a></label>')
		$('input[aria-controls="sample-table-2"]').attr({'aria-controls': 'sample-table-2', 'placeholder': 'Buscar ...', 'class': 'input-small nav-search-input'})
		$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
	
		function tooltip_placement(context, source) 
		{
			var $source = $(source);
			var $parent = $source.contextlosest('table')
			var off1 = $parent.offset();
			var w1 = $parent.width();
	
			var off2 = $source.offset();
			var w2 = $source.width();
	
			if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
			return 'left';
		}

	
	});
</script>