@extends('skeleton')

@section('content')
	<div class="wrapper">
		<paper-detail>
			<h2 class="subtitle">Project Detail</h2>
			<div class="row">
				<div class="span-6">
					<row>
						<label>Name</label>
						<info>Redesign Website TR</info>
					</row>
					<row>
						<label>Client Name</label>
						<info>Thinking Room</info>
					</row>
					<row>
						<label>Start Time</label>
						<info>31-01-2015</info>
					</row>
				</div>
				<div class="span-6">
					<row>
						<label>End Time</label>
						<info>31-03-2015</info>
					</row>
					<row>
						<label>Url Demo</label>
						<info>http://demo.xinix.co.id/web-thinkingroom</info>
					</row>
					<row>
						<label>Flag</label>
						<info>
							<div class="badge solid success">
								Open
							</div>
						</info>
					</row>
				</div>
			</div>
			<h2 class="subtitle">Participant</h2>
			<div class="row">
				<div class="span-6">
					<namecardbook>
						<namecard href="#">
							<photo>AR</photo>
							<name>Abdul Rasman</name>
							<email>abdul@sagara.id</email>
							<status>Developer</status>
		                </namecard>
					</namecardbook>
				</div>
				<div class="span-6">
					<namecardbook>
						<namecard href="#">
							<photo>MI</photo>
							<name>Moch. Ichsan</name>
							<email>ichsan@sagara.id</email>
							<status>Project Manager</status>
		                </namecard>
					</namecardbook>
				</div>
			</div>
			<h2 class="subtitle">Reports Detail</h2>
			<div class="row">
				<div class="table-container">
					<table class="nowrap">
						<thead>
							<tr>
								<th>
								    <input name="checkbox-name" type="checkbox">
								</th>
								<th>Assigne</th>
								<th>Priority</th>
								<th>Status</th>
								<th>Updated</th>
								<th>Tag</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
								    <input name="checkbox-name" type="checkbox">
								</td>
								<td>
									<a href="#" class="list-name">
										<span class="avatar" style="background-image: url('http://lorempixel.com/200/200/people');"></span>
										<span class="name">Muhammad Ali</span>
									</a>
								</td>
								<td>
									<a href="#" class="error xn xn-down"></a>
									<a href="#" class="success xn xn-up"></a>
								</td>
								<td>
									<a href="#" class="badge solid">New</a>
								</td>
								<td>Now</td>
								<td>
									<div class="tag badge">
										<span class="xn xn-tag"></span>
										<a href="#" class="">1.1.0</a>
									</div>
								</td>
							</tr>
							<tr>
								<td>
								    <input name="checkbox-name" type="checkbox">
								</td>
								<td>
									<a href="#" class="list-name">
										<span class="avatar" style="background-image: url('http://lorempixel.com/200/200/people');"></span>
										<span class="name">Muhammad Ali</span>
									</a>
								</td>
								<td>
									<a href="#" class="error xn xn-down"></a>
									<a href="#" class="success xn xn-up"></a>
								</td>
								<td>
									<a href="#" class="badge solid success">Resolved</a>
								</td>
								<td>Yesterday</td>
								<td>
									<div class="tag badge">
										<span class="xn xn-tag"></span>
										<a href="#" class="">1.1.0</a>
									</div>
								</td>
							</tr>
							<tr>
								<td>
								    <input name="checkbox-name" type="checkbox">
								</td>
								<td>
									<a href="#" class="list-name">
										<span class="avatar" style="background-image: url('http://lorempixel.com/200/200/people');"></span>
										<span class="name">Muhammad Ali</span>
									</a>
								</td>
								<td>
									<a href="#" class="error xn xn-down"></a>
									<a href="#" class="success xn xn-up"></a>
								</td>
								<td>
									<a href="#" class="badge solid warning">On Progress</a>
								</td>
								<td>3 days ago</td>
								<td>
									<div class="tag badge">
										<span class="xn xn-tag"></span>
										<a href="#" class="">1.1.0</a>
									</div>
								</td>
							</tr>
							<tr>
								<td>
								    <input name="checkbox-name" type="checkbox">
								</td>
								<td>
									<a href="#" class="list-name">
										<span class="avatar" style="background-image: url('http://lorempixel.com/200/200/people');"></span>
										<span class="name">Muhammad Ali</span>
									</a>
								</td>
								<td>
									<a href="#" class="error xn xn-down"></a>
									<a href="#" class="success xn xn-up"></a>
								</td>
								<td>
									<a href="#" class="badge solid error">Cancel</a>
								</td>
								<td>7 days ago</td>
								<td>
									<div class="tag badge">
										<span class="xn xn-tag"></span>
										<a href="#" class="">1.1.0</a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>	
				</div>
			</div>
		</paper-detail>
	</div>
@endsection

@section('contextual')
@endsection