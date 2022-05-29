<!DOCTYPE html>
<html>
   <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Transfers - Private Transport and Car Hire HTML Template">
	<meta name="description" content="Transfers - Private Transport and Car Hire HTML Template">
	<meta name="author" content="themeenergy.com">
	
	<title>Blu Transfers</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('frontend\css\styler.css')}}">
	<link rel="stylesheet" href="{{asset('frontend\css\theme-pink.css')}}" id="template-color">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="{{asset('frontend\css\jquery-ui.theme.css')}}">
	<link rel="stylesheet" href="{{asset('frontend\css\style.css')}}">
	<link rel="stylesheet" href="{{asset('frontend\css\animate.css')}}">
	<link rel="stylesheet" href="{{asset('frontend\css\icons.css')}}">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700|Montserrat:400,700|Roboto:400,500,600,700' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="{{asset('frontend\images\bluworld_tranfer_logo.png')}}">
	<!-- datatable -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
	<!-- datatables -->
	<script src="https://use.fontawesome.com/e808bf9397.js"></script>
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body class="home">
		<!-- Preloader -->
		<div class="preloader">
			<div id="followingBallsG">
				<div id="followingBallsG_1" class="followingBallsG"></div>
				<div id="followingBallsG_2" class="followingBallsG"></div>
				<div id="followingBallsG_3" class="followingBallsG"></div>
				<div id="followingBallsG_4" class="followingBallsG"></div>
			</div>
		</div>
		<!-- //Preloader -->
		
    <!-- Header -->
    @include('frontend.layouts.includes.header')
    <!-- //Header -->
	
	<!-- Main -->
	@yield('content')
	<!-- //Main -->
	
	<!-- Footer -->
	@include('frontend.layouts.includes.footer')
	<!-- //Footer -->
	
	 <!-- jQuery -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.ui.timepicker.addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
	<script src="{{asset('frontend\js\jquery.uniform.min.js')}}"></script>
	<script src="{{asset('frontend\js\jquery.slicknav.min.js')}}"></script>
	<script src="http://maps.googleapis.com/maps/api/js?v=3&sensor=false"></script>
	<script src="js\infobox.js"></script>
	<script src="{{asset('frontend\js\wow.min.js')}}"></script>
	<script src="{{asset('frontend\js\jquery-ui-sliderAccess.js')}}"></script>
	<script src="{{asset('frontend\js\search.js')}}"></script>
	<script src="{{asset('frontend\js\scripts.js')}}"></script>
	
	<!-- TEMPLATE STYLES
	<div id="template-styles">
		<h2>Template Styles <a href="#"><img class="s-s-icon" src="frontend\images\settings.png" alt="Style switcher"></a></h2>
		<div>
		<h3>Colors</h3>
			<ul class="colors">
				<li><a href="#" class="beige" title="beige">beige</a></li>
				<li><a href="#" class="dblue" title="dblue">dblue</a></li>
				<li><a href="#" class="dgreen" title="dgreen">dgreen</a></li>
				<li><a href="#" class="grey" title="grey">grey</a></li>
				<li><a href="#" class="lblue" title="lblue">lblue</a></li>
				<li><a href="#" class="lgreen" title="lgreen">lgreen</a></li>
				<li><a href="#" class="lime" title="lime">lime</a></li>
				<li><a href="#" class="orange" title="orange">orange</a></li>
				<li><a href="#" class="peach" title="peach">peach</a></li>
				<li><a href="#" class="pink" title="pink">pink</a></li>
				<li><a href="#" class="purple" title="purple">purple</a></li>
				<li><a href="#" class="red" title="red">red</a></li>
				<li><a href="#" class="teal" title="teal">teal</a></li>
				<li><a href="#" class="turquoise" title="turquoise">turquoise</a></li>
				<li><a href="#" class="yellow" title="yellow">yellow</a></li>
			</ul>
		</div>
	</div> -->
	<script src="{{asset('frontend\js\styler.js')}}"></script>
	<script>
        $(document).ready(function() {
            $('#example').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
	</script>
	<script type="text/javascript">
    $(document).ready(function() {
        $("div.desc").hide();
        $("input[name$='partners']").click(function() {
            var test = $(this).val();
            $("div.desc").hide();
            $("#" + test).show();
        });
    });
    </script>
	<script type="text/javascript">
		function initialize() {
			var secheltLoc = new google.maps.LatLng(49.47216, -123.76307);

			var myMapOptions = {
				 zoom: 15
				,center: secheltLoc
				,mapTypeId: google.maps.MapTypeId.ROADMAP
				,scrollwheel: false
			};
			var theMap = new google.maps.Map(document.getElementById("map_canvas"), myMapOptions);

			var myIcon = new google.maps.MarkerImage('');
			
			var marker = new google.maps.Marker({
				map: theMap,
				draggable: true,
				position: new google.maps.LatLng(49.47216, -123.76307),
				visible: true,
				icon: myIcon
			});

			var boxText = document.createElement("div");
			boxText.innerHTML = "<span>TRANSFERS</span><br>1293 Delancey Street, NY";

			var myOptions = {
				 content: boxText
				,disableAutoPan: false
				,maxWidth: 0
				,pixelOffset: new google.maps.Size(-140, 0)
				,zIndex: null
				,closeBoxURL: ""
				,infoBoxClearance: new google.maps.Size(1, 1)
				,isHidden: false
				,enableEventPropagation: false
			};

			google.maps.event.addListener(marker, "click", function (e) {
				ib.open(theMap, this);
			});

			var ib = new InfoBox(myOptions);

			ib.open(theMap, marker);
		}
	</script>
  </body>
</html>