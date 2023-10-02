<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamsestate.dreamguystech.com/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Sep 2023 13:37:29 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
<title>Ejar - ايجار </title>

<link rel="shortcut icon" href="{{ asset('Front/assets/img/favicon.png') }}" type="image/x-icon">

<link rel="stylesheet" href="{{ asset('Front/assets/css/bootstrap.min.css') }}">

<link rel="stylesheet" href="{{ asset('Front/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('Front/assets/plugins/fontawesome/css/all.min.css') }}">

<link rel="stylesheet" href="{{ asset('Front/assets/css/feather.css') }}">

<link rel="stylesheet" href="{{ asset('Front/assets/plugins/boxicons/css/boxicons.min.css') }}">

<link rel="stylesheet" href="{{ asset('Front/assets/css/owl.carousel.min.css') }}">

<link rel="stylesheet" href="{{ asset('Front/assets/css/aos.css') }}">

<link rel="stylesheet" href="{{ asset('Front/assets/plugins/select2/css/select2.min.css') }}">

<link rel="stylesheet" href="{{ asset('Front/assets/css/style.css') }}">
</head>
<body>

<div class="page-loader">
<div class="page-loader-inner">
<img src="{{ asset('Front/assets/img/icons/loader.svg') }}" alt="Loader">
<label><i class="fa-solid fa-circle"></i></label>
<label><i class="fa-solid fa-circle"></i></label>
<label><i class="fa-solid fa-circle"></i></label>
</div>
</div>


<div class="main-wrapper">

<header class="header header-fix">

<nav class="navbar navbar-expand-lg header-nav">
<div class="navbar-header">
<a id="mobile_btn" href="javascript:void(0);">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>
<a href="{{ url('/') }}" class="navbar-brand logo">
<img src="{{ asset('images/LOGO-1.png') }}" style="    max-width: 54px!important;"  class="img-fluid" alt="Logo">
</a>
</div>
<div class="main-menu-wrapper">
<div class="menu-header">
<a href="{{ url('/') }}" class="menu-logo">
<img src="{{ asset('images/LOGO-1.png') }}" style="    max-width: 54px!important;" class="img-fluid" alt="Logo">
</a>
<a id="menu_close" class="menu-close" href="javascript:void(0);">
<i class="fas fa-times"></i>
</a>
</div>
<ul class="main-nav">
<li class="active">
<a href="{{ url('/') }}">Home</a>
</li>

    {{-- <li class="has-submenu">
    <a href="javascript:void(0);">Listing <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li class="has-submenu">
<a href="javascript:void(0);">Buy Property</a>
<ul class="submenu">
<li><a href="buy-property-grid.html">Buy Grid</a></li>
<li><a href="buy-property-list.html">Buy List</a></li>
<li><a href="buy-property-grid-sidebar.html">Buy Grid With Sidebar</a></li>
<li><a href="buy-property-list-sidebar.html">Buy List With Sidebar</a></li>
<li><a href="buy-grid-map.html">Buy Grid with map</a></li>
<li><a href="buy-list-map.html">Buy List with map</a></li>
<li><a href="buy-details.html">Buy Details</a></li>
</ul>
</li>
<li class="has-submenu">
<a href="javascript:void(0);">Rent Property</a>
<ul class="submenu">
<li><a href="rent-property-grid.html">Rent Grid</a></li>
<li><a href="rent-property-list.html">Rent List</a></li>
<li><a href="rent-property-grid-sidebar.html">Rent Grid With Sidebar</a></li>
<li><a href="rent-property-list-sidebar.html">Rent List With Sidebar</a></li>
<li><a href="rent-grid-map.html">Rent Grid with map</a></li>
<li><a href="rent-list-map.html">Rent List with map</a></li>
<li><a href="rent-details.html">Rent Details</a></li>
</ul>
</li>
</ul>
</li>--}}
{{-- <li class="has-submenu">
<a href="javascript:void(0);">Agent <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li><a href="agent-grid.html">Agent Grid</a></li>
<li><a href="agent-list.html">Agent List</a></li>
<li><a href="agent-grid-sidebar.html">Agent Grid With Sidebar</a></li>
<li><a href="agent-list-sidebar.html">Agent List With Sidebar</a></li>
<li><a href="agent-details.html">Agent Details</a></li>
</ul>
</li>
<li class="has-submenu">
<a href="javascript:void(0);">Agency <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li><a href="agency-grid.html">Agency Grid</a></li>
<li><a href="agency-list.html">Agency List</a></li>
<li><a href="agency-grid-sidebar.html">Agency Grid With Sidebar</a></li>
<li><a href="agency-list-sidebar.html">Agency List With Sidebar</a></li>
<li><a href="agency-details.html">Agency Details</a></li>
</ul>
</li> --}}
{{-- <li class="has-submenu">
<a href="javascript:void(0);">Pages <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li><a href="about-us.html">About Us</a></li>
<li class="has-submenu">
<a href="javascript:void(0);">Authentication</a>
<ul class="submenu">
<li><a href="register.html">Signup</a></li>
<li><a href="login.html">Signin</a></li>
<li><a href="forgot-password.html">Forgot Password</a></li>
<li><a href="reset-password.html">Reset Password</a></li>
</ul>
</li>
<li><a href="invoice-details.html">Invoice Details</a></li>
<li class="has-submenu">
<a href="javascript:void(0);">Error Page</a>
<ul class="submenu">
<li><a href="error-404.html">404 Error</a></li>
<li><a href="error-500.html">500 Error</a></li>
</ul>
</li>
<li><a href="pricing.html">Pricing</a></li>
<li><a href="faq.html">FAQ</a></li>
<li><a href="gallery.html">Gallery</a></li>
<li><a href="our-team.html">Our Team</a></li>
<li><a href="testimonial.html">Testimonials</a></li>
<li><a href="terms-condition.html">Terms & Conditions</a></li>
<li><a href="privacy-policy.html">Privacy Policy</a></li>
<li><a href="maintenance.html">Maintenance</a></li>
<li><a href="coming-soon.html">Coming Soon</a></li>
</ul>
</li>
<li class="has-submenu">
<a href="javascript:void(0);">Blog <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li><a href="blog-list.html">Blog List</a></li>
<li><a href="blog-grid.html">Blog Grid</a></li>
<li><a href="blog-details.html">Blog Details</a></li>
</ul>
</li> --}}



<li><a href="contact-us.html">Contact Us</a></li>


{{-- <li class="searchbar">
<a href="javascript:void(0);">
<img src="Front/assets/img/icons/search-icon.svg" alt="img">
</a>
</li> --}}


</ul>
</div>
<ul class="nav header-navbar-rht">

    @if (!auth()->check())


    <li>
        <a href="register.html" class="btn btn-primary"><i class="feather-user-plus"></i>Sign Up</a>
        </li>

        <li>
        <a href="login.html" class="btn sign-btn"><i class="feather-unlock"></i>Sign In</a>
        </li>


    @else
    <li class="new-property-btn">
        <a href="add-new-property.html">
        <i class="bx bxs-plus-circle"></i> Add New Property
        </a>
        </li>
@endif



</ul>
</nav>
</header>


@yield('body')







<section class="cities-list-sec">
    <div class="container">
    <div class="section-heading">
<h2>Cities With Listing</h2>
<div class="sec-line">
<span class="sec-line1"></span>
<span class="sec-line2"></span>
</div>
<p>Destinations we love the most</p>
</div>
<div class="row">
    <div class="col-lg-12">
    <div class="city-card-slider owl-carousel">
    <div class="city-first-card" data-aos="fade-down" data-aos-duration="2000">
    <div class="city-list">
    <div class="city-img">
<img src="Front/assets/img/city/city-1.jpg" alt="City">
</div>
<div class="city-name">
<h5>New York</h5>
<p>300 Properties</p>
</div>
<div class="arrow-overlay">
<a href="rent-property-grid.html"><i class="fa-solid fa-arrow-right"></i></a>
</div>
</div>
<div class="city-list">
    <div class="city-img">
<img src="Front/assets/img/city/city-2.jpg" alt="City">
</div>
<div class="city-name">
<h5>Singapore</h5>
<p>400 Properties</p>
</div>
<div class="arrow-overlay">
<a href="rent-property-grid.html"><i class="fa-solid fa-arrow-right"></i></a>
</div>
</div>
</div>
<div class="city-card-two" data-aos="fade-down" data-aos-duration="2000">
    <div class="city-list">
    <div class="city-img">
<img src="Front/assets/img/city/city-3.jpg" alt="City">
</div>
<div class="city-name">
<h5>Thailand</h5>
<p>200 Properties</p>
</div>
<div class="arrow-overlay">
<a href="rent-property-grid.html"><i class="fa-solid fa-arrow-right"></i></a>
</div>
</div>
<div class="city-list">
    <div class="city-img">
<img src="Front/assets/img/city/city-4.jpg" alt="City">
</div>
<div class="city-name">
<h5>Argentina</h5>
<p>740 Properties</p>
</div>
<div class="arrow-overlay">
<a href="rent-property-grid.html"><i class="fa-solid fa-arrow-right"></i></a>
</div>
</div>
</div>
<div class="city-card-three" data-aos="fade-down" data-aos-duration="2000">
    <div class="city-list">
    <div class="city-img">
<img src="Front/assets/img/city/city-5.jpg" alt="City">
</div>
<div class="city-name">
<h5>United Kingdom</h5>
<p>1450 Properties</p>
</div>
<div class="arrow-overlay">
<a href="rent-property-grid.html"><i class="fa-solid fa-arrow-right"></i></a>
</div>
</div>
<div class="city-list">
    <div class="city-img">
<img src="Front/assets/img/city/city-1.jpg" alt="City">
</div>
<div class="city-name">
<h5>United Arab Emirates</h5>
<p>100 Properties</p>
</div>
<div class="arrow-overlay">
<a href="rent-property-grid.html"><i class="fa-solid fa-arrow-right"></i></a>
</div>
</div>
</div>
<div class="city-first-card" data-aos="fade-down" data-aos-duration="2000">
    <div class="city-list">
    <div class="city-img">
<img src="Front/assets/img/city/city-1.jpg" alt="City">
</div>
<div class="city-name">
<h5>USA</h5>
<p>320 Properties</p>
</div>
<div class="arrow-overlay">
<a href="rent-property-grid.html"><i class="fa-solid fa-arrow-right"></i></a>
</div>
</div>
<div class="city-list">
    <div class="city-img">
<img src="Front/assets/img/city/city-2.jpg" alt="City">
</div>
<div class="city-name">
<h5>Singapore</h5>
<p>500 Properties</p>
</div>
<div class="arrow-overlay">
<a href="rent-property-grid.html"><i class="fa-solid fa-arrow-right"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="feature-property-sec for-rent">
    <div class="container">
    <div class="section-heading text-center">
<h2>Featured Properties for Rent</h2>
<div class="sec-line">
<span class="sec-line1"></span>
<span class="sec-line2"></span>
</div>
<p>Hand-picked selection of quality places</p>
</div>
<div class="row justify-content-center">
    <div class="col-md-12">
    <div class="feature-slider owl-carousel">
    <div class="slider-col">
    <div class="product-custom" data-aos="fade-down" data-aos-duration="2000">
    <div class="profile-widget">
    <div class="doc-img">
<a href="rent-details.html" class="property-img">
<img class="img-fluid" alt="Property Image" src="Front/assets/img/product/product-6.jpg">
</a>
<div class="product-amount">
<h5><span>$2,200 </span> / Night</h5>
</div>
<div class="featured">
<span>Featured</span>
</div>
<div class="new-featured">
<span>New</span>
</div>
<a href="javascript:void(0)">
    <div class="favourite selected">
<span><i class="fa-regular fa-heart"></i></span>
</div>
</a>
</div>
<div class="pro-content">
    <div class="rating">
<span class="rating-count">
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
</span>
<span class="rating-review">Excellent</span>
</div>
<h3 class="title">
<a href="rent-details.html">Beautiful Condo Room</a>
</h3>
<p><i class="feather-map-pin"></i> 318-S Oakley Blvd, Chicago, IL 60612, USA</p>
<ul class="d-flex details">
<li>
<img src="Front/assets/img/icons/bed-icon.svg" alt="bed-icon">
4 Beds
</li>
<li>
<img src="Front/assets/img/icons/bath-icon.svg" alt="bath-icon">
4 Baths
</li>
<li>
<img src="Front/assets/img/icons/building-icon.svg" alt="building-icon">
35000 Sqft
</li>
</ul>
<ul class="property-category d-flex justify-content-between align-items-center">
<li class="user-info">
<a href="rent-details.html"><img src="Front/assets/img/profiles/avatar-01.jpg" class="img-fluid avatar" alt="User"></a>
<div class="user-name">
<h6><a href="rent-details.html">Marc Silva</a></h6>
<p>Newyork</p>
</div>
</li>
<li>
<a href="rent-details.html" class="btn-primary">Book Now</a>
</li>
</ul>
</div>
</div>
</div>
<div class="product-custom" data-aos="fade-down" data-aos-duration="2000">
    <div class="profile-widget">
    <div class="doc-img">
<a href="rent-details.html" class="property-img">
<img class="img-fluid" alt="Property Image" src="Front/assets/img/product/product-7.jpg">
</a>
<div class="product-amount">
<h5><span>$1,400 </span> / Night</h5>
</div>
<div class="featured">
<span>Featured</span>
</div>
<a href="javascript:void(0)">
    <div class="favourite">
<span><i class="fa-regular fa-heart"></i></span>
</div>
</a>
</div>
<div class="pro-content">
    <div class="rating">
<span class="rating-count">
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
</span>
<span class="rating-review">Excellent</span>
</div>
<h3 class="title">
<a href="rent-details.html">Grand Mahaka</a>
</h3>
<p><i class="feather-map-pin"></i> 470 Park Ave S, New York, NY 10016</p>
<ul class="d-flex details">
<li>
<img src="Front/assets/img/icons/bed-icon.svg" alt="bed-icon">
4 Beds
</li>
<li>
<img src="Front/assets/img/icons/bath-icon.svg" alt="bath-icon">
4 Baths
</li>
<li>
<img src="Front/assets/img/icons/building-icon.svg" alt="building-icon">
35000 Sqft
</li>
</ul>
<ul class="property-category d-flex justify-content-between align-items-center">
<li class="user-info">
<a href="javascript:void(0);"><img src="Front/assets/img/profiles/avatar-02.jpg" class="img-fluid avatar" alt="User"></a>
<div class="user-name">
<h6><a href="rent-details.html">Karen Maria</a></h6>
<p>South Dokata</p>
</div>
</li>
<li>
<a href="rent-details.html" class="btn-primary">Book Now</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="slider-col">
    <div class="product-custom" data-aos="fade-down" data-aos-duration="2000">
    <div class="profile-widget">
    <div class="doc-img">
<a href="rent-details.html" class="property-img">
<img class="img-fluid" alt="Property Image" src="Front/assets/img/product/product-8.jpg">
</a>
<div class="product-amount">
<h5><span>$1,500 </span> / Night</h5>
</div>
<div class="featured">
<span>Featured</span>
</div>
<a href="javascript:void(0)">
    <div class="favourite selected">
<span><i class="fa-regular fa-heart"></i></span>
</div>
</a>
</div>
<div class="pro-content">
    <div class="rating">
<span class="rating-count">
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
</span>
<span class="rating-review">Excellent</span>
</div>
<h3 class="title">
<a href="rent-details.html">Royal Apartment</a>
</h3>
<p><i class="feather-map-pin"></i> 82-25 Parsons Blvd, Jamaica, NY 11432, USA</p>
<ul class="d-flex details">
<li>
<img src="Front/assets/img/icons/bed-icon.svg" alt="bed-icon">
2 Beds
</li>
<li>
<img src="Front/assets/img/icons/bath-icon.svg" alt="bath-icon">
3 Baths
</li>
<li>
<img src="Front/assets/img/icons/building-icon.svg" alt="building-icon">
12000 Sqft
</li>
</ul>
<ul class="property-category d-flex justify-content-between align-items-center">
<li class="user-info">
<a href="rent-details.html"><img src="Front/assets/img/profiles/avatar-03.jpg" class="img-fluid avatar" alt="User"></a>
<div class="user-name">
<h6><a href="rent-details.html">Scott Gwin</a></h6>
<p>Minipoliies</p>
</div>
</li>
<li>
<a href="rent-details.html" class="btn-primary">Book Now</a>
</li>
</ul>
</div>
</div>
</div>
<div class="product-custom" data-aos="fade-down" data-aos-duration="2000">
    <div class="profile-widget">
    <div class="doc-img">
<a href="rent-details.html" class="property-img">
<img class="img-fluid" alt="Property Image" src="Front/assets/img/product/product-9.jpg">
</a>
<div class="product-amount">
<h5><span>$3,500 </span> / Night</h5>
</div>
<div class="featured">
<span>Featured</span>
</div>
<a href="javascript:void(0)">
    <div class="favourite">
<span><i class="fa-regular fa-heart"></i></span>
</div>
</a>
</div>
<div class="pro-content">
    <div class="rating">
<span class="rating-count">
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
</span>
<span class="rating-review">Excellent</span>
</div>
<h3 class="title">
<a href="rent-details.html">Lunaria Residence</a>
</h3>
<p><i class="feather-map-pin"></i> 518-520 8th Ave, New York, NY 10018, USA</p>
<ul class="d-flex details">
<li>
<img src="Front/assets/img/icons/bed-icon.svg" alt="bed-icon">
3 Beds
</li>
<li>
<img src="Front/assets/img/icons/bath-icon.svg" alt="bath-icon">
2 Baths
</li>
<li>
<img src="Front/assets/img/icons/building-icon.svg" alt="building-icon">
23000 Sqft
</li>
</ul>
<ul class="property-category d-flex justify-content-between align-items-center">
<li class="user-info">
<a href="rent-details.html"><img src="Front/assets/img/profiles/avatar-04.jpg" class="img-fluid avatar" alt="User"></a>
<div class="user-name">
<h6><a href="rent-details.html">Burdette</a></h6>
<p>Cambridge</p>
</div>
</li>
<li>
<a href="rent-details.html" class="btn-primary">Book Now</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="slider-col">
    <div class="product-custom" data-aos="fade-down" data-aos-duration="2000">
    <div class="profile-widget">
    <div class="doc-img">
<a href="rent-details.html" class="property-img">
<img class="img-fluid" alt="Property Image" src="Front/assets/img/product/product-10.jpg">
</a>
<div class="product-amount">
<h5><span>$4,500 </span> / Night</h5>
</div>
<div class="featured">
<span>Featured</span>
</div>
<a href="javascript:void(0)">
    <div class="favourite">
<span><i class="fa-regular fa-heart"></i></span>
</div>
</a>
</div>
<div class="pro-content">
    <div class="rating">
<span class="rating-count">
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
</span>
<span class="rating-review">Excellent</span>
</div>
<h3 class="title">
<a href="rent-details.html">Grand Villa house</a>
</h3>
<p><i class="feather-map-pin"></i> 470 Park Ave S, New York, NY 10016</p>
<ul class="d-flex details">
<li>
<img src="Front/assets/img/icons/bed-icon.svg" alt="bed-icon">
4 Beds
</li>
<li>
<img src="Front/assets/img/icons/bath-icon.svg" alt="bath-icon">
3 Baths
</li>
<li>
<img src="Front/assets/img/icons/building-icon.svg" alt="building-icon">
5000 Sqft
</li>
</ul>
<ul class="property-category d-flex justify-content-between align-items-center">
<li class="user-info">
<a href="rent-details.html"><img src="Front/assets/img/profiles/avatar-05.jpg" class="img-fluid avatar" alt="User"></a>
<div class="user-name">
<h6><a href="rent-details.html">Kell Robinson</a></h6>
<p>USA</p>
</div>
</li>
<li>
<a href="rent-details.html" class="btn-primary">Book Now</a>
</li>
</ul>
</div>
</div>
</div>
<div class="product-custom" data-aos="fade-down" data-aos-duration="2000">
    <div class="profile-widget">
    <div class="doc-img">
<a href="rent-details.html" class="property-img">
<img class="img-fluid" alt="Property Image" src="Front/assets/img/product/product-11.jpg">
</a>
<div class="product-amount">
<h5><span>$2,400 </span> / Night</h5>
</div>
<div class="featured">
<span>Featured</span>
</div>
<a href="javascript:void(0)">
    <div class="favourite">
<span><i class="fa-regular fa-heart"></i></span>
</div>
</a>
</div>
<div class="pro-content">
    <div class="rating">
<span class="rating-count">
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
</span>
<span class="rating-review">Excellent</span>
</div>
<h3 class="title">
<a href="rent-details.html">Stephen Alexander Homes</a>
</h3>
<p><i class="feather-map-pin"></i> 122 N Morgan St, Chicago, IL 60607, USA</p>
<ul class="d-flex details">
<li>
<img src="Front/assets/img/icons/bed-icon.svg" alt="bed-icon">
2 Beds
</li>
<li>
<img src="Front/assets/img/icons/bath-icon.svg" alt="bath-icon">
3 Baths
</li>
<li>
<img src="Front/assets/img/icons/building-icon.svg" alt="building-icon">
25000 Sqft
</li>
</ul>
<ul class="property-category d-flex justify-content-between align-items-center">
<li class="user-info">
<a href="rent-details.html"><img src="Front/assets/img/profiles/avatar-07.jpg" class="img-fluid avatar" alt="User"></a>
<div class="user-name">
<h6><a href="rent-details.html">Pittman</a></h6>
<p>Cambridge</p>
</div>
</li>
<li>
<a href="rent-details.html" class="btn-primary">Book Now</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="slider-col">
    <div class="product-custom" data-aos="fade-down" data-aos-duration="2000">
    <div class="profile-widget">
    <div class="doc-img">
<a href="rent-details.html" class="property-img">
<img class="img-fluid" alt="Property Image" src="Front/assets/img/product/product-7.jpg">
</a>
<div class="product-amount">
<h5><span>$1,400 </span> / Night</h5>
</div>
<div class="featured">
<span>Featured</span>
</div>
<a href="javascript:void(0)">
<div class="favourite">
<span><i class="fa-regular fa-heart"></i></span>
</div>
</a>
</div>
<div class="pro-content">
<div class="rating">
<span class="rating-count">
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
</span>
<span class="rating-review">Excellent</span>
</div>
<h3 class="title">
<a href="rent-details.html">Minimalist and bright flat</a>
</h3>
<p><i class="feather-map-pin"></i> 518-520 8th Ave, New York, NY 10018, USA</p>
<ul class="d-flex details">
<li>
<img src="Front/assets/img/icons/bed-icon.svg" alt="bed-icon">
2 Beds
</li>
<li>
<img src="Front/assets/img/icons/bath-icon.svg" alt="bath-icon">
2 Baths
</li>
<li>
<img src="Front/assets/img/icons/building-icon.svg" alt="building-icon">
18000 Sqft
</li>
</ul>
<ul class="property-category d-flex justify-content-between align-items-center">
<li class="user-info">
<a href="rent-details.html"><img src="Front/assets/img/profiles/avatar-10.jpg" class="img-fluid avatar" alt="User"></a>
<div class="user-name">
<h6><a href="rent-details.html">John Doe</a></h6>
<p>Newyork</p>
</div>
</li>
<li>
<a href="rent-details.html" class="btn-primary">Book Now</a>
</li>
</ul>
</div>
</div>
</div>
<div class="product-custom" data-aos="fade-down" data-aos-duration="2000">
<div class="profile-widget">
<div class="doc-img">
<a href="rent-details.html" class="property-img">
<img class="img-fluid" alt="Property Image" src="Front/assets/img/product/product-9.jpg">
</a>
<div class="product-amount">
<h5><span>$3,500 </span> / Night</h5>
</div>
<div class="featured">
<span>Featured</span>
</div>
<a href="javascript:void(0)">
<div class="favourite">
<span><i class="fa-regular fa-heart"></i></span>
</div>
</a>
</div>
<div class="pro-content">
<div class="rating">
<span class="rating-count">
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
</span>
<span class="rating-review">Excellent</span>
</div>
<h3 class="title">
<a href="rent-details.html">Place perfect for nature</a>
</h3>
<p><i class="feather-map-pin"></i> 318-S Oakley Blvd, Chicago, IL 60612, USA</p>
<ul class="d-flex details">
<li>
<img src="Front/assets/img/icons/bed-icon.svg" alt="bed-icon">
3 Beds
</li>
<li>
<img src="Front/assets/img/icons/bath-icon.svg" alt="bath-icon">
1 Bath
</li>
<li>
<img src="Front/assets/img/icons/building-icon.svg" alt="building-icon">
12000 Sqft
</li>
</ul>
<ul class="property-category d-flex justify-content-between align-items-center">
<li class="user-info">
<a href="rent-details.html"><img src="Front/assets/img/profiles/avatar-12.jpg" class="img-fluid avatar" alt="User"></a>
<div class="user-name">
<h6><a href="rent-details.html">Richard</a></h6>
<p>Newyork</p>
</div>
</li>
<li>
<a href="rent-details.html" class="btn-primary">Book Now</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="view-property-btn d-flex justify-content-center" data-aos="fade-down" data-aos-duration="2000">
<a href="rent-property-grid.html" class="btn-primary">View All Properties</a>
</div>
</div>
</div>
</div>
<div class="bg-imgs">
<img src="Front/assets/img/bg/price-bg.png" class="bg-04" alt="Image">
</div>
</section>


<section class="counter-sec">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-3 col-md-6 col-sm-6 d-flex">
<div class="counter-box flex-fill" data-aos="fade-down" data-aos-duration="2000">
<div class="counter-icon">
<img src="Front/assets/img/icons/counter-icon-1.svg" alt="icon">
</div>
<div class="counter-value">
<h3 class="dash-count"><span class="counter-up">50</span>K</h3>
<h5>Listings Added </h5>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 d-flex">
<div class="counter-box flex-fill" data-aos="fade-down" data-aos-duration="2000">
<div class="counter-icon">
<img src="Front/assets/img/icons/counter-icon-2.svg" alt="icon">
</div>
<div class="counter-value">
<h3 class="dash-count"><span class="counter-up">3000</span>+</h3>
<h5>Agents Listed </h5>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 d-flex">
<div class="counter-box flex-fill" data-aos="fade-down" data-aos-duration="2000">
<div class="counter-icon">
<img src="Front/assets/img/icons/counter-icon-3.svg" alt="icon">
</div>
<div class="counter-value">
<h3 class="dash-count"><span class="counter-up">2000</span>+</h3>
<h5>Sales Completed </h5>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 d-flex">
<div class="counter-box flex-fill" data-aos="fade-down" data-aos-duration="2000">
<div class="counter-icon">
<img src="Front/assets/img/icons/counter-icon-4.svg" alt="icon">
</div>
<div class="counter-value">
<h3 class="dash-count"><span class="counter-up">5000</span>+</h3>
<h5>Users</h5>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="main-property-sec">
<div class="container">
<div class="main-property-details">
<div class="row justify-content-center">

<div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-duration="2000">
<div class="single-property-card">
<div class="img-card">
<a href="buy-property-grid.html"><img src="Front/assets/img/city/property-img-1.jpg" alt="Property Image"></a>
</div>
<div class="buy-property">
<h4><a href="buy-property-grid.html">Buy a Property</a></h4>
<a href="buy-property-grid.html" class="arrow buy-arrow"><i class="fa-solid fa-arrow-right"></i></a>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-duration="2000">
<div class="single-property-card">
<div class="img-card">
<a href="rent-property-grid.html"><img src="Front/assets/img/city/property-img-2.jpg" alt="Property Image"></a>
</div>
<div class="buy-property">
<h4><a href="rent-property-gridhtml.html">Sell a Property</a></h4>
<a href="rent-property-grid.html" class="arrow sell-arrow"><i class="fa-solid fa-arrow-right"></i></a>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-duration="2000">
<div class="single-property-card">
<div class="img-card">
<a href="rent-property-grid.html"><img src="Front/assets/img/city/property-img-3.jpg" alt="Property Image"></a>
</div>
<div class="buy-property">
<h4><a href="rent-property-grid.html">Rent a Property</a></h4>
<a href="rent-property-grid.html" class="arrow rent-arrow"><i class="fa-solid fa-arrow-right"></i></a>
</div>
</div>
</div>

</div>
<div class="bg-imgs">
<img src="Front/assets/img/bg/prop-bg.png" class="bg-10" alt="icon">
</div>
</div>

<div class="partners-sec">
<div class="section-heading text-center">
<h2>Hundreds of Partners Around the World</h2>
<div class="sec-line">
<span class="sec-line1"></span>
<span class="sec-line2"></span>
</div>
<p> Every day, we build trust through communication, transparency, and results.</p>
</div>
<div class="row">
<div class="col-md-12">
<div class="partners-slider owl-carousel">
<div class="partner-icon">
<img src="Front/assets/img/icons/partner-icon-1.svg" alt="Partners">
</div>
<div class="partner-icon">
<img src="Front/assets/img/icons/partner-icon-2.svg" alt="Partners">
</div>
<div class="partner-icon">
<img src="Front/assets/img/icons/partner-icon-3.svg" alt="Partners">
</div>
<div class="partner-icon">
<img src="Front/assets/img/icons/partner-icon-4.svg" alt="Partners">
</div>
<div class="partner-icon">
<img src="Front/assets/img/icons/partner-icon-5.svg" alt="Partners">
</div>
<div class="partner-icon">
<img src="Front/assets/img/icons/partner-icon-6.svg" alt="Partners">
</div>
</div>
</div>
</div>
</div>

</div>
<div class="bg-imgs">
<img src="Front/assets/img/icons/blue-circle.svg" class="bg-08" alt="icon">
</div>
</section>


<section class="testimonial-sec">
<div class="container">
<div class="section-heading">
<h2>Testimonials</h2>
<div class="sec-line">
<span class="sec-line1"></span>
<span class="sec-line2"></span>
</div>
<p>What our happy client says</p>
</div>
<div class="row">
<div class="col-md-12">
<div class="testimonial-slider owl-carousel">
<div class="testimonial-card" data-aos="fade-down" data-aos-duration="2000">
<div class="user-icon">
<a href="javascript:void(0);"><img src="Front/assets/img/profiles/avatar-01.jpg" alt="User"></a>
</div>
<p>Omnis velit quia. Perspiciatis et cupiditate. Voluptatum beatae asperiores dolor magnam fuga. Sed fuga est harum quo nesciunt sint. Optio veniam...Omnis velit quia. Perspiciatis et cupiditate. Voluptatum beatae asperiores dolor magnam fuga. Sed fuga est harum quo nesciunt sint. Optio veniam...</p>
<h4><a href="javascript:void(0);">Horace Cole</a></h4>
<div class="rating">
<span><i class="fa-solid fa-star"></i></span>
<span><i class="fa-solid fa-star"></i></span>
<span><i class="fa-solid fa-star"></i></span>
<span><i class="fa-solid fa-star"></i></span>
<span><i class="fa-solid fa-star"></i></span>
</div>
</div>
<div class="testimonial-card" data-aos="fade-down" data-aos-duration="2000">
<div class="user-icon">
<a href="javascript:void(0);"><img src="Front/assets/img/profiles/avatar-02.jpg" alt="User"></a>
</div>
<p>Omnis velit quia. Perspiciatis et cupiditate. Voluptatum beatae asperiores dolor magnam fuga. Sed fuga est harum quo nesciunt sint. Optio veniam...Omnis velit quia. Perspiciatis et cupiditate. Voluptatum beatae asperiores dolor magnam fuga. Sed fuga est harum quo nesciunt sint. Optio veniam...</p>
<h4><a href="javascript:void(0);">Karen Maria</a></h4>
<div class="rating">
<span><i class="fa-solid fa-star"></i></span>
<span><i class="fa-solid fa-star"></i></span>
<span><i class="fa-solid fa-star"></i></span>
<span><i class="fa-solid fa-star"></i></span>
<span><i class="fa-solid fa-star"></i></span>
</div>
</div>
<div class="testimonial-card" data-aos="fade-down" data-aos-duration="2000">
<div class="user-icon">
<a href="javascript:void(0);"><img src="Front/assets/img/profiles/avatar-03.jpg" alt="User"></a>
</div>
<p>Omnis velit quia. Perspiciatis et cupiditate. Voluptatum beatae asperiores dolor magnam fuga. Sed fuga est harum quo nesciunt sint. Optio veniam...Omnis velit quia. Perspiciatis et cupiditate. Voluptatum beatae asperiores dolor magnam fuga. Sed fuga est harum quo nesciunt sint. Optio veniam...</p>
<h4><a href="javascript:void(0);">Jack Nitzsche</a></h4>
<div class="rating">
<span><i class="fa-solid fa-star"></i></span>
<span><i class="fa-solid fa-star"></i></span>
<span><i class="fa-solid fa-star"></i></span>
<span><i class="fa-solid fa-star"></i></span>
<span><i class="fa-solid fa-star"></i></span>
</div>
</div>
<div class="testimonial-card" data-aos="fade-down" data-aos-duration="2000">
<div class="user-icon">
<a href="javascript:void(0);"><img src="Front/assets/img/profiles/avatar-04.jpg" alt="User"></a>
</div>
<p>Omnis velit quia. Perspiciatis et cupiditate. Voluptatum beatae asperiores dolor magnam fuga. Sed fuga est harum quo nesciunt sint. Optio veniam...Omnis velit quia. Perspiciatis et cupiditate. Voluptatum beatae asperiores dolor magnam fuga. Sed fuga est harum quo nesciunt sint. Optio veniam...</p>
<h4><a href="javascript:void(0);">Sofia Retz</a></h4>
<div class="rating">
<span><i class="fa-solid fa-star"></i></span>
<span><i class="fa-solid fa-star"></i></span>
<span><i class="fa-solid fa-star"></i></span>
<span><i class="fa-solid fa-star"></i></span>
<span><i class="fa-solid fa-star"></i></span>
</div>
</div>
<div class="testimonial-card" data-aos="fade-down" data-aos-duration="2000">
<div class="user-icon">
<a href="javascript:void(0);"><img src="Front/assets/img/profiles/avatar-05.jpg" alt="User"></a>
</div>
<p>Omnis velit quia. Perspiciatis et cupiditate. Voluptatum beatae asperiores dolor magnam fuga. Sed fuga est harum quo nesciunt sint. Optio veniam...Omnis velit quia. Perspiciatis et cupiditate. Voluptatum beatae asperiores dolor magnam fuga. Sed fuga est harum quo nesciunt sint. Optio veniam...</p>
<h4><a href="javascript:void(0);">John Doe</a></h4>
<div class="rating">
<span><i class="fa-solid fa-star"></i></span>
<span><i class="fa-solid fa-star"></i></span>
<span><i class="fa-solid fa-star"></i></span>
<span><i class="fa-solid fa-star"></i></span>
<span><i class="fa-solid fa-star"></i></span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="price-section">
<div class="container">
<div class="pricing-tab">
<div class="section-heading">
<h2>Pricing & Subscriptions</h2>
<div class="sec-line">
<span class="sec-line1"></span>
<span class="sec-line2"></span>
</div>
<p>Checkout our package, choose your package wisely</p>
</div>
<ul class="nav nav-pills" id="pills-tab" role="tablist">
<li class="nav-item" role="presentation">
<button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#monthly-price" type="button" role="tab" aria-controls="monthly-price" aria-selected="true">Monthly</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#yearly-price" type="button" role="tab" aria-controls="yearly-price" aria-selected="false">Yearly</button>
</li>
</ul>
</div>
<div class="tab-content" id="pills-tabContent">

<div class="tab-pane fade active show" id="monthly-price" role="tabpanel" aria-labelledby="pills-profile-tab">
<div class="row justify-content-center">

<div class="col-lg-4 col-md-6">
<div class="price-card aos" data-aos="flip-right" data-aos-easing="ease-out-cubic">
<div class="price-title">
<h3>Standard</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
</div>
<div class="price-features">
<h5>Key Features</h5>
<ul>
<li><span><i class="fa-regular fa-square-check"></i></span>10 Listing Per Login</li>
<li><span><i class="fa-regular fa-square-check"></i></span>100+ Users</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Enquiry On Listing</li>
<li><span><i class="fa-regular fa-square-check"></i></span>24 Hrs Support</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Custom Review</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Impact Reporting</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Onboarding & Account</li>
<li><span><i class="fa-regular fa-square-check"></i></span>API Access</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Transaction Tracking</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Branding</li>
</ul>
</div>
<div class="price-btn">
<a href="login.html" class="btn-primary">Get Quote</a>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6">
<div class="price-card" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
<div class="price-sticker">
<img src="Front/assets/img/icons/pricing-icon.svg" alt="price-sticker">
</div>
<div class="price-title">
<h3>Professional</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
</div>
<div class="price-features professional">
<h5>Key Features</h5>
<ul>
<li><span><i class="fa-regular fa-square-check"></i></span>20 Listing Per Login</li>
<li><span><i class="fa-regular fa-square-check"></i></span>100+ Users</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Enquiry On Listing</li>
<li><span><i class="fa-regular fa-square-check"></i></span>24 Hrs Support</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Custom Review</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Impact Reporting</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Onboarding & Account</li>
<li><span><i class="fa-regular fa-square-check"></i></span>API Access</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Transaction Tracking</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Branding</li>
</ul>
</div>
<div class="price-btn">
<a href="login.html" class="btn-primary">Get Quote</a>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6">
<div class="price-card" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
<div class="price-title">
<h3>Enterprise</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
</div>
<div class="price-features enterprise">
<h5>Key Features</h5>
<ul>
<li><span><i class="fa-regular fa-square-check"></i></span>30 Listing Per Login</li>
<li><span><i class="fa-regular fa-square-check"></i></span>100+ Users</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Enquiry On Listing</li>
<li><span><i class="fa-regular fa-square-check"></i></span>24 Hrs Support</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Custom Review</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Impact Reporting</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Onboarding & Account</li>
<li><span><i class="fa-regular fa-square-check"></i></span>API Access</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Transaction Tracking</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Branding</li>
</ul>
</div>
<div class="price-btn">
<a href="login.html" class="btn-primary">Get Quote</a>
</div>
</div>
</div>

</div>
</div>


<div class="tab-pane fade" id="yearly-price" role="tabpanel" aria-labelledby="pills-profile-tab">
<div class="row justify-content-center">

<div class="col-lg-4 col-md-6">
<div class="price-card">
<div class="price-title">
<h3>Standard</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
</div>
<div class="price-features">
<h5>Key Features</h5>
<ul>
<li><span><i class="fa-regular fa-square-check"></i></span>50 Listing per login</li>
<li><span><i class="fa-regular fa-square-check"></i></span>150+ Users</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Enquiry on listing</li>
<li><span><i class="fa-regular fa-square-check"></i></span>24 hrs Support</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Custom Review</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Impact Reporting</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Onboarding & Account</li>
<li><span><i class="fa-regular fa-square-check"></i></span>API Access</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Transaction tracking</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Branding</li>
</ul>
</div>
<div class="price-btn">
<a href="login.html" class="btn-primary">Get Quote</a>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6">
<div class="price-card">
<div class="price-title">
<h3>Professional</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
</div>
<div class="price-features professional">
<h5>Key Features</h5>
<ul>
<li><span><i class="fa-regular fa-square-check"></i></span>80 Listing per login</li>
<li><span><i class="fa-regular fa-square-check"></i></span>200+ Users</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Enquiry on listing</li>
<li><span><i class="fa-regular fa-square-check"></i></span>24 hrs Support</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Custom Review</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Impact Reporting</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Onboarding & Account</li>
<li><span><i class="fa-regular fa-square-check"></i></span>API Access</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Transaction tracking</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Branding</li>
</ul>
</div>
<div class="price-btn">
<a href="login.html" class="btn-primary">Get Quote</a>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6">
<div class="price-card">
<div class="price-title">
<h3>Enterprise</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
</div>
<div class="price-features enterprise">
<h5>Key Features</h5>
<ul>
<li><span><i class="fa-regular fa-square-check"></i></span>70 Listing per login</li>
<li><span><i class="fa-regular fa-square-check"></i></span>300+ Users</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Enquiry on listing</li>
<li><span><i class="fa-regular fa-square-check"></i></span>24 hrs Support</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Custom Review</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Impact Reporting</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Onboarding & Account</li>
<li><span><i class="fa-regular fa-square-check"></i></span>API Access</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Transaction tracking</li>
<li><span><i class="fa-regular fa-square-check"></i></span>Branding</li>
</ul>
</div>
<div class="price-btn">
<a href="login.html" class="btn-primary">Get Quote</a>
</div>
</div>
</div>

</div>
</div>

</div>
</div>
<div class="bg-imgs">
<img src="Front/assets/img/bg/price-bg.png" class="bg-05" alt="icon">
</div>
</section>


<section class="faq-section">
<div class="container">
<div class="row">
<div class="col-lg-4">
<div class="faq-img">
<img src="Front/assets/img/faq-img.jpg" alt="icon">
</div>
</div>
<div class="col-lg-8">
<div class="section-heading" data-aos="fade-down" data-aos-duration="2000">
<h2>Frequently Asked Questions</h2>
<div class="sec-line">
<span class="sec-line1"></span>
<span class="sec-line2"></span>
</div>
<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt</p>
</div>
<div class="faq-card" data-aos="fade-down" data-aos-duration="2000">
<h4 class="faq-title">
<a class="collapsed" data-bs-toggle="collapse" href="#faqone" aria-expanded="false">1. What are the costs to buy a house?</a>
</h4>
<div id="faqone" class="card-collapse collapse">
<div class="faq-info">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
</div>
</div>
</div>
<div class="faq-card" data-aos="fade-down" data-aos-duration="2000">
<h4 class="faq-title">
<a class="collapsed" data-bs-toggle="collapse" href="#faqtwo" aria-expanded="false">2. What are the steps to sell a house?</a>
</h4>
<div id="faqtwo" class="card-collapse collapse">
<div class="faq-info">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
</div>
</div>
</div>
<div class="faq-card" data-aos="fade-down" data-aos-duration="2000">
<h4 class="faq-title">
<a class data-bs-toggle="collapse" href="#faqthree" aria-expanded="false">3. Do you have loan consultants?</a>
</h4>
<div id="faqthree" class="card-collapse collapse show">
<div class="faq-info">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
</div>
</div>
</div>
<div class="faq-card" data-aos="fade-down" data-aos-duration="2000">
<h4 class="faq-title">
<a class="collapsed" data-bs-toggle="collapse" href="#faqfour" aria-expanded="false">4. When will the project be completed?</a>
</h4>
<div id="faqfour" class="card-collapse collapse">
<div class="faq-info">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
</div>
</div>
</div>
<div class="faq-card" data-aos="fade-down" data-aos-duration="2000">
<h4 class="faq-title">
<a class="collapsed" data-bs-toggle="collapse" href="#faqfive" aria-expanded="false">5.What are the steps to rent a house?</a>
</h4>
<div id="faqfive" class="card-collapse collapse">
<div class="faq-info">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="agent-section">
<div class="container">
<div class="row align-items-center">
<div class="col-md-8">
<div class="section-heading" data-aos="fade-down" data-aos-duration="2000">
<h2>Become a Real Estate Agent</h2>
<div class="sec-line">
<span class="sec-line1"></span>
<span class="sec-line2"></span>
</div>
<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt</p>
</div>
</div>
<div class="col-md-4">
<div class="register-btn" data-aos="fade-down" data-aos-duration="2000">
<a href="register.html" class="btn-primary">Register Now</a>
</div>
</div>
</div>
</div>
<div class="bg-imgs">
<img src="Front/assets/img/icons/blue-circle.svg" class="bg-06" alt="icon">
<img src="Front/assets/img/icons/red-circle.svg" class="bg-07" alt="icon">
</div>
</section>


<section class="latest-blog-sec">
<div class="container">
<div class="row">
<div class="col-md-8 mx-auto">
<div class="section-heading text-center">
<h2>Latest Blog</h2>
<div class="sec-line">
<span class="sec-line1"></span>
<span class="sec-line2"></span>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmodtempor incididunt</p>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="blog-slider owl-carousel">

<div class="blog-card" data-aos="fade-down" data-aos-duration="2000">
<div class="blog-img">
<a href="blog-details.html"><img src="Front/assets/img/blog/blog-1.jpg" alt="Blog Image"></a>
</div>
<div class="blog-content">
<div class="blog-property">
<span>Property</span>
</div>
<div class="blog-title">
<h3><a href="blog-details.html">How to achieve financial independence</a></h3>
<p>There are many variations of passages of lorem ipsum available.</p>
</div>
<ul class="property-category d-flex justify-content-between align-items-center">
<li class="user-info">
<a href="javascript:void(0);"><img src="Front/assets/img/profiles/avatar-01.jpg" class="img-fluid avatar" alt="User"></a>
<div class="user-name">
<h6><a href="javascript:void(0);">Doe John</a></h6>
<p>Posted on : 15 Jan 2023</p>
</div>
</li>
<li>
<a href="blog-details.html"><span><i class="fa-solid fa-arrow-right"></i></span></a>
</li>
</ul>
</div>
</div>


<div class="blog-card" data-aos="fade-down" data-aos-duration="2000">
<div class="blog-img">
<a href="blog-details.html"><img src="Front/assets/img/blog/blog-2.jpg" alt="Blog Image"></a>
</div>
<div class="blog-content">
<div class="blog-property">
<span>Advantages</span>
</div>
<div class="blog-title">
<h3><a href="blog-details.html">The most popular cities for homebuyers</a></h3>
<p>There are many variations of passages of lorem ipsum available.</p>
</div>
<ul class="property-category d-flex justify-content-between align-items-center">
<li class="user-info">
<a href="javascript:void(0);"><img src="Front/assets/img/profiles/avatar-03.jpg" class="img-fluid avatar" alt="User"></a>
<div class="user-name">
<h6><a href="javascript:void(0);">John</a></h6>
<p>Posted on : 15 Jan 2023</p>
</div>
</li>
<li>
<a href="blog-details.html"><span><i class="fa-solid fa-arrow-right"></i></span></a>
</li>
</ul>
</div>
</div>


<div class="blog-card" data-aos="fade-down" data-aos-duration="2000">
<div class="blog-img">
<a href="blog-details.html"><img src="Front/assets/img/blog/blog-3.jpg" alt="Blog Image"></a>
</div>
<div class="blog-content">
<div class="blog-property">
<span>Finanace</span>
</div>
<div class="blog-title">
<h3><a href="blog-details.html">Learn how real estate really shapes our future</a></h3>
<p>There are many variations of passages of lorem ipsum available.</p>
</div>
<ul class="property-category d-flex justify-content-between align-items-center">
<li class="user-info">
<a href="javascript:void(0);"><img src="Front/assets/img/profiles/avatar-05.jpg" class="img-fluid avatar" alt="User"></a>
<div class="user-name">
<h6><a href="javascript:void(0);">Eric Krok</a></h6>
<p>Posted on : 15 Jan 2023</p>
</div>
</li>
<li>
<a href="blog-details.html"><span><i class="fa-solid fa-arrow-right"></i></span></a>
</li>
</ul>
</div>
</div>


<div class="blog-card" data-aos="fade-down" data-aos-duration="2000">
<div class="blog-img">
<a href="blog-details.html"><img src="Front/assets/img/blog/blog-2.jpg" alt="Blog Image"></a>
</div>
<div class="blog-content">
<div class="blog-property">
<span>Property</span>
</div>
<div class="blog-title">
<h3><a href="blog-details.html">The most popular cities for homebuyers</a></h3>
<p>There are many variations of passages of lorem ipsum available.</p>
</div>
<ul class="property-category d-flex justify-content-between align-items-center">
<li class="user-info">
<a href="javascript:void(0);"><img src="Front/assets/img/profiles/avatar-07.jpg" class="img-fluid avatar" alt="User"></a>
<div class="user-name">
<h6><a href="javascript:void(0);">Francis</a></h6>
<p>Posted on : 12 May 2023</p>
</div>
</li>
<li>
<a href="blog-details.html"><span><i class="fa-solid fa-arrow-right"></i></span></a>
</li>
</ul>
</div>
</div>


<div class="blog-card" data-aos="fade-down" data-aos-duration="2000">
<div class="blog-img">
<a href="blog-details.html"><img src="Front/assets/img/blog/blog-1.jpg" alt="Blog Image"></a>
</div>
<div class="blog-content">
<div class="blog-property">
<span>Property</span>
</div>
<div class="blog-title">
<h3><a href="blog-details.html">How to achieve financial independence</a></h3>
<p>There are many variations of passages of lorem ipsum available.</p>
</div>
<ul class="property-category d-flex justify-content-between align-items-center">
<li class="user-info">
<a href="javascript:void(0);"><img src="Front/assets/img/profiles/avatar-03.jpg" class="img-fluid avatar" alt="User"></a>
<div class="user-name">
<h6><a href="javascript:void(0);">Rafael</a></h6>
<p>Posted on : 13 Jan 2023</p>
</div>
</li>
<li>
<a href="blog-details.html"><span><i class="fa-solid fa-arrow-right"></i></span></a>
</li>
</ul>
</div>
</div>

</div>
</div>
</div>
</div>
</section>


<section class="news-letter-sec">
<div class="container">
<div class="row align-items-center">
<div class="col-md-6">
<div class="news-heading" data-aos="fade-down" data-aos-duration="2000">
<h2>Sign Up for Our Newsletter</h2>
<p>Lorem ipsum dolor sit amet, consecte tur cing elit. Suspe ndisse suscipit sagittis</p>
</div>
</div>
<div class="col-md-6">
<div class="email-form" data-aos="fade-down" data-aos-duration="2000">
<form action="#">
<input type="email" class="form-control" placeholder="Enter Email Address">
<button class="btn-primary">Subscribe</button>
</form>
</div>
</div>
</div>
</div>
</section>


<footer class="footer">

<div class="footer-top">
<div class="footer-border-img">
<img src="Front/assets/img/bg/line-bg.png" alt="image">
</div>
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-8">
<div class="footer-widget footer-about">
<div class="footer-app-content">
<div class="footer-content-heading">
<h4>Get Our App </h4>
<p>Download the app and book your property</p>
</div>
<div class="download-app">
<a href="javascript:void(0);"><img src="Front/assets/img/google-pay.png" alt="google play"></a>
<a href="javascript:void(0);"><img src="Front/assets/img/app-store.png" alt="app store"></a>
</div>
<div class="social-links">
<h4>Connect with us</h4>
<ul>
<li><a href="javascript:void(0);"><i class="fa-brands fa-facebook-f hi-icon"></i></a></li>
<li><a href="javascript:void(0);"><i class="fa-brands fa-instagram hi-icon"></i></a></li>
<li><a href="javascript:void(0);"><i class="fa-brands fa-behance hi-icon"></i></a></li>
<li><a href="javascript:void(0);"><i class="fa-brands fa-twitter hi-icon"></i></a></li>
<li><a href="javascript:void(0);"><i class="fa-brands fa-pinterest-p hi-icon"></i></a></li>
<li><a href="javascript:void(0);"><i class="fa-brands fa-linkedin hi-icon"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-2 col-md-3 col-sm-4">
<div class="footer-widget-list">
<div class="footer-content-heading">
<h4>Explore</h4>
</div>
<ul>
<li><a href="rent-property-list.html">Listings</a></li>
<li><a href="register.html">Register</a></li>
<li><a href="login.html">Login</a></li>
<li><a href="blog-grid.html">Blogs</a></li>
<li><a href="agency-grid.html">Agency</a></li>
</ul>
</div>
</div>
<div class="col-lg-2 col-md-3 col-sm-4">
<div class="footer-widget-list">
<div class="footer-content-heading">
<h4>Categories</h4>
</div>
<ul>
<li><a href="javascript:void(0);">Apartments</a></li>
<li><a href="javascript:void(0);">Home</a></li>
<li><a href="javascript:void(0);">Office</a></li>
<li><a href="javascript:void(0);">Villas</a></li>
<li><a href="javascript:void(0);">Flat</a></li>
</ul>
</div>
</div>
<div class="col-lg-2 col-md-4 col-sm-4">
<div class="footer-widget-list">
<div class="footer-content-heading">
<h4>Locations</h4>
</div>
<ul>
<li><a href="javascript:void(0);">United States</a></li>
<li><a href="javascript:void(0);">Canada</a></li>
<li><a href="javascript:void(0);">India</a></li>
<li><a href="javascript:void(0);">UK</a></li>
<li><a href="javascript:void(0);">Australia</a></li>
</ul>
</div>
</div>
<div class="col-lg-2 col-md-4 col-sm-4">
<div class="footer-widget-list">
<div class="footer-content-heading">
<h4>Quick Links</h4>
</div>
<ul>
<li><a href="about-us.html">About</a></li>
<li><a href="faq.html">Faq</a></li>
<li><a href="terms-condition.html">Terms & Conditions</a></li>
<li><a href="privacy-policy.html">Privacy Policy</a></li>
<li><a href="gallery.html">Gallery</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>


<div class="footer-bottom">
<div class="container">
<div class="footer-bottom-content">
<div class="copyright">
<p>Copyright 2023 - All right reserved DreamsEstate</p>
</div>
<div class="company-logo">
<p>a product of</p>
<a href="https://dreamguystech.com/" target="_blank"><img src="Front/assets/img/company-logo.png" alt="Logo"></a>
</div>
</div>
</div>
</div>

</footer>


<div class="search-popup js-search-popup ">
<a href="javascript:void(0);" class="close-button" id="search-close" aria-label="Close search">
<i class="fa fa-close"></i>
</a>
<div class="popup-inner">
<div class="inner-container">
<form class="search-form" id="search-form" action="https://dreamsestate.dreamguystech.com/html/rent-property-grid.html">
<h3>What Are You Looking for?</h3>
<div class="search-form-box flex">
<input type="text" class="search-input" placeholder="Type a  Keyword...." id="search-input" aria-label="Type to search" role="searchbox" autocomplete="off">
<button type="submit" class="search-icon"><i class="bx bx-search"></i></button>
</div>
<h5>Popular Properties</h5>
<ul>
<li><a href="rent-property-grid.html">Beautiful Condo Room</a></li>
<li><a href="rent-property-grid.html">Royal Apartment</a></li>
<li><a href="rent-property-grid.html">Grand Villa House</a></li>
<li><a href="rent-property-grid.html">Grand Mahaka</a></li>
<li><a href="rent-property-grid.html">Lunaria Residence</a></li>
<li><a href="rent-property-grid.html">Stephen Alexander Homes</a></li>
</ul>
</form>
</div>
</div>
</div>

</div>


<div class="progress-wrap active-progress">
<svg class="progress-circle svg-content" viewBox="-1 -1 102 102">
<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
</svg>
</div>


<script src="{{ asset('Front/assets/js/jquery-3.6.4.min.js') }}"></script>

<script src="{{ asset('Front/assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('Front/assets/js/feather.min.js') }}"></script>

<script src="{{ asset('Front/assets/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('Front/assets/js/aos.js') }}"></script>

<script src="{{ asset('Front/assets/plugins/select2/js/select2.min.js') }}"></script>

<script src="{{ asset('Front/assets/js/waypoints.js') }}"></script>
<script src="{{ asset('Front/assets/js/jquery.counterup.min.js') }}"></script>

<script src="{{ asset('Front/assets/js/script.js') }}"></script>
</body>

</html>
