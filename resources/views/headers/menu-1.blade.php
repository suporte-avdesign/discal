<div class="navigation">
    <div class="container">
        <div class="navigation-content">
            <div class="header_menu">
                <!-- start Navbar (Header) -->
                <nav class="navbar navbar-default navbar-sticky-function navbar-arrow">
                    <div class="logo pull-left">
                        <a href="{{route('home')}}"><img alt="Image" src="{{asset('images/logo1.png')}}"></a>
                    </div>
                    <div id="navbar" class="navbar-nav-wrapper pull-right">

                        <ul class="nav navbar-nav" id="responsive-menu">


                            <li class="active has-child">
                                <a href="{{route('home')}}">Home </a>
                            </li>
                            <li class="has-child">
                                <a href="#">Páginas <i class="fa fa-angle-down"></i></a>
                                <ul>
                                    <li><a href="#">Clientes</a>
                                        <ul>
                                            <li><a href="{{route('account', 'teste')}}">Lojas</a></li>
                                            <li><a href="#">Left Sidebar</a></li>
                                            <li><a href="#">No Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blog Grid Category</a>
                                        <ul>
                                            <li><a href="#">3 Column</a></li>
                                            <li><a href="#">2 Column</a></li>
                                            <li><a href="#">Single Column</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Detail Page</a>
                                        <ul>
                                            <li><a href="#">Detail Page 1</a></li>
                                            <li><a href="#">Detail Page 2</a></li>
                                            <li><a href="#">Detail Page 3</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Default Page</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-child">
                                <a href="#">Shop <i class="fa fa-angle-down"></i></a>
                                <ul>
                                    <li><a href="shop.html">Shop List</a></li>
                                    <li><a href="store-detail.html">Shop Single</a></li>
                                    <li><a href="login.html">Account</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="?action=light_mode"><span class="label label-success" style="padding-top: 5px;">Light</span></a>
                            </li>
                            <li>
                                <a href="?action=dark_mode"><span class="label label-info" style="padding-top: 5px;">Dark</span></a>
                            </li>
                            <li>
                                <a href="{{route('about-us')}}">Quem Somos</a>
                            </li>
                            <li>
                                <a href="{{route('contact')}}">Contato</a>
                            </li>
                        </ul>

                        <a id="searchtoggl" class="searchtoggle"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </div><!--/.nav-collapse -->
                    <div id="slicknav-mobile"></div>
                </nav>
            </div>
            <div id="searchbar" class="searchbar">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="search" placeholder="Search Now">
                        <a href="#"><span class="search_btn"><i class="fa fa-search" aria-hidden="true"></i></span></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
