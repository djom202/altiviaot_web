	<script type="text/javascript" src="themes/css/docs/assets/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="themes/css/docs/assets/js/bootstrap-alert.js"></script>
	<script type="text/javascript" src="themes/css/docs/assets/js/bootstrap-button.js"></script>
	<script type="text/javascript" src="themes/css/docs/assets/js/bootstrap-carousel.js"></script>
	<script type="text/javascript" src="themes/css/docs/assets/js/bootstrap-collapse.js"></script>
	<script type="text/javascript" src="themes/css/docs/assets/js/bootstrap-dropdown.js"></script>
	<script type="text/javascript" src="themes/css/docs/assets/js/bootstrap-modal.js"></script>
	<script type="text/javascript" src="themes/css/docs/assets/js/bootstrap-tooltip.js"></script>
	<script type="text/javascript" src="themes/css/docs/assets/js/bootstrap-popover.js"></script>
	<script type="text/javascript" src="themes/css/docs/assets/js/bootstrap-scrollspy.js"></script>
	<script type="text/javascript" src="themes/css/docs/assets/js/bootstrap-tab.js"></script>
	<script type="text/javascript" src="themes/css/docs/assets/js/bootstrap-transition.js"></script>
	<script type="text/javascript" src="themes/css/docs/assets/js/bootstrap-typeahead.js"></script>
	<script type="text/javascript" src="themes/css/docs/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="themes/js/disable select text.js"></script>
	<script type="text/javascript" src="themes/css/docs/assets/js/widgets.js"></script>
	<script type="text/javascript" src="themes/js/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function($) {
			$('.dropdown-toggle').dropdown();
			$('.carousel').carousel();
			$('#Tabs a:first').tab('show');
			$('#Tabs a').click(function (e) {
				e.preventDefault();
				$(this).tab('show');
			});
			$('#menubar').scrollspy();
			$('#tools').tooltip('toggle');
			$('.pop').popover('toggle');
		});
	</script>
	<!—[if lt IE 9]>
    	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]—>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>