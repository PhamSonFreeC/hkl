@extends('master')
@section('title','About Us')
@section('h1','About Us')
@section('content')
	<div class="container-fluid about-us">
		<div class="row">
			<div class="col-xs-12">
				@include('left')
				<div class="col-md-8 body-about-us">
					<div class="row">
						<div class="col-xs-12">
							<div class="about">
								<div class="tieudeVI text-center">
									<h3 class="tieude_chung">What is <span class="hacklike">Hacklike.me</span></h3>
								</div>
								<div class="about-content" id="about-content">
									<div class="noidung">
										<span>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget ligula ornare, sodales augue sed, posuere tortor. Quisque scelerisque ante non enim venenatis, id porta lorem facilisis.
										</span><br>
										<span>
											Maecenas sed arcu tortor. Ut vitae justo augue. Duis nisi sem, egestas nec sollicitudin nec, vehicula ac lorem. Vivamus placerat vulputate velit, finibus faucibus nisl auctor quis. 
										</span><br>
										<span>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam felis purus, placerat sed ante eget, vestibulum cursus urna. Quisque lacinia augue id neque tincidunt, id eleifend metus tincidunt. Nullam nec odio ut turpis sagittis malesuada at in risus. Sed ante diam, fermentum non convallis at, lacinia eget ligula. Praesent mollis nec nulla sit amet consequat. Nunc et eleifend ex. Aenean dignissim massa est, mattis sollicitudin tortor laoreet id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam erat volutpat. Duis interdum lacus eros, quis pulvinar nunc euismod aliquet. Curabitur consectetur imperdiet risus vitae tincidunt. Fusce ut massa gravida, interdum dui ac, cursus justo. 
										</span><br>
										<span>
											Maecenas id ipsum urna. In eu quam ut lectus convallis vehicula. Donec pulvinar eleifend ultrices. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc massa elit, porta in mauris et, semper auctor ex. Praesent et fringilla justo. Aenean eget suscipit ipsum. Aenean eros augue, sollicitudin non lacus vel, vestibulum vulputate arcu. Phasellus in dui ac odio laoreet luctus.
										</span>
									</div>	
								</div>
							</div>
							<div class="range">
								<div class="tieudeSD text-center">
									<h3 class="tieude_chung">Our <span class="hacklike">Range</span></h3>	
									<div class="tieudeSD-content">			
										<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget ligula ornare, sodales augue sed, posuere tortor. Quisque scelerisque ante non enim venenatis, id porta lorem facilisis.</span><br>
										<span>Maecenas sed arcu tortor. Ut vitae justo augue. Duis nisi sem, egestas nec sollicitudin nec, vehicula ac lorem. Vivamus placerat vulputate velit, finibus faucibus nisl auctor quis.</span>
									</div>	
								</div>	
							</div>
							<div class="mission">
								<div class="tieudeVI text-center">
									<h3 class="tieude_chung">Our <span class="hacklike">Mission</span></h3>
								</div>
								<div class="mission-content" id="mission-content">
									<div class="noidung">
										<span>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget ligula ornare, sodales augue sed, posuere tortor. Quisque scelerisque ante non enim venenatis, id porta lorem facilisis.
										</span><br>
										<span>
											Maecenas sed arcu tortor. Ut vitae justo augue. Duis nisi sem, egestas nec sollicitudin nec, vehicula ac lorem. Vivamus placerat vulputate velit, finibus faucibus nisl auctor quis. 
										</span><br>
										<span>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam felis purus, placerat sed ante eget, vestibulum cursus urna. Quisque lacinia augue id neque tincidunt, id eleifend metus tincidunt. Nullam nec odio ut turpis sagittis malesuada at in risus. Sed ante diam, fermentum non convallis at, lacinia eget ligula. Praesent mollis nec nulla sit amet consequat. Nunc et eleifend ex. Aenean dignissim massa est, mattis sollicitudin tortor laoreet id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam erat volutpat. Duis interdum lacus eros, quis pulvinar nunc euismod aliquet. Curabitur consectetur imperdiet risus vitae tincidunt. Fusce ut massa gravida, interdum dui ac, cursus justo. 
										</span>
									</div>		
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