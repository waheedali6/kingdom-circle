<?php include 'includes/header.php'; ?>

    <div class="dashboard">
        <?php
        $currentPage = "my-church";
        include 'includes/sidebar.php'; ?>
        <div class="main">
            <?php include 'includes/topbar.php'; ?>
            <main class="content">
                <div class="row">
                    <div class="col-12 col-md-12">
                       <div class="profile-info">  
                           <form action="">
                        <div class="row">
                            <h5 class="edit-hd">Church information</h5>
                            <div class="col-12 col-md-4">
                                <div class="input-side">
                                    <div class="edit-box profile-box">
                                        <h6 class="label">Profile Picture</h6>
                                        <img src="assets/img/church-profile-img.jfif" class="profile-img" alt="">
                                        <a href="javascript:void(0)" class="theme-btn secondary"><i class="fa-solid fa-upload"></i> Upload New</a>
                                        <p class="para black">JPG, PNG or WEBP. Max 2MB.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-8">
                                <div class="input-side">
                                    <div class="edit-box">
                                        <h6 class="label">Church Name</h6>
                                        <div class="input-box form-control">
                                            <input type="text" value="Grace Fellowship Church">
                                        </div>
                                    </div>
                                    <div class="edit-box">
                                        <h6 class="label">Tagline / Short Description</h6>
                                        <div class="input-box form-control">
                                            <input type="text" value="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est, sunt!">
                                        </div>
                                    </div>
                                    <div class="edit-box">
                                        <h6 class="label">Address</h6>
                                        <div class="input-box form-control">
                                            <input type="text" value="123 Faith Way, Orlando, FL 32801, USA">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="input-side">
                                    <div class="edit-box">
                                        <h6 class="label">Pastor / Leader Name</h6>
                                        <div class="input-box form-control">
                                            <input type="text" value="Pastor John Smith">
                                        </div>
                                    </div>
                                    <div class="edit-box">
                                        <h6 class="label">Phone</h6>
                                        <div class="input-box form-control">
                                            <input type="tel" value="+123456789">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="input-side">
                                    <div class="edit-box">
                                        <h6 class="label">Email</h6>
                                        <div class="input-box form-control">
                                            <input type="email" value="info@domain.com">
                                        </div>
                                    </div>
                                    <div class="edit-box">
                                        <h6 class="label">Website</h6>
                                        <div class="input-box form-control">
                                            <input type="tel" value="domain.com">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="edit-box  textarea">
                                    <h6 class="label">Mission Statement</h6>
                                    <div class="input-box form-control">
                                        <textarea name="" id="" rows="2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A necessitatibus nemo voluptatum delectus veritatis quidem dolores ab doloribus explicabo cumque?</textarea>
                                    </div>
                                </div>
                                <div class="form-btns">
                                    <button class="theme-btn secondary"> Cancel</button>
                                    <button type="submit" class="theme-btn primary"> Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>