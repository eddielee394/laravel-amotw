@extends('layouts.template_full_screen')
@section('content')
	<section class="">
		<div class="container-fluid">
			<div class="row row-no-gutter">
				<div class="col-12 col-lg-5 order-2 order-lg-1">
					<div class="full-screen position-relative d-flex flex-column justify-content-center align-items-center">
						<div class="brk-backgrounds brk-base-bg-gradient-15 brk-abs-overlay" >
							<div style="background-image:url({{asset('images/brick_bg.jpg')}});background-repeat:no-repeat;background-position:center center;background-size: cover;height: 100vh;"></div>
						</div>
						<a href="{{ route('home.index') }}" class="z-index-2 mb-60 pl-15 pr-15">
							<img src="{{asset('images/amotw_logo_black.png')}}" alt="logo" class="img-fluid">
						</a>
						<a href="{{ route('home.index') }}" class="btn-backgrounds btn-backgrounds_transparent btn-backgrounds_left-icon font__family-montserrat font__weight-normal text-uppercase font__size-13 z-index-2 text-center" style="padding-left:85px; padding-right: 60px;" >Back to the Homepage <span class="before"><i class="fas fa-arrow-left"></i></span>
						</a>
					</div>
				</div>
				<div class="col-12 col-lg-7 order-1 order-lg-2">
					<div class="full-screen d-flex align-items-center">
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-2 col-md-1"></div>
								<div class="col-12 col-md-10">
									@yield('auth_content')
								</div>
							</div>
							<div class="row mt-30" data-brk-library="component__social_block">
								<div class="col-lg-2 col-md-1"></div>
								<div class="col-12 col-md-10">
									<div class="social__icon-wrapper maxw-570 d-flex justify-content-between">
										<div class="social__icon-circle"><a href="https://github.com/eddielee394" target="_blank"><i class="brk-icon icon-sm fab fa-github"><span class="before"></span><span class="after"></span></i></a>
										</div>
										<div class="social__icon-circle"><a href="https://stackoverflow.com/story/eddielee394" target="_blank"><i class="brk-icon icon-sm fab fa-stack-overflow"><span class="before"></span><span class="after"></span></i></a>
										</div>
										<div class="social__icon-circle"><a href="https://twitter.com/xerotrade" target="_blank"><i class="brk-icon icon-sm fab fa-twitter"><span class="before"></span><span class="after"></span></i></a>
										</div>
										<div class="social__icon-circle"><a href="https://www.linkedin.com/in/eddie-padin" target="_blank"><i class="brk-icon icon-sm fab fa-linkedin"><span class="before"></span><span class="after"></span></i></a>
										</div>
										<div class="social__icon-circle"><a href="https://www.lamplightsolutions.net/" target="_blank"><i class="brk-icon icon-sm fa fa-globe"><span class="before"></span><span class="after"></span></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
