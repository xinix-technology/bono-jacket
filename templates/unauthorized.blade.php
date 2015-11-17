@extends('skeleton1')

@section('pagetitle')
	Unautorized Access
@endsection

@section('customcss')
	<link href="<?php echo Theme::base('css/jacket.login.css') ?>" rel="stylesheet">
@endsection

@section('navbar')
@endsection

@section('notification')
@endsection

@section('sidebar')
@endsection

@section('skeleton')
	<div id="login">
		@section('loginwording')
			<i class="xn xn-lock xn-5x"></i>
		@show
		<p>You are not authorized to access this page.<br />Please login first to access this page.</p>
		<div class="button-area">
			<a href="<?php echo URL::site('/login').'?!continue='.\Bono\Helper\URL::redirect() ?>" class="button solid">Login</a>
		</div>
		<small>or <a href="javascript:history.back()">go back</a> to previous page.</small>
	</div>
@endsection