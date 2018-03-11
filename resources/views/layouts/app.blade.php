<!DOCTYPE html>
<html lang="en">
@include('includes.header')
@include('includes.nav') {{-- menu --}}
<body>
	<!-- Navbar -->
	<div class="container">
		@include('includes.messages')
	</div>
	@yield('conteudo')
	
	

	@include('includes.footer')
</body>
</html>
