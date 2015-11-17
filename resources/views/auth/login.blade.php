@extends('app')


@section('title')
		
@endsection


@section('Header')

		@include('frontend.header')
@stop


@section('content')
<div class="wrapper">
	<div class="title">Acceso de Usuarios - Login</div>
	<div id="login" class="container">

<!--	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">-->
		<div class="row 150%">
			<div class="6u 12u(mobile)">		
										
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<section>
						<form  method="POST" action="{{ url('/auth/login') }}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">

							<div class="row 50%">
								<div class="6u 12u(mobile)">
									<input type="email"  name="email" value="{{ old('email') }}" id="email"  placeholder="Email">
								</div>


								<div class="6u 12u(mobile)">
									<input type="password"  name="password" id="password" placeholder="Contraseña">
								</div>
							</div>

							<div class="row 50%">
								<div class="6u 12u(mobile)">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="remember"> Remember Me
										</label>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="12u">
									<ul class="actions">
										<li><input type="submit" class="style1" value="Login" /></li>
									</ul>


									<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
								</div>
							</div>
						</form>
				    </section>
			</div>
		</div>
	</div>
</div>
@endsection
