@extends('layouts.app')

@section('content')

    <div class="container-fluid bg-light">
        {{-- Search Bar --}}
        <div class="row m-5">
            <div class="col-md-6 m-auto">

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Hawaiin Pizza" aria-label="Search">
                    <button class="btn btn-outline-danger" type="submit">search</button>
                  </form>
            </div>
        </div>

        {{-- Food Menu --}}
        <div class="row">
            <div class="col-md-9">
                {{-- Adding Pizzas as Cards --}}
                <div class="row">

                    @foreach ($pizzas as $pizza )

                    <div class="col-md-3">
                            <div class="card shadow-sm rounded rounded-4">
                                <div class="inner">
                                    <img src="/images/Hawaiian.jpg" class="card-img-top rounded rounded-4" alt="Hawaiian">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{$pizza -> pizza_name}}</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                                        dignissimos accusantium amet similique velit iste.</p>

                                        {{-- Pizza sizes --}}
                                        <ul>

                                         @foreach ($pizza ->pizza_size as $size )

                                            <li>{{$size}}</li>
                                         @endforeach

                                        </ul>
                                </div>
                                <div class="mb-2 d-flex justify-content-around">
                                    <h3 class="lead">${{$pizza -> pizza_price }}</h3>
                                    <button class="btn btn-outline-danger bordered border-0">Order Now</button>
                                </div>
                            </div>
                       </div>

                       @endforeach
                </div>









            </div>





        {{-- Delivery Detials --}}
        <div class="col-md-3">
				<nav>
					<div class="nav nav-tabs hstack gap-5" id="nav-tab" role="tablist">
					  <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-delivery" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Delivery</button>
					  <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-pickup" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Pick Up</button>
					</div>
				  </nav>
				  <div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-delivery" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">

						<form>
							<div class="mb-3 mt-3">
								<label for="name" class="form-label">Your Name</label>
								<input type="text" name="name" id="name" class="form-control">
							  </div>

							<div class="mb-3">
							  <label for="address" class="form-label">Your Address</label>
							  <textarea name="address" id="address" class="form-control"></textarea>
							</div>

							<div class="mb-3">
							  <label for="date" class="form-label">Date</label>
							  <input type="date" class="form-control" id="date">
							</div>
							<div class="mb-3">
							<label for="time" class="form-label">Time</label>
							  <input type="time" class="form-control" id="time">
							</div>

							<button type="submit" class="btn btn-outline-danger d-block text-center">place order</button>
						  </form>


					</div>
					<div class="tab-pane fade" id="nav-pickup" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
						<form>
							<div class="mb-3 mt-3">
								<label for="name" class="form-label">Your Name</label>
								<input type="text" name="name" id="name" class="form-control">
							  </div>

							<div class="mb-3">
							  <label for="date" class="form-label">Date</label>
							  <input type="date" class="form-control" id="date">
							</div>
							<div class="mb-3">
							<label for="time" class="form-label">Time</label>
							  <input type="time" class="form-control" id="time">
							</div>

							<button type="submit" class="btn btn-outline-danger d-block text-center">place order</button>
						  </form>

					</div>
				  </div>












        </div>


    </div>







    </div>

@endsection
