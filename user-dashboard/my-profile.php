<?php include 'includes/header.php'; ?>

    <div class="dashboard">
        <?php
        $currentPage = "my-profile";
        include 'includes/sidebar.php'; ?>
        <div class="main">
            <?php include 'includes/topbar.php'; ?>
            <main class="content">
                <div class="row row-gap-3">
                    <div class="col-12 col-md-6">
                        <div class="church-profile-img" style="background: #00000094 url(assets/img/profile-pic.avif)">
                            <h4>John Smith</h4>
                            <a href="edit-profile.php" class="theme-btn primary"><i class="fa-solid fa-pen"></i> Edit Profile</a>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="profile-info">  
                            <h5>Profile</h5>
                            <div class="info-box">
                                <div class="info">
                                   <i class="fa-solid fa-location-dot"></i>
                                    <p class="para black"><strong>Address</strong></p>
                                </div>
                                 <p class="para black two">123 Faith Way, Orlando, FL 32801, USA</p>
                            </div>
                            <div class="info-box">
                                <div class="info">
                                    <i class="fa-solid fa-phone"></i>
                                    <p class="para black"><strong>Phone</strong></p>
                                </div>
                                 <p class="para black two">+123456789</p>
                            </div>
                            <div class="info-box">
                                <div class="info">
                                    <i class="fa-solid fa-cake-candles"></i>
                                    <p class="para black"><strong>Date of Birth</strong></p>
                                </div>
                                 <p class="para black two">06/09/2005</p>
                            </div>
                            <div class="info-box">
                                <div class="info">
                                    <i class="fa-solid fa-envelope"></i>
                                    <p class="para black"><strong>Email</strong></p>
                                </div>
                                 <p class="para black two">info@domain.com</p>
                            </div>
                            <div class="info-box">
                                <div class="info">
                                    <i class="fa-solid fa-users"></i>
                                    <p class="para black"><strong>gender</strong></p>
                                </div>
                                 <p class="para black two">Male</p>
                            </div>

                            <h5 class="statement-hd">Bio</h5> 
                            <p class="para black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A necessitatibus nemo voluptatum delectus veritatis quidem dolores ab doloribus explicabo cumque?</p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>