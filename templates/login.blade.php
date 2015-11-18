@extends('skeleton1')

@section('pagetitle')
   Login to System
@endsection

@section('customcss')
   <link href="<?php echo Theme::base('css/jacket.login.css') ?>" rel="stylesheet">
@endsection

@section('navbar')
@endsection

@section('sidebar')
@endsection


@section('has-sidebar')
   login-area
@stop


@section('skeleton')
   <div id="login">
      @section('loginwording')
         <i class="xn xn-lock-open xn-5x"></i>
      @show
      <form method="POST" class="row">
         <input type="text" name="username" value="<?php echo @$entry['username'] ?>" placeholder="Username" />
         <input type="password" name="password" placeholder="Password" />
         <div class="button-area">
            <input type="submit" value="Login" class="button solid" />
         </div>
         <label class="placeholder"><input type="checkbox" class="checkbox"> Keep me sign in</label>
      </form>
   </div>
@endsection