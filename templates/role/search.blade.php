@extends('skeleton')

@section('content')
	<div class="wrapper">
		<h1 class="title">Role View</h1>
		<div class="row">
			<namecardbook>
				<namecard href="#">
					<photo>F</photo>
					<name>Finance</name>
                </namecard>
				<namecard href="#">
					<photo>S</photo>
					<name>Super Administrator</name>
                </namecard>
				<namecard href="#">
					<photo>D</photo>
					<name>Default</name>
                </namecard>
				<namecard href="#">
					<photo>F</photo>
					<name>Finance</name>
                </namecard>
				<namecard href="#">
					<photo>S</photo>
					<name>Super Administrator</name>
                </namecard>
				<namecard href="#">
					<photo>D</photo>
					<name>Default</name>
                </namecard>
			</namecardbook>
		</div>
	</div>
@endsection

@section('contextual.content')
	<ul class="pagination centered">
	    <li><a href="#"><i class="xn xn-angle-double-left"></i></a></li>
	    <li><a href="#"><i class="xn xn-left-open-big"></i></a></li>
	    <li class="active"><a href="#">1</a></li>
	    <li><a href="#">2</a></li>
	    <li><a href="#">3</a></li>
	    <li class="unavailable"><a href="#">…</a></li>
	    <li><a href="#">9</a></li>
	    <li><a href="#">10</a></li>
	    <li><a href="#">11</a></li>
	    <li><a href="#"><i class="xn xn-right-open-big"></i></a></li>
	    <li><a href="#"><i class="xn xn-angle-double-right"></i></a></li>
	</ul>
@endsection