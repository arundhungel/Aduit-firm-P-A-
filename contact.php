<!doctype html>
<html class="no-js" lang="">
    <head>

      <?php include 'includes/head.php'; ?>
        
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->


    <!-- Header-top Starts -->
        <?php include 'includes/header-top.php'; ?>
    <!-- Header-top Ends -->
    
    <!-- Header Starts -->
        <?php include 'includes/header.php'; ?>
    <!-- Header Ends -->

    <!-- Navbar Starts -->

        <?php include 'includes/nav.php'; ?>

    <!-- Navbar Ends -->

      <!-- Conatact Starts -->
    <div class="contact contact-page">
        <div class="container">
            <div class="location-section row">
              <h4 class="col s12">
                Find Us.
              </h4>
              <div class="location-map col s12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.386167469232!2d85.3185696146562!3d27.70536078279268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a82ddb16b7%3A0x8576a79cbff7122f!2sPrayas+%26+Associates%2C+Chartered+Accountants!5e0!3m2!1sen!2snp!4v1490004613231" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
            <div class="form row">
              <h4 class="col s12">
                  Contact Us.
              </h4>
              <form class="col s12">
                  <div class="row">
                      <div class="input-field col m5 s12">
                        <input  id="full_name" type="text" class="validate" required="">
                        <label for="full_name">Full Name</label>
                      </div>
                      <div class="input-field col m6 s12 offset-m1">
                        <input  id="comp_name" type="text" class="validate">
                        <label for="comp_name">Company/Organization Name</label>
                      </div>
                      
                  </div>
                  <div class="row">
                      
                      <div class="input-field col m4 s12">
                        <input id="contact-no" type="text" class="validate" required="">
                        <label for="contact-no">Contact No.</label>
                      </div>
                      <div class="input-field col m5 s12 offset-m1">
                        <input id="email" type="email" class="validate" required="">
                        <label for="email">Email</label>
                      </div>
                  </div>
               
                  <div class="row">
                      <div class="input-field col m8 s12">
                          <textarea id="textarea1" class="materialize-textarea" required=""></textarea>
                          <label for="textarea1">Message or Inquiry</label>
                      </div>
                      <div class="col md12 s12">
                          <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                              <i class="material-icons right">send</i>
                          </button>
                      </div>
                  </div>
                  
              </form>
            </div>
        </div>
    </div>
<!-- Conatact Ends -->

        <?php include 'includes/footer.php'; ?>
        

        <?php include 'includes/end-script.php'; ?>

    </body>
</html>
