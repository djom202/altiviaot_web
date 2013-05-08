<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a id="ahome" class="brand" href="./"><img src="<?php echo Dropbox; ?>home/logotipo.png"></a>
            <div class="nav-collapse">
                <ul class="nav">
                    <li class="mobile"><a id="anosotros" href="nosotros"><i class="icon-th-list icon-white"></i> <span>Nosotros</span></a></li>
                    <li class="mobile"><a id="aservicios" href="servicios"><i class="icon-list-alt icon-white"></i> <span>Servicios</span></a></li>
                    <li class="mobile hidden-phone"><a id="apoliticas" href="politicas"><i class="icon-inbox icon-white"></i> <span>Politicas</span></a></li>
                    <li class="mobile"><a id="aredes_sociles" href="redes_sociles"><i class="icon-hand-right icon-white"></i> <span>Redes Sociales</span></a></li>
                    <li class="mobile"><a id="acontacto" href="contacto"><i class="icon-facetime-video icon-white"></i> <span>Contacto</span></a></li>
                </ul>
                <ul class="nav pull-right">
                    <li><a id="aseccion" data-toggle="modal" href="#sesionModal"><i class="icon-user icon-white"></i> <span>Iniciar Sesion</span></a></li>
                    <li>
                        <a id="facebook" href="http://facebook.com/pages/Altiviaot/102802866559001" rel="popover" data-placement="bottom" data-delay="show: 5000, hide: 100" data-html="true" data-content="<?php if (file_exists("modulos/facebook.php")){ include('modulos/facebook.php'); } ?>"  class="pop">
                            <div class="">
                                <img src="<?php echo Dropbox; ?>menu/facebook.png" alt="" width="12">
                            </div>
                            <div class="des_mob visible-phone">acebook</div>
                        </a>
                    </li>
                    <li>
                        <a id="twitter" href="http://twitter.com/altiviaot" rel="popover" data-placement="bottom" data-delay="show: 5000, hide: 100" data-html="true" data-content="<div class='tw'><img src='https://si0.twimg.com/profile_images/2958604366/4a16b681c63d596443c6a29842faef3d_bigger.png' alt='AltiviaOT' width='73'><br><br><iframe allowtransparency='true' frameborder='0' scrolling='no' src='https://platform.twitter.com/widgets/follow_button.1355514129.html#_=1356478001018&amp;align=right&amp;id=twitter-widget-1&amp;lang=es&amp;screen_name=AltiviaOT&amp;show_count=false&amp;show_screen_name=true&amp;size=m' class='twitter-follow-button' style='width: 131px; height: 20px;' title='Twitter Follow Button' data-twttr-rendered='true'></iframe><br><a class='twitter-timeline' href='https://twitter.com/AltiviaOT' data-widget-id='278292196300570624'>Tweets por @AltiviaOT</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='//platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script></div>" class="pop">
                            <img src="<?php echo Dropbox; ?>menu/twitter.png" alt="" width="24" style="margin-left:-1%;">
                            <div class="des_mob2 visible-phone"> Twitter</div>
                        </a>
                    </li>
                    <li>
                        <a id="rss" href="">
                            <button id="tools" class="btn btn-warning">
                                <img src="<?php echo Dropbox; ?>/menu/rss.png" alt="" width="20">
                            </button>
                            <div class="des_mob2 visible-phone"> RSS</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php if (file_exists("modulos/sesion-modal.php")){ include('modulos/sesion-modal.php'); } ?>