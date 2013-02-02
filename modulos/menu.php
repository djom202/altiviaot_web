<nav id="menubar" class="row-fluid">
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="ahome" class="brand" href="./"><img src="themes/ico/fav.ico" alt="" width="23" style="padding-bottom: 5%;">ltiviaOT</a>
                <div class="nav-collapse collapse" style="height: 0px; ">
                    <ul class="nav">
                      <li class="mobile"><a id="anosotros" href="#nosotros"><i class="icon-th-list icon-white"></i> <span>Nosotros</span></a></li>
                      <li class="mobile"><a id="aservicios" href="#servicios"><i class="icon-list-alt icon-white"></i> <span>Servicios</span></a></li>
                      <li class="mobile"><a id="apoliticas" href="#politicas"><i class="icon-inbox icon-white"></i> <span>Politicas</span></a></li>
                      <li class="mobile"><a id="acontacto" href="#contacto"><i class="icon-facetime-video icon-white"></i> <span>Contacto</span></a></li>
                    </ul>
                    <ul class="nav pull-right" style="margin-right: 5%;">
                        <!-- <li><a id="aseccion" data-toggle="modal" href="#seccionModal"><i class="icon-user icon-white"></i> <span>Iniciar Sesion</span></a></li> -->
                        <li><a id="facebook" href="http://facebook.com/pages/Altiviaot/102802866559001" rel="popover" data-placement="bottom" data-delay="show: 5000, hide: 100" data-html="true" data-content="<?php if (file_exists("modulos/facebook.php")){ include('modulos/facebook.php'); } ?>"  class="pop"><img src="themes/img/menu/facebook.png" alt="" width="12"></a></li>
                        <li><a id="twitter" href="http://twitter.com/altiviaot" rel="popover" data-placement="bottom" data-delay="show: 5000, hide: 100" data-html="true"  data-content="<?php if (file_exists("modulos/tweets.php")){ include('modulos/tweets.php'); } ?>" class="pop"><img src="themes/img/menu/twitter.png" alt="" width="24"></a></li>
                        <!-- <li><a id="rss" href=""><button id="tools" class="btn btn-warning"><img src="themes/img/menu/rss.png" alt="" width="20"></button></a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>