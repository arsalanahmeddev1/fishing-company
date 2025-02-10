<?php
$page_title = 'Gallery';
include('./include/head.php');
include('./include/header.php');
?>

<section class="grid-section">
    <div class="container">
        <div class="row gy-5 gy-lg-0">
            <!-- Top 2 Images -->
            <div class="col-lg-6">
                <div class="img-wrapper">
                    <img src="./assets/images/gallery/01.jpg" alt="Image 01">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="img-wrapper">
                    <img src="./assets/images/gallery/02.jpg" alt="Image 02">
                </div>

            </div>

            <!-- Bottom 2 Images -->
            <div class="col-lg-6">
                <div class="img-wrapper">
                    <img src="./assets/images/gallery/03.jpg" alt="Image 01">
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="img-wrapper">
                    <img src="./assets/images/gallery/04.jpg" alt="Image 02">
                </div>

            </div>
        </div>
    </div>
    </div>
</section>

<section class="gallery-image-section">
    <div class="container">
        <img src="./assets/images/gallery/cover-img.jpg" alt="Cover Image">
    </div>
</section>

<?php include('./include/footer.php') ?>
<?php include('./include/scripts.php') ?>