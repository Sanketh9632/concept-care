@extends('front.layout')

@section('meta')

@section('title', ucwords(strtolower((@$dynamic_contents['seo_title']))))
<meta name="author" content="Concept care">
<meta name="description" content="{!! @$dynamic_contents['meta_description'] !!}">
<meta name="keywords" content="{!! @$dynamic_contents['meta_keywords'] !!}">

@endsection

@section('css')

@endsection

@section('header-script')
{!! @$dynamic_contents['header_script'] !!}
@endsection

@section('main')

<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>



<div class="titlebar scheme-light text-center bg-cover bg-center z-3 bg-blue-900 text-white border-bottom border-black-10"
     style="background-image: url({{@$dynamic_contents->banner_image ? @$dynamic_contents->banner_image : '/assets/img/breadcumb/breadcumb-bg-2.jpg'}});">
    <div class="titlebar-overlay lqd-overlay"></div>
    <div class="lqd-sticky-placeholder hidden"></div>

    <div class="titlebar-inner text-inherit pt-55 pb-100" id="titlebar">
        <div class="container titlebar-container">
            <div class="row titlebar-container flex flex-wrap items-center justify-center">
                <div class="titlebar-col col-12 col-lg-8 col-xl-6 px-15 pura">
                    <h1>
                        @if(@$child_menu_id->name) 
                            {{ @$child_menu_id->name }} 
                        @elseif(@$sub_menu_id->name) 
                            {{ @$sub_menu_id->name }} 
                        @else 
                            {{ @$parent_menu_id->name }} 
                        @endif
                    </h1>
                    <ul class="breadcumb-menu">
                        <li>Home</li>
                        <li>
                            @if(@$child_menu_id->name) 
                                {{ @$child_menu_id->name }} 
                            @elseif(@$sub_menu_id->name) 
                                {{ @$sub_menu_id->name }} 
                            @else 
                                {{ @$parent_menu_id->name }} 
                            @endif
                        </li>
                    </ul>
                    <a class="titlebar-scroll-link" href="#lqd-site-content" data-localscroll="true">
                        <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>



@if($parent_menu_id->layout_name == 'ABOUT')
		<main class="content bg-white" id="lqd-site-content">
			<div id="lqd-contents-wrap">

				<!-- Start Tab Items -->
				<section class="lqd-section tab-items">
					<div class="container">
						<div class="row">
							<div class="col col-12 py-50 px-0">
								<div class="lqd-tabs lqd-tabs-style-3 lqd-tabs-nav-iconbox lqd-tabs-nav-items-not-expanded lqd-nav-underline-"
									data-tabs-options='{"trigger":"click"}'>
									<nav class="lqd-tabs-nav-wrap mb-2rem">
										<ul class="reset-ul lqd-tabs-nav flex items-center justify-center relative border-black-10 md:justify-between"
											role="tablist">
											<li class="text-center" data-controls="lqd-tab-item-1" role="presentation">
												<a class="block text-17 font-bold text-secondary active"
													href="#lqd-tab-item-1" aria-expanded="false"
													aria-controls="lqd-tab-item-1" role="tab" data-bs-toggle="tab">
													<span class="lqd-tabs-nav-icon d-block">
														<span class="lqd-tabs-nav-content d-block">
															<span class="d-block relative h3 mt-0 mb-0">Qualified
																Team</span>
														</span>
													</span>
													<span class="lqd-tabs-nav-progress">
														<span class="lqd-tabs-nav-progress-inner"></span>
													</span>
												</a>
											</li>
											<li class="text-center" data-controls="lqd-tab-item-2" role="presentation">
												<a class="block text-17 font-bold text-secondary" href="#lqd-tab-item-2"
													aria-expanded="false" aria-controls="lqd-tab-item-2" role="tab"
													data-bs-toggle="tab">
													<span class="lqd-tabs-nav-icon d-block">
														<span class="lqd-tabs-nav-content d-block">
															<span class="d-block relative h3 mt-0 mb-0">Qualified
																Team</span>
														</span>
													</span>
													<span class="lqd-tabs-nav-progress">
														<span class="lqd-tabs-nav-progress-inner"></span>
													</span>
												</a>
											</li>
											<li class="text-center" data-controls="lqd-tab-item-3" role="presentation">
												<a class="block text-17 font-bold text-secondary" href="#lqd-tab-item-3"
													aria-expanded="false" aria-controls="lqd-tab-item-3" role="tab"
													data-bs-toggle="tab">
													<span class="lqd-tabs-nav-icon d-block">
														<span class="lqd-tabs-nav-content d-block">
															<span class="d-block relative h3 mt-0 mb-0">Our
																Strategy</span>
														</span>
													</span>
													<span class="lqd-tabs-nav-progress">
														<span class="lqd-tabs-nav-progress-inner"></span>
													</span>
												</a>
											</li>
										</ul>
									</nav>
									<div class="lqd-tabs-content relative px-25percent">
										<div id="lqd-tab-item-1" role="tabpanel" class="lqd-tabs-pane fade active in">
											<p style="text-align: center;">As a leading college in Paris, we look to
												engage with our student beyond the conventional design and development
												school relationship, becoming a partner to the people and companies we
												work with.</p>
										</div>
										<div id="lqd-tab-item-2" role="tabpanel" class="lqd-tabs-pane fade">
											<p style="text-align: center;">As a leading college in Paris, we look to
												engage with our student beyond the conventional design and development
												school relationship, becoming a partner to the people and companies we
												work with.</p>
										</div>
										<div id="lqd-tab-item-3" role="tabpanel" class="lqd-tabs-pane fade">
											<p style="text-align: center;">As a leading college in Paris, we look to
												engage with our student beyond the conventional design and development
												school relationship, becoming a partner to the people and companies we
												work with.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Tab Items -->

				<!-- Start Image Box -->
				<section class="lqd-section image-box pb-130">
					<div class="container">
						<div class="row">
							<div class="col col-12 p-0 module-col">
								<div class="ld-media-row flex flex-wrap -mx-10" data-liquid-masonry="true">
									<div class="masonry-item w-50percent h-645 px-10 mb-20 module-img lg:w-full">
										<div class="ld-media-item pos-rel overflow-hidden h-full">
											<figure class="bg-cover h-full">
												<img class="w-full h-full objfit-cover objpos-center" width="1076"
													height="1146"
													src="./assets/images/demo/company/about/image-box-1.jpg"
													alt="image box">
											</figure>
											<div
												class="ld-media-item-overlay flex flex-col items-center lqd-overlay text-center justify-center">
												<div class="ld-media-bg lqd-overlay"></div>
												<div class="ld-media-content pos-rel z-2">
													<div class="ld-media-txt">
														<h3 class="m-0">Strategy</h3>
														<h6 class="m-0 uppercase ltr-sp-135"></h6>
													</div>
												</div>
											</div>
											<a href="./assets/images/demo/company/about/image-box-1.jpg" target="_blank"
												rel="nofollow" class="lqd-overlay z-2 fresco"
												data-fresco-group="gallery-image-box"></a>
										</div>
									</div>
									<div class="masonry-item w-50percent h-310 px-10 mb-20 module-img lg:w-full">
										<div class="ld-media-item pos-rel overflow-hidden h-full">
											<figure class="bg-cover h-full">
												<img class="w-full h-full objfit-cover objpos-center" width="1182"
													height="546"
													src="./assets/images/demo/company/about/image-box-2.jpg"
													alt="image box">
											</figure>
											<div
												class="ld-media-item-overlay flex flex-col items-center lqd-overlay text-center justify-end">
												<div class="ld-media-bg lqd-overlay"></div>
												<div class="ld-media-content pos-rel z-2">
													<div class="ld-media-txt">
														<h3 class="m-0">Press and Media</h3>
														<h6 class="m-0 uppercase ltr-sp-135"></h6>
													</div>
												</div>
											</div>
											<a href="./assets/images/demo/company/about/image-box-2.jpg"
												class="lqd-overlay z-2 fresco"
												data-fresco-group="gallery-image-box"></a>
										</div>
									</div>
									<div class="masonry-item w-25percent h-310 px-10 mb-20 module-img lg:w-full">
										<div class="ld-media-item pos-rel overflow-hidden h-full">
											<figure class="bg-cover h-full">
												<img class="w-full h-full objfit-cover objpos-center" width="556"
													height="546"
													src="./assets/images/demo/company/about/image-box-3.jpg"
													alt="image box">
											</figure>
											<div
												class="ld-media-item-overlay flex flex-col items-center lqd-overlay text-center justify-end">
												<div class="ld-media-bg lqd-overlay"></div>
												<div class="ld-media-content pos-rel z-2">
													<div class="ld-media-txt">
														<h3 class="m-0">Career</h3>
														<h6 class="m-0 uppercase ltr-sp-135"></h6>
													</div>
												</div>
											</div>
											<a href="./assets/images/demo/company/about/image-box-3.jpg" target="_blank"
												rel="nofollow" class="lqd-overlay z-2 fresco"
												data-fresco-group="gallery-image-box"></a>
										</div>
									</div>
									<div class="masonry-item w-25percent h-310 px-10 mb-20 module-img lg:w-full">
										<div class="ld-media-item pos-rel overflow-hidden h-full">
											<figure class="bg-cover h-full">
												<img class="w-full h-full objfit-cover objpos-center" width="580"
													height="546"
													src="./assets/images/demo/company/about/image-box-4.jpg"
													alt="image box">
											</figure>
											<div
												class="ld-media-item-overlay flex flex-col items-center lqd-overlay text-center justify-end">
												<div class="ld-media-bg lqd-overlay"></div>
												<div class="ld-media-content pos-rel z-2">
													<div class="ld-media-txt">
														<h3 class="m-0">Learn</h3>
														<h6 class="m-0 uppercase ltr-sp-135"></h6>
													</div>
												</div>
											</div>
											<a href="./assets/images/demo/company/about/image-box-4.jpg"
												class="lqd-overlay z-2 fresco"
												data-fresco-group="gallery-image-box"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Image Box -->

				<!-- Start Has Accordion -->
				<section class="lqd-section has-accordion-page pt-100 bg-gray-200">
					<div class="container">
						<div class="row">
							<div class="col col-12 col-xl-6">
								<h2 class="ld-fh-element relative mb-0/5em text-40"> Inspiration, innovation, and
									opportunities.</h2>
								<p class="ld-fh-element relative mb-2/25em"> Take advantage of the experiential-learning
									opportunities built into many programs. You can work in labs on and off</p>
								<div class="accordion accordion-sm accordion-side-spacing accordion-title-round accordion-expander-lg accordion-active-has-fill"
									id="accordion-bg-title" role="tablist" aria-multiselectable="true">
									<div class="accordion-item mb-20 panel animation-element active">
										<div class="accordion-heading" role="tab">
											<h4 class="accordion-title leading-1/5em text-blue-300" id="heading-1">
												<a class="py-0/65em px-1/5em bg-white text-16 font-bold" role="button"
													data-bs-toggle="collapse" href="#collapse-1" aria-expanded="true"
													aria-controls="collapse-1">
													<span class="accordion-title-txt">Hub Business' Vision</span>
													<span class="accordion-expander text-22">
														<i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
														<i class="lqd-icn-ess icon-ion-ios-arrow-up"></i>
													</span>
												</a>
											</h4>
										</div>
										<div class="accordion-collapse collapse show" id="collapse-1"
											data-bs-parent="#accordion-bg-title" role="tabpanel"
											aria-labelledby="heading-1">
											<div class="pt-1/5em pl-1/5em">
												<p class="m-0">Take advantage of the experiential-learning opportunities
													built into many programs. You can work in labs on and off</p>
											</div>
										</div>
									</div>
									<div class="accordion-item mb-20 panel animation-element">
										<div class="accordion-heading" role="tab">
											<h4 class="accordion-title leading-1/5em text-blue-300" id="heading-2">
												<a class="collapsed py-0/65em px-1/5em bg-white text-16 font-bold"
													role="button" data-bs-toggle="collapse" href="#collapse-2"
													aria-expanded="false" aria-controls="collapse-2">
													<span class="accordion-title-txt">Our mission for
														Sustainability</span>
													<span class="accordion-expander text-22">
														<i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
														<i class="lqd-icn-ess icon-ion-ios-arrow-up"></i>
													</span>
												</a>
											</h4>
										</div>
										<div class="accordion-collapse collapse" id="collapse-2"
											data-bs-parent="#accordion-bg-title" role="tabpanel"
											aria-labelledby="heading-2">
											<div class="pt-1/5em pl-1/5em">
												<p class="m-0">Take advantage of the experiential-learning opportunities
													built into many programs. You can work in labs on and off</p>
											</div>
										</div>
									</div>
									<div class="accordion-item panel animation-element">
										<div class="accordion-heading" role="tab">
											<h4 class="accordion-title leading-1/5em text-blue-300" id="heading-3">
												<a class="collapsed py-0/65em px-1/5em bg-white text-16 font-bold"
													role="button" data-bs-toggle="collapse" href="#collapse-3"
													aria-expanded="false" aria-controls="collapse-3">
													<span class="accordion-title-txt">Qualified Team</span>
													<span class="accordion-expander text-22">
														<i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
														<i class="lqd-icn-ess icon-ion-ios-arrow-up"></i>
													</span>
												</a>
											</h4>
										</div>
										<div class="accordion-collapse collapse" id="collapse-3"
											data-bs-parent="#accordion-bg-title" role="tabpanel"
											aria-labelledby="heading-3">
											<div class="pt-1/5em pl-1/5em">
												<p class="m-0">Take advantage of the experiential-learning opportunities
													built into many programs. You can work in labs on and off</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col col-12 col-xl-6 p-0">
								<div class="w-full relative flex items-center pl-20percent rounded-8 z-1 module-col"
									data-parallax="true"
									data-parallax-options='{"ease":["linear"],"start":"top bottom","end":"bottom+=0px top"}'
									data-parallax-from='{"y":"60px"}' data-parallax-to='{"y":"-75px"}'>
									<div class="lqd-imggrp-single block pos-rel rounded-inherit" data-shadow-style="4">
										<div
											class="lqd-imggrp-img-container inline-flex pos-rel items-center justify-center rounded-inherit">
											<figure class="w-full pos-rel">
												<img class="rounded-inherit" width="592" height="674"
													src="./assets/images/demo/company/about/has-accordion.jpg"
													alt="has accordion">
											</figure>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Has Accordion -->

				<!-- Start Icon Box -->
				<section class="lqd-section icon-box-page bg-gray-200 pt-90 pb-100" data-custom-animations="true"
					data-ca-options='{"addChildTimelines":false,"animationTarget":".col","ease":["power4.out"],"initValues":{"opacity":0},"animations":{"opacity":1}}'>
					<div class="container">
						<div class="row">
							<div class="col col-12 text-center flex flex-wrap p-0">
								<div class="col col-12 col-md-6 col-xl-3 p-0">
									<div class="flex flex-auto p-15 transition-all">
										<div class="iconbox flex-grow-1 relative flex-col iconbox-default iconbox-contents-show-onhover py-40 px-20 mb-30 items-center bg-white rounded-10 shadow-bottom lg:m-0"
											data-slideelement-onhover="true"
											data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3", "hiddenElement":  ".btn", "alignMid":  true, "triggerElement":  ".iconbox" }'>
											<div class="iconbox-icon-wrap">
												<div class="mb-25 iconbox-icon-container inline-flex w-40 text-50">
													<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
														viewbox="0 0 50 50">
														<path
															d="M4.15-19.775a8.008,8.008,0,0,0,5.908-2.466A8.072,8.072,0,0,0,12.5-28.125V-42.48L18.115-37.7l1.465-1.66L11.67-46.24,3.76-39.355,5.225-37.7,10.4-42.48v14.355a6.082,6.082,0,0,1-1.782,4.443A6.017,6.017,0,0,1,4.15-21.875H-6.25a5.843,5.843,0,0,0-3.223.977,10.241,10.241,0,0,0-2.661,2.515,12.919,12.919,0,0,0-1.807,3.369,10.428,10.428,0,0,0-.659,3.54v6.25h2.1v-6.25a10.192,10.192,0,0,1,1.807-5.469q1.807-2.832,4.443-2.832Zm-25-25h25v-2.1h-25a4,4,0,0,0-2.93,1.221A4,4,0,0,0-25-42.725v41.7A4,4,0,0,0-23.779,1.9a4,4,0,0,0,2.93,1.221v-2.1A2.013,2.013,0,0,1-22.339.464,2.013,2.013,0,0,1-22.9-1.025v-41.7a2.013,2.013,0,0,1,.562-1.489A2.013,2.013,0,0,1-20.85-44.775Zm6.25,47.9h2.1v-4.15h-2.1Zm.83-32.52L-10.4-32.91l3.32,3.516,1.66-1.66-3.516-3.32L-5.42-37.7l-1.66-1.66L-10.4-35.84l-3.369-3.516-1.66,1.66,3.564,3.32-3.564,3.32ZM15.82-14.355,12.5-10.84,9.18-14.355,7.52-12.7l3.516,3.32L7.52-6.055l1.66,1.66L12.5-7.91l3.32,3.516,1.66-1.66-3.516-3.32L17.48-12.7ZM22.9-42.725H25a4,4,0,0,0-1.221-2.93,4,4,0,0,0-2.93-1.221h-2.1v2.1h2.1a2.013,2.013,0,0,1,1.489.562A2.013,2.013,0,0,1,22.9-42.725Zm0,41.7A2.013,2.013,0,0,1,22.339.464a2.013,2.013,0,0,1-1.489.562H-6.25v2.1h27.1A4,4,0,0,0,23.779,1.9,4,4,0,0,0,25-1.025v-29.2H22.9Zm0-33.35H25v-4.15H22.9Z"
															transform="translate(25 46.875)" fill="#184341"></path>
													</svg>
												</div>
											</div>
											<h3 class="lqd-iconbox-heading text-center text-16 leading-1em mb-0">
												Diversity and Inclusion </h3>
											<div class="contents">
												<p>International Partners</p>
												<a href="./page-company-services.html"
													class="btn btn-naked btn-icon-right btn-hover-swp mt-em mb-0 items-center text-15 font-bold text-secondary hover:text-primary">
													<span class="btn-txt" data-text="Learn more">Learn more</span>
													<span class="btn-icon text-16 tracking-0">
														<i class="lqd-icn-ess icon-md-arrow-round-forward-2"></i>
													</span>
													<span class="btn-icon mr-10 text-16 tracking-0">
														<i class="lqd-icn-ess icon-md-arrow-round-forward-2"></i>
													</span>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col col-12 col-md-6 col-xl-3 p-0">
									<div class="flex flex-auto p-15 transition-all">
										<div class="iconbox flex-grow-1 relative flex-col iconbox-default iconbox-contents-show-onhover py-40 px-20 mb-30 items-center bg-white rounded-10 shadow-bottom lg:m-0"
											data-slideelement-onhover="true"
											data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3", "hiddenElement":  ".btn", "alignMid":  true, "triggerElement":  ".iconbox" }'>
											<div class="iconbox-icon-wrap">
												<div class="mb-25 iconbox-icon-container inline-flex w-40 text-50">
													<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
														viewbox="0 0 50 50">
														<path
															d="M-1.27-11.865-8.35-5.225l-7.08-6.641a15.456,15.456,0,0,0-3.857,2.441,16.207,16.207,0,0,0-3.027,3.467,16.786,16.786,0,0,0-1.978,4.272A16.381,16.381,0,0,0-25,3.125H8.35a16.381,16.381,0,0,0-.708-4.81A16.786,16.786,0,0,0,5.664-5.957,16.207,16.207,0,0,0,2.637-9.424,15.16,15.16,0,0,0-1.27-11.865ZM-22.705,1.025A14.51,14.51,0,0,1-20.41-4.956a14.049,14.049,0,0,1,4.785-4.419l7.275,7.08,7.52-7.08A15.276,15.276,0,0,1,3.882-4.956,13.977,13.977,0,0,1,6.25,1.025Zm14.355-12.5a8.048,8.048,0,0,0,5.908-2.441A7.991,7.991,0,0,0,0-19.775v-4.2H-2.1v4.2a6.082,6.082,0,0,1-1.782,4.443A6.017,6.017,0,0,1-8.35-13.525a6.04,6.04,0,0,1-4.443-1.807A6.04,6.04,0,0,1-14.6-19.775v-4.2h6.25a8.048,8.048,0,0,0,5.908-2.441A7.991,7.991,0,0,0,0-32.275H-12.5a4,4,0,0,0-2.93,1.221,4,4,0,0,0-1.221,2.93v8.35a7.991,7.991,0,0,0,2.441,5.859A7.991,7.991,0,0,0-8.35-11.475Zm-6.25-16.65a2.048,2.048,0,0,1,.586-1.514,2.048,2.048,0,0,1,1.514-.586H-2.49a6.014,6.014,0,0,1-2.222,3.052A6.049,6.049,0,0,1-8.35-26.025H-14.6Zm18.75-8.35h12.5v-2.051H4.15Zm0,6.25h12.5v-2.051H4.15Zm-6.25-12.5a1.967,1.967,0,0,1,.586-1.489A2.1,2.1,0,0,1,0-44.775H20.85a2.013,2.013,0,0,1,1.489.562,2.013,2.013,0,0,1,.562,1.489H25a4,4,0,0,0-1.221-2.93,4,4,0,0,0-2.93-1.221H0a4,4,0,0,0-2.93,1.221,4,4,0,0,0-1.221,2.93v6.25H-2.1Zm25,8.35H25v-4.15H22.9Zm0,8.35a2.013,2.013,0,0,1-.562,1.489,2.013,2.013,0,0,1-1.489.562H13.965l-5.615,4.2v-4.2H4.15v2.1h2.1v6.25l8.35-6.25h6.25a4,4,0,0,0,2.93-1.221A4,4,0,0,0,25-26.025v-4.2H22.9Z"
															transform="translate(25 46.875)" fill="#184341"></path>
													</svg>
												</div>
											</div>
											<h3 class="lqd-iconbox-heading text-center text-16 leading-1em mb-0">
												Diversity and Inclusion </h3>
											<div class="contents">
												<p>International Partners</p>
												<a href="./page-company-services.html"
													class="btn btn-naked btn-icon-right btn-hover-swp mt-em mb-0 items-center text-15 font-bold text-secondary hover:text-primary">
													<span class="btn-txt" data-text="Learn more">Learn more</span>
													<span class="btn-icon text-16 tracking-0">
														<i class="lqd-icn-ess icon-md-arrow-round-forward-2"></i>
													</span>
													<span class="btn-icon mr-10 text-16 tracking-0">
														<i class="lqd-icn-ess icon-md-arrow-round-forward-2"></i>
													</span>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col col-12 col-md-6 col-xl-3 p-0">
									<div class="flex flex-auto p-15 transition-all">
										<div class="iconbox flex-grow-1 relative flex-col iconbox-default iconbox-contents-show-onhover py-40 px-20 mb-30 items-center bg-white rounded-10 shadow-bottom lg:m-0"
											data-slideelement-onhover="true"
											data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3", "hiddenElement":  ".btn", "alignMid":  true, "triggerElement":  ".iconbox" }'>
											<div class="iconbox-icon-wrap">
												<div class="mb-25 iconbox-icon-container inline-flex w-40 text-50">
													<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
														viewbox="0 0 50 50">
														<path
															d="M-2.1-31.25a1.023,1.023,0,0,0-.269-.757,1.023,1.023,0,0,0-.757-.269H-8.35V-37.5a1.023,1.023,0,0,0-.269-.757,1.023,1.023,0,0,0-.757-.269,1.023,1.023,0,0,0-.757.269,1.023,1.023,0,0,0-.269.757v5.225h-5.225a1.023,1.023,0,0,0-.757.269,1.023,1.023,0,0,0-.269.757,1.023,1.023,0,0,0,.269.757,1.023,1.023,0,0,0,.757.269H-10.4V-25a1.023,1.023,0,0,0,.269.757,1.023,1.023,0,0,0,.757.269,1.023,1.023,0,0,0,.757-.269A1.023,1.023,0,0,0-8.35-25v-5.225h5.225a1.023,1.023,0,0,0,.757-.269A1.023,1.023,0,0,0-2.1-31.25ZM15.625-17.725H5.225a1.056,1.056,0,0,0-.781.293,1.056,1.056,0,0,0-.293.781.994.994,0,0,0,.293.732,1.056,1.056,0,0,0,.781.293h10.4a.975.975,0,0,0,.757-.293,1.043,1.043,0,0,0,.269-.732,1.111,1.111,0,0,0-.269-.781A.975.975,0,0,0,15.625-17.725Zm0,8.35H5.225a1.056,1.056,0,0,0-.781.293.994.994,0,0,0-.293.732,1.056,1.056,0,0,0,.293.781,1.056,1.056,0,0,0,.781.293h10.4a.975.975,0,0,0,.757-.293,1.111,1.111,0,0,0,.269-.781,1.043,1.043,0,0,0-.269-.732A.975.975,0,0,0,15.625-9.375Zm-10.4-20.85h10.4a1.023,1.023,0,0,0,.757-.269,1.023,1.023,0,0,0,.269-.757,1.023,1.023,0,0,0-.269-.757,1.023,1.023,0,0,0-.757-.269H5.225a1.111,1.111,0,0,0-.781.269.975.975,0,0,0-.293.757.975.975,0,0,0,.293.757A1.111,1.111,0,0,0,5.225-30.225ZM-3.32-18.555a1.136,1.136,0,0,0-.757-.293.965.965,0,0,0-.708.293L-9.18-14.16l-4.346-4.395a1.136,1.136,0,0,0-.757-.293.965.965,0,0,0-.708.293,1.05,1.05,0,0,0-.342.757.9.9,0,0,0,.342.708l4.346,4.395L-14.99-8.35a1.05,1.05,0,0,0-.342.757.9.9,0,0,0,.342.708.559.559,0,0,0,.317.171,3.945,3.945,0,0,0,.513.024,4.048,4.048,0,0,0,.488-.024.574.574,0,0,0,.342-.171l4.395-4.346L-4.59-6.885a.574.574,0,0,0,.342.171,4.048,4.048,0,0,0,.488.024,3.945,3.945,0,0,0,.513-.024.559.559,0,0,0,.317-.171.9.9,0,0,0,.342-.708A1.05,1.05,0,0,0-2.93-8.35L-7.275-12.7-2.93-17.09a1.107,1.107,0,0,1-.2-.635A2.829,2.829,0,0,0-3.32-18.555ZM16.65-46.875v2.1a6.06,6.06,0,0,1,4.468,1.782A6.06,6.06,0,0,1,22.9-38.525v33.3A6.06,6.06,0,0,1,21.118-.757,6.06,6.06,0,0,1,16.65,1.025h-33.3A6.06,6.06,0,0,1-21.118-.757,6.06,6.06,0,0,1-22.9-5.225v-33.3a6.06,6.06,0,0,1,1.782-4.468,6.06,6.06,0,0,1,4.468-1.782H4.15v-2.1h-20.8a8.048,8.048,0,0,0-5.908,2.441A8.048,8.048,0,0,0-25-38.525v33.3A8.048,8.048,0,0,0-22.559.684,8.048,8.048,0,0,0-16.65,3.125h33.3A8.048,8.048,0,0,0,22.559.684,8.048,8.048,0,0,0,25-5.225v-33.3a8.048,8.048,0,0,0-2.441-5.908A8.048,8.048,0,0,0,16.65-46.875Zm-8.3,2.1H12.5v-2.1H8.35Z"
															transform="translate(25 46.875)" fill="#184341"></path>
													</svg>
												</div>
											</div>
											<h3 class="lqd-iconbox-heading text-center text-16 leading-1em mb-0">
												Diversity and Inclusion </h3>
											<div class="contents">
												<p>International Partners</p>
												<a href="./page-company-services.html"
													class="btn btn-naked btn-icon-right btn-hover-swp mt-em mb-0 items-center text-15 font-bold text-secondary hover:text-primary">
													<span class="btn-txt" data-text="Learn more">Learn more</span>
													<span class="btn-icon text-16 tracking-0">
														<i class="lqd-icn-ess icon-md-arrow-round-forward-2"></i>
													</span>
													<span class="btn-icon mr-10 text-16 tracking-0">
														<i class="lqd-icn-ess icon-md-arrow-round-forward-2"></i>
													</span>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col col-12 col-md-6 col-xl-3 p-0">
									<div class="flex flex-auto p-15 transition-all">
										<div class="iconbox flex-grow-1 relative flex-col iconbox-default iconbox-contents-show-onhover py-40 px-20 mb-30 items-center bg-white rounded-10 shadow-bottom lg:m-0"
											data-slideelement-onhover="true"
											data-slideelement-options='{ "visibleElement":  ".iconbox-icon-wrap, p, h3", "hiddenElement":  ".btn", "alignMid":  true, "triggerElement":  ".iconbox" }'>
											<div class="iconbox-icon-wrap">
												<div class="mb-25 iconbox-icon-container inline-flex w-40 text-50">
													<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
														viewbox="0 0 50 50">
														<path
															d="M-12.5-23.975a12.164,12.164,0,0,0,.977,4.858,12.625,12.625,0,0,0,2.686,3.979,12.625,12.625,0,0,0,3.979,2.686A12.164,12.164,0,0,0,0-11.475a12.164,12.164,0,0,0,4.858-.977,12.625,12.625,0,0,0,3.979-2.686,12.625,12.625,0,0,0,2.686-3.979,12.164,12.164,0,0,0,.977-4.858,12.219,12.219,0,0,0-.977-4.834,12.267,12.267,0,0,0-2.686-3.979,13.194,13.194,0,0,0-3.979-2.686,11.909,11.909,0,0,0-4.858-1,11.909,11.909,0,0,0-4.858,1,13.194,13.194,0,0,0-3.979,2.686,12.267,12.267,0,0,0-2.686,3.979A12.219,12.219,0,0,0-12.5-23.975ZM0-34.375a10.52,10.52,0,0,1,4.321.879,10.008,10.008,0,0,1,3.394,2.441L-2.1-21.24l-3.32-3.32-1.465,1.416,5.029,5.029L9.18-29.15a23.614,23.614,0,0,1,.83,2.441,9.912,9.912,0,0,1,.391,2.734,10.417,10.417,0,0,1-.806,4.1,10.549,10.549,0,0,1-2.2,3.32,10.063,10.063,0,0,1-3.3,2.222,10.417,10.417,0,0,1-4.1.806,10.417,10.417,0,0,1-4.1-.806,10.063,10.063,0,0,1-3.3-2.222,10.549,10.549,0,0,1-2.2-3.32,10.417,10.417,0,0,1-.806-4.1,10.293,10.293,0,0,1,.806-4.053,10.549,10.549,0,0,1,2.2-3.32,10.063,10.063,0,0,1,3.3-2.222A10.417,10.417,0,0,1,0-34.375Zm2.1-10.4H6.25v-2.1H2.1Zm12.5-2.1H10.4v2.1H12.7a12.335,12.335,0,0,0,1.245,3.662,12.644,12.644,0,0,0,2.246,3.052,12.644,12.644,0,0,0,3.052,2.246A12.335,12.335,0,0,0,22.9-34.57v12.7a12.106,12.106,0,0,1-2.588,7.2,37.292,37.292,0,0,1-6.2,6.567A56.254,56.254,0,0,1,6.567-2.759Q2.637-.439,0,.83-2.637-.439-6.567-2.759a56.254,56.254,0,0,1-7.544-5.347,37.292,37.292,0,0,1-6.2-6.567,12.106,12.106,0,0,1-2.588-7.2v-12.7a12.335,12.335,0,0,0,3.662-1.245,12.644,12.644,0,0,0,3.052-2.246,12.644,12.644,0,0,0,2.246-3.052A12.335,12.335,0,0,0-12.7-44.775H-2.1v-2.1H-14.6a10.417,10.417,0,0,1-.806,4.1,10.258,10.258,0,0,1-2.2,3.3,10.258,10.258,0,0,1-3.3,2.2,10.417,10.417,0,0,1-4.1.806v14.6a14.662,14.662,0,0,0,3.906,9.717A49.988,49.988,0,0,0-12.5-4.224,65.054,65.054,0,0,0-3.906,1.147L0,3.125,3.906,1.147A65.054,65.054,0,0,0,12.5-4.224a49.988,49.988,0,0,0,8.594-7.935A14.662,14.662,0,0,0,25-21.875v-14.6a10.417,10.417,0,0,1-4.1-.806,10.258,10.258,0,0,1-3.3-2.2,10.258,10.258,0,0,1-2.2-3.3A10.417,10.417,0,0,1,14.6-46.875Z"
															transform="translate(25 46.875)" fill="#184341"></path>
													</svg>
												</div>
											</div>
											<h3 class="lqd-iconbox-heading text-center text-16 leading-1em mb-0">
												Diversity and Inclusion </h3>
											<div class="contents">
												<p>International Partners</p>
												<a href="./page-company-services.html"
													class="btn btn-naked btn-icon-right btn-hover-swp mt-em mb-0 items-center text-15 font-bold text-secondary hover:text-primary">
													<span class="btn-txt" data-text="Learn more">Learn more</span>
													<span class="btn-icon text-16 tracking-0">
														<i class="lqd-icn-ess icon-md-arrow-round-forward-2"></i>
													</span>
													<span class="btn-icon mr-10 text-16 tracking-0">
														<i class="lqd-icn-ess icon-md-arrow-round-forward-2"></i>
													</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Icon Box -->

				<!-- Start Team -->
				<section class="lqd-section team pt-100 pb-65">
					<div class="container">
						<div class="row">
							<div class="col col-12">
								<div class="w-full flex flex-col items-center text-center px-15percent pb-10 sm:px-0">
									<h2 class="ld-fh-element relative mb-0/5em"> Our Team</h2>
									<p class="ld-fh-element relative mb-0/5em">As a leading college in Paris, we look to
										engage with our student beyond the conventional design and development school
										relationship, becoming a partner to the people.</p>
								</div>
								<div class="container-fluid">
									<div class="row">
										<div class="col col-12 col-md-4 flex flex-col items-start text-start p-20 module-col"
											data-custom-animations="true"
											data-ca-options='{"addChildTimelines":false,"animationTarget":"img, h4, h6, p","duration":1200,"startDelay":200,"delay":100,"ease":["power4.out"],"initValues":{"y":"20px","opacity":0},"animations":{"y":"0px","opacity":1}}'>
											<img class="mb-1em" width="660" height="492"
												src="./assets/images/demo/company/about/team-1.jpg" alt="team">
											<h4 class="ld-fh-element relative mb-0/5em text-24 font-bold"> Gilbert
												Hughes</h4>
											<div class="ld-fancy-heading p-5 mb-0/6em bg-accent rounded-6">
												<h6
													class="ld-fh-element relative p-5 mb-0/5em text-10 uppercase font-normal leading-1em tracking-1 text-gray-400">
													Proffessor</h6>
											</div>
											<p class="ld-fh-element relative mb-0/5em text-15 leading-1/6em"> Gilbert
												Hughes joined Hub Constructon in 1955 as an estimator/project manager,
												after previously working months as a laborer.</p>
										</div>
										<div class="col col-12 col-md-4 flex flex-col items-start text-start p-20 module-col"
											data-custom-animations="true"
											data-ca-options='{"addChildTimelines":false,"animationTarget":"img, h4, h6, p","duration":1200,"startDelay":200,"delay":100,"ease":["power4.out"],"initValues":{"y":"20px","opacity":0},"animations":{"y":"0px","opacity":1}}'>
											<img class="mb-1em" width="660" height="492"
												src="./assets/images/demo/company/about/team-2.jpg" alt="team">
											<h4 class="ld-fh-element relative mb-0/5em text-24 font-bold"> Erik Genie
											</h4>
											<div class="ld-fancy-heading p-5 mb-0/6em bg-accent rounded-6">
												<h6
													class="ld-fh-element relative p-5 mb-0/5em text-10 uppercase font-normal leading-1em tracking-1 text-gray-400">
													Proffessor</h6>
											</div>
											<p class="ld-fh-element relative mb-0/5em text-15 leading-1/6em"> Gilbert
												Hughes joined Hub Constructon in 1955 as an estimator/project manager,
												after previously working months as a laborer.</p>
										</div>
										<div class="col col-12 col-md-4 flex flex-col items-start text-start p-20 module-col"
											data-custom-animations="true"
											data-ca-options='{"addChildTimelines":false,"animationTarget":"img, h4, h6, p","duration":1200,"startDelay":200,"delay":100,"ease":["power4.out"],"initValues":{"y":"20px","opacity":0},"animations":{"y":"0px","opacity":1}}'>
											<img class="mb-1em" width="660" height="492"
												src="./assets/images/demo/company/about/team-3.jpg" alt="team">
											<h4 class="ld-fh-element relative mb-0/5em text-24 font-bold"> Mary Hughes
											</h4>
											<div class="ld-fancy-heading p-5 mb-0/6em bg-accent rounded-6">
												<h6
													class="ld-fh-element relative p-5 mb-0/5em text-10 uppercase font-normal leading-1em tracking-1 text-gray-400">
													Proffessor</h6>
											</div>
											<p class="ld-fh-element relative mb-0/5em text-15 leading-1/6em"> Gilbert
												Hughes joined Hub Constructon in 1955 as an estimator/project manager,
												after previously working months as a laborer.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Team -->

				<!-- Start Counters -->
				<section class="lqd-section counters bg-cover bg-top-center transition-all pt-110 pb-75"
					style="background-image: url(./assets/images/demo/company/about/counters.jpg);">
					<div class="background-overlay bg-transparent transition-all opacity-100"
						style="background-image: linear-gradient(137deg, #184341 0%, #2D3544D4 100%);"></div>
					<div class="container">
						<div class="row">
							<div class="col col-6 col-md-3 flex flex-col items-center justify-center">
								<div class="icon-wrapper text-center mb-20">
									<div
										class="inline-block transition-all border-white text-center text-50 leading-1em text-white">
										<i aria-hidden="true"
											class="lqd-icn-ess icon-lqd-compass w-1em h-1em relative block"></i>
									</div>
								</div>
								<div
									class="lqd-counter relative text-center lqd-counter-default text-white mb-30 transition-all">
									<div class="lqd-counter-element relative mb-0/3em text-54 font-bold tracking-1/5"
										data-enable-counter="true" data-counter-options='{"targetNumber":"70+"}'>
										<span class="block">70+</span>
									</div>
									<span class="lqd-counter-text text-white-70">Country</span>
								</div>
							</div>
							<div class="col col-6 col-md-3 flex flex-col items-center justify-center">
								<div class="icon-wrapper text-center mb-20">
									<div
										class="inline-block transition-all border-white text-center text-50 leading-1em text-white">
										<i aria-hidden="true"
											class="lqd-icn-ess icon-speech-bubble w-1em h-1em relative block"></i>
									</div>
								</div>
								<div
									class="lqd-counter relative text-center lqd-counter-default text-white mb-30 transition-all">
									<div class="lqd-counter-element relative mb-0/3em text-54 font-bold tracking-1/5"
										data-enable-counter="true" data-counter-options='{"targetNumber":"60"}'>
										<span class="block">60</span>
									</div>
									<span class="lqd-counter-text text-white-70"> Awards and Medals </span>
								</div>
							</div>
							<div class="col col-6 col-md-3 flex flex-col items-center justify-center">
								<div class="icon-wrapper text-center mb-20">
									<div
										class="inline-block transition-all border-white text-center text-50 leading-1em text-white">
										<i aria-hidden="true"
											class="lqd-icn-ess icon-lqd-user w-1em h-1em relative block"></i>
									</div>
								</div>
								<div
									class="lqd-counter relative text-center lqd-counter-default text-white mb-30 transition-all">
									<div class="lqd-counter-element relative mb-0/3em text-54 font-bold tracking-1/5"
										data-enable-counter="true" data-counter-options='{"targetNumber":"130k+"}'>
										<span class="block">130k+</span>
									</div>
									<span class="lqd-counter-text text-white-70"> International Customers</span>
								</div>
							</div>
							<div class="col col-6 col-md-3 flex flex-col items-center justify-center">
								<div class="icon-wrapper text-center mb-20">
									<div
										class="inline-block transition-all border-white text-center text-50 leading-1em text-white">
										<i aria-hidden="true"
											class="lqd-icn-ess icon-lqd-atom w-1em h-1em relative block"></i>
									</div>
								</div>
								<div
									class="lqd-counter relative text-center lqd-counter-default text-white mb-30 transition-all">
									<div class="lqd-counter-element relative mb-0/3em text-54 font-bold tracking-1/5"
										data-enable-counter="true" data-counter-options='{"targetNumber":"21+"}'>
										<span class="block">21+</span>
									</div>
									<span class="lqd-counter-text text-white-70">Facilities</span>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Counters -->

				<!-- Start Title Box -->
				<section class="lqd-section title-box pt-50">
					<div class="container">
						<div class="row">
							<div class="col col-12 flex flex-col items-center text-center p-20 mb-20">
								<h6 class="ld-fh-element relative mb-0/5em"> A deep commitment to diversity</h6>
								<h2 class="ld-fh-element relative mb-0/5em"> Business Partners</h2>
							</div>
						</div>
					</div>
				</section>
				<!-- End Title Box -->

				<!-- Start Partners -->
				<section class="lqd-section partners">
					<div class="container">
						<div class="row">
							<div class="col col-12 col-md-6">
								<div class="w-full relative flex flex-wrap transition-all border-1 border-gray-100">
									<div
										class="w-35percent relative flex items-center justify-center transition-all lg:w-full">
										<img class="h-305 objfit-cover opacity-100" width="460" height="548"
											src="./assets/images/demo/company/about/partner-1.jpg" alt="partner">
									</div>
									<div
										class="w-65percent relative flex flex-col justify-center py-15 px-55 module-contnet lg:w-full">
										<h3 class="ld-fh-element relative mb-1/5em text-16"> Daniel James, Stripe</h3>
										<p
											class="ld-fh-element relative mb-0/5em  lqd-highlight-classic lqd-highlight-grow-left p">
											By enrolling in the Four Bear Program, UM guarantees you will graduate in
											four years with a bachelor’s degree. Discover the global city—filled with
											inspiration, opportunities to explore.</p>
									</div>
								</div>
							</div>
							<div class="col col-12 col-md-6">
								<div class="w-full relative flex flex-wrap transition-all border-1 border-gray-100">
									<div
										class="w-35percent relative flex items-center justify-center transition-all lg:w-full">
										<img class="h-305 objfit-cover opacity-100" width="460" height="548"
											src="./assets/images/demo/company/about/partner-2.jpg" alt="partner">
									</div>
									<div
										class="w-65percent relative flex flex-col justify-center py-15 px-55 module-contnet lg:w-full">
										<h3 class="ld-fh-element relative mb-1/5em text-16"> Shane Dore, PayPal</h3>
										<p
											class="ld-fh-element relative mb-0/5em  lqd-highlight-classic lqd-highlight-grow-left p">
											By enrolling in the Four Bear Program, UM guarantees you will graduate in
											four years with a bachelor’s degree. Discover the global city—filled with
											inspiration, opportunities to explore.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Partners -->

				<!-- Start Text Naked -->
				<section class="lqd-section text-naked pt-20 pb-95">
					<div class="container">
						<div class="row">
							<div class="col col-12 text-center">
								<p class="ld-fh-element relative mb-0/5em"> Our nearly 8,000 committed staff members are
									ready to help.</p>
							</div>
						</div>
					</div>
				</section>
				<!-- End Text Naked -->

				<!-- Start Clients -->
				<section class="lqd-section clients transition-all border-y-1 border-black-10 py-25">
					<div class="container">
						<div class="row items-center">
							<div class="col col-12 col-xl-3 lg:text-center">
								<h6 class="ld-fh-element relative mb-0/5em text-13 uppercase tracking-1 text-black">
									Trusted by global brands</h6>
							</div>
							<div class="col col-12 col-xl-9">
								<div class="w-full relative flex flex-wrap items-center justify-start">
									<div class="w-20percent flex items-center justify-center sm:w-50percent">
										<div class="lqd-imggrp-single block relative w-full p-15 text-center">
											<div
												class="lqd-imggrp-img-container relative inline-flex items-center justify-center">
												<figure class="w-full relative">
													<img src="./assets/images/demo/company/about/client-facebook.svg"
														alt="client">
												</figure>
											</div>
										</div>
									</div>
									<div class="w-20percent flex items-center justify-center sm:w-50percent">
										<div class="lqd-imggrp-single block relative w-full p-15 text-center">
											<div
												class="lqd-imggrp-img-container relative inline-flex items-center justify-center">
												<figure class="w-full relative">
													<img src="./assets/images/demo/company/about/client-paypal-logo.svg"
														alt="client">
												</figure>
											</div>
										</div>
									</div>
									<div class="w-20percent flex items-center justify-center sm:w-50percent">
										<div class="lqd-imggrp-single block relative w-full p-15 text-center">
											<div
												class="lqd-imggrp-img-container relative inline-flex items-center justify-center">
												<figure class="w-full relative">
													<img src="./assets/images/demo/company/about/client-logitech-2-1.svg"
														alt="client">
												</figure>
											</div>
										</div>
									</div>
									<div class="w-20percent flex items-center justify-center sm:w-50percent">
										<div class="lqd-imggrp-single block relative w-full p-15 text-center">
											<div
												class="lqd-imggrp-img-container relative inline-flex items-center justify-center">
												<figure class="w-full relative">
													<img src="./assets/images/demo/company/about/client-apper.svg"
														alt="client">
												</figure>
											</div>
										</div>
									</div>
									<div class="w-20percent flex items-center justify-center sm:w-50percent">
										<div class="lqd-imggrp-single block relative w-full p-15 text-center">
											<div
												class="lqd-imggrp-img-container relative inline-flex items-center justify-center">
												<figure class="w-full relative">
													<img src="./assets/images/demo/company/about/client-amazon-2.svg"
														alt="client">
												</figure>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Clients -->

			</div>
			<!-- End lqd-contents-wrap -->
		</main>

@elseif($parent_menu_id->layout_name == 'SERVICES')

<section class="space-top">
    <div class="container">
        <div class="row gy-30">

            @foreach(@$services as $service)
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-card">
                    <div class="service-card_icon">
                        <img class="svg-img" src="{{@$service->image}}" alt="service image">
                    </div>
                    <p class="service-card_num">01</p>
                    <a href="{{route('service-detail',[@$service->slug])}}">
                        <h3 class="service-card_title">{{@$service->title}}</h3>
                    </a>
                    <p class="service-card_text">{{@$service->excerpt}}</p>
                </div>
            </div>
            @endforeach

            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-card">
                    <div class="service-card_icon">
                        <img class="svg-img" src="assets/img/icon/service_1_1.svg" alt="service image">
                    </div>
                    <p class="service-card_num">01</p>
                    <h3 class="service-card_title">Architecture</h3>
                    <p class="service-card_text">We see architecture as the composition of all elements that define a particular space and inform the character of a building.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-card">
                    <div class="service-card_icon">
                        <img class="svg-img" src="assets/img/icon/service_1_2.svg" alt="service image">
                    </div>
                    <p class="service-card_num">02</p>
                    <h3 class="service-card_title">Interior Design</h3>
                    <p class="service-card_text">In Order architecture as the composition of all elements that define a particular space and inform the character of a interior.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-card">
                    <div class="service-card_icon">
                        <img class="svg-img" src="assets/img/icon/service_1_3.svg" alt="service image">
                    </div>
                    <p class="service-card_num">03</p>
                    <h3 class="service-card_title">Urban Interventions</h3>
                    <p class="service-card_text">The Urban architecture as the composition of all elements that define a particular space and inform the character of into.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-card">
                    <div class="service-card_icon">
                        <img class="svg-img" src="assets/img/icon/service_1_4.svg" alt="service image">
                    </div>
                    <p class="service-card_num">04</p>
                    <h3 class="service-card_title">Landscape Design</h3>
                    <p class="service-card_text">The Best architecture as composition of all elements that define a particular space and inform the character of a Landscape.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-card">
                    <div class="service-card_icon">
                        <img class="svg-img" src="assets/img/icon/service_1_5.svg" alt="service image">
                    </div>
                    <p class="service-card_num">05</p>
                    <h3 class="service-card_title">Interdisciple Entity</h3>
                    <p class="service-card_text">You see architecture as the composition of all elements that define a particular space and inform the character of a Gowring.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-card">
                    <div class="service-card_icon">
                        <img class="svg-img" src="assets/img/icon/service_1_6.svg" alt="service image">
                    </div>
                    <p class="service-card_num">06</p>
                    <h3 class="service-card_title">Safety Guard Everything</h3>
                    <p class="service-card_text">Safety Guard is architecture as the composition of all elements that define a particular space and inform the character of Design.</p>
                </div>
            </div>


        </div>
    </div>
</section>
    <!--==============================
Job Area  
==============================-->
   <!-- <section class="space">
        <div class="container">
            <div class="row justify-content-lg-between align-items-end">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="title-area">
                        <span class="big-title">J.</span>
                        <h2 class="sec-title">POSITIONS
                            <span class="text-transparent">WANTED</span>
                        </h2>
                    </div>
                </div>
                <div class="col-auto wow fadeInUp" data-wow-delay="0.3s">
                    <div class="sec-btn">
                        <span class="text-style1">Today was built yesterday, by looking at tomorrow</span>
                    </div>
                </div>
            </div>

            <div class="job-list wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="job-list_title"><span class="job-list_num">01</span><a href="contact.html">Senior Engineer</a></h3>
                <span class="job-list_post">Civil engineer</span>
                <span class="job-list_time">Full-time</span>
                <a class="job-list_btn" href="contact.html"><i class="fa-regular fa-up-right-from-square"></i></a>
            </div>
            <div class="job-list wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="job-list_title"><span class="job-list_num">02</span><a href="contact.html">Junior Engineer</a></h3>
                <span class="job-list_post">Paint engineer</span>
                <span class="job-list_time">Part-time</span>
                <a class="job-list_btn" href="contact.html"><i class="fa-regular fa-up-right-from-square"></i></a>
            </div>
            <div class="job-list wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="job-list_title"><span class="job-list_num">03</span><a href="contact.html">Senior Engineer</a></h3>
                <span class="job-list_post">Tiles engineer</span>
                <span class="job-list_time">Full-time</span>
                <a class="job-list_btn" href="contact.html"><i class="fa-regular fa-up-right-from-square"></i></a>
            </div>
            <div class="job-list wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="job-list_title"><span class="job-list_num">04</span><a href="contact.html">Junior Designer</a></h3>
                <span class="job-list_post">Inerior Designer</span>
                <span class="job-list_time">Part-time</span>
                <a class="job-list_btn" href="contact.html"><i class="fa-regular fa-up-right-from-square"></i></a>
            </div>
            <div class="job-list wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="job-list_title"><span class="job-list_num">05</span><a href="contact.html">Senior Engineer</a></h3>
                <span class="job-list_post">Civil engineer</span>
                <span class="job-list_time">Full-time</span>
                <a class="job-list_btn" href="contact.html"><i class="fa-regular fa-up-right-from-square"></i></a>
            </div>

        </div>
    </section> -->      

@else

<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="page-single">
                    <div class="page-img">
                        <img class="w-100" src="{{@$dynamic_contents->image}}" alt="Service Image">
                    </div>
                    <h3 class="single-title">{{@$dynamic_contents->title}}</h3>
                    <div class="service-content">

                        {!! removeExtraChar(@$dynamic_contents->body) !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
</section

@endif

@endsection

@section('script')

@endsection
