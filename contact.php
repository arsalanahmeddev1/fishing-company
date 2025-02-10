<?php
$page_title = 'Contact';
include('./include/head.php');
include('./include/header.php');
?>

<section class="contact-header">
    <img src="./assets/images/contact/CONTACT-scaled.jpg" alt="Background Cover Image">
    <div class="text-heading">
        <h1>Contact</h1>
    </div>
</section>

<section class="info py-50">
    <div class="container">
        <div class="row gy-5 gy-lg-0">
            <div class="col-lg-6">
                <h2>Contact</h2>
                <p class="ultimatum-font">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>

                <!-- Form -->
                <form>
                    <div class="form-control border-0">
                        <label for="name">Name</label>
                        <input type="text" id="name" placeholder="Name">
                    </div>

                    <div class="form-control border-0">
                        <label for="emaik">Email</label>
                        <input type="email" id="emaik" placeholder="Email">
                    </div>

                    <div class="form-control border-0">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" placeholder="Message" rows=4></textarea>
                    </div>

                    <button type="submit">
                        SEND
                    </button>
                </form>
            </div>
            <div class="col-lg-6">
                <ul>
                    <li>
                        <a href="javascript:;">
                            <span><i class="fa-solid fa-envelope"></i></span>
                            info@website.com
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span><i class="fa-solid fa-location-dot"></i></span>
                            USA Address
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span><i class="fa-solid fa-phone"></i></span>
                            + 000 000 0000
                        </a>
                    </li>
                </ul>

                <div class="separator my-30"></div>

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d397938.80090126983!2d-106.575348!3d38.811916!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sus!4v1739214063652!5m2!1sen!2sus" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<?php include('./include/footer.php') ?>
<?php include('./include/scripts.php') ?>