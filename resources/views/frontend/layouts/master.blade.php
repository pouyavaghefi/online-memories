<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
		    @yield('title')
        </title>
        <link rel="stylesheet" href="{{ asset('fonts.css') }}">
        @include('frontend.layouts.init.meta')
    </head>
    <body dir="rtl">
        <div class="container">
			<div class="page-profile">
				<div class="row">
					<div class="col-md-3">
						@include('frontend.layouts.includes.overall.lside')
					</div>

					<div class="col-md-5">
                        @yield('middle')
					</div>

					<div class="col-md-4">
						@include('frontend.layouts.includes.overall.rside')
					</div>
				</div>
			</div>
        </div>

        @include('frontend.layouts.init.scripts')
        @yield('scripts')
    </body>
</html>
