<?php include 'includes/header.php'; ?>

    <div class="dashboard">
        <?php
        $currentPage = "sermons";
        include 'includes/sidebar.php'; ?>
        <div class="main">
            <?php include 'includes/topbar.php'; ?>
            <main class="content">
                <div class="row">
                    <div class="col-12 col-md-12">
                       <div class="profile-info">  
                           <form action="">
                                <div class="row">
                                    <h5 class="edit-hd">Sermon Details</h5>
                                    <div class="col-12 col-md-6">
                                        <div class="input-side">
                                            <div class="edit-box">
                                                <h6 class="label">Title *</h6>
                                                <div class="input-box form-control">
                                                    <input type="text" placeholder="Enter sermon title" required>
                                                </div>
                                            </div>
                                            <div class="edit-box">
                                                <h6 class="label">Date Preached *</h6>
                                                <div class="input-box form-control">
                                                    <input type="date" placeholder="Select date" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-side">
                                            <div class="edit-box">
                                                <h6 class="label">Speaker / Pastor</h6>
                                                <div class="input-box form-control">
                                                    <input type="text" placeholder="Enter speaker name">
                                                </div>
                                            </div>
                                            
                                            <div class="edit-box">
                                                <h6 class="label">Category</h6>
                                                    <select class="input-box form-control">
                                                        <option value="1">option 1</option>
                                                        <option value="1">option 2</option>
                                                        <option value="1">option 3</option>
                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <div class="edit-box  textarea">
                                            <h6 class="label">Description</h6>
                                            <div class="input-box form-control">
                                                <textarea name="" id="" rows="2" placeholder="Write a short description about this sermon"></textarea>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-side">
                                            <div class="edit-box">
                                                <h6 class="label">Upload video File *</h6>
                                                <div class="input-box form-control">
                                                    <input type="file" required>
                                                </div>
                                                <p class="para black mt-2">MP4, MOV, or AVI (Max, 2GB)</p>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="input-side">
                                             <div class="edit-box">
                                                <h6 class="label">Sermon Thumbnail *</h6>
                                                <div class="input-box form-control">
                                                    <input type="file" required>
                                                </div>
                                                <p class="para black mt-2">Recommended size: 1280x720px</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <div class="form-btns">
                                            <button type="submit" class="theme-btn primary"> Publish Sermon</button>
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