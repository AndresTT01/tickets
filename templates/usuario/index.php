<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">



	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	
	<link rel="shortcut icon" href="static/img/ICO.ico" />
	<!-- My CSS -->
	<base href="/tickets/">
	<link rel="stylesheet" href="static/css/user/admin.css">
	<link rel="stylesheet" href="static/css/user/ajustes.css">
	<link rel="stylesheet" href="static/css/user/content.css">
	<link rel="stylesheet" href="static/css/user/main.css">
	<link rel="stylesheet" href="static/css/user/modal.css">
	<link rel="stylesheet" href="static/css/user/navbar.css">
	<link rel="stylesheet" href="static/css/user/otros.css">
	<link rel="stylesheet" href="static/css/user/sidebar.css">
	<link rel="stylesheet" href="static/css/user/status.css">
	<link rel="stylesheet" href="static/css/user/tablas.css">
	<link rel="stylesheet" href="static/css/user/select.css">

	<title>User Dashboard | CPSP</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bx-ghost'></i>
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
					<i class='bx bxs-group' ></i>
					<span class="text">Team</span>
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
					<i class='bx bxs-group' ></i>
					<span class="text">Team</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#" data-section="main6">
					<i class='bx bxs-cog' ></i>
					<span class="text">Ajustes</span>
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
						<p>Tickets Enviados</p>
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
					<i class='bx bx-task'></i>
					<span class="text">
						<h3>0</h3>
						<p>Tickets Finalizados</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="table_header">
						<h2>Tickets Recientes</h2>
						<!-- Button trigger modal -->
						<button id="openModalBtn">Levantar Ticket</button>
					</div>
					<table>
						<thead>
							<tr>
								<th style="display: none;">ID <i class="bi bi-chevron-expand"></i></th>
								<th>IDEN <i class="bi bi-chevron-expand"></i></th>
								<th>Titulo <i class="bi bi-chevron-expand"></i></th>
								<th>Departamento <i class="bi bi-chevron-expand"></i></th>
								<th>Prioridad <i class="bi bi-chevron-expand"></i></th>
								<th>Tag<i class="bi bi-chevron-expand"></i></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="display: none;">id</td>
								<td>Producto01</td>
								<td>TipoProducto01</td>
								<td>LocalProducto01</td>
								<td>PrecioProducto01</td>
								<td>
								<i class="bi bi-pencil-square" id="icons"></i
								><i class="bi bi-trash" id="icons"></i>
								</td>
							</tr>
							<tr>
								<td>Producto01</td>
								<td>TipoProducto01</td>
								<td>LocalProducto01</td>
								<td>PrecioProducto01</td>
								<td>
								<i class="bi bi-pencil-square" id="icons"></i
								><i class="bi bi-trash" id="icons"></i>
								</td>
							</tr>
							<tr>
								<td>Producto01</td>
								<td>TipoProducto01</td>
								<td>LocalProducto01</td>
								<td>PrecioProducto01</td>
								<td>
								<i class="bi bi-pencil-square" id="icons"></i
								><i class="bi bi-trash" id="icons"></i>
								</td>
							</tr>
							
						</tbody>
					</table>
				</div>

				<div class="todo">
					<div class="head">
						<h3>Actividades Recientes</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">

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
					</ul>
				</div>

				
				<!-- Ventana modal -->
				<div id="ticketModal" class="modal">
					<div class="modalt">
						<span class="close">&times;</span>
						<h2>Información de ticket</h2>
						<form id="ticketForm">
							<div class="flex-container">
								<div>
									<label for="usuario">Nombre del Usuario:</label>
									<input class="usr" type="text" id="usuario" name="usuario" required>
								</div>

								<div>
									<label for="ext">Ext:</label>
									<input class="ext" type="number" id="ext" name="ext" required>
								</div>

							</div>
							

							<label for="titulot">Título:</label>
							<input type="text" id="titulot" name="titulot" required>

							<div class="flex-container">
								<div>
									<label for="departamento">Departamento</label>
									<select  class="ss"id="departamento" name="departamento" required>
										<option value="">Seleccionar...</option>
										
									  <!-- Personal Operativo (Sandra)-->
										<option value="Finanzas">Direccion General</option>
										<option value="Finanzas">Servicio Medico</option>
									  <!--Personal Operativo -->

									  <!--Gerentes Sucursales -->
										<option value="Finanzas">Gerencia Suc</option>
										<option value="Finanzas">Captacion</option>
										<option value="Finanzas">Caseta de vigilancia</option>
										<option value="Finanzas">Cajas</option>
										<option value="Finanzas">Credito</option>
										<option value="Finanzas">Cajero Aut</option>
									  <!--Gerentes Sucursales -->

									</select>
								</div>

								<div>
									<label for="prioridad">Prioridad</label>
									<select class="ss" id="prioridad" name="prioridad" required>
										<option value="Baja">Baja</option>
										<option value="Media">Media</option>
										<option value="Alta">Alta</option>
									</select>
								</div>

								<div>
									<label for="tags">Tags</label>
									<select class="ss" id="tags" name="tags" required>
										<option value="">Seleccionar...</option>
										<option value="Impresora">Impresora</option>
										<option value="TPV">TPV</option>
										<option value="Monitor">Monitor</option>
										<option value="Teclado">Teclado</option>
										<option value="Mause (raton)">Mause (raton)</option>
										<option value="Computadora">Computadora</option>
										<option value="Laptop">Laptop</option>
										<option value="No break">No break</option>
										<option value="Telefono">Telefono</option>
										<option value="Internet">Internet</option>
										<option value="Cable">Cable</option>
										<option value="Eliminador de CA">Eliminador de CA</option>
										<option value="Otros/otro">Otros/otro</option>									
									</select>
								</div>
							</div>
							

							<label for="descripcion">Descripción del Problema</label>
							<textarea id="descripcion" name="descripcion" rows="4" required></textarea>

							<label for="archivos">Subir evidencia</label>
							<input type="file" id="archivos" name="archivos[]" multiple accept="image/*,video/*">

							<div class="button-group">
								<button type="submit">Enviar Ticket</button>
								<button class="cerrar">Cancelar Ticket</button>
							</div>
						</form>
					</div>
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
			</div>



			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Lista de Sucursales</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>Núm.</th>
								<th>Nombre</th>
								<th>Direccion</th>
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
			</div>
		</main>

		<main id="main4" class="content-section">
			<div class="head-title">
				<div class="left">
					<h1>Acerca de - Sistemas de tickets</h1>
					<ul class="hhhhhh">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Mas Informacion</a>
						</li>
					</ul>
				</div>
			</div>


			<div class="table-data">
				<div class="order">
					<div class="acercadeinfo">
						<h3>¿Qué es este sistema?</h3>
						<p>
							Este sistema de levantamiento de tickets permite a los usuarios reportar incidencias, solicitar soporte técnico y gestionar requerimientos internos de manera eficiente. 
							Nuestro objetivo es simplificar los procesos y brindar soluciones rápidas al personal de la empresa.
						</p>
					</div>
				
					<!--<div class="teaminfo">
						<h3>Equipo de Sistemas</h3>
						<br>
						<div class="gerente">
							<div class="badge-base LI-profile-badge" data-locale="es_ES" data-size="medium" data-theme="dark" 
								 data-type="VERTICAL" data-vanity="andres-tolosa-t" data-version="v1">
								<a class="badge-base__link LI-simple-link" href="https://mx.linkedin.com/in/andres-tolosa-t?trk=profile-badge">
									Andres T.
								</a>
							</div>
						</div>
						<div class="cordinador">
							<div class="badge-base LI-profile-badge" data-locale="es_ES" data-size="medium" data-theme="dark" 
								 data-type="VERTICAL" data-vanity="andres-tolosa-t" data-version="v1">
								<a class="badge-base__link LI-simple-link" href="https://mx.linkedin.com/in/andres-tolosa-t?trk=profile-badge">
									Andres T.
								</a>
							</div>
						</div>
						<div class="auxiliar">
							<div class="badge-base LI-profile-badge" data-locale="es_ES" data-size="medium" data-theme="dark" 
								 data-type="VERTICAL" data-vanity="andres-tolosa-t" data-version="v1">
								<a class="badge-base__link LI-simple-link" href="https://mx.linkedin.com/in/andres-tolosa-t?trk=profile-badge">
									Andres T.
								</a>
							</div>
						</div>
						<div class="axuliar">
							<div class="badge-base LI-profile-badge" data-locale="es_ES" data-size="medium" data-theme="dark" 
								 data-type="VERTICAL" data-vanity="andres-tolosa-t" data-version="v1">
								<a class="badge-base__link LI-simple-link" href="https://mx.linkedin.com/in/andres-tolosa-t?trk=profile-badge">
									Andres T.
								</a>
							</div>
						</div>
					</div>
				</div>-->
			</div>
		</main>


		<main id="main5" class="content-section">
			<div class="head-title">
				<div class="left">
					<h1>Configuracion de la cuenta</h1>
					<ul class="hhhhhh">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Configuracion</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="container light-style flex-grow-1 container-p-y">
				<h4 class="font-weight-bold py-3 mb-4">
				</h4>
				<div class="container card overflow-hidden">
					<div class="row no-gutters row-bordered row-border-light">
						<div class="col-md-3 pt-0">
							<div class="list-group list-group-flush account-settings-links">
								<a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
								<a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Cambiar Contraseña</a>
								<a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Informacion</a>
								<a class="list-group-item list-group-item-action" data-toggle="list" href="#account-social-links">Links Sociales</a>
							</div>
						</div>
						<div class="col-md-9">
							<div class="tab-content">
								<div class="tab-pane fade active show" id="account-general">
									<div class="card-body media align-items-center">
										<img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt
											class="d-block ui-w-80">
										<div class="media-body ml-4">
											<label class="btn btn-outline-primary">
												Subir Nueva Foto
												<input type="file" class="account-settings-fileinput">
											</label> &nbsp;
											<div class="text-light small mt-1">Solo se permiten imagenes JPG, GIF o PNG. Tamaño maximo 5 MB.</div>
										</div>
									</div>
									<hr class="border-light m-0">
									<div class="card-body">
										<div class="form-group">
											<label class="form-label">Nombre</label>
											<input type="text" class="form-control mb-1" placeholder="Ej: Juan de jesus">
										</div>
										<div class="form-group">
											<label class="form-label">Apellidos</label>
											<input type="text" class="form-control" placeholder="Ej: Hernandes Gonzals">
										</div>
										<div class="form-group">
											<label class="form-label">E-mail</label>
											<input type="text" class="form-control mb-1" placeholder="Ej: nmaxwell@mail.com">
											<div class="alert alert-warning mt-3">
												Tu correo electrónico no está confirmado. Por favor revisa tu bandeja de entrada.<br>
												<a href="javascript:void(0)">Reenviar confirmación.</a>
											</div>
										</div>
										<div class="form-group">
											<label class="form-label">Compañia</label>
											<input type="text" class="form-control" value="Caja Popular San Pablo">
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="account-change-password">
									<div class="card-body pb-2">
										<div class="form-group">
											<label class="form-label">Contraseña actual</label>
											<input type="password" class="form-control">
										</div>
										<div class="form-group">
											<label class="form-label">Nueva contraseña</label>
											<input type="password" class="form-control">
										</div>
										<div class="form-group">
											<label class="form-label">Repetir nueva contraseña</label>
											<input type="password" class="form-control">
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="account-info">
									<div class="card-body pb-2">
										<div class="form-group">
											<label class="form-label">Biografia</label>
											<textarea class="form-control"rows="5" placeholder="aaaaaaaa"> </textarea>
										</div>
										<div class="form-group">
											<label class="form-label">Fecha de Nacimiento</label>
											<input type="date" class="form-control" >
										</div>
										<div class="form-group">
											<label class="form-label">Pais</label>
											<select class="custom-select">
												<option selected>Mexico</option>
											</select>
										</div>
									</div>
									<hr class="border-light m-0">
									<div class="card-body pb-2">
										<h6 class="mb-4">Contacto</h6>
										<div class="form-group">
											<label class="form-label">Telefono</label>
											<input type="text" class="form-control" placeholder="Ej: +0 (123) 456 7891">
										</div>
										<div class="form-group">
											<label class="form-label">Website Personal</label>
											<input type="text" class="form-control" placeholder="www.mypagepersonal.com">
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="account-social-links">
									<div class="card-body pb-2">
										<div class="form-group">
											<label class="form-label">LinkedIn</label>
											<input type="text" class="form-control" placeholder>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="text-right mt-3">
					<button type="button" class="btn btn-primary">Guardar Cambios</button>&nbsp;
					<button type="button" class="btn btn-default">Cancelar</button>
				</div>
			</div>
			<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
		</main>


	
		

		<!-- MAIN 
		<main>
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
						<h3>1020</h3>
						<p>New Order</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>Visitors</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>$2543</h3>
						<p>Total Sales</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Orders</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>Date Order</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status process">Process</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
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
						<h3>Todos</h3>
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
		 MAIN -->
	</section>
	<!-- CONTENT -->

	

	<script src="static/js/user/levantarticket.js"></script>
	<script src="static/js/mode-black.js"></script>

	
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			// Seleccionar todos los enlaces de la navegación
			const links = document.querySelectorAll('.side-menu a');
			// Seleccionar todas las secciones de contenido
			const sections = document.querySelectorAll('.content-section');
	
			// Añadir un manejador de eventos para cada enlace
			links.forEach(link => {
				link.addEventListener('click', function (e) {
					e.preventDefault();
					// Obtener el id de la sección a mostrar desde el atributo data-section
					const sectionId = link.getAttribute('data-section');
	
					// Ocultar todas las secciones
					sections.forEach(section => {
						section.style.display = 'none';
					});
	
					// Mostrar la sección correspondiente
					const targetSection = document.getElementById(sectionId);
					if (targetSection) {
						targetSection.style.display = 'block';
					}
	
					// Opcional: actualizar la clase activa en el menú
					links.forEach(link => {
						link.parentElement.classList.remove('active');
					});
					link.parentElement.classList.add('active');
				});
			});
	
			// Mostrar la primera sección por defecto
			if (sections.length > 0) {
				sections.forEach(section => {
					section.style.display = 'none';
				});
				sections[0].style.display = 'block';
			}
		});
	</script>
	<!-- =========== Scripts =========  -->
	<script src="https://kit.fontawesome.com/9a18bf423e.js" crossorigin="anonymous"></script>
	<script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>
	
    
	


</body>
</html>













