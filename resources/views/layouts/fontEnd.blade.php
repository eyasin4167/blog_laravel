<!DOCTYPE html>

<html lang="en">
	<!-- main header -->
		
		 <x-main-head/>
	<!--end main header -->

<body>
<!-- Main Navbar -->
 <x-main-navbar/>
<!-- end Main Navbar -->


	<!-- Page content -->
	<div class="page-content">
		<!-- Main content -->
		<div class="content-wrapper">
			<!-- main Header -->
				
				<x-page-header/>
			<!-- end main Header -->
		

			<!-- Content area -->
			<div class="content">

				<!-- Inner container -->
				<div class="d-flex align-items-start flex-column flex-md-row">

					<!-- Left content -->
						<div class="w-100 overflow-auto order-2 order-md-1">
							@yield('content')
						</div>
					<!-- /left content -->


					<!-- Right Sidebar -->
						@include('partials.rightSidebar')
					<!--end Right Sidebar -->								

				</div>
				<!-- /inner container -->

			</div>
			<!-- /content area -->

			<!-- footer -->
				@include('partials.footer')
			<!--end footer -->
		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
