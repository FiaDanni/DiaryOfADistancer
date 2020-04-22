<?php
include 'header.php';
   ?>
  
<body>

<div id="container">
    <!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h1 class="h1-responsive font-weight-bold my-4">Contact Me</h1>
    <!--Section description-->
    <p class="w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact me. I will respond to you within
        72 hours.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
             <form id="contact-form" name="contact-form" action="" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>
           
           <?php
          if ($_POST) {
            $name = $_POST['name'];
            echo "<h5 class='h5-responsive font-weight-bold my-4'>Thank you $name for getting in touch!</h5>
            <br/>";
          }
          ?>

            <div class="text-center text-md-center" style="color:white;">
                <a class="btn btn-dark" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <br>
        <!--Grid column-->

        <!--Grid column-->
        
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->

<footer id="footer">
    <!-- Bootstrap Footer -->
<footer class="page-footer font-small blue pt-4">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3">

      <!-- Content -->
      <h5 class="text-uppercase">CONTENT DISCLAIMER</h5>
      <p>All views and opinions expressed on the blog are solely mine.<br>
       They do not express the views or opinions of my partnered organisations <br> 
       and I accept no liability for information shared.

      </p>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none pb-3">

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase">USEFUL LINKS</h5>

      <ul class="list-unstyled">
        <li>
          <a href="#!">ABOUT ME</a>
        </li>
        <li>
          <a href="#!">FAQS</a>
        </li>
        <li>
          <a href="#!">CONTACT ME</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase">USEFUL LINKS</h5>

      <ul class="list-unstyled">
        <li>
          <a href="#!">BLOG</a>
        </li>
        <li>
          <a href="#!">NEWSLETTER</a>
        </li>
        <li>
          <a href="#!">BACK TO TOP</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

</footer>
</div>
</body>
</html>
