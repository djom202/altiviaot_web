<div id="servicios" class="seccion row-fluid">
	<header class="row span12"><h1>Servicios</h1></header>
	<section>
		<div class="row span10 offset2">
			<form action="clases/servicios.php" method="POST">
				<div class="row">
					<h3>Solicitud de pedido</h3>
					<div>
						<input type="text" name="nombre" placeholder="Nombre" required="required">
						<input type="email" name="correo" placeholder="Correo" required="required">
					</div>
					<div>
						<input type="tel" name="tel" placeholder="Telefono" required="required">
						<input type="text" name="ciudad" placeholder="Ciudad" required="required">
					</div>
					<div class="span8">
						<h3>¿En cuales servicios estas interesado?</h3>
						<div class="span11" data-toggle="buttons-checkbox">
		                    <button type="button" class="btn btn-primary">Diseño de Website</button>
		                    <button type="button" class="btn btn-primary">Wordpress / Blog</button>
		                    <button type="button" class="btn btn-primary dominio">Dominio</button>
		                    <button type="button" class="btn btn-primary dominio">Hosting</button>
		                    <button type="button" class="btn btn-primary dominio">Servidor de Correos</button>
		                    <button type="button" class="btn btn-primary">Catalogo de Productos</button>
		         			<button type="button" class="btn btn-primary">Otros</button>
		                </div>
		                <div id="dominio" class="span11 hidden" style="margin-top: 4.5%;">
		                	<input type="text" name="nom_dominio" placeholder="Nombre del Dominio">
		                	<select name="ext_dominio">
		                		<option value="1">.com - $25.000</option>
								<option value="2">.net - $25.000</option>
								<option value="3">.org - $25.000</option>
								<option value="4">.us - $25.000</option>
								<option value="5">.com.co - $25.000</option>
								<option value="6">.co - $25.000</option>
								<option value="7">.es - $25.000</option>
		                	</select>
		                </div>
						<!--<div class="span7">
							<label for="" class="checkbox"><input type="checkbox" name="" id="">Social Media / Redes Sociales</label>
							<label for="" class="checkbox"><input type="checkbox" name="" id="">Aplicacion Web Personalizada</label>
						</div>-->
					</div>
					<div class="span3">
						<label>*Comentarios de su Proyecto</label>
						<textarea name="" id="" cols="30" rows="8"></textarea>
					</div>
				</div>
				<div class="span11">
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