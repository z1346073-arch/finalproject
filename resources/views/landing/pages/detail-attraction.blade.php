@extends('landing.master')

@section('content')
    <section class="section-top">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 col-xs-12 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <h1>Detail attraction</h1>
                </div><!-- //.HERO-TEXT -->
            </div><!--- END COL -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END SECTION TOP -->

    <!-- START SINGLE PROPERTY DETAILS -->
    <section class="property_single_details section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="property_single_details_slide">
                        <img src="{{ asset('placeholder.svg') }}" class="img-fluid" alt="{{ $attraction->name }}">
                    </div>
                    <div class="property_single_details_price">
                        <h1>{{ $attraction->name }}</h1>
                        <h4>{{ $attraction->description }}</h4>
                    </div>
                    <div class="property_single_details_feature">
                        <h4>Property features</h4>
                        <ul>
                            <li><i class="fa fa-check"></i> 4 bed rooms</li>
                            <li><i class="fa fa-check"></i> 1 garage</li>
                            <li><i class="fa fa-check"></i> 2 bathrooms</li>

                        </ul>
                    </div>
                    <div class="property_single_details_description">
                        <h4>Property description</h4>
                        <p>{{ $attraction->description }}</p>
                    </div>


                    <div class="property_info">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single_property_list">
                                    <h4>Amenities</h4>
                                    <ul class="single_property_list_mr">
                                        <li><i class="fa fa-check"></i> Video</li>
                                        <li><i class="fa fa-check"></i> Hairdryer</li>
                                        <li><i class="fa fa-check"></i> Cot</li>
                                        <li><i class="fa fa-check"></i> Dishwasher</li>
                                        <li><i class="fa fa-check"></i> Parquet</li>
                                        <li><i class="fa fa-check"></i> Iron</li>
                                    </ul>
                                    <ul class="single_property_list_mr">
                                        <li><i class="fa fa-check"></i> Air conditioning</li>
                                        <li><i class="fa fa-check"></i> Cable TV</li>
                                        <li><i class="fa fa-check"></i> Grill</li>
                                        <li><i class="fa fa-check"></i> Juicer</li>
                                        <li><i class="fa fa-check"></i> Use of pool</li>
                                        <li><i class="fa fa-check"></i> Toaster</li>
                                    </ul>
                                    <ul>
                                        <li><i class="fa fa-check"></i> Video</li>
                                        <li><i class="fa fa-check"></i> Hairdryer</li>
                                        <li><i class="fa fa-check"></i> Cot</li>
                                        <li><i class="fa fa-check"></i> Dishwasher</li>
                                        <li><i class="fa fa-check"></i> Parquet</li>
                                        <li><i class="fa fa-check"></i> Iron</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="property_map">
                        <h4>on map</h4>
                        <div class="map-pro">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.957183635167!2d-74.00402768559431!3d40.71895904512855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2598a1316e7a7%3A0x47bb20eb6074b3f0!2sNew%20Work%20City%20-%20(CLOSED)!5e0!3m2!1sbn!2sbd!4v1600305497356!5m2!1sbn!2sbd"
                                style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                    <div class="single_similar_property">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single_property">
                                    <div class="mb-3">
                                        <img src="{{ asset('storage/' . $attraction->image) }}"
                                            alt="{{ $attraction->name }}" width="200">

                                    </div>
                                    <div class="single_property_description text-center">
                                        <span><i class="fa fa-object-group"></i> 900 sq ft</span>
                                        <span><i class="fa fa-bed"></i> 4 Badrooms</span>
                                        <span><i class="fa fa-star-o"></i> 2 Baths</span>
                                    </div>
                                    <div class="single_property_content">
                                        <h4><a href="#">2045 B Street</a></h4>
                                        <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical.
                                        </p>

                                    </div>
                                    <div class="single_property_price">
                                        High Meadow Lane Mount Pleasant <span>$ 170,000</span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div><!--- END SINGLE PROPERTY -->
                            </div><!--- END COL -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single_property">
                                    <img src="{{ asset('landing/assets/img/property/2.jpg') }}" class="img-fluid"
                                        alt="" />
                                    <div class="single_property_description text-center">
                                        <span><i class="fa fa-object-group"></i> 900 sq ft</span>
                                        <span><i class="fa fa-bed"></i> 4 Badrooms</span>
                                        <span><i class="fa fa-star-o"></i> 2 Baths</span>
                                    </div>
                                    <div class="single_property_content">
                                        <h4><a href="#">Lynn Ogden Lane</a></h4>
                                        <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical.
                                        </p>

                                    </div>
                                    <div class="single_property_price">
                                        High Meadow Lane Mount Pleasant <span>$ 170,000</span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div><!--- END SINGLE PROPERTY -->
                            </div><!--- END COL -->
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-md-3 col-sm-3 col-xs-12">
                    @auth
                        <div class="single_property_form">
                            <h2 style="margin-bottom: 30px; font-size: 22px; font-weight: 600;">Leave A Review</h2>
                            <form class="form" method="post" action="{{ route('landing.attraction.review.store') }}">
                                @csrf
                                <input type="hidden" name="attraction_id" value="{{ $attraction->id }}">

                                <div class="form-group" style="margin-bottom: 20px;">
                                    <label for="comment"
                                        style="display: block; margin-bottom: 8px; color: #666; font-weight: 500;">Your
                                        Review</label>
                                    <textarea rows="6" name="comment" class="form-control" id="comment" placeholder="Share your experience"
                                        required="required" minlength="5"
                                        style="resize: vertical; padding: 12px; border: 1px solid #ddd; border-radius: 4px;"></textarea>
                                    @error('comment')
                                        <small class="text-danger d-block mt-2">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group" style="margin-bottom: 25px;">

                                    <label for="rating"
                                        style="display: block; margin-bottom: 8px; color: #1a1919; font-weight: 500;">Rating</label>
                                    <select name="rating" class="form-control" id="rating" required
                                        style="padding: 12px; border: 1px solid #ddd; border-radius: 4px; background-color: #f9f9f9;">
                                        <option value="">Select Rating</option>
                                        <option value="1">⭐ 1 Star</option>
                                        <option value="2">⭐⭐ 2 Stars</option>
                                        <option value="3">⭐⭐⭐ 3 Stars</option>
                                        <option value="4">⭐⭐⭐⭐ 4 Stars</option>
                                        <option value="5">⭐⭐⭐⭐⭐ 5 Stars</option>
                                    </select>
                                    @error('rating')
                                        <small class="text-danger d-block mt-2">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div style="text-align: center;">
                                    <button type="submit" class="btn btn-success"
                                        style="background-color: #27ae60; border: none; color: white; padding: 12px 40px; border-radius: 25px; font-size: 16px; font-weight: 600; cursor: pointer; transition: background-color 0.3s ease;"
                                        onmouseover="this.style.backgroundColor='#229954'"
                                        onmouseout="this.style.backgroundColor='#27ae60'">
                                        Submit Review
                                    </button>
                                </div>
                            </form>
                        </div>
                    @else
                        <div class="single_property_form"
                            style="text-align: center; padding: 20px; background-color: #f0f8ff; border-radius: 8px;">
                            <h4 style="margin-bottom: 15px;">Leave A Review</h4>
                            <p style="margin: 10px 0; color: #666;">Please <a href="{{ route('login') }}"
                                    style="color: #27ae60; text-decoration: none; font-weight: 600;">login</a> to leave a
                                review.</p>
                        </div>
                    @endauth
                    <div class="single_property_form_agent">
                        <div class="single_property_form_agent_profile">
                            <img src="{{ asset('/storage/landing/assets/img/team/team-1.jpg') }}" class="img-fluid"
                                alt="" />
                            <h4><i class="fa fa-phone"></i> <a href="tel:+88123123123">+6281356789921</a></h4>
                            <h4><a href="mailto:info@example.com">nadia@example.com</a></h4>
                        </div>
                        <div class="single_property_form_agent_profile">
                            <img src="{{ asset('/storage/landing/assets/img/team/team-2.jpg') }}" class="img-fluid"
                                alt="" />
                            <h4><i class="fa fa-phone"></i> <a href="tel:+88123123123">+6281109751</a></h4>
                            <h4><a href="mailto:info@example.com">ardi@example.com</a></h4>
                        </div>
                    </div>
                </div><!--- END COL -->
            </div>
        </div>
    </section>
@endsection
