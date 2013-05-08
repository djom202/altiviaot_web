<div  id="emailModal" class="modal hide">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h3>Contactenos</h3>
    </div>
    <div class="modal-body">
        <form id="formContacto" name="formContacto" action="">
            <div class="row-fluid">
                <div class="span6">
                    <input id="inputNombre" type="text" name="nombre" maxlength="20" placeholder="Nombre completo" autocomplete="on" value="Jonathan Olier">
                    <input id="inputAsunto" type="text" name="asunto" maxlength="10" placeholder="Asunto" autocomplete="on" value="Saludo">
                    <input id="inputEmail" type="email" name="email" maxlength="50" placeholder="Correo" autocomplete="on" value="djom202@gmail.com">
                    <input id="inputWeb" type="url" name="web" maxlength="50" placeholder="Website" autocomplete="on" value="altiviaot.com">
                    <div class="controls">
                        <div class="input-prepend">
                            <span class="add-on">@</span><input id="inputTwitter" placeholder="Twitter" class="span10" type="text" name="twitter" maxlength="15" autocomplete="on" value="djom20">
                        </div>
                    </div>
                    <select id="inputCiudad" name="inputCiudad">
                        <option value="0">Ciudad</option>
                        <option value="1">Barranquilla</option>
                        <option value="2">Cartagena</option>
                        <option value="3">Bogota</option>
                        <option value="4">Cali</option>
                    </select>
                </div>
                <div class="span6">
                    <label>Descripcion:</label>
                    <textarea id="inputDescripcion" name="descripcion" cols="30" rows="10" maxlength="50"></textarea>
                </div>
            </div>
            <div id="reCAPTCHA" class="row-fluid">
                <div id="reCAPTCHA_container" class="offset2"></div>
            </div>
            <div id="ajaxLoader" class="hide"><img src="https://dl.dropbox.com/u/57960869/Altiviaot/loader.gif" alt=""></div>
        </form>
    </div>
    <div class="der modal-footer">
        <a id="buttonSubmitFormContacto" class="btn btn-warning"><i class="icon-envelope icon-white"></i> Enviar</a>
        <a class="btn" data-dismiss="modal">Cerrar</a>
    </div>
</div>
<style type="text/css">
    .error{
        background-color: #f89c0b;
        padding: 4px 17px;
        border-radius: 4px;
        color: white !important;
        font-weight: bold;
        margin-left: 8px;
        margin-top: 2px;
        position: absolute;
    }
    .error:before{ /* Este es un truco para crear una flechita */
        content: '';
        border-top: 8px solid transparent;
        border-bottom: 8px solid transparent;
        border-right: 8px solid #f89c0b;
        border-left: 8px solid transparent;
        left: -16px;
        position: absolute;
        top: 5px;
    }
</style>