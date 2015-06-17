<a class="menu-toggler" id="menu-toggler" href="#">
	<span class="menu-text"></span>
</a>

<div class="sidebar" id="sidebar">

	<div class="sidebar-collapse" id="sidebar-collapse">
		<i class="icon-double-angle-left"></i>
	</div>

	<div class="sidebar-shortcuts" id="sidebar-shortcuts">
		<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
			<button class="btn btn-small btn-success">
				<i class="icon-signal"></i>
			</button>

			<button class="btn btn-small btn-info">
				<i class="icon-pencil"></i>
			</button>

			<button class="btn btn-small btn-warning">
				<i class="icon-group"></i>
			</button>

			<button class="btn btn-small btn-danger">
				<i class="icon-cogs"></i>
			</button>
		</div>
		
		<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
			<span class="btn btn-success"></span>

			<span class="btn btn-info"></span>

			<span class="btn btn-warning"></span>

			<span class="btn btn-danger"></span>
		</div>
	</div><!--#sidebar-shortcuts-->
	
	<ul class="nav nav-list">
		<li class="active">
			<a href="<?php echo base_url();?>home">
				<i class="icon-dashboard"></i>
				<span class="menu-text"> Inicio </span>
			</a>
		</li>

		<li>
			<a href="#" class="dropdown-toggle">
				<i class="icon-desktop"></i>
				<span class="menu-text"> Instalaciones </span>

				<b class="arrow icon-angle-down"></b>
			</a>

			<ul class="submenu">
				<li>
					<a href="<?php echo base_url();?>solicitudes">
						<i class="icon-double-angle-right"></i>
						<i class="icon-list"></i>
						Solicitudes
					</a>
				</li>

				<li>
					<a href="<?php echo base_url();?>activaciones">
						<i class="icon-double-angle-right"></i>
						<i class="icon-hdd"></i>
						Activaciones
					</a>
				</li>

				<li>
					<a href="<?php echo base_url();?>reportes_instalaciones">
						<i class="icon-double-angle-right"></i>
						<i class="icon-file-text"></i>
						Reportes instalaciones
					</a>
				</li>
			</ul>
		</li>


		<li>
			<a href="#" class="dropdown-toggle">
				<i class="icon-briefcase"></i>
				<span class="menu-text"> Trabajo en Campo </span>

				<b class="arrow icon-angle-down"></b>
			</a>

			<ul class="submenu">
				<li>
					<a href="<?php echo base_url();?>ordenes">
						<i class="icon-double-angle-right"></i>
						<i class="icon-male"></i>
						Ordenes de Clientes
					</a>
				</li>

				<li>
					<a href="<?php echo base_url();?>red">
						<i class="icon-double-angle-right"></i>
						<i class="icon-sitemap"></i>
						Problemas de Red
					</a>
				</li>
				<li>
					<a href="<?php echo base_url();?>reportes_trabajos_campo">
						<i class="icon-double-angle-right"></i>
						<i class="icon-file-text"></i>
						Reportes de Trabajos
					</a>
				</li>
			</ul>
		</li>


		<li>
			<a href="#" class="dropdown-toggle">
				<i class="icon-list-alt"></i>
				<span class="menu-text"> Herramientas</span>

				<b class="arrow icon-angle-down"></b>
			</a>

			<ul class="submenu">
				<li>
					<a href="<?php echo base_url();?>calendario">
						<i class="icon-double-angle-right"></i>
						<i class="icon-calendar"></i>
						Calendario
					</a>
				</li>
				<li>
					<a href="<?php echo base_url();?>graficas">
						<i class="icon-double-angle-right"></i>
						<i class="icon-bar-chart"></i>
						Graficas
					</a>
				</li>
				<li>
					<a href="<?php echo base_url();?>calculadora">
						<i class="icon-double-angle-right"></i>
						<i class="icon-table"></i>
						Calculadora
					</a>
				</li>
			</ul>
		</li>
	</ul><!--/.nav-list-->
</div>