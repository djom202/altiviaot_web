<div id="servicios" class="seccion row-fluid">
	<header class="row-fluid"><h1>Servicios</h1></header>
	<section>
		<div class="row offset1">
			<form action="clases/cotizacion_web.php" method="POST">
				<div class="row-fluid">
					<div class="span8">
						<h3>Solicitud de pedido</h3>
						<div class="row-fluid">
							<input class="input-xlarge" type="text" name="nombre" placeholder="Nombre" required="required">
							<input class="input-xlarge" type="email" name="correo" placeholder="Correo" required="required">
						</div>
						<div class="row-fluid">
							<input class="input-xlarge" type="tel" name="tel" placeholder="Telefono" required="required">
			            	<input class="input-xlarge" type="text" name="ciudad" placeholder="Ciudad" required="required" data-provide="typeahead" data-items="4" data-source="[&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;]">
			            	<ul class="typeahead dropdown-menu" style="top: 69px; left: 19px; display: none;">
			            		<li data-value="Hawaii" class="active">
			            			<a href="#"><strong>H</strong>awaii</a>
			            		</li>
			            		<li data-value="Idaho">
			            			<a href="#">Ida<strong>h</strong>o</a>
			            		</li>
			            		<li data-value="Massachusetts">
			            			<a href="#">Massac<strong>h</strong>usetts</a>
			            		</li>
			            		<li data-value="Michigan">
			            			<a href="#">Mic<strong>h</strong>igan</a>
			            		</li>
			            	</ul>
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
						<textarea name="comentarios" cols="30" rows="8" style="width: 290px;"></textarea>
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