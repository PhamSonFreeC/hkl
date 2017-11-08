@extends('master')
@section('title','Contact')
@section('h1','Contact')
@section('content')
	<div class="container-fluid about-us">
		<div class="row">
			<div class="col-xs-12">
				@include('left')
				<div class="col-md-8 body-about-us body_contact">
					<div class="row">
						<div class="col-xs-12">
							<div class="contact-content">
								<div class="tieudeVI text-center">
									<h3 class="tieude_chung">Hi, please <span class="hacklike">contact</span> us</h3>
									<div class="noidung">			
										<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget ligula ornare, sodales augue sed, posuere tortor. Quisque scelerisque ante non enim venenatis, id porta lorem facilisis.</span>
									</div>	
								</div>
							</div>
							<div class="col-xs-12 text-center contact2">
								<div class="col-sm-6 text-left">
									<input type="text" class="form-control"  placeholder="Your Name..">
									<input type="text" class="form-control"  placeholder="Your Facebool Link..">
								</div>
								<div class="col-sm-6 text-right">		
									<input type="text" class="form-control"  placeholder="Your Email..">
									<select class="col-sm-12">
										<option value="topic">Topic</option>
										<option value="saab">1.Questions</option>
										<option value="opel">2.Support</option>
										<option value="audi">3.Others</option>
									</select>
								</div>
								<div class="col-sm-12 text-center">	
									<input type="text" class="form-control message"  placeholder="Your Message..">
									<a href=""><input type="button" class="col-sm-6" value="SEND"></a>
									<form action="">
										<input type="checkbox" name="vehicle" value="copy"> Sent me a copy
									</form>
								</div>	
							</div>
						</div>	
					</div>
				</div>		
				@include('right')
			</div>
		</div>
	</div>
@endsection