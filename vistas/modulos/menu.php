<aside class="main-sidebar">

	 <section class="sidebar">

		<ul class="sidebar-menu">

		<?php
		if($_SESSION["perfil"] =="Administrador"){

			echo'<li class="active">

				<a href="inicio">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>

			</li>
					<li>

						<a href="usuarios">

							<i class="fa fa-user"></i>
							<span>Usuarios</span>

						</a>

					</li>';
				}

				if($_SESSION["perfil"] =="Administrador" || $_SESSION["perfil"] =="Secretari@"){

					echo'<li class="treeview">

				<a href="#">

					<i class="fa fa-folder"></i>
					
					<span>Administrar</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
				<li>

					<a href="adm-habitaciones">

							<i class="fa fa-users"></i>
							<span>Administrar habitacion</span>

						</a>

					</li>

			<li>

				<a href="crear-servicio">

					<i class="fa fa-archive"></i>
					<span>Crear Servicio</span>

				</a>

			</li>

			<li>

					<a href="clientes">

							<i class="fa fa-users"></i>
							<span>Clientes</span>

						</a>

					</li>

				<li>
			</ul>
			</li>';
		}	

		if($_SESSION["perfil"] =="Administrador"){
			
			echo'<li class="treeview">

				<a href="#">

					<i class="fa fa-folder"></i>
					
					<span>Mantenimiento</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
				

						<a href="productos">

							<i class="fa fa-product-hunt"></i>
							<span>Productos</span>

						</a>

					</li>
					
					
					
					<li>

						<a href="habitaciones">
							
							<i class="fa fa-hotel"></i>
							<span>Habitaciones</span>

						</a>

					</li>
					<li>

						<a href="pisos">
							
							<i class="fa fa-qrcode"></i>
							<span>Pisos</span>

						</a>

					</li>
					<li>

						<a href="servicios">
							
							<i class="fa fa-qrcode"></i>
							<span>Servicios</span>

						</a>

					</li>

					<li>

						<a href="categorias">

					<i class="fa fa-th"></i>
					<span>Categorías</span>

						</a>

					</li>';
				}
				?>
					</ul>


			

			

			

			

		</ul>

	 </section>

</aside>