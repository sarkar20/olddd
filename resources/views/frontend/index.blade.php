@extends('frontend.layouts.app')

@section('content')
    <!-- Sliders & Today's deal -->
    <div class="home-banner-area" style="margin-bottom:-10px;">
        <div class="">
            <div class="d-flex flex-wrap position-relative">
            

                <!-- Sliders -->
                <div class="home-slider">
                    @if (get_setting('home_slider_images') != null)
                        <div class="aiz-carousel dots-inside-bottom mobile-img-auto-height" data-autoplay="true">
                            @php $slider_images = json_decode(get_setting('home_slider_images'), true);  @endphp
                            @foreach ($slider_images as $key => $value)
                                <div class="carousel-box">
                                    <a href="{{ json_decode(get_setting('home_slider_links'), true)[$key] }}">
                                        <!-- Image -->
                                        <img class="d-block mw-100 img-fit overflow-hidden h-sm-auto h-md-320px h-lg-460px overflow-hidden"
                                            src="{{ uploaded_asset($slider_images[$key]) }}"
                                            alt="{{ env('APP_NAME')}} promo"
                                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
<style>
    .home-slider{max-width:100%  !important;}
</style>


<div class="" style="background:#216196;padding-top:10px;padding-bottom:10px;height:50px;">
<div class="container">
<marquee behavior="alternate" class="marquee">

 <p style="font-size: 18px; font-weight: 600; color: #fff; ">Welcome to IRES INDIA | 50 % Off For First User Get Code :FIRST50 | Free Shipping </p>


        </marquee>
</div>
</div>


        <section class="mb-2 mb-md-3 mt-2 mt-md-3">
            <div class="container">
                <div class="row">
                    <!-- Top Section -->
                    <div class="col-md-12">
                        <!-- Title -->
                        <h2 class="title text-center mb-3">Introduction of IRES India</h2>
                        
                    </div>
                </div>
                <!-- Categories -->
               
            </div>
			
			<iframe width="100%" height="455" src="https://www.youtube.com/embed/wOQzZSxoJXI" title="iRES Interview EN - Prof. Simion &amp; Prof. Rasperini" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </section>   
    

<div class="deal bg-image pt-8 pb-8" >
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">   <img src="https://www.en.ires.dental/wp-content/uploads/2019/05/Impianti_Home_19.png" alt="Product image" class="product-image" style="width:100%;"></div>     <div class="col-md-4"></div>
					<div class="col-md-2" style="text-align:center;">
						   
                        
                              </div>
                        <div class="col-md-8" style="text-align:center;">
						   
                            <div class=" text-center">
							 
                                <h4>Our Company </h4>
                                <h2>
Welcome to IRES India
</h2>
								<p>"Welcome to IRES India – a dynamic and adaptable company attuned to the unique needs of dental professionals. With Swiss technology at its core and a new "Make in India" collaboration, IRES India unites high-quality craftsmanship with cutting-edge technology to deliver innovative and economically sustainable solutions, tailored to meet the needs of both doctors and patients seeking the best in implant dentistry .Our comprehensive range of products for oral surgery includes regenerative materials, cutting-edge implant systems, guided surgery tools, and custom prostheses. We go beyond mere products, offering high-level scientific courses and programs featuring renowned Key Opinion Leaders. Our success is attributed to our exceptionally skilled team, boasting over 30 years of experience in the dental industry. Explore our website to discover how IRES India is revolutionizing oral surgery and implant dentistry through this powerful fusion of expertise and innovation. Welcome to the future of oral healthcare"
								</p>
<a href="#" class="btn btn-outline-darker btn-more"><span>Learn more about iRES®</span><i class="icon-long-arrow-down"></i></a>
                           

						   </div><!-- End .deal-content -->
                              </div>
							  
							<div class="col-md-2" style="text-align:center;">
						   
                        
                              </div>  
							  <!-- End .col-lg-5 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div>
			
			<div class="pt-8 pb-8" style="background:#f7f7f7;">
                <div class="container">
                    <div class="row justify-content-center">
					<div class="col-md-2" style="text-align:center;"></div>
                        <div class="col-md-8" style="text-align:center;">
						   
                            <div class="text-center">
							   <h4>
OUR IMPLANT SYSTEMS </h4>
                                <h2>
Reliable,
efficient and safe

</h2>
								<p>

iRES® dynamic and flexible company sensitive to the needs of Professionals, offers a complete range of products for oral surgery: regenerative materials, implant systems, guided surgery, custom prosthesis, high-level scientific courses with popular Key Opinion Leaders. We want to combine practical experience and scientific knowledge to facilitate procedures and improve performance, to provide an innovative product concept…
</p>
<a href="#" class="btn btn-outline-darker btn-more"><span>Learn more about iRES®</span><i class="icon-long-arrow-down"></i></a>
                           

						   </div><!-- End .deal-content -->
                              </div><!-- End .col-lg-5 -->
              <div class="col-md-2" style="text-align:center;">

			  </div><!-- End .row -->
                </div><!-- End .container -->
            </div>            </div>

<!-- Featured Products -->
    <div id="section_featured" style="background:#f7f7f7;padding-bottom:40px;">

    </div>


 <!-- Cupon -->
    @if(get_setting('coupon_system') == 1)
    <div class="mb-2 mb-md-3 mt-2 mt-md-3" style="background-color: {{ get_setting('cupon_background_color', '#216196') }}">
        <div class="container">
            <div class="row py-5">
                <div class="col-xl-8 text-center text-xl-left">
                    <div class="d-lg-flex">
                        <div class="mb-3 mb-lg-0">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="109.602" height="93.34" viewBox="0 0 109.602 93.34">
                                <defs>
                                  <clipPath id="clip-pathcup">
                                    <path id="Union_10" data-name="Union 10" d="M12263,13778v-15h64v-41h12v56Z" transform="translate(-11966 -8442.865)" fill="none" stroke="#fff" stroke-width="2"/>
                                  </clipPath>
                                </defs>
                                <g id="Group_24326" data-name="Group 24326" transform="translate(-274.201 -5254.611)">
                                  <g id="Mask_Group_23" data-name="Mask Group 23" transform="translate(-3652.459 1785.452) rotate(-45)" clip-path="url(#clip-pathcup)">
                                    <g id="Group_24322" data-name="Group 24322" transform="translate(207 18.136)">
                                      <g id="Subtraction_167" data-name="Subtraction 167" transform="translate(-12177 -8458)" fill="none">
                                        <path d="M12335,13770h-56a8.009,8.009,0,0,1-8-8v-8a8,8,0,0,0,0-16v-8a8.009,8.009,0,0,1,8-8h56a8.009,8.009,0,0,1,8,8v8a8,8,0,0,0,0,16v8A8.009,8.009,0,0,1,12335,13770Z" stroke="none"/>
                                        <path d="M 12335.0009765625 13768.0009765625 C 12338.3095703125 13768.0009765625 12341.0009765625 13765.30859375 12341.0009765625 13762 L 12341.0009765625 13755.798828125 C 12336.4423828125 13754.8701171875 12333.0009765625 13750.8291015625 12333.0009765625 13746 C 12333.0009765625 13741.171875 12336.4423828125 13737.130859375 12341.0009765625 13736.201171875 L 12341.0009765625 13729.9990234375 C 12341.0009765625 13726.6904296875 12338.3095703125 13723.9990234375 12335.0009765625 13723.9990234375 L 12278.9990234375 13723.9990234375 C 12275.6904296875 13723.9990234375 12272.9990234375 13726.6904296875 12272.9990234375 13729.9990234375 L 12272.9990234375 13736.201171875 C 12277.5576171875 13737.1298828125 12280.9990234375 13741.1708984375 12280.9990234375 13746 C 12280.9990234375 13750.828125 12277.5576171875 13754.869140625 12272.9990234375 13755.798828125 L 12272.9990234375 13762 C 12272.9990234375 13765.30859375 12275.6904296875 13768.0009765625 12278.9990234375 13768.0009765625 L 12335.0009765625 13768.0009765625 M 12335.0009765625 13770.0009765625 L 12278.9990234375 13770.0009765625 C 12274.587890625 13770.0009765625 12270.9990234375 13766.412109375 12270.9990234375 13762 L 12270.9990234375 13754 C 12275.4111328125 13753.9990234375 12278.9990234375 13750.4111328125 12278.9990234375 13746 C 12278.9990234375 13741.5888671875 12275.41015625 13738 12270.9990234375 13738 L 12270.9990234375 13729.9990234375 C 12270.9990234375 13725.587890625 12274.587890625 13721.9990234375 12278.9990234375 13721.9990234375 L 12335.0009765625 13721.9990234375 C 12339.412109375 13721.9990234375 12343.0009765625 13725.587890625 12343.0009765625 13729.9990234375 L 12343.0009765625 13738 C 12338.5888671875 13738.0009765625 12335.0009765625 13741.5888671875 12335.0009765625 13746 C 12335.0009765625 13750.4111328125 12338.58984375 13754 12343.0009765625 13754 L 12343.0009765625 13762 C 12343.0009765625 13766.412109375 12339.412109375 13770.0009765625 12335.0009765625 13770.0009765625 Z" stroke="none" fill="#fff"/>
                                      </g>
                                    </g>
                                  </g>
                                  <g id="Group_24321" data-name="Group 24321" transform="translate(-3514.477 1653.317) rotate(-45)">
                                    <g id="Subtraction_167-2" data-name="Subtraction 167" transform="translate(-12177 -8458)" fill="none">
                                      <path d="M12335,13770h-56a8.009,8.009,0,0,1-8-8v-8a8,8,0,0,0,0-16v-8a8.009,8.009,0,0,1,8-8h56a8.009,8.009,0,0,1,8,8v8a8,8,0,0,0,0,16v8A8.009,8.009,0,0,1,12335,13770Z" stroke="none"/>
                                      <path d="M 12335.0009765625 13768.0009765625 C 12338.3095703125 13768.0009765625 12341.0009765625 13765.30859375 12341.0009765625 13762 L 12341.0009765625 13755.798828125 C 12336.4423828125 13754.8701171875 12333.0009765625 13750.8291015625 12333.0009765625 13746 C 12333.0009765625 13741.171875 12336.4423828125 13737.130859375 12341.0009765625 13736.201171875 L 12341.0009765625 13729.9990234375 C 12341.0009765625 13726.6904296875 12338.3095703125 13723.9990234375 12335.0009765625 13723.9990234375 L 12278.9990234375 13723.9990234375 C 12275.6904296875 13723.9990234375 12272.9990234375 13726.6904296875 12272.9990234375 13729.9990234375 L 12272.9990234375 13736.201171875 C 12277.5576171875 13737.1298828125 12280.9990234375 13741.1708984375 12280.9990234375 13746 C 12280.9990234375 13750.828125 12277.5576171875 13754.869140625 12272.9990234375 13755.798828125 L 12272.9990234375 13762 C 12272.9990234375 13765.30859375 12275.6904296875 13768.0009765625 12278.9990234375 13768.0009765625 L 12335.0009765625 13768.0009765625 M 12335.0009765625 13770.0009765625 L 12278.9990234375 13770.0009765625 C 12274.587890625 13770.0009765625 12270.9990234375 13766.412109375 12270.9990234375 13762 L 12270.9990234375 13754 C 12275.4111328125 13753.9990234375 12278.9990234375 13750.4111328125 12278.9990234375 13746 C 12278.9990234375 13741.5888671875 12275.41015625 13738 12270.9990234375 13738 L 12270.9990234375 13729.9990234375 C 12270.9990234375 13725.587890625 12274.587890625 13721.9990234375 12278.9990234375 13721.9990234375 L 12335.0009765625 13721.9990234375 C 12339.412109375 13721.9990234375 12343.0009765625 13725.587890625 12343.0009765625 13729.9990234375 L 12343.0009765625 13738 C 12338.5888671875 13738.0009765625 12335.0009765625 13741.5888671875 12335.0009765625 13746 C 12335.0009765625 13750.4111328125 12338.58984375 13754 12343.0009765625 13754 L 12343.0009765625 13762 C 12343.0009765625 13766.412109375 12339.412109375 13770.0009765625 12335.0009765625 13770.0009765625 Z" stroke="none" fill="#fff"/>
                                    </g>
                                    <g id="Group_24325" data-name="Group 24325">
                                      <rect id="Rectangle_18578" data-name="Rectangle 18578" width="8" height="2" transform="translate(120 5287)" fill="#fff"/>
                                      <rect id="Rectangle_18579" data-name="Rectangle 18579" width="8" height="2" transform="translate(132 5287)" fill="#fff"/>
                                      <rect id="Rectangle_18581" data-name="Rectangle 18581" width="8" height="2" transform="translate(144 5287)" fill="#fff"/>
                                      <rect id="Rectangle_18580" data-name="Rectangle 18580" width="8" height="2" transform="translate(108 5287)" fill="#fff"/>
                                    </g>
                                  </g>
                                </g>
                            </svg>
                        </div>
                        <div class="ml-lg-3">
                            <h5 class="fs-36 fw-400 text-white mb-3">{{ translate(get_setting('cupon_title')) }}</h5>
                            <h5 class="fs-20 fw-400 text-gray">{{ translate(get_setting('cupon_subtitle')) }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 text-center text-xl-right mt-4">
                    <a href="{{ route('coupons.all') }}" class="btn text-white hov-bg-white hov-text-dark border border-width-2 fs-16 px-4" style="border-radius: 28px;background: rgba(255, 255, 255, 0.2);box-shadow: 0px 20px 30px rgba(0, 0, 0, 0.16);">{{ translate('View All Coupons') }}</a>
                </div>
            </div>
        </div>
    </div>
    @endif
    

    <!-- Banner section 1 -->
    @if (get_setting('home_banner1_images') != null)
    <div class="mb-2 mb-md-3 mt-2 mt-md-3">
        <div class="container">
            @php 
                $banner_1_imags = json_decode(get_setting('home_banner1_images')); 
                $data_md = count($banner_1_imags) >= 2 ? 2 : 1;
            @endphp
            <div class="w-100">
                <div class="aiz-carousel gutters-16 overflow-hidden arrow-inactive-none arrow-dark arrow-x-15" data-items="{{ count($banner_1_imags) }}" data-xxl-items="{{ count($banner_1_imags) }}" data-xl-items="{{ count($banner_1_imags) }}" data-lg-items="{{ $data_md }}" data-md-items="{{ $data_md }}" data-sm-items="1" data-xs-items="1" data-arrows="true" data-dots="false">
                    @foreach ($banner_1_imags as $key => $value)
                        <div class="carousel-box overflow-hidden hov-scale-img">
                            <a href="{{ json_decode(get_setting('home_banner1_links'), true)[$key] }}" class="d-block text-reset overflow-hidden">
                                <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset($value) }}" 
                                alt="{{ env('APP_NAME') }} promo" class="img-fluid lazyload w-100 has-transition" onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif  

  
  
  
  <section class="mb-2 mb-md-3 mt-2 mt-md-3">
            <div class="container">
                <div class="row">
                    <!-- Top Section -->
                    <div class="col-md-12">
                        <!-- Title -->
                        <h2 class="title text-center mb-3">Blogs</h2>
                        
                    </div>

                <!-- Categories -->
  
  
  <div class="col-md-12">
                    <!-- Breadcrumb -->
                    
                    <div class="blog card-columns">
                                                    <div class="card mb-4 overflow-hidden shadow-none border rounded-0 hov-scale-img p-3">
                                <a href="https://rutecho.xyz/ires-india/blog/smile-confidently-expert-review-of-implant" class="text-reset d-block overflow-hidden h-180px">
                                    <img src="https://rutecho.xyz/ires-india/public/uploads/all/8pgOyRrOGNf9z4empbmgqHtx9QQdA0G9KuDqTgWn.jpg" data-src="https://rutecho.xyz/ires-india/public/uploads/all/8pgOyRrOGNf9z4empbmgqHtx9QQdA0G9KuDqTgWn.jpg" alt="Smile Confidently: Expert Review of Implant" class="img-fit h-100 has-transition ls-is-cached lazyloaded">
                                </a>
                                <div class="py-3">
                                    <h2 class="fs-16 fw-700 mb-3 h-35px text-truncate-2">
                                        <a href="https://rutecho.xyz/ires-india/blog/smile-confidently-expert-review-of-implant" class="text-reset hov-text-primary" title="Smile Confidently: Expert Review of Implant">
                                            Smile Confidently: Expert Review of Implant
                                        </a>
                                    </h2>
                                    <p class="opacity-70 mb-3 h-60px text-truncate-3" title="Discover the remarkable world of dental implant through the lens of experts, providing a comprehensive evaluation of this game-changing tooth replacement solution.">
                                        Discover the remarkable world of dental implant through the lens of experts, providing a comprehensive evaluation of this game-changing tooth replacement solution.
                                    </p>
                                    <div>
                                        <small class="fs-12 fw-400 opacity-60">Oct 27, 2023</small>
                                    </div>
                                                                            <div>
                                            <small class="fs-12 fw-400 text-blue">News</small>
                                        </div>
                                                                        <div class="mt-3 text-primary">
                                        <a href="https://rutecho.xyz/ires-india/blog/smile-confidently-expert-review-of-implant" class="fs-14 fw-700 text-primary has-transition d-flex align-items-center hov-column-gap-1">
                                            Read More
                                            <i class="las las-2x la-arrow-right fs-24 ml-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                                                
                    </div>
                    <!-- Pagination -->
                    
                </div>
  
  </div>
  </div>
  </section>

    <!-- Banner Section 2 -->
    @if (get_setting('home_banner2_images') != null)
    <div class="mb-2 mb-md-3 mt-2 mt-md-3">
        <div class="container">
            @php
                $banner_2_imags = json_decode(get_setting('home_banner2_images'));
                $data_md = count($banner_2_imags) >= 2 ? 2 : 1;
            @endphp
            <div class="aiz-carousel gutters-16 overflow-hidden arrow-inactive-none arrow-dark arrow-x-15" data-items="{{ count($banner_2_imags) }}" data-xxl-items="{{ count($banner_2_imags) }}" data-xl-items="{{ count($banner_2_imags) }}" data-lg-items="{{ $data_md }}" data-md-items="{{ $data_md }}" data-sm-items="1" data-xs-items="1" data-arrows="true" data-dots="false">
                @foreach ($banner_2_imags as $key => $value)
                    <div class="carousel-box overflow-hidden hov-scale-img">
                        <a href="{{ json_decode(get_setting('home_banner2_links'), true)[$key] }}" class="d-block text-reset overflow-hidden">
                            <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset($value) }}" 
                            alt="{{ env('APP_NAME') }} promo" class="img-fluid lazyload w-100 has-transition" onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif

    <!-- Best Selling  -->
    

    <!-- Banner Section 3 
    @if (get_setting('home_banner3_images') != null)
    <div class="mb-2 mb-md-3 mt-2 mt-md-3">
        <div class="container">
            @php 
                $banner_3_imags = json_decode(get_setting('home_banner3_images')); 
                $data_md = count($banner_3_imags) >= 2 ? 2 : 1;
            @endphp
            <div class="aiz-carousel gutters-16 overflow-hidden arrow-inactive-none arrow-dark arrow-x-15" data-items="{{ count($banner_3_imags) }}" data-xxl-items="{{ count($banner_3_imags) }}" data-xl-items="{{ count($banner_3_imags) }}" data-lg-items="{{ $data_md }}" data-md-items="{{ $data_md }}" data-sm-items="1" data-xs-items="1" data-arrows="true" data-dots="false">
                @foreach ($banner_3_imags as $key => $value)
                    <div class="carousel-box overflow-hidden hov-scale-img">
                        <a href="{{ json_decode(get_setting('home_banner3_links'), true)[$key] }}" class="d-block text-reset overflow-hidden">
                            <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset($value) }}" 
                            alt="{{ env('APP_NAME') }} promo" class="img-fluid lazyload w-100 has-transition" onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif-->

    <!-- Auction Product -->
    @if(addon_is_activated('auction'))
        <div id="auction_products">

        </div>
    @endif

   

    <!-- Category wise Products -->
    <div id="section_home_categories" class="mb-2 mb-md-3 mt-2 mt-md-3">

    </div>

    <!-- Classified Product -->
    @if(get_setting('classified_product') == 1)
        @php
            $classified_products = get_home_page_classified_products(6);
        @endphp
        @if (count($classified_products) > 0)
            <section class="mb-2 mb-md-3 mt-2 mt-md-3">
                <div class="container">
                    <!-- Top Section -->
                    <div class="d-flex mb-2 mb-md-3 align-items-baseline justify-content-between">
                        <!-- Title -->
                        <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                            <span class="">{{ translate('Classified Ads') }}</span>
                        </h3>
                        <!-- Links -->
                        <div class="d-flex">
                            <a class="text-blue fs-10 fs-md-12 fw-700 hov-text-primary animate-underline-primary" href="{{ route('customer.products') }}">{{ translate('View All Products') }}</a>
                        </div>
                    </div>
                    <!-- Banner -->
                    @if (get_setting('classified_banner_image') != null || get_setting('classified_banner_image_small') != null)
                        <div class="mb-3 overflow-hidden hov-scale-img d-none d-md-block">
                            <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" 
                                data-src="{{ uploaded_asset(get_setting('classified_banner_image')) }}" 
                                alt="{{ env('APP_NAME') }} promo" class="lazyload img-fit h-100 has-transition" 
                                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';">
                        </div>
                        <div class="mb-3 overflow-hidden hov-scale-img d-md-none">
                            <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" 
                                data-src="{{ get_setting('classified_banner_image_small') != null ? uploaded_asset(get_setting('classified_banner_image_small')) : uploaded_asset(get_setting('classified_banner_image')) }}" 
                                alt="{{ env('APP_NAME') }} promo" class="lazyload img-fit h-100 has-transition" 
                                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';">
                        </div>
                    @endif
                    <!-- Products Section -->
                    <div class="bg-white">
                        <div class="row no-gutters border-top border-left">
                            @foreach ($classified_products as $key => $classified_product)
                                <div class="col-xl-4 col-md-6 border-right border-bottom has-transition hov-shadow-out z-1">
                                    <div class="aiz-card-box p-2 has-transition bg-white">
                                        <div class="row hov-scale-img">
                                            <div class="col-4 col-md-5 mb-3 mb-md-0">
                                                <a href="{{ route('customer.product', $classified_product->slug) }}" class="d-block overflow-hidden h-auto h-md-150px text-center">
                                                    <img class="img-fluid lazyload mx-auto has-transition"
                                                        src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                                        data-src="{{ uploaded_asset($classified_product->thumbnail_img) }}"
                                                        alt="{{ $classified_product->getTranslation('name') }}"
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                                                </a>
                                            </div>
                                            <div class="col">
                                                <h3 class="fw-400 fs-14 text-dark text-truncate-2 lh-1-4 mb-3 h-35px d-none d-sm-block">
                                                    <a href="{{ route('customer.product', $classified_product->slug) }}" class="d-block text-reset hov-text-primary">{{ $classified_product->getTranslation('name') }}</a>
                                                </h3>
                                                <div class="fs-14 mb-3">
                                                    <span class="text-secondary">{{ $classified_product->user ? $classified_product->user->name : '' }}</span><br>
                                                    <span class="fw-700 text-primary">{{ single_price($classified_product->unit_price) }}</span>
                                                </div>
                                                @if($classified_product->conditon == 'new')
                                                    <span class="badge badge-inline badge-soft-info fs-13 fw-700 p-3 text-info" style="border-radius: 20px;">{{translate('New')}}</span>
                                                @elseif($classified_product->conditon == 'used')
                                                    <span class="badge badge-inline badge-soft-warning fs-13 fw-700 p-3 text-danger" style="border-radius: 20px;">{{translate('Used')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endif
    
    
    <!-- Top Sellers -->
    @if (get_setting('vendor_system_activation') == 1)
        @php
            $best_selers = get_best_sellers(5);   
        @endphp
        <section class="mb-2 mb-md-3 mt-2 mt-md-3">
            <div class="container">
                <!-- Top Section -->
                <div class="d-flex mb-2 mb-md-3 align-items-baseline justify-content-between">
                    <!-- Title -->
                    <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                        <span class="pb-3">{{ translate('Top Sellers') }}</span>
                    </h3>
                    <!-- Links -->
                    <div class="d-flex">
                        <a class="text-blue fs-10 fs-md-12 fw-700 hov-text-primary animate-underline-primary" href="{{ route('sellers') }}">{{ translate('View All Sellers') }}</a>
                    </div>
                </div>
                <!-- Sellers Section -->
                <div class="aiz-carousel arrow-x-0 arrow-inactive-none" data-items="5" data-xxl-items="5" data-xl-items="4" data-lg-items="3.4" data-md-items="2.5" data-sm-items="2" data-xs-items="1.4" data-arrows="true" data-dots="false">
                    @foreach ($best_selers as $key => $seller)
                        @if ($seller->user != null)
                            <div class="carousel-box h-100 position-relative text-center border-right border-top border-bottom @if($key==0) border-left @endif has-transition hov-animate-outline">
                                <div class="position-relative px-3" style="padding-top: 2rem; padding-bottom:2rem;">
                                    <!-- Shop logo & Verification Status -->
                                    <div class="position-relative mx-auto size-100px size-md-120px">
                                        <a href="{{ route('shop.visit', $seller->slug) }}" class="d-flex mx-auto justify-content-center align-item-center size-100px size-md-120px border overflow-hidden hov-scale-img" tabindex="0" style="border: 1px solid #e5e5e5; border-radius: 50%; box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.06);">
                                            <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}"
                                                data-src="{{ uploaded_asset($seller->logo) }}"
                                                alt="{{ $seller->name }}"
                                                class="img-fit lazyload has-transition"
                                                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';">
                                        </a>
                                        <div class="absolute-top-right z-1 mr-md-2 mt-1 rounded-content bg-white">
                                            @if ($seller->verification_status == 1)
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24.001" height="24" viewBox="0 0 24.001 24">
                                                    <g id="Group_25929" data-name="Group 25929" transform="translate(-480 -345)">
                                                        <circle id="Ellipse_637" data-name="Ellipse 637" cx="12" cy="12" r="12" transform="translate(480 345)" fill="#fff"/>
                                                        <g id="Group_25927" data-name="Group 25927" transform="translate(480 345)">
                                                        <path id="Union_5" data-name="Union 5" d="M0,12A12,12,0,1,1,12,24,12,12,0,0,1,0,12Zm1.2,0A10.8,10.8,0,1,0,12,1.2,10.812,10.812,0,0,0,1.2,12Zm1.2,0A9.6,9.6,0,1,1,12,21.6,9.611,9.611,0,0,1,2.4,12Zm5.115-1.244a1.083,1.083,0,0,0,0,1.529l3.059,3.059a1.081,1.081,0,0,0,1.529,0l5.1-5.1a1.084,1.084,0,0,0,0-1.53,1.081,1.081,0,0,0-1.529,0L11.339,13.05,9.045,10.756a1.082,1.082,0,0,0-1.53,0Z" transform="translate(0 0)" fill="#3490f3"/>
                                                        </g>
                                                    </g>
                                                </svg>
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24.001" height="24" viewBox="0 0 24.001 24">
                                                    <g id="Group_25929" data-name="Group 25929" transform="translate(-480 -345)">
                                                        <circle id="Ellipse_637" data-name="Ellipse 637" cx="12" cy="12" r="12" transform="translate(480 345)" fill="#fff"/>
                                                        <g id="Group_25927" data-name="Group 25927" transform="translate(480 345)">
                                                        <path id="Union_5" data-name="Union 5" d="M0,12A12,12,0,1,1,12,24,12,12,0,0,1,0,12Zm1.2,0A10.8,10.8,0,1,0,12,1.2,10.812,10.812,0,0,0,1.2,12Zm1.2,0A9.6,9.6,0,1,1,12,21.6,9.611,9.611,0,0,1,2.4,12Zm5.115-1.244a1.083,1.083,0,0,0,0,1.529l3.059,3.059a1.081,1.081,0,0,0,1.529,0l5.1-5.1a1.084,1.084,0,0,0,0-1.53,1.081,1.081,0,0,0-1.529,0L11.339,13.05,9.045,10.756a1.082,1.082,0,0,0-1.53,0Z" transform="translate(0 0)" fill="red"/>
                                                        </g>
                                                    </g>
                                                </svg>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Shop name -->
                                    <h2 class="fs-14 fw-700 text-dark text-truncate-2 h-40px mt-3 mt-md-4 mb-0 mb-md-3">
                                        <a href="{{ route('shop.visit', $seller->slug) }}" class="text-reset hov-text-primary" tabindex="0">{{ $seller->name }}</a>
                                    </h2>
                                    <!-- Shop Rating -->
                                    <div class="rating rating-mr-1 text-dark mb-3">
                                        {{ renderStarRating($seller->rating) }}
                                        <span class="opacity-60 fs-14">({{ $seller->num_of_reviews }}
                                            {{ translate('Reviews') }})</span>
                                    </div>
                                    <!-- Visit Button -->
                                    <a href="{{ route('shop.visit', $seller->slug) }}" class="btn-visit">
                                        <span class="circle" aria-hidden="true">
                                            <span class="icon arrow"></span>
                                        </span>
                                        <span class="button-text">{{ translate('Visit Store') }}</span>
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    
    
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $.post('{{ route('home.section.featured') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_featured').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.best_selling') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_best_selling').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.auction_products') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#auction_products').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.home_categories') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_home_categories').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.best_sellers') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_best_sellers').html(data);
                AIZ.plugins.slickCarousel();
            });
        });
    </script>
@endsection
