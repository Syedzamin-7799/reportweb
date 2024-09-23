<style>
/* General reset */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

/* Footer styling */
footer {
  background-color: rgb(58, 58, 58);
  width: 100%;
  padding: 20px 0; /* Reduced padding */
}

/* Container styling */
.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

/* Flexbox layout for the content */
.container .content {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: flex-start;
  padding: 20px 0; /* Reduced padding */
}

/* Column styling */
.col {
  display: flex;
  flex-direction: column;
  flex: 1;
  margin: 10px;
  min-width: 250px;
}

/* Logo and description */
.footer-logo {
  max-width: 150px;
  margin-bottom: 8px;
}

.col-info p {
  font-size: 14px;
  line-height: 1.4;
  margin: 8px 0;
  color: rgb(136, 136, 136);
}

/* Follow us text */
.follow-text {
  font-size: 16px;
  font-family: 'Roboto', sans-serif; /* Changed font */
  font-weight: bold;
  color: white;
  text-align: center;
  margin-bottom: 10px;
}

/* Social icons styling */
.social {
  display: flex;
  justify-content: center;
  gap: 12px; /* Spacing between icons */
}

.social img {
  width: 28px;
}

/* Footer bottom section */
.content-foot {
  background-color: rgb(43, 43, 43);
  padding: 15px 0; /* Reduced padding */
}

.foot-text {
  text-align: center;
  font-size: 14px;
  color: rgb(136, 136, 136);
}

.foot-text span {
  color: white;
  font-weight: bold;
}

.pay {
  display: flex;
  justify-content: center;
  gap: 15px;
}

.pay img {
  width: 60px;
  height: 30px;
  object-fit: contain;
  background-color: white;
  padding: 5px;
}

/* Media queries for responsiveness */
@media (max-width: 768px) {
  .container .content {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }
  
  .col {
    align-items: center;
  }
  
  .footer-logo {
    margin: 0 auto;
  }
  
  .follow-text, .social {
    justify-content: center;
  }
}
</style>

<footer>
  <div class="container">
    <div class="content">
      <div class="col">
        <div class="col-info">
          <a href="index.php">
            <img src="imgfinal/boathInsightfooter.png" alt="Boath Insight Logo" class="footer-logo">
          </a>
          <p>We aim to provide the best customer experience possible. If you need assistance, please use any of the options provided to the right.</p>
        </div>
      </div>

      <div class="col">
        <p class="follow-text">Follow us for more:</p>
        <div class="social">
          <a href="#"><img src="https://i.postimg.cc/44pPB9wk/facebook.png" alt="Facebook" /></a>
          <a href="https://x.com/boathinsight?t=C0W2_aiEjl6zSPaqNFyMPw&s=09"><img src="https://i.postimg.cc/L8Q3nB4f/twitter.png" alt="Twitter" /></a>
          <a href="https://www.instagram.com/boathinsight?igsh=bDdneGplZ25xdWlz"><img src="https://i.postimg.cc/TYG9S3Hy/instagram.png" alt="Instagram" /></a>
          <a href="https://mail.google.com/mail/u/0/#inbox"><img src="imgfinal/gmail.jpg" alt="Gmail" style="border-radius: 15px; margin-left: -2px;"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="content-foot">
    <div class="container">
      <div class="foot-text">
        <p>Copyright © 2024 BoatHinsight. All rights reserved.</p>
        <div class="pay">
          <img src="https://i.postimg.cc/PrtWyFPY/visa-logo-png-2013.png" alt="Visa" />
          <img src="https://i.postimg.cc/R0j1TSHZ/mastercard-PNG23.png" alt="MasterCard" />
          <img src="https://i.postimg.cc/sggJj0zs/paypal-logo-png-2119.png" alt="PayPal" />
        </div>
      </div>
    </div>
  </div>
</footer>
