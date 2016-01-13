@extends('skeleton')

@section('content')
	<div class="wrapper">
		<h1 class="title">Form View</h1>
		<form action="" class="read">
			<div class="row">
				<div class="xlarge-6 large-6 medium-6 small-12 tiny-12">
					<div class="row">
	                    <label>Nama Depan <span class="mandatory">*</span></label>
	                    <input type="text" placeholder="Nama Depan" class="text">
	                    <span class="tooltip bottom"></span>
	                </div>
				</div>
				<div class="xlarge-6 large-6 medium-6 small-12 tiny-12">
					<div class="row">
	                    <label>Nama Belakang <span class="mandatory">*</span></label>
	                    <input type="text" placeholder="Nama Belakang" class="text">
	                    <span class="tooltip bottom"></span>
	                </div>
				</div>
				<div class="xlarge-6 large-6 medium-6 small-12 tiny-12">
					<div class="row">
	                    <label>Username <span class="mandatory">*</span></label>
	                    <input type="password" placeholder="Username" class="text">
	                    <span class="tooltip bottom"></span>
	                </div>
				</div>
				<div class="xlarge-6 large-6 medium-6 small-12 tiny-12">
					<div class="row">
	                    <label>Password <span class="mandatory">*</span></label>
	                    <div class="row">
			                <input class="span-6 password" placeholder="Password">
			                <input class="span-6 password" placeholder="Password confirmation">
			            </div>
	                    <span class="tooltip bottom"></span>
	                </div>
				</div>
				<div class="xlarge-6 large-6 medium-6 small-12 tiny-12">
					<div class="row">
	                    <label>Email <span class="mandatory">*</span></label>
	                    <input type="email" placeholder="Email" class="text">
	                    <span class="tooltip bottom"></span>
	                </div>
				</div>
				<div class="xlarge-6 large-6 medium-6 small-12 tiny-12">
					<div class="row">
	                    <label>Tanggal Lahir <span class="mandatory">*</span></label>
	                    <input type="date" placeholder="Tanggal Lahor" class="text">
	                    <span class="tooltip bottom"></span>
	                </div>
				</div>
				<div class="xlarge-6 large-6 medium-6 small-12 tiny-12">
					<div class="row">
	                    <label>Jenis Kelamin <span class="mandatory">*</span></label>
	                    <input type="text" placeholder="Jenis Kelamin" class="text">
	                    <span class="tooltip bottom"></span>
	                </div>
				</div>
				<div class="xlarge-6 large-6 medium-6 small-12 tiny-12">
					<div class="row">
	                    <label>Nomer Telpon <span class="mandatory">*</span></label>
	                    <input type="text" placeholder="Nomer Telpon" class="text">
	                    <span class="tooltip bottom"></span>
	                </div>
				</div>
				<div class="xlarge-6 large-6 medium-6 small-12 tiny-12">
					<div class="row">
	                    <label>Alamat <span class="mandatory">*</span></label>
	                    <textarea name="" id="" cols="30" rows="10" placeholder="Alamat" class="text"></textarea>
	                    <span class="tooltip bottom"></span>
	                </div>
				</div>
				<div class="xlarge-6 large-6 medium-6 small-12 tiny-12">
					<div class="row">
	                    <label>Role <span class="mandatory">*</span></label>
	                    <select name="" id="">
	                    	<option value="">---</option>
	                    	<option value="">Admin</option>
	                    	<option value="">Super Admin</option>
	                    	<option value="">Secretary</option>
	                    </select>
	                    <span class="tooltip bottom"></span>
	                </div>
				</div>
			</div>
		</form>
	</div>
@endsection

@section('contextual.content')
	<div class="row">
		<div class="pull-left">
			<input type="submit" value="Submit" class="button solid">
		</div>
		<div class="pull-right">
			<input type="reset" value="Reset" class="button solid error">
		</div>
	</div>
@endsection