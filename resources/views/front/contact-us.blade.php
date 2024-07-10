@extends('front.layout')

@section('meta')

<title>Concept Care | Contact Us</title>
<meta name="author" content="Safety Guard">
<meta name="description" content="">
<meta name="keywords" content="">

@endsection

@section('css')

@endsection

@section('main')

<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

<main class="content bg-white" id="lqd-site-content">
			<div id="lqd-contents-wrap">

				<!-- Start Banner -->
				<section class="lqd-section banner" id="banner">
					<div class="container-fluid p-0">
						<div class="row m-0">
							<div
								class="col col-12 w-full relative flex flex-wrap items-center content-start text-center p-0">
								<div class="w-full relative">
									<div class="ld-gmap-container relative h-580">
										<div class="ld-gmap h-full" data-plugin-map="true"
											data-plugin-options='{"style":"assassinsCreedIV","address":"Manhattan","marker_style":"html","markers":null,"map":{"zoom":16,"mapTypeId":"roadmap","zoomControl":true}}'>
											<div class="w-full h-full absolute top-0 left-0 bg-gray-300"></div>
										</div>
									</div>
								</div>
								<div class="ld-fancy-heading w-full relative -mt-360">
									<h2 class="ld-fh-element mb-0/5em text-50 text-white"> contact us</h2>
								</div>
								<div class="ld-fancy-heading w-full relative -mt-460">
									<h6 class="ld-fh-element mb-0/5em text-16 text-white"> home - contact</h6>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Banner -->

				<!-- Start Form -->
				<section class="lqd-section form" id="form">
					<div class="container">
						<div class="row items-center">
							<div class="col col-12 col-xl-5">
								<div id="contact-form" class="relative w-full">
									<div class="relative rounded-6 bg-white shadow-md transition-all pt-40 pb-20 px-40 -mt-80 lg:mt-0 module-form"
										data-custom-animations="true"
										data-ca-options='{"animationTarget": ".animation-element", "duration" : 1800 , "delay" : 180 , "ease": "power4.out", "initValues": {"y": "35px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'>
										<div class="ld-fancy-heading relative animation-element">
											<h6 class="ld-fh-element mb-1em inline-block relative mb-1em text-20">Send a
												message</h6>
										</div>
										<div
											class="lqd-contact-form lqd-contact-form-inputs-filled lqd-contact-form-button-block lqd-contact-form-button-lg lqd-contact-form-button-round lqd-contact-form-inputs-lg animation-element">
											<div role="form" id="mini-form-help" lang="en-US">
												<div class="screen-reader-response">
													<p role="status" aria-live="polite" aria-atomic="true"></p>
												</div>
												<form action="./assets/php/mailer.php" method="post" class="lqd-cf-form"
													novalidate="novalidate" data-status="init">
													<div class="row -mx-15">
														<div class="col col-lg-6 col-12 py-0 px-15">
															<span class="mb-0 lqd-form-control-wrap relative">
																<input
																	class="px-2em text-14 font-normal bg-yellow-100 text-slate-700"
																	type="text" name="name" value="" size="40"
																	aria-required="true" aria-invalid="false"
																	placeholder="Full name">
															</span>
														</div>
														<div class="col col-lg-6 col-12 py-0 px-15">
															<span class="mb-0 lqd-form-control-wrap relative">
																<input
																	class="px-2em text-14 font-normal bg-yellow-100 text-slate-700"
																	type="email" name="email" value="" size="40"
																	aria-required="true" aria-invalid="false"
																	placeholder="Email Address">
															</span>
														</div>
														<div class="col col-lg-6 col-12 py-0 px-15">
															<div class="mb-0 lqd-form-control-wrap relative">
																<div class="lqd-select-dropdown" role="menubar">
																	<div class="ui-selectmenu-menu ui-front">
																		<ul aria-hidden="true"
																			aria-labelledby="ui-id-1-button"
																			id="ui-id-1-menu" role="listbox"
																			tabindex="0"
																			class="ui-menu ui-corner-bottom ui-widget ui-widget-content">
																		</ul>
																	</div>
																</div>
																<span tabindex="0" id="ui-id-1-button" role="combobox"
																	aria-expanded="false" aria-autocomplete="list"
																	aria-owns="ui-id-1-menu" aria-haspopup="true"
																	class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget text-14 font-normal bg-yellow-100 text-slate-700">
																	<span
																		class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span>
																	<span
																		class="ui-selectmenu-text px-2em">Subject</span>
																</span>
															</div>
														</div>
														<div class="col col-lg-6 col-12 py-0 px-15">
															<div class="mb-0 lqd-form-control-wrap relative">
																<div class="lqd-select-dropdown" role="menubar">
																	<div class="ui-selectmenu-menu ui-front">
																		<ul aria-hidden="true"
																			aria-labelledby="ui-id-2-button"
																			id="ui-id-2-menu" role="listbox"
																			tabindex="0"
																			class="ui-menu ui-corner-bottom ui-widget ui-widget-content">
																		</ul>
																	</div>
																</div>
																<span tabindex="0" id="ui-id-2-button" role="combobox"
																	aria-expanded="false" aria-autocomplete="list"
																	aria-owns="ui-id-2-menu" aria-haspopup="true"
																	class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget text-14 font-normal bg-yellow-100 text-slate-700">
																	<span
																		class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span>
																	<span class="ui-selectmenu-text px-2em">Your
																		budget</span>
																</span>
															</div>
														</div>
														<div class="col col-12 py-0 px-15">
															<span class="lqd-form-control-wrap" data-name="textarea">
																<textarea name="textarea" cols="10" rows="4"
																	class="lqd-cf-form-control px-2em text-14 font-normal bg-yellow-100 text-slate-700"
																	aria-required="true" aria-invalid="false"
																	placeholder="Your message"></textarea>
															</span>
														</div>
														<div class="col col-12 py-0 px-15">
															<input type="submit" value="get a quote"
																class="mb-0 font-bold text-secondary bg-primary has-spinner text-16 hover:bg-secondary hover:text-white">
														</div>
													</div>
												</form>
												<div class="lqd-cf-response-output"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col col-12 col-xl-6 offset-xl-1 p-0 lg:order-first"
								data-custom-animations="true"
								data-ca-options='{"animationTarget":"h6, h2, p","duration":1800,"delay":180,"ease":["power4.out"],"initValues":{"y":"35px","opacity":0},"animations":{"y":"0px","opacity":1}}'>
								<div class="w-full relative flex flex-col px-10percent module-content lg:text-center">
									<div class="ld-fancy-heading module-title">
										<h6 class="ld-fh-element relative mb-0/5em"> Get in touch</h6>
									</div>
									<h2 class="ld-fh-element relative mb-0/5em"> We’d love to hear from you.</h2>
									<p class="ld-fh-element relative mb-0/5em">We are here to answer any question you
										may have. As a partner of corporates, Liquid has more than 9,000 offices of all
										sizes and all potential of session.</p>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Form -->

				<!-- Start Global Offices -->
				<!-- <section class="lqd-section global-offices pt-50 pb-60" id="global-offices">
					<div class="container">
						<div class="row">
							<div class="col col-12 flex flex-col items-center">
								<div class="w-50percent relative flex flex-col text-center py-10 px-10 pb-60 lg:w-70percent sm:w-full"
									data-custom-animations="true"
									data-ca-options='{"animationTarget":" .lqd-split-lines .lqd-lines .split-inner, .lqd-split-words .lqd-words .split-inner, .lqd-split-chars .lqd-chars .split-inner","duration":1800,"delay":180,"ease":["power4.out"],"initValues":{"y":"35px","opacity":0},"animations":{"y":"0px","opacity":1}}'>
									<h2 class="ld-fh-element relative mb-0/5em "> global offices</h2>
									<p class="ld-fh-element relative mb-0/5em"> As a partner of corporates, Liquid has
										more than 9,000 offices of all sizes and all potential of session.</p>
								</div>
								<div class="container">
									<div class="row">
										<div class="w-25percent lg:w-50percent sm:w-full">
											<div
												class="relative flex flex-col bg-slate-200 transition-all rounded-6 p-30 mx-15 mb-30 hover:bg-primary">
												<h3 class="ld-fh-element relative mb-0/5em text-22 text-slate-900">
													Paris</h3>
												<p class="ld-fh-element relative mb-0/5em text-17 leading-1/6em">
													290 Maryam Sprins 260,
													<br>
													Courbevoie, Paris, France
													<br>
													<br>
													+47 213 5941 295
												</p>
											</div>
										</div>
										<div class="w-25percent lg:w-50percent sm:w-full">
											<div
												class="relative flex flex-col bg-slate-200 transition-all rounded-6 p-30 mx-15 mb-30 hover:bg-primary">
												<h3 class="ld-fh-element relative mb-0/5em text-22 text-slate-900">
													Tokyo</h3>
												<p class="ld-fh-element relative mb-0/5em text-17 leading-1/6em">
													37 Valentin Rapids Apt.
													<br>
													Tokyo, Japan
													<br>
													<br>
													+17 113 6946 36
												</p>
											</div>
										</div>
										<div class="w-25percent lg:w-50percent sm:w-full">
											<div
												class="relative flex flex-col bg-slate-200 transition-all rounded-6 p-30 mx-15 mb-30 hover:bg-primary">
												<h3 class="ld-fh-element relative mb-0/5em text-22 text-slate-900">
													London</h3>
												<p class="ld-fh-element relative mb-0/5em text-17 leading-1/6em">
													82 Bernie Greens Apt.
													<br>
													London, UK
													<br>
													<br>
													+36 213 5941 295
												</p>
											</div>
										</div>
										<div class="w-25percent lg:w-50percent sm:w-full">
											<div
												class="relative flex flex-col bg-slate-200 transition-all rounded-6 p-30 mx-15 mb-30 hover:bg-primary">
												<h3 class="ld-fh-element relative mb-0/5em text-22 text-slate-900"> New
													York</h3>
												<p class="ld-fh-element relative mb-0/5em text-17 leading-1/6em">
													21 Valentin Rapids Apt. New Jersey, NYC
													<br>
													<br>
													+47 213 5941 295
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section> -->
				<!-- End Global Offices -->

			</div>
			<!-- End lqd-contents-wrap -->
		</main>

@endsection

@section('script')

@endsection