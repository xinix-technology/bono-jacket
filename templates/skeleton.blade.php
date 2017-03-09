<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>
			@section('pagetitle')
				{{ f('page.title', 'Dashboard') }}
			@show
			- Bono
		</title>
		<meta name="description" content="{{ f('page.title', 'Great App') }}">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php echo Theme::base('img/favicon.ico') ?>" type="image/x-icon">

		<link href="<?php echo Theme::base('css/app.min.css') ?>" rel="stylesheet">

		@section('customcss')
			<!-- Custom CSS -->
		@show

		<script type="text/javascript" src="<?php echo Theme::base('js/app.min.js') ?>"></script>
		<script type="text/javascript" src="<?php echo Theme::base('js/custom.js') ?>"></script>

		@section('customjs')
			<!-- Custom JS -->
		@show

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script type="text/javascript" src="<?php echo Theme::base('js/app.ie.min.js') ?>"></script>
		<![endif]-->
	</head>
	<body class="@section('has-sidebar')
			has-sidebar
		@show">
		@section('skeleton')
			<!--[if lt IE 7]>
			@section('iewarning')
				<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
			@show
			<![endif]-->

			@section('notification')
				{{ f('notification.show') }}
			@show

			@section('topbar')
				<nav class="nav-menu">
					<div class="pull-left">
						<h1>
							<a href="<?php echo URL::base() ?>">
								@section('applogo')
									<span class="logo">
										@section('applogo.image')
											<img src="<?php echo Theme::base('img/bono.png') ?>" alt="Bono" />
										@show
									</span>
									<span>
										@section('applogo.title')
											Bono
										@show
									</span>
								@show
							</a>
						</h1>
					</div>
					@section('actions')
						<nav class="actions">
							@section('back')
							@show
							<div class="clear"></div>
						</nav>
					@show
					<div class="pull-right">
						@section('usermenu')
							<ul class="topbar">
								<li class="sub notification">
									<a href="#">
										<i class="xn xn-bell"></i>
										<span class="badge solid round error">2</span>
									</a>
									<ul class="context-menu higher right">
                                    <li>
                                        <section class="comments">
                                            <article class="comment yellow">
                                                <div class="comment-body">
                                                    <p class="date">20 Januari 2016 2:53 PM</p>
                                                    <h6 class="regular">Tidak ada pengumuman</h6>
                                                    <p>Tidak ada pengumuman untuk hari ini</p>
                                                </div>
                                            </article>

                                            <article class="comment green">
                                                <div class="comment-body">
                                                    <p class="date">18 Januari 2016 2:53 PM</p>
                                                    <h6 class="regular">Sakit</h6>
                                                    <p>Izin sakit kepala</p>
                                                    <a href="#" class="button solid success">
                                                        Disetujui
                                                    </a>
                                                </div>
                                            </article>

                                            <article class="comment green">
                                                <div class="comment-body">
                                                    <p class="date">20 Januari 2016 2:53 PM</p>
                                                    <h6 class="regular">Tidak ada Pengumuman</h6>
                                                    <p>Tidak ada Pengumuman untuk hari ini</p>
                                                    <a href="#" class="button success">
                                                        <i class="xn xn-check"></i>
                                                        Setuju
                                                    </a>
                                                    <a href="#" class="button error">
                                                        <i class="xn xn-cancel"></i>
                                                        Tolak
                                                    </a>
                                                </div>
                                            </article>

                                            <article class="comment red">
                                                <div class="comment-body">
                                                    <p class="date">3 Januari 2016 2:53 PM</p>
                                                    <h6 class="regular">Anda Alpa 1</h6>
                                                    <p>Anda tercatat alpa 1 hari ini</p>
                                                </div>
                                            </article>

                                            <article class="comment red">
                                                <div class="comment-body">
                                                    <p class="date">2 Januari 2016 2:53 PM</p>
                                                    <h6 class="regular">Anda Sakit</h6>
                                                    <p>Anda tercatat sakit hari ini</p>
                                                </div>
                                            </article>
                                        </section>
                                    </li>
                                </ul>
								</li>
								<li class="sub user">
									<a href="#">
										<span class="photo" style="background-image: url('http://lorempixel.com/200/200/people');"></span>
										<span>Admin</span>
										<i class="xn xn-down-open-mini"></i>
									</a>
									<ul class="context-menu higher right">
										<li><a href="<?php echo URL::site('logout')?>">LogOut</a></li>
										
										
									</ul>
								</li>
								<li class="devider"></li>
								<li><a href="#"><i class="xn xn-help-circled"></i></a></li>
							</ul>
						@show
					</div>
				</nav>
			@show

			@section('sidebar')
				<aside class="sidebar">
					<ul class="nav with-icon">
						<li><a href="<?php echo URL::site() ?>"><i class="icn-left xn xn-home"></i> Dashboard <span class="icn-right badge round solid error">10</span></a></li>
						<li class="devider"></li>
						@if(f('auth.allowed', '/table'))
						<li><a href="<?php echo URL::site('table') ?>"><i class="icn-left xn xn-book-open"></i> Table View <i class="icn-right xn xn-right-open-mini"></i></a></li>
						@endif
						@if(f('auth.allowed', '/list'))
						<li><a href="<?php echo URL::site('list') ?>"><i class="icn-left xn xn-menu"></i> List View <i class="icn-right xn xn-right-open-mini"></i></a></li>
						@endif
						@if(f('auth.allowed', '/grid'))
						<li><a href="<?php echo URL::site('grid') ?>"><i class="icn-left xn xn-layout"></i> Grid View <i class="icn-right xn xn-right-open-mini"></i></a></li>
						@endif
						@if(f('auth.allowed', '/detail'))
						<li><a href="<?php echo URL::site('detail') ?>"><i class="icn-left xn xn-newspaper"></i> Detail View <i class="icn-right xn xn-right-open-mini"></i></a></li>
						@endif
						@if(f('auth.allowed', '/form'))
						<li><a href="<?php echo URL::site('form') ?>"><i class="icn-left xn xn-keyboard"></i> Form View <i class="icn-right xn xn-right-open-mini"></i></a></li>
						@endif

						<li class="devider"></li>
						@if(f('auth.allowed', '/user'))
						<li><a href="<?php echo URL::site('user') ?>"><i class="icn-left xn xn-users"></i> User View <i class="icn-right xn xn-right-open-mini"></i></a></li>
						@endif
						@if(f('auth.allowed', '/role'))
						<li><a href="<?php echo URL::site('role') ?>"><i class="icn-left xn xn-vcard"></i> Role View <i class="icn-right xn xn-right-open-mini"></i></a></li>
						@endif
						@if(f('auth.allowed', '/previleges'))
						<li><a href="<?php echo URL::site('previleges') ?>"><i class="icn-left xn xn-vcard"></i> Previleges View <i class="icn-right xn xn-right-open-mini"></i></a></li>
						@endif
						<li class="devider"></li>
						@if(f('auth.allowed', '/icons'))
						<li><a href="<?php echo URL::site('icons') ?>"><i class="icn-left xn xn-heart"></i> New Icons <i class="icn-right xn xn-right-open-mini"></i></a></li>
						@endif
					</ul>
				</aside>
			@show

			@section('page')
				<main class="content @section('main.classes')
						has-contextual
					@show">

					@section('content')
						<div class="wrapper">
							@section('fields')
								&nbsp;
							@show
						</div>
					@show

					@section('contextual')
						<nav id="contextual">
							@section('contextual.content')
								&nbsp;
							@show
						</nav>
					@show
				</main>
			@show
		@show
	</body>
</html>