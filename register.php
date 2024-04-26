<?php
require "header.php";
?>

        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="assets/img/bg/breadcrumb_bg.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-content">
                                <h2 class="title">Register</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Register</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb-shape-wrap">
                    <img src="assets/img/images/breadcrumb_shape01.png" alt="" class="alltuchtopdown">
                    <img src="assets/img/images/breadcrumb_shape02.png" alt="" class="rotateme">
                </div>
            </section>
            <!-- breadcrumb-area-end -->

                   
                         
                    </div>
                    <div class="contact-form-wrap ">
                        <div class="row g-0 justify-content-center z-index-common">
                            <div class="col-57 order-0 order-lg-2">
                                <div class="contact-form">
                                   
                                    <form id="contact-form"  method="POST">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input type="text" name="name" placeholder="Enter you name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input type="email" name="email" placeholder="Enter you email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input type="number" name="number" placeholder="Mobile no">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input type="text" name="company" placeholder="Company">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-grp">
                                            <textarea name="message" placeholder="Enter you message....."></textarea>
                                        </div>
                                        <button type="submit" class="btn">Register</button>
                                    </form>
                                    <!-- <p class="ajax-response mb-0"></p> -->
                                </div>
                            </div>
                            <!-- <div class="col-43">
                                <div class="contact-map"> -->
                                    <!-- <iframe src="https://geo-devrel-javascript-samples.web.app/samples/style-array/app/dist/" allowfullscreen="" loading="lazy"></iframe> -->
                                <!-- </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

            <!-- document-area -->
           
      <?php
      require "footer.php";
      ?>