<div id="emailModal" class="modal hide fade in" style="display: none;">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">×</button>
      <h3>E-mail</h3>
    </div>
    <div class="modal-body">
    	<form action="">
    		<div class="span5">
        		<label>Nombre completo:</label>
        		<input type="text" name="nombre" maxlength="20">
        		<label>Asunto:</label>
        		<input type="text" name="asunto" maxlength="10">
        		<label>Correo:</label>
		        <input type="text" name="email" maxlength="50">
        		<label>Ciudad:</label>
        		<select id="select01">
	                <option>something</option>
	                <option>2</option>
	                <option>3</option>
	                <option>4</option>
	            	<option>5</option>
	            </select>
    		</div>
    		<div class="span5">
    			<label>Twitter:</label>
        		<div class="controls">
	              <div class="input-prepend">
	                <span class="add-on">@</span><input class="span10" type="text" name="twitter" maxlength="15">
	              </div>
	            </div>
        		<label>Descripcion:</label>
        		<textarea name="descripcion" cols="30" rows="10" maxlength="50"></textarea>
    		</div>
    	</form>
    </div>
    <div class="modal-footer">
      <a href="#" class="btn btn-warning"><i class="icon-envelope icon-white"></i> Enviar</a>
      <a href="#" class="btn" data-dismiss="modal">Cerrar</a>
    </div>
</div>