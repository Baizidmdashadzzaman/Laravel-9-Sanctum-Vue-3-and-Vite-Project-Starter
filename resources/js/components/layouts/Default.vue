<template>
    <!-- <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Laravel9 Vue Vite</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <router-link :to="{name:'dashboard'}" class="nav-link">Home <span class="sr-only">(current)</span></router-link>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ user.name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="javascript:void(0)" @click="logout">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <main class="mt-3">
            <router-view></router-view>
        </main>
    </div> -->

    <div class="pace pace-inactive"><div class="pace-progress" style="transform: translate3d(100%, 0px, 0px);" data-progress-text="100%" data-progress="99">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle is-active" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu ficon"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a></li>
                </ul>
                <ul class="nav navbar-nav bookmark-icons">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Email" aria-label="Email"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail ficon"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Chat" aria-label="Chat"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square ficon"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Calendar" aria-label="Calendar"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar ficon"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Todo" aria-label="Todo"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square ficon"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg></a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star ficon text-warning"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a>
                        <div class="bookmark-input search-input">
                            <div class="bookmark-input-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></div>
                            <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0" data-search="search">
                            <ul class="search-list search-list-bookmark ps"><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></ul>
                        </div>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item dropdown dropdown-language"><a class="nav-link dropdown-toggle" id="dropdown-flag" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
                </li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon ficon"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg></a></li>
                <li class="nav-item nav-search"><a class="nav-link nav-link-search"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search ficon"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></a>
                    <div class="search-input">
                        <div class="search-input-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></div>
                        <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1" data-search="search">
                        <div class="search-input-close"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></div>
                        <ul class="search-list search-list-main ps"><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></ul>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-cart me-25"><a class="nav-link" href="#" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart ficon"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg><span class="badge rounded-pill bg-primary badge-up cart-item-count">6</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 me-auto">My Cart</h4>
                                <div class="badge rounded-pill badge-light-primary">4 Items</div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list ps">
                            <div class="list-item align-items-center"><img class="d-block rounded me-1" src="/app-assets/images/pages/eCommerce/1.png" alt="donuts" width="62">
                                <div class="list-item-body flex-grow-1"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x ficon cart-item-remove"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> Apple watch 5</a></h6><small class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group bootstrap-touchspin">
                                            <span class="input-group-btn bootstrap-touchspin-injected"><button class="btn btn-primary bootstrap-touchspin-down" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg></button></span><input class="touchspin-cart form-control" type="number" value="1"><span class="input-group-btn bootstrap-touchspin-injected"><button class="btn btn-primary bootstrap-touchspin-up" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></button></span>
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$374.90</h5>
                                </div>
                            </div>
                            <div class="list-item align-items-center"><img class="d-block rounded me-1" src="/app-assets/images/pages/eCommerce/7.png" alt="donuts" width="62">
                                <div class="list-item-body flex-grow-1"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x ficon cart-item-remove"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> Google Home Mini</a></h6><small class="cart-item-by">By Google</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group bootstrap-touchspin">
                                            <span class="input-group-btn bootstrap-touchspin-injected"><button class="btn btn-primary bootstrap-touchspin-down" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg></button></span><input class="touchspin-cart form-control" type="number" value="3"><span class="input-group-btn bootstrap-touchspin-injected"><button class="btn btn-primary bootstrap-touchspin-up" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></button></span>
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$129.40</h5>
                                </div>
                            </div>
                            <div class="list-item align-items-center"><img class="d-block rounded me-1" src="/app-assets/images/pages/eCommerce/2.png" alt="donuts" width="62">
                                <div class="list-item-body flex-grow-1"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x ficon cart-item-remove"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> iPhone 11 Pro</a></h6><small class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group bootstrap-touchspin">
                                            <span class="input-group-btn bootstrap-touchspin-injected"><button class="btn btn-primary bootstrap-touchspin-down" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg></button></span><input class="touchspin-cart form-control" type="number" value="2"><span class="input-group-btn bootstrap-touchspin-injected"><button class="btn btn-primary bootstrap-touchspin-up" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></button></span>
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$699.00</h5>
                                </div>
                            </div>
                            <div class="list-item align-items-center"><img class="d-block rounded me-1" src="/app-assets/images/pages/eCommerce/3.png" alt="donuts" width="62">
                                <div class="list-item-body flex-grow-1"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x ficon cart-item-remove"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> iMac Pro</a></h6><small class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group bootstrap-touchspin">
                                            <span class="input-group-btn bootstrap-touchspin-injected"><button class="btn btn-primary bootstrap-touchspin-down" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg></button></span><input class="touchspin-cart form-control" type="number" value="1"><span class="input-group-btn bootstrap-touchspin-injected"><button class="btn btn-primary bootstrap-touchspin-up" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></button></span>
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$4,999.00</h5>
                                </div>
                            </div>
                            <div class="list-item align-items-center"><img class="d-block rounded me-1" src="/app-assets/images/pages/eCommerce/5.png" alt="donuts" width="62">
                                <div class="list-item-body flex-grow-1"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x ficon cart-item-remove"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> MacBook Pro</a></h6><small class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group bootstrap-touchspin">
                                            <span class="input-group-btn bootstrap-touchspin-injected"><button class="btn btn-primary bootstrap-touchspin-down" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg></button></span><input class="touchspin-cart form-control" type="number" value="1"><span class="input-group-btn bootstrap-touchspin-injected"><button class="btn btn-primary bootstrap-touchspin-up" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></button></span>
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$2,999.00</h5>
                                </div>
                            </div>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></li>
                        <li class="dropdown-menu-footer">
                            <div class="d-flex justify-content-between mb-1">
                                <h6 class="fw-bolder mb-0">Total:</h6>
                                <h6 class="text-primary fw-bolder mb-0">$10,999.00</h6>
                            </div><a class="btn btn-primary w-100 waves-effect waves-float waves-light" href="app-ecommerce-checkout.html">Checkout</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-notification me-25"><a class="nav-link" href="#" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell ficon"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge rounded-pill bg-danger badge-up">5</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 me-auto">Notifications</h4>
                                <div class="badge rounded-pill badge-light-primary">6 New</div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list ps"><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar"><img src="/app-assets/images/portrait/small/avatar-s-15.jpg" alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Congratulation Sam 🎉</span>winner!</p><small class="notification-text"> Won the monthly best seller badge.</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar"><img src="/app-assets/images/portrait/small/avatar-s-3.jpg" alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">New message</span>&nbsp;received</p><small class="notification-text"> You have 10 unread messages</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content">MD</div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Revised Order 👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc. order updated</small>
                                    </div>
                                </div>
                            </a>
                            <div class="list-item d-flex align-items-center">
                                <h6 class="fw-bolder me-auto mb-0">System Notifications</h6>
                                <div class="form-check form-check-primary form-switch">
                                    <input class="form-check-input" id="systemNotification" type="checkbox" checked="">
                                    <label class="form-check-label" for="systemNotification"></label>
                                </div>
                            </div><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x avatar-icon"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Server down</span>&nbsp;registered</p><small class="notification-text"> USA Server is down due to high CPU usage</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-success">
                                            <div class="avatar-content"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check avatar-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Sales report</span>&nbsp;generated</p><small class="notification-text"> Last month sales report generated</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-warning">
                                            <div class="avatar-content"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle avatar-icon"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg></div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">High memory</span>&nbsp;usage</p><small class="notification-text"> BLR Server using high memory</small>
                                    </div>
                                </div>
                            </a>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></li>
                        <li class="dropdown-menu-footer"><a class="btn btn-primary w-100 waves-effect waves-float waves-light" href="#">Read all notifications</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">{{ user.name }}</span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" width="40" height="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="dropdown-item" href="page-profile.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user me-50"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile</a><a class="dropdown-item" href="app-email.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail me-50"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> Inbox</a><a class="dropdown-item" href="app-todo.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square me-50"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg> Task</a><a class="dropdown-item" href="app-chat.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square me-50"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg> Chats</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="page-account-settings-account.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings me-50"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> Settings</a><a class="dropdown-item" href="page-pricing.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card me-50"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg> Pricing</a><a class="dropdown-item" href="page-faq.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle me-50"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg> FAQ</a>

                        <a class="dropdown-item" href="javascript:void(0)" @click="logout">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-power me-50"><path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path><line x1="12" y1="2" x2="12" y2="12"></line></svg> 
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="/app-assets/images/icons/xls.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">'17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="/app-assets/images/icons/jpg.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">'11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="/app-assets/images/icons/pdf.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">'150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="/app-assets/images/icons/doc.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">'256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="/app-assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="/app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="/app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="/app-assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle me-75"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow expanded" data-scroll-to-active="true" style="touch-action: none; user-select: none;">
        <div class="navbar-header expanded">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="#"><span class="brand-logo">
                            <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <linearGradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </linearGradient>
                                    <linearGradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                            <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                        <h2 class="brand-text">Vuexy</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x d-block d-xl-none text-primary toggle-icon font-medium-4"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-disc d-none d-xl-block collapse-toggle-icon primary font-medium-4"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="3"></circle></svg></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content ps ps--active-y">
        <perfect-scrollbar>
            <ul class="navigation navigation-main " id="main-menu-navigation" data-menu="menu-navigation">
                
                    
                <li class="nav-item has-sub sidebar-group-active open"><a class="d-flex align-items-center" href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span><span class="badge badge-light-warning rounded-pill ms-auto me-1">2</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="dashboard-analytics.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Analytics">Analytics</span></a>
                        </li>
                        <li class="active"><a class="d-flex align-items-center" href="dashboard-ecommerce.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="eCommerce">eCommerce</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0)" @click="logout"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg><span class="menu-title text-truncate" data-i18n="Email">Email</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-chat.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg><span class="menu-title text-truncate" data-i18n="Chat">Chat</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-todo.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg><span class="menu-title text-truncate" data-i18n="Todo">Todo</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-calendar.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg><span class="menu-title text-truncate" data-i18n="Calendar">Calendar</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-kanban.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg><span class="menu-title text-truncate" data-i18n="Kanban">Kanban</span></a>
                </li>
                <li class="nav-item has-sub"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg><span class="menu-title text-truncate" data-i18n="Invoice">Invoice</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-invoice-list.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="List">List</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Preview">Preview</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-edit.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Edit">Edit</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-add.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Add">Add</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-file-manager.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg><span class="menu-title text-truncate" data-i18n="File Manager">File Manager</span></a>
                </li>
                <li class="nav-item has-sub"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg><span class="menu-title text-truncate" data-i18n="Roles &amp; Permission">Roles &amp; Permission</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-access-roles.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Roles">Roles</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-access-permission.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Permission">Permission</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-sub"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg><span class="menu-title text-truncate" data-i18n="eCommerce">eCommerce</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-ecommerce-shop.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Shop">Shop</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-ecommerce-details.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Details">Details</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-ecommerce-wishlist.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Wish List">Wish List</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-ecommerce-checkout.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Checkout">Checkout</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-sub"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg><span class="menu-title text-truncate" data-i18n="User">User</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-user-list.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="List">List</span></a>
                        </li>
                        <li class="has-sub"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="View">View</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="app-user-view-account.html"><span class="menu-item text-truncate" data-i18n="Account">Account</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="app-user-view-security.html"><span class="menu-item text-truncate" data-i18n="Security">Security</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="app-user-view-billing.html"><span class="menu-item text-truncate" data-i18n="Billing &amp; Plans">Billing &amp; Plans</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="app-user-view-notifications.html"><span class="menu-item text-truncate" data-i18n="Notifications">Notifications</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="app-user-view-connections.html"><span class="menu-item text-truncate" data-i18n="Connections">Connections</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-sub"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg><span class="menu-title text-truncate" data-i18n="Pages">Pages</span></a>
                    <ul class="menu-content">
                        <li class="has-sub"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Account Settings">Account Settings</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="page-account-settings-account.html"><span class="menu-item text-truncate" data-i18n="Account">Account</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-account-settings-security.html"><span class="menu-item text-truncate" data-i18n="Security">Security</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-account-settings-billing.html"><span class="menu-item text-truncate" data-i18n="Billings &amp; Plans">Billings &amp; Plans</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-account-settings-notifications.html"><span class="menu-item text-truncate" data-i18n="Notifications">Notifications</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-account-settings-connections.html"><span class="menu-item text-truncate" data-i18n="Connections">Connections</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-profile.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Profile">Profile</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-faq.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="FAQ">FAQ</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-knowledge-base.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Knowledge Base">Knowledge Base</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-pricing.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Pricing">Pricing</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-license.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="License">License</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-api-key.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="API Key">API Key</span></a>
                        </li>
                        <li class="has-sub"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Blog">Blog</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="page-blog-list.html"><span class="menu-item text-truncate" data-i18n="List">List</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-blog-detail.html"><span class="menu-item text-truncate" data-i18n="Detail">Detail</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-blog-edit.html"><span class="menu-item text-truncate" data-i18n="Edit">Edit</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Mail Template">Mail Template</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-welcome.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Welcome">Welcome</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-reset-password.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Reset Password">Reset Password</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-verify-email.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Verify Email">Verify Email</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-deactivate-account.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Deactivate Account">Deactivate Account</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-invoice.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Invoice">Invoice</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-promotional.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Promotional">Promotional</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Miscellaneous">Miscellaneous</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="page-misc-coming-soon.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Coming Soon">Coming Soon</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-misc-not-authorized.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Not Authorized">Not Authorized</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-misc-under-maintenance.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Maintenance">Maintenance</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-misc-error.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Error">Error</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-sub"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg><span class="menu-title text-truncate" data-i18n="Authentication">Authentication</span></a>
                    <ul class="menu-content">
                        <li class="has-sub"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Login">Login</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="auth-login-basic.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Basic">Basic</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-login-cover.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Cover">Cover</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Register">Register</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="auth-register-basic.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Basic">Basic</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-register-cover.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Cover">Cover</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-register-multisteps.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Multi-Steps">Multi-Steps</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Forgot Password">Forgot Password</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="auth-forgot-password-basic.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Basic">Basic</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-forgot-password-cover.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Cover">Cover</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Reset Password">Reset Password</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="auth-reset-password-basic.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Basic">Basic</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-reset-password-cover.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Cover">Cover</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Verify Email">Verify Email</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="auth-verify-email-basic.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Basic">Basic</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-verify-email-cover.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Cover">Cover</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Two Steps">Two Steps</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="auth-two-steps-basic.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Basic">Basic</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-two-steps-cover.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Cover">Cover</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="modal-examples.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect></svg><span class="menu-title text-truncate" data-i18n="Modal Examples">Modal Examples</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="User Interface">User Interface</span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="ui-typography.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-type"><polyline points="4 7 4 4 20 4 20 7"></polyline><line x1="9" y1="20" x2="15" y2="20"></line><line x1="12" y1="4" x2="12" y2="20"></line></svg><span class="menu-title text-truncate" data-i18n="Typography">Typography</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="ui-feather.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg><span class="menu-title text-truncate" data-i18n="Feather">Feather</span></a>
                </li>
                <li class="nav-item has-sub"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg><span class="menu-title text-truncate" data-i18n="Card">Card</span><span class="badge badge-light-success rounded-pill ms-auto me-1">New</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="card-basic.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Basic">Basic</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-advance.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Advance">Advance</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-statistics.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Statistics">Statistics</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-analytics.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Analytics">Analytics</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-actions.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Card Actions">Card Actions</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-sub"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg><span class="menu-title text-truncate" data-i18n="Components">Components</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="component-accordion.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Accordion">Accordion</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-alerts.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Alerts">Alerts</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-avatar.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Avatar">Avatar</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-badges.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Badges">Badges</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-breadcrumbs.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Breadcrumbs">Breadcrumbs</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-buttons.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Buttons">Buttons</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-carousel.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Carousel">Carousel</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-collapse.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Collapse">Collapse</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-divider.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Divider">Divider</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-dropdowns.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Dropdowns">Dropdowns</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-list-group.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="List Group">List Group</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-modals.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Modals">Modals</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-navs-component.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Navs Component">Navs Component</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-offcanvas.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Offcanvas">Offcanvas</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-pagination.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Pagination">Pagination</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-pill-badges.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Pill Badges">Pill Badges</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-pills-component.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Pills Component">Pills Component</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-popovers.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Popovers">Popovers</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-progress.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Progress">Progress</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-spinner.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Spinner">Spinner</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-tabs-component.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Tabs Component">Tabs Component</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-timeline.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Timeline">Timeline</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-bs-toast.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Toasts">Toasts</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-tooltips.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Tooltips">Tooltips</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-sub"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg><span class="menu-title text-truncate" data-i18n="Extensions">Extensions</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="ext-component-sweet-alerts.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Sweet Alert">Sweet Alert</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-blockui.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Block UI">BlockUI</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-toastr.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Toastr">Toastr</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-sliders.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Sliders">Sliders</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-drag-drop.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Drag &amp; Drop">Drag &amp; Drop</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-tour.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Tour">Tour</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-clipboard.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Clipboard">Clipboard</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-media-player.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Media player">Media Player</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-context-menu.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Context Menu">Context Menu</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-swiper.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="swiper">Swiper</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-tree.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Tree">Tree</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-ratings.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Ratings">Ratings</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-i18n.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="l18n">l18n</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-sub"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg><span class="menu-title text-truncate" data-i18n="Page Layouts">Page Layouts</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="layout-collapsed-menu.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Collapsed Menu">Collapsed Menu</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="layout-full.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Layout Full">Layout Full</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="layout-without-menu.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Without Menu">Without Menu</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="layout-empty.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Layout Empty">Layout Empty</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="layout-blank.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Layout Blank">Layout Blank</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="Forms &amp; Tables">Forms &amp; Tables</span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                </li>
                <li class="nav-item has-sub"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg><span class="menu-title text-truncate" data-i18n="Form Elements">Form Elements</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="form-input.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Input">Input</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-input-groups.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Input Groups">Input Groups</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-input-mask.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Input Mask">Input Mask</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-textarea.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Textarea">Textarea</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-checkbox.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Checkbox">Checkbox</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-radio.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Radio">Radio</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-custom-options.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Custom Options">Custom Options</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-switch.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Switch">Switch</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-select.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Select">Select</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-number-input.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Number Input">Number Input</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-file-uploader.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="File Uploader">File Uploader</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-quill-editor.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Quill Editor">Quill Editor</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-date-time-picker.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Date &amp; Time Picker">Date &amp; Time Picker</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="form-layout.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg><span class="menu-title text-truncate" data-i18n="Form Layout">Form Layout</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="form-wizard.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg><span class="menu-title text-truncate" data-i18n="Form Wizard">Form Wizard</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="form-validation.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg><span class="menu-title text-truncate" data-i18n="Form Validation">Form Validation</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="form-repeater.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-rotate-cw"><polyline points="23 4 23 10 17 10"></polyline><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path></svg><span class="menu-title text-truncate" data-i18n="Form Repeater">Form Repeater</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="table-bootstrap.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg><span class="menu-title text-truncate" data-i18n="Table">Table</span></a>
                </li>
                <li class="nav-item has-sub"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg><span class="menu-title text-truncate" data-i18n="Datatable">Datatable</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="table-datatable-basic.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Basic">Basic</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="table-datatable-advanced.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Advanced">Advanced</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="Charts &amp; Maps">Charts &amp; Maps</span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                </li>
                <li class="nav-item has-sub"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg><span class="menu-title text-truncate" data-i18n="Charts">Charts</span><span class="badge badge-light-danger rounded-pill ms-auto me-2">2</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="chart-apex.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Apex">Apex</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="chart-chartjs.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Chartjs">Chartjs</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="maps-leaflet.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg><span class="menu-title text-truncate" data-i18n="Leaflet Maps">Leaflet Maps</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="Misc">Misc</span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                </li>
                <li class="nav-item has-sub"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg><span class="menu-title text-truncate" data-i18n="Menu Levels">Menu Levels</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Second Level">Second Level 2.1</span></a>
                        </li>
                        <li class="has-sub"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span class="menu-item text-truncate" data-i18n="Second Level">Second Level 2.2</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="#"><span class="menu-item text-truncate" data-i18n="Third Level">Third Level 3.1</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="#"><span class="menu-item text-truncate" data-i18n="Third Level">Third Level 3.2</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="disabled nav-item"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg><span class="menu-title text-truncate" data-i18n="Disabled Menu">Disabled Menu</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg><span class="menu-title text-truncate" data-i18n="Documentation">Documentation</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="https://pixinvent.ticksy.com/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-life-buoy"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="4"></circle><line x1="4.93" y1="4.93" x2="9.17" y2="9.17"></line><line x1="14.83" y1="14.83" x2="19.07" y2="19.07"></line><line x1="14.83" y1="9.17" x2="19.07" y2="4.93"></line><line x1="14.83" y1="9.17" x2="18.36" y2="5.64"></line><line x1="4.93" y1="19.07" x2="9.17" y2="14.83"></line></svg><span class="menu-title text-truncate" data-i18n="Raise Support">Raise Support</span></a>
                </li>
            
            </ul>
        </perfect-scrollbar>
        <!-- <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 581px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 185px;"></div></div> -->
    </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    <div class="row match-height">
                        <!-- Medal Card -->
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="card card-congratulation-medal">
                                <div class="card-body">
                                    <h5>Congratulations 🎉 John!</h5>
                                    <p class="card-text font-small-3">You have won gold medal</p>
                                    <h3 class="mb-75 mt-2 pt-50">
                                        <a href="#">$48.9k</a>
                                    </h3>
                                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light">View Sales</button>
                                    <img src="/app-assets/images/illustration/badge.svg" class="congratulation-medal" alt="Medal Pic">
                                </div>
                            </div>
                        </div>
                        <!--/ Medal Card -->

                        <!-- Statistics Card -->
                        <div class="col-xl-8 col-md-6 col-12">
                            <div class="card card-statistics">
                                <div class="card-header">
                                    <h4 class="card-title">Statistics</h4>
                                    <div class="d-flex align-items-center">
                                        <p class="card-text font-small-2 me-25 mb-0">Updated 1 month ago</p>
                                    </div>
                                </div>
                                <div class="card-body statistics-body">
                                    <div class="row">
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-primary me-2">
                                                    <div class="avatar-content">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up avatar-icon"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">230k</h4>
                                                    <p class="card-text font-small-3 mb-0">Sales</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-info me-2">
                                                    <div class="avatar-content">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user avatar-icon"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">8.549k</h4>
                                                    <p class="card-text font-small-3 mb-0">Customers</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-danger me-2">
                                                    <div class="avatar-content">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box avatar-icon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">1.423k</h4>
                                                    <p class="card-text font-small-3 mb-0">Products</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-success me-2">
                                                    <div class="avatar-content">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign avatar-icon"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">$9745</h4>
                                                    <p class="card-text font-small-3 mb-0">Revenue</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Statistics Card -->
                    </div>

                    <div class="row match-height">
                        <div class="col-lg-4 col-12">
                            <div class="row match-height">
                                <!-- Bar Chart - Orders -->
                                <div class="col-lg-6 col-md-3 col-6">
                                    <div class="card">
                                        <div class="card-body pb-50" style="position: relative;">
                                            <h6>Orders</h6>
                                            <h2 class="fw-bolder mb-1">2,76k</h2>
                                            <div id="statistics-order-chart" style="min-height: 85px;"><div id="apexchartsqiy3p6ro" class="apexcharts-canvas apexchartsqiy3p6ro apexcharts-theme-light" style="width: 107px; height: 70px;"><svg id="SvgjsSvg1383" width="107" height="70" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1385" class="apexcharts-inner apexcharts-graphical" transform="translate(12.566666666666668, 15)"><defs id="SvgjsDefs1384"><linearGradient id="SvgjsLinearGradient1388" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1389" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1390" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1391" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskqiy3p6ro"><rect id="SvgjsRect1393" width="110.99999999999999" height="55" x="-10.566666666666668" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskqiy3p6ro"><rect id="SvgjsRect1394" width="93.86666666666666" height="59" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1392" width="4.493333333333333" height="55" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1388)" class="apexcharts-xcrosshairs" y2="55" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1408" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1409" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1411" class="apexcharts-grid"><g id="SvgjsG1412" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1414" x1="-8.566666666666668" y1="0" x2="98.43333333333332" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1415" x1="-8.566666666666668" y1="11" x2="98.43333333333332" y2="11" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1416" x1="-8.566666666666668" y1="22" x2="98.43333333333332" y2="22" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1417" x1="-8.566666666666668" y1="33" x2="98.43333333333332" y2="33" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1418" x1="-8.566666666666668" y1="44" x2="98.43333333333332" y2="44" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1419" x1="-8.566666666666668" y1="55" x2="98.43333333333332" y2="55" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1413" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1421" x1="0" y1="55" x2="89.86666666666666" y2="55" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1420" x1="0" y1="1" x2="0" y2="55" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1395" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1396" class="apexcharts-series" seriesName="2020" rel="1" data:realIndex="0"><rect id="SvgjsRect1398" width="4.493333333333333" height="55" x="-2.2466666666666666" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" class="apexcharts-backgroundBar"></rect><path id="SvgjsPath1399" d="M -2.2466666666666666 53.876666666666665L -2.2466666666666666 30.25L 2.2466666666666666 30.25L 2.2466666666666666 30.25L 2.2466666666666666 53.876666666666665Q 0 56.123333333333335 -2.2466666666666666 53.876666666666665z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskqiy3p6ro)" pathTo="M -2.2466666666666666 53.876666666666665L -2.2466666666666666 30.25L 2.2466666666666666 30.25L 2.2466666666666666 30.25L 2.2466666666666666 53.876666666666665Q 0 56.123333333333335 -2.2466666666666666 53.876666666666665z" pathFrom="M -2.2466666666666666 53.876666666666665L -2.2466666666666666 55L 2.2466666666666666 55L 2.2466666666666666 55L 2.2466666666666666 55L -2.2466666666666666 55" cy="30.25" cx="2.246666666666667" j="0" val="45" barHeight="24.75" barWidth="4.493333333333333"></path><rect id="SvgjsRect1400" width="4.493333333333333" height="55" x="20.22" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" class="apexcharts-backgroundBar"></rect><path id="SvgjsPath1401" d="M 20.22 53.876666666666665L 20.22 8.25L 24.71333333333333 8.25L 24.71333333333333 8.25L 24.71333333333333 53.876666666666665Q 22.466666666666665 56.123333333333335 20.22 53.876666666666665z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskqiy3p6ro)" pathTo="M 20.22 53.876666666666665L 20.22 8.25L 24.71333333333333 8.25L 24.71333333333333 8.25L 24.71333333333333 53.876666666666665Q 22.466666666666665 56.123333333333335 20.22 53.876666666666665z" pathFrom="M 20.22 53.876666666666665L 20.22 55L 24.71333333333333 55L 24.71333333333333 55L 24.71333333333333 55L 20.22 55" cy="8.25" cx="24.713333333333335" j="1" val="85" barHeight="46.75" barWidth="4.493333333333333"></path><rect id="SvgjsRect1402" width="4.493333333333333" height="55" x="42.68666666666666" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" class="apexcharts-backgroundBar"></rect><path id="SvgjsPath1403" d="M 42.68666666666666 53.876666666666665L 42.68666666666666 19.25L 47.17999999999999 19.25L 47.17999999999999 19.25L 47.17999999999999 53.876666666666665Q 44.93333333333333 56.123333333333335 42.68666666666666 53.876666666666665z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskqiy3p6ro)" pathTo="M 42.68666666666666 53.876666666666665L 42.68666666666666 19.25L 47.17999999999999 19.25L 47.17999999999999 19.25L 47.17999999999999 53.876666666666665Q 44.93333333333333 56.123333333333335 42.68666666666666 53.876666666666665z" pathFrom="M 42.68666666666666 53.876666666666665L 42.68666666666666 55L 47.17999999999999 55L 47.17999999999999 55L 47.17999999999999 55L 42.68666666666666 55" cy="19.25" cx="47.179999999999986" j="2" val="65" barHeight="35.75" barWidth="4.493333333333333"></path><rect id="SvgjsRect1404" width="4.493333333333333" height="55" x="65.15333333333332" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" class="apexcharts-backgroundBar"></rect><path id="SvgjsPath1405" d="M 65.15333333333332 53.876666666666665L 65.15333333333332 30.25L 69.64666666666666 30.25L 69.64666666666666 30.25L 69.64666666666666 53.876666666666665Q 67.39999999999999 56.123333333333335 65.15333333333332 53.876666666666665z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskqiy3p6ro)" pathTo="M 65.15333333333332 53.876666666666665L 65.15333333333332 30.25L 69.64666666666666 30.25L 69.64666666666666 30.25L 69.64666666666666 53.876666666666665Q 67.39999999999999 56.123333333333335 65.15333333333332 53.876666666666665z" pathFrom="M 65.15333333333332 53.876666666666665L 65.15333333333332 55L 69.64666666666666 55L 69.64666666666666 55L 69.64666666666666 55L 65.15333333333332 55" cy="30.25" cx="69.64666666666666" j="3" val="45" barHeight="24.75" barWidth="4.493333333333333"></path><rect id="SvgjsRect1406" width="4.493333333333333" height="55" x="87.61999999999999" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" class="apexcharts-backgroundBar"></rect><path id="SvgjsPath1407" d="M 87.61999999999999 53.876666666666665L 87.61999999999999 19.25L 92.11333333333333 19.25L 92.11333333333333 19.25L 92.11333333333333 53.876666666666665Q 89.86666666666666 56.123333333333335 87.61999999999999 53.876666666666665z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskqiy3p6ro)" pathTo="M 87.61999999999999 53.876666666666665L 87.61999999999999 19.25L 92.11333333333333 19.25L 92.11333333333333 19.25L 92.11333333333333 53.876666666666665Q 89.86666666666666 56.123333333333335 87.61999999999999 53.876666666666665z" pathFrom="M 87.61999999999999 53.876666666666665L 87.61999999999999 55L 92.11333333333333 55L 92.11333333333333 55L 92.11333333333333 55L 87.61999999999999 55" cy="19.25" cx="92.11333333333333" j="4" val="65" barHeight="35.75" barWidth="4.493333333333333"></path></g><g id="SvgjsG1397" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1422" x1="-8.566666666666668" y1="0" x2="98.43333333333332" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1423" x1="-8.566666666666668" y1="0" x2="98.43333333333332" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1424" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1425" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1426" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1427" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1428" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><g id="SvgjsG1410" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1386" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 35px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 159, 67);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 150px; height: 181px;"></div></div><div class="contract-trigger"></div></div></div>
                                    </div>
                                </div>
                                <!--/ Bar Chart - Orders -->

                                <!-- Line Chart - Profit -->
                                <div class="col-lg-6 col-md-3 col-6">
                                    <div class="card card-tiny-line-stats">
                                        <div class="card-body pb-50" style="position: relative;">
                                            <h6>Profit</h6>
                                            <h2 class="fw-bolder mb-1">6,24k</h2>
                                            <div id="statistics-profit-chart" style="min-height: 85px;"><div id="apexchartsykj8vl5f" class="apexcharts-canvas apexchartsykj8vl5f apexcharts-theme-light" style="width: 107px; height: 70px;"><svg id="SvgjsSvg1429" width="107" height="70" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1431" class="apexcharts-inner apexcharts-graphical" transform="translate(12, 0)"><defs id="SvgjsDefs1430"><clipPath id="gridRectMaskykj8vl5f"><rect id="SvgjsRect1436" width="92" height="68" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskykj8vl5f"><rect id="SvgjsRect1437" width="97" height="77" x="-6" y="-6" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1435" x1="0" y1="0" x2="0" y2="65" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="65" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1454" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1455" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1457" font-family="Helvetica, Arial, sans-serif" x="0" y="94" text-anchor="middle" dominant-baseline="auto" font-size="0px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1458">1</tspan><title>1</title></text><text id="SvgjsText1460" font-family="Helvetica, Arial, sans-serif" x="17" y="94" text-anchor="middle" dominant-baseline="auto" font-size="0px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1461">2</tspan><title>2</title></text><text id="SvgjsText1463" font-family="Helvetica, Arial, sans-serif" x="34" y="94" text-anchor="middle" dominant-baseline="auto" font-size="0px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1464">3</tspan><title>3</title></text><text id="SvgjsText1466" font-family="Helvetica, Arial, sans-serif" x="51" y="94" text-anchor="middle" dominant-baseline="auto" font-size="0px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1467">4</tspan><title>4</title></text><text id="SvgjsText1469" font-family="Helvetica, Arial, sans-serif" x="68" y="94" text-anchor="middle" dominant-baseline="auto" font-size="0px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1470">5</tspan><title>5</title></text><text id="SvgjsText1472" font-family="Helvetica, Arial, sans-serif" x="85" y="94" text-anchor="middle" dominant-baseline="auto" font-size="0px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1473">6</tspan><title>6</title></text></g></g><g id="SvgjsG1475" class="apexcharts-grid"><g id="SvgjsG1476" class="apexcharts-gridlines-horizontal"></g><g id="SvgjsG1477" class="apexcharts-gridlines-vertical"><line id="SvgjsLine1478" x1="0" y1="0" x2="0" y2="65" stroke="#ebebeb" stroke-dasharray="5" class="apexcharts-gridline"></line><line id="SvgjsLine1479" x1="17" y1="0" x2="17" y2="65" stroke="#ebebeb" stroke-dasharray="5" class="apexcharts-gridline"></line><line id="SvgjsLine1480" x1="34" y1="0" x2="34" y2="65" stroke="#ebebeb" stroke-dasharray="5" class="apexcharts-gridline"></line><line id="SvgjsLine1481" x1="51" y1="0" x2="51" y2="65" stroke="#ebebeb" stroke-dasharray="5" class="apexcharts-gridline"></line><line id="SvgjsLine1482" x1="68" y1="0" x2="68" y2="65" stroke="#ebebeb" stroke-dasharray="5" class="apexcharts-gridline"></line><line id="SvgjsLine1483" x1="85" y1="0" x2="85" y2="65" stroke="#ebebeb" stroke-dasharray="5" class="apexcharts-gridline"></line></g><line id="SvgjsLine1485" x1="0" y1="65" x2="85" y2="65" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1484" x1="0" y1="1" x2="0" y2="65" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1438" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1439" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1453" d="M 0 65L 17 39L 34 58.5L 51 26L 68 45.5L 85 6.5" fill="none" fill-opacity="1" stroke="rgba(0,207,232,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskykj8vl5f)" pathTo="M 0 65L 17 39L 34 58.5L 51 26L 68 45.5L 85 6.5" pathFrom="M -1 65L -1 65L 17 65L 34 65L 51 65L 68 65L 85 65"></path><g id="SvgjsG1440" class="apexcharts-series-markers-wrap" data:realIndex="0"><g id="SvgjsG1442" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskykj8vl5f)"><circle id="SvgjsCircle1443" r="2" cx="0" cy="65" class="apexcharts-marker no-pointer-events w3497w00sk" stroke="#00cfe8" fill="#00cfe8" fill-opacity="1" stroke-width="2" stroke-opacity="1" rel="0" j="0" index="0" default-marker-size="2"></circle><circle id="SvgjsCircle1444" r="2" cx="17" cy="39" class="apexcharts-marker no-pointer-events w6gbanj1v" stroke="#00cfe8" fill="#00cfe8" fill-opacity="1" stroke-width="2" stroke-opacity="1" rel="1" j="1" index="0" default-marker-size="2"></circle></g><g id="SvgjsG1445" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskykj8vl5f)"><circle id="SvgjsCircle1446" r="2" cx="34" cy="58.5" class="apexcharts-marker no-pointer-events w2zkj3fen" stroke="#00cfe8" fill="#00cfe8" fill-opacity="1" stroke-width="2" stroke-opacity="1" rel="2" j="2" index="0" default-marker-size="2"></circle></g><g id="SvgjsG1447" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskykj8vl5f)"><circle id="SvgjsCircle1448" r="2" cx="51" cy="26" class="apexcharts-marker no-pointer-events wxudcf294" stroke="#00cfe8" fill="#00cfe8" fill-opacity="1" stroke-width="2" stroke-opacity="1" rel="3" j="3" index="0" default-marker-size="2"></circle></g><g id="SvgjsG1449" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskykj8vl5f)"><circle id="SvgjsCircle1450" r="2" cx="68" cy="45.5" class="apexcharts-marker no-pointer-events w98bi5bal" stroke="#00cfe8" fill="#00cfe8" fill-opacity="1" stroke-width="2" stroke-opacity="1" rel="4" j="4" index="0" default-marker-size="2"></circle></g><g id="SvgjsG1451" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskykj8vl5f)"><circle id="SvgjsCircle1452" r="5" cx="85" cy="6.5" class="apexcharts-marker no-pointer-events w45egymfu" stroke="#00cfe8" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="1" rel="5" j="5" index="0" default-marker-size="5"></circle></g></g></g><g id="SvgjsG1441" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1486" x1="0" y1="0" x2="85" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1487" x1="0" y1="0" x2="85" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1488" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1489" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1490" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1434" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1474" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1432" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 35px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 207, 232);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 150px; height: 181px;"></div></div><div class="contract-trigger"></div></div></div>
                                    </div>
                                </div>
                                <!--/ Line Chart - Profit -->

                                <!-- Earnings Card -->
                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="card earnings-card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h4 class="card-title mb-1">Earnings</h4>
                                                    <div class="font-small-2">This Month</div>
                                                    <h5 class="mb-1">$4055.56</h5>
                                                    <p class="card-text text-muted font-small-2">
                                                        <span class="fw-bolder">68.2%</span><span> more earnings than last month.</span>
                                                    </p>
                                                </div>
                                                <div class="col-6" style="position: relative;">
                                                    <div id="earnings-chart" style="min-height: 126.8px;"><div id="apexchartsijcyirwn" class="apexcharts-canvas apexchartsijcyirwn apexcharts-theme-light" style="width: 128px; height: 126.8px;"><svg id="SvgjsSvg1491" width="128" height="126.8" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1493" class="apexcharts-inner apexcharts-graphical" transform="translate(-16, 0)"><defs id="SvgjsDefs1492"><clipPath id="gridRectMaskijcyirwn"><rect id="SvgjsRect1495" width="164" height="128" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskijcyirwn"><rect id="SvgjsRect1496" width="164" height="132" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1497" class="apexcharts-pie"><g id="SvgjsG1498" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1499" r="37.98536585365854" cx="80" cy="64" fill="transparent"></circle><g id="SvgjsG1500" class="apexcharts-slices"><g id="SvgjsG1501" class="apexcharts-series apexcharts-pie-series" seriesName="App" rel="1" data:realIndex="0"><path id="SvgjsPath1502" d="M 69.85216991000085 6.448795702018273 A 58.43902439024391 58.43902439024391 0 1 1 79.1840638026197 122.43332798844617 L 79.46964147170281 101.98166319249002 A 37.98536585365854 37.98536585365854 0 1 0 73.40391044150056 26.591717206311877 L 69.85216991000085 6.448795702018273 z" fill="#28c76f66" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="190.8" data:startAngle="-10" data:strokeWidth="0" data:value="53" data:pathOrig="M 69.85216991000085 6.448795702018273 A 58.43902439024391 58.43902439024391 0 1 1 79.1840638026197 122.43332798844617 L 79.46964147170281 101.98166319249002 A 37.98536585365854 37.98536585365854 0 1 0 73.40391044150056 26.591717206311877 L 69.85216991000085 6.448795702018273 z"></path></g><g id="SvgjsG1503" class="apexcharts-series apexcharts-pie-series" seriesName="Service" rel="2" data:realIndex="1"><path id="SvgjsPath1504" d="M 79.1840638026197 122.43332798844617 A 58.43902439024391 58.43902439024391 0 0 1 30.22590892178677 94.6212251391295 L 47.646840799161396 83.90379634043418 A 37.98536585365854 37.98536585365854 0 0 0 79.46964147170281 101.98166319249002 L 79.1840638026197 122.43332798844617 z" fill="#28c76f33" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="57.599999999999994" data:startAngle="180.8" data:strokeWidth="0" data:value="16" data:pathOrig="M 79.1840638026197 122.43332798844617 A 58.43902439024391 58.43902439024391 0 0 1 30.22590892178677 94.6212251391295 L 47.646840799161396 83.90379634043418 A 37.98536585365854 37.98536585365854 0 0 0 79.46964147170281 101.98166319249002 L 79.1840638026197 122.43332798844617 z"></path></g><g id="SvgjsG1505" class="apexcharts-series apexcharts-pie-series" seriesName="Product" rel="3" data:realIndex="2"><path id="SvgjsPath1506" d="M 30.22590892178677 94.6212251391295 A 58.43902439024391 58.43902439024391 0 0 1 69.84212548457727 6.4505677090342814 L 73.39738156497522 26.592869010872285 A 37.98536585365854 37.98536585365854 0 0 0 47.646840799161396 83.90379634043418 L 30.22590892178677 94.6212251391295 z" fill="rgba(40,199,111,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="111.6" data:startAngle="238.4" data:strokeWidth="0" data:value="31" data:pathOrig="M 30.22590892178677 94.6212251391295 A 58.43902439024391 58.43902439024391 0 0 1 69.84212548457727 6.4505677090342814 L 73.39738156497522 26.592869010872285 A 37.98536585365854 37.98536585365854 0 0 0 47.646840799161396 83.90379634043418 L 30.22590892178677 94.6212251391295 z"></path></g></g></g><g id="SvgjsG1507" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"><text id="SvgjsText1508" font-family="Helvetica, Arial, sans-serif" x="80" y="79" text-anchor="middle" dominant-baseline="auto" font-size="16px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;">App</text><text id="SvgjsText1509" font-family="Helvetica, Arial, sans-serif" x="80" y="65" text-anchor="middle" dominant-baseline="auto" font-size="20px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">53%</text></g></g><line id="SvgjsLine1510" x1="0" y1="0" x2="160" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1511" x1="0" y1="0" x2="160" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1494" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgba(40, 199, 111, 0.4);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgba(40, 199, 111, 0.2);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(40, 199, 111);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 157px; height: 128px;"></div></div><div class="contract-trigger"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Earnings Card -->
                            </div>
                        </div>

                        <!-- Revenue Report Card -->
                        <div class="col-lg-8 col-12">
                            <div class="card card-revenue-budget">
                                <div class="row mx-0">
                                    <div class="col-md-8 col-12 revenue-report-wrapper" style="position: relative;">
                                        <div class="d-sm-flex justify-content-between align-items-center mb-3">
                                            <h4 class="card-title mb-50 mb-sm-0">Revenue Report</h4>
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex align-items-center me-2">
                                                    <span class="bullet bullet-primary font-small-3 me-50 cursor-pointer"></span>
                                                    <span>Earning</span>
                                                </div>
                                                <div class="d-flex align-items-center ms-75">
                                                    <span class="bullet bullet-warning font-small-3 me-50 cursor-pointer"></span>
                                                    <span>Expense</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="revenue-report-chart" style="min-height: 245px;"><div id="apexchartso0j6i25b" class="apexcharts-canvas apexchartso0j6i25b apexcharts-theme-light" style="width: 410px; height: 230px;"><svg id="SvgjsSvg1512" width="410" height="230" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1514" class="apexcharts-inner apexcharts-graphical" transform="translate(54.733333587646484, 10)"><defs id="SvgjsDefs1513"><linearGradient id="SvgjsLinearGradient1518" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1519" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1520" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1521" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMasko0j6i25b"><rect id="SvgjsRect1523" width="349.2666664123535" height="190.73" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMasko0j6i25b"><rect id="SvgjsRect1524" width="349.2666664123535" height="194.73" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1522" width="6.521703698900011" height="190.73" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1518)" class="apexcharts-xcrosshairs" y2="190.73" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1548" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1549" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1551" font-family="Helvetica, Arial, sans-serif" x="19.181481467352974" y="219.73" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1552">Jan</tspan><title>Jan</title></text><text id="SvgjsText1554" font-family="Helvetica, Arial, sans-serif" x="57.54444440205892" y="219.73" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1555">Feb</tspan><title>Feb</title></text><text id="SvgjsText1557" font-family="Helvetica, Arial, sans-serif" x="95.90740733676486" y="219.73" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1558">Mar</tspan><title>Mar</title></text><text id="SvgjsText1560" font-family="Helvetica, Arial, sans-serif" x="134.27037027147082" y="219.73" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1561">Apr</tspan><title>Apr</title></text><text id="SvgjsText1563" font-family="Helvetica, Arial, sans-serif" x="172.63333320617676" y="219.73" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1564">May</tspan><title>May</title></text><text id="SvgjsText1566" font-family="Helvetica, Arial, sans-serif" x="210.9962961408827" y="219.73" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1567">Jun</tspan><title>Jun</title></text><text id="SvgjsText1569" font-family="Helvetica, Arial, sans-serif" x="249.35925907558862" y="219.73" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1570">Jul</tspan><title>Jul</title></text><text id="SvgjsText1572" font-family="Helvetica, Arial, sans-serif" x="287.72222201029456" y="219.73" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1573">Aug</tspan><title>Aug</title></text><text id="SvgjsText1575" font-family="Helvetica, Arial, sans-serif" x="326.0851849450005" y="219.73" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1576">Sep</tspan><title>Sep</title></text></g></g><g id="SvgjsG1591" class="apexcharts-grid"><g id="SvgjsG1592" class="apexcharts-gridlines-horizontal"></g><g id="SvgjsG1593" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1595" x1="0" y1="190.73" x2="345.2666664123535" y2="190.73" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1594" x1="0" y1="1" x2="0" y2="190.73" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1525" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1526" class="apexcharts-series" seriesName="Earning" rel="1" data:realIndex="0"><path id="SvgjsPath1528" d="M 15.920629617902968 114.438L 15.920629617902968 79.82972592472501Q 19.181481467352974 76.568874075275 22.44233331680298 79.82972592472501L 22.44233331680298 79.82972592472501L 22.44233331680298 114.438L 22.44233331680298 114.438z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasko0j6i25b)" pathTo="M 15.920629617902968 114.438L 15.920629617902968 79.82972592472501Q 19.181481467352974 76.568874075275 22.44233331680298 79.82972592472501L 22.44233331680298 79.82972592472501L 22.44233331680298 114.438L 22.44233331680298 114.438z" pathFrom="M 15.920629617902968 114.438L 15.920629617902968 114.438L 22.44233331680298 114.438L 22.44233331680298 114.438L 22.44233331680298 114.438L 15.920629617902968 114.438" cy="78.19930000000001" cx="54.283592552608916" j="0" val="95" barHeight="36.238699999999994" barWidth="6.521703698900011"></path><path id="SvgjsPath1529" d="M 54.283592552608916 114.438L 54.283592552608916 48.55000592472501Q 57.54444440205892 45.28915407527501 60.80529625150893 48.55000592472501L 60.80529625150893 48.55000592472501L 60.80529625150893 114.438L 60.80529625150893 114.438z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasko0j6i25b)" pathTo="M 54.283592552608916 114.438L 54.283592552608916 48.55000592472501Q 57.54444440205892 45.28915407527501 60.80529625150893 48.55000592472501L 60.80529625150893 48.55000592472501L 60.80529625150893 114.438L 60.80529625150893 114.438z" pathFrom="M 54.283592552608916 114.438L 54.283592552608916 114.438L 60.80529625150893 114.438L 60.80529625150893 114.438L 60.80529625150893 114.438L 54.283592552608916 114.438" cy="46.91958000000001" cx="92.64655548731486" j="1" val="177" barHeight="67.51841999999999" barWidth="6.521703698900011"></path><path id="SvgjsPath1530" d="M 92.64655548731486 114.438L 92.64655548731486 7.733785924725012Q 95.90740733676486 4.472934075275006 99.16825918621487 7.733785924725012L 99.16825918621487 7.733785924725012L 99.16825918621487 114.438L 99.16825918621487 114.438z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasko0j6i25b)" pathTo="M 92.64655548731486 114.438L 92.64655548731486 7.733785924725012Q 95.90740733676486 4.472934075275006 99.16825918621487 7.733785924725012L 99.16825918621487 7.733785924725012L 99.16825918621487 114.438L 99.16825918621487 114.438z" pathFrom="M 92.64655548731486 114.438L 92.64655548731486 114.438L 99.16825918621487 114.438L 99.16825918621487 114.438L 99.16825918621487 114.438L 92.64655548731486 114.438" cy="6.103360000000009" cx="131.0095184220208" j="2" val="284" barHeight="108.33464" barWidth="6.521703698900011"></path><path id="SvgjsPath1531" d="M 131.0095184220208 114.438L 131.0095184220208 18.414665924725014Q 134.2703702714708 15.153814075275008 137.5312221209208 18.414665924725014L 137.5312221209208 18.414665924725014L 137.5312221209208 114.438L 137.5312221209208 114.438z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasko0j6i25b)" pathTo="M 131.0095184220208 114.438L 131.0095184220208 18.414665924725014Q 134.2703702714708 15.153814075275008 137.5312221209208 18.414665924725014L 137.5312221209208 18.414665924725014L 137.5312221209208 114.438L 137.5312221209208 114.438z" pathFrom="M 131.0095184220208 114.438L 131.0095184220208 114.438L 137.5312221209208 114.438L 137.5312221209208 114.438L 137.5312221209208 114.438L 131.0095184220208 114.438" cy="16.78424000000001" cx="169.37248135672672" j="3" val="256" barHeight="97.65375999999999" barWidth="6.521703698900011"></path><path id="SvgjsPath1532" d="M 169.37248135672672 114.438L 169.37248135672672 76.01512592472501Q 172.63333320617673 72.754274075275 175.89418505562674 76.01512592472501L 175.89418505562674 76.01512592472501L 175.89418505562674 114.438L 175.89418505562674 114.438z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasko0j6i25b)" pathTo="M 169.37248135672672 114.438L 169.37248135672672 76.01512592472501Q 172.63333320617673 72.754274075275 175.89418505562674 76.01512592472501L 175.89418505562674 76.01512592472501L 175.89418505562674 114.438L 175.89418505562674 114.438z" pathFrom="M 169.37248135672672 114.438L 169.37248135672672 114.438L 175.89418505562674 114.438L 175.89418505562674 114.438L 175.89418505562674 114.438L 169.37248135672672 114.438" cy="74.38470000000001" cx="207.73544429143266" j="4" val="105" barHeight="40.05329999999999" barWidth="6.521703698900011"></path><path id="SvgjsPath1533" d="M 207.73544429143266 114.438L 207.73544429143266 92.03644592472502Q 210.99629614088266 88.77559407527501 214.25714799033267 92.03644592472502L 214.25714799033267 92.03644592472502L 214.25714799033267 114.438L 214.25714799033267 114.438z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasko0j6i25b)" pathTo="M 207.73544429143266 114.438L 207.73544429143266 92.03644592472502Q 210.99629614088266 88.77559407527501 214.25714799033267 92.03644592472502L 214.25714799033267 92.03644592472502L 214.25714799033267 114.438L 214.25714799033267 114.438z" pathFrom="M 207.73544429143266 114.438L 207.73544429143266 114.438L 214.25714799033267 114.438L 214.25714799033267 114.438L 214.25714799033267 114.438L 207.73544429143266 114.438" cy="90.40602000000001" cx="246.0984072261386" j="5" val="63" barHeight="24.031979999999997" barWidth="6.521703698900011"></path><path id="SvgjsPath1534" d="M 246.0984072261386 114.438L 246.0984072261386 51.98314592472501Q 249.3592590755886 48.722294075275 252.6201109250386 51.98314592472501L 252.6201109250386 51.98314592472501L 252.6201109250386 114.438L 252.6201109250386 114.438z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasko0j6i25b)" pathTo="M 246.0984072261386 114.438L 246.0984072261386 51.98314592472501Q 249.3592590755886 48.722294075275 252.6201109250386 51.98314592472501L 252.6201109250386 51.98314592472501L 252.6201109250386 114.438L 252.6201109250386 114.438z" pathFrom="M 246.0984072261386 114.438L 246.0984072261386 114.438L 252.6201109250386 114.438L 252.6201109250386 114.438L 252.6201109250386 114.438L 246.0984072261386 114.438" cy="50.352720000000005" cx="284.4613701608445" j="6" val="168" barHeight="64.08528" barWidth="6.521703698900011"></path><path id="SvgjsPath1535" d="M 284.4613701608445 114.438L 284.4613701608445 32.910145924725015Q 287.7222220102945 29.64929407527501 290.98307385974454 32.910145924725015L 290.98307385974454 32.910145924725015L 290.98307385974454 114.438L 290.98307385974454 114.438z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasko0j6i25b)" pathTo="M 284.4613701608445 114.438L 284.4613701608445 32.910145924725015Q 287.7222220102945 29.64929407527501 290.98307385974454 32.910145924725015L 290.98307385974454 32.910145924725015L 290.98307385974454 114.438L 290.98307385974454 114.438z" pathFrom="M 284.4613701608445 114.438L 284.4613701608445 114.438L 290.98307385974454 114.438L 290.98307385974454 114.438L 290.98307385974454 114.438L 284.4613701608445 114.438" cy="31.27972000000001" cx="322.82433309555046" j="7" val="218" barHeight="83.15827999999999" barWidth="6.521703698900011"></path><path id="SvgjsPath1536" d="M 322.82433309555046 114.438L 322.82433309555046 88.603305924725Q 326.08518494500044 85.342454075275 329.34603679445047 88.603305924725L 329.34603679445047 88.603305924725L 329.34603679445047 114.438L 329.34603679445047 114.438z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasko0j6i25b)" pathTo="M 322.82433309555046 114.438L 322.82433309555046 88.603305924725Q 326.08518494500044 85.342454075275 329.34603679445047 88.603305924725L 329.34603679445047 88.603305924725L 329.34603679445047 114.438L 329.34603679445047 114.438z" pathFrom="M 322.82433309555046 114.438L 322.82433309555046 114.438L 329.34603679445047 114.438L 329.34603679445047 114.438L 329.34603679445047 114.438L 322.82433309555046 114.438" cy="86.97288" cx="361.1872960302564" j="8" val="72" barHeight="27.46512" barWidth="6.521703698900011"></path></g><g id="SvgjsG1537" class="apexcharts-series" seriesName="Expense" rel="2" data:realIndex="1"><path id="SvgjsPath1539" d="M 15.920629617902968 114.438L 15.920629617902968 168.119274075275Q 19.181481467352974 171.380125924725 22.44233331680298 168.119274075275L 22.44233331680298 168.119274075275L 22.44233331680298 114.438L 22.44233331680298 114.438z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasko0j6i25b)" pathTo="M 15.920629617902968 114.438L 15.920629617902968 168.119274075275Q 19.181481467352974 171.380125924725 22.44233331680298 168.119274075275L 22.44233331680298 168.119274075275L 22.44233331680298 114.438L 22.44233331680298 114.438z" pathFrom="M 15.920629617902968 114.438L 15.920629617902968 114.438L 22.44233331680298 114.438L 22.44233331680298 114.438L 22.44233331680298 114.438L 15.920629617902968 114.438" cy="169.7497" cx="54.283592552608916" j="0" val="-145" barHeight="-55.311699999999995" barWidth="6.521703698900011"></path><path id="SvgjsPath1540" d="M 54.283592552608916 114.438L 54.283592552608916 143.32437407527502Q 57.54444440205892 146.58522592472502 60.80529625150893 143.32437407527502L 60.80529625150893 143.32437407527502L 60.80529625150893 114.438L 60.80529625150893 114.438z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasko0j6i25b)" pathTo="M 54.283592552608916 114.438L 54.283592552608916 143.32437407527502Q 57.54444440205892 146.58522592472502 60.80529625150893 143.32437407527502L 60.80529625150893 143.32437407527502L 60.80529625150893 114.438L 60.80529625150893 114.438z" pathFrom="M 54.283592552608916 114.438L 54.283592552608916 114.438L 60.80529625150893 114.438L 60.80529625150893 114.438L 60.80529625150893 114.438L 54.283592552608916 114.438" cy="144.9548" cx="92.64655548731486" j="1" val="-80" barHeight="-30.516799999999996" barWidth="6.521703698900011"></path><path id="SvgjsPath1541" d="M 92.64655548731486 114.438L 92.64655548731486 135.69517407527502Q 95.90740733676486 138.95602592472503 99.16825918621487 135.69517407527502L 99.16825918621487 135.69517407527502L 99.16825918621487 114.438L 99.16825918621487 114.438z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasko0j6i25b)" pathTo="M 92.64655548731486 114.438L 92.64655548731486 135.69517407527502Q 95.90740733676486 138.95602592472503 99.16825918621487 135.69517407527502L 99.16825918621487 135.69517407527502L 99.16825918621487 114.438L 99.16825918621487 114.438z" pathFrom="M 92.64655548731486 114.438L 92.64655548731486 114.438L 99.16825918621487 114.438L 99.16825918621487 114.438L 99.16825918621487 114.438L 92.64655548731486 114.438" cy="137.3256" cx="131.0095184220208" j="2" val="-60" barHeight="-22.8876" barWidth="6.521703698900011"></path><path id="SvgjsPath1542" d="M 131.0095184220208 114.438L 131.0095184220208 181.470374075275Q 134.2703702714708 184.731225924725 137.5312221209208 181.470374075275L 137.5312221209208 181.470374075275L 137.5312221209208 114.438L 137.5312221209208 114.438z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasko0j6i25b)" pathTo="M 131.0095184220208 114.438L 131.0095184220208 181.470374075275Q 134.2703702714708 184.731225924725 137.5312221209208 181.470374075275L 137.5312221209208 181.470374075275L 137.5312221209208 114.438L 137.5312221209208 114.438z" pathFrom="M 131.0095184220208 114.438L 131.0095184220208 114.438L 137.5312221209208 114.438L 137.5312221209208 114.438L 137.5312221209208 114.438L 131.0095184220208 114.438" cy="183.1008" cx="169.37248135672672" j="3" val="-180" barHeight="-68.66279999999999" barWidth="6.521703698900011"></path><path id="SvgjsPath1543" d="M 169.37248135672672 114.438L 169.37248135672672 150.95357407527501Q 172.63333320617673 154.21442592472502 175.89418505562674 150.95357407527501L 175.89418505562674 150.95357407527501L 175.89418505562674 114.438L 175.89418505562674 114.438z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasko0j6i25b)" pathTo="M 169.37248135672672 114.438L 169.37248135672672 150.95357407527501Q 172.63333320617673 154.21442592472502 175.89418505562674 150.95357407527501L 175.89418505562674 150.95357407527501L 175.89418505562674 114.438L 175.89418505562674 114.438z" pathFrom="M 169.37248135672672 114.438L 169.37248135672672 114.438L 175.89418505562674 114.438L 175.89418505562674 114.438L 175.89418505562674 114.438L 169.37248135672672 114.438" cy="152.584" cx="207.73544429143266" j="4" val="-100" barHeight="-38.145999999999994" barWidth="6.521703698900011"></path><path id="SvgjsPath1544" d="M 207.73544429143266 114.438L 207.73544429143266 135.69517407527502Q 210.99629614088266 138.95602592472503 214.25714799033267 135.69517407527502L 214.25714799033267 135.69517407527502L 214.25714799033267 114.438L 214.25714799033267 114.438z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasko0j6i25b)" pathTo="M 207.73544429143266 114.438L 207.73544429143266 135.69517407527502Q 210.99629614088266 138.95602592472503 214.25714799033267 135.69517407527502L 214.25714799033267 135.69517407527502L 214.25714799033267 114.438L 214.25714799033267 114.438z" pathFrom="M 207.73544429143266 114.438L 207.73544429143266 114.438L 214.25714799033267 114.438L 214.25714799033267 114.438L 214.25714799033267 114.438L 207.73544429143266 114.438" cy="137.3256" cx="246.0984072261386" j="5" val="-60" barHeight="-22.8876" barWidth="6.521703698900011"></path><path id="SvgjsPath1545" d="M 246.0984072261386 114.438L 246.0984072261386 145.231674075275Q 249.3592590755886 148.49252592472502 252.6201109250386 145.231674075275L 252.6201109250386 145.231674075275L 252.6201109250386 114.438L 252.6201109250386 114.438z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasko0j6i25b)" pathTo="M 246.0984072261386 114.438L 246.0984072261386 145.231674075275Q 249.3592590755886 148.49252592472502 252.6201109250386 145.231674075275L 252.6201109250386 145.231674075275L 252.6201109250386 114.438L 252.6201109250386 114.438z" pathFrom="M 246.0984072261386 114.438L 246.0984072261386 114.438L 252.6201109250386 114.438L 252.6201109250386 114.438L 252.6201109250386 114.438L 246.0984072261386 114.438" cy="146.8621" cx="284.4613701608445" j="6" val="-85" barHeight="-32.424099999999996" barWidth="6.521703698900011"></path><path id="SvgjsPath1546" d="M 284.4613701608445 114.438L 284.4613701608445 141.41707407527502Q 287.7222220102945 144.67792592472503 290.98307385974454 141.41707407527502L 290.98307385974454 141.41707407527502L 290.98307385974454 114.438L 290.98307385974454 114.438z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasko0j6i25b)" pathTo="M 284.4613701608445 114.438L 284.4613701608445 141.41707407527502Q 287.7222220102945 144.67792592472503 290.98307385974454 141.41707407527502L 290.98307385974454 141.41707407527502L 290.98307385974454 114.438L 290.98307385974454 114.438z" pathFrom="M 284.4613701608445 114.438L 284.4613701608445 114.438L 290.98307385974454 114.438L 290.98307385974454 114.438L 290.98307385974454 114.438L 284.4613701608445 114.438" cy="143.0475" cx="322.82433309555046" j="7" val="-75" barHeight="-28.609499999999997" barWidth="6.521703698900011"></path><path id="SvgjsPath1547" d="M 322.82433309555046 114.438L 322.82433309555046 150.95357407527501Q 326.08518494500044 154.21442592472502 329.34603679445047 150.95357407527501L 329.34603679445047 150.95357407527501L 329.34603679445047 114.438L 329.34603679445047 114.438z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasko0j6i25b)" pathTo="M 322.82433309555046 114.438L 322.82433309555046 150.95357407527501Q 326.08518494500044 154.21442592472502 329.34603679445047 150.95357407527501L 329.34603679445047 150.95357407527501L 329.34603679445047 114.438L 329.34603679445047 114.438z" pathFrom="M 322.82433309555046 114.438L 322.82433309555046 114.438L 329.34603679445047 114.438L 329.34603679445047 114.438L 329.34603679445047 114.438L 322.82433309555046 114.438" cy="152.584" cx="361.1872960302564" j="8" val="-100" barHeight="-38.145999999999994" barWidth="6.521703698900011"></path></g><g id="SvgjsG1527" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1538" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1596" x1="0" y1="0" x2="345.2666664123535" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1597" x1="0" y1="0" x2="345.2666664123535" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1598" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1599" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1600" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1577" class="apexcharts-yaxis" rel="0" transform="translate(24.733333587646484, 0)"><g id="SvgjsG1578" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1579" font-family="Helvetica, Arial, sans-serif" x="20" y="11.5" text-anchor="end" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1580">300</tspan></text><text id="SvgjsText1581" font-family="Helvetica, Arial, sans-serif" x="20" y="49.646" text-anchor="end" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1582">200</tspan></text><text id="SvgjsText1583" font-family="Helvetica, Arial, sans-serif" x="20" y="87.792" text-anchor="end" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1584">100</tspan></text><text id="SvgjsText1585" font-family="Helvetica, Arial, sans-serif" x="20" y="125.938" text-anchor="end" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1586">0</tspan></text><text id="SvgjsText1587" font-family="Helvetica, Arial, sans-serif" x="20" y="164.084" text-anchor="end" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1588">-100</tspan></text><text id="SvgjsText1589" font-family="Helvetica, Arial, sans-serif" x="20" y="202.23000000000002" text-anchor="end" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1590">-200</tspan></text></g></g><g id="SvgjsG1515" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 115px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(115, 103, 240);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 159, 67);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 453px; height: 354px;"></div></div><div class="contract-trigger"></div></div></div>
                                    <div class="col-md-4 col-12 budget-wrapper" style="position: relative;">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle budget-dropdown waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                2020
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">2020</a>
                                                <a class="dropdown-item" href="#">2019</a>
                                                <a class="dropdown-item" href="#">2018</a>
                                            </div>
                                        </div>
                                        <h2 class="mb-25">$25,852</h2>
                                        <div class="d-flex justify-content-center">
                                            <span class="fw-bolder me-25">Budget:</span>
                                            <span>56,800</span>
                                        </div>
                                        <div id="budget-chart" style="min-height: 80px;"><div id="apexcharts2s17ptl6" class="apexcharts-canvas apexcharts2s17ptl6 apexcharts-theme-light" style="width: 142px; height: 80px;"><svg id="SvgjsSvg1601" width="142" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1603" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1602"><clipPath id="gridRectMask2s17ptl6"><rect id="SvgjsRect1608" width="148" height="82" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask2s17ptl6"><rect id="SvgjsRect1609" width="146" height="84" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1607" x1="0" y1="0" x2="0" y2="80" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1619" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1620" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1622" class="apexcharts-grid"><g id="SvgjsG1623" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1625" x1="0" y1="0" x2="142" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1626" x1="0" y1="20" x2="142" y2="20" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1627" x1="0" y1="40" x2="142" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1628" x1="0" y1="60" x2="142" y2="60" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1629" x1="0" y1="80" x2="142" y2="80" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1624" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1631" x1="0" y1="80" x2="142" y2="80" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1630" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1610" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1611" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1614" d="M 0 19C 4.97 19 9.23 32 14.2 32C 19.169999999999998 32 23.43 11 28.4 11C 33.37 11 37.63 28 42.6 28C 47.57 28 51.83 20 56.8 20C 61.769999999999996 20 66.03 40 71 40C 75.97 40 80.23 1 85.2 1C 90.17 1 94.42999999999999 20 99.39999999999999 20C 104.36999999999999 20 108.63 21 113.6 21C 118.57 21 122.83 37 127.8 37C 132.77 37 137.03 18 142 18" fill="none" fill-opacity="1" stroke="rgba(115,103,240,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask2s17ptl6)" pathTo="M 0 19C 4.97 19 9.23 32 14.2 32C 19.169999999999998 32 23.43 11 28.4 11C 33.37 11 37.63 28 42.6 28C 47.57 28 51.83 20 56.8 20C 61.769999999999996 20 66.03 40 71 40C 75.97 40 80.23 1 85.2 1C 90.17 1 94.42999999999999 20 99.39999999999999 20C 104.36999999999999 20 108.63 21 113.6 21C 118.57 21 122.83 37 127.8 37C 132.77 37 137.03 18 142 18" pathFrom="M -1 80L -1 80L 14.2 80L 28.4 80L 42.6 80L 56.8 80L 71 80L 85.2 80L 99.39999999999999 80L 113.6 80L 127.8 80L 142 80"></path><g id="SvgjsG1612" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG1615" class="apexcharts-series" seriesName="seriesx2" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath1618" d="M 0 60C 4.97 60 9.23 70 14.2 70C 19.169999999999998 70 23.43 50 28.4 50C 33.37 50 37.63 65 42.6 65C 47.57 65 51.83 57 56.8 57C 61.769999999999996 57 66.03 80 71 80C 75.97 80 80.23 55 85.2 55C 90.17 55 94.42999999999999 65 99.39999999999999 65C 104.36999999999999 65 108.63 60 113.6 60C 118.57 60 122.83 75 127.8 75C 132.77 75 137.03 53 142 53" fill="none" fill-opacity="1" stroke="rgba(220,218,227,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="5" class="apexcharts-line" index="1" clip-path="url(#gridRectMask2s17ptl6)" pathTo="M 0 60C 4.97 60 9.23 70 14.2 70C 19.169999999999998 70 23.43 50 28.4 50C 33.37 50 37.63 65 42.6 65C 47.57 65 51.83 57 56.8 57C 61.769999999999996 57 66.03 80 71 80C 75.97 80 80.23 55 85.2 55C 90.17 55 94.42999999999999 65 99.39999999999999 65C 104.36999999999999 65 108.63 60 113.6 60C 118.57 60 122.83 75 127.8 75C 132.77 75 137.03 53 142 53" pathFrom="M -1 80L -1 80L 14.2 80L 28.4 80L 42.6 80L 56.8 80L 71 80L 85.2 80L 99.39999999999999 80L 113.6 80L 127.8 80L 142 80"></path><g id="SvgjsG1616" class="apexcharts-series-markers-wrap" data:realIndex="1"></g></g><g id="SvgjsG1613" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1617" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1632" x1="0" y1="0" x2="142" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1633" x1="0" y1="0" x2="142" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1634" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1635" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1636" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1606" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1621" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1604" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 40px;"></div></div></div>
                                        <button type="button" class="btn btn-primary waves-effect waves-float waves-light">Increase Budget</button>
                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 227px; height: 354px;"></div></div><div class="contract-trigger"></div></div></div>
                                </div>
                            </div>
                        </div>
                        <!--/ Revenue Report Card -->
                    </div>

                    <div class="row match-height">
                        <!-- Company Table Card -->
                        <div class="col-lg-8 col-12">
                            <div class="card card-company-table">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Company</th>
                                                    <th>Category</th>
                                                    <th>Views</th>
                                                    <th>Revenue</th>
                                                    <th>Sales</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar rounded">
                                                                <div class="avatar-content">
                                                                    <img src="/app-assets/images/icons/toolbox.svg" alt="Toolbar svg">
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="fw-bolder">Dixons</div>
                                                                <div class="font-small-2 text-muted">meguc@ruj.io</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar bg-light-primary me-1">
                                                                <div class="avatar-content">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor font-medium-3"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                                                                </div>
                                                            </div>
                                                            <span>Technology</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class="d-flex flex-column">
                                                            <span class="fw-bolder mb-25">23.4k</span>
                                                            <span class="font-small-2 text-muted">in 24 hours</span>
                                                        </div>
                                                    </td>
                                                    <td>$891.2</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="fw-bolder me-1">68%</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down text-danger font-medium-1"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar rounded">
                                                                <div class="avatar-content">
                                                                    <img src="/app-assets/images/icons/parachute.svg" alt="Parachute svg">
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="fw-bolder">Motels</div>
                                                                <div class="font-small-2 text-muted">vecav@hodzi.co.uk</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar bg-light-success me-1">
                                                                <div class="avatar-content">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee font-medium-3"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
                                                                </div>
                                                            </div>
                                                            <span>Grocery</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class="d-flex flex-column">
                                                            <span class="fw-bolder mb-25">78k</span>
                                                            <span class="font-small-2 text-muted">in 2 days</span>
                                                        </div>
                                                    </td>
                                                    <td>$668.51</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="fw-bolder me-1">97%</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-success font-medium-1"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar rounded">
                                                                <div class="avatar-content">
                                                                    <img src="/app-assets/images/icons/brush.svg" alt="Brush svg">
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="fw-bolder">Zipcar</div>
                                                                <div class="font-small-2 text-muted">davcilse@is.gov</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar bg-light-warning me-1">
                                                                <div class="avatar-content">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-watch font-medium-3"><circle cx="12" cy="12" r="7"></circle><polyline points="12 9 12 12 13.5 13.5"></polyline><path d="M16.51 17.35l-.35 3.83a2 2 0 0 1-2 1.82H9.83a2 2 0 0 1-2-1.82l-.35-3.83m.01-10.7l.35-3.83A2 2 0 0 1 9.83 1h4.35a2 2 0 0 1 2 1.82l.35 3.83"></path></svg>
                                                                </div>
                                                            </div>
                                                            <span>Fashion</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class="d-flex flex-column">
                                                            <span class="fw-bolder mb-25">162</span>
                                                            <span class="font-small-2 text-muted">in 5 days</span>
                                                        </div>
                                                    </td>
                                                    <td>$522.29</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="fw-bolder me-1">62%</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-success font-medium-1"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar rounded">
                                                                <div class="avatar-content">
                                                                    <img src="/app-assets/images/icons/star.svg" alt="Star svg">
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="fw-bolder">Owning</div>
                                                                <div class="font-small-2 text-muted">us@cuhil.gov</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar bg-light-primary me-1">
                                                                <div class="avatar-content">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor font-medium-3"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                                                                </div>
                                                            </div>
                                                            <span>Technology</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class="d-flex flex-column">
                                                            <span class="fw-bolder mb-25">214</span>
                                                            <span class="font-small-2 text-muted">in 24 hours</span>
                                                        </div>
                                                    </td>
                                                    <td>$291.01</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="fw-bolder me-1">88%</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-success font-medium-1"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar rounded">
                                                                <div class="avatar-content">
                                                                    <img src="/app-assets/images/icons/book.svg" alt="Book svg">
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="fw-bolder">Cafés</div>
                                                                <div class="font-small-2 text-muted">pudais@jife.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar bg-light-success me-1">
                                                                <div class="avatar-content">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee font-medium-3"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
                                                                </div>
                                                            </div>
                                                            <span>Grocery</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class="d-flex flex-column">
                                                            <span class="fw-bolder mb-25">208</span>
                                                            <span class="font-small-2 text-muted">in 1 week</span>
                                                        </div>
                                                    </td>
                                                    <td>$783.93</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="fw-bolder me-1">16%</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down text-danger font-medium-1"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar rounded">
                                                                <div class="avatar-content">
                                                                    <img src="/app-assets/images/icons/rocket.svg" alt="Rocket svg">
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="fw-bolder">Kmart</div>
                                                                <div class="font-small-2 text-muted">bipri@cawiw.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar bg-light-warning me-1">
                                                                <div class="avatar-content">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-watch font-medium-3"><circle cx="12" cy="12" r="7"></circle><polyline points="12 9 12 12 13.5 13.5"></polyline><path d="M16.51 17.35l-.35 3.83a2 2 0 0 1-2 1.82H9.83a2 2 0 0 1-2-1.82l-.35-3.83m.01-10.7l.35-3.83A2 2 0 0 1 9.83 1h4.35a2 2 0 0 1 2 1.82l.35 3.83"></path></svg>
                                                                </div>
                                                            </div>
                                                            <span>Fashion</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class="d-flex flex-column">
                                                            <span class="fw-bolder mb-25">990</span>
                                                            <span class="font-small-2 text-muted">in 1 month</span>
                                                        </div>
                                                    </td>
                                                    <td>$780.05</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="fw-bolder me-1">78%</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-success font-medium-1"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar rounded">
                                                                <div class="avatar-content">
                                                                    <img src="/app-assets/images/icons/speaker.svg" alt="Speaker svg">
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="fw-bolder">Payers</div>
                                                                <div class="font-small-2 text-muted">luk@izug.io</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar bg-light-warning me-1">
                                                                <div class="avatar-content">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-watch font-medium-3"><circle cx="12" cy="12" r="7"></circle><polyline points="12 9 12 12 13.5 13.5"></polyline><path d="M16.51 17.35l-.35 3.83a2 2 0 0 1-2 1.82H9.83a2 2 0 0 1-2-1.82l-.35-3.83m.01-10.7l.35-3.83A2 2 0 0 1 9.83 1h4.35a2 2 0 0 1 2 1.82l.35 3.83"></path></svg>
                                                                </div>
                                                            </div>
                                                            <span>Fashion</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class="d-flex flex-column">
                                                            <span class="fw-bolder mb-25">12.9k</span>
                                                            <span class="font-small-2 text-muted">in 12 hours</span>
                                                        </div>
                                                    </td>
                                                    <td>$531.49</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="fw-bolder me-1">42%</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-success font-medium-1"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Company Table Card -->

                        <!-- Developer Meetup Card -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card card-developer-meetup">
                                <div class="meetup-img-wrapper rounded-top text-center">
                                    <img src="/app-assets/images/illustration/email.svg" alt="Meeting Pic" height="170">
                                </div>
                                <div class="card-body">
                                    <div class="meetup-header d-flex align-items-center">
                                        <div class="meetup-day">
                                            <h6 class="mb-0">THU</h6>
                                            <h3 class="mb-0">24</h3>
                                        </div>
                                        <div class="my-auto">
                                            <h4 class="card-title mb-25">Developer Meetup</h4>
                                            <p class="card-text mb-0">Meet world popular developers</p>
                                        </div>
                                    </div>
                                    <div class="mt-0">
                                        <div class="avatar float-start bg-light-primary rounded me-1">
                                            <div class="avatar-content">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar avatar-icon font-medium-3"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                            </div>
                                        </div>
                                        <div class="more-info">
                                            <h6 class="mb-0">Sat, May 25, 2020</h6>
                                            <small>10:AM to 6:PM</small>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="avatar float-start bg-light-primary rounded me-1">
                                            <div class="avatar-content">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin avatar-icon font-medium-3"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                            </div>
                                        </div>
                                        <div class="more-info">
                                            <h6 class="mb-0">Central Park</h6>
                                            <small>Manhattan, New york City</small>
                                        </div>
                                    </div>
                                    <div class="avatar-group">
                                        <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Billy Hopkins">
                                            <img src="/app-assets/images/portrait/small/avatar-s-9.jpg" alt="Avatar" width="33" height="33">
                                        </div>
                                        <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Amy Carson">
                                            <img src="/app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" width="33" height="33">
                                        </div>
                                        <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Brandon Miles">
                                            <img src="/app-assets/images/portrait/small/avatar-s-8.jpg" alt="Avatar" width="33" height="33">
                                        </div>
                                        <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Daisy Weber">
                                            <img src="/app-assets/images/portrait/small/avatar-s-20.jpg" alt="Avatar" width="33" height="33">
                                        </div>
                                        <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Jenny Looper">
                                            <img src="/app-assets/images/portrait/small/avatar-s-20.jpg" alt="Avatar" width="33" height="33">
                                        </div>
                                        <h6 class="align-self-center cursor-pointer ms-50 mb-0">+42</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Developer Meetup Card -->

                        <!-- Browser States Card -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card card-browser-states">
                                <div class="card-header">
                                    <div>
                                        <h4 class="card-title">Browser States</h4>
                                        <p class="card-text font-small-2">Counter August 2020</p>
                                    </div>
                                    <div class="dropdown chart-dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-medium-3 cursor-pointer" data-bs-toggle="dropdown"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Last 28 Days</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="browser-states">
                                        <div class="d-flex">
                                            <img src="/app-assets/images/icons/google-chrome.png" class="rounded me-1" alt="Google Chrome" height="30">
                                            <h6 class="align-self-center mb-0">Google Chrome</h6>
                                        </div>
                                        <div class="d-flex align-items-center" style="position: relative;">
                                            <div class="fw-bold text-body-heading me-1">54.4%</div>
                                            <div id="browser-state-chart-primary" style="min-height: 35.7px;"><div id="apexchartsohpbn5x1" class="apexcharts-canvas apexchartsohpbn5x1 apexcharts-theme-light" style="width: 30px; height: 35.7px;"><svg id="SvgjsSvg1760" width="30" height="35.699999999999996" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1762" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, -12)"><defs id="SvgjsDefs1761"><clipPath id="gridRectMaskohpbn5x1"><rect id="SvgjsRect1764" width="66" height="59" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskohpbn5x1"><rect id="SvgjsRect1765" width="64" height="61" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1766" class="apexcharts-radialbar"><g id="SvgjsG1767"><g id="SvgjsG1768" class="apexcharts-tracks"><g id="SvgjsG1769" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703" fill="none" fill-opacity="1" stroke="rgba(235,235,235,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.952395121951219" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703"></path></g></g><g id="SvgjsG1771"><g id="SvgjsG1774" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1775" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 26.649258182615842 41.68542541152726" fill="none" fill-opacity="0.85" stroke="rgba(115,103,240,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.074634146341463" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="196" data:value="54.4" index="0" j="0" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 26.649258182615842 41.68542541152726"></path></g><circle id="SvgjsCircle1772" r="5.180143902439028" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1773" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"></g></g></g></g><line id="SvgjsLine1776" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1777" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1763" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 87px; height: 37px;"></div></div><div class="contract-trigger"></div></div></div>
                                    </div>
                                    <div class="browser-states">
                                        <div class="d-flex">
                                            <img src="/app-assets/images/icons/mozila-firefox.png" class="rounded me-1" alt="Mozila Firefox" height="30">
                                            <h6 class="align-self-center mb-0">Mozila Firefox</h6>
                                        </div>
                                        <div class="d-flex align-items-center" style="position: relative;">
                                            <div class="fw-bold text-body-heading me-1">6.1%</div>
                                            <div id="browser-state-chart-warning" style="min-height: 35.7px;"><div id="apexchartsg67bx2apk" class="apexcharts-canvas apexchartsg67bx2apk apexcharts-theme-light" style="width: 30px; height: 35.7px;"><svg id="SvgjsSvg1811" width="30" height="35.699999999999996" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1813" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, -12)"><defs id="SvgjsDefs1812"><clipPath id="gridRectMaskg67bx2apk"><rect id="SvgjsRect1815" width="66" height="59" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskg67bx2apk"><rect id="SvgjsRect1816" width="64" height="61" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1817" class="apexcharts-radialbar"><g id="SvgjsG1818"><g id="SvgjsG1819" class="apexcharts-tracks"><g id="SvgjsG1820" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703" fill="none" fill-opacity="1" stroke="rgba(235,235,235,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.952395121951219" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703"></path></g></g><g id="SvgjsG1822"><g id="SvgjsG1825" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1826" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 34.55384566401036 18.728836464521155" fill="none" fill-opacity="0.85" stroke="rgba(255,159,67,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.074634146341463" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="22" data:value="6.1" index="0" j="0" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 34.55384566401036 18.728836464521155"></path></g><circle id="SvgjsCircle1823" r="5.180143902439028" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1824" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"></g></g></g></g><line id="SvgjsLine1827" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1828" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1814" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 74px; height: 37px;"></div></div><div class="contract-trigger"></div></div></div>
                                    </div>
                                    <div class="browser-states">
                                        <div class="d-flex">
                                            <img src="/app-assets/images/icons/apple-safari.png" class="rounded me-1" alt="Apple Safari" height="30">
                                            <h6 class="align-self-center mb-0">Apple Safari</h6>
                                        </div>
                                        <div class="d-flex align-items-center" style="position: relative;">
                                            <div class="fw-bold text-body-heading me-1">14.6%</div>
                                            <div id="browser-state-chart-secondary" style="min-height: 35.7px;"><div id="apexchartsmwk5efml" class="apexcharts-canvas apexchartsmwk5efml apexcharts-theme-light" style="width: 30px; height: 35.7px;"><svg id="SvgjsSvg1829" width="30" height="35.699999999999996" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1831" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, -12)"><defs id="SvgjsDefs1830"><clipPath id="gridRectMaskmwk5efml"><rect id="SvgjsRect1833" width="66" height="59" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskmwk5efml"><rect id="SvgjsRect1834" width="64" height="61" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1835" class="apexcharts-radialbar"><g id="SvgjsG1836"><g id="SvgjsG1837" class="apexcharts-tracks"><g id="SvgjsG1838" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703" fill="none" fill-opacity="1" stroke="rgba(235,235,235,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.952395121951219" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703"></path></g></g><g id="SvgjsG1840"><g id="SvgjsG1843" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1844" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 39.70848596494321 22.684131080750916" fill="none" fill-opacity="0.85" stroke="rgba(130,134,139,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.074634146341463" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="53" data:value="14.6" index="0" j="0" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 39.70848596494321 22.684131080750916"></path></g><circle id="SvgjsCircle1841" r="5.180143902439028" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1842" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"></g></g></g></g><line id="SvgjsLine1845" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1846" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1832" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 84px; height: 37px;"></div></div><div class="contract-trigger"></div></div></div>
                                    </div>
                                    <div class="browser-states">
                                        <div class="d-flex">
                                            <img src="/app-assets/images/icons/internet-explorer.png" class="rounded me-1" alt="Internet Explorer" height="30">
                                            <h6 class="align-self-center mb-0">Internet Explorer</h6>
                                        </div>
                                        <div class="d-flex align-items-center" style="position: relative;">
                                            <div class="fw-bold text-body-heading me-1">4.2%</div>
                                            <div id="browser-state-chart-info" style="min-height: 35.7px;"><div id="apexcharts3wo4uhr" class="apexcharts-canvas apexcharts3wo4uhr apexcharts-theme-light" style="width: 30px; height: 35.7px;"><svg id="SvgjsSvg1847" width="30" height="35.699999999999996" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1849" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, -12)"><defs id="SvgjsDefs1848"><clipPath id="gridRectMask3wo4uhr"><rect id="SvgjsRect1851" width="66" height="59" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask3wo4uhr"><rect id="SvgjsRect1852" width="64" height="61" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1853" class="apexcharts-radialbar"><g id="SvgjsG1854"><g id="SvgjsG1855" class="apexcharts-tracks"><g id="SvgjsG1856" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703" fill="none" fill-opacity="1" stroke="rgba(235,235,235,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.952395121951219" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703"></path></g></g><g id="SvgjsG1858"><g id="SvgjsG1861" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1862" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 33.14629268950116 18.257875827299152" fill="none" fill-opacity="0.85" stroke="rgba(0,207,232,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.074634146341463" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="15" data:value="4.2" index="0" j="0" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 33.14629268950116 18.257875827299152"></path></g><circle id="SvgjsCircle1859" r="5.180143902439028" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1860" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"></g></g></g></g><line id="SvgjsLine1863" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1864" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1850" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 78px; height: 37px;"></div></div><div class="contract-trigger"></div></div></div>
                                    </div>
                                    <div class="browser-states">
                                        <div class="d-flex">
                                            <img src="/app-assets/images/icons/opera.png" class="rounded me-1" alt="Opera Mini" height="30">
                                            <h6 class="align-self-center mb-0">Opera Mini</h6>
                                        </div>
                                        <div class="d-flex align-items-center" style="position: relative;">
                                            <div class="fw-bold text-body-heading me-1">8.4%</div>
                                            <div id="browser-state-chart-danger" style="min-height: 35.7px;"><div id="apexchartsyms3mzml" class="apexcharts-canvas apexchartsyms3mzml apexcharts-theme-light" style="width: 30px; height: 35.7px;"><svg id="SvgjsSvg1865" width="30" height="35.699999999999996" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1867" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, -12)"><defs id="SvgjsDefs1866"><clipPath id="gridRectMaskyms3mzml"><rect id="SvgjsRect1869" width="66" height="59" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskyms3mzml"><rect id="SvgjsRect1870" width="64" height="61" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1871" class="apexcharts-radialbar"><g id="SvgjsG1872"><g id="SvgjsG1873" class="apexcharts-tracks"><g id="SvgjsG1874" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703" fill="none" fill-opacity="1" stroke="rgba(235,235,235,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.952395121951219" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703"></path></g></g><g id="SvgjsG1876"><g id="SvgjsG1879" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1880" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 36.07817073170732 19.472299475604824" fill="none" fill-opacity="0.85" stroke="rgba(234,84,85,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.074634146341463" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="30" data:value="8.4" index="0" j="0" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 36.07817073170732 19.472299475604824"></path></g><circle id="SvgjsCircle1877" r="5.180143902439028" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1878" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"></g></g></g></g><line id="SvgjsLine1881" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1882" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1868" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 78px; height: 37px;"></div></div><div class="contract-trigger"></div></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Browser States Card -->

                        <!-- Goal Overview Card -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">Goal Overview</h4>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle font-medium-3 text-muted cursor-pointer"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                                </div>
                                <div class="card-body p-0" style="position: relative;">
                                    <div id="goal-overview-radial-bar-chart" class="my-2" style="min-height: 205.633px;"><div id="apexchartsq28zwvah" class="apexcharts-canvas apexchartsq28zwvah apexcharts-theme-light" style="width: 326px; height: 205.633px;"><svg id="SvgjsSvg1778" width="326" height="205.63333333333335" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1780" class="apexcharts-inner apexcharts-graphical" transform="translate(40.5, -10)"><defs id="SvgjsDefs1779"><clipPath id="gridRectMaskq28zwvah"><rect id="SvgjsRect1782" width="251" height="217" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskq28zwvah"><rect id="SvgjsRect1783" width="249" height="219" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1788" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop1789" stop-opacity="1" stop-color="rgba(40,199,111,1)" offset="0"></stop><stop id="SvgjsStop1790" stop-opacity="1" stop-color="rgba(235,233,241,1)" offset="1"></stop><stop id="SvgjsStop1791" stop-opacity="1" stop-color="rgba(235,233,241,1)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1798" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop1799" stop-opacity="1" stop-color="rgba(40,199,111,1)" offset="0"></stop><stop id="SvgjsStop1800" stop-opacity="1" stop-color="rgba(81,229,168,1)" offset="1"></stop><stop id="SvgjsStop1801" stop-opacity="1" stop-color="rgba(81,229,168,1)" offset="1"></stop></linearGradient><filter id="SvgjsFilter1803" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood1804" flood-color="#000000" flood-opacity="0.1" result="SvgjsFeFlood1804Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1805" in="SvgjsFeFlood1804Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1805Out"></feComposite><feOffset id="SvgjsFeOffset1806" dx="1" dy="1" result="SvgjsFeOffset1806Out" in="SvgjsFeComposite1805Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1807" stdDeviation="3 " result="SvgjsFeGaussianBlur1807Out" in="SvgjsFeOffset1806Out"></feGaussianBlur><feBlend id="SvgjsFeBlend1808" in="SourceGraphic" in2="SvgjsFeGaussianBlur1807Out" mode="normal" result="SvgjsFeBlend1808Out"></feBlend></filter></defs><g id="SvgjsG1784" class="apexcharts-radialbar"><g id="SvgjsG1785"><g id="SvgjsG1786" class="apexcharts-tracks"><g id="SvgjsG1787" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 77.85670731707313 184.82445114399718 A 89.28658536585367 89.28658536585367 0 1 1 167.14329268292684 184.82445114399718" fill="none" fill-opacity="1" stroke="rgba(235,233,241,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.5304878048780495" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 77.85670731707313 184.82445114399718 A 89.28658536585367 89.28658536585367 0 1 1 167.14329268292684 184.82445114399718"></path></g></g><g id="SvgjsG1793"><g id="SvgjsG1797" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1802" d="M 77.85670731707313 184.82445114399718 A 89.28658536585367 89.28658536585367 0 1 1 210.6873193374061 121.46749921697622" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient1798)" stroke-opacity="1" stroke-linecap="round" stroke-width="7.060975609756099" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="249" data:value="83" filter="url(#SvgjsFilter1803)" index="0" j="0" data:pathOrig="M 77.85670731707313 184.82445114399718 A 89.28658536585367 89.28658536585367 0 1 1 210.6873193374061 121.46749921697622"></path></g><circle id="SvgjsCircle1794" r="82.52134146341464" cx="122.5" cy="107.5" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1795" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1796" font-family="Helvetica, Arial, sans-serif" x="122.5" y="123.5" text-anchor="middle" dominant-baseline="auto" font-size="2.86rem" font-weight="600" fill="#5e5873" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">83%</text></g></g></g></g><line id="SvgjsLine1809" x1="0" y1="0" x2="245" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1810" x1="0" y1="0" x2="245" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1781" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                    <div class="row border-top text-center mx-0">
                                        <div class="col-6 border-end py-1">
                                            <p class="card-text text-muted mb-0">Completed</p>
                                            <h3 class="fw-bolder mb-0">786,617</h3>
                                        </div>
                                        <div class="col-6 py-1">
                                            <p class="card-text text-muted mb-0">In Progress</p>
                                            <h3 class="fw-bolder mb-0">13,561</h3>
                                        </div>
                                    </div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 327px; height: 324px;"></div></div><div class="contract-trigger"></div></div></div>
                            </div>
                        </div>
                        <!--/ Goal Overview Card -->

                        <!-- Transaction Card -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card card-transaction">
                                <div class="card-header">
                                    <h4 class="card-title">Transactions</h4>
                                    <div class="dropdown chart-dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-medium-3 cursor-pointer" data-bs-toggle="dropdown"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Last 28 Days</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div class="avatar bg-light-primary rounded float-start">
                                                <div class="avatar-content">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pocket avatar-icon font-medium-3"><path d="M4 3h16a2 2 0 0 1 2 2v6a10 10 0 0 1-10 10A10 10 0 0 1 2 11V5a2 2 0 0 1 2-2z"></path><polyline points="8 10 12 14 16 10"></polyline></svg>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">Wallet</h6>
                                                <small>Starbucks</small>
                                            </div>
                                        </div>
                                        <div class="fw-bolder text-danger">- $74</div>
                                    </div>
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div class="avatar bg-light-success rounded float-start">
                                                <div class="avatar-content">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check avatar-icon font-medium-3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">Bank Transfer</h6>
                                                <small>Add Money</small>
                                            </div>
                                        </div>
                                        <div class="fw-bolder text-success">+ $480</div>
                                    </div>
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div class="avatar bg-light-danger rounded float-start">
                                                <div class="avatar-content">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign avatar-icon font-medium-3"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">Paypal</h6>
                                                <small>Add Money</small>
                                            </div>
                                        </div>
                                        <div class="fw-bolder text-success">+ $590</div>
                                    </div>
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div class="avatar bg-light-warning rounded float-start">
                                                <div class="avatar-content">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card avatar-icon font-medium-3"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">Mastercard</h6>
                                                <small>Ordered Food</small>
                                            </div>
                                        </div>
                                        <div class="fw-bolder text-danger">- $23</div>
                                    </div>
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div class="avatar bg-light-info rounded float-start">
                                                <div class="avatar-content">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up avatar-icon font-medium-3"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">Transfer</h6>
                                                <small>Refund</small>
                                            </div>
                                        </div>
                                        <div class="fw-bolder text-success">+ $98</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Transaction Card -->
                    </div>
                </section>
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay" style="touch-action: pan-y; user-select: none;"></div>
    <div class="drag-target" style="touch-action: pan-y; user-select: none;"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT © 2021<a class="ms-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted &amp; Made with<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top waves-effect waves-float waves-light" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></button>
    <!-- END: Footer-->






<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg>
</template>

<script>
import {mapActions} from 'vuex'
export default {
    name:"default-layout",
    data(){
        return {
            user:this.$store.state.auth.user
        }
    },
    methods:{
        ...mapActions({
            signOut:"auth/logout"
        }),
        async logout(){
            await axios.post('/logout').then(({data})=>{
                this.signOut()
                this.$router.push({name:"login"})
            })
        }
    }
}
</script>

<style scoped>
.ps {
  height: 590px;
}
</style>>
