				<div id="header-wrapper" class="wrapper">
					<div id="header">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="{{ url('/') }}">Notaría Ordoño 16</a></h1>
								<p>Francisco Enrique Ledesma Muñiz</p>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="current"><a href="index.html">Quienes Somos</a></li>
								    <li><a href="#">Modelos</a></li>
								    <li><a href="#">Artículos de Opinión</a></li>

									<li>
										<a href="#">Documentación Notarial</a>
										<ul>
											
											<li>
												<a href="#">Actas</a>
												<ul>
													<li><a href="#">Actas de Presencia</a></li>
													<li><a href="#">Actas de Remisión y Notificación</a></li>
													<li><a href="#">Actas de Notoriedad</a></li>
												</ul>
											</li>
											<li>
												<a href="#">Escrituras</a>
												<ul>
													<li><a href="#">Agrupación</a></li>
													<li><a href="#">Alquiler</a></li>
													<li><a href="#">Cancelación Hipoteca</a></li>

													<li><a href="#">Capitulaciones</a></li>
													<li><a href="#">Cesión de Bienes cambio de alimentos </a></li>
													<li><a href="#">Cancelación Hipoteca</a></li>
													<li><a href="#">Agrupación</a></li>
													<li><a href="#">Alquiler</a></li>
													<li><a href="#">Cancelación Hipoteca</a></li>
													<li><a href="#">Agrupación</a></li>
													<li><a href="#">Alquiler</a></li>
													<li><a href="#">Cancelación Hipoteca</a></li>
													<li><a href="#">Agrupación</a></li>
													<li><a href="#">Alquiler</a></li>
													<li><a href="#">Cancelación Hipoteca</a></li>

													<li><a href="#">Agrupación</a></li>
													<li><a href="#">Alquiler</a></li>
													<li><a href="#">Cancelación Hipoteca</a></li>

													<li><a href="#">Agrupación</a></li>
													<li><a href="#">Alquiler</a></li>
													<li><a href="#">Cancelación Hipoteca</a></li>

												</ul>
											</li>
                                            <li>
												<a href="#">Testimonios</a>
												<ul>
													<li><a href="#">Por Exhibición.</a></li>
													<li><a href="#">De Legitimación de Firmas</a></li>
													<li><a href="#">Testamento</a></li>
													<li><a href="#">Herencia</a></li>
													<li><a href="#">Compraventa</a></li>
												</ul>
											</li>								
											<li><a href="#">Actas</a></li>
											<li><a href="#">Magna veroeros</a></li>
											<li><a href="#">Etiam nisl</a></li>
										</ul>
									</li>
									<li><a href="contacto.html">Contacto</a></li>
									
							
								@if (Auth::guest())
								<li>
									<a href="{{ url('/auth/login') }}">Login</a>
								</li>
								
								@else
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										@if (Auth::user()->can_post())
										<li>
											<a href="{{ url('/new-post') }}">Add new post</a>
										</li>
										<li>
											<a href="{{ url('/user/'.Auth::id().'/posts') }}">My Posts</a>
										</li>
										@endif
										<li>
											<a href="{{ url('/user/'.Auth::id()) }}">My Profile</a>
										</li>
										<li>
											<a href="{{ url('/auth/logout') }}">Logout</a>
										</li>
									</ul>
								</li>
								@endif
							</ul>
							</nav>



					</div>
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

								<div class="6u 12u(mobile)">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="remember"> Remember Me
										</label>
									</div>
								</div>
								<div class="12u">
									<ul class="actions">
										<li><input type="submit" class="style1" value="Login" /></li>
									</ul>


									<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
								</div>
						</form>
				    </section>
			</div>
		</div>
	</div>
</div>

				</div>

