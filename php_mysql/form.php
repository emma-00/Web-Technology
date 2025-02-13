<html>
    <head>
        <link rel="stylesheet"
        href="home.css">
    </head>
    <style>
.form {
  /* border: 2px solid rgb(4, 7, 99);
  border-radius: 10px; */
  /* box-shadow: 5px 5px 5px rgb(4, 7, 99); */
  margin: 50px auto; /* Center the form horizontally */
  padding: 20px;
  max-width: 600px; /* Restrict form width */
  background-color: white;
  margin-top: 150px;
}

body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}
.entry label{
  margin: 30px;
}

.head {
  margin: 20px auto;
}

.submit {
  display: flex;
  justify-content: center;
}

.register {
  margin: 20px;
  padding: 10px 20px;
  border: none;
  border-radius: 15px;
  background-color: rgb(7, 7, 105);
  color: white;
  cursor: pointer;
}
#ele{
margin: 10px;
  margin-top: 10px;
}
.register:hover {
  background-color: rgb(4, 4, 70);
}
#block{
  margin: 30px;
}
.entry{
  margin-bottom: 20px;
}
.midd{
  width: 280px;
  height: 30px;
}
.mid{
  width: 570px;
  height: 30px;
}
    </style>
    <body>
      <div id="header">
        <div class="top-bar">
          <span id="logo"><img src="logoo.jpg" ></span>
          <span id="search-container">
            <input type="text" id="search" name="search" placeholder="Search for items...">
            <img src="search.svg" alt="Search" /> <!-- Replace with search icon -->
          </span>
          <div id="info"><span> +977 9822333456</span>
            <span> Patan Dhoka, Lalitpur, Nepal</span>
            <span> isupport@example.com</span>
          </div>
        </div>
              
            <div id="navbar">
                <a href="#">Home</a>
                <a href="#">Product</a>
                <a href="#">Catagories</a>
            </div>
            <div id="register">
                <a href="http://127.0.0.1:5500/Website_Proj/user_register_form.html">Register</a>
                <a href="http://127.0.0.1:5500/Website_Proj/user_register_form.html">Log in</a>
    
            </div>
        </div>
        
          <!-- Registration Form -->
          <form action="display.php" method="POST">
            <div class="form">
              <h1 style="color: rgb(40, 4, 131);" class="head">User Registration</h1>
        
              <!-- Personal Info -->
              <div id="block">
                <b class="topic">Personal Info</b>
                <div id="ele">
                  <table class="entry">
                    <tr>
                      <td>First name</td>
                      <td>Last name</td>
                    </tr>
                    <tr>
                      <td><input type="text" name="firstname" id="firstname" class="midd"></td>
                      <td><input type="text" name="lastname" id="lastname" class="midd"></td>
                    </tr>
                  </table>
                  <label for="dob" class="entry">Date of Birth</label>
                  <div >
                    <input type="date" name="dob" id="dob" class="entry">
                  </div>
        
                  <label>Select your gender</label>
                  <div class="entry">
                    <input type="radio" name="gender" value="female" class="radio" id="female">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" value="male" class="radio" id="male">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" value="other" class="radio" id="other">
                    <label for="other">Other</label>
                  </div>
        
                  <label for="phone">Phone Number</label>
                  <div>
                    <input type="tel" name="phone" id="phone" maxlength="10" class="midd" required>
                    <div id="phone_alert"></div>
                  </div>
                </div>
              </div>
        
              <!-- Address -->
              <div id="block">
                <b class="topic">Address</b>
                <div id="ele">
                  <label for="country" >Country</label>
                  <div class="entry">
                    <input type="text" name="country" id="country" class="midd" >
                  </div>
        
                  <table class="entry">
                    <tr>
                      <td><label for="prov">Province</label></td>
                      <td><label for="cit">City</label></td>
                    </tr>
                    <tr>
                      <td>
                        <select name="prov" class="midd">
                          <option value="Bagmati">Bagmati</option>
                          <option value="Koshi">Koshi</option>
                          <option value="Sudur">Sudurpaschim</option>
                          <option value="Gandaki">Gandaki</option>
                          <option value="Lumbini">Lumbini</option>
                          <option value="Karnali">Karnali</option>
                          <option value="Madesh">Madesh</option>
                        </select>
                      </td>
                      <td><input type="text" name="cit" id="cit" class="midd"></td>
                    </tr>
                  </table>
        
                  <label for="addr">Street Address</label>
                  <div>
                    <input type="text" name="addr" id="addr" class="mid">
                  </div>
                </div>
              </div>
        
              <!-- Account Credentials -->
              <div id="block">
                <b class="topic">Account Credentials</b>

                <div id="ele" >
                  <label for="email"  >Email Address</label>
                  <div class="entry">
                    <input type="email" name="email" id="email" class="midd">
                    <div id="email_alert"></div>
                  </div>
        
                  <label for="pass">Password</label>
                  <div class="entry">
                    <input type="password" name="password" id="password" class="midd" >
                  </div>
        
                  <label for="pic">Profile Picture</label>
                  <input type="file" name="pic" id="pic" >
                </div>
              </div>
        
              <div class="submit">
                <input type="submit" class="register" value="submit">
              </div>
              
            </div>
          </form>
          <div class="footer">
            <div class="footer-container">
              <div class="footer-section">
                <h4>About Us</h4>
                <p>Your trusted e-commerce platform for high-quality products at affordable prices.</p>
              </div>
              <div class="footer-section">
                <h4>Customer Support</h4>
                <ul>
                  <li><a href="#">Help Center</a></li>
                  <li><a href="#">Shipping Policy</a></li>
                  <li><a href="#">Returns & Refunds</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <!-- <div class="footer-section">
                <h4>Follow Us</h4>
                <div class="social-icons">
                  <a href="#" class="social-icon"><img src="facebook-icon.png" alt="Facebook"></a>
                  <a href="#" class="social-icon"><img src="twitter-icon.png" alt="Twitter"></a>
                  <a href="#" class="social-icon"><img src="instagram-icon.png" alt="Instagram"></a>
                  <a href="#" class="social-icon"><img src="linkedin-icon.png" alt="LinkedIn"></a>
                </div>
              </div> -->
              <div class="footer-section">
                <h4>Newsletter</h4>
                <form class="newsletter-form">
                  <input type="email" placeholder="Enter your email" required>
                  <button type="submit">Subscribe</button>
                </form>
              </div>
            </div>
            <div class="footer-bottom">
              <p>&copy; 2025 Your E-commerce Website. All rights reserved.</p>
            </div>
          </div>
          <a href="#top" id="totop">⬆</a>

<script>

function verify() {
           var phone = document.getElementById("phone").value;
            var phoneformat = /^[0-9]{10}$/;

            if (phone.match(phoneformat)) {
                document.getElementById("phone_alert").innerText = ""; // Clear any error message
                return true; // Allow form submission
            } else {
                document.getElementById("phone_alert").innerText = "Please enter a correct phone number."; // Show error message
                event.preventDefault(); // Prevent form submission
                return false; // Block form submission
            }

    // var email = document.getElementById("email").value; // Get the email input value
    // var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; // Regex for valid email format
    // invalid_message="Email is not valid. Please enter a correct email"

    // if (email.match(mailformat)) {
    //   document.getElementById("email_alert").innerText=" ";
    // }
    // else{
    //   document.getElementById("email_alert").innerText=invalid_message;


    // }
}


     
</script>
    </body>
</html>