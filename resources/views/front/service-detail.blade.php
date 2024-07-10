



@extends('front.layout')

@section('meta')

@section('meta')
<title>Concept Care</title>
<meta name="author" content="Concept Care">
<meta name="description" content="{!! @$dynamic_contents['meta_description'] !!}">
<meta name="keywords" content="{!! @$dynamic_contents['meta_keywords'] !!}">

@endsection

@section('header-script')
{!! @$dynamic_content['header_script'] !!}
@endsection

@section('main')



<div class="titlebar scheme-light bg-cover bg-center z-3 text-center bg-blue-900 text-white border-bottom border-black-10"
    style="background-image: url(/{{@$dynamic_content->banner_image}});">
    <div class="titlebar-overlay lqd-overlay"></div>
    <div class="titlebar-inner text-inherit pt-55 pb-100" id="titlebar">
        <div class="container titlebar-container">
            <div class="row titlebar-container flex flex-wrap items-center justify-center">
                <div class="titlebar-col col-12 col-lg-8 col-xl-6 px-15 mt-45 mata">
                    <h1 class="text-center">{{@$dynamic_content->title}}</h1>
                    <p class="mb-5/5em"></p>
                    <ul class="breadcumb-menu">
                        <li><a href="{{route('home')}}" class="text-center">Home</a></li>
                       
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<main class="content bg-white" id="lqd-site-content">
			<div id="lqd-contents-wrap">

				<section class="lqd-sectoin services-content">
					<div class="container">
						<div class="row">
							<div class="w-30percent relative lg:w-full">
								<div class="w-full sticky py-50 px-10 module-first">

									<!-- Start List BG -->
									<div class="w-full relative">
										<div
											class="lqd-fancy-menu lqd-custom-menu pos-rel menu-items-has-fill lqd-menu-td-none module-list-bg">
											<ul class="reset-ul link-15 link-black">
												<li class="mb-5 items-center">
													<a class="w-full bg-accent font-bold" href="./Server-configuration.html" target="_self">
														<span
															class="link-icon inline-flex hide-if-empty right-icon icon-push-to-edge">
															<i aria-hidden="true"
																class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
														</span>
														Server Configurations
													</a>
												</li>
												<li class="mb-5 items-center">
													<a class="w-full bg-accent font-bold" href="./cctv-installation.html" target="_self">
														<span
															class="link-icon inline-flex hide-if-empty right-icon icon-push-to-edge">
															<i aria-hidden="true"
																class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
														</span>
														CCTV Installation
													</a>
												</li>
												<li class="mb-5 items-center">
													<a class="w-full bg-accent font-bold" href="./biomatric.html" target="_self">
														<span
															class="link-icon inline-flex hide-if-empty right-icon icon-push-to-edge">
															<i aria-hidden="true"
																class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
														</span>
														Biometrics Solutions
													</a>
												</li>
												<li class="mb-5 items-center">
													<a class="w-full bg-accent font-bold" href="./officeinfra.html" target="_self">
														<span
															class="link-icon inline-flex hide-if-empty right-icon icon-push-to-edge">
															<i aria-hidden="true"
																class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
														</span>
														Office Infrastructure Solution
													</a>
												</li>
												<li class="mb-5 items-center">
													<a class="w-full bg-accent font-bold" href="./ipbx.html" target="_self">
														<span
															class="link-icon inline-flex hide-if-empty right-icon icon-push-to-edge">
															<i aria-hidden="true"
																class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
														</span>
														IPBX Solution
													</a>
												</li>
												<li class="items-center">
													<a class="w-full bg-accent font-bold" href="./wifi-solutions.html" target="_self">
														<span
															class="link-icon inline-flex hide-if-empty right-icon icon-push-to-edge">
															<i aria-hidden="true"
																class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>
														</span>
														Wi-Fi Solution
													</a>
												</li>
											</ul>
										</div>
									</div>
									<!-- End List BG -->

									<!-- Start Form -->
									<div class="w-full relative mt-45">
										<div
											class="w-full relative flex flex-col transition-bg bg-accent py-35 px-20 mb-30">
											<h3 class="ld-fh-element relative mb-0/5em text-18"> Get a Free Quote</h3>
											<div
												class="lqd-contact-form lqd-contact-form-inputs-filled lqd-contact-form-inputs-round lqd-contact-form-button-block mt-10">
												<div role="form" class="lqd-cf" id="lqd-cf-form-left-side" lang="en-GB"
													dir="ltr">
													<div class="screen-reader-response">
														<p role="status" aria-live="polite" aria-atomic="true"></p>
													</div>
													<form action="#" method="post" class="lqd-form init"
														novalidate="novalidate" data-status="init">
														<p>
															<span class="lqd-form-control-wrap" data-name="text">
																<input type="text" name="text" value size="40"
																	class="lqd-cf-form-control px-2em bg-white text-gray-500 text-15"
																	aria-required="true" aria-invalid="false"
																	placeholder="Your name">
															</span>
															<span class="lqd-form-control-wrap" data-name="email">
																<input type="email" name="email" value size="40"
																	class="lqd-cf-form-control px-2em bg-white text-gray-500 text-15 "
																	aria-required="true" aria-invalid="false"
																	placeholder="Your Email Address">
															</span>
															<span class="lqd-form-control-wrap" data-name="textarea">
																<textarea name="textarea" cols="10" rows="4"
																	class="lqd-cf-form-control px-2em bg-white text-gray-500 text-15"
																	aria-required="true" aria-invalid="false"
																	placeholder="Your message"></textarea>
															</span>
															<input type="submit" value="Send email"
																class="lqd-cf-form-control has-spinner bg-secondary text-15 text-white font-bold font-heading">
														</p>
														<div class="lqd-cf-response-output" aria-hidden="true"></div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<!-- End Form -->

									<!-- Start Icon Box -->
									<div class="w-full relative">
										<div
											class="iconbox d-flex flex-grow-1 relative items-center iconbox-circle border-1 border-black-10 rounded-4 p-20 mb-30">
											<div class="iconbox-icon-wrap mr-25">
												<div
													class="iconbox-icon-container inline-flex relative z-1 border-radius-circle w-65 h-65 bg-accent rounded-full text-20 text-secondary">
													<svg xmlns="http://www.w3.org/2000/svg" height="1em"
														viewBox="0 0 512 512" fill="currentColor">
														<path
															d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
													</svg>
												</div>
											</div>
											<div class="contents ">
												<h3
													class="lqd-iconbox-heading mt-1em mb-0 text-15 font-medium text-gray-400">
													Toll Free Call Center: </h3>
												<p>
													<span class="text-20 text-dark">+48 4348 80 32</span>
												</p>
											</div>
										</div>
									</div>
									<!-- End Icon Box -->

								</div>
							</div>
							<div
								class="w-70percent flex flex-col py-50 pr-10 pl-50 module-last lg:w-full lg:order-first">

								<!-- Start Portfolio -->
								<div class="w-full relative bgpat">
									<div class="lqd-fb pos-rel lqd-fb-style-1 lqd-fb-style-1-3 lqd-fb-content-overlay lqd-fb-zoom-img-onhover border-radius-4 overflow-hidden h-pt-60 mb-65"
										data-inview="true">
										<div class="lqd-fb-inner lqd-overlay">
											<div class="lqd-fb-img lqd-overlay overflow-hidden">
												<figure class="w-full h-full">
													<img class="w-full h-full objfit-cover objpos-center"
														src="{{@$dynamic_content->image}}"
														alt="portfolio detail">
												</figure>
											</div>
											<div class="lqd-fb-content lqd-overlay d-flex items-end">
												<div class="lqd-fb-bg lqd-overlay bg-transparent"
													style="background-image: linear-gradient(180deg, #181B3100 0%, #181B31 100%);">
												</div>
												<div class="lqd-fb-hover-overlay lqd-overlay"></div>
												<div
													class="lqd-fb-content-inner d-flex flex-col justify-between relative h-full w-full p-1/5rem">
													<div class="lqd-fb-content-top">
														<h6 class="mt-0 mb-0">{{@$dynamic_content->title}}</h6>
													</div>
													<div class="lqd-fb-content-bottom">
														<h1 class="lqd-fb__title mt-5 mb-0 font-semibold sizh1">{{@$dynamic_content->excerpt}}</h1>

														<p class="mt-0 mb-3">{!! removeExtraChar(@$dynamic_content->body) !!}</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- End Portfolio -->




								
								
								
								<!-- End Title & Text -->







								@if(@$post_tabs)
								@foreach($post_tabs as $tab)
								<div class="bgpat">
								<section class="lqd-sectoin services-content bkatuka ">
					<div class="container">
						<div class="row">
								<!-- Start Title & Text -->
								<div class="w-full relative ">
									<h2 class="ld-fh-element relative mb-1em text-24">{{@$tab->tab_title}}</h2>
								</div>
								<div class="w-full relative mar">
									<p class="ld-fh-element relative innerf mb-1em">{!! removeExtraChar(@$tab->tab_body) !!}
									
								</div>
								</div>
								</div>
							</section>
								<!-- End Title & Text -->

								

						
								@endforeach
								@endif
								

								

								<!-- Start Accordion -->
							

	
		
				
		</main>

        @endsection














