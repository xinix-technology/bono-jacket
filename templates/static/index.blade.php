@extends('skeleton')

@section('content')
	<div class="wrapper">
		<h1 class="title">Welcome to Dashboard</h1>
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
		<div class="row">
			<div class="dashboard">
				<div class="row">
					<div class="span-3">
						<div class="wrapper">
							<div class="item highlight">
								<span class="icn xn xn-chart-area"></span>
								<div class="count-big">
									<h2>654</h2>
									<h6 class="label">Visitor</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="span-3">
						<div class="wrapper">
							<div class="item highlight success">
								<span class="icn xn xn-tag"></span>
								<div class="count-big">
									<h2>145 K</h2>
									<h6 class="label">Price</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="span-3">
						<div class="wrapper">
							<div class="item highlight warning">
								<span class="icn xn xn-basket"></span>
								<div class="count-big">
									<h2>331</h2>
									<h6 class="label">New Order</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="span-3">
						<div class="wrapper">
							<div class="item highlight error">
								<span class="icn xn xn-heart"></span>
								<div class="count-big">
									<h2>+56%</h2>
									<h6 class="label">Popularity</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="span-8">
						<div class="wrapper">
							<div class="item large">
								<h5 class="sub-title">
									<span class="xn xn-arrows-ccw"></span>
									Recent Activity
								</h5>
								<div class="item-area">
									<div class="listing row">
										<div class="avatar">
											<a href="#" style="background-image: url('http://lorempixel.com/200/200/people');"></a>
										</div>
										<div class="desc">
											<h6>
												<a href="#">Slicing News Page</a>
											</h6>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua.
											</p>
											<ul class="flat info">
												<li>
													<a href="#">Muhammad Ali</a>
												</li>
												<li>
													<span class="xn xn-dot"></span>
												</li>
												<li>
													<span>12 hours ago</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="listing row">
										<div class="avatar">
											<a href="#" style="background-image: url('http://lorempixel.com/200/200/people');"></a>
										</div>
										<div class="desc">
											<h6>
												<a href="#">Slicing Profile Page</a>
											</h6>
											<p>
												Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
												aliquip ex ea commodo consequat. Duis aute irure dolor in
											</p>
											<ul class="flat info">
												<li>
													<a href="#">Muhammad Ali</a>
												</li>
												<li>
													<span class="xn xn-dot"></span>
												</li>
												<li>
													<span>20 hours ago</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="listing row">
										<div class="avatar">
											<a href="#" style="background-image: url('http://lorempixel.com/200/200/people');"></a>
										</div>
										<div class="desc">
											<h6>
												<a href="#">Slicing Home Page</a>
											</h6>
											<p>
												Duis aute irure dolor in reprehenderit in voluptate velit esse
												cillum dolore eu fugiat nulla pariatur.
											</p>
											<ul class="flat info">
												<li>
													<a href="#">Muhammad Ali</a>
												</li>
												<li>
													<span class="xn xn-dot"></span>
												</li>
												<li>
													<span>Yesterday</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="listing row">
										<div class="avatar">
											<a href="#" style="background-image: url('http://lorempixel.com/200/200/people');"></a>
										</div>
										<div class="desc">
											<h6>
												<a href="#">Slicing News Page</a>
											</h6>
											<p>
												Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
												mollit anim id est laborum.
											</p>
											<ul class="flat info">
												<li>
													<a href="#">Muhammad Ali</a>
												</li>
												<li>
													<span class="xn xn-dot"></span>
												</li>
												<li>
													<span>12 hours ago</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="listing row">
										<div class="avatar">
											<a href="#" style="background-image: url('http://lorempixel.com/200/200/people');"></a>
										</div>
										<div class="desc">
											<h6>
												<a href="#">Slicing News Page</a>
											</h6>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua.
											</p>
											<ul class="flat info">
												<li>
													<a href="#">Muhammad Ali</a>
												</li>
												<li>
													<span class="xn xn-dot"></span>
												</li>
												<li>
													<span>12 hours ago</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="listing row">
										<div class="avatar">
											<a href="#" style="background-image: url('http://lorempixel.com/200/200/people');"></a>
										</div>
										<div class="desc">
											<h6>
												<a href="#">Slicing Profile Page</a>
											</h6>
											<p>
												Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
												aliquip ex ea commodo consequat. Duis aute irure dolor in
											</p>
											<ul class="flat info">
												<li>
													<a href="#">Muhammad Ali</a>
												</li>
												<li>
													<span class="xn xn-dot"></span>
												</li>
												<li>
													<span>20 hours ago</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="span-4">
						<div class="row">
							<div class="wrapper">
								<div class="item small">
									<h5 class="sub-title">
										<span class="xn xn-flash"></span>
										Updates
									</h5>
									<div class="item-area">
										<div class="listing row">
											<div class="avatar">
												<a href="#" style="background-image: url('http://lorempixel.com/200/200/people');"></a>
											</div>
											<div class="desc">
												<p>Updated <span class="badge">New</span> to <span class="badge error">Cancel</span></p>
												<ul class="flat info">
													<li>
														<a href="#">Muhammad Ali</a>
													</li>
													<li>
														<span class="xn xn-dot"></span>
													</li>
													<li>
														<span>12 hours ago</span>
													</li>
												</ul>
											</div>
										</div>
										<div class="listing row">
											<div class="avatar">
												<a href="#" style="background-image: url('http://lorempixel.com/200/200/sports');"></a>
											</div>
											<div class="desc">
												<p>Created New Task</p>
												<ul class="flat info">
													<li>
														<a href="#">Muhammad Ali</a>
													</li>
													<li>
														<span class="xn xn-dot"></span>
													</li>
													<li>
														<span>20 hours ago</span>
													</li>
												</ul>
											</div>
										</div>
										<div class="listing row">
											<div class="avatar">
												<a href="#" style="background-image: url('http://lorempixel.com/200/200/people');"></a>
											</div>
											<div class="desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
												<ul class="flat info">
													<li>
														<a href="#">Muhammad Ali</a>
													</li>
													<li>
														<span class="xn xn-dot"></span>
													</li>
													<li>
														<span>Yesterday</span>
													</li>
												</ul>
											</div>
										</div>
										<div class="listing row">
											<div class="avatar">
												<a href="#" style="background-image: url('http://lorempixel.com/200/200/sports');"></a>
											</div>
											<div class="desc">
												<p>Updated <span class="badge">New</span> to <span class="badge success">Resolved</span></p>
												<ul class="flat info">
													<li>
														<a href="#">Muhammad Ali</a>
													</li>
													<li>
														<span class="xn xn-dot"></span>
													</li>
													<li>
														<span>12 hours ago</span>
													</li>
												</ul>
											</div>
										</div>
										<div class="listing row">
											<div class="avatar">
												<a href="#" style="background-image: url('http://lorempixel.com/200/200/people');"></a>
											</div>
											<div class="desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
												<ul class="flat info">
													<li>
														<a href="#">Muhammad Ali</a>
													</li>
													<li>
														<span class="xn xn-dot"></span>
													</li>
													<li>
														<span>Yesterday</span>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="wrapper">
								<div class="item small">
									<h5 class="sub-title">
										<span class="xn xn-arrows-ccw"></span>
										Recent Activity
									</h5>
									<div class="item-area">
										<div class="listing row">
											<div class="avatar">
												<a href="#" style="background-image: url('http://lorempixel.com/200/200/sports');"></a>
											</div>
											<div class="desc">
												<h6>
													<a href="#">Slicing News Page</a>
												</h6>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
												<ul class="flat info">
													<li>
														<a href="#">Muhammad Ali</a>
													</li>
													<li>
														<span class="xn xn-dot"></span>
													</li>
													<li>
														<span>12 hours ago</span>
													</li>
												</ul>
											</div>
										</div>
										<div class="listing row">
											<div class="avatar">
												<a href="#" style="background-image: url('http://lorempixel.com/200/200/people');"></a>
											</div>
											<div class="desc">
												<h6>
													<a href="#">Slicing Profile Page</a>
												</h6>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
												<ul class="flat info">
													<li>
														<a href="#">Muhammad Ali</a>
													</li>
													<li>
														<span class="xn xn-dot"></span>
													</li>
													<li>
														<span>20 hours ago</span>
													</li>
												</ul>
											</div>
										</div>
										<div class="listing row">
											<div class="avatar">
												<a href="#" style="background-image: url('http://lorempixel.com/200/200/sports');"></a>
											</div>
											<div class="desc">
												<h6>
													<a href="#">Slicing Home Page</a>
												</h6>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
												<ul class="flat info">
													<li>
														<a href="#">Muhammad Ali</a>
													</li>
													<li>
														<span class="xn xn-dot"></span>
													</li>
													<li>
														<span>Yesterday</span>
													</li>
												</ul>
											</div>
										</div>
										<div class="listing row">
											<div class="avatar">
												<a href="#" style="background-image: url('http://lorempixel.com/200/200/people');"></a>
											</div>
											<div class="desc">
												<h6>
													<a href="#">Slicing News Page</a>
												</h6>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
												<ul class="flat info">
													<li>
														<a href="#">Muhammad Ali</a>
													</li>
													<li>
														<span class="xn xn-dot"></span>
													</li>
													<li>
														<span>12 hours ago</span>
													</li>
												</ul>
											</div>
										</div>
										<div class="listing row">
											<div class="avatar">
												<a href="#" style="background-image: url('http://lorempixel.com/200/200/sports');"></a>
											</div>
											<div class="desc">
												<h6>
													<a href="#">Slicing Home Page</a>
												</h6>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
												<ul class="flat info">
													<li>
														<a href="#">Muhammad Ali</a>
													</li>
													<li>
														<span class="xn xn-dot"></span>
													</li>
													<li>
														<span>Yesterday</span>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="span-4">
						<div class="wrapper">
							<div class="item medium">
								<h5 class="sub-title">
									<span class="xn xn-arrows-ccw"></span>
									Recent Activity
								</h5>
								<div class="item-area">
									<div class="listing row">
										<div class="avatar">
											<a href="#" style="background-image: url('http://lorempixel.com/200/200/sports');"></a>
										</div>
										<div class="desc">
											<h6>
												<a href="#">Slicing News Page</a>
											</h6>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
											<ul class="flat info">
												<li>
													<a href="#">Muhammad Ali</a>
												</li>
												<li>
													<span class="xn xn-dot"></span>
												</li>
												<li>
													<span>12 hours ago</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="listing row">
										<div class="avatar">
											<a href="#" style="background-image: url('http://lorempixel.com/200/200/people');"></a>
										</div>
										<div class="desc">
											<h6>
												<a href="#">Slicing Profile Page</a>
											</h6>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
											<ul class="flat info">
												<li>
													<a href="#">Muhammad Ali</a>
												</li>
												<li>
													<span class="xn xn-dot"></span>
												</li>
												<li>
													<span>20 hours ago</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="listing row">
										<div class="avatar">
											<a href="#" style="background-image: url('http://lorempixel.com/200/200/sports');"></a>
										</div>
										<div class="desc">
											<h6>
												<a href="#">Slicing Home Page</a>
											</h6>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
											<ul class="flat info">
												<li>
													<a href="#">Muhammad Ali</a>
												</li>
												<li>
													<span class="xn xn-dot"></span>
												</li>
												<li>
													<span>Yesterday</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="listing row">
										<div class="avatar">
											<a href="#" style="background-image: url('http://lorempixel.com/200/200/people');"></a>
										</div>
										<div class="desc">
											<h6>
												<a href="#">Slicing News Page</a>
											</h6>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
											<ul class="flat info">
												<li>
													<a href="#">Muhammad Ali</a>
												</li>
												<li>
													<span class="xn xn-dot"></span>
												</li>
												<li>
													<span>12 hours ago</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="listing row">
										<div class="avatar">
											<a href="#" style="background-image: url('http://lorempixel.com/200/200/sports');"></a>
										</div>
										<div class="desc">
											<h6>
												<a href="#">Slicing Home Page</a>
											</h6>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
											<ul class="flat info">
												<li>
													<a href="#">Muhammad Ali</a>
												</li>
												<li>
													<span class="xn xn-dot"></span>
												</li>
												<li>
													<span>Yesterday</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="span-4">
						<div class="wrapper">
							<div class="item medium">
								<h5 class="sub-title">
									<span class="xn xn-flash"></span>
									Updates
								</h5>
								<div class="item-area">
									<div class="listing row">
										<div class="avatar">
											<a href="#" style="background-image: url('http://lorempixel.com/200/200/people');"></a>
										</div>
										<div class="desc">
											<p>Updated <span class="badge">New</span> to <span class="badge error">Cancel</span></p>
											<ul class="flat info">
												<li>
													<a href="#">Muhammad Ali</a>
												</li>
												<li>
													<span class="xn xn-dot"></span>
												</li>
												<li>
													<span>12 hours ago</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="listing row">
										<div class="avatar">
											<a href="#" style="background-image: url('http://lorempixel.com/200/200/sports');"></a>
										</div>
										<div class="desc">
											<p>Created New Task</p>
											<ul class="flat info">
												<li>
													<a href="#">Muhammad Ali</a>
												</li>
												<li>
													<span class="xn xn-dot"></span>
												</li>
												<li>
													<span>20 hours ago</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="listing row">
										<div class="avatar">
											<a href="#" style="background-image: url('http://lorempixel.com/200/200/people');"></a>
										</div>
										<div class="desc">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
											<ul class="flat info">
												<li>
													<a href="#">Muhammad Ali</a>
												</li>
												<li>
													<span class="xn xn-dot"></span>
												</li>
												<li>
													<span>Yesterday</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="listing row">
										<div class="avatar">
											<a href="#" style="background-image: url('http://lorempixel.com/200/200/sports');"></a>
										</div>
										<div class="desc">
											<p>Updated <span class="badge">New</span> to <span class="badge success">Resolved</span></p>
											<ul class="flat info">
												<li>
													<a href="#">Muhammad Ali</a>
												</li>
												<li>
													<span class="xn xn-dot"></span>
												</li>
												<li>
													<span>12 hours ago</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="listing row">
										<div class="avatar">
											<a href="#" style="background-image: url('http://lorempixel.com/200/200/people');"></a>
										</div>
										<div class="desc">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
											<ul class="flat info">
												<li>
													<a href="#">Muhammad Ali</a>
												</li>
												<li>
													<span class="xn xn-dot"></span>
												</li>
												<li>
													<span>Yesterday</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="span-4">
						<div class="wrapper">
							<div class="item small task-list">
								<h5 class="sub-title">
									<span class="xn xn-list"></span>
									Task List
								</h5>
								<div class="item-area">
									<div class="listing row">
										<label class="placeholder">
										    <input name="checkbox-name" type="checkbox">
										    <span>Review Product</span>
										</label>
									</div>
									<div class="listing row">
										<label class="placeholder">
										    <input name="checkbox-name" type="checkbox">
										    <span>Slicing Detail News Page</span>
										</label>
									</div>
									<div class="listing row">
										<label class="placeholder">
										    <input name="checkbox-name" type="checkbox">
										    <span>Slicing Gallery Page</span>
										</label>
									</div>
									<div class="listing row">
										<label class="placeholder">
										    <input name="checkbox-name" type="checkbox">
										    <span>Slicing Detail Gallery Page</span>
										</label>
									</div>
									<div class="listing row">
										<label class="placeholder">
										    <input name="checkbox-name" type="checkbox">
										    <span>Theme for Menu integrate with wordpress menu</span>
										</label>
									</div>
								</div>
								<div class="add-new">
									<form action="">
										<input type="text" placeholder="Add New">
										<input type="submit" value="+" class="button solid">
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('contextual')
@endsection
