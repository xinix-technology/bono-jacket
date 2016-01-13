@extends('skeleton')

@section('content')
	<div class="wrapper">
		<h1 class="title">List View</h1>
		<list-collection>
			<list-collection-data>
				<a href="#" class="row">
					<span class="span-2 align-center">
						<photo>
							<i class="xn xn-doc-text"></i>
						</photo>
					</span>
					<span class="span-8">
						<label>Name</label>
						<info>Ticketing System</info>
						<span class="row">
							<span class="span-4">
								<label>Client</label>
								<info>Jatis Mobile</info>
							</span>
							<span class="span-4">
								<label>Start Time</label>
								<info>31-01-2015</info>
							</span>
							<span class="span-4">
								<label>End Time</label>
								<info>31-05-2015</info>
							</span>
						</span>
					</span>
					<span class="span-2">
						<label>Flag</label>
						<info class="button solid error">Closed</info>
					</span>
				</a>
			</list-collection-data>

			<list-collection-data>
				<a href="#" class="row">
					<span class="span-2 align-center">
						<photo style="background-image: url('http://lorempixel.com/200/200/sports');"></photo>
					</span>
					<span class="span-8">
						<label>Name</label>
						<info>M Coin Payment Gateway</info>
						<span class="row">
							<span class="span-4">
								<label>Client</label>
								<info>PT. Mobile Coin</info>
							</span>
							<span class="span-4">
								<label>Start Time</label>
								<info>31-01-2015</info>
							</span>
							<span class="span-4">
								<label>End Time</label>
								<info>31-05-2015</info>
							</span>
						</span>
					</span>
					<span class="span-2">
						<label>Flag</label>
						<info class="button solid success">Open</info>
					</span>
				</a>
			</list-collection-data>

			<list-collection-data>
				<a href="#" class="row">
					<span class="span-2 align-center">
						<photo>123</photo>
					</span>
					<span class="span-8">
						<label>Name</label>
						<info>e-Status HKI</info>
						<span class="row">
							<span class="span-4">
								<label>Client</label>
								<info>DITJEN HKI</info>
							</span>
							<span class="span-4">
								<label>Start Time</label>
								<info>31-01-2015</info>
							</span>
							<span class="span-4">
								<label>End Time</label>
								<info>31-05-2015</info>
							</span>
						</span>
					</span>
					<span class="span-2">
						<label>Flag</label>
						<info class="button solid warning">Support</info>
					</span>
				</a>
			</list-collection-data>

			<list-collection-data>
				<a href="#" class="row">
					<span class="span-2 align-center">
						<photo>
							<i class="xn xn-doc-text"></i>
						</photo>
					</span>
					<span class="span-8">
						<label>Name</label>
						<info>Hak Cipta Online</info>
						<span class="row">
							<span class="span-4">
								<label>Client</label>
								<info>DITJEN HKI</info>
							</span>
							<span class="span-4">
								<label>Start Time</label>
								<info>31-01-2015</info>
							</span>
							<span class="span-4">
								<label>End Time</label>
								<info>31-05-2015</info>
							</span>
						</span>
					</span>
					<span class="span-2">
						<label>Flag</label>
						<info class="button solid warning">Support</info>
					</span>
				</a>
			</list-collection-data>
		</list-collection>
	</div>
@endsection

@section('contextual')
@endsection