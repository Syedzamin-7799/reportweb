<!-- Navbar Start -->
<?php include 'include/header.php'; ?>
 <!-- Navbar End -->
 <style>
  /* General Styling */
  .container-xxl {
    padding: 60px 0;
  }

  .text-primary {
    color: #dc3545 !important; /* Red Color */
  }

  /* Form Styling */
  form {
    background-color: #ffffff; /* White background */
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    padding: 40px;
    border-radius: 15px;
    transition: box-shadow 0.3s ease;
  }

  form:hover {
    box-shadow: 0 0 25px rgba(0, 0, 0, 0.2);
  }

  .form-floating {
    position: relative;
  }

  .form-floating .form-control {
    border: none;
    border-bottom: 2px solid #e0e0e0;
    padding: 15px;
    font-size: 16px;
    background-color: transparent;
    transition: all 0.3s ease;
  }

  .form-floating .form-control:focus {
    border-color: #dc3545; /* Red Color */
    background-color: #fff;
    box-shadow: none;
  }

  .form-floating label {
    padding-left: 15px;
    color: #999;
  }

  .form-control {
    border-radius: 10px !important;
  }

  .btn-primary {
    background-color: #dc3545; /* Red Color */
    border: none;
    border-radius: 50px;
    padding: 15px 30px;
    font-size: 18px;
    transition: background-color 0.3s ease;
  }

  .btn-primary:hover {
    background-color: #bb2d3b; /* Darker Red on Hover */
  }

  /* Payment Method Styling */
  .payment-card {
    transition: transform 0.3s ease;
    border: none;
    background-color: #ffffff; /* White background */
  }

  .payment-card img {
    max-width: 100px;
    transition: transform 0.3s ease;
  }

  .payment-card:hover {
    transform: scale(1.05);
  }

  .payment-card input {
    display: none;
  }
  .text-center {
    text-align: center;
  }

  .payment-card {
    transition: transform 0.3s ease;
    border: none;
    background-color: #ffffff;
  }

  .payment-card img {
    max-width: 150px; /* Adjust the size of the PayPal logo */
    transition: transform 0.3s ease;
  }

  .payment-card:hover {
    transform: scale(1.05);
  }

  .row.justify-content-center {
    justify-content: center;
  }
</style>
 <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s" id="CONTACT">
  <div class="container">
    <div class="text-center">
      <h2 class="text-primary text-uppercase mb-5">Boat History Report</h2>
    </div>
      
    <form class="p-md-5 border rounded-3 bg-body-tertiary">
        <!-- Select Payment Method -->
        <div class="mb-3">
  <!-- Payment Method Section -->
<div class="text-center mb-5">
  <div class="row justify-content-center">
    <!-- PayPal Card -->
    <div class="col-md-6 d-flex justify-content-center mb-3">
      <div class="card border-0 shadow-sm p-3 payment-card" id="paypalCard" style="cursor: pointer;">
        <input class="form-check-input d-none" type="radio" name="paymentMethod" id="paypal" value="paypal">
        <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-large.png" alt="PayPal" class="img-fluid" style="max-width: 150px;">
      </div>
    </div>
  </div>
</div>

</div>

      <!-- Full Name input -->
      <div class="form-floating mb-3">
        <input type="text" id="form4Example1" class="form-control" style="border-radius: 15px;">
        <label class="form-label" for="form4Example1">Full Name</label>
      </div>

      <!-- Email input -->
      <div class="form-floating mb-3">
        <input type="email" id="form4Example2" class="form-control" style="border-radius: 15px;">
        <label class="form-label" for="form4Example2">Email address</label>
      </div>

      <!-- Phone input -->
      <div class="form-floating mb-3">
        <input type="text" id="form4Example2" class="form-control" style="border-radius: 15px;">
        <label class="form-label" for="form4Example2">Phone</label>
      </div>

      <!-- HIN input -->
      <div class="form-floating mb-3">
        <input type="text" id="form4Example2" class="form-control" style="border-radius: 15px;">
        <label class="form-label" for="form4Example2">Enter HIN</label>
      </div>

      <!-- Card Number input (only visible if Visa is selected) -->
      <div class="form-floating mb-3">
        <input type="text" id="cardNumber" class="form-control" style="border-radius: 15px;">
        <label class="form-label" for="cardNumber">Card Number</label>
      </div>

      <!-- Expiration Month -->
      <div class="form-floating mb-3">
        <input type="date" id="expirationMonth" class="form-control" style="border-radius: 15px;">
        <label class="form-label" for="expirationMonth">Expiration Month (MM)</label>
      </div>

      <!-- Expiration Year -->
      <div class="form-floating mb-3">
        <input type="date" id="expirationYear" class="form-control" style="border-radius: 15px;">
        <label class="form-label" for="expirationYear">Expiration Year (YYYY)</label>
      </div>

      <!-- CVV -->
      <div class="form-floating mb-3">
        <input type="number" id="cvv" class="form-control" style="border-radius: 15px;">
        <label class="form-label" for="cvv">CVV</label>
      </div>

      <!-- Billing Zip Code -->
      <div class="form-floating mb-3">
        <input type="text" id="billingZip" class="form-control" style="border-radius: 15px;">
        <label class="form-label" for="billingZip">Billing Zip Code</label>
      </div>

      <!-- Submit button -->
      <button type="submit" class="w-100 btn btn-lg btn-primary">Get Report</button>
    </form>
  </div>
</div>

<!-- Footer Start -->
<?php include 'include/footer.php';?>
<!-- Footer End -->


