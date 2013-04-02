	<script src="http://code.jquery.com/jquery.min.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-transition.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-alert.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-modal.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-dropdown.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-scrollspy.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-tab.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-tooltip.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-popover.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-button.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-collapse.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-carousel.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-typeahead.js"></script>
	<script type="text/javascript" src="themes/js/disable select text.js"></script>
	<script type="text/javascript" src="themes/js/myjquery.min.js"></script>
	<script type="text/javascript">
        $(window).load(function () {
            $('#loader').slideUp(2500);
            $("#buttonSubmitFormContacto").click(function (e){
	            e.preventDefault();

	            /*var emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
	            $(".error").remove();

	            if( $("#inputNombre").val() == ""){
	                $("#inputNombre").focus().after("<span class='error'>Ingrese su Nombre</span>");
	                return false;
	            }else if( $("#inputAsunto").val() == ""){
	                $("#inputAsunto").focus().after("<span class='error'>Ingrese un Asunto</span>");
	                return false;
	            }else if($("#inputEmail").val() == ""){
	                $("#inputEmail").focus().after("<span class='error'>Ingrese un Email correcto</span>");
	                return false;
	            }else if($("#inputWeb").val() == ""){
	                $("#inputWeb").focus().after("<span class='error'>Ingrese la URL de su Web</span>");
	                return false;
	            }else if($("#inputCiudad").val() == 0){
	            	alert('Validate');
	                $("#inputCiudad").focus().after("<span class='error'>Ingrese su Usuario de Tweeter</span>");
	                return false;
	            }else if($("#inputDescripcion").val() == ""){
	                $("#inputDescripcion").focus().after("<span class='error'>Ingrese un mensaje</span>");
	                return false;
	            }

	            $("#inputNombre, #inputAsunto, #inputWeb, #inputDescripcion").keyup(function(){
	                if($(this).val() != ""){
	                    $(".error").fadeOut();
	                    return false;
	                }
	            });
	            $("#inputEmail").keyup(function(){
	                if($(this).val() != "" && emailreg.test($(this).val())){
	                    $(".error").fadeOut();
	                    return false;
	                }
	            });*/

				$('#formContacto').submit();
	        });

			$("#formContacto").submit(function (e){
	            $('#ajaxLoader').removeClass('hide');

	            //var dataString = 'nombre='+ $("#inputNombre").val() + '&asunto=' + $("#inputAsunto").val() + '&email=' + $("#inputEmail").val() + '&web=' + $("#inputWeb").val() + '&twitter=' + $("#inputTwitter").val() + '&ciudad=' + $("#inputCiudad").val() + '&descripcion=' + $("#inputDescripcion").val();
				var datos = $(this).serialize(); // los datos del formulario
				alert (datos);return false;
				$.ajax({
				    type: "POST",
				    url: "clases/send_mail.php",
				    data: dataString,
				    success: function() {
				    	$('#contact_form').html("<div id='message'></div>");
				      	$('#message').html("<h2>Contact Form Submitted!</h2>")
				      	.append("<p>We will be in touch soon.</p>")
				      	.hide()
				      	.fadeIn(1500, function() {
				        	$('#message').append("<img id='checkmark' src='images/check.png' />");
				      	});
				    }
				});
				return false;

	            alert('Su mensaje ha sido enviado con Exito.');
	        });
			$(".tweets").tweet({
                username: "AltiviaOT",
                avatar_size: 48,
                count: 5,
                loading_text: "Cargando Tweets..."
            });
        });
    </script>
    <script language="javascript" src="themes/js/jquery.tweet.js" type="text/javascript"></script>
	<!—[if lt IE 9]>
    	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]—>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>