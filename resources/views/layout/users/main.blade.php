<!DOCTYPE html>
<html lang="en">
	<head>
	    @include('partial.users.head')
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">

        @yield('content')

		@include('partial.users.footer')
		@include('partial.users.bottom-link')
	</body>
</html>