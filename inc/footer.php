<?php
function sanitize_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = sanitize_input($_POST['name-newsletter']);
  $email = sanitize_input($_POST['email-newsletter']);

    // Validate the input values
    if (!empty($name) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Connect to the database and insert the data
        $servername = "localhost";
        $username = "samgray";
        $password = "qhfQpSI1nQ6@qd0v";
        $dbname = "samgray_netmatters";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO newsletter (name, email)
                VALUES ('$name', '$email')";

        if ($conn->query($sql) === TRUE) {
            // Data inserted successfully
            $conn->close();
        } else {
            // Error inserting data
            $conn->close();
        }
    } else {
    }
}
?>
<div class="newsletter-background">
  <div class="width">
    <h2 class="newsletter-h2">Email Newsletter Sign-Up</h2>
    <form action="#" method="POST" class="form">
  <div class="form-item-container">
    <div class="form-item">
      <label for="name-newsletter"><strong>Your Name</strong> <span class="red-star">*</span></label><br>
      <input type="text" class="form-input" id="name-newsletter" name="name-newsletter">
    </div>

    <div class="form-item">        
      <label for="email-newsletter"><strong>Your Email</strong> <span class="red-star">*</span></label><br>
      <input type="email" class="form-input" id="email-newsletter" name="email-newsletter">
    </div>
  </div>
  <div class="checkbox-container">
    <input type="checkbox" id="cb1">
    <label for="cb1">Please tick this box if you wish to receive marketing information from us. Please see our <a href="#" class="underline" style="display: contents;">Privacy Policy</a> for more information on how we keep your data safe.</label>
  </div>

  <button class="form-button" type="submit">
    <span class="form-button__text">Subscribe</span>
  </button>
</form>
  </div>
</div>
</main> 

<footer>
<!--FOOTER-->

  <div class="footer-container">
    <div class="width">
      <div class="footer-container-row">
        <div class="service">
        <div class="services">
        <h4>About Netmatters</h4>
        <ul>
          <li>News</li>
          <li>Our Careers</li>
          <li>Our Team</li>
          <li>Privacy Policy</li>
          <li>Cookie Policy</li>
          <li>Terms &amp; Conditions</li>
          <li>Environmental Policy</li>
          <li>Contact Us</li>
        </ul>
        </div>
        <div class="services">
        <h4>Our Services</h4>
        <ul>
          <li>Bespoke Software</li>
          <li>IT Support</li>
          <li>Digital Marketing</li>
          <li>Telecoms Services</li>
          <li>Web Design</li>
          <li>Cyber Security</li>
          <li>Developer Training</li>
        </ul>
      </div>
    </div>
      <div class="offices">
        <div class="office">
          <h4>Cambridge Office</h4>
          <ul>
            <li>Unit 1.31,</li>
            <li>St John's Innovation Centre,</li>
            <li>Cowley Road, Milton,</li>
            <li>Cambridge</li>
            <li>CB4 0WS</li>
            <li>&nbsp;</li>
            <li><a href="tel:01223375772">Tel: 01223 37 57 72</a></li>
          </ul>
        </div>
        <div class="office">
          <h4>Wymondham Office</h4>
          <ul>
            <li>Unit 15,</li>
            <li>Penfold Drive,</li>
            <li>Gateway 11 Business Park</li>
            <li>Wymondham, Norfolk,</li>
            <li>NR18 0WZ</li>
            <li>&nbsp;</li>
            <li><a href="tel:0160704020">Tel: 01603 70 40 20</a></li>
          </ul>
        </div>
        <div class="office">
          <h4>Great Yarmouth Office</h4>
          <ul>
            <li>Suite F23</li>
            <li>Beacon Innovation Centre,</li>
            <li>Beacon Park, Gorleston,</li>
            <li>Great Yarmouth, Norfolk,</li>
            <li>NR31 7RA</li>
            <li>&nbsp;</li>
            <li><a href="tel:01493603204">Tel: 01493 60 32 04</a></li>
          </ul>
        </div>
      </div>
  </div>
  </div>
</div>

<div class="width4">
<div class="copyright-container">
  <div class="copyright">
    © Copyright Netmatters 2023. All rights reserved. - Sitemap
  </div>
  <div class="social-media">
    <i class="fa-brands social-padding fa-facebook"></i><i class="fa-brands social-padding fa-twitter"></i><i class="fa-brands social-padding fa-instagram"></i><i class="fa-brands social-padding fa-linkedin-in"></i>
  </div>
</div>
</div>
</footer>