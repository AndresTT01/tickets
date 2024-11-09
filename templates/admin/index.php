
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="static/img/ICO.ico" />

	
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<base href="/tickets/"> <!-- Establece la base para todas las URLs relativas -->
	<link rel="stylesheet" type="text/css" href="static/css/admin/admin.css">
	<link rel="stylesheet" type="text/css" href="static/css/admin/ajustes.css">
	<link rel="stylesheet" type="text/css" href="static/css/admin/ajustes.css">
	<link rel="stylesheet" type="text/css" href="static/css/admin/content.css">
	<link rel="stylesheet" type="text/css" href="static/css/admin/editmodaluser.css">
	<link rel="stylesheet" type="text/css" href="static/css/admin/ajustes.css">
	<link rel="stylesheet" type="text/css" href="static/css/admin/main.css">
	<link rel="stylesheet" type="text/css" href="static/css/admin/modal.css">
	<link rel="stylesheet" type="text/css" href="static/css/admin/navbar.css">
	<link rel="stylesheet" type="text/css" href="static/css/admin/otros.css">
	<link rel="stylesheet" type="text/css" href="static/css/admin/sidebar.css">
	<link rel="stylesheet" type="text/css" href="static/css/admin/status.css">
	<link rel="stylesheet" type="text/css" href="static/css/admin/tablas.css">
	<link rel="stylesheet" type="text/css" href="static/css/admin/select.css">

	


	<title>Admin Dashboard | CPSP</title>
</head>
<body>
	<?php include(__DIR__.'/../../db/admin/get/get_users.php'); ?>
	<?php include(__DIR__.'/../../db/admin/get/get_suc.php'); ?>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Bienvenido (name)</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#" data-section="main1">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#" data-section="main2">
					<i class='bx bx-task'></i>
					<span class="text">Tickets</span>
				</a>
			</li>
			<li>
				<a href="#" data-section="main3">
					<i class='bx bx-ghost'></i>
					<span class="text">Usuarios</span>
				</a>
			</li>
			<li>
				<a href="#" data-section="main4">
					<i class='bx bxs-buildings'></i>
					<span class="text">Sucursales</span>
				</a>
			</li>
			<li>
				<a href="#" data-section="main5">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Comentarios</span>
				</a>
			</li>
			<li>
				<a href="#" data-section="main6">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Analytics</span>
				</a>
			</li>
			
			<li>
				<a href="#" data-section="main7">
					<i class='bx bxs-group' ></i>
					<span class="text">Team</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#">
				<div class="form-input" hidden>
					<input type="search" placeholder="Search..." hidden>
					<button type="submit" class="search-btn" hidden><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			
			<a href="#" class="profile">
				<img src="">
			</a>
		</nav>
		<!-- NAVBAR -->

		 
		<main id="main1" class="content-section">
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="hhhhhh">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>0</h3>
						<p>Tickets Recibidos</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>0</h3>
						<p>Tickets en Proceso</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>0</h3>
						<p>Tickets Finalizados</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Tickets Recientes</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Usuarios</th>
								<th>Fecha</th>
								<th>Estatus</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
							
						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Tareas</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div>
			</div>
		</main>

		<main id="main2" class="content-section">
			<div class="head-title">
				<div class="left">
					<h1>Historial de Tickets</h1>
					<ul class="hhhhhh">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Todos los tickets</a>
						</li>
					</ul>
				</div>

			</div>


			<div class="table-data">
				<div class="order">
					<div class="table_header">
						<h2>Filtros:</h2>
						<select id="roleFilterCA">
							<option value="" selected>Categoria</option>
							<option value="software">Software</option>
							<option value="hardware">Hardware</option>
							<option value="otro">Otro</option>
						</select>



						<select id="roleFilter">
							<option value="" selected>Status</option>
							<option value="ab">Abierto</option>
							<option value="su">Pendiente</option>
							<option value="ec">En camino</option>
							<option value="ep">En progreso</option>
							<option value="ac">Cerrado</option>
						</select>


						<div class="inputfecha">
							<label for="fechaDesde">Desde:</label>
							<input class="fd" type="date" id="fechaDesde" name="fecha_desde">

							<label for="fechaHasta">Hasta:</label>
							<input class="fd" type="date" id="fechaHasta" name="fecha_hasta">
						</div>
						
						<div class="input_search">
							<input type="search" id="searchInputt" placeholder="Buscar" />
							<i class="bi bi-search" id="searchIcon"></i>
						</div>
					</div>
					<table id="userTable">
						<thead>
							<tr>
								<th>Acciones<i class="bi bi-chevron-expand"></i></th>
								<th>ID<i class="bi bi-chevron-expand"></i></th>
								<th>Nombre<i class="bi bi-chevron-expand"></i></th>
								<th>Sucursal<i class="bi bi-chevron-expand"></i></th>
								<th>Titulo<i class="bi bi-chevron-expand"></i></th>
								<th>Deparatmento<i class="bi bi-chevron-expand"></i></th>
								<th>Categoria<i class="bi bi-chevron-expand"></i></th>
								<th>Prioridad<i class="bi bi-chevron-expand"></i></th>
								<th>Estado<i class="bi bi-chevron-expand"></i></th>
								<th>Fecha de creacion<i class="bi bi-chevron-expand"></i></th>
								<th>Fecha de cierre<i class="bi bi-chevron-expand"></i></th> 
							</tr>
						</thead>
						<!--<tbody id="userTableBodys">
							<?php foreach ($tikets as $tts): ?>
								<tr id="tickets_<?php echo htmlspecialchars($tts['id']); ?>">
									
									<td>
										<button class="btn-view" onclick="viewtickets(<?php echo htmlspecialchars($tts['id']); ?>)"><i class="fa-regular fa-eye" style="color: #fcfcfc;"></i></button>
									</td>
					
									<td><?php echo htmlspecialchars($tts['id']); ?></td>
									<td><?php echo htmlspecialchars($tts['usuario_creador']); ?></td>
									<td>
										<?php if ($tts['sucursal'] == '1'): ?>
											<p class="status cpo">Corporativo</p>
										<?php elseif ($tts['sucursal'] == '2'): ?>
											<p class="status mtz">Matriz</p>
										<?php elseif ($tts['sucursal'] == '3'): ?>
											<p class="status ztn">Zalatitán</p>
										<?php elseif ($tts['sucursal'] == '4'): ?>
											<p class="status jmi">JMI</p>
										<?php elseif ($tts['sucursal'] == '5'): ?>
											<p class="status zpn">Zapopan</p>
										<?php elseif ($tts['sucursal'] == '6'): ?>
											<p class="status spo">San Pedrito</p>
										<?php elseif ($tts['sucursal'] == '7'): ?>
											<p class="status sfe">Santa Fé</p>
										<?php elseif ($tts['sucursal'] == '8'): ?>
											<p class="status cpa">Chapala</p>
										<?php elseif ($tts['sucursal'] == '9'): ?>
											<p class="status ctro">Centro</p>
										<?php elseif ($tts['sucursal'] == '10'): ?>
											<p class="status obo">Obrero</p>
										<?php elseif ($tts['sucursal'] == '11'): ?>
											<p class="status tna">Tonalá</p>
										<?php elseif ($tts['sucursal'] == '12'): ?>
											<p class="status csr">Centro Sur</p>
										<?php elseif ($tts['sucursal'] == '13'): ?>
											<p class="status tpe">Tlaquepaque</p>
										<?php elseif ($tts['sucursal'] == '14'): ?>
											<p class="status otn">Ocotlán</p>
										<?php elseif ($tts['sucursal'] == '15'): ?>
											<p class="status pla">Aleira</p>
										<?php elseif ($tts['sucursal'] == '16'): ?>
											<p class="status blo">Belisario Domínguez</p>
										<?php endif; ?>
									</td>
									<td><?php echo htmlspecialchars($tts['titulot']); ?></td>
									<td>
										<?php if ($tts['departamento'] == 'Sub Gerencia Cap'): ?>
											<p class="status sgc">Sub Gerencia Cap</p>
										<?php elseif ($tts['departamento'] == 'Archivo'): ?>
											<p class="status aro">Archivo</p>
										<?php elseif ($tts['departamento'] == 'Pagares'): ?>
											<p class="status pgs">Pagares</p>
										<?php elseif ($tts['departamento'] == 'Salas'): ?>
											<p class="status ss">Salas</p>
										<?php elseif ($tts['departamento'] == 'Direccion General'): ?>
											<p class="status dg">Direccion General</p>
										<?php elseif ($tts['departamento'] == 'Gerencia de operaciones'): ?>
											<p class="status gdo">Gerencia de operaciones</p>
										<?php elseif ($tts['departamento'] == 'RH'): ?>
											<p class="status rh">RH</p>
										<?php elseif ($tts['departamento'] == 'Juridico'): ?>
											<p class="status jro">Juridico</p>
										<?php elseif ($tts['departamento'] == 'Mercadotecnia'): ?>
											<p class="status mdt">Mercadotecnia</p>
										<?php elseif ($tts['departamento'] == 'Almacen'): ?>
											<p class="status acn">Almacen</p>
										<?php elseif ($tts['departamento'] == 'Compras'): ?>
											<p class="status cps">Compras</p>
										<?php elseif ($tts['departamento'] == 'Mesa de control'): ?>
											<p class="status mdc">Mesa de control</p>
										<?php elseif ($tts['departamento'] == 'Normatividad'): ?>
											<p class="status nmd">Normatividad</p>
										<?php elseif ($tts['departamento'] == 'Riesgos'): ?>
											<p class="status rgs">Riesgos</p>
										<?php elseif ($tts['departamento'] == 'Coll Center'): ?>
											<p class="status ccr">Coll Center</p>
										<?php elseif ($tts['departamento'] == 'Contraloria'): ?>
											<p class="status cla">Contraloria</p>
										<?php elseif ($tts['departamento'] == 'Contabilidad'): ?>
											<p class="status cbd">Contabilidad</p>
										<?php elseif ($tts['departamento'] == 'Promocion'): ?>
											<p class="status pon">Promocion</p>
										<?php elseif ($tts['departamento'] == 'Bodega'): ?>
											<p class="status bda">Bodega</p>
										<?php elseif ($tts['departamento'] == 'Talleres'): ?>
											<p class="status tls">Talleres</p>
										<?php elseif ($tts['departamento'] == 'Servicio Medico'): ?>
											<p class="status sm">Servicio Medico</p>
										<?php elseif ($tts['departamento'] == 'Gerencia'): ?>
											<p class="status gna">Gerencia</p>
										<?php elseif ($tts['departamento'] == 'Credito'): ?>
											<p class="status cdo">Credito</p>
										<?php elseif ($tts['departamento'] == 'Cajas'): ?>
											<p class="status cjs">Cajas</p>
										<?php elseif ($tts['departamento'] == 'Captacion'): ?>
											<p class="status ctn">Captacion</p>
										<?php elseif ($tts['departamento'] == 'Caseta de vigilancia'): ?>
											<p class="status cdv">Caseta de vigilancia</p>
										<?php elseif ($tts['departamento'] == 'Modulo de Informacion'): ?>
											<p class="status mdi">Modulo de Informacion</p>
										<?php endif; ?>
									</td>
									<td>
										<?php if ($tts['categoriat'] == 'hardware'): ?>
											<p class="status hde">Hardware</p>
										<?php elseif ($tts['categoriat'] == 'software'): ?>
											<p class="status ste">Software</p>
										<?php elseif ($tts['categoriat'] == 'otro'): ?>
											<p class="status oto">Otro</p>
										<?php endif; ?>
									</td>
									<td>
										<?php if ($tts['prioridadt'] == 'baja'): ?>
											<p class="status bja">Baja</p>
										<?php elseif ($tts['prioridadt'] == 'media'): ?>
											<p class="status mda">Media</p>
										<?php elseif ($tts['prioridadt'] == 'alta'): ?>
											<p class="status ata">Alta</p>
										<?php endif; ?>
									</td>
									<td>
										<?php if ($tts['estadot'] == 'abierto'): ?>
											<p class="status abo">Abierto</p>
										<?php elseif ($tts['estadot'] == 'pendiente'): ?>
											<p class="status pne">Pendiente</p>
										<?php elseif ($tts['estadot'] == 'en camino'): ?>
											<p class="status eco">En camino</p>
										<?php elseif ($tts['estadot'] == 'en progreso'): ?>
											<p class="status epo">En progreso</p>
										<?php elseif ($tts['estadot'] == 'cerrado'): ?>
											<p class="status cro">Cerrado</p>
										<?php endif; ?>
									</td>
									<td><?php echo htmlspecialchars($tts['fecha_creaciont']); ?></td>
									<td><?php echo htmlspecialchars($tts['fecha_cierret']); ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>-->
					</table>
	
					<div class="table_fotter">
						<p><span id="totalRow"></span></p>
					</div>
				</div>

				
			</div>

			
		</main>

		<main id="main3" class="content-section">
			<div class="head-title">
				<div class="left">
					<h1>Usuarios</h1>
					<ul class="hhhhhh">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Usuarios</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download XLSX</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3><?php echo $totalUsuarios; ?></h3>
						<p>Total de usuarios</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3><?php echo $usuariosSuspendidos; ?></h3>
						<p>Total de Usuario suspendidos</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3><?php echo $usuariosActivos; ?></h3>
						<p>Total de usuarios Activos</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3><?php echo $usuariosDesactivados; ?></h3>
						<p>Total de usuarios Desactivados</p>
					</span>
				</li>
			</ul>



			<div class="table-data">
				<div class="order">
					<div class="table_header">
						<h2>Usuarios</h2>
						<!-- Button trigger modal -->
						<button id="openUserModalBtn">Nuevo Usuario</button>
					</div>
					<table>
						<thead>
							<tr>
								<th>Acciones <i class="bi bi-chevron-expand"></i></th>
								<th>ID <i class="bi bi-chevron-expand"></i></th>
								<th>nombre <i class="bi bi-chevron-expand"></i></th>
								<th>email <i class="bi bi-chevron-expand"></i></th>
								<th>sucursal <i class="bi bi-chevron-expand"></i></th>
								<th>estatus <i class="bi bi-chevron-expand"></i></th>
								<th>Fecha Creacion <i class="bi bi-chevron-expand"></i></th>
							</tr>
						</thead>
						<tbody>
							<?php if (!empty($usuarios)) : ?>
								<?php foreach ($usuarios as $usuario) : ?>
									<tr>
										<td>
											<!-- Botón que llama a la función JavaScript con los datos del usuario -->
											<button type="button" onclick="abrirModal(
													'<?php echo $usuario['id']; ?>',
													'<?php echo htmlspecialchars($usuario['nombres']); ?>',
													'<?php echo htmlspecialchars($usuario['apellidos']); ?>',
													'<?php echo htmlspecialchars($usuario['ext']); ?>',
													'<?php echo htmlspecialchars($usuario['email']); ?>',
													'<?php echo htmlspecialchars($usuario['password']); ?>',
													'<?php echo htmlspecialchars($usuario['roles_nombre']); ?>',
													'<?php echo htmlspecialchars($usuario['sucursal_nombre']); ?>',
													'<?php echo htmlspecialchars($usuario['status_descripcion']); ?>'												)">Editar
											</button>
										</td>
										<td><?php echo htmlspecialchars($usuario['id']); ?></td>
										<td><?php echo htmlspecialchars($usuario['nombres']); ?></td>
										<td><?php echo htmlspecialchars($usuario['email']); ?></td>
										<td><?php echo htmlspecialchars($usuario['sucursal_nombre']); ?></td>
										<td><?php echo htmlspecialchars($usuario['status_descripcion']); ?></td>
										<td><?php echo htmlspecialchars($usuario['fecha_creacion']); ?></td>
									</tr>
								<?php endforeach; ?>
							<?php else : ?>
								<tr>
									<td colspan="6">No se encontraron registros</td>
								</tr>
							<?php endif; ?>
						</tbody>
					</table>
				</div>
		
				<!-- Ventana modal para agregar nuevo usuario -->
				<div id="UserFormModal" class="modal">
					<div class="modalt">
						<span class="close">&times;</span>
						<h2>Añadir Nuevo Usuario</h2>
						<form id="UserForm"  action="./db/admin/registed/adduser.php" method="POST">
							<div class="flex-container">
								<div>
									<label for="name">Nombre's:</label>
									<input type="text" id="name" name="name" required>
								</div>

								<div>
									<label for="lastname">Apellidos:</label>
									<input type="text" id="lastname" name="lastname" required>
								</div>

								<div>
									<label for="ext">Ext:</label>
									<input type="number" id="ext" name="ext" required>
								</div>
							</div>
							

							<div  class="flex-container">
								<div>
									<label for="mail">Email:</label>
									<input type="email" id="mail" name="mail" required>
								</div>
								<div>
									<label for="pass">Contraseña:</label>
									<input type="password" id="pass" name="pass" required>
								</div>
							</div>


							<div class="flex-container">
								<div>
									<label for="rol">Rol</label>
									<select  class="ss" id="rol" name="rol" required>

										<option value="">Seleccionar...</option>
										
									  <!-- Personal Operativo -->
										<option value="2">Second Admin</option>
										<option value="3">Soporte</option>
									  
									  <!-- Personal de sucursal -->
										<option value="4">Gerente de sucursal</option>
										<option value="5">Cordinador de sucursal</option>

									</select>
								</div>

								<div>
									<label for="sucursal">Sucursal</label>
									<select class="ss" id="sucursal" name="sucursal" required>
										<option value="">Seleccionar...</option>
										<option value="1">Operativo Matriz</option>
										<option value="2">Matriz</option>
										<option value="3">Zalatitan</option>
										<option value="4">Jose Maria Iglesias</option>
										<option value="5">Zapopan</option>
										<option value="6">San Pedrito</option>
										<option value="7">Santa Fe</option>
										<option value="8">Chapala</option>
										<option value="9">Centro</option>
										<option value="10">Obrero</option>
										<option value="11">Tonala</option>
										<option value="12">Centro Sur</option>
										<option value="13">Tlaquepaque</option>
										<option value="14">Ocotlan</option>
										<option value="15">Plaza Aleira</option>
										<option value="16">Belisario Dominguez</option>
									</select>
								</div>

								<div>
									<label for="estts">Estatus</label>
									<select class="ss" id="estts" name="estts" required>
										<option value="">Seleccionar...</option>
										<option value="1">Activo</option>
										<option value="2">Suspendido</option>
										<option value="3">Desactivado</option>								
									</select>
								</div>
							</div>

							<div class="button-group">
								<button class="ddd" type="submit">Guardar</button>
								<button class="cerrar">Cancelar</button>
							</div>
						</form>
					</div>
				</div>

				<!-- Modal para edición de usuario -->
				<div id="modalEditar" class="modal">
					<div class="modal-content">
						<span onclick="cerrarModal()" class="close">&times;</span>
						<h2>Editar Usuario</h2>
						<form id="formEditarUsuario" action="./db///.php" method="POST">

							<div class="flex-container"> 
								<input type="hidden" id="editId">

								<div>
									<label for="editNombres">Nombre:</label>
									<input type="text" id="editNombres" name="editNombres">
								</div>
								<div>
									<label for="editApellidos">Apellido's:</label>
									<input type="text" id="editApellidos" name="editApellidos">
								</div>
								<div>
									<label for="editExt">Ext:</label>
									<input type="number" id="editExt" name="editExt">
								</div>

							</div>

							<div class="flex-container">
								<div>
									<label for="editEmail">Email:</label>
									<input type="email" id="editEmail" name="editEmail">
								</div>
								<div>
									<label for="editPass">Contraseña:</label>
									<input type="text" id="editPass" name="editPass">
								</div>

							</div>

							<div class="flex-container">
								<div>
									<label for="editRol">Rol</label>
									<select  class="ss" id="editRol" name="editRol" required>

										<option value="">Seleccionar...</option>
										
									  <!-- Personal Operativo -->
										<option value="2">Second Admin</option>
										<option value="3">Soporte</option>
									  
									  <!-- Personal de sucursal -->
										<option value="4">Gerente de sucursal</option>
										<option value="5">Cordinador de sucursal</option>

									</select>
								</div>

								<div>
									<label for="editSucursal">Sucursal</label>
									<select class="ss" id="editSucursal" name="editSucursal" required>
										<option value="">Seleccionar...</option>
										<option value="1">Operativo Matriz</option>
										<option value="2">Matriz</option>
										<option value="3">Zalatitan</option>
										<option value="4">Jose Maria Iglesias</option>
										<option value="5">Zapopan</option>
										<option value="6">San Pedrito</option>
										<option value="7">Santa Fe</option>
										<option value="8">Chapala</option>
										<option value="9">Centro</option>
										<option value="10">Obrero</option>
										<option value="11">Tonala</option>
										<option value="12">Centro Sur</option>
										<option value="13">Tlaquepaque</option>
										<option value="14">Ocotlan</option>
										<option value="15">Plaza Aleira</option>
										<option value="16">Belisario Dominguez</option>
									</select>
								</div>

								<div>
									<label for="editStatus">Estatus</label>
									<select class="ss" id="editStatus" name="editStatus" required>
										<option value="">Seleccionar...</option>
										<option value="1">Activo</option>
										<option value="2">Suspendido</option>
										<option value="3">Desactivado</option>								
									</select>
								</div>
							</div>						

							<div class="button-group">
								<button class="ddd" type="submit">Guardar</button>
								<button onclick="cerrarModal()" class="cerrar" type="button">Cancelar</button>
							</div>
						</form>
					</div>
				</div>
								
			</div>
		</main>

		<main id="main4" class="content-section">
			<div class="head-title">
				<div class="left">
					<h1>Sucursales</h1>
					<ul class="hhhhhh">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Sucursales</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download XLSX</span>
				</a>
			</div>


			<div class="table-data">
				<div class="order">
					<div class="table_header">
						<h2>Sucursales</h2>
						<!-- Button trigger modal -->
						<button id="openSucBtn">Nueva Sucursal</button>
					</div>
					<table>
						<thead>
							<tr>
								<th>Acciones <i class="bi bi-chevron-expand"></i></th>
								<th>ID <i class="bi bi-chevron-expand"></i></th>
								<th>Nombre <i class="bi bi-chevron-expand"></i></th>
								<th>Direccion <i class="bi bi-chevron-expand"></i></th>
								<th>Fecha de creacion <i class="bi bi-chevron-expand"></i></th>
							</tr>
						</thead>
						<tbody>
							<?php if (!empty($suc)) : ?>
								<?php foreach ($suc as $s) : ?>
									<tr>
										<td>
											<button type="button">Editar</button>
										</td>
										<td><?php echo htmlspecialchars($s['id']); ?></td>
										<td><?php echo htmlspecialchars($s['nombre']); ?></td>
										<td><?php echo htmlspecialchars($s['direccion']); ?></td>
										<td><?php echo htmlspecialchars($s['fecha_creacion']); ?></td>
									</tr>
								<?php endforeach; ?>
							<?php else : ?>
								<tr>
									<td colspan="6">No se encontraron registros</td>
								</tr>
							<?php endif; ?>
						</tbody>
					</table>
				</div>


				<!-- Ventana modal -->
				<div id="SucForm" class="modal"> 
					<div class="modals">
						<span class="close" id="kill">&times;</span>
						<h2>Añadir Nueva Sucursal</h2>
						<form id="SucFormm" action="./db/admin/registed/addsuc.php" method="POST" >
							<div >
								<div>
									<label for="names">Nombre</label>
									<input type="text" id="names" name="names" required>
								</div>

								<div>
									<label for="dire">Direccion</label>
									<input type="text" id="dire" name="dire" required>
								</div>

							</div>
							



							<div class="button-group">
								<button class="ddd" type="submit">Guardar</button>
								<button class="cerrar" id="kil">Cancelar</button>
							</div>
						</form>
					</div>
				</div>

			</div>

			
		</main>

	</section>
	<!-- CONTENT -->
	
	<!-- =========== Scripts =========  -->
	<script src="static/js/mode-black.js"></script>
	<script src="static/js/menu.js"></script>
	<script src="static/js/admin/adduserform.js"></script>
	<script src="static/js/admin/addsucform.js"></script>
	<script src="static/js/admin/edituserform.js"></script>
	<script src="https://kit.fontawesome.com/9a18bf423e.js" crossorigin="anonymous"></script>
	<!-- Incluye jQuery y SweetAlert -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<script>
		$(document).ready(function() {
			$('#SucFormm').on('submit', function(e) { // Reemplaza #miFormulario con el id de tu formulario
				e.preventDefault(); // Previene el envío del formulario por defecto

				$.ajax({
					url: './db/admin/registed/addsuc.php', // Cambia por la ruta a tu archivo PHP
					type: 'POST',
					data: $(this).serialize(), // Envía todos los datos del formulario
					dataType: 'json', // Espera un JSON de respuesta
					success: function(response) {
						// Verifica el estado de la respuesta y muestra SweetAlert
						if (response.status === 'success') {
							Swal.fire({
								icon: 'success',
								title: '¡Éxito!',
								text: response.message,
								confirmButtonText: 'Aceptar'
							});
						} else {
							Swal.fire({
								icon: 'error',
								title: 'Error',
								text: response.message,
								confirmButtonText: 'Intentar de nuevo'
							});
						}
						// Limpia el formulario si se envió correctamente
						if (response.status === 'success') {
							$('#SucForm').hide(); // Esto oculta la ventana
           				 	$('#SucFormm')[0].reset(); // Limpiar los campos del formulario
						}
					},
					error: function() {
						Swal.fire({
							icon: 'error',
							title: 'Error',
							text: 'Hubo un problema al procesar el formulario.',
							confirmButtonText: 'Intentar de nuevo'
						});
					}
				});
			});
		});
	</script>
	

	
	<!-- Code injected by live-server 
	<script>
		// <![CDATA[  <-- For SVG support
		if ('WebSocket' in window) {
			(function () {
				function refreshCSS() {
					var sheets = [].slice.call(document.getElementsByTagName("link"));
					var head = document.getElementsByTagName("head")[0];
					for (var i = 0; i < sheets.length; ++i) {
						var elem = sheets[i];
						var parent = elem.parentElement || head;
						parent.removeChild(elem);
						var rel = elem.rel;
						if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
							var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
							elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
						}
						parent.appendChild(elem);
					}
				}
				var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
				var address = protocol + window.location.host + window.location.pathname + '/ws';
				var socket = new WebSocket(address);
				socket.onmessage = function (msg) {
					if (msg.data == 'reload') window.location.reload();
					else if (msg.data == 'refreshcss') refreshCSS();
				};
				if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
					console.log('Live reload enabled.');
					sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
				}
			})();
		}
		else {
			console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
		}
		// ]]>
	</script>-->
</body>
</html>













