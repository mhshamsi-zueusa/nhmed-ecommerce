<!-- <header class="header shop">

    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                  
                    <div class="top-left">
                        <ul class="list-main">
                            @php
                                $settings=DB::table('settings')->get();
                                
                            @endphp
                            <li><i class="ti-headphone-alt"></i>@foreach($settings as $data) {{$data->phone}} @endforeach</li>
                            <li><i class="ti-email"></i> @foreach($settings as $data) {{$data->email}} @endforeach</li>
                        </ul>
                    </div>
                   
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                   
                    <div class="right-content">
                        <ul class="list-main">
                        <li><i class="ti-location-pin"></i> <a href="{{route('order.track')}}">Track Order</a></li>
                            {{-- <li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li> --}}
                            @auth 
                                @if(Auth::user()->role=='admin')
                                    <li><i class="ti-user"></i> <a href="{{route('admin')}}"  target="_blank">Dashboard</a></li>
                                @else 
                                    <li><i class="ti-user"></i> <a href="{{route('user')}}"  target="_blank">Dashboard</a></li>
                                @endif
                                <li><i class="ti-power-off"></i> <a href="{{route('user.logout')}}">Logout</a></li>

                            @else
                                <li><i class="ti-power-off"></i><a href="{{route('login.form')}}">Login /</a> <a href="{{route('register.form')}}">Register</a></li>
                            @endauth
                        </ul>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>

    <div class="middle-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-12">
                 
                    <div class="logo">
                        @php
                            $settings=DB::table('settings')->get();
                        @endphp                    
                        <a href="{{route('home')}}"><img src="@foreach($settings as $data) {{$data->logo}} @endforeach" alt="logo"></a>
                    </div>
                    
                    <div class="search-top">
                        <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                  
                        <div class="search-top">
                            <form class="search-form">
                                <input type="text" placeholder="Search here..." name="search">
                                <button value="search" type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                       
                    </div>
                
                    <div class="mobile-nav"></div>
                </div>
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="search-bar-top">
                        <div class="search-bar">
                            <select>
                                <option >All Category</option>
                                @foreach(Helper::getAllCategory() as $cat)
                                    <option>{{$cat->title}}</option>
                                @endforeach
                            </select>
                            <form method="POST" action="{{route('product.search')}}">
                                @csrf
                                <input name="search" placeholder="Search Products Here....." type="search">
                                <button class="btnn" type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-12">
                    <div class="right-bar">
                   
                        <div class="sinlge-bar shopping">
                            @php 
                                $total_prod=0;
                                $total_amount=0;
                            @endphp
                           @if(session('wishlist'))
                                @foreach(session('wishlist') as $wishlist_items)
                                    @php
                                        $total_prod+=$wishlist_items['quantity'];
                                        $total_amount+=$wishlist_items['amount'];
                                    @endphp
                                @endforeach
                           @endif
                            <a href="{{route('wishlist')}}" class="single-icon"><i class="fa fa-heart-o"></i> <span class="total-count">{{Helper::wishlistCount()}}</span></a>
                        
                            @auth
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span>{{count(Helper::getAllProductFromWishlist())}} Items</span>
                                        <a href="{{route('wishlist')}}">View Wishlist</a>
                                    </div>
                                    <ul class="shopping-list">
                                        {{-- {{Helper::getAllProductFromCart()}} --}}
                                            @foreach(Helper::getAllProductFromWishlist() as $data)
                                                    @php
                                                        $photo=explode(',',$data->product['photo']);
                                                    @endphp
                                                    <li>
                                                        <a href="{{route('wishlist-delete',$data->id)}}" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                                        <a class="cart-img" href="#"><img src="{{$photo[0]}}" alt="{{$photo[0]}}"></a>
                                                        <h4><a href="{{route('product-detail',$data->product['slug'])}}" target="_blank">{{$data->product['title']}}</a></h4>
                                                        <p class="quantity">{{$data->quantity}} x - <span class="amount">${{number_format($data->price,2)}}</span></p>
                                                    </li>
                                            @endforeach
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>
                                            <span class="total-amount">${{number_format(Helper::totalWishlistPrice(),2)}}</span>
                                        </div>
                                        <a href="{{route('cart')}}" class="btn animate">Cart</a>
                                    </div>
                                </div>
                            @endauth
                            
                        </div>
                        {{-- <div class="sinlge-bar">
                            <a href="{{route('wishlist')}}" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div> --}}
                        <div class="sinlge-bar shopping">
                            <a href="{{route('cart')}}" class="single-icon"><i class="ti-bag"></i> <span class="total-count">{{Helper::cartCount()}}</span></a>
                            
                            @auth
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span>{{count(Helper::getAllProductFromCart())}} Items</span>
                                        <a href="{{route('cart')}}">View Cart</a>
                                    </div>
                                    <ul class="shopping-list">
                                        {{-- {{Helper::getAllProductFromCart()}} --}}
                                            @foreach(Helper::getAllProductFromCart() as $data)
                                                    @php
                                                        $photo=explode(',',$data->product['photo']);
                                                    @endphp
                                                    <li>
                                                        <a href="{{route('cart-delete',$data->id)}}" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                                        <a class="cart-img" href="#"><img src="{{$photo[0]}}" alt="{{$photo[0]}}"></a>
                                                        <h4><a href="{{route('product-detail',$data->product['slug'])}}" target="_blank">{{$data->product['title']}}</a></h4>
                                                        <p class="quantity">{{$data->quantity}} x - <span class="amount">${{number_format($data->price,2)}}</span></p>
                                                    </li>
                                            @endforeach
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>
                                            <span class="total-amount">${{number_format(Helper::totalCartPrice(),2)}}</span>
                                        </div>
                                        <a href="{{route('checkout')}}" class="btn animate">Checkout</a>
                                    </div>
                                </div>
                            @endauth
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <div class="header-inner">
        <div class="container">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="menu-area">
                            
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-collapse">	
                                    <div class="nav-inner">	
                                        <ul class="nav main-menu menu navbar-nav">
                                            <li class="{{Request::path()=='home' ? 'active' : ''}}"><a href="{{route('home')}}">Home</a></li>
                                            <li class="{{Request::path()=='about-us' ? 'active' : ''}}"><a href="{{route('about-us')}}">About Us</a></li>
                                            <li class="@if(Request::path()=='product-grids'||Request::path()=='product-lists')  active  @endif"><a href="{{route('product-grids')}}">Products</a></li>												
                                                {{Helper::getHeaderCategory()}}
                                            <li class="{{Request::path()=='blog' ? 'active' : ''}}"><a href="{{route('blog')}}">Blog</a></li>									
                                               
                                            <li class="{{Request::path()=='contact' ? 'active' : ''}}"><a href="{{route('contact')}}">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header> -->


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<header class="wpisset-page-header" itemscope="" itemtype="http://schema.org/WPHeader">



	<div class="wpisset-pre-header">

		<div class="wpisset-inner-pre-header wpisset-container wpisset-container-center  wpisset-container-fluid">

			<div class="wpisset-row">

				<div class="wpisset-col-md-6 wpisset-col-xs-12  wpisset-start-md wpisset-center-xs">

					<div>
						<div class="wpisset-preheader-item wpisset-cursor-anim-element" data-cursor-text="image_icon_value" data-cursor-color="#9dce50" data-cursor-text-color="#ffffff" data-cursor-size="36">
							5001 New Hampshire Ave NW, Washington, DC 20011<div class="wpisset-preheader-icon anim_image_icon"><img class="wpisset-preheader-icon-img" alt="" src=""></div>
						</div><br><a href="tel:2027263100">
							<div class="wpisset-preheader-item wpisset-cursor-anim-element" data-cursor-text="image_icon_value" data-cursor-color="#9dce50" data-cursor-text-color="#ffffff" data-cursor-size="36">Phone - 202-726-3100<div class="wpisset-preheader-icon anim_image_icon"><img class="wpisset-preheader-icon-img" alt="" src=""></div>
							</div>
							</a><a href="tel:8882108110">
								<div class="wpisset-preheader-item wpisset-cursor-anim-element" data-cursor-text="image_icon_value" data-cursor-color="#9dce50" data-cursor-text-color="#ffffff" data-cursor-size="36"> | Toll Free - 888-210-8110<div class="wpisset-preheader-icon anim_image_icon"><img class="wpisset-preheader-icon-img" alt="" src=""></div>
								</div>
							</a>
					</div>

				</div>

				<div class="wpisset-col-md-6 wpisset-col-xs-12 wpisset-end-md wpisset-center-xs ">
					<ul id="menu-topright-menu" class="wpisset-menu-preheader wpisset-menu-preheader-right">
						<li id="menu-item-8643" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2984 current_page_item menu-item-8643"><a href="/" aria-current="page"><span>Home</span></a></li>
						<li id="menu-item-8642" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8642"><a href="{{route('about-us')}}"><span>About Us</span></a></li>
						<li id="menu-item-45164" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-45164"><a href="{{route('services')}}"><span>Services</span></a></li>
						<li id="menu-item-45140" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-45140"><a href="{{route('gallery')}}"><span>Gallery</span></a></li>
						<li id="menu-item-3116" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3116"><a href="{{route('reviews')}}"><span>Reviews</span></a></li>
						<li id="menu-item-4106" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4106"><a href="{{route('contact-us')}}"><span>Contact Us</span></a></li>
					</ul>
				</div>


			</div>

		</div>

	</div>

    <div class="navigation new bg-white pt-4 pb-4">
        <div class="container p-0">
            <div class="new-logo col-sm-3 p-0">
                <img src="https://www.nhmedsupply.com/wp-content/uploads/2022/03/nhms-web-logo.png"/>
            </div>
            <div class="search-container col-sm-3 p-0 mt-3">
                <form action="/action_page.php">
                <button type="submit"><svg class="svg-icon" aria-hidden="true" role="img" focusable="false" width="30" height="30" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg"><g transform="scale(0.75)"><path fill="%23000" d="M48,46.59l-18.35,-18.36l1.42674e-08,-1.60484e-08c6.23812,-7.01685 5.60685,-17.7621 -1.41,-24.0002c-7.01685,-6.23812 -17.7621,-5.60685 -24.0002,1.41c-6.23812,7.01685 -5.60685,17.7621 1.41,24.0002c6.44136,5.7265 16.1489,5.7265 22.5902,-2.85348e-08l18.35,18.36Zm-46.06,-29.59l-4.79828e-10,0.000117736c1.25089e-06,-8.28427 6.71573,-15 15,-15c8.28427,1.25089e-06 15,6.71573 15,15c-1.24735e-06,8.2608 -6.67915,14.9668 -14.9399,14.9999l8.56671e-07,-1.35216e-11c-8.29408,0.000131139 -15.0271,-6.70599 -15.0601,-15Z"></path></g></svg></button>
                <input type="text" placeholder="Search products..." name="search">
               
                </form>
            </div>
            <div class="sub-menu-bar col-sm-6 p-0">
            
            
            <div class="collapse navbar-collapse p-0" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto d-block right-items-menu">
      

      <li class="nav-item active">
            <div class="dropdown top-pad pr-2">
                <a class="dropbtn nav-link dropdown-toggle">Showroom 
                </a>
                <div class="dropdown-content">
                    <a href="#">Bedroom Accessories</a>
                    <a href="#">Commodes</a>
                    <a href="#">Hospital Beds</a>
                    <a href="#">Patient Lifts</a>
                    <a href="#">Rollators</a>
                    <a href="#">Seat Lift Chair</a>
                    <a href="#">Shower Chairs & Transfer Benches</a>
                    <a href="#">Transport Chairs</a>
                    <a href="#">Walkers</a>
                    <a href="#">Wheelchairs</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Place Prescription Order </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">WIC </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pay Bill </a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="#">Resources </a>
      </li>
                        </ul>   
            </div>
        </div>
    </div>



	<!-- <div class="wpisset-navigation" data-sub-menu-animation-duration="250" data-sticky="true" data-sticky-delay="300px" data-sticky-animation="fade" data-sticky-animation-duration="400">

	

		<div class="wpisset-main-navigation wpisset-container wpisset-container-center wpisset-container-fluid wpisset-visible-large">

			<div class="wpisset-row wpisset-middle-xs">

				<div class="wpisset-logo-container wpisset-col-xs-4 wpisset-flex-basic-off-grow-0">

					<div class="wpisset-logo" itemscope="" itemtype="https://schema.org/Organization"><a class="wpisset-remove-font-size" href="https://www.nhmedsupply.com"><img src="https://www.nhmedsupply.com/wp-content/uploads/2022/03/nhms-web-logo.png" alt="New Hampshire Medical Supply" title="New Hampshire Medical Supply"></a></div>
				</div>


				<div class=" wpisset-icons-container wpisset-col-xs-4 wpisset-flex-basic-off-grow-1 wpisset-middle-xs">

					<div class="wpisset-header-search-variant4 wpisset-header-search wpisset-middle-xs"><a href="#" class="wpisset-middle-xs"><svg class="svg-icon" aria-hidden="true" role="img" focusable="false" width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
								<g transform="scale(0.75)">
									<path fill="%23000" d="M48,46.59l-18.35,-18.36l1.42674e-08,-1.60484e-08c6.23812,-7.01685 5.60685,-17.7621 -1.41,-24.0002c-7.01685,-6.23812 -17.7621,-5.60685 -24.0002,1.41c-6.23812,7.01685 -5.60685,17.7621 1.41,24.0002c6.44136,5.7265 16.1489,5.7265 22.5902,-2.85348e-08l18.35,18.36Zm-46.06,-29.59l-4.79828e-10,0.000117736c1.25089e-06,-8.28427 6.71573,-15 15,-15c8.28427,1.25089e-06 15,6.71573 15,15c-1.24735e-06,8.2608 -6.67915,14.9668 -14.9399,14.9999l8.56671e-07,-1.35216e-11c-8.29408,0.000131139 -15.0271,-6.70599 -15.0601,-15Z"></path>
								</g>
							</svg>Search products...</a>
						<div class="wpisset-header-search-form">
							<div class="yith-ajaxsearchform-container">
								<form role="search" method="POST" id="yith-ajaxsearchform" action="http://localhost:8000/about-us">
									<div>
										<label class="screen-reader-text" for="yith-s">Search for:</label>
										<input type="search" value="" name="s" id="yith-s" class="yith-s" placeholder="Search for products" data-loader-icon="" data-min-chars="3" autocomplete="off">
										<span class="wpisset-input-btn-element"><input type="submit" id="yith-searchsubmit" value="Search"></span>
										<input type="hidden" name="post_type" value="product">
									</div>
								<input name="cleantalk_hidden_action" type="hidden" value="https://www.nhmedsupply.com/"><input name="cleantalk_hidden_method" type="hidden" value="get"></form>
							<div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 300px; z-index: 9999;"></div></div>
						</div>
					</div>
				</div>


				<div class="wpisset-menu-container wpisset-icons-container wpisset-col-xs-4 wpisset-flex-basic-off-grow-0 wpisset-middle-xs">

					<nav id="wpisset-menu-variant4" itemscope="" itemtype="https://schema.org/SiteNavigationElement">

						<div id="mega-menu-wrap-main_menu" class="mega-menu-wrap">
							<div class="mega-menu-toggle">
								<div class="mega-toggle-blocks-left"></div>
								<div class="mega-toggle-blocks-center"></div>
								<div class="mega-toggle-blocks-right">
									<div class="mega-toggle-block mega-menu-toggle-animated-block mega-toggle-block-0" id="mega-toggle-block-0"><button aria-label="Toggle Menu" class="mega-toggle-animated mega-toggle-animated-slider" type="button" aria-expanded="false">
											<span class="mega-toggle-animated-box">
												<span class="mega-toggle-animated-inner"></span>
											</span>
										</button></div>
								</div>
							</div>
							
							<ul id="mega-menu-main_menu" class="mega-menu max-mega-menu mega-menu-horizontal" data-event="hover_intent" data-effect="fade_up" data-effect-speed="200" data-effect-mobile="slide" data-effect-speed-mobile="200" data-mobile-force-width="false" data-second-click="go" data-document-click="collapse" data-vertical-behaviour="standard" data-breakpoint="768" data-unbind="true" data-mobile-state="collapse_all" data-hover-intent-timeout="300" data-hover-intent-interval="100">
								            <li class="mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-has-children mega-align-bottom-left mega-menu-flyout mega-has-description mega-menu-item-4662" id="mega-menu-item-4662">
                <a class="mega-menu-link" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" tabindex="0">
                    <span class="mega-description-group"><span class="mega-menu-title">Showroom</span><span class="mega-menu-description"></span></span>
                    <span class="mega-indicator" data-has-click-event="true"></span>
                </a>
                <ul class="mega-sub-menu">
                                                <li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-has-description mega-menu-item-44476" id="mega-menu-item-44476">
                                <a class="mega-menu-link" href="http://localhost:8000/product-cat/commodes"><span class="mega-description-group"><span class="mega-menu-title">Commodes</span><span class="mega-menu-description"> </span></span></a>
                            </li>
                                                <li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-has-description mega-menu-item-44476" id="mega-menu-item-44476">
                                <a class="mega-menu-link" href="http://localhost:8000/product-cat/rollators"><span class="mega-description-group"><span class="mega-menu-title">Rollators</span><span class="mega-menu-description"> </span></span></a>
                            </li>
                                                <li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-has-description mega-menu-item-44476" id="mega-menu-item-44476">
                                <a class="mega-menu-link" href="http://localhost:8000/product-cat/shower-chairs"><span class="mega-description-group"><span class="mega-menu-title">Shower Chairs</span><span class="mega-menu-description"> </span></span></a>
                            </li>
                                                <li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-has-description mega-menu-item-44476" id="mega-menu-item-44476">
                                <a class="mega-menu-link" href="http://localhost:8000/product-cat/transfer-benches"><span class="mega-description-group"><span class="mega-menu-title">Transfer Benches</span><span class="mega-menu-description"> </span></span></a>
                            </li>
                                                <li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-has-description mega-menu-item-44476" id="mega-menu-item-44476">
                                <a class="mega-menu-link" href="http://localhost:8000/product-cat/transport-chairs"><span class="mega-description-group"><span class="mega-menu-title">Transport Chairs</span><span class="mega-menu-description"> </span></span></a>
                            </li>
                                                <li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-has-description mega-menu-item-44476" id="mega-menu-item-44476">
                                <a class="mega-menu-link" href="http://localhost:8000/product-cat/walkers"><span class="mega-description-group"><span class="mega-menu-title">Walkers</span><span class="mega-menu-description"> </span></span></a>
                            </li>
                                                <li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-has-description mega-menu-item-44476" id="mega-menu-item-44476">
                                <a class="mega-menu-link" href="http://localhost:8000/product-cat/wheelchairs"><span class="mega-description-group"><span class="mega-menu-title">Wheelchairs</span><span class="mega-menu-description"> </span></span></a>
                            </li>
                                    </ul>
            </li>
    
								<li class="mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-has-description mega-menu-item-45154" id="mega-menu-item-45154"><a class="mega-menu-link" href="http://localhost:8000/place-prescription-order" tabindex="0"><span class="mega-description-group"><span class="mega-menu-title">Place Prescription Order</span><span class="mega-menu-description"> </span></span></a></li>
								<li class="mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-has-description mega-menu-item-45156" id="mega-menu-item-45156"><a class="mega-menu-link" href="http://localhost:8000/wic" tabindex="0"><span class="mega-description-group"><span class="mega-menu-title">WIC</span><span class="mega-menu-description"> </span></span></a></li>
								<li class="mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-45158" id="mega-menu-item-45158"><a class="mega-menu-link" target="_blank" href="https://nhmedsupply.hmebillpay.com/" tabindex="0"><span>Pay Bill</span></a></li>
								<li class="mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-has-children mega-align-bottom-left mega-menu-flyout mega-hide-arrow mega-has-description mega-menu-item-3415" id="mega-menu-item-3415"><a class="mega-menu-link" href="http://localhost:8000/resource-center" aria-haspopup="true" aria-expanded="false" tabindex="0"><span class="mega-description-group"><span class="mega-menu-title">Resources</span><span class="mega-menu-description"> </span></span><span class="mega-indicator" data-has-click-event="true"></span></a>
									<ul class="mega-sub-menu">
										<li class="mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-has-description mega-menu-item-4136" id="mega-menu-item-4136"><a class="mega-menu-link" href="http://localhost:8000/blogs"><span classs="mega-description-group"><span class="mega-menu-title">Blogs</span><span class="mega-menu-description"> </span></span></a></li>
										<li class="mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-has-description mega-menu-item-3457" id="mega-menu-item-3457"><a class="mega-menu-link" href="http://localhost:8000/medical-glossary"><span class="mega-description-group"><span class="mega-menu-title">Medical Glossary</span><span class="mega-menu-description"> </span></span></a></li>
										<li class="mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-has-description mega-menu-item-3459" id="mega-menu-item-3459"><a class="mega-menu-link" href="http://localhost:8000/medicare-guide"><span class="mega-description-group"><span class="mega-menu-title">Medicare Guide</span><span class="mega-menu-description"> </span></span></a></li>
									</ul>
								</li>
							</ul>
						</div>
					</nav>
					<div class="wpisset-woo-cart-wrap">
						<div class="wpisset-woo-cart"><a href="http://localhost:8000" title="Shopping Cart">
								<div class="wpisset-middle-xs">
									<div class="wpisset-woo-cart-total"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>0.00</bdi></span></div>
									<div class="wpisset-woo-cart-icon-wrap"><svg class="svg-icon" aria-hidden="true" role="img" focusable="false" width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
											
											<g transform="scale(0.75)">
												<path fill="%23000" d="M45.54,20.78l2.46,-12.78h-39.29l-1.37,-8h-7.34v2h5.66l4.72,27.52l-7.29318e-08,-4.2563e-07c0.740373,4.32082 4.48621,7.47965 8.87,7.48h24.75v-2h-24.75l4.09479e-08,1.56106e-11c-2.72676,-0.00103965 -5.20476,-1.5854 -6.35,-4.06l22.59,-1.46l4.84633e-07,-3.14243e-08c4.92153,-0.31912 9.02913,-3.87495 10.05,-8.7Zm-33.23,8.22l-3.25,-19h36.71l-2.18,10.36l-5.24855e-08,2.49677e-07c-0.831371,3.95489 -4.197,6.87068 -8.23,7.13Z"></path>
												<path fill="%23000" d="M15.5,39l-1.96701e-07,7.10543e-15c-2.48528,1.08635e-07 -4.5,2.01472 -4.5,4.5c1.08635e-07,2.48528 2.01472,4.5 4.5,4.5c2.48528,-1.08635e-07 4.5,-2.01472 4.5,-4.5l3.55271e-15,1.96701e-07c0,-2.48528 -2.01472,-4.5 -4.5,-4.5Zm0,7h-1.09278e-07c-1.38071,-6.03528e-08 -2.5,-1.11929 -2.5,-2.5c6.03528e-08,-1.38071 1.11929,-2.5 2.5,-2.5c1.38071,6.03528e-08 2.5,1.11929 2.5,2.5l3.55271e-15,-1.09278e-07c0,1.38071 -1.11929,2.5 -2.5,2.5Z"></path>
												<path fill="%23000" d="M39.5,39l-1.96701e-07,7.10543e-15c-2.48528,1.08635e-07 -4.5,2.01472 -4.5,4.5c1.08635e-07,2.48528 2.01472,4.5 4.5,4.5c2.48528,-1.08635e-07 4.5,-2.01472 4.5,-4.5l7.10543e-15,1.96701e-07c0,-2.48528 -2.01472,-4.5 -4.5,-4.5Zm0,7h-1.09278e-07c-1.38071,-6.03528e-08 -2.5,-1.11929 -2.5,-2.5c6.03528e-08,-1.38071 1.11929,-2.5 2.5,-2.5c1.38071,6.03528e-08 2.5,1.11929 2.5,2.5v-1.09278e-07c0,1.38071 -1.11929,2.5 -2.5,2.5Z"></path>
											</g>
										</svg><svg class="wpisset-woo-cart-svg-border" xmlns="http://www.w3.org/2000/svg">
											<g>
												<ellipse ry="26.5" rx="26.5" cy="27" cx="27" stroke-width="1" stroke="#ebebeb" fill="transparent"></ellipse>
												<ellipse class="circle" ry="26.5" rx="26.5" cy="27" cx="27" stroke-width="1" stroke="#48944b" fill="transparent"></ellipse>
											</g>
										</svg><span class="wpisset-woo-cart-count"><span>0</span></span></div>
								</div>
							</a></div>
					</div>
				</div>

			</div>

		</div>
		<div class="wpisset-woo-sub-cart-wrap">
			<ul class="wpisset-woo-sub-cart">
				<li class="wpisset-woo-sub-cart-empty">No products in the cart.</li>
			</ul>
		</div>
		<ul class="wpisset-woo-sub-myaccount">
			<li>
				<div class="wpisset-woo-sub-myaccount-header">
					<div class="wpisset-woo-sub-myaccount-header-title">Login</div>
					<div class="wpisset-woo-sub-myaccount-register"><a href="" title="Create an account">Create an account</a></div>
				</div>
				<form class="woocommerce-form woocommerce-form-login login" method="POST" action="http://localhost:8000/about-us">


					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
						<label for="username">Username or email address&nbsp;<span class="required">*</span></label>
						<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="">
					</p>
					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
						<label for="password">Password&nbsp;<span class="required">*</span></label>
						<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password">
					</p>


					<p class="form-row">
						<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
							<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Remember me</span>
						</label>
						<input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="e13f4b682c"><input type="hidden" name="_wp_http_referer" value="/"> <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Log in">Log in</button>
					</p>
					<p class="woocommerce-LostPassword lost_password">
						<a href="https://www.nhmedsupply.com/lost-password/">Lost your password?</a>
					</p>


				<input type="hidden" name="zspgQkGHXIvxif" value="J_8r5blNdpng"><input type="hidden" name="WNd_Bwmx" value="vKhEUeR"><input type="hidden" id="apbct_visible_fields_1" name="apbct_visible_fields" value="{&quot;0&quot;:{&quot;visible_fields&quot;:&quot;username password&quot;,&quot;visible_fields_count&quot;:2,&quot;invisible_fields&quot;:&quot;woocommerce-login-nonce _wp_http_referer zspgQkGHXIvxif WNd_Bwmx&quot;,&quot;invisible_fields_count&quot;:4}}"><input name="cleantalk_hidden_action" type="hidden" value="http://localhost:8000/about-us"><input name="cleantalk_hidden_method" type="hidden" value="post"></form>
			</li>
		</ul>




		<div class="wpisset-mob-nav wpisset-container wpisset-container-center wpisset-container-fluid wpisset-hidden-large" style="">

			<div class="wpisset-row wpisset-middle-xs">

				<div class="wpisset-mob-logo-container wpisset-col-xs-4 wpisset-flex-basic-off-grow-0">

					<div class="wpisset-mobile-logo" itemscope="" itemtype="https://schema.org/Organization"><a class="wpisset-remove-font-size" href="https://www.nhmedsupply.com"><img src="https://www.nhmedsupply.com/wp-content/uploads/2022/03/nhms-web-logo.png" alt="New Hampshire Medical Supply" title="New Hampshire Medical Supply"></a></div>
				</div>

				<div class="wpisset-mob-icons-container wpisset-col-xs-4 wpisset-flex-basic-off-grow-1">

					<div class="wpisset-end-xs">

						<div class="wpisset-woo-cart-mobile">
							<div class="wpisset-woo-cart"><a href="https://www.nhmedsupply.com" title="Shopping Cart">
									<div class="wpisset-middle-xs">
										<div class="wpisset-woo-cart-total"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>0.00</bdi></span></div>
										<div class="wpisset-woo-cart-icon-wrap"><svg class="svg-icon" aria-hidden="true" role="img" focusable="false" width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
											
												<g transform="scale(0.75)">
													<path fill="%23000" d="M45.54,20.78l2.46,-12.78h-39.29l-1.37,-8h-7.34v2h5.66l4.72,27.52l-7.29318e-08,-4.2563e-07c0.740373,4.32082 4.48621,7.47965 8.87,7.48h24.75v-2h-24.75l4.09479e-08,1.56106e-11c-2.72676,-0.00103965 -5.20476,-1.5854 -6.35,-4.06l22.59,-1.46l4.84633e-07,-3.14243e-08c4.92153,-0.31912 9.02913,-3.87495 10.05,-8.7Zm-33.23,8.22l-3.25,-19h36.71l-2.18,10.36l-5.24855e-08,2.49677e-07c-0.831371,3.95489 -4.197,6.87068 -8.23,7.13Z"></path>
													<path fill="%23000" d="M15.5,39l-1.96701e-07,7.10543e-15c-2.48528,1.08635e-07 -4.5,2.01472 -4.5,4.5c1.08635e-07,2.48528 2.01472,4.5 4.5,4.5c2.48528,-1.08635e-07 4.5,-2.01472 4.5,-4.5l3.55271e-15,1.96701e-07c0,-2.48528 -2.01472,-4.5 -4.5,-4.5Zm0,7h-1.09278e-07c-1.38071,-6.03528e-08 -2.5,-1.11929 -2.5,-2.5c6.03528e-08,-1.38071 1.11929,-2.5 2.5,-2.5c1.38071,6.03528e-08 2.5,1.11929 2.5,2.5l3.55271e-15,-1.09278e-07c0,1.38071 -1.11929,2.5 -2.5,2.5Z"></path>
													<path fill="%23000" d="M39.5,39l-1.96701e-07,7.10543e-15c-2.48528,1.08635e-07 -4.5,2.01472 -4.5,4.5c1.08635e-07,2.48528 2.01472,4.5 4.5,4.5c2.48528,-1.08635e-07 4.5,-2.01472 4.5,-4.5l7.10543e-15,1.96701e-07c0,-2.48528 -2.01472,-4.5 -4.5,-4.5Zm0,7h-1.09278e-07c-1.38071,-6.03528e-08 -2.5,-1.11929 -2.5,-2.5c6.03528e-08,-1.38071 1.11929,-2.5 2.5,-2.5c1.38071,6.03528e-08 2.5,1.11929 2.5,2.5v-1.09278e-07c0,1.38071 -1.11929,2.5 -2.5,2.5Z"></path>
												</g>
											</svg><svg class="wpisset-woo-cart-svg-border" xmlns="http://www.w3.org/2000/svg">
												<g>
													<ellipse ry="26.5" rx="26.5" cy="27" cx="27" stroke-width="1" stroke="#ebebeb" fill="transparent"></ellipse>
													<ellipse class="circle" ry="26.5" rx="26.5" cy="27" cx="27" stroke-width="1" stroke="#48944b" fill="transparent"></ellipse>
												</g>
											</svg><span class="wpisset-woo-cart-count"><span>0</span></span></div>
									</div>
								</a></div>
						</div>

					</div>

				</div>

				<div class="wpisset-mob-menu-container wpisset-col-xs-4 wpisset-flex-basic-off-grow-0">

					<div class="wpisset-mobile-menu-toggle">
						<div class="con">
							<div class="bar top"></div>
							<div class="bar middle"></div>
							<div class="bar bottom"></div>
						</div>
					</div>

				</div>
			</div>

			<div class="wpisset-woo-cart-mobile-wrap wpisset-mob-icons-container">
				<div class="wpisset-woo-cart-mobile">
					<div class="wpisset-woo-cart"><a href="https://www.nhmedsupply.com" title="Shopping Cart">
							<div class="wpisset-middle-xs">
								<div class="wpisset-woo-cart-total"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>0.00</bdi></span></div>
								<div class="wpisset-woo-cart-icon-wrap"><svg class="svg-icon" aria-hidden="true" role="img" focusable="false" width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
									
										<g transform="scale(0.75)">
											<path fill="%23000" d="M45.54,20.78l2.46,-12.78h-39.29l-1.37,-8h-7.34v2h5.66l4.72,27.52l-7.29318e-08,-4.2563e-07c0.740373,4.32082 4.48621,7.47965 8.87,7.48h24.75v-2h-24.75l4.09479e-08,1.56106e-11c-2.72676,-0.00103965 -5.20476,-1.5854 -6.35,-4.06l22.59,-1.46l4.84633e-07,-3.14243e-08c4.92153,-0.31912 9.02913,-3.87495 10.05,-8.7Zm-33.23,8.22l-3.25,-19h36.71l-2.18,10.36l-5.24855e-08,2.49677e-07c-0.831371,3.95489 -4.197,6.87068 -8.23,7.13Z"></path>
											<path fill="%23000" d="M15.5,39l-1.96701e-07,7.10543e-15c-2.48528,1.08635e-07 -4.5,2.01472 -4.5,4.5c1.08635e-07,2.48528 2.01472,4.5 4.5,4.5c2.48528,-1.08635e-07 4.5,-2.01472 4.5,-4.5l3.55271e-15,1.96701e-07c0,-2.48528 -2.01472,-4.5 -4.5,-4.5Zm0,7h-1.09278e-07c-1.38071,-6.03528e-08 -2.5,-1.11929 -2.5,-2.5c6.03528e-08,-1.38071 1.11929,-2.5 2.5,-2.5c1.38071,6.03528e-08 2.5,1.11929 2.5,2.5l3.55271e-15,-1.09278e-07c0,1.38071 -1.11929,2.5 -2.5,2.5Z"></path>
											<path fill="%23000" d="M39.5,39l-1.96701e-07,7.10543e-15c-2.48528,1.08635e-07 -4.5,2.01472 -4.5,4.5c1.08635e-07,2.48528 2.01472,4.5 4.5,4.5c2.48528,-1.08635e-07 4.5,-2.01472 4.5,-4.5l7.10543e-15,1.96701e-07c0,-2.48528 -2.01472,-4.5 -4.5,-4.5Zm0,7h-1.09278e-07c-1.38071,-6.03528e-08 -2.5,-1.11929 -2.5,-2.5c6.03528e-08,-1.38071 1.11929,-2.5 2.5,-2.5c1.38071,6.03528e-08 2.5,1.11929 2.5,2.5v-1.09278e-07c0,1.38071 -1.11929,2.5 -2.5,2.5Z"></path>
										</g>
									</svg><svg class="wpisset-woo-cart-svg-border" xmlns="http://www.w3.org/2000/svg">
										<g>
											<ellipse ry="26.5" rx="26.5" cy="27" cx="27" stroke-width="1" stroke="#ebebeb" fill="transparent"></ellipse>
											<ellipse class="circle" ry="26.5" rx="26.5" cy="27" cx="27" stroke-width="1" stroke="#48944b" fill="transparent"></ellipse>
										</g>
									</svg><span class="wpisset-woo-cart-count"><span>0</span></span></div>
							</div>
						</a></div>
				</div>
			</div>
		</div>

		<div class="wpisset-mobile-menu-container">

			<nav itemscope="" itemtype="https://schema.org/SiteNavigationElement">

				<ul id="menu-home-menu" class="wpisset-mobile-menu">
					<li id="menu-item-4662" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4662"><a href="http://localhost:8000/showroom"><span>Showroom</span></a>
						<ul class="sub-menu">
							<li id="menu-item-44478" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-44478"><a href="https://www.nhmedsupply.com/product-category/bedroom-accessories/"><span>Bedroom Accessories</span></a></li>
							<li id="menu-item-44480" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-44480"><a href="https://www.nhmedsupply.com/product-category/commodes/"><span>Commodes</span></a></li>
							<li id="menu-item-44481" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-44481"><a href="https://www.nhmedsupply.com/product-category/hospital-beds/"><span>Hospital Beds</span></a></li>
							<li id="menu-item-44482" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-44482"><a href="https://www.nhmedsupply.com/product-category/patient-lifts/"><span>Patient Lifts</span></a></li>
							<li id="menu-item-44473" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-44473"><a href="https://www.nhmedsupply.com/product-category/rollators/"><span>Rollators</span></a></li>
							<li id="menu-item-44474" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-44474"><a href="https://www.nhmedsupply.com/product-category/seat-lift-chair/"><span>Seat Lift Chair</span></a></li>
							<li id="menu-item-44477" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-44477"><a href="https://www.nhmedsupply.com/product-category/shower-chairs-transfer-benches/"><span>Shower Chairs &amp; Transfer Benches</span></a></li>
							<li id="menu-item-44475" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-44475"><a href="https://www.nhmedsupply.com/product-category/transport-chairs/"><span>Transport Chairs</span></a></li>
							<li id="menu-item-44476" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-44476"><a href="https://www.nhmedsupply.com/product-category/walkers/"><span>Walkers</span></a></li>
							<li id="menu-item-44479" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-44479"><a href="https://www.nhmedsupply.com/product-category/wheelchairs/"><span>Wheelchairs</span></a></li>
						</ul>
					<span class="wpisset-submenu-toggle wpisset-arrow-down"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 20 12"><polygon fill="#555555" fill-rule="evenodd" points="1319.899 365.778 1327.678 358 1329.799 360.121 1319.899 370.021 1310 360.121 1312.121 358" transform="translate(-1310 -358)"></polygon></svg></span></li>
					<li id="menu-item-45154" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-45154"><a href="http://localhost:8000/place-prescription-order"><span>Place Prescription Order</span></a></li>
					<li id="menu-item-45156" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-45156"><a href="http://localhost:8000/wic"><span>WIC</span></a></li>
					<li id="menu-item-45158" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-45158"><a href="https://nhmedsupply.hmebillpay.com/" target="_blank"><span>Pay Bill</span></a></li>
					<li id="menu-item-3415" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3415"><a href="https://www.nhmedsupply.com/resource-center/"><span>Resources</span></a>
						<ul class="sub-menu">
							<li id="menu-item-4136" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4136"><a href="http://localhost:8000/blogs"><span>Blogs</span></a></li>
							<li id="menu-item-3457" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3457"><a href="http://localhost:8000/medical-glossary"><span>Medical Glossary</span></a></li>
							<li id="menu-item-3459" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3459"><a href="http://localhost:8000/medicare-guide"><span>Medicare Guide</span></a></li>
						</ul>
					<span class="wpisset-submenu-toggle wpisset-arrow-down"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 20 12"><polygon fill="#555555" fill-rule="evenodd" points="1319.899 365.778 1327.678 358 1329.799 360.121 1319.899 370.021 1310 360.121 1312.121 358" transform="translate(-1310 -358)"></polygon></svg></span></li>
				</ul>
			</nav>

		</div>
	</div>  -->


</header>

<style>

</style>