<?php include 'includes/header.php'; ?>

    <div class="dashboard">
        <?php
        $currentPage = "community-feed";
        include 'includes/sidebar.php'; ?>
        <div class="main">
           <?php include 'includes/topbar.php'; ?>
            <main class="content">
                <div class="main-title"> <h3>Community Feed</h3></div>
                <div class="row row-gap-4">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 order-2 order-lg-1">
                        <div class="post-box">
                          <div class="input-box">
                            <img src="assets/img/men.png" alt="">
                            <div class="input-box form-control">
                                <input type="text" name="post" id="" placeholder="What's on your heart?">
                            </div>
                          </div>
                          <div class="upload-box">
                            <div class="left">
                                <a href="javascript:void(0)"><div class="p-image">
                                  <i class="fa-solid fa-image upload-button"></i>
                                  <input class="file-upload" type="file" accept="image/*">
                                </div> <span class="upload-button">Photo</span></a>
                                <a href="javascript:void(0)"><div class="p-image">
                                  <i class="fa-solid fa-video upload-button"></i>
                                  <input class="file-upload" type="file" accept="video/*">
                                </div> <span class="upload-button">Video</span></a>
                                <a href="#"><i class="fa-solid fa-hands-praying"></i> Prayer Request</a>
                                
                            </div>
                            <div class="right">
                              <a href="javascript:void(0)" class="theme-btn primary sm">Post</a>
                            </div>
                          </div>
                        </div>  


                        <div class="com-box">
                          <div class="new">
                            <div class="req-box post">
                              <div class="chat">
                                <img src="assets/img/church-profile-img.jfif" class="post-author" alt="">
                                <div class="com-content">
                                    <h5>Grace Community Church</h5>
                                    <p>2 hour ago</p>
                                </div>
                              </div>
                              <p class="post-para para black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut asperiores ea tempora rem explicabo, fugit natus cumque incidunt ut ex quos laborum, beatae officiis voluptas, dolorem iste voluptatem voluptatum odio.</p>
                              <img class="post-img" src="assets/img/ab_1.jpg" alt="">
                              <div class="post-footer">
                              <div class="com-footer">
                                <div class="b">
                                  <a href="#" class="active"><i class="fa-solid fa-heart"></i> 24</a>
                                  <a href="#" class="comment-btn"><i class="fa-solid fa-comment"></i> 6</a>
                                </div>
                                <a href="#"><i class="fa-solid fa-share"></i> Share</a>
                              </div>
                              <div class="comments">
                                <form class="add-comment" action="">
                                  <div class="comment">
                                    <img src="assets/img/profile-pic.avif" alt="">
                                    <input type="text" class="form-control" placeholder="Say something...">
                                    <button class="theme-btn primary sm">Add comment</button>
                                  </div>
                                </form>
                                <div class="comment">
                                  <img src="assets/img/church-profile-img.jfif" alt="">
                                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima labore ipsum magnam quos numquam, doloribus dolorem eveniet asperiores earum, voluptas minus eligendi animi ullam debitis voluptates officia natus dolorum quidem!</p>
                                </div>
                                <div class="comment">
                                  <img src="assets/img/church-profile-img.jfif" alt="">
                                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima labore ipsum magnam quos numquam, doloribus dolorem eveniet asperiores earum, voluptas minus eligendi animi ullam debitis voluptates officia natus dolorum quidem!</p>
                                </div>
                                <div class="comment">
                                  <img src="assets/img/church-profile-img.jfif" alt="">
                                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima labore ipsum magnam quos numquam, doloribus dolorem eveniet asperiores earum, voluptas minus eligendi animi ullam debitis voluptates officia natus dolorum quidem!</p>
                                </div>
                              </div>
                              </div>
                            </div>
                         
                          </div>
                        </div>
                        <div class="com-box">
                          <div class="new">
                            <div class="req-box post">
                              <div class="chat">
                                <img src="assets/img/church-profile-img.jfif" class="post-author"  alt="">
                                <div class="com-content">
                                    <h5>Grace Community Church</h5>
                                    <p>2 hour ago</p>
                                </div>
                              </div>
                              <p class="post-para para black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut asperiores ea tempora rem explicabo, fugit natus cumque incidunt ut ex quos laborum, beatae officiis voluptas, dolorem iste voluptatem voluptatum odio.</p>
                                <video src="../assets/images/video-tip.mp4" autoplay="" loop="" muted="" controls="true" class="img-fluid post-img"></video>
                              <div class="post-footer">
                                <div class="com-footer">
                                  <div class="b">
                                    <a href="#"><i class="fa-solid fa-heart"></i> 24</a>
                                    <a href="#" class="comment-btn"><i class="fa-solid fa-comment"></i> 6</a>
                                  </div>
                                  <a href="#"><i class="fa-solid fa-share"></i> Share</a>
                                </div>
                                <div class="comments">
                                  <form class="add-comment" action="">
                                  <div class="comment">
                                    <img src="assets/img/profile-pic.avif" alt="">
                                    <input type="text" class="form-control" placeholder="Say something...">
                                    <button class="theme-btn primary sm">Add comment</button>
                                  </div>
                                </form>
                                  <div class="comment">
                                    <img src="assets/img/church-profile-img.jfif" alt="">
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima labore ipsum magnam quos numquam, doloribus dolorem eveniet asperiores earum, voluptas minus eligendi animi ullam debitis voluptates officia natus dolorum quidem!</p>
                                  </div>
                                  <div class="comment">
                                    <img src="assets/img/church-profile-img.jfif" alt="">
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima labore ipsum magnam quos numquam, doloribus dolorem eveniet asperiores earum, voluptas minus eligendi animi ullam debitis voluptates officia natus dolorum quidem!</p>
                                  </div>
                                  <div class="comment">
                                    <img src="assets/img/church-profile-img.jfif" alt="">
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima labore ipsum magnam quos numquam, doloribus dolorem eveniet asperiores earum, voluptas minus eligendi animi ullam debitis voluptates officia natus dolorum quidem!</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                         
                          </div>
                        </div>
                        <div class="com-box">
                          <div class="new">
                            <div class="req-box post">
                              <div class="chat">
                                <img src="assets/img/church-profile-img.jfif" class="post-author" alt="">
                                <div class="com-content">
                                    <h5>Grace Community Church</h5>
                                    <p>2 hour ago</p>
                                </div>
                              </div>
                              <p class="post-para para black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut asperiores ea tempora rem explicabo, fugit natus cumque incidunt ut ex quos laborum, beatae officiis voluptas, dolorem iste voluptatem voluptatum odio.</p>
                              <div class="post-footer">
                                <div class="com-footer">
                                  <div class="b">
                                    <a href="#"><i class="fa-solid fa-heart"></i> 24</a>
                                    <a href="#" class="comment-btn"><i class="fa-solid fa-comment"></i> 6</a>
                                  </div>
                                  <a href="#"><i class="fa-solid fa-share"></i> Share</a>
                                </div>
                                <div class="comments">
                                  <form class="add-comment" action="">
                                  <div class="comment">
                                    <img src="assets/img/profile-pic.avif" alt="">
                                    <input type="text" class="form-control" placeholder="Say something...">
                                    <button class="theme-btn primary sm">Add comment</button>
                                  </div>
                                </form>
                                  <div class="comment">
                                    <img src="assets/img/church-profile-img.jfif" alt="">
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima labore ipsum magnam quos numquam, doloribus dolorem eveniet asperiores earum, voluptas minus eligendi animi ullam debitis voluptates officia natus dolorum quidem!</p>
                                  </div>
                                  <div class="comment">
                                    <img src="assets/img/church-profile-img.jfif" alt="">
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima labore ipsum magnam quos numquam, doloribus dolorem eveniet asperiores earum, voluptas minus eligendi animi ullam debitis voluptates officia natus dolorum quidem!</p>
                                  </div>
                                  <div class="comment">
                                    <img src="assets/img/church-profile-img.jfif" alt="">
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima labore ipsum magnam quos numquam, doloribus dolorem eveniet asperiores earum, voluptas minus eligendi animi ullam debitis voluptates officia natus dolorum quidem!</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                         
                          </div>
                        </div>
                      </div>  
                      
                       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 position-relative order-1 order-lg-2">
                        <div class="filter-box">
                          <div class="filters">
                            <h6>Filter</h6>
                            <div class="filter">
                              <i class="fa-solid fa-list-ul"></i>
                              <span>All Posts</span>
                            </div>
                            <div class="filter">
                              <i class="fa-solid fa-church"></i>
                              <span>Churches</span>
                            </div>
                            <div class="filter">
                              <i class="fa-solid fa-people-arrows"></i>
                              <span>Friends</span>
                            </div>
                            <div class="filter">
                              <i class="fa-solid fa-bookmark"></i>
                              <span>Ministries</span>
                            </div>
                            <div class="filter">
                              <i class="fa-solid fa-hands-praying"></i>
                              <span>Prayer Requests</span>
                            </div>
                          </div>
                        
                          <div class="filters last">
                            <h6>Trending Topics</h6>
                            <div class="filter">
                             <i class="fa-solid fa-hashtag"></i>
                              <span>Facts</span>
                            </div>
                            <div class="filter">
                              <i class="fa-solid fa-hashtag"></i>
                              <span>Prayers</span>
                            </div>
                            <div class="filter">
                              <i class="fa-solid fa-hashtag"></i>
                              <span>Encouragments</span>
                            </div>
                            <div class="filter">
                              <i class="fa-solid fa-hashtag"></i>
                              <span>Bible study</span>
                            </div>
                            <div class="filter">
                              <i class="fa-solid fa-hashtag"></i>
                              <span>Worship</span>
                            </div>
                          </div>
                        </div>
                       </div>
                    </div>
            </main>
        </div>
    </div>

    <script>
          const postFooter = document.querySelectorAll('.post-footer')

          postFooter.forEach(element => {
            element.onclick = (e) => {
             const cBtn = e.target.closest('.comment-btn');
              if(!cBtn) return;
              const comment = element.querySelector('.comments');
              comment.classList.toggle('active');
              
            }
          });
    </script>

<?php include 'includes/footer.php'; ?>