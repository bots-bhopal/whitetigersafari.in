<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WTS | Page Not Found</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/assets/images/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}">
    <style>
		.btn-outline-danger {
			color: #E94949 !important;
			border-color: #E94949 !important;
		}

		.btn-outline-danger:hover {
			color: #fff !important;
			background-color: #E94949 !important;
			border-color: #E94949 !important;
		}
	</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2">
                <img src="{{asset('public/assets/images/errors/404.jpg')}}" class="img-responsive" alt="Page Not Found" style="margin: 40px 0 40px 0;">
            </div>
        </div>

        <div class="row">
			<div class="col-lg-12 text-center">
                @if (Request::is('admin*'))
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-danger">Go To Dashboard</a>
                @elseif(Request::is('superadmin*'))
                    <a href="{{ route('superadmin.dashboard') }}" class="btn btn-outline-danger">Go To Dashboard</a>
                @else
                    <a href="{{url('/')}}" class="btn btn-outline-danger">Go To Home</a>
                @endif
			</div>
		</div>
    </div>
    <script src="{{asset('public/assets/js/jquery-1.12.0.min.js')}}"></script>
    <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
