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
                <li><a class="<?php echo ($currentPage === 'my-profile') ? 'active' : ''; ?>" href="my-profile.php"><i class="fa-solid fa-user"></i> <span>My Profile</span></a></li>
                <li><a class="<?php echo ($currentPage === 'community-feed') ? 'active' : ''; ?>" href="community-feed.php"><i class="fa-solid fa-people-group"></i> <span>Community Feed</span></a></li>
                <li><a class="<?php echo ($currentPage === 'messages') ? 'active' : ''; ?>" href="messages.php"><i class="fa-solid fa-message"></i> <span>Messages</span></a></li>
                <li><a class="<?php echo ($currentPage === 'prayer-requests') ? 'active' : ''; ?>" href="prayer-requests.php"><i class="fa-solid fa-hands-praying"></i> <span>Prayer Requests</span></a></li>
                <li><a class="" href="bible.php"><i class="fa-solid fa-bible"></i> <span>Read Bible</span></a></li>
                <li><a class="<?php echo ($currentPage === 'chat') ? 'active' : ''; ?>" href="chat.php"><i class="fa-solid fa-comment-dots"></i> <span>Chat Rooms</span></a></li>
                <li><a class="<?php echo ($currentPage === 'payment-history') ? 'active' : ''; ?>" href="payment-history.php"><i class="fa-solid fa-comment-dots"></i> <span>Payment History</span></a></li>
                <li><a class="<?php echo ($currentPage === 'settings') ? 'active' : ''; ?>" href="settings.php"><i class="fa-solid fa-gear"></i> <span>Settings</span></a></li>

                <li class="logout-btn logout-toggle"><a href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <span>Logout</span></a></li>
            </ul>
        </aside>
        <div class="overlay"></div>