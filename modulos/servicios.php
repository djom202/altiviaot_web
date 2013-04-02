<div id="servicios" class="seccion row-fluid">
	<header class="row-fluid span12"><h1>Servicios</h1></header>
	<section>
		<div class="row-fluid span10 offset2">
			<form action="clases/servicios.php" method="POST">
				<div class="row-fluid">
					<div class="span8">
						<h3>Solicitud de pedido</h3>
						<div class="row-fluid">
							<input type="text" name="nombre" placeholder="Nombre" required="required">
							<input type="email" name="correo" placeholder="Correo" required="required">
						</div>
						<div class="row-fluid">
							<input type="tel" name="tel" placeholder="Telefono" required="required">
							<input type="text" name="ciudad" placeholder="Ciudad" required="required">
						</div>
						<div class="row-fluid">
							<h3>¿En cuales servicios estas interesado?</h3>
							<div data-toggle="buttons-checkbox">
			                    <button type="button" class="btn btn-primary">Diseño de Website</button>
			                    <button type="button" class="btn btn-primary">Wordpress / Blog</button>
			                    <button type="button" class="btn btn-primary dominio">Dominio</button>
			                    <button type="button" class="btn btn-primary dominio">Hosting</button>
			                    <button type="button" class="btn btn-primary dominio">Servidor de Correos</button>
			                    <button type="button" class="btn btn-primary">Catalogo de Productos</button>
			         			<button type="button" class="btn btn-primary">Otros</button>
			                </div>
						</div>
					</div>
					<div class="span4">
						<br>
						<br>
						<label>*Comentarios de su Proyecto</label>
						<textarea name="" id="" cols="30" rows="8"></textarea>
					</div>
				</div>
				<br>
				<br>
				<div class="row-fluid">
					<i class="icon-warning-sign icon-white"></i>
					<span><strong>El llenar este formulario no lo compromete a nada, ya que posterior a este formulario se le hara un seguimiento y se pedira su autorización para realizar así su pedido.</strong></span>
					<div class="row der">
						<button class="btn btn-info">
							<i class="icon-envelope icon-white"></i> Enviar
						</button>
					</div>
				</div>
			</form>
		</div>
	</section>
</div>