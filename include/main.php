
<style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}



.hero-section {
    height: 100vh;
    background-size: cover;
    background-position: center;
    position: relative;
}

.overlay {
    background-image: url("imgfinal/hero.png") !important;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-size: cover;
    background-position: center;
    background-color: n;
}



.form {
    margin-top: 20px;
}

.buttons {
    margin-top: 15px;
}

.btn {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    margin: 0 5px;
}

.red-btn {
    background-color: red;
    color: white;
    transition: background-color 0.3s ease;
}

.red-btn:hover {
    background-color: darkred;
}

/* Responsive Design */
@media (max-width: 768px) {
    .container h1 {
        font-size: 2.5rem;
    }

    input[type="text"],
    input[type="email"] {
        width: 200px;
    }

    .btn {
        font-size: 14px;
        padding: 8px 16px;
    }
}

@media (max-width: 480px) {
    .container h1 {
        font-size: 2rem;
    }

    input[type="text"],
    input[type="email"] {
        width: 150px;
    }

    .btn {
        font-size: 12px;
        padding: 6px 12px;
    }
}
.flag-carousel-wrapper {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.flag-carousel {
  display: flex;
  flex-wrap: nowrap;
  width: 200%; /* Adjust based on the number of flags and duplicates */
}

.flag-item {
  flex: 0 0 auto;
  width: 80px; /* Adjust as needed */
  height: 80px; /* Adjust as needed */
  margin-right: 2px; /* 2px gap between flags */
  display: flex;
  align-items: center;
  justify-content: center;
}

.flag-item img {
  max-width: 100%;
  max-height: 100%;
  border-radius: 50%;
  display: block;
}

    </style>
    <div class="hero-section" id="HOME">
     <div class="overlay">
     <div class="container">
    <h1 class="text-white">Get HIN Report Today</h1>
    <form action="" method="POST">
        <div class="form">
            <input type="text" name="hin-number" placeholder="Enter HIN" style="padding: 10px; margin: 10px 0; width: 250px; border: none; border-radius: 5px;" required>
            <br>
            <input type="email" name="email" placeholder="Enter Email" style="padding: 10px; margin: 10px 0; width: 250px; border: none; border-radius: 5px;" required>
            <div class="buttons">
                <button type="submit" class="btn btn-danger py-2 px-3">Get Report</button>
                <a href="" class="btn btn-danger py-2 px-3">
                    <i class="fas fa-file-alt"></i> Sample Report
                </a>
            </div>
        </div>
    </form>
</div>

        </div>
    </div>

<script>
    document.getElementById('search-btn').addEventListener('click', function() {
    const hinNumber = document.getElementById('hin-number').value;
    const email = document.getElementById('email').value;

    if (hinNumber && email) {
        alert(`HIN Number: ${hinNumber}\nEmail: ${email}`);
    } else {
        alert('Please fill out both fields.');
    }
});

document.getElementById('sample-btn').addEventListener('click', function() {
    alert('Sample Report is being generated!');
});

</script>
<!-- ABOUT SECTION -->
<div class="container-xxl py-5" id="ABOUT">
  <div class="container">
    <div class="row g-5">
      <!-- Image Section -->
      <div class="col-lg-6 pt-4" style="min-height: 400px;">
        <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
          <img class="position-absolute img-fluid w-100 h-100" src="imgfinal/About.gif" style="object-fit: cover;" alt="About BoathInsight">
        </div>
      </div>

      <!-- Content Section -->
      <div class="col-lg-6">
        <h1 class="mb-4 text-primary">ABOUT US</h1>
        <h2 class="mb-4">WHO WE ARE?</h2>
        <p class="mb-4">Welcome to <strong>BoathInsight</strong>, your trusted partner for comprehensive boat inspection history reports worldwide. Our mission is to provide boat owners, buyers, and industry professionals with accurate, reliable, and transparent inspection reports to help make informed decisions.</p>
        <p class="mb-4">At <strong>BoathInsight</strong>, we believe in delivering detailed insights that cover every aspect of a boat's condition, from mechanical components to structural integrity. Whether you are looking to buy, sell, or maintain a vessel, our reports offer a complete history, including past inspections, repairs, and overall performance.</p>
        <p class="mb-4">We are committed to upholding the highest standards in the marine industry, with a dedicated team of experts and cutting-edge technology. No matter where in the world your boat is located, <strong>BoathInsight</strong> ensures that you have the information you need to protect your investment.</p>
        <p class="mb-4">With <strong>BoathInsight</strong>, navigate your decisions with confidence.</p>
      </div>
    </div>
  </div>
</div>

<!-- COUNTRIES WE SERVE SECTION -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container">
    <!-- Section Header -->
    <div class="text-center mb-5">
      <h1 class="text-primary">Countries We Serve</h1>
      <h5 class="mb-4"><span>15+</span></h5>
    </div>

    <!-- Flag Carousel -->
    <div class="flag-carousel-wrapper">
      <div class="flag-carousel">
        <!-- Flags -->
        <div class="flag-item">
          <img src="imgfinal/countries/usa.jpeg" alt="USA">
        </div>
        <div class="flag-item">
          <img src="imgfinal/countries/uk.jpeg" alt="United Kingdom">
        </div>
        <div class="flag-item">
          <img src="imgfinal/countries/austria.jpeg" alt="Austria">
        </div>
        <div class="flag-item">
          <img src="imgfinal/countries/argentina.jpeg" alt="Argentina">
        </div>
        <div class="flag-item">
          <img src="imgfinal/countries/newzealand.jpeg" alt="New Zealand">
        </div>
        <div class="flag-item">
          <img src="imgfinal/countries/netherland.jpeg" alt="Netherlands">
        </div>
        <div class="flag-item">
          <img src="imgfinal/countries/denmark.jpeg" alt="Denmark">
        </div>
        <div class="flag-item">
          <img src="imgfinal/countries/france.jpeg" alt="France">
        </div>
        <div class="flag-item">
          <img src="imgfinal/countries/germany.jpeg" alt="Germany">
        </div>
        <div class="flag-item">
          <img src="imgfinal/countries/greece.jpeg" alt="Greece">
        </div>
        <div class="flag-item">
          <img src="imgfinal/countries/ireland.jpeg" alt="Ireland">
        </div>
        <div class="flag-item">
          <img src="imgfinal/countries/japan.jpeg" alt="Japan">
        </div>
        <div class="flag-item">
          <img src="imgfinal/countries/cyprus.jpeg" alt="Cyprus">
        </div>
        <div class="flag-item">
          <img src="imgfinal/countries/italy.jpeg" alt="Italy">
        </div>
        <div class="flag-item">
          <img src="imgfinal/countries/spain.jpeg" alt="Spain">
        </div>
        <div class="flag-item">
          <img src="imgfinal/countries/sweden.jpeg" alt="Sweden">
        </div>
        <div class="flag-item">
          <img src="imgfinal/countries/norway.jpeg" alt="Norway">
        </div>
        <div class="flag-item">
          <img src="imgfinal/countries/aus.jpeg" alt="Australia">
        </div>
        <div class="flag-item">
          <img src="imgfinal/countries/canada.jpg" alt="Canada">
        </div>
      </div>
    </div>
  </div>
</div>
<script>
 document.addEventListener('DOMContentLoaded', () => {
  const carousel = document.querySelector('.flag-carousel');
  const totalFlags = document.querySelectorAll('.flag-item').length;

  // Clone the flag items to create an infinite loop
  for (let i = 0; i < totalFlags; i++) {
    const clone = carousel.children[i].cloneNode(true);
    carousel.appendChild(clone);
  }

  const speed = 50; // Speed of scrolling in pixels per second

  let offset = 0;
  const updateDimensions = () => {
    const flagWidth = document.querySelector('.flag-item').offsetWidth + 2; // 2px gap
    const totalWidth = flagWidth * totalFlags;
    carousel.style.width = `${totalWidth * 2}px`; // Set width to accommodate duplicated flags
    return flagWidth;
  };

  let flagWidth = updateDimensions();

  function scrollCarousel() {
    offset += speed / 60; // Update offset based on speed and frame rate
    if (offset > flagWidth * totalFlags) {
      offset = 0;
    }
    carousel.style.transform = `translateX(-${offset}px)`;
    requestAnimationFrame(scrollCarousel);
  }

  scrollCarousel();

  // Adjust dimensions on window resize
  window.addEventListener('resize', () => {
    flagWidth = updateDimensions();
  });
});


</script>


<!-- SERVICES SECTION -->
<div class="container-xxl py-5" id="SERVICES">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6 pt-4" style="min-height: 400px;">
        <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
          <img class="position-absolute img-fluid w-100 h-100" src="imgfinal/ser.1.webp" style="object-fit: cover;" alt="Our Services">
        </div>
      </div>
      <div class="col-lg-6">
        <h1 class="mb-4 text-primary">OUR SERVICES</h1>
        <h1 class="mb-4">Boat Inspection Services:</h1>
        <ul>
          <li><strong>Comprehensive Boat History Report:</strong> Detailed information on previous ownership, repairs, accidents, and modifications.</li>
          <li><strong>Hull Condition Inspection:</strong> Examination of the boat's hull for any structural issues, cracks, or weaknesses.</li>
          <li><strong>Engine and Mechanical Inspection:</strong> Review of the engine's performance history, repairs, and potential issues.</li>
          <li><strong>Electrical Systems Check:</strong> Inspection of the boat's electrical systems to ensure proper functionality.</li>
          <li><strong>Propeller and Shaft Analysis:</strong> Evaluation of the propeller, shaft, and drivetrain for any signs of wear or damage.</li>
          <li><strong>Fuel System Check:</strong> Inspection of the fuel system for leaks or malfunctions, ensuring optimal performance.</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- ADDITIONAL FEATURES SECTION -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="d-flex py-5 px-4">
          <i class="fa fa-lock fa-3x text-primary flex-shrink-0"></i>
          <div class="ps-4">
            <h5 class="mb-3">Secure</h5>
            <p><b>PayPal</b> provides a secure and trusted global payment method.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="d-flex py-5 px-4">
          <i class="fa fa-calendar fa-3x text-primary flex-shrink-0"></i>
          <div class="ps-4">
            <h5 class="mb-3">Money Back Warranty</h5>
            <p><b>10 days money-back guarantee</b> with a hassle-free refund process.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="d-flex py-5 px-4">
          <i class="fa fa-search fa-3x text-primary flex-shrink-0"></i>
          <div class="ps-4">
            <h5 class="mb-3">Detailed Reports</h5>
            <p><b>Comprehensive</b> Boat-Alert scans your hull ID against 90 private and public databases.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- HIN/VIN INFORMATION SECTION -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6 pt-4" style="min-height: 400px;">
        <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
          <img class="position-absolute img-fluid w-100 h-100" src="imgfinal/hill.webp" style="object-fit: none;" alt="HIN Information">
        </div>
      </div>
      <div class="col-lg-6">
        <h1 class="mb-4 text-primary">HIN/VIN</h1>
        <h4 class="mb-4">Hull Identification Number (HIN) / Boat VIN</h4>
        <p> and where do I find it?
The Hull Identification Number (HIN) serves as the boat's unique identifier, similar to the VIN or vehicle serial number of a car. If the dealer or broker listing the boat has not provided you with a report from BoathInsight®️, ask them to provide you with the boat's HIN so that you can run your own report.
The HIN is affixed or stamped into the back of the boat's hull also known as the transom in the uppermost right corner or under the swim platform. Also, the HIN may be stated on the state title, state registration, USCG Documentation, and insurance documents. For boats 1984 and newer, Federal regulations mandate the HIN must follow the format in the image below. For additional HIN formats and a more detailed explanation, be sure to check out our HIN Troubleshooting Guide. </p> 
    </div>
  </div>
</div>

<!-- TESTIMONIAL SECTION -->
 <!-- Testimonial Start -->
 <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h2 class="text-primary text-uppercase">Testimonials</h2>
                <h5 class="mb-5">Our Clients Say!</h5>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <h3 class="mb-2">Darian Watson</h3>
                    <div class="testimonial bg-light text-center p-4">
                    <p class="mb-0">The inspection report was thorough and helped me make a confident decision. Great service!</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <h3 class="mb-2">Aria Flores</h3>
                    <div class="testimonial bg-light text-center p-4">
                    <p class="mb-0">Fast, professional, and reliable. The detailed report saved me from future headaches</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <h3 class="mb-2">Keon Vargas</h3>
                    <div class="testimonial bg-light text-center p-4">
                    <p class="mb-0">Very impressed with the depth of the report. This is a must-use service for boat buyers.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <h3 class="mb-2">Selene Martinez</h3>
                    <div class="testimonial bg-light text-center p-4">
                    <p class="mb-0">Exceptional service! The inspection uncovered issues I would have never noticed myself.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <h3 class="mb-2">Talon Johnson</h3>
                    <div class="testimonial bg-light text-center p-4">
                    <p class="mb-0">Quick, efficient, and incredibly informative. I’ll be using this service again.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <h3 class="mb-2">Zaira Hernandez</h3>
                    <div class="testimonial bg-light text-center p-4">
                    <p class="mb-0">The report was delivered faster than expected and was full of valuable insights. Highly recommended!</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <h3 class="mb-2">Orin Langston</h3>
                    <div class="testimonial bg-light text-center p-4">
                    <p class="mb-0">Detailed and easy to understand. This report gave me peace of mind with my purchase.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <h3 class="mb-2">Amira Ziegler</h3>
                    <div class="testimonial bg-light text-center p-4">
                    <p class="mb-0">Superb attention to detail. The report was comprehensive and helped me avoid costly repairs.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <h3 class="mb-2">Isolde Knight</h3>
                    <div class="testimonial bg-light text-center p-4">
                    <p class="mb-0">Professional and reliable. The report provided key details that influenced my final decision.</p>
                    </div>
                </div>
               
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Testimonial End -->
<!-- Navbar Start -->
<?php include 'include/contact.php'; ?>
 <!-- Navbar End -->

</div>
</div>
</div>
 <!-- Back to Top -->
 <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
 <!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>