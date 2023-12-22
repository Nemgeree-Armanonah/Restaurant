@extends('layouts.app')



@section('content')

        {{-- Pizza Slider --}}
		<div class="container-fluid">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <!-- Images -->
                <div class="carousel-inner ratio ratio-21x9" >
                  <div class="carousel-item active">
                    <img src= "/images/MeatLover.jpg" class="d-block w-100 img-fluid" alt="Meat Lover Pizza">
                  </div>
                  <div class="carousel-item">
                    <img src="/images/Hawaiian.jpg" class="d-block mx-auto w-100" alt="Hawaiian  Pizza">
                  </div>
                  <div class="carousel-item">
                    <img src="/images/Pepperoni.jpg" class="d-block w-100 img-fluid" alt="Pepperoni Pizza">
                  </div>
                </div>
                <!-- Arrow Buttons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div> 	<!-- end of container -->


@endsection
