@include('partials.headcontent')
<body>
	@include('partials.navbar')
	@include('partials.flash')
	<div class="container">
		@yield('content')
	</div>
@include('partials.footercontent')