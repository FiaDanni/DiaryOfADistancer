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
                        if (empty($_POST["name"])) {
                            echo "<h6 style='color:red;'>*Name is required</h6>";
                        }
                        if (empty($_POST["email"])) {
                            echo "<h6 style='color:red;'>*Email is required</h6>";
                        }
                        if (empty($_POST["subject"])) {
                            echo "<h6 style='color:red;'>*Subject is required</h6>";
                        }
                        if (empty($_POST["message"])) {
                            echo "<h6 style='color:red;'>*message is required</h6>";
                        }
                        if (
                            !empty($_POST["name"]) &&
                            !empty($_POST["email"]) &&
                            !empty($_POST["subject"]) &&
                            !empty($_POST["message"])
                        ) {
                            $name = $_POST['name'];
                            echo "<h5 class='h5-responsive font-weight-bold my-4'>Thank you $name for getting in touch!</h5>
                                 <br/>";
                        }
                    }
                    ?>

                    <div class="text-center text-md-left" style='color:white;'>
                        <a class="btn btn-dark" onclick="document.getElementById('contact-form').submit();">Send</a>
                    </div>
                    <div class="status"></div>
                </div>
                <!--Grid column-->

                <!--Grid column-->

                <!--Grid column-->

            </div>

        </section>
        <!--Section: Contact v.2-->
    </div>

    <br>

    <?php
    include 'footer.php';
    ?>

    </html>