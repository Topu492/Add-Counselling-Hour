<!DOCTYPE html>
<html lang="en">
@include('backend.inc.head')
<body>
	<div class="wrapper">

		<!-- Navbar Start -->
        @include('backend.inc._navbar')
		<!-- End avbar -->

		<!-- Sidebar -->
		@include('backend.multi-dashboard.user._sidebar_user')
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				@yield('content')
			</div>
			@include('backend.inc._footer')
		</div>


	</div>
	@include('backend.inc._js')
</body>
</html>
