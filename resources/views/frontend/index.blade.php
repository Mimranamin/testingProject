@extends('frontend.layouts.main')
@section('content')
 
	<!-- Main -->
	<main class="main" role="main">
		<!-- Intro -->
		<div class="intro">
			<div class="wrap">
				<div class="textwidget">
					<form role="form" id="distance_form" action="search_results" class="form_background" method="GET">
                        <!-- Row -->
                        <div class="row">
                            <!-- <div class="col-md-6">
                                <div class="row">
                                        <div id="map" style="width: 100vw;height: 60vh;"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 text-dark bg-white border border-dark p-3 align-self-center">
                                        <b id="in_kilo">Distance</b>
                                    </div>
                                    <div class="col-md-6 text-dark bg-white border border-dark p-3 align-self-center">
                                        <b id="duration_text">Time</b>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-md-12 align-self-center">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input class="form-control" id="from_places" placeholder="Pickup Location"/>
                                        <input id="origin" name="origin" required="" type="hidden"/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input class="form-control" id="to_places" placeholder="Dropoff Location"/>
                                        <input id="destination" name="destination" required="" type="hidden"/>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="form-group col-md-12">
                                        <input class="form-control" id="to_places" placeholder="Enter To Location"/>
                                        <input id="destination" name="destination" required="" type="hidden"/>
                                    </div>
                                </div> -->
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <input class="form-control" type="datetime-local" name="departure_date_time" placeholder="Enter Departure Date & Time"/>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input class="form-control" type="datetime-local" name="return_date_time" placeholder="Enter Return Date & Time"/>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="number" name="passenger" class="form-control input-number" value="1" min="1" max="10">
                                        <!-- <input class="form-control" type="datetime-local" name="departure_date_time" placeholder="Enter Departure Date & Time"/> -->
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="number" name="luggage"id="" placeholder="Enter No. of Luggages"  name="luggage" class="form-control input-number" value="1" min="1" max="10">
                                        <!-- <input class="form-control" type="datetime-local" name="return_date_time" placeholder="Enter Return Date & Time"/> -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <!-- <label class="text-white">Add Passenger</label> -->
                                        <!-- <div class="input-group">
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn btn-secondary btn-number" disabled="disabled" data-type="minus" data-field="passenger">
                                                    <span class="fa fa-minus"></span>
                                                </button>
                                            </span>
                                            <input type="text" name="passenger" class="form-control input-number" value="1" min="1" max="10">
                                            <span class="input-group-append">
                                                <button type="button" class="btn btn-secondary btn-number" data-type="plus" data-field="passenger">
                                                    <span class="fa fa-plus"></span>
                                                </button>
                                            </span>
                                        </div> -->
                                    </div>
                                    <div class="form-group col-md-6">
                                        <!-- <label class="text-white">Add Luggage</label> -->
                                        <!-- <div class="input-group">
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn btn-secondary btn-number" disabled="disabled" data-type="minus" data-field="luggage">
                                                    <span class="fa fa-minus"></span>
                                                </button>
                                            </span>
                                            <input type="text" name="luggages"id="" placeholder="Enter No. of Luggages"  name="luggage" class="form-control input-number" value="1" min="1" max="10">
                                            <span class="input-group-append">
                                                <button type="button" class="btn btn-secondary btn-number" data-type="plus" data-field="luggage">
                                                    <span class="fa fa-plus"></span>
                                                </button>
                                            </span>
                                        </div> -->
                                    </div>
                                    <!-- hidden input fields -->
                                    <input id="travel_mode" name="travel_mode" type="hidden" value="DRIVING"/>
                                    <input id="distance" name="distance" type="hidden" value=""/>
                                    <input id="time" name="time" type="hidden" value=""/>
                                    <!-- hidden input fields -->
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: -20px; padding: 0 30px 0 30px;">
                                <div class="row">
                                        <div id="map" style="width: 100vw;height: 25vh;"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 text-dark bg-white border border-dark p-3 align-self-center">
                                        <b id="in_kilo">Distance</b>
                                    </div>
                                    <div class="col-md-6 text-dark bg-white border border-dark p-3 align-self-center">
                                        <b id="duration_text">Time</b>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Row -->
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <div class="form-group right">
                                    <input class="btn large black mt-2" type="submit" value="Next"/>
                                </div>
                            </div>
                        </div>
                        <!-- //Row -->    
                    </form>
				</div>
			</div>
		</div>
		<!-- //Intro -->
		
		<!-- Search -->
		<!-- <div class="advanced-search color" id="booking">
			<div class="wrap">
			</div>
		</div> -->
		<!-- //Search -->
		
        <!-- Title -->
		<div class="row">
            <!-- <div class="col-md-4"></div> -->
            <div class="col-md-12 title">
            <h1>Welcome to BLU World Transfer</h1></div>
            <!-- <div class="col-md-4"></div> -->
        </div>
        <!-- //Title -->
        
        <!-- Paragraph content with image -->
        <div class="wrap content">
            <div class="row">
                <div class="col-md-8">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae nostrum, sapiente minima nobis ipsa consequuntur doloremque. Placeat reiciendis voluptatum, dignissimos at quaerat perferendis quisquam facilis. Nihil suscipit tenetur doloremque dicta?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae nostrum, sapiente minima nobis ipsa consequuntur doloremque. Placeat reiciendis voluptatum, dignissimos at quaerat perferendis quisquam facilis. Nihil suscipit tenetur doloremque dicta?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae nostrum, sapiente minima nobis ipsa consequuntur doloremque. Placeat reiciendis voluptatum, dignissimos at quaerat perferendis quisquam facilis. Nihil suscipit tenetur doloremque dicta?
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="frontend\images\uploads\full-shot-adults-traveling-with-kid.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- //Paragraph content with image -->

        <!-- fleets -->
        <div class="row fleets">
        <div class="col-md-12 title">
            <h2>Our Fleets</h2></div>
        </div>

        <!-- Paragraph content with image -->
        <div class="wrap">
            <div class="row">
                <div class="col-md-3 title">
                    <img src="frontend\images\uploads\Business-1.jpg" alt="">
                    <h3>Sedan</h3>
                    <div class="descpt">
                        <div class="passanger"><p>Passanger</p><p class="figure">19</p></div>
                        <div class="luggage"><p>Luggage</p><p class="figure">19</p></div>
                    </div>
                </div>
                <div class="col-md-3 title">
                    <img src="frontend\images\uploads\Minivan-4-PAX.jpg" alt="">
                    <h3>Estate</h3>
                    <div class="descpt">
                        <div class="passanger"><p>Passanger</p><p class="figure">19</p></div>
                        <div class="luggage"><p>Luggage</p><p class="figure">19</p></div>
                    </div>
                </div>
                <div class="col-md-3 title">
                    <img src="frontend\images\uploads\Camper-13-PAX.jpg" alt="">
                    <h3>Minivan</h3>
                    <div class="descpt">
                        <div class="passanger"><p>Passanger</p><p class="figure">19</p></div>
                        <div class="luggage"><p>Luggage</p><p class="figure">19</p></div>
                    </div>
                </div>
                <div class="col-md-3 title">
                    <img src="frontend\images\uploads\57-Seater-Coach.jpg" alt="">
                    <h3>Bus</h3>
                    <div class="descpt">
                        <div class="passanger"><p>Passanger</p><p class="figure">19</p></div>
                        <div class="luggage"><p>Luggage</p><p class="figure">19</p></div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- //Paragraph content with image -->
        	
		<!-- Testimonials -->
		<div class="testimonials center black">
			<div class="wrap">
				<h6 class="wow fadeInDown"><i class="fa fa-quote-left"></i>Wow, this theme is outstanding!</h6>
				<p class="wow fadeInUp">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				<p class="meta wow fadeInUp">-John Doe, themeforest</p>
			</div>
		</div>
		<!-- //Testimonials -->
        <!-- <div class="row">
                <div class="col-md-12 intro2">
                    <img src="frontend\images\uploads\smiling-businessman.jpg" alt="">
                </div>
            </div> -->
		<!-- Services iconic -->
		<div class="services iconic white">
			<div class="wrap">
				<div class="row">
					<!-- Item -->
					<div class="one-third wow fadeIn">
						<span class="circle" style="visibility: visible; animation-name: fadeInLeft;"><span class="icon  icon-themeenergy_savings"></span></span>
						<h3>Fixed rates</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".2s">
						<span class="circle"><span class="icon icon-themeenergy_lockpad"></span></span>
						<h3>Reliable transfers</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".4s">
						<span class="circle"><span class="icon icon-themeenergy_open-wallet"></span></span>
						<h3>No booking fees</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn">
						<span class="circle"><span class="icon icon-themeenergy_heart"></span></span>
						<h3>Free cancellation</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".2s">
						<span class="circle"><span class="icon icon-themeenergy_magic-trick"></span></span>
						<h3>Booking flexibility</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".4s">
						<span class="circle"><span class="icon icon-themeenergy_call"></span></span>
						<h3>24h customer service</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn">
						<span class="circle"><span class="icon icon-themeenergy_cup"></span></span>
						<h3>Award winning service</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".2s">
						<span class="circle"><span class="icon icon-themeenergy_attach"></span></span>
						<h3>Benefits for partners</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".4s">
						<span class="circle"><span class="icon icon-themeenergy_stars"></span></span>
						<h3>Quality vehicles</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy  tinc dolore magna.</p>
					</div>
					<!-- //Item -->
				</div>
			</div>
		</div>
		<!-- //Services iconic -->
        
		
		<!-- Services -->
		<div class="row">
							<!-- Item -->
							<article class="one-fourth-footer">
								<figure class="featured-image">
									<img src="frontend\images\uploads\img.jpg" alt="">
									<div class="overlay">
										<a href="destination-single.html" class="expand">+</a>
									</div>
								</figure>

								<div class="description">
									<div>
										<h3><a href="destination-single.html">Cape verde</a></h3>
										<p><a href="#">Boa Vista Airport(BVC)</a></p>
										<p><a href="#">Sal Intl. Airport (SID)</a></p>
										<p><a href="#">Santiago Island Airport (RAI)</a></p>
										<p><a href="#">Sao Vicente (VXE)</a></p>
									</div>
									<a href="destination-single.html" class="more">Read More</a>
								</div>
							</article>
							<!-- //Item -->

							<!-- Item -->
							<article class="one-fourth-footer">
								<figure class="featured-image">
									<img src="frontend\images\uploads\img2.jpg" alt="">
									<div class="overlay">
										<a href="destination-single.html" class="expand">+</a>
									</div>
								</figure>
								<div class="description">
									<div>
										<h3><a href="destination-single.html">Egypt</a></h3>
										<p><a href="#">Alexandria (Bourj Al Arab) (HBE)</a></p>
										<p><a href="#">Alexandria (El Nouzha) (ALY)</a></p>
										<p><a href="#">Aswan (Daraw) Intl. Airport (ASW)</a></p>
										<p><a href="#">Cairo Intl. Airport (CAI)</a></p>
									</div>
									<a href="destination-single.html" class="more">Read More</a>
								</div>
							</article>
							<!-- //Item -->

							<!-- Item -->
							<article class="one-fourth-footer">
								<figure class="featured-image">
									<img src="frontend\images\uploads\img3.jpg" alt="">
									<div class="overlay">
										<a href="destination-single.html" class="expand">+</a>
									</div>
								</figure>

								<div class="description">
									<div>
										<h3><a href="destination-single.html">Morocco</a></h3>
										<p><a href="#">Agadir (Al Massira Airport) (AGA)</a></p>
										<p><a href="#">Casablanca - Anfa Airport (CAS)</a></p>
										<p><a href="#">Casablanca (Mohammed V) (CMN)</a></p>
										<p><a href="#">Fes (Fes-Saiss Airport) (FEZ)</a></p>
									</div>
									<a href="destination-single.html" class="more">Read More</a>
								</div>
							</article>
							<!-- //Item -->

							<!-- Item -->
							<article class="one-fourth-footer">
								<figure class="featured-image">
									<img src="frontend\images\uploads\img4.jpg" alt="">
									<div class="overlay">
										<a href="destination-single.html" class="expand">+</a>
									</div>
								</figure>
								<div class="description">
									<div>
										<h3><a href="destination-single.html">Namibia</a></h3>
										<p><a href="#">Swakopmund Airport (SWP)</a></p>
										<p><a href="#">Walvis Bay Airport (WVB)</a></p>
										<p><a href="#">Windhoek (Hosea Kutako) (WDH)</a></p>
										<p><a href="#">Windhoek Eros Airport (ERS)</a></p>
									</div>
									<a href="destination-single.html" class="more">Read More</a>
								</div>
							</article>
							<!-- //Item -->

							<!-- Item -->
							<!-- <article class="one-fourth-footer">
								<figure class="featured-image">
									<img src="frontend\images\uploads\img.jpg" alt="">
									<div class="overlay">
										<a href="destination-single.html" class="expand">+</a>
									</div>
								</figure>
								<div class="description">
									<div>
										<h3><a href="destination-single.html">South africa</a></h3>
										<p><a href="#">Cape Town Intl. Airport (CPT)</a></p>
										<p><a href="#">Durban Airport (DUR)</a></p>
										<p><a href="#">George Airport (GRJ)</a></p>
										<p><a href="#">Johannesburg Airport (JNB)</a></p>
									</div>
									<a href="destination-single.html" class="more">Read More</a>
								</div>
							</article> -->
							<!-- //Item -->

							<!-- Item -->
							<!-- <article class="one-fourth-footer">
								<figure class="featured-image">
									<img src="frontend\images\uploads\img2.jpg" alt="">
									<div class="overlay">
										<a href="destination-single.html" class="expand">+</a>
									</div>
								</figure>
								<div class="description">
									<div>
										<h3><a href="destination-single.html">Tunisia</a></h3>
										<p><a href="#">Djerba (Zarzis Intl. Airport) (DJE)</a></p>
										<p><a href="#">Hammamet Intl. Airport (NBE)</a></p>
										<p><a href="#">Monastir Habib Bourguiba (MIR)</a></p>
										<p><a href="#">Tunis-Carthage Intl. Airport (TUN)</a></p>
									</div>
									<a href="destination-single.html" class="more">Read More</a>
								</div>
							</article> -->
							<!-- //Item -->

							<!-- Item -->
							<!-- <article class="one-fourth-footer">
								<figure class="featured-image">
									<img src="frontend\images\uploads\img3.jpg" alt="">
									<div class="overlay">
										<a href="destination-single.html" class="expand">+</a>
									</div>
								</figure>
								<div class="description">
									<div>
										<h3><a href="destination-single.html">Uganda</a></h3>
										<p><a href="#">Antalya Airport (AYT)</a></p>
										<p><a href="#">Bodrum Airport (BJV)</a></p>
										<p><a href="#">Dalaman Airport (DLM)</a></p>
										<p><a href="#">Gazipasa Airport (GZP)</a></p>
									</div>
									<a href="destination-single.html" class="more">Read More</a>
								</div>
							</article> -->
							<!-- //Item -->

							<!-- Item -->
							<!-- <article class="one-fourth-footer">
								<figure class="featured-image">
									<img src="frontend\images\uploads\img4.jpg" alt="">
									<div class="overlay">
										<a href="destination-single.html" class="expand">+</a>
									</div>
								</figure>
								<div class="description">
									<div>
										<h3><a href="destination-single.html">Zambia</a></h3>
										<p><a href="#">Aberdeen Airport (ABZ)</a></p>
										<p><a href="#">Belfast Airport (BFS)</a></p>
										<p><a href="#">Birmingham Airport (BHX)</a></p>
										<p><a href="#">Bristol Airport (BRS)</a></p>
									</div>
									<a href="destination-single.html" class="more">Read More</a>
								</div>
							</article> -->
						</div>
		<!-- //Services -->
		
		
		
		<!-- Testimonials -->
		<!-- <div class="testimonials center black">
			<div class="wrap">
				<h6 class="wow fadeInDown"><i class="fa fa-quote-left"></i>Wow, this theme is outstanding!</h6>
				<p class="wow fadeInUp">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				<p class="meta wow fadeInUp">-John Doe, themeforest</p>
			</div>
		</div> -->
		<!-- //Testimonials -->
		
		<div class="partners white center">
			<div class="wrap">
				<h2 class="wow fadeIn" style="visibility: visible; animation-name: fadeInLeft;">Our partners</h2>
				<div class="one-fifth wow fadeIn"><a href="#"><img src="frontend\images\uploads\logo1.jpg" alt=""></a></div>
				<div class="one-fifth wow fadeIn" data-wow-delay=".2s"><a href="#"><img src="frontend\images\uploads\logo2.jpg" alt=""></a></div>
				<div class="one-fifth wow fadeIn" data-wow-delay=".4s"><a href="#"><img src="frontend\images\uploads\logo3.jpg" alt=""></a></div>
				<div class="one-fifth wow fadeIn" data-wow-delay=".6s"><a href="#"><img src="frontend\images\uploads\logo4.jpg" alt=""></a></div>
				<div class="one-fifth" data-wow-delay=".8s"><a href="#"><img src="frontend\images\uploads\logo5.jpg" alt=""></a></div>
			</div>
		</div>
		<!-- Testimonials -->
        
            <div class="row">
                <div class="col-md-12 intro1">
                    <!-- <img src="frontend\images\uploads\mapsss.png" alt=""> -->
                </div>
            </div>
        
		<!-- <div class="testimonials center black map_image">
			<div class="wrap">
				<h6 class="wow fadeInDown"><i class="fa fa-quote-left"></i>Wow, this theme is outstanding!</h6>
				<p class="wow fadeInUp">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				<p class="meta wow fadeInUp">-John Doe, themeforest</p>
			</div>
		</div> -->
		<!-- //Testimonials -->
	</main>
	<!-- //Main -->

<script>
    $('.btn-number').click(function(e){
        e.preventDefault();
        
        fieldName = $(this).attr('data-field');
        type      = $(this).attr('data-type');
        var input = $("input[name='"+fieldName+"']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if(type == 'minus') {
                
                if(currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                } 
                if(parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }

            } else if(type == 'plus') {

                if(currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                }
                if(parseInt(input.val()) == input.attr('max')) {
                    $(this).attr('disabled', true);
                }

            }
        } else {
            input.val(0);
        }
    });
    $('.input-number').focusin(function(){
    $(this).data('oldValue', $(this).val());
    });
    $('.input-number').change(function() {
        
        minValue =  parseInt($(this).attr('min'));
        maxValue =  parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());
        
        name = $(this).attr('name');
        if(valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if(valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }
    });

    $(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
            // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
            // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                // let it happen, don't do anything
                return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    //  map scripts starts here
        $(function () {
            var origin, destination, map;
            
            // add input listeners
            google.maps.event.addDomListener(window, 'load', function (listener) {
                setDestination();
                initMap();
            });
            
            // init or load map
            function initMap() {
                
                var myLatLng = {
                    lat: 52.520008,
                    lng: 13.404954
                };
                map = new google.maps.Map(document.getElementById('map'), {zoom: 16, center: myLatLng,});
            }
            
            function setDestination() {
                var from_places = new google.maps.places.Autocomplete(document.getElementById('from_places'));
                var to_places = new google.maps.places.Autocomplete(document.getElementById('to_places'));
                
                google.maps.event.addListener(from_places, 'place_changed', function () {
                    var from_place = from_places.getPlace();
                    var from_address = from_place.formatted_address;
                    $('#origin').val(from_address);
                });
                
                google.maps.event.addListener(to_places, 'place_changed', function () {
                    var to_place = to_places.getPlace();
                    var to_address = to_place.formatted_address;
                    $('#destination').val(to_address);
                });
                
                
            }
            
            function displayRoute(travel_mode, origin, destination, directionsService, directionsDisplay) {
                directionsService.route({
                    origin: origin,
                    destination: destination,
                    travelMode: travel_mode,
                    avoidTolls: true
                }, function (response, status) {
                    if (status === 'OK') {
                        directionsDisplay.setMap(map);
                        directionsDisplay.setDirections(response);
                    } else {
                        directionsDisplay.setMap(null);
                        directionsDisplay.setDirections(null);
                        // alert('Could not display directions due to: ' + status);
                    }
                });
            }
            
            // calculate distance , after finish send result to callback function
            function calculateDistance(travel_mode, origin, destination) {
                
                var DistanceMatrixService = new google.maps.DistanceMatrixService();
                DistanceMatrixService.getDistanceMatrix(
                    {
                        origins: [origin],
                        destinations: [destination],
                        travelMode: google.maps.TravelMode[travel_mode],
                        unitSystem: google.maps.UnitSystem.IMPERIAL, // miles and feet.
                        // unitSystem: google.maps.UnitSystem.metric, // kilometers and meters.
                        avoidHighways: false,
                        avoidTolls: false
                    }, save_results);
                }
                
                // save distance results
                function save_results(response, status) {
                    
                    if (status != google.maps.DistanceMatrixStatus.OK) {
                        $('#result').html(err);
                    } else {
                        var origin = response.originAddresses[0];
                        var destination = response.destinationAddresses[0];
                        if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
                            $('#result').html("Sorry , not available to use this travel mode between " + origin + " and " + destination);
                        } else {
                            var distance = response.rows[0].elements[0].distance;
                            var duration = response.rows[0].elements[0].duration;
                            var distance_in_kilo = distance.value / 1000; // the kilo meter
                            var distance_in_mile = distance.value / 1609.34; // the mile
                            var duration_text = duration.text;
                            appendResults(distance_in_kilo, distance_in_mile, duration_text);
                            sendAjaxRequest(origin, destination, distance_in_kilo, distance_in_mile, duration_text);
                        }
                    }
                }
                
                // append html results
                function appendResults(distance_in_kilo, distance_in_mile, duration_text) {
                    $("#result").removeClass("hide");
                    $('#in_mile').html("<span>Distance : </span><br><span>" + distance_in_mile.toFixed(2) + " Miles </span>");
                    $('#in_kilo').html("<span>Distance : </span><br><span>" + distance_in_kilo.toFixed(2) + " Km </span>");
                    $('#duration_text').html("Duration : <br>" + duration_text + "");
                    $('#distance').val(distance_in_kilo);
                    $('#time').val(duration_text);
                }
                
                // send ajax request to save results in the database
                function sendAjaxRequest(origin, destination, distance_in_kilo, distance_in_mile, duration_text) {
                    var username =   $('#username').val();
                    var travel_mode =  $('#travel_mode').find(':selected').text();
                    $.ajax({
                        url: 'common.php',
                        type: 'POST',
                        data: {
                            username,
                            travel_mode,
                            origin,
                            destination,
                            distance_in_kilo,
                            distance_in_mile,
                            duration_text
                        },
                        success: function (response) {
                            console.info(response);
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            console.log(textStatus, errorThrown);
                        }
                    });
                }
                
                // on submit  display route ,append results and send calculateDistance to ajax request
                $('input').change(function (e) {
                    e.preventDefault();
                    var origin = $('#origin').val();
                    var destination = $('#destination').val();
                    var travel_mode = $('#travel_mode').val();
                    var directionsDisplay = new google.maps.DirectionsRenderer({'draggable': false});
                    var directionsService = new google.maps.DirectionsService();
                    displayRoute(travel_mode, origin, destination, directionsService, directionsDisplay);
                    calculateDistance(travel_mode, origin, destination);
                });
                
            });
            
            // get current Position
            function getCurrentPosition() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(setCurrentPosition);
                } else {
                    alert("Geolocation is not supported by this browser.")
                }
            }
            
            // get formatted address based on current position and set it to input
            function setCurrentPosition(pos) {
                var geocoder = new google.maps.Geocoder();
                var latlng = {lat: parseFloat(pos.coords.latitude), lng: parseFloat(pos.coords.longitude)};
                geocoder.geocode({ 'location' :latlng  }, function (responses) {
                    console.log(responses);
                    if (responses && responses.length > 0) {
                        $("#origin").val(responses[1].formatted_address);
                        $("#from_places").val(responses[1].formatted_address);
                        //    console.log(responses[1].formatted_address);
                    } else {
                        alert("Cannot determine address at this location.")
                    }
                });
            }
            
            
</script>
<script defer src="https://maps.googleapis.com/maps/api/js?libraries=places&language=en&key=AIzaSyAyMStRbCRgoRpCcpyHSNyLKZ-mMVtsNMk" type="text/javascript"></script>
	@endsection

<script>
    $('#carouselExample').on('slide.bs.carousel', function (e) {

    
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 4;
    var totalItems = $('.carousel-item').length;

    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
    });


    $('#carouselExample').carousel({ 
                interval: 2000
        });


    $(document).ready(function() {
    /* show lightbox when clicking a thumbnail */
    $('a.thumb').click(function(event){
    event.preventDefault();
    var content = $('.modal-body');
    content.empty();
        var title = $(this).attr("title");
        $('.modal-title').html(title);        
        content.html($(this).html());
        $(".modal-profile").modal({show:true});
    });

    });
</script>