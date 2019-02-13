<?php 
 $ordersCount = App\Order::where('order_status' ,'Pending')->count();
 //$deliverycount =App\DeliveryModel::where('confirmation' ,'picked')->count();

?>

<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
<i class="la la-close"></i>
</button>
<div id="m_aside_left" class="m-grid__item  m-aside-left  m-aside-left--skin-dark ">
    <!-- BEGIN: Aside Menu -->
    <div
        id="m_ver_menu"
        class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
        m-menu-vertical="1"
        m-menu-scrollable="0" m-menu-dropdown-timeout="500">
        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
            {{-- <li class="m-menu__item  m-menu__item--active" aria-haspopup="true" > --}}
                <li class="m-menu__item {{ Request::is('home') ? 'm-menu__item--active' : ''}}"aria-haspopup="true">
                <a  href="{{ URL::to('home')}}"  class="m-menu__link ">
                    <i class="m-menu__link-icon flaticon-line-graph"></i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">
                                Dashboard
                            </span>
                            <span class="m-menu__link-badge">
                                <span class="">
                                    
                                </span>
                            </span>
                        </span>
                    </span>
                </a>
            </li>
            
            <li class="m-menu__item {{ Request::is('order') ? 'm-menu__item--active' : ''}}"aria-haspopup="true">
                <a  href="{{ URL::to('order')}}" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-business"></i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">
                                Order
                            </span>
                            <span class="m-menu__link-badge">
                                <span class="m-badge m-badge--danger">
                                {{$ordersCount}}
                                </span>
                            </span>
                        </span>
                    </span>

                </a>
            </li>
            <li class="m-menu__item  m-menu__item--submenu {{ Request::is('category*') ? 'm-menu__item--open m-menu__item--expande' : ''}}" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-map"></i>
                    <span class="m-menu__link-text">
                         Category
                    </span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu ">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  {{ Request::is('category-list') ? 'm-menu__item--active' : ''}}" aria-haspopup="true" >
                            <a  href="{{ URL::to('category-list')}}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    All Category
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item {{ Request::is('category-add') ? 'm-menu__item--active' : ''}}" aria-haspopup="true" >
                            <a  href="{{ URL::to('category-add')}}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Add Category
                                </span>
                            </a>
                        </li>
                        {{-- <li class="m-menu__item {{ Request::is('category-add-sub') ? 'm-menu__item--active' : ''}}" aria-haspopup="true" >
                            <a  href="{{ URL::to('category-add-sub')}}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Add Sub Category
                                </span>
                            </a>
                        </li> --}}
                        
                    </ul>
                </div>
            </li>

             <li class="m-menu__item  m-menu__item--submenu {{ Request::is('product*') ? 'm-menu__item--open m-menu__item--expande' : ''}}" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-clipboard"></i>
                    <span class="m-menu__link-text">
                         Product
                    </span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu ">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  {{ Request::is('product-list') ? 'm-menu__item--active' : ''}}" aria-haspopup="true" >
                            <a  href="{{ URL::to('product-list')}}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    All Product
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item {{ Request::is('product-add') ? 'm-menu__item--active' : ''}}" aria-haspopup="true" >
                            <a  href="{{ URL::to('product-add')}}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Add Product
                                </span>
                            </a>
                        </li>              
                    </ul>
                </div>
            </li>

            {{-- <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-share"></i>
                    <span class="m-menu__link-text">
                        Icons
                    </span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu ">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item " aria-haspopup="true" >
                            <a  href="components/icons/flaticon.html" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Flaticon
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true" >
                            <a  href="components/icons/fontawesome.html" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Fontawesome
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true" >
                            <a  href="components/icons/lineawesome.html" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Lineawesome
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true" >
                            <a  href="components/icons/socicons.html" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                <span></span>
                                </i>
                                <span class="m-menu__link-text">
                                    Socicons
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}
   
        </ul>
    </div>
    <!-- END: Aside Menu -->
</div>