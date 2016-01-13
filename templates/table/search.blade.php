@extends('skeleton')

@section('content')
	<div class="wrapper">
		<h1 class="title">Table View</h1>
		<nav id="filter">
			<div class="row">
				<div class="span-9">
					<div class="buttons dropdown-area">
						<a href="#" class="dropdown button solid">
							Dropdown
							<i class="xn xn-down-open-mini"></i>
						</a>
						<ul class="context-menu">
						    <li><a href="#">Design</a></li>
						    <li><a href="#">Web Design</a></li>
						    <li><a href="#">Web Development</a></li>
						    <li class="divider"></li>
						    <li><a href="#">Illustrations</a></li>
						    <li><a href="#">Designer</a></li>
						</ul>
					</div>
				</div>
				<div class="span-3">
					<div class="button-area align-right">
						<div class="buttons">
							<ul class="flat">
								<li>
									<a href="#" class="button solid">
										<i class="xn xn-plus"></i>
										New
									</a>
								</li>
								<li>
									<a href="#" class="button solid error">
										<i class="xn xn-trash"></i>
										Delete
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<div class="table-container">
			<div class="table-body">
				<div class="fixed">
					<table class="nowrap fixed-head fixed-tail">
						<thead>
							<tr>
								<th>
								    <input name="checkbox-name" type="checkbox">
								</th>
								<th>Assigne</th>
								<th>Priority</th>
								<th>Status</th>
								<th>Title</th>
								<th>Updated</th>
								<th>Tag</th>
								<th>Action</th>
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
								<td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
								<td>Now</td>
								<td>
									<div class="tag badge">
										<span class="xn xn-tag"></span>
										<a href="#" class="">1.1.0</a>
									</div>
								</td>
								<td>
									<div class="action-table">
										<a href="#" class="success xn xn-pencil"></a>
										<a href="#" class="error xn xn-trash"></a>
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
								<td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
								<td>Yesterday</td>
								<td>
									<div class="tag badge">
										<span class="xn xn-tag"></span>
										<a href="#" class="">1.1.0</a>
									</div>
								</td>
								<td>
									<div class="action-table">
										<a href="#" class="success xn xn-pencil"></a>
										<a href="#" class="error xn xn-trash"></a>
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
								<td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
								<td>3 days ago</td>
								<td>
									<div class="tag badge">
										<span class="xn xn-tag"></span>
										<a href="#" class="">1.1.0</a>
									</div>
								</td>
								<td>
									<div class="action-table">
										<a href="#" class="success xn xn-pencil"></a>
										<a href="#" class="error xn xn-trash"></a>
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
								<td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
								<td>7 days ago</td>
								<td>
									<div class="tag badge">
										<span class="xn xn-tag"></span>
										<a href="#" class="">1.1.0</a>
									</div>
								</td>
								<td>
									<div class="action-table">
										<a href="#" class="success xn xn-pencil"></a>
										<a href="#" class="error xn xn-trash"></a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>	
				</div>
			</div>
		</div>
	</div>
@endsection

@section('contextual.content')
	<div class="row">
		<div class="span-6">
			<a href="#" class="button solid">Edit</a>
		</div>
		<div class="span-6">
			<ul class="pagination right">
		    	<li class="odd first">Show: </li>
		        <li class="active even"><a href="http://119.252.174.28/siapp_dev/index.php/role/listing?per_page=25">25</a></li>
		        <li class="odd"><a href="http://119.252.174.28/siapp_dev/index.php/role/listing?per_page=50">50</a></li>
		        <li class="even"><a href="http://119.252.174.28/siapp_dev/index.php/role/listing?per_page=100">100</a></li>
		        <li class="odd last"><a href="http://119.252.174.28/siapp_dev/index.php/role/listing?per_page=200">200</a></li>
		    </ul>
		</div>
	</div>
@endsection