
 <style>
/* General Styling */
.container-xxl {
  padding: 60px 15px; /* Adjusted for smaller screens */
}

.text-primary {
  color: #dc3545 !important; /* Red Color */
}

form:hover {
  box-shadow: 0 0 25px rgba(0, 0, 0, 0.2);
}

.form-floating {
  position: relative;
  width: 100%; /* Ensure form-floating takes full width */
}

.form-floating .form-control {
  border: none;
  border-bottom: 2px solid #e0e0e0;
  padding: 10px; /* Adjusted padding for smaller screens */
  font-size: 14px; /* Adjusted font size for smaller screens */
  background-color: transparent;
  transition: all 0.3s ease;
}

.form-floating .form-control:focus {
  border-color: #dc3545; /* Red Color */
  background-color: #fff;
  box-shadow: none;
}

.form-floating label {
  padding-left: 10px; /* Adjusted padding for smaller screens */
  color: #999;
}

.form-control {
  border-radius: 10px !important;
}

.btn-primary {
  background-color: #dc3545; /* Red Color */
  border: none;
  border-radius: 50px;
  padding: 10px 20px; /* Adjusted padding for smaller screens */
  font-size: 16px; /* Adjusted font size for smaller screens */
  transition: background-color 0.3s ease;
}

.btn-primary:hover {
  background-color: #bb2d3b; /* Darker Red on Hover */
}

/* Responsive Styles */
@media (max-width: 767px) {
  .container-xxl {
    padding: 30px 15px; /* Adjusted for smaller screens */
  }

  form {
    padding: 15px; /* Adjusted padding for smaller screens */
    max-width: 100%; /* Ensure the form takes full width on small screens */
    width: auto; /* Allow width to adjust automatically */
  }

  .form-floating .form-control {
    font-size: 14px; /* Adjusted font size for smaller screens */
  }

  .btn-primary {
    padding: 10px 20px; /* Adjusted padding for smaller screens */
    font-size: 16px; /* Adjusted font size for smaller screens */
  }
}


</style>
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s" id="CONTACT">
  <div class="container">
  

    <form class="p-md-5 border rounded-3 bg-body-tertiary">
    <div class="text-center">
      <h2 class="text-primary text-uppercase">Contact Us</h2>
      <h5 class="mb-5">Contact for any query</h5>
    </div>
      <!-- Name input -->
      <div class="form-floating mb-3">
        <input type="text" id="form4Example1" class="form-control" style="border-radius: 15px;">
        <label class="form-label" for="form4Example1">Name</label>
      </div>

      <!-- Email input -->
      <div class="form-floating mb-3">
        <input type="email" id="form4Example2" class="form-control" style="border-radius: 15px;">
        <label class="form-label" for="form4Example2">Email address</label>
      </div>

      <!-- Phone input -->
      <div class="form-floating mb-3">
        <input type="text" id="form4Example3" class="form-control" style="border-radius: 15px;">
        <label class="form-label" for="form4Example3">Phone</label>
      </div>

      <!-- Message input -->
      <div class="form-floating mb-3">
        <input type="text" id="form4Example4" class="form-control" style="border-radius: 15px;">
        <label class="form-label" for="form4Example4">Message</label>
      </div>

      <!-- Submit button -->
      <button type="submit" class="w-100 btn btn-lg btn-primary">Send</button>
    </form>
  </div>
</div>

