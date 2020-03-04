@extends('layouts.app')

@section('content')

{{-- NEWS PHOTO SLIDER --}}
    <div id="smis-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#smis-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#smis-carousel" data-slide-to="1"></li>
          <li data-target="#smis-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="/storage/images/slide1.jpg" alt="SMIS LOGO">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="carousel-text">Welcome To Murray Girls</h1>
                <p class="carousel-text">We Are Glad</p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/storage/images/slide2.jpg" alt="SMIS LOGO">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="carousel-text">Get A Bright Future With Us</h1>
                <p class="carousel-text">Happy Hour</p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/storage/images/slide3.jpg" alt="SMIS LOGO">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="carousel-text">The Center Of Knowledge</h1>
                <p class="carousel-text">Empowering Minds</p>
              </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#smis-carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#smis-carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>

    {{-- NEWS --}}
    <div id="news" class="container m-auto pt-3 pb-5">
        <h1 class="text-center">News</h1>
        <div class="row card-deck">
            <div class="card col-md-4 p-0">
                <div class="card-body" data-aos="fade-up"
                    data-aos-offset="200"
                    data-aos-delay="25"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in-out"
                >
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.
                                         With supporting text below as a natural lead-in to additional content.
                                         With supporting text below as a natural lead-in to additional content.
                                         With supporting text below as a natural lead-in to additional content.
                  </p>
                  <a href="#" >Read More ....</a>
                </div>
            </div>

            <div class="card col-md-4 p-0">
                <div class="card-body" data-aos="fade-up"
                    data-aos-offset="100"
                    data-aos-delay="15"
                    data-aos-duration="500"
                    data-aos-easing="ease-in-out"
                >
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.
                                         With supporting text below as a natural lead-in to additional content.
                                         With supporting text below as a natural lead-in to additional content.
                                         With supporting text below as a natural lead-in to additional content.
                  </p>
                  <a href="#" class="text-right" >Read More ....</a>
                </div>
            </div>

            <div class="card col-md-4 p-0">
                <div class="card-body" data-aos="fade-up"
                    data-aos-offset="200"
                    data-aos-delay="30"
                    data-aos-duration="1200"
                    data-aos-easing="ease-in-out"
                >
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.
                                         With supporting text below as a natural lead-in to additional content.
                                         With supporting text below as a natural lead-in to additional content.
                                         With supporting text below as a natural lead-in to additional content.
                  </p>
                  <a href="#" >Read More ....</a>
                </div>
            </div>
        </div>

        <div class="row card-deck mt-2">
            <div class="card col-md-4 p-0">
                <div class="card-body" data-aos="fade-up"
                    data-aos-offset="200"
                    data-aos-delay="20"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in-out"
                >
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.
                                         With supporting text below as a natural lead-in to additional content.
                                         With supporting text below as a natural lead-in to additional content.
                                         With supporting text below as a natural lead-in to additional content.
                  </p>
                  <a href="#" >Read More ....</a>
                </div>
            </div>

            <div class="card col-md-4 p-0">
                <div class="card-body" data-aos="fade-up"
                    data-aos-offset="100"
                    data-aos-delay="15"
                    data-aos-duration="500"
                    data-aos-easing="ease-in-out"
                >
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.
                                         With supporting text below as a natural lead-in to additional content.
                                         With supporting text below as a natural lead-in to additional content.
                                         With supporting text below as a natural lead-in to additional content.
                  </p>
                  <a href="#" class="text-right" >Read More ....</a>
                </div>
            </div>

            <div class="card col-md-4 p-0">
                <div class="card-body" data-aos="fade-up"
                    data-aos-offset="200"
                    data-aos-delay="20"
                    data-aos-duration="1200"
                    data-aos-easing="ease-in-out"
                >
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.
                                         With supporting text below as a natural lead-in to additional content.
                                         With supporting text below as a natural lead-in to additional content.
                                         With supporting text below as a natural lead-in to additional content.
                  </p>
                  <a href="#" >Read More ....</a>
                </div>
            </div>
        </div>


    </div>
{{-- IMPORTANT DATES --}}

        <div id="announcements"    data-aos="fade-up"
            data-aos-duration="800"
            data-aos-easing="ease-in-out"
            data-aos-delay="10"

        >
            <div id="datesScroll" class="carousel carousel-fade pb-5" data-ride="carousel" >
                <div class="carousel-inner container pt-5">
                  <div class="carousel-item active" data-interval="10000">
                      <div class="row col-md-12">
                          <div class="col-md-8">
                            <h1 class="textres">Special Examinations Form 4</h1>
                          </div>
                          <div class="col-md-4">
                              <h1  id="count" class="row">00:00:00</h1>
                              <h3 class="row">28th March 2020</h1>
                            </div>
                      </div>

                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <div class="row col-md-12">
                        <div class="col-md-8">
                          <h1>Annual General Meeting</h1>
                        </div>
                        <div class="col-md-4">
                            <h1  id="count" class="row">00:00:00</h1>
                            <h3 class="row">18th May 2020</h1>
                          </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row col-md-12">
                        <div class="col-md-8">
                          <h1>April Intake Form 1</h1>
                        </div>
                        <div class="col-md-4">
                            <h1 id="count"class="row ">00:00:00</h1>
                            <h3 class="row">12th April 2020</h1>
                          </div>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev pt-3" href="#datesScroll" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next pt-3" href="#datesScroll" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>


 <div class="row m-auto"style="width:99%">
     <div class="col-md-6 mt-5 mb-5"
        data-aos="fade-up"
        data-aos-offset="200"
        data-aos-delay="20"
        data-aos-duration="1200"
        data-aos-easing="ease-in-out"
     >
        <h1 class="text-center mb-5">MAP</h1>
        <div id="map">

        </div>
     </div>
     <div class="col-md-6 smis-contact mt-5 mb-5"
        data-aos="fade-up"
        data-aos-offset="200"
        data-aos-delay="20"
        data-aos-duration="1200"
        data-aos-easing="ease-in-out"
     >
        <h1 class="text-center mb-5">Contact US</h1>
        <form class="m-auto">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Your Name Please" required>
              </div>
              <div class="form-group col-md-6">
                <label for="email">Email / Phone</label>
                <input type="text" class="form-control" id="email" placeholder="email or phone" required>
              </div>
            </div>
            <div class="form-row mb-2">
                <label for="message">Message :</label>
                <textarea name="message" class="col-md-12 form-control" id="" cols="30" rows="10" required>

                </textarea>
            </div>
            <button type="submit" class="btn btn-lg btn-primary col-md-4 mt-5 m-auto float-right">SEND</button>
        </form>

    </div>
 </div>

 {{-- SCROLL TO TOP --}}
 <a id="gotopbtn" href="#">
     <i class="fas fa-arrow-up"></i>
</a>


<footer class=" home-footer mt-5">
   <div class="text-center pb-4 pt-5">
        <h5>Phone : 122356789</h5>
        <h5>Address : 101 TAVETA</h5>
        <h5>Email : info@smis.ac.ke</h5>

        <h4 class="mt-3">&copy;SMIS</h4>

    </div>

</footer>


{{-- SCRIPTS --}}

        <script>
                function initMap() {

                const murray = {lat: -3.4558834, lng: 38.3488217};

                const map = new google.maps.Map(
                    document.getElementById('map'), {zoom: 16, center: murray});

                cost marker = new google.maps.Marker({position: murray, map: map});
                }
        </script>

        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvcIspinZD9e-KrQON36ITVP2ygT5HK6c&callback=initMap"></script>
@endsection
