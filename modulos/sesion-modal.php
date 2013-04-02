<div  id="sesionModal" class="modal hide">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h3>Contactenos</h3>
    </div>
    <div class="modal-body">
        <form action="">
            <div class="row-fluid">
                <div class="span6">
                    <input type="text" name="nombre" maxlength="20" placeholder="Nombre completo">
                    <input type="text" name="asunto" maxlength="10" placeholder="Asunto">
                    <input type="text" name="email" maxlength="50" placeholder="Correo">
                    <input type="url" name="web" maxlength="50" placeholder="Website">
                    <div class="controls">
                        <div class="input-prepend">
                            <span class="add-on">@</span><input id="inputTwitter" placeholder="Twitter" class="span10" type="text" name="twitter" maxlength="15">
                        </div>
                    </div>
                    <select id="select01">
                        <option>Ciudad</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="span6">
                    <label>Descripcion:</label>
                    <textarea name="descripcion" cols="30" rows="10" maxlength="50"></textarea>
                </div>
            </div>
        </form>
    </div>
    <div class="der modal-footer">
        <a class="btn btn-primary"><i class="icon-envelope icon-white"></i> Enviar</a>
        <a class="btn" data-dismiss="modal">Cerrar</a>
    </div>
</div>