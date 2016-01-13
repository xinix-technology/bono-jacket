@extends('skeleton')

@section('content')
	<div class="wrapper">
		<h1 class="title">User View</h1>
		<div class="row">
			<namecardbook>
				<bookmark>A</bookmark>
				<namecard href="#" class="selected">
					<photo style="background-image: url('http://lorempixel.com/200/200/people');"></photo>
					<name>Aprianto Pramana Putra</name>
					<email>putra@sagara.id</email>
					<status>Administrator</status>
                </namecard>
				<namecard href="#">
					<photo>AR</photo>
					<name>Abdul Rasman</name>
					<email>abdul@sagara.id</email>
					<status>User</status>
                </namecard>
				<namecard href="#">
					<photo style="background-image: url('http://lorempixel.com/200/200/sports');"></photo>
					<name>Achmad Rizky</name>
					<email>achmadrizky@sagara.id</email>
					<status>User</status>
                </namecard>
				<bookmark>D</bookmark>
				<namecard href="#">
					<photo>DP</photo>
					<name>Dewi Purwatiningsih</name>
					<email>dewi@sagara.id</email>
					<status>Administrator</status>
                </namecard>
				<namecard href="#">
					<photo style="background-image: url('http://lorempixel.com/200/200/animals');"></photo>
					<name>Dhuhanawuri Agung Nugroho</name>
					<email>dwaan@sagara.id</email>
					<status>User</status>
                </namecard>
				<bookmark>G</bookmark>
				<namecard href="#">
					<photo>G</photo>
					<name>Ganesha</name>
					<email>ganesha@sagara.id</email>
					<status>Administrator</status>
                </namecard>
				<bookmark>J</bookmark>
				<namecard href="#">
					<photo>JS</photo>
					<name>Januar Siregar</name>
					<email>januar@sagara.id</email>
					<status>Administrator</status>
                </namecard>
			</namecardbook>
		</div>
	</div>
@endsection

@section('contextual.content')
	<ul class="pagination centered">
    	<li class="odd first">Show: </li>
        <li class="active even"><a href="http://119.252.174.28/siapp_dev/index.php/role/listing?per_page=25">25</a></li>
        <li class="odd"><a href="http://119.252.174.28/siapp_dev/index.php/role/listing?per_page=50">50</a></li>
        <li class="even"><a href="http://119.252.174.28/siapp_dev/index.php/role/listing?per_page=100">100</a></li>
        <li class="odd last"><a href="http://119.252.174.28/siapp_dev/index.php/role/listing?per_page=200">200</a></li>
    </ul>
@endsection