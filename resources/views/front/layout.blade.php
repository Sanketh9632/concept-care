<!DOCTYPE html>
<html lang="en">

<head>
@yield('meta')
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords"
		content="HTML Template, site template, seo, marketing, creative, corporate, modern, multipurpose, one page, business, responsive, minimal, saas, startup">
	<meta name="author" content="LiquidThemes">
	<meta name="description"
		content="Hub is a HTML template with high performance, and award-winning design collection.">
	<meta property="og:title" content="Hub HTML template">
	<meta property="og:description"
		content="Hub is a HTML template with high performance, and award-winning design collection.">
	<meta property="og:type" content="website">
	<meta property="og:image" content="./assets/images/common/og-image.jpg">

	<link rel="stylesheet" href="/assets/vendors/liquid-icon/lqd-essentials/lqd-essentials.min.css">
	<link rel="stylesheet" href="/assets/css/theme.min.css">

	
	<link rel="stylesheet" href="/assets/css/demo/company/stylee.css">
	<link rel="stylesheet" href="/assets/css/utility.min.css">
	<link rel="stylesheet" href="/assets/css/demo/company/base.css">
	<link rel="stylesheet" href="/assets/css/demo/company/company.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">

	<title>Concept Care</title>
</head>

<body class="lqd-preloader-style-fade lqd-sticky-footer-shadow-2 lqd-search-style-slide-top"
	data-localscroll-offset="72" data-mobile-nav-breakpoint="1199" data-mobile-nav-style="classic"
	data-mobile-nav-scheme="light" data-mobile-nav-trigger-alignment="right" data-mobile-header-scheme="gray"
	data-mobile-logo-alignment="default" data-overlay-onmobile="false">
	<div class="bg-white" id="wrap">
		<div id="wrap">

		<div class="lqd-sticky-placeholder hidden"></div>
		<header id="site-header" class="main-header main-header-overlay" data-sticky-header="true">
			
			<section
				class="lqd-section w-full flex flex-wrap items-center justify-between px-2percent module-header md:hidden">
				<div class="w-15percent flex items-center justify-start">
					<a class="navbar-brand flex relative py-15" href="{{route('home')}}" rel="home">
						<span class="navbar-brand-inner post-rel">
							<img class="logo-sticky logos" src="/assets/images/logon.png" alt="Concept_Care logo">
							<img class="logo-default logos" src="/assets/images/logon2.png" alt="Concept_Care logo">
						</span>
					</a>
				</div>
				<div class="w-85percent flex items-stretch justify-end">
					<div class="module-primary-nav flex">
						<div class="navbar-collapse lqd-submenu-default-style inline-flex h-auto p-0"
							id="main-header-collapse" aria-expanded="false" role="navigation">
							<ul class="main-nav flex reset-ul inline-ul lqd-menu-counter-right lqd-menu-items-inline main-nav-hover-fade-inactive lqd-submenu-toggle-hover link-14 link-bold"
                data-submenu-options='{"toggleType": "fade", "handler": "mouse-in-out"}'
                data-localscroll="true"
                data-localscroll-options='{"itemsSelector":"> li > a", "trackWindowScroll": true}'>
                
                @foreach($parent_menu->where('display_menu','Y')->where('status', 'Active') as $main_menu)
                    @if($main_menu->sub_menu == 'Y' && $main_menu->submenus->count() !== 0)
                        <li class="menu-item-has-children inline-flex flex-col relative w-auto">
                            <a class="text-white hover:text-primary" href="{{ route('dynamicpage',[$main_menu->slug]) }}">
                                {{ $main_menu->name }}
                                <span class="submenu-expander">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="32" viewBox="0 0 21 32" style="width: 1em; height: 1em;">
                                        <path fill="currentColor" d="M10.5 18.375l7.938-7.938c.562-.562 1.562-.562 2.125 0s.562 1.563 0 2.126l-9 9c-.563.562-1.5.625-2.063.062L.437 12.562C.126 12.25 0 11.876 0 11.5s.125-.75.438-1.063c.562-.562 1.562-.562 2.124 0z"></path>
                                    </svg>
                                </span>
                            </a>
                            <ul class="nav-item-children">
                                @foreach($main_menu->submenus as $main_sub_menu)
                                    @if(@$main_sub_menu->link_active)
                                        <li><a href="{{@$main_sub_menu->link}}" target="_blank">{{ $main_sub_menu->name }}</a></li>
                                    @else
                                        @if($main_sub_menu->child_menu == 'Y' && $main_sub_menu->childmenus->count() !== 0)
                                            <li class="menu-item-has-children inline-flex flex-col relative w-auto">
                                                <a class="text-white hover:text-primary" href="{{ route('dynamicpage',[$main_menu->slug, $main_sub_menu->slug]) }}">
                                                    {{ $main_sub_menu->name }}
                                                    <span class="submenu-expander">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="32" viewBox="0 0 21 32" style="width: 1em; height: 1em;">
                                                            <path fill="currentColor" d="M10.5 18.375l7.938-7.938c.562-.562 1.562-.562 2.125 0s.562 1.563 0 2.126l-9 9c-.563.562-1.5.625-2.063.062L.437 12.562C.126 12.25 0 11.876 0 11.5s.125-.75.438-1.063c.562-.562 1.562-.562 2.124 0z"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                                <ul class="nav-item-children">
                                                    @foreach($main_sub_menu->childmenus as $main_child_menu)
                                                        @if(@$main_child_menu->link_active)
                                                            <li><a href="{{@$main_child_menu->link}}" target="_blank">{{ $main_child_menu->name }}</a></li>
                                                        @else
                                                            <li><a href="{{ route('dynamicpage',[$main_menu->slug, $main_sub_menu->slug, $main_child_menu->slug]) }}">{{ $main_child_menu->name }}</a></li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @else
                                            <li><a href="{{ route('dynamicpage',[$main_menu->slug, $main_sub_menu->slug]) }}">{{ $main_sub_menu->name }}</a></li>
                                        @endif
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li class="inline-flex flex-col relative w-auto"><a class="text-white hover:text-primary" href="{{ route('dynamicpage',[$main_menu->slug]) }}">{{ $main_menu->name }}</a></li>
                    @endif
                @endforeach
                
            </ul>
						</div>
					</div>
					<div class="ml-20 text-end">
						<h6 class="mt-1em text-white">
							<span class="text-13 text-inherit">call us now</span>
							<br>
							<span class="text-primary text-16">+1 714 7788</span>
						</h6>
					</div>
				</div>
			</section>
			<div class="lqd-mobile-sec relative w-full">
				<div class="lqd-mobile-sec-inner navbar-header flex items-stretch w-full">
					<div class="lqd-mobile-modules-container empty"></div>
					<button type="button"
						class="navbar-toggle nav-trigger style-mobile collapsed flex relative items-center justify-end border-none p-0 bg-transparent"
						data-ld-toggle="true" data-bs-toggle="collapse" data-bs-target="#lqd-mobile-sec-nav"
						aria-expanded="false"
						data-bs-toggle-options='{ "changeClassnames":  {"html":  "mobile-nav-activated"} }'>
						<span class="sr-only">Menu</span>
						<span class="bars inline-block relative z-1">
							<span class="bars-inner flex flex-col w-full h-full">
								<span class="bar inline-block"></span>
								<span class="bar inline-block"></span>
								<span class="bar inline-block"></span>
							</span>
						</span>
					</button>
					<a class="navbar-brand flex relative" href="{{route('home')}}">
						<span class="navbar-brand-inner">
							<img class="logo-default" width="74" height="21" src="/assets/images/logon.png"
								alt="Hub WordPress Theme">
						</span>
					</a>
				</div>
				<div class="lqd-mobile-sec-nav w-full absolute z-10 bg-white text-black">
				<div class="mobile-navbar-collapse navbar-collapse collapse w-full" id="lqd-mobile-sec-nav" aria-expanded="false" role="navigation">
        <ul id="mobile-primary-nav" class="reset-ul lqd-mobile-main-nav main-nav nav" data-localscroll="true" data-localscroll-options='{"itemsSelector":"> li > a", "trackWindowScroll": true}'>
            @foreach($parent_menu->where('display_menu','Y')->where('status', 'Active') as $main_menu)
                @if($main_menu->sub_menu == 'Y' && $main_menu->submenus->count() !== 0)
                    <li class="menu-item-has-children">
                        <a href="{{ route('dynamicpage',[$main_menu->slug]) }}">
                            {{ $main_menu->name }}
                            <span class="submenu-expander absolute"></span>
                        </a>
                        <ul class="nav-item-children">
                            @foreach($main_menu->submenus as $main_sub_menu)
                                @if(@$main_sub_menu->link_active)
                                    <li><a href="{{@$main_sub_menu->link}}" target="_blank">{{ $main_sub_menu->name }}</a></li>
                                @else
                                    @if($main_sub_menu->child_menu == 'Y' && $main_sub_menu->childmenus->count() !== 0)
                                        <li class="menu-item-has-children">
                                            <a href="{{ route('dynamicpage',[$main_menu->slug, $main_sub_menu->slug])}}">
                                                {{ $main_sub_menu->name }}
                                                <span class="submenu-expander absolute"></span>
                                            </a>
                                            <ul class="nav-item-children">
                                                @foreach($main_sub_menu->childmenus as $main_child_menu)
                                                    @if(@$main_child_menu->link_active)
                                                        <li><a href="{{@$main_child_menu->link}}" target="_blank">{{ $main_child_menu->name }}</a></li>
                                                    @else
                                                        <li><a href="{{ route('dynamicpage',[$main_menu->slug, $main_sub_menu->slug, $main_child_menu->slug]) }}">{{ $main_child_menu->name }}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else
                                        <li><a href="{{ route('dynamicpage',[$main_menu->slug, $main_sub_menu->slug]) }}">{{ $main_sub_menu->name }}</a></li>
                                    @endif
                                @endif
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li><a href="{{ route('dynamicpage',[$main_menu->slug]) }}">{{ $main_menu->name }}</a></li>
                @endif
            @endforeach
        </ul>
    </div>
</div>
</div>
</header>

@yield('main')
	
<!-- Start Back To Top Button -->
		<div class="lqd-back-to-top fixed" data-back-to-top="true">
			<a href="#wrap" class="inline-flex items-center justify-center rounded-full relative overflow-hidden"
				data-localscroll="true">
				<svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="21" height="32" viewbox="0 0 21 32"
					style="width: 1em; height: 1em;">
					<path fill="white"
						d="M10.5 13.625l-7.938 7.938c-.562.562-1.562.562-2.124 0C.124 21.25 0 20.875 0 20.5s.125-.75.438-1.063L9.5 10.376c.563-.563 1.5-.5 2.063.063l9 9c.562.562.562 1.562 0 2.125s-1.563.562-2.125 0z">
					</path>
				</svg>
			</a>
		</div>
		<!-- End Back To Top Button -->

		<footer id="site-footer"
			class="main-footer link-white-50 link-14 bg-center bg-inherit  footerimages bg-no-repeat"  data-sticky-footer="
			true" data-sticky-footer-options='{"shadow": "2"}'>

			<!-- Start Footer Module Top -->
			<section class="lqd-section module-top pt-10">
				<div class="container">
					<div class="row">
						<div class="col col-12 col-xl-4">
							<div class="mr-50 mb-20 flex flex-col">
								<div class="mb-35">
									<img src="/assets/images/logon2.png" alt="Concept_Care" width="450">
								</div>
								<div class="ld-fancy-heading relative">
									<p class="mb-3em text-white opacity-50 inline-block relative">Your Trusted Partner
										for Comprehensive IT Solutions and Support. Discover innovative technology
										tailored to optimize your business efficiency and security.</p>
								</div>
								<div class="module-icon -mr-10 -ml-10">
									<ul class="reset-ul icon-list-items inline-items flex items-center mb-0">
										<li class="mx-10 icon-list-item inline-item inline-flex">
											<a href="#">
												<span class="icon-list-icon flex">
													<svg class="text-24 w-25 h-25" viewBox="0 0 512 512" fill="#849493">
														<path
															d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
													</svg>
												</span>
												<span class="icon-list-text"></span>
											</a>
										</li>
										<li class="mx-10 icon-list-item inline-item inline-flex">
											<a href="#">
												<span class="icon-list-icon flex">
													<svg class="text-24 w-25 h-25" viewBox="0 0 448 512" fill="#849493">
														<path
															d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
													</svg>
												</span>
												<span class="icon-list-text"></span>
											</a>
										</li>
										<li class="mx-10 icon-list-item inline-item inline-flex">
											<a href="#">
												<span class="icon-list-icon flex">
													<svg class="text-24 w-25 h-25" viewBox="0 0 496 512" fill="#849493">
														<path
															d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3.8-3.4 5-20.3 6.9-28.1.6-2.5.3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z" />
													</svg>
												</span>
												<span class="icon-list-text"></span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col col-12 col-md-6 col-xl-4">
							<div class="ml-60 mb-30 flex flex-col items-start sm:ml-0 module-contact">
								<div class="ld-fancy-heading relative">
									<h3 class="ld-fh-element mb-2em text-white text-16 inline-block relative">Contact
									</h3>
								</div>
								<div class="mb-30 pb-10 iconbox relative items-center">
									<div class="iconbox-icon-wrap mr-25">
										<div class="iconbox-icon-container inline-flex w-20 text-20">
											<svg class="w-1em h-1em" xmlns="http://www.w3.org/2000/svg" width="15.438"
												height="15.438" viewBox="0 0 15.438 15.438">
												<path
													d="M0-14.844l-.315.2-7.4,4.824V.594H7.719V-9.815L.315-14.64Zm0,1.41L6.049-9.5,0-5.585-6.049-9.5ZM-6.531-8.405-.315-4.379l.315.2,6.531-4.23V-.594H-6.531Z"
													transform="translate(7.719 14.844)" fill="#fad55b"></path>
											</svg>
										</div>
									</div>
									<div class="contents flex flex-col">
										<h3
											class="lqd-iconbox-heading opacity-50 text-white text-13 font-normal leading-1em mb-0">
											Looking for collaboration? </h3>
										<p>
											<span class="text-16 text-white">hub@liquid.com</span>
										</p>
									</div>
								</div>
								<div class="mb-30 pb-10 iconbox relative items-center">
									<div class="iconbox-icon-wrap mr-25">
										<div class="iconbox-icon-container inline-flex w-20 text-20">
											<svg class="w-1em h-1em" xmlns="http://www.w3.org/2000/svg" width="15.75"
												height="16.099" viewBox="0 0 15.75 16.099">
												<path
													d="M3.938-16.406a3.8,3.8,0,0,0-1.969.533A4.013,4.013,0,0,0,.533-14.437,3.8,3.8,0,0,0,0-12.469a3.366,3.366,0,0,0,.164.984,8.121,8.121,0,0,0,.41,1.066q.472,1.046,1.148,2.235Q2.563-6.747,3.4-5.537l.533.779L5-6.316Q5.64-7.28,6.152-8.183A20.572,20.572,0,0,0,7.3-10.418a8.121,8.121,0,0,0,.41-1.066,3.366,3.366,0,0,0,.164-.984,3.8,3.8,0,0,0-.533-1.969,4.013,4.013,0,0,0-1.436-1.436A3.8,3.8,0,0,0,3.938-16.406Zm-6.583,1.271L-7.875-12.9V-.308L-2.6-2.584,2.646-.615,7.875-2.851V-8.572q-.513.984-1.312,2.256v2.6L3.281-2.317V-3.384L1.969-5.291v3.035L-1.969-3.732v-9.762l.718.267A5.446,5.446,0,0,1-.9-14.5Zm6.583.041a2.6,2.6,0,0,1,1.323.349,2.554,2.554,0,0,1,.954.954,2.6,2.6,0,0,1,.349,1.323,2.49,2.49,0,0,1-.123.625,7.614,7.614,0,0,1-.328.892Q5.742-10.131,5-8.839q-.472.82-.964,1.538l-.1.164-.1-.164q-.492-.718-.964-1.538a22.116,22.116,0,0,1-1.107-2.112,7.614,7.614,0,0,1-.328-.892,2.49,2.49,0,0,1-.123-.625,2.6,2.6,0,0,1,.349-1.323,2.554,2.554,0,0,1,.954-.954A2.6,2.6,0,0,1,3.938-15.094Zm-7.219,1.641v9.741L-6.562-2.317v-9.721Z"
													transform="translate(7.875 16.406)" fill="#fad55b"></path>
											</svg>
										</div>
									</div>
									<div class="contents flex flex-col">
										<h3
											class="lqd-iconbox-heading opacity-50 text-white text-13 font-normal leading-1em mb-0">
											Visit our Local Store </h3>
										<p>
											<span class="text-16 text-white">14th Street, Soho</span>
										</p>
									</div>
								</div>
								<div class="mb-30 pb-10 iconbox relative items-center">
									<div class="iconbox-icon-wrap mr-25">
										<div class="iconbox-icon-container inline-flex w-20 text-20">
											<svg class="w-1em h-1em" xmlns="http://www.w3.org/2000/svg" width="19.063"
												height="19.057" viewBox="0 0 19.063 19.057">
												<path
													d="M1.969-18.375v1.313a7.172,7.172,0,0,1,3.65.984A7.31,7.31,0,0,1,8.2-13.494a7.172,7.172,0,0,1,.984,3.65H10.5A8.353,8.353,0,0,0,9.331-14.15a8.4,8.4,0,0,0-3.056-3.056A8.353,8.353,0,0,0,1.969-18.375Zm-6.788,1.969a1.442,1.442,0,0,0-.964.349L-7.9-13.9l.062-.041A1.966,1.966,0,0,0-8.5-12.879a2.041,2.041,0,0,0,.072,1.23A20.666,20.666,0,0,0-6.891-8.367,20.038,20.038,0,0,0-3.671-4.2,21.246,21.246,0,0,0,3.773.554h.021a2.245,2.245,0,0,0,1.2.082A2.32,2.32,0,0,0,6.07.1L8.142-1.969a1.379,1.379,0,0,0,.41-1.015A1.379,1.379,0,0,0,8.142-4L5.455-6.706a1.391,1.391,0,0,0-1.025-.41,1.391,1.391,0,0,0-1.025.41L2.112-5.394A10.206,10.206,0,0,1-.595-7.229,8.015,8.015,0,0,1-2.42-9.905l1.313-1.312a1.505,1.505,0,0,0,.431-1.077,1.234,1.234,0,0,0-.492-1.015l.062.062-2.748-2.81A1.442,1.442,0,0,0-4.819-16.406Zm6.788.656v1.313a4.5,4.5,0,0,1,2.307.615,4.558,4.558,0,0,1,1.671,1.671,4.5,4.5,0,0,1,.615,2.307H7.875a5.809,5.809,0,0,0-.8-2.974A6.127,6.127,0,0,0,4.942-14.95,5.809,5.809,0,0,0,1.969-15.75Zm-6.788.656a.253.253,0,0,1,.144.062l2.687,2.748a.142.142,0,0,1-.041.144l-1.948,1.928.144.41.267.574A11.008,11.008,0,0,0-2.81-7.875,7.98,7.98,0,0,0-1.5-6.3,11.479,11.479,0,0,0,.82-4.573,8.9,8.9,0,0,0,1.969-4l.41.185L4.368-5.8q.041-.041.062-.041t.062.041L7.26-3.035q.041.041.041.051t-.041.051L5.209-.9A.945.945,0,0,1,4.225-.7a19.676,19.676,0,0,1-6.973-4.43A19.5,19.5,0,0,1-5.763-9.044,17.408,17.408,0,0,1-7.2-12.1v-.021a.679.679,0,0,1-.021-.441.745.745,0,0,1,.226-.4l2.03-2.071A.2.2,0,0,1-4.819-15.094Zm6.788,1.969v1.313a1.9,1.9,0,0,1,1.395.574,1.9,1.9,0,0,1,.574,1.395H5.25a3.21,3.21,0,0,0-.441-1.641,3.258,3.258,0,0,0-1.2-1.2A3.21,3.21,0,0,0,1.969-13.125Z"
													transform="translate(8.563 18.375)" fill="#fad55b"></path>
											</svg>
										</div>
									</div>
									<div class="contents flex flex-col">
										<h3
											class="lqd-iconbox-heading opacity-50 text-white text-13 font-normal leading-1em mb-0">
											Monday-Friday: 08am-9pm </h3>
										<p>
											<span class="text-16 text-white">+(1) 123 456 7890</span>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col col-12 col-md-6 col-xl-4 p-0">
							<div class="module-list">
								<div class="container-fluid">
									<div class="row items-start">
										<div class="col col-6  mb-30">
											<div class="ld-fancy-heading relative">
												<h3
													class="ld-fh-element mb-2em text-white text-16 inline-block relative">
													Useful Links</h3>
											</div>
											<div class="lqd-fancy-menu lqd-custom-menu relative lqd-menu-td-none">
												<ul class="reset-ul">
													<li class="mb-10">
														<a href="#">Management</a>
													</li>
													<li class="mb-10">
														<a href="#">Reporting</a>
													</li>
													<li class="mb-10">
														<a href="#">Press</a>
													</li>
													<li class="mb-10">
														<a href="#">Company</a>
													</li>
													<li>
														<a href="#">Careers</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="col col-6  mb-10">
											<div class="ld-fancy-heading relative">
												<h3
													class="ld-fh-element text-white text-16 mb-2em inline-block relative">
													Company</h3>
											</div>
											<div class="lqd-fancy-menu lqd-custom-menu relative lqd-menu-td-none">
												<ul class="reset-ul">
													<li class="mb-10">
														<a href="#">Company</a>
													</li>
													<li class="mb-10">
														<a href="#">Careers</a>
													</li>
													<li class="mb-10">
														<a href="#">Press media</a>
													</li>
													<li>
														<a href="#">Our Blog</a>
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
			</section>
			<!-- End Footer Module Top -->

			<!-- Start Footer Module bottom -->
			<section class="lqd-section module-bottom py-30 border-top text-white-10 transition-all">
				<div class="container">
					<div class="row justify-between">
						<div class="col col-12 col-md-4">
							<div class="ld-fancy-heading relative">
								<p class="ld-fh-element text-13 text-white-50 inline-block relative mb-0/5em">Copyright
									©2024 Falcon Konnect.</p>
							</div>
						</div>
						<div class="col col-12 col-md-8 text-end sm:text-start">
							<div class="lqd-fancy-menu lqd-custom-menu relative lqd-menu-td-none">
								<ul class="reset-ul inline-ul">
									<li class="mr-25">
										<a href="#">Management</a>
									</li>
									<li class="mr-25">
										<a href="#">Reporting</a>
									</li>
									<li class="mr-25">
										<a href="#">Press</a>
									</li>
									<li class="mr-25">
										<a href="#">Company</a>
									</li>
									<li>
										<a href="#">Careers</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Footer Module bottom -->
		</footer>
	</div>
	<!-- End Wrap -->

	<!-- Start contact modal -->
	<div id="contact-modal" class="lqd-modal lity-hide" data-modal-type="fullscreen">
		<div class="lqd-modal-inner py-25 px-2em">
			<div class="lqd-modal-head">
				<h2>Get in touch</h2>
			</div>
			<div class="lqd-modal-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col col-12">
							<div class="ld-gmap-container h-340">
								<div class="ld-gmap w-full h-full" data-plugin-map="true"
									data-plugin-options='{"style": "assassinsCreedIV", "address": "Manhattan", "marker_style": "html", "markers" : null , "map": {"zoom" : 14 , "mapTypeId": "roadmap", "zoomControl": true}}'>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="relative flex flex-wrap py-80 -mr-15 -ml-15 module-bottom">
					<div class="container-fluid">
						<div class="row items-center">
							<div class="col col-12 col-md-6">
								<div
									class="relative flex flex-col justify-content transition-all border-1 border-black-10 rounded-4 pt-55 pb-35 px-60 module-inner">
									<div class="ld-fancy-heading">
										<h2 class="ld-fh-element mb-0/5em text-34 font-semibold">Get in touch</h2>
									</div>
									<div class="ld-fancy-heading">
										<p class="ld-fh-element mb-2/5em">We are here to answer any question you may
											have. Feel free to reach via contact form.</p>
									</div>
									<div class="iconbox text-align-default mb-10 items-start">
										<div class="iconbox-icon-wrap flex">
											<span class="iconbox-icon-container text-gray-200 text-16 mr-15">
												<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="1em"
													viewBox="0 0 384 512">
													<path
														d="M384 192c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192z" />
												</svg>
											</span>
										</div>
										<h3 class="text-15 text-black-60 leading-1/5em">290 Maryam Springs
											260,<br>Courbevoie, Paris</h3>
									</div>
									<div class="iconbox text-align-default mb-10 items-start">
										<div class="iconbox-icon-wrap flex">
											<span class="iconbox-icon-container text-gray-200 text-16 mr-15">
												<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="1em"
													viewBox="0 0 512 512">
													<path
														d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
												</svg>
											</span>
										</div>
										<h3 class="text-15 text-black-60 leading-1/5em">
											<span>Email: </span>
											<span class="text-black-60">hello@liquid-themes.com</span>
										</h3>
									</div>
									<div class="iconbox text-align-default mb-10 items-start">
										<div class="iconbox-icon-wrap flex">
											<span class="iconbox-icon-container text-gray-200 text-16 mr-15">
												<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="1em"
													viewBox="0 0 384 512">
													<path
														d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM144 448c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16s-7.2-16-16-16H160c-8.8 0-16 7.2-16 16zM304 64H80V384H304V64z" />
												</svg>
											</span>
										</div>
										<h3 class="text-15 text-black-60 leading-1/5em">Phone: +47 213 5941 295</h3>
									</div>
								</div>
							</div>
							<div class="col col-12 col-md-6 col-lg-5 offset-lg-1">
								<div
									class="lqd-contact-form lqd-contact-form-inputs-filled lqd-contact-form-inputs-round lqd-contact-form-button-block lqd-contact-form-button-round pr-12percent">
									<div role="form" class="lqd-cf" lang="en-GB">
										<div class="screen-reader-response">
											<p role="status" aria-live="polite" aria-atomic="true"></p>
										</div>
										<form action="/assets/php/mailer.php" method="post" class="lqd-cf-form"
											novalidate="novalidate" data-status="init">
											<p>
												<span class="lqd-form-control-wrap text">
													<input type="text" name="name" value="" size="40"
														class="lqd-cf-form-control px-2em text-13 bg-gray-100 text-slate-300"
														aria-required="true" aria-invalid="false"
														placeholder="Your name">
												</span>
												<span class="lqd-form-control-wrap">
													<input type="email" name="email" value="" size="40"
														class="lqd-cf-form-control px-2em text-13 bg-gray-100 text-slate-300"
														aria-required="true" aria-invalid="false"
														placeholder="Your Email Address">
												</span>
												<span class="lqd-form-control-wrap textarea">
													<textarea name="message" cols="10" rows="4"
														class="lqd-cf-form-control px-2em text-13 bg-gray-100 text-slate-300"
														aria-required="true" aria-invalid="false"
														placeholder="Your message"></textarea>
												</span>
												<input type="submit" value="Send email"
													class="lqd-cf-form-control px-2em text-14 bg-primary text-white">
											</p>
										</form>
										<div class="lqd-cf-response-output"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="lqd-modal-foot"></div>
		</div>
	</div>
	<!-- End contact modal -->

	<!-- Hub wordpress -->
	<!-- <a class="fixed z-100" href="https://themeforest.net/item/hub-responsive-multipurpose-wordpress-theme/31569152" title="Get Hub WordPress Theme" style="bottom: 2rem; left: 2rem;" target="_blank" rel="nofollow">
			<svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_4_2)"> <path d="M61.07 30.5719C61.07 31.7719 59.17 32.8429 59.03 34.0039C58.887 35.1899 60.476 36.6829 60.197 37.8219C59.913 38.9789 57.81 39.5649 57.397 40.6639C56.984 41.7629 58.158 43.6079 57.61 44.6499C57.062 45.6919 54.877 45.7639 54.21 46.7339C53.543 47.7039 54.246 49.7709 53.462 50.6549C52.678 51.5389 50.544 51.0819 49.662 51.8669C48.78 52.6519 48.977 54.8239 48.002 55.4969C47.027 56.1699 45.07 55.2149 44.019 55.7679C42.968 56.3209 42.65 58.4739 41.538 58.8959C40.426 59.3179 38.764 57.9169 37.607 58.1959C36.468 58.4759 35.633 60.4959 34.446 60.6339C33.285 60.7739 31.994 59.0159 30.796 59.0159C29.598 59.0159 28.307 60.7729 27.146 60.6339C25.959 60.4909 25.123 58.4759 23.985 58.1959C22.828 57.9119 21.153 59.3079 20.054 58.8909C18.955 58.4739 18.616 56.3119 17.573 55.7629C16.53 55.2139 14.561 56.1629 13.59 55.4919C12.619 54.8209 12.814 52.6449 11.93 51.8609C11.046 51.0769 8.91197 51.5339 8.12997 50.6489C7.34797 49.7639 8.05599 47.7019 7.38199 46.7279C6.70799 45.7539 4.52999 45.6939 3.98199 44.6439C3.43399 43.5939 4.61698 41.7689 4.19498 40.6579C3.77298 39.5469 1.67599 38.9739 1.39499 37.8159C1.11499 36.6769 2.70398 35.1849 2.56198 33.9979C2.42298 32.8369 0.521973 31.7649 0.521973 30.5669C0.521973 29.3689 2.42198 28.2959 2.56198 27.1359C2.70498 25.9499 1.11599 24.4559 1.39499 23.3179C1.67899 22.1609 3.78098 21.5749 4.19498 20.4759C4.60898 19.3769 3.43399 17.5319 3.98199 16.4899C4.52999 15.4479 6.71599 15.3759 7.38199 14.4049C8.04799 13.4339 7.34597 11.3679 8.12997 10.4839C8.91397 9.59991 11.048 10.0569 11.93 9.2719C12.812 8.4869 12.615 6.31489 13.59 5.64089C14.565 4.96689 16.522 5.9229 17.573 5.3709C18.624 4.8189 18.942 2.66491 20.054 2.24291C21.166 1.82091 22.828 3.22189 23.985 2.94289C25.124 2.66289 25.96 0.642903 27.146 0.504903C28.307 0.365903 29.598 2.12291 30.796 2.12291C31.994 2.12291 33.286 0.365903 34.447 0.504903C35.633 0.647903 36.469 2.66289 37.608 2.94289C38.765 3.22789 40.44 1.83091 41.539 2.24791C42.638 2.66491 42.977 4.82691 44.02 5.37591C45.063 5.92491 47.032 4.97589 48.002 5.64589C48.972 6.31589 48.778 8.49291 49.662 9.27691C50.546 10.0609 52.681 9.60391 53.462 10.4889C54.243 11.3739 53.536 13.4359 54.209 14.4099C54.882 15.3839 57.061 15.4439 57.609 16.4949C58.157 17.5459 56.974 19.3689 57.396 20.4809C57.818 21.5929 59.915 22.1659 60.196 23.3229C60.476 24.4619 58.887 25.9549 59.029 27.1409C59.169 28.3009 61.07 29.3729 61.07 30.5719Z" fill="#E1E6EA"/> <path d="M16.827 31.128C16.8266 33.7663 17.569 36.3515 18.9693 38.5876C20.3696 40.8237 22.3712 42.6204 24.745 43.772L18.045 25.411C17.2419 27.2098 16.8276 29.158 16.829 31.128H16.827ZM40.36 30.419C40.3402 29.0449 39.9382 27.7034 39.199 26.545C38.4448 25.5953 37.9679 24.4557 37.821 23.252C37.8029 22.6078 38.0412 21.9828 38.4835 21.5141C38.9257 21.0454 39.5359 20.7713 40.18 20.752C40.242 20.752 40.301 20.76 40.362 20.763C38.8617 19.3896 37.0811 18.3584 35.1432 17.7408C33.2054 17.1231 31.1564 16.9337 29.1382 17.1856C27.1199 17.4375 25.1804 18.1247 23.4538 19.1998C21.7272 20.2748 20.2546 21.712 19.138 23.412C19.468 23.422 19.778 23.429 20.038 23.429C21.507 23.429 23.782 23.251 23.782 23.251C23.9354 23.239 24.0873 23.2885 24.2042 23.3886C24.3212 23.4886 24.3935 23.631 24.4055 23.7845C24.4174 23.9379 24.3679 24.0898 24.2679 24.2067C24.1678 24.3236 24.0254 24.396 23.872 24.408C23.872 24.408 23.111 24.498 22.264 24.542L27.38 39.759L30.454 30.538L28.265 24.538C27.508 24.494 26.792 24.404 26.792 24.404C26.6487 24.3799 26.5197 24.303 26.4305 24.1885C26.3412 24.0739 26.2981 23.93 26.3098 23.7853C26.3215 23.6405 26.3871 23.5054 26.4936 23.4066C26.6001 23.3079 26.7397 23.2527 26.885 23.252C26.885 23.252 29.205 23.43 30.585 23.43C32.054 23.43 34.329 23.252 34.329 23.252C34.4824 23.24 34.6343 23.2895 34.7512 23.3896C34.8682 23.4896 34.9405 23.632 34.9525 23.7855C34.9644 23.9389 34.9149 24.0908 34.8149 24.2077C34.7148 24.3246 34.5724 24.397 34.419 24.409C34.419 24.409 33.656 24.499 32.811 24.543L37.888 39.643L39.288 34.96C39.852 33.5028 40.2121 31.9747 40.358 30.419H40.36ZM31.122 32.352L26.907 44.605C29.7372 45.4383 32.7578 45.36 35.541 44.381C35.502 44.3194 35.4685 44.2544 35.441 44.187L31.122 32.352ZM43.199 24.388C43.2646 24.8665 43.298 25.3489 43.299 25.832C43.2751 27.5629 42.9122 29.2725 42.231 30.864L37.938 43.272C41.1024 41.4302 43.423 38.426 44.4056 34.899C45.3882 31.3719 44.9553 27.6006 43.199 24.388ZM30.876 14.752C27.6372 14.7522 24.4711 15.7128 21.7782 17.5123C19.0854 19.3118 16.9866 21.8695 15.7472 24.8618C14.5079 27.8542 14.1838 31.1468 14.8158 34.3234C15.4478 37.4999 17.0075 40.4178 19.2978 42.7079C21.588 44.998 24.5059 46.5576 27.6826 47.1894C30.8592 47.8212 34.1518 47.4968 37.144 46.2573C40.1363 45.0178 42.6938 42.9189 44.4932 40.2259C46.2926 37.5329 47.253 34.3668 47.253 31.128C47.248 26.7861 45.5209 22.6236 42.4507 19.5536C39.3804 16.4835 35.2178 14.7567 30.876 14.752ZM30.876 46.752C27.7852 46.7525 24.7637 45.8366 22.1936 44.1198C19.6235 42.4031 17.6202 39.9627 16.4371 37.1074C15.254 34.252 14.9443 31.11 15.547 28.0786C16.1498 25.0472 17.638 22.2626 19.8234 20.0771C22.0088 17.8915 24.7933 16.4031 27.8246 15.8002C30.856 15.1972 33.9981 15.5068 36.8535 16.6897C39.7089 17.8726 42.1494 19.8757 43.8663 22.4458C45.5832 25.0158 46.4994 28.0372 46.499 31.128C46.4937 35.2699 44.846 39.2407 41.9173 42.1696C38.9886 45.0985 35.0179 46.7464 30.876 46.752Z" fill="#317296"/> </g> <defs> <clipPath id="clip0_4_2"> <rect width="61.57" height="61.144" fill="white"/> </clipPath> </defs> </svg>
		</a> -->

	<!-- Google map api -->
	<script src="//maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>

	<script src="/assets/vendors/jquery.min.js"></script>
	<script src="/assets/vendors/jquery-ui/jquery-ui.min.js"></script>
	<script src="/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="/assets/vendors/gsap/minified/gsap.min.js"></script>
	<script src="/assets/vendors/gsap/utils/SplitText.min.js"></script>
	<script src="/assets/vendors/gsap/minified/ScrollTrigger.min.js"></script>
	<script src="/assets/vendors/fastdom/fastdom.min.js"></script>
	<script src="/assets/vendors/flickity/flickity.pkgd.min.js"></script>
	<script src="/assets/vendors/flickity/flickity-fade.min.js"></script>
	<script src="/assets/vendors/lity/lity.min.js"></script>
	<script src="/assets/vendors/fresco/js/fresco.js"></script>
	<script src="/assets/vendors/fontfaceobserver.js"></script>
	<script src="/assets/js/liquid-gdpr.min.js"></script>
	<script src="/assets/js/theme.min.js"></script>
	<script src="/assets/js/liquid-ajax-contact-form.min.js"></script>
	<script src="/assets/vendors/gsap/utils/CustomEase.min.js"></script>
	<script src="/assets/vendors/draggabilly.pkgd.min.js"></script>
	<script src="/assets/vendors/gsap/minified/DrawSVGPlugin.min.js"></script>
	<script src="/assets/vendors/animated-blob/liquidAnimatedBlob.min.js"></script>
	<script src="/assets/vendors/draw-shape/liquidDrawShape.min.js"></script>
	<script src="/assets/vendors/isotope/isotope.pkgd.min.js"></script>
	<script src="/assets/vendors/isotope/packery-mode.pkgd.min.js"></script>
	<script src="/assets/vendors/matter/matter.min.js"></script>
	<script src="/assets/vendors/throwable/liquidThrowable.min.js"></script>
	<script src="/assets/vendors/section-flow/liquidSectionFlow.min.js"></script>
	<script src="/assets/vendors/body-clip/liquidBodyClip.min.js"></script>
	<script src="/assets/vendors/particles.min.js"></script>
	<script src="/assets/vendors/tinycolor-min.js"></script>

	<script src="//maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>


	<!-- Start custom cursor -->
	<div class="lqd-cc lqd-cc--inner fixed pointer-events-none"></div>
	<div
		class="lqd-cc--el lqd-cc-solid lqd-cc-explore flex items-center justify-center rounded-full fixed pointer-events-none">
		<div class="lqd-cc-solid-bg flex absolute lqd-overlay"></div>
		<div class="lqd-cc-solid-txt flex justify-center text-center relative">
			<div class="lqd-cc-solid-txt-inner">Explide</div>
		</div>
	</div>
	<div
		class="lqd-cc--el lqd-cc-solid lqd-cc-drag flex items-center justify-center rounded-full fixed pointer-events-none">
		<div class="lqd-cc-solid-bg flex absolute lqd-overlay"></div>
		<div class="lqd-cc-solid-ext lqd-cc-solid-ext-left inline-flex items-center">
			<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
				style="width: 1em; height: 1em;">
				<path fill="currentColor"
					d="M19.943 6.07L9.837 14.73a1.486 1.486 0 0 0 0 2.25l10.106 8.661c.96.826 2.457.145 2.447-1.125V7.195c0-1.27-1.487-1.951-2.447-1.125z">
				</path>
			</svg>
		</div>
		<div class="lqd-cc-solid-txt flex justify-center text-center relative">
			<div class="lqd-cc-solid-txt-inner">Drag</div>
		</div>
		<div class="lqd-cc-solid-ext lqd-cc-solid-ext-right inline-flex items-center">
			<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
				style="width: 1em; height: 1em;">
				<path fill="currentColor"
					d="M11.768 25.641l10.106-8.66a1.486 1.486 0 0 0 0-2.25L11.768 6.07c-.96-.826-2.457-.145-2.447 1.125v17.321c0 1.27 1.487 1.951 2.447 1.125z">
				</path>
			</svg>
		</div>
	</div>
	<div class="lqd-cc--el lqd-cc-arrow inline-flex items-center fixed top-0 left-0 pointer-events-none">
		<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M60.4993 0V4.77005H8.87285L80 75.9207L75.7886 79.1419L4.98796 8.35478V60.4993H0V0H60.4993Z" />
		</svg>
	</div>
	<div class="lqd-cc--el lqd-cc-custom-icon rounded-full fixed pointer-events-none">
		<div class="lqd-cc-ci inline-flex items-center justify-center rounded-full relative">
			<svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
				style="width: 1em; height: 1em;">
				<path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"
					d="M16.03 6a1 1 0 0 1 1 1v8.02h8.02a1 1 0 1 1 0 2.01h-8.02v8.02a1 1 0 1 1-2.01 0v-8.02h-8.02a1 1 0 1 1 0-2.01h8.02v-8.01a1 1 0 0 1 1.01-1.01z">
				</path>
			</svg>
		</div>
	</div>
	<div class="lqd-cc lqd-cc--outer fixed top-0 left-0 pointer-events-none"></div>
	<!-- End custom cursor -->

	<template id="lqd-snickersbar">
		<div class="lqd-snickersbar flex flex-wrap lqd-snickersbar-in" data-item-id>
			<div class="lqd-snickersbar-inner flex flex-wrap items-center">
				<div class="lqd-snickersbar-detail">
					<p class="hidden lqd-snickersbar-addding-temp my-0"></p>
					<p class="hidden lqd-snickersbar-added-temp my-0"></p>
					<p class="my-0 lqd-snickersbar-msg flex items-center my-0"></p>
					<p class="my-0 lqd-snickersbar-msg-done flex items-center my-0"></p>
				</div>
				<div class="lqd-snickersbar-ext ml-4"></div>
			</div>
		</div>
	</template>
	<template id="lqd-temp-sticky-header-sentinel">
		<div class="lqd-sticky-sentinel invisible absolute pointer-events-none"></div>
	</template>
	<div class="lity" role="dialog" aria-label="Dialog Window (Press escape to close)" tabindex="-1"
		data-modal-type="default">
		<div class="lity-wrap" data-lity-close role="document">
			<div class="lity-loader" aria-hidden="true">Loading...</div>
			<div class="lity-container">
				<div class="lity-content"></div>
			</div>
			<button class="lity-close" type="button" aria-label="Close (Press escape to close)"
				data-lity-close>&times;</button>
		</div>
	</div>

</body>

</html>