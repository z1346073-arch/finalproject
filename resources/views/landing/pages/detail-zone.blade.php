@extends('admin.master')

@section('content')

<section class="section-top text-white" style="background-image: url('{{ asset('storage/' . $zone->image) }}'); background-size: cover; background-position: center;">
	<div class="container text-center">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<div class="section-heading">
					<h1>{{ $zone->name }}</h1>
					<span class="subheading">{{ $zone->description }}</span>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="property_single_details section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12">
				<div class="property_details_info">
					<h3>Deskripsi</h3>
					<p>{{ $zone->description }}</p>
					<h3>Rentang Harga</h3>
					<p>{{ $zone->price_range }}</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-12">
				<div class="property_details_sidebar">
					<h3>Atraksi di Zona Ini</h3>
					<ul>
						@foreach($zone->attractions as $attraction)
							<li><a href="{{ route('attractions.show', $attraction->id) }}">{{ $attraction->name }}</a></li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="bg-white p-4 rounded-4 shadow-sm">
	<h4 class="mb-4"> Visitor Reviews </h4>
	<div class="d-flex mb-4">
		<img src="{{ asset('storage/landing/assets/img/author/1.jpg') }}" class="img-fluid rounded-circle me-3" alt="">
		<div>
			<h5 class="mb-1">John Doe</h5>
			<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
	</div>
	<div class="d-flex mb-4">
		<img src="{{ asset('storage/landing/assets/img/author/2.jpg') }}" class="img-fluid rounded-circle me-3" alt="">
		<div>
			<h5 class="mb-1">Jane Smith</h5>
			<p class="mb-0">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>
	</div>
	<div class="d-flex mb-4">
		<img src="{{ asset('storage/landing/assets/img/author/3.jpg') }}" class="img-fluid rounded-circle me-3" alt="">
		<div>
			<h5 class="mb-1">Alice Johnson</h5>
			<p class="mb-0">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
		</div>
	</div>
</div>
@endsection