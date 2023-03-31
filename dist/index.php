<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Seven HTML Free  - Bootstrap 5 HTML Multipurpose Light/Dark Admin Dashboard Theme
Upgrade to Pro: https://keenthemes.com/products/seven-html-pro
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
	<base href="">
	<title>Program Lab</title>
	<meta name="description"
		content="Seven admin dashboard live demo. Check out all the features of the admin panel. Light &amp; dark skins. A large number of settings, additional services and widgets." />
	<meta name="keywords"
		content="Seven, bootstrap, bootstrap 5, dmin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta charset="utf-8" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title"
		content="Seven HTML Free - Bootstrap 5 HTML Multipurpose Light/Dark Admin Dashboard Theme" />
	<meta property="og:url" content="https://keenthemes.com/products/seven-html-pro" />
	<meta property="og:site_name" content="Keenthemes | Seven HTML Free" />
	<link rel="canonical" href="Https://preview.keenthemes.com/seven-html-free" />
	<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Page Vendor Stylesheets(used by this page)-->
	<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Page Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-enabled">
	<!--begin::Main-->
	<!--begin::Root-->

	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
			<!--begin::Aside-->
			<div id="kt_aside" class="aside aside-extended bg-white" data-kt-drawer="true" data-kt-drawer-name="aside"
				data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
				data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
				<!--begin::Primary-->
				<div class="aside-primary d-flex flex-column align-items-lg-center flex-row-auto">
					<!--begin::Logo-->
					<div class="aside-logo d-none d-lg-flex flex-column align-items-center flex-column-auto py-10"
						id="kt_aside_logo">
						<a href="/dist/">
							<img alt="Logo" src="assets/media/logos/logo-default.svg" class="h-50px" />
						</a>
					</div>
					<!--end::Logo-->
					<!--begin::Nav-->
					<div class="aside-nav d-flex flex-column align-items-center flex-column-fluid w-100 pt-5 pt-lg-0"
						id="kt_aside_nav">
						<!--begin::Wrapper-->
						<div class="hover-scroll-y mb-10" data-kt-scroll="true"
							data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
							data-kt-scroll-wrappers="#kt_aside_nav"
							data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-offset="0px">
							<!--begin::Nav-->
							<ul class="nav flex-column">
								<li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover"
									data-bs-placement="right" data-bs-dismiss="click" title="Menu">
									<!--begin::Nav link-->
									<a class="nav-link btn btn-custom btn-icon" data-bs-toggle="tab"
										href="#kt_aside_nav_tab_menu">
										<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
										<span class="svg-icon svg-icon-2x">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
												<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
													fill="black" />
												<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
													fill="black" />
												<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</a>
									<!--end::Nav link-->
								</li>
								<!--end::Nav item-->
								<!--begin::Nav item-->
								<!--end::Nav item-->
							</ul>
							<!--end::Tabs-->
						</div>
						<!--end::Nav-->
					</div>
					<!--end::Nav-->

				</div>
				<!--end::Primary-->

			</div>
			<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<!--begin::Header-->
				<div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
					data-kt-sticky-offset="{default: '200px', lg: '300px'}">
					<!--begin::Container-->
					<div class="container-xxl d-flex align-items-center justify-content-between"
						id="kt_header_container">
						<!--begin::Page title-->
						<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0"
							data-kt-swapper="true" data-kt-swapper-mode="prepend"
							data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
							<!--begin::Heading-->
							<h1 class="text-dark fw-bold my-0 fs-2">Все проекты</h1>
							<!--end::Heading-->
							<!--begin::Breadcrumb-->
							<ul class="breadcrumb breadcrumb-line text-muted fw-bold fs-base my-1">
								<li class="breadcrumb-item text-muted">
									<a href="/dist" class="text-muted">Домой</a>
								</li>
								<li class="breadcrumb-item text-dark">Проекты</li>
							</ul>
							<!--end::Breadcrumb-->
						</div>
						<!--end::Page title=-->
						<!--begin::Wrapper-->
						<div class="d-flex d-lg-none align-items-center ms-n2 me-2">
							<!--begin::Aside mobile toggle-->
							<div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
								<span class="svg-icon svg-icon-2x">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
										fill="none">
										<path
											d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
											fill="black" />
										<path opacity="0.3"
											d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
											fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Aside mobile toggle-->
							<!--begin::Logo-->
							<a href="/dist" class="d-flex align-items-center">
								<img alt="Logo" src="assets/media/logos/logo-default.svg" class="h-40px" />
							</a>
							<!--end::Logo-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header-->
				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<!--begin::Container-->
					<div class="container-xxl" id="kt_content_container">

						<div class="row gy-5 g-xl-8">
							<!--begin::Col-->
							<div class="col-xl-12">
								<!--begin::Tables Widget 3-->
								<div class="card card-xl-stretch mb-5 mb-xl-8">
									<!--begin::Header-->
									<div class="card-header border-0 pt-5">
										<form data-kt-search-element="form"
											class="w-60 position-relative mb-5 search-users" autocomplete="off">
											<!--begin::Hidden input(Added to disable form autocomplete)-->
											<input type="hidden" />
											<!--end::Hidden input-->

											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
											<!--end::Icon-->

											<!--begin::Input-->
											<input type="number"
												class="form-control form-control-lg form-control-solid px-15"
												name="search" value="" placeholder="Поиск по id..."
												min="0"
												data-kt-search-element="input" id="info-id" data-search />
											<!--end::Input-->
											<input type="submit" name="search-id" class="btn btn-primary hover-elevate-up" id="search" value="Поиск">
										</form>

										<div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
											data-bs-trigger="hover" title="Click to add a user">
											<div class="d-flex flex-shrink-0">
												<!--begin::Invite user-->
												<div class="d-flex ms-3">
													<a href="#" id="newUser" class="btn btn-info" tooltip="New Member"
														data-bs-toggle="modal"
														data-bs-target="#kt_modal_invite_friends">+Добавить версию PLUnity</a>
												</div>
												<!--end::Invite user-->
											</div>
										</div>
									</div>
									<!--end::Header-->
									<!--begin::Body-->
									<div class="card-body py-3">
										<!--begin::Table container-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table
												class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
												<!--begin::Table head-->
												<thead>
													<tr class="fw-bolder text-muted">
														<th class="min-w-150px">id</th>
														<th class="min-w-140px">Версия</th>
														<th class="min-w-120px">Описание</th>
														<th class="min-w-100px text-end">Действие</th>
													</tr>
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody class="hide" id="search-tbody">
													
												</tbody>
												<tbody id="list-tbody">
														<?php include('application/view/listVersions_view.php') ?>
												</tbody>
												<!--end::Table body-->
											</table>
											<!--end::Table-->
										</div>
										<!--end::Table container-->
									</div>
									<!--begin::Body-->
								</div>
								<!--end::Tables Widget 3-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->

						</div>
						<!--end::Row-->
						<!--begin::Row-->

					</div>
					<!--end::Container-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
					<!--begin::Container-->
					<div class="container-xxl d-flex flex-column flex-md-row flex-stack">
						<!--begin::Copyright-->
						<div class="text-dark order-2 order-md-1">
							<span class="text-gray-400 fw-bold me-1">Created by</span>
							<a href="https://keenthemes.com" target="_blank"
								class="text-muted text-hover-primary fw-bold me-2 fs-6">Keenthemes</a>
						</div>
						<!--end::Copyright-->

					</div>
					<!--end::Container-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Root-->
	<!--begin::Drawers-->
	<!--begin::Activities drawer-->

	<!--end::Exolore drawer-->
	<!--end::Drawers-->
	<!--begin::Modals-->
	<!--begin::Modal - Invite Friends-->
	<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog mw-650px" id="load-modal">
			<!--begin::Modal content-->
			<!-- TYTATYTAYTYTAYYAT -->
			<!--end::Modal - Invite Friend-->
			<!--begin::Modal - Create App-->
			<!--end::Modal - Create App-->
			<!--begin::Modal - Upgrade plan-->
			<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-xl">
					<!--begin::Modal content-->
					<div class="modal-content rounded">
						<!--begin::Modal header-->
						<div class="modal-header justify-content-end border-0 pb-0">
							<!--begin::Close-->
							<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
								<span class="svg-icon svg-icon-1">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
										fill="none">
										<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
											transform="rotate(-45 6 17.3137)" fill="black" />
										<rect x="7.41422" y="6" width="16" height="2" rx="1"
											transform="rotate(45 7.41422 6)" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Close-->
						</div>
						<!--end::Modal header-->
						<!--begin::Modal body-->
						<div class="modal-body pt-0 pb-15 px-5 px-xl-20">
							<!--begin::Heading-->
							<div class="mb-13 text-center">
								<h1 class="mb-3">Upgrade a Plan</h1>
								<div class="text-muted fw-bold fs-5">If you need more info, please check
									<a href="#" class="link-primary fw-bolder">Pricing Guidelines</a>.
								</div>
							</div>
							<!--end::Heading-->
							<!--begin::Plans-->
							<div class="d-flex flex-column">
								<!--begin::Nav group-->
								<div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
									<a href="#"
										class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active"
										data-kt-plan="month">Monthly</a>
									<a href="#" class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3"
										data-kt-plan="annual">Annual</a>
								</div>
								<!--end::Nav group-->
								<!--begin::Row-->
								<div class="row mt-10">
									<!--begin::Col-->
									<div class="col-lg-6 mb-10 mb-lg-0">
										<!--begin::Tabs-->
										<div class="nav flex-column">
											<!--begin::Tab link-->
											<div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6"
												data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
												<!--end::Description-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Radio-->
													<div
														class="form-check form-check-custom form-check-solid form-check-success me-6">
														<input class="form-check-input" type="radio" name="plan"
															checked="checked" value="startup" />
													</div>
													<!--end::Radio-->
													<!--begin::Info-->
													<div class="flex-grow-1">
														<h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">
															Startup
														</h2>
														<div class="fw-bold opacity-50">Best for startups</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::Description-->
												<!--begin::Price-->
												<div class="ms-5">
													<span class="mb-2">$</span>
													<span class="fs-3x fw-bolder" data-kt-plan-price-month="39"
														data-kt-plan-price-annual="399">39</span>
													<span class="fs-7 opacity-50">/
														<span data-kt-element="period">Mon</span></span>
												</div>
												<!--end::Price-->
											</div>
											<!--end::Tab link-->
											<!--begin::Tab link-->
											<div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
												data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
												<!--end::Description-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Radio-->
													<div
														class="form-check form-check-custom form-check-solid form-check-success me-6">
														<input class="form-check-input" type="radio" name="plan"
															value="advanced" />
													</div>
													<!--end::Radio-->
													<!--begin::Info-->
													<div class="flex-grow-1">
														<h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">
															Advanced
														</h2>
														<div class="fw-bold opacity-50">Best for 100+ team size</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::Description-->
												<!--begin::Price-->
												<div class="ms-5">
													<span class="mb-2">$</span>
													<span class="fs-3x fw-bolder" data-kt-plan-price-month="339"
														data-kt-plan-price-annual="3399">339</span>
													<span class="fs-7 opacity-50">/
														<span data-kt-element="period">Mon</span></span>
												</div>
												<!--end::Price-->
											</div>
											<!--end::Tab link-->
											<!--begin::Tab link-->
											<div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
												data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
												<!--end::Description-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Radio-->
													<div
														class="form-check form-check-custom form-check-solid form-check-success me-6">
														<input class="form-check-input" type="radio" name="plan"
															value="enterprise" />
													</div>
													<!--end::Radio-->
													<!--begin::Info-->
													<div class="flex-grow-1">
														<h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">
															Enterprise
															<span class="badge badge-light-success ms-2 fs-7">Most
																popular</span>
														</h2>
														<div class="fw-bold opacity-50">Best value for 1000+ team</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::Description-->
												<!--begin::Price-->
												<div class="ms-5">
													<span class="mb-2">$</span>
													<span class="fs-3x fw-bolder" data-kt-plan-price-month="999"
														data-kt-plan-price-annual="9999">999</span>
													<span class="fs-7 opacity-50">/
														<span data-kt-element="period">Mon</span></span>
												</div>
												<!--end::Price-->
											</div>
											<!--end::Tab link-->
											<!--begin::Tab link-->
											<div
												class="nav-link btn btn-outline btn-outline-dashed btn-color-dark d-flex flex-stack text-start p-6">
												<!--end::Description-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Radio-->
													<div
														class="form-check form-check-custom form-check-solid form-check-success me-6">
														<input class="form-check-input" type="radio" name="plan"
															value="custom" />
													</div>
													<!--end::Radio-->
													<!--begin::Info-->
													<div class="flex-grow-1">
														<h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">
															Custom
														</h2>
														<div class="fw-bold opacity-50">Requet a custom license</div>
													</div>
													<!--end::Info-->
												</div>
												<!--end::Description-->
												<!--begin::Price-->
												<div class="ms-5">
													<a href="#" class="btn btn-sm btn-primary">Contact Us</a>
												</div>
												<!--end::Price-->
											</div>
											<!--end::Tab link-->
										</div>
										<!--end::Tabs-->
									</div>
									<!--end::Col-->
									
								</div>
								<!--end::Row-->
							</div>
							<!--end::Plans-->	
						</div>
						<!--end::Modal body-->
					</div>
					<!--end::Modal content-->
				</div>
				<!--end::Modal dialog-->
			</div>
			<!--end::Modal - Upgrade plan-->
			<!--end::Modals-->
			<!--begin::Scrolltop-->
			<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
				<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
				<span class="svg-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
							fill="black" />
						<path
							d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
							fill="black" />
					</svg>
				</span>
				<!--end::Svg Icon-->
			</div>
			<!--end::Scrolltop-->
			<!--end::Main-->
			<script>var hostUrl = "assets/";</script>
			<!--begin::Javascript-->
			<!--begin::Global Javascript Bundle(used by all pages)-->
			<script defer src="assets/js/main.js"></script>
			<script src="assets/plugins/global/plugins.bundle.js"></script>
			<script src="assets/js/scripts.bundle.js"></script>
			<!--end::Global Javascript Bundle-->
			<!--begin::Page Vendors Javascript(used by this page)-->
			<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
			<!--end::Page Vendors Javascript-->
			<!--begin::Page Custom Javascript(used by this page)-->
			<script src="assets/js/custom/widgets.js"></script>
			<!--end::Page Custom Javascript-->
			<!--end::Javascript-->
</body>
<!--end::Body-->

</html>