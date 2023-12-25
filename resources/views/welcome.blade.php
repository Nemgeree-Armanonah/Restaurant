@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/css/main.css">
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
                </div>
                <div class="carousel-item">
                    <img src="/images/Neapolitan.jpg" class="d-block w-100 img-fluid" alt="Neapolitan Pizza">
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
            </div>

            {{-- Top Sell Pizzas --}}

            <div class="container bg-secondary-color p-4">
                <h4 class="display-6 text-center">Fequently orderd Pizzas</h4>

                <div class="row m-auto">
                    <div class="col-md-3 animate__animated animate__bounceInRight">
                        <div class="card" style="width: 18rem;">
                            <img src="/images/MeatLover.jpg" class="card-img-top" alt="Neapolitan Pizza">
                            <div class="card-body">
                              <h5 class="card-title">Meat Lover Pizza</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-outline-danger">Go somewhere</a>
                            </div>
                          </div>
                    </div>

                    <div class="col-md-3 animate__animated animate__bounceInRight">
                        <div class="card" style="width: 18rem;">
                            <img src="/images/Hawaiian.jpg" class="card-img-top" alt="Hawaiian Pizza">
                            <div class="card-body">
                              <h5 class="card-title">Hawaiian Pizza</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-outline-danger">Go somewhere</a>
                            </div>
                          </div>
                    </div>

                    <div class="col-md-3 animate__animated animate__bounceInRight">
                        <div class="card" style="width: 18rem;">
                            <img src="/images/Pepperoni.jpg" class="card-img-top" alt="Pepperoni Pizza">
                            <div class="card-body">
                              <h5 class="card-title">Pepperoni Pizza</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-outline-danger">Go somewhere</a>
                            </div>
                          </div>
                    </div>

                    <div class="col-md-3 animate__animated animate__bounceInRight">
                        <div class="card" style="width: 18rem;">
                            <img src="/images/BBQ-chicken.jpg" class="card-img-top" alt="Margarita">
                            <div class="card-body">
                              <h5 class="card-title">Margarita Pizza</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-outline-danger">Go somewhere</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
    {{-- Opening Ours  --}}
    <div class="container-fluid bg-light-subtle" id="openningHours">
        <h5 class="display-5 text-center">Openning Hours</h5>
        <p class="lead text-center">We are here to serve you. Make an oder we will take care of it.</p>
        <div class="row animate__animated animate__bounceleft">
            <div class="col-md-8 m-auto">
            <table class="table table-borderless text-center p-5 mt-3 shadow-sm bg-body-tertiary bordered rounded-3">
                <thead>
                    <th>Day</th>
                    <th>Pick Up</th>
                    <th>Delivery</th>
                </thead>
                <tr>
                    <td class="animate__animated animate__fadeInUp">Monday</td>
                    <td class="animate__animated animate__fadeInUp">11:00 - 22:00</td>
                    <td class="animate__animated animate__fadeInUp">11:30 - 22:30</td>
                </tr>
                <tr>
                    <td class="animate__animated animate__fadeInUp">Tuesday</td>
                    <td class="animate__animated animate__fadeInUp">11:00 - 22:00</td>
                    <td class="animate__animated animate__fadeInUp">11:30 - 22:30</td>
                </tr>
                <tr>
                    <td class="animate__animated animate__fadeInUp">Wednesday</td>
                    <td class="animate__animated animate__fadeInUp">11:00 - 22:00</td>
                    <td class="animate__animated animate__fadeInUp">11:30 - 22:30</td>
                </tr>
                <tr>
                    <td class="animate__animated animate__fadeInUp">Thursday</td>
                    <td class="animate__animated animate__fadeInUp">11:00 - 22:00</td>
                    <td class="animate__animated animate__fadeInUp">11:30 - 22:30</td>
                </tr>
                <tr>
                    <td class="animate__animated animate__fadeInUp">Friday</td>
                    <td class="animate__animated animate__fadeInUp">11:00 - 22:00</td>
                    <td class="animate__animated animate__fadeInUp">11:30 - 22:30</td>
                </tr>
                <tr>
                    <td class="animate__animated animate__fadeInUp">Saturday</td>
                    <td class="animate__animated animate__fadeInUp">11:00 - 22:00</td>
                    <td class="animate__animated animate__fadeInUp">11:30 - 22:30</td>
                </tr>
                <tfoot>
                    <td>Don't hesitate to ask Qeustions! </td>
                    <td><a href="" class="btn btn-outline-danger"><span class="bi bi-phone">(+49) 1632435061</span></a></td>
                    <td><a href="" class="btn btn-outline-danger"><span class="bi bi-email">Afghan Palaw</span></a></td>
                </tfoot>
            </table>
            </div>

        </div>
    </div>

  {{-- Spcial Offers --}}
  <div class="container mb-5" id="special-offers">
    <h4 class="display-5 text-center p-4">Special Offers</h4>
    <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id tempora esse minus sequi blanditiis at magni cupiditate, consequatur ipsam facilis impedit quasi aliquam necessitatibus ullam architecto nisi voluptas fuga rerum?</p>

    <div class="row">
      <div class="col-md-3">
        <div class="card special-offer" style="width: 18rem;">
          <img src="/images/Pepperoni.jpg" class="card-img-top" alt="Pepperoni Pizza">
          <div class="card-body">
            <h5 class="card-title text-center">Pepperoni Pizza</h5>
            <h5 class="text-muted text-center">Price</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-outline-danger">Place Order</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card special-offer" style="width: 18rem;">
          <img src="/images/Pepperoni.jpg" class="card-img-top" alt="Pepperoni Pizza">
          <div class="card-body">
            <h5 class="card-title text-center">Pepperoni Pizza</h5>
            <h5 class="text-muted text-center">Price</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-outline-danger">View Details</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card special-offer" style="width: 18rem;">
          <img src="/images/Pepperoni.jpg" class="card-img-top" alt="Pepperoni Pizza">
          <div class="card-body">
            <h5 class="card-title text-center">Pepperoni Pizza</h5>
            <h5 class="text-muted text-center">Price</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-outline-danger">View Details</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card special-offer" style="width: 18rem;">
          <img src="/images/Pepperoni.jpg" class="card-img-top" alt="Pepperoni Pizza">
          <div class="card-body">
            <h5 class="card-title text-center">Pepperoni Pizza</h5>
             <h5 class="text-muted text-center">Price</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-outline-danger">View Details</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- Contact Us --}}
  <div class="container bg-light-subtle p-5" id="contact-us">
        <h4 class="display-6 text-center ">Contact Us</h4>
            <div class="row">
                <div class="col-md-8">

                    <div class="row">
                        <div class="col-md-4">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="John">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Hoe">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="E-Mail" class="form-label">E-Mail</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="John.Hoe@gmail.com">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="phone" class="form-control" id="phone" name="phone" placeholder="(176) 222 33433">
                        </div>

                        <div class="col-md-8 mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" id="message"  class="form-control"></textarea>
                        </div>

                        <div class="col-md-4 m-auto">
                            <input type="submit" class="btn btn-outline-danger" value="send">
                        </div>

                    </div>


                </div>

                <div class="col-md-4">
                    <h4 class="text-center">Get in Touch</h4>
                    <table class="table">
                        <tr>
                            <td><span class="bi bi-facebook"></span></td>
                            <td>Restaurant</td>
                        </tr>

                        <tr>
                            <td><span class="bi bi-instagram"></span></td>
                            <td>Restaurant12</td>
                        </tr>

                        <tr>
                            <td><span class="bi bi-whatsapp"></span></td>
                            <td>(+49) 1632435061</td>
                        </tr>

                        <tr>
                            <td><span class="bi bi-facebook"></span></td>
                            <td>Restaurant</td>
                        </tr>
                    </table>
                </div>

            </div>





        </div>
  </div>


@endsection
