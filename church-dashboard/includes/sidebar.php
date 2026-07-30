        <aside class="side-bar" id="sidebar">
            <div class="side-close-btn">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <a href="index.php" class="logo">
                <img src="assets/img/logo.png" class="big-logo" alt="Logo">
                <h4 class="small-logo hide">LG</h4>
            </a>
            
            <ul class="links">
                <li><a class="<?php echo ($currentPage === 'home') ? 'active' : ''; ?>" href="index.php"><i class="fa-solid fa-house"></i> <span>Home</span></a>
                </li>
                <li><a class="<?php echo ($currentPage === 'my-church') ? 'active' : ''; ?>" href="my-church.php"><i class="fa-solid fa-church"></i> <span>My Church</span></a></li>
                <li><a class="<?php echo ($currentPage === 'prayer-requests') ? 'active' : ''; ?>" href="prayer-requests.php"><i class="fa-solid fa-hands-praying"></i> <span>Prayer Requests</span></a></li>
                <li><a class="<?php echo ($currentPage === 'media-gallary') ? 'active' : ''; ?>" href="media-gallary.php"><i class="fa-solid fa-people-group"></i> <span>Media gallary</span></a></li>
                <li><a class="<?php echo ($currentPage === 'chat') ? 'active' : ''; ?>" href="chat.php"><i class="fa-solid fa-comment-dots"></i> <span>Chat</span></a></li>
                <li><a class="<?php echo ($currentPage === 'sermons') ? 'active' : ''; ?>" href="upload-sermons.php"><i class="fa-solid fa-video"></i> <span>Upload Sermons</span></a></li>
                <li><a class="<?php echo ($currentPage === 'podcasts') ? 'active' : ''; ?>" href="upload-podcasts.php"><i class="fa-solid fa-podcast"></i> <span>Upload Podcasts</span></a></li>
                <li><a class="<?php echo ($currentPage === 'announcements') ? 'active' : ''; ?>" href="announcements.php"><i class="fa-solid fa-bullhorn"></i> <span>Announcements</span></a></li>
                <li><a class="<?php echo ($currentPage === 'followers') ? 'active' : ''; ?>" href="followers.php"><i class="fa-solid fa-people-group"></i> <span>Followers</span></a></li>
                <li><a class="<?php echo ($currentPage === 'settings') ? 'active' : ''; ?>" href="settings.php"><i class="fa-solid fa-gear"></i> <span>Settings</span></a></li>

                <li class="logout-btn logout-toggle"><a href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <span>Logout</span></a></li>
            </ul>
        </aside>
        <div class="overlay"></div>