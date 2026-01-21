<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Zenvia Hotel - Home</title>

    <!-- CSS Links -->
    <?php require("inc/links.php");?>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

</head>

<body class="bg-light">

    <!-------------------- Header -------------------->

    <?php require("inc/header.php");?>

    <!-------------------- Carousel -------------------->

    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="Images/Carousel/1.jpeg" class="w-100 d-block"></div>
                <div class="swiper-slide"><img src="Images/Carousel/2.jpeg" class="w-100 d-block"></div>
                <div class="swiper-slide"><img src="Images/Carousel/3.jpeg" class="w-100 d-block"></div>
                <div class="swiper-slide"><img src="Images/Carousel/4.jpeg" class="w-100 d-block"></div>
                <div class="swiper-slide"><img src="Images/Carousel/5.jpeg" class="w-100 d-block"></div>
                <div class="swiper-slide"><img src="Images/Carousel/6.jpeg" class="w-100 d-block"></div>
            </div>
        </div>
    </div>

    <!-------------------- Check Availability Form -------------------->

    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Adult</label>
                            <select class="form-select shadow-none">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Children</label>
                            <select class="form-select shadow-none">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-------------------- Rooms -------------------->

    <h2 class="mt-5 pt-2 mb-4 text-center fw-bold h-font">Our Rooms</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                    <img src="Images/Rooms/1.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h5>Standard Room</h5>
                        <h6 class="mb-4">$15 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Sofa</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">A/C</span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">3 Adults</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children</span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                    <img src="Images/Rooms/2.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h5>Deluxe Room</h5>
                        <h6 class="mb-4">$25 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">A/C</span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">4 Adults</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">7 Children</span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                    <img src="Images/Rooms/3.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h5>Suite Room</h5>
                        <h6 class="mb-4">$35 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Bathroom</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">A/C</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">6 Adults</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">9 Children</span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="rooms.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
            </div>
        </div>
    </div>

    <!-------------------- Facilities -------------------->

    <h2 class="mt-5 pt-2 mb-4 text-center fw-bold h-font">Our Facilities</h2>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white shadow rounded py-4 my-4">
                <img src="Images/Facilities/Wifi.jpeg" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white shadow rounded py-4 my-4">
                <img src="Images/Facilities/Ac.jpeg" width="80px">
                <h5 class="mt-3">Air Conditioner</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white shadow rounded py-4 my-4">
                <img src="Images/Facilities/Spa.jpeg" width="80px">
                <h5 class="mt-3">Spa</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white shadow rounded py-4 my-4">
                <img src="Images/Facilities/Heater.jpeg" width="80px">
                <h5 class="mt-3">Room Heater</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white shadow rounded py-4 my-4">
                <img src="Images/Facilities/Geyser.jpeg" width="80px">
                <h5 class="mt-3">Geyser</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="facilities.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
            </div>
        </div>
    </div>

    
    <!-------------------- Testimonials -------------------->

    <h2 class="mt-5 pt-2 mb-4 text-center fw-bold h-font">Testimonials</h2>

    <div class="container mt-5">
        <!-- Swiper -->
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="Images/About/5.jpeg" width="30px"/>
                        <h6 class=" m-0 ms-2">Sarah Johnson</h6>
                    </div>
                    <p>“Good value for money with neat rooms and modern amenities. Check-in was smooth, and the hotel 
                        atmosphere was calm and relaxing throughout our stay.”
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="Images/About/3.jpeg" width="30px"/>
                        <h6 class=" m-0 ms-2">Arjun Perera</h6>
                    </div>
                    <p>“Perfect hotel for families. Spacious rooms, great facilities, and convenient location. The staff
                         ensured a pleasant stay and always responded quickly to our needs.”
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="Images/About/4.jpeg" width="30px"/>
                        <h6 class=" m-0 ms-2">Emily Carter</h6>
                    </div>
                    <p>“Amazing stay with clean rooms, friendly staff, and excellent service. The beach view was 
                        beautiful, and the food was delicious. I would definitely visit again.”
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="Images/About/6.jpeg" width="30px"/>
                        <h6 class=" m-0 ms-2">Dilan Fernando</h6>
                    </div>
                    <p>“Comfortable rooms and a peaceful environment. Staff were helpful and polite. Breakfast had good 
                        variety, though Wi-Fi speed could be improved slightly.”
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    
    <!-------------------- Footer -------------------->

    <?php require("inc/footer.php");?>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            }
        });

        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: "true",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView:1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>

</body>
</html>