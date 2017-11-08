@extends('index')
@section('title','Home Page')

@section('content')
	<div class="banner">
		<div class="container">
			<div class="row">
				<!-- BANNER <--></-->
				<div class="col-xs-12 text-center">
					<h1>Hack Like - Bot Like <br> Bot Reactions - Auto Reactions</h1>
					<div class="col-sm-4 col-sm-offset-4 text-left">
						<form action="{{url('login')}}" method="post">
							<input type="text" name="username" placeholder="username" class="form-control">
							<input type="password" name="password" placeholder="password" class="form-control">
							{!!csrf_field()!!}
							<div class="row">
								<div class="col-md-8 login">
									<button type="submit" class="btn btn-home btn-login">Login</button>
								</div>
								<div type="" class="col-md-4 reg">
									<button class="btn btn-home btn-reg">Register</button>
								</div>
							</div>
							<a href="#" class="forget_pass">Forget Password</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END BANNER -->
	<div class="welcome">
		<div class="container">
			<div class="row text-center tieude_chung col-xs-12">
				<h2>Welcome to <span class="hacklike">HACKLIKE.ME</span></h2>
				<span>Free <strong>Hack Like - Auto Like - Bot Like</strong> systems</span> 
			</div>
		</div>
			<!-- END hed -->
			<div class="info_auto">
				<div class="container">
					<div class="row ">
						<div class="col-xs-12">
						<div class="col-md-3 col-md-offset-1">
							<div class="head_info">
							 <span class="hacklike">BOT</span>	<br>System
							</div>
							<ul class="body_info">
								<li>
									<a href="#" >
										<span class="text-left">Bot Like</span>
										<span class="text-right">99999 <i class="fa fa-user" aria-hidden="true"></i></span>
									</a>
								</li>
								<li>
									<a >
										<span class="text-left">Bot Ex Like</span>
										<span class="text-right">99999 <i class="fa fa-user" aria-hidden="true"></i></span>
									</a>
								</li><li>
									<a >
										<span class="text-left">Bot Reactions</span>
										<span class="text-right">99999 <i class="fa fa-user" aria-hidden="true"></i></span>
									</a>
								</li><li>
									<a >
										<span class="text-left">Bot React</span>
										<span class="text-right">99999 <i class="fa fa-user" aria-hidden="true"></i></span>
									</a>
								</li><li>
									<a >
										<span class="text-left">Bot Comment</span>
										<span class="text-right">99999 <i class="fa fa-user" aria-hidden="true"></i></span>
									</a>
								</li><li>
									<a >
										<span class="text-left">Bot Lk Cmt</span>
										<span class="text-right">99999 <i class="fa fa-user" aria-hidden="true"></i></span>
									</a>
								</li><li>
									<a >
										<span class="text-left">Bot Ex Lk Cmt</span>
										<span class="text-right">99999 <i class="fa fa-user" aria-hidden="true"></i></span>
									</a>
								</li><li>
									<a >
										<span class="text-left">Bot Status</span>
										<span class="text-right">99999 <i class="fa fa-user" aria-hidden="true"></i></span>
									</a>
								</li><li>
									<a >
										<span class="text-left">Bot Summons </span>
										<span class="text-right">99999 <i class="fa fa-user" aria-hidden="true"></i></span>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-3 col-md-offset-1">
							<div class="head_info">
								<span class="hacklike">AUTO</span><br>System
							</div>
							<ul class="body_info">
								<li>
									<a >
										<span class="text-left">Auto Like</span>
										<span class="text-right">99999 <i class="fa fa-user" aria-hidden="true"></i></span>
									</a>
								</li>
								<li>
									<a >
										<span class="text-left">Auto Reactions</span>
										<span class="text-right">99999 <i class="fa fa-user" aria-hidden="true"></i></span>
									</a>
								</li><li>
									<a >
										<span class="text-left">Auto Lk pages</span>
										<span class="text-right">99999 <i class="fa fa-user" aria-hidden="true"></i></span>
									</a>
								</li><li>
									<a >
										<span class="text-left">Auto Sub</span>
										<span class="text-right">99999 <i class="fa fa-user" aria-hidden="true"></i></span>
									</a>
								</li><li>
									<a >
										<span class="text-left">Auto Share</span>
										<span class="text-right">99999 <i class="fa fa-user" aria-hidden="true"></i></span>
									</a>
								</li><li>
									<a >
										<span class="text-left">Auto Cmt</span>
										<span class="text-right">99999 <i class="fa fa-user" aria-hidden="true"></i></span>
									</a>
								</li><li>
									<a >
										<span class="text-left">Auto Add Fr</span>
										<span class="text-right">99999 <i class="fa fa-user" aria-hidden="true"></i></span>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-3 col-md-offset-1">
							<div class="head_info">
								<span class="hacklike">BOOM</span><br>System
							</div>
							<ul class="body_info">
								<li>
									<a >
										<span class="text-left">Boom Like</span>
										<span class="text-right">99999 <i class="fa fa-user" aria-hidden="true"></i></span>
									</a>
								</li>
								<li>
									<a >
										<span class="text-left">Boom Cmt</span>
										<span class="text-right">99999 <i class="fa fa-user" aria-hidden="true"></i></span>
									</a>
								</li>
							</ul>
						</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END info -->
			<div class="what">
				<div class="container">
					<div class="row">
					<div class="col-md-4">
							<img src="hacklike/images/what.png" alt="">
						</div>
						<div class="col-md-offset-1 col-md-7 text-center ">
							<h3 class="tieude_chung">What is <span class="hacklike">Hacklike.me?</span></h3>
							<span>Hacklike.me is the website providing tools for Hack Like, Auto Like, Bot Like, Bot Comment,... Help you increase likes, comments, reactions or shares for your status, photos, and videos. </span>
						</div>
					</div>
				</div>
			</div>
			<!-- END WHAT -->
			<div class="why">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3 class="tieude_chung">Why is <span class="hacklike">Hacklike.me?</span></h3>
							<span>Most of the actions are maximally automated! You need not doing anything! This is a FREE system. You need not pay for anything . Hacklike.me is an automatic system helping status of Facebook users have more likes, comments or shares. This system is built based on platform of exchanging large amount of likes between hackers and multiple like hacking tools storaged in virtual computers.</span>
						</div>
						<div class="col-md-12 noi_dung_why text-center">
							<div class="col-md-3">
								<img src="hacklike/images/free.png" alt="">
								Free 100%
							</div>
							<div class="col-md-3"><img src="hacklike/images/free.png" alt="">
								Free 100%</div>
							<div class="col-md-3"><img src="hacklike/images/free.png" alt="">
								Free 100%</div>
							<div class="col-md-3"><img src="hacklike/images/free.png" alt="">
								Free 100%</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- END WELCOME -->
	 <div class="VIP">
		<div class="container">
			<div class="row content_vip">
				<div class="col-md-6 VIP-service">
					<span> Also, we has a <span class="hacklike">VIP</span>  service for Professional Salespeople </span>
				</div>
				<div class="col-md-6 VIP-info">
					<span>Ut volutpat magna diam. Fusce imperdiet metus eu efficitur iaculis. Nam et arcu ex. Ut imperdiet, diam non blandit efficitur, dolor libero tincidunt urna, vitae facilisis sapien dolor tempus nisi. Sed velit ligula, lacinia imperdiet imperdiet porta, vulputate sit amet sapien. Etiam at lacus nulla. Morbi ornare purus orci, eget feugiat velit rhoncus eu.</span>
				</div>
			</div>
		</div>
	</div>
	<div class="system">
		<div class="container">
			<div class="row auto_system">
				<h2><span class="hacklike">Auto</span> System</h2>
				<div class="col-md-6">
					<img src="hacklike/images/auto_system.png" alt="" class="img_autosys">
				</div>
				<div class="col-md-6 sys-content">
					<div class="col-md-4">
						<img src="hacklike/images/like.png" alt="">
						<span class="title">Auto like</span>
						<span class="content">Praesent egestas condimentum ante, a laoreet magna lacinia sed. Etiam eget nisi mollis, rutrum turpis sit amet, tempus augue. In porta gravida ornare</span>
					</div>
					<div class="col-md-4">
						<img src="hacklike/images/like.png" alt="">
						<span class="title">Auto like</span>
						<span class="content">Praesent egestas condimentum ante, a laoreet magna lacinia sed. Etiam eget nisi mollis, rutrum turpis sit amet, tempus augue. In porta gravida ornare</span>
					</div>
					<div class="col-md-4">
						<img src="hacklike/images/like.png" alt="">
						<span class="title">Auto like</span>
						<span class="content">Praesent egestas condimentum ante, a laoreet magna lacinia sed. Etiam eget nisi mollis, rutrum turpis sit amet, tempus augue. In porta gravida ornare</span>
					</div>
					<div class="col-md-4">
						<img src="hacklike/images/like.png" alt="">
						<span class="title">Auto like</span>
						<span class="content">Praesent egestas condimentum ante, a laoreet magna lacinia sed. Etiam eget nisi mollis, rutrum turpis sit amet, tempus augue. In porta gravida ornare</span>
					</div>
					<div class="col-md-4">
						<img src="hacklike/images/like.png" alt="">
						<span class="title">Auto like</span>
						<span class="content">Praesent egestas condimentum ante, a laoreet magna lacinia sed. Etiam eget nisi mollis, rutrum turpis sit amet, tempus augue. In porta gravida ornare</span>
					</div>
					<div class="col-md-4">
						<img src="hacklike/images/like.png" alt="">
						<span class="title">Auto like</span>
						<span class="content">Praesent egestas condimentum ante, a laoreet magna lacinia sed. Etiam eget nisi mollis, rutrum turpis sit amet, tempus augue. In porta gravida ornare</span>
					</div>
				</div>
			</div>
			<div class="row robot_system">
				<h2 class="text-center"> <span class="hacklike ">Robot</span> system</h2>
				
				<div class="col-md-4 text-right trai">
					<div class="mot_bot">
						<div>
							<img src="hacklike/images/like.png" alt="">
						</div>
						
						<a href="">Bot Like</a>
						<span>
							Nulla consequat massa nec aliquam ultrices. Donec condimentum commodo sodales. Proin ullamcorper libero sed orci malesuada volutpat
						</span>
					</div>
					<div class="mot_bot">
						<img src="hacklike/images/like.png" alt="">
						<a href="">Bot Like</a>
						<span>
							Nulla consequat massa nec aliquam ultrices. Donec condimentum commodo sodales. Proin ullamcorper libero sed orci malesuada volutpat
						</span>
					</div>
					<div class="mot_bot">
						<img src="hacklike/images/like.png" alt="">
						<a href="">Bot Like</a>
						<span>
							Nulla consequat massa nec aliquam ultrices. Donec condimentum commodo sodales. Proin ullamcorper libero sed orci malesuada volutpat
						</span>
					</div>
					<div class="mot_bot">
						<img src="hacklike/images/like.png" alt="">
						<a href="">Bot Like</a>
						<span>
							Nulla consequat massa nec aliquam ultrices. Donec condimentum commodo sodales. Proin ullamcorper libero sed orci malesuada volutpat
						</span>
					</div>

				</div>
				<div class="col-md-4">
					<img src="hacklike/images/rebot_system.png" class="iphone"  alt="">
					<div class="mot_bot text-center center">
						<img src="hacklike/images/7.png" alt="">
						<a href="">Emotional Bot</a>
						<span>
							Nulla consequat massa nec aliquam ultrices. Donec condimentum commodo sodales. Proin ullamcorper libero sed orci malesuada volutpat
						</span>
					</div>
				</div>
				<div class="col-md-4 phai">
					<div class="mot_bot">
						<img src="hacklike/images/like.png" alt="">
						<a href="">Bot Like</a>
						<span>
							Nulla consequat massa nec aliquam ultrices. Donec condimentum commodo sodales. Proin ullamcorper libero sed orci malesuada volutpat
						</span>
					</div>
					<div class="mot_bot">
						<img src="hacklike/images/like.png" alt="">
						<a href="">Bot Like</a>
						<span>
							Nulla consequat massa nec aliquam ultrices. Donec condimentum commodo sodales. Proin ullamcorper libero sed orci malesuada volutpat
						</span>
					</div>
					<div class="mot_bot">
						<img src="hacklike/images/like.png" alt="">
						<a href="">Bot Like</a>
						<span>
							Nulla consequat massa nec aliquam ultrices. Donec condimentum commodo sodales. Proin ullamcorper libero sed orci malesuada volutpat
						</span>
					</div>
					<div class="mot_bot">
						<img src="hacklike/images/like.png" alt="">
						<a href="">Bot Like</a>
						<span>
							Nulla consequat massa nec aliquam ultrices. Donec condimentum commodo sodales. Proin ullamcorper libero sed orci malesuada volutpat
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection