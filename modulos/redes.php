<div id="redes_sociales" class="seccion row-fluid">
	<header class="row-fluid span12"><h1>Redes Sociales</h1></header>
	<section class="row-fluid">
		<div id="redTweeter" class="offset1 span4">
			<div class="tweets"><?php if (file_exists("modulos/tweets.php")){ include('modulos/tweets.php'); } ?></div>
		</div>
		<div id="redFacebook" class="offset2 span5">
			<div class="likes">
				<?php
					/*require('lib/facebook/fb.php');
					$facebook = new Facebook(array(
						'appId' => '163943217097189', //App ID/API Key
						'secret' => 'b1748e389a9015efd4537bb5f6f9c362', //Código secreto de la aplicación
					));

					// See if there is a user from a cookie
					$session = $facebook->getUser();

					if ($session) {
						try {
					    	// Proceed knowing you have a logged in user who's authenticated.
					    	$user_profile = $facebook->api('/me');
					  	} catch (FacebookApiException $e) {
						    echo '<pre>'.htmlspecialchars(print_r($e, true)).'</pre>';
						    $session = null;
						}
					}

					if (isset($user_profile)){ // si existe $me mostramos un saludo
						echo '<script>';
						echo 'alert("Bienvenido '.$user_profile['name'].'");';
						echo '</script>';
					}*/
				?>
				<!--<div id="fb-root"></div>
				<script>
					window.fbAsyncInit = function() {
						FB.init({
							appId: '<?php /*echo $facebook->getAppID()*/ ?>',
							cookie: true,
							xfbml: true,
							oauth: true
						});
						FB.Event.subscribe('auth.login', function(response) {
							window.location.reload();
						});
						FB.Event.subscribe('auth.logout', function(response) {
							window.location.reload();
						});
					};
					(function() {
						var e = document.createElement('script'); e.async = true;
						e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
						document.getElementById('fb-root').appendChild(e);
					}());
				</script>-->
			</div>
		</div>
	</section>
	<footer id="logos" class="row-fluid">

	</footer>
</div>