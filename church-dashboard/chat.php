<?php include 'includes/header.php'; ?>

    <div class="dashboard">
        <?php
         $currentPage = "chat";
        include 'includes/sidebar.php'; ?>
        <div class="main">
           <?php include 'includes/topbar.php'; ?>
            <main class="content chat-tab">
                    <div class="chat_left_tabs">
                       <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab_chat" data-bs-toggle="tab" data-bs-target="#home_chat" type="button" role="tab" aria-controls="home_chat" aria-selected="true">
                              <span>1</span>
                              <img src="assets/img/profile-pic.avif" class="img-fluid" alt="">
                              <h4>Marriage</h4>
                              <p>Lorem ipsum dolor sit neque sit sec...</p>
                            </a>
                          </li>
                          <li class="nav-item" role="presentation">
                            <a class="nav-link" id="home-tab_chat" data-bs-toggle="tab" data-bs-target="#home_chat" type="button" role="tab" aria-controls="home_chat" aria-selected="true">
                              <span>1</span>
                              <img src="assets/img/profile-pic.avif" class="img-fluid" alt="">
                              <h4>Family</h4>
                              <p>Lorem ipsum dolor sit neque sit sec...</p>
                            </a>
                          </li>
                          <li class="nav-item" role="presentation">
                            <a class="nav-link" id="home-tab_chat" data-bs-toggle="tab" data-bs-target="#home_chat" type="button" role="tab" aria-controls="home_chat" aria-selected="true">
                              <span>1</span>
                              <img src="assets/img/profile-pic.avif" class="img-fluid" alt="">
                              <h4>Grief & Loss</h4>
                              <p>Lorem ipsum dolor sit neque sit sec...</p>
                            </a>
                          </li>
                          <li class="nav-item" role="presentation">
                            <a class="nav-link" id="home-tab_chat" data-bs-toggle="tab" data-bs-target="#home_chat" type="button" role="tab" aria-controls="home_chat" aria-selected="true">
                              <span>1</span>
                              <img src="assets/img/profile-pic.avif" class="img-fluid" alt="">
                              <h4>Prayer Requests</h4>
                              <p>Lorem ipsum dolor sit neque sit sec...</p>
                            </a>
                          </li>
                          <li class="nav-item" role="presentation">
                            <a class="nav-link" id="home-tab_chat" data-bs-toggle="tab" data-bs-target="#home_chat" type="button" role="tab" aria-controls="home_chat" aria-selected="true">
                              <span>1</span>
                              <img src="assets/img/profile-pic.avif" class="img-fluid" alt="">
                              <h4>Men's Fellowship</h4>
                              <p>Lorem ipsum dolor sit neque sit sec...</p>
                            </a>
                          </li>
                          <li class="nav-item" role="presentation">
                            <a class="nav-link" id="home-tab_chat" data-bs-toggle="tab" data-bs-target="#home_chat" type="button" role="tab" aria-controls="home_chat" aria-selected="true">
                              <span>1</span>
                              <img src="assets/img/profile-pic.avif" class="img-fluid" alt="">
                              <h4>Women's Fellowship</h4>
                              <p>Lorem ipsum dolor sit neque sit sec...</p>
                            </a>
                          </li>
                      </ul>
                  </div>
                    <div class="chat_right_tabs">
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home_chat" role="tabpanel" aria-labelledby="home-tab_chat">
                          <div class="textarea_main">
                            <div class="chat_right_main">
                                <div class="chat-top">
                                  <h3><img src="assets/img/profile-pic.avif" class="img-fluid" alt="">John Doe</h3>
                                </div>
                                <div class="chat-content">
                                 <div class="Yesterday">
                                    <a href="javascript:void(0)">Yesterday</a>
                                  </div>
                                  <div class="chat_1">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <span>12:00 AM</span>
                                  </div>                                        
                                  <div class="chat_1 chat_2">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="clearfix"></div>
                                    <span>12:00AM</span>
                                  </div>                                   
                                  <div class="chat_1 chat_2">
                                    <p>Lorem Ipsum is simply dummy text of the</p>
                                    <div class="clearfix"></div>
                                    <span>12:00AM</span>
                                  </div>                                                              
                                </div>
                                <div class="chat_input">
                                    <div class="form-group">
                                      <input type="text" placeholder="Your message here...!">
                                      <button><i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="profile_chat" role="tabpanel" aria-labelledby="profile-tab_chat">
                          <div class="textarea_main">
                            <div class="chat_right_main">
                                <div class="chat-top">
                                  <h3><img src="assets/img/profile-pic.avif" class="img-fluid" alt="">John Doe</h3>
                                </div>
                                <div class="chat-content">
                                 <div class="Yesterday">
                                    <a href="javascript:void(0)">Yesterday</a>
                                  </div>
                                  <div class="chat_1">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <span>12:00 AM</span>
                                  </div>                                        
                                  <div class="chat_1 chat_2">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="clearfix"></div>
                                    <span>12:00AM</span>
                                  </div>                                   
                                  <div class="chat_1 chat_2">
                                    <p>Lorem Ipsum is simply dummy text of the</p>
                                    <div class="clearfix"></div>
                                    <span>12:00AM</span>
                                  </div>                                                              
                                </div>
                                <div class="chat_input">
                                    <div class="form-group">
                                      <input type="text" placeholder="Your message here...!">
                                      <button><i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="contact_chat" role="tabpanel" aria-labelledby="contact-tab_chat">
                          <div class="textarea_main">
                            <div class="chat_right_main">
                                <div class="chat-top">
                                  <h3><img src="assets/img/profile-pic.avif" class="img-fluid" alt="">John Doe</h3>
                                </div>
                                <div class="chat-content">
                                 <div class="Yesterday">
                                    <a href="javascript:void(0)">Yesterday</a>
                                  </div>
                                  <div class="chat_1">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <span>12:00 AM</span>
                                  </div>                                        
                                  <div class="chat_1 chat_2">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="clearfix"></div>
                                    <span>12:00AM</span>
                                  </div>                                   
                                  <div class="chat_1 chat_2">
                                    <p>Lorem Ipsum is simply dummy text of the</p>
                                    <div class="clearfix"></div>
                                    <span>12:00AM</span>
                                  </div>                                                              
                                </div>
                                <div class="chat_input">
                                    <div class="form-group">
                                      <input type="text" placeholder="Your message here...!">
                                      <button><i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>  
                        <div class="tab-pane fade" id="home_chat_2" role="tabpanel" aria-labelledby="home-tab_chat_2">
                          <div class="textarea_main">
                            <div class="chat_right_main">
                                <div class="chat-top">
                                  <h3><img src="assets/img/profile-pic.avif" class="img-fluid" alt="">John Doe</h3>
                                </div>
                                <div class="chat-content">
                                 <div class="Yesterday">
                                    <a href="javascript:void(0)">Yesterday</a>
                                  </div>
                                  <div class="chat_1">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <span>12:00 AM</span>
                                  </div>                                        
                                  <div class="chat_1 chat_2">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="clearfix"></div>
                                    <span>12:00AM</span>
                                  </div>                                   
                                  <div class="chat_1 chat_2">
                                    <p>Lorem Ipsum is simply dummy text of the</p>
                                    <div class="clearfix"></div>
                                    <span>12:00AM</span>
                                  </div>                                                              
                                </div>
                                <div class="chat_input">
                                    <div class="form-group">
                                      <input type="text" placeholder="Your message here...!">
                                      <button><i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="profile_chat_2" role="tabpanel" aria-labelledby="profile-tab_chat_2">
                          <div class="textarea_main">
                            <div class="chat_right_main">
                                <div class="chat-top">
                                  <h3><img src="assets/img/profile-pic.avif" class="img-fluid" alt="">John Doe</h3>
                                </div>
                                <div class="chat-content">
                                 <div class="Yesterday">
                                    <a href="javascript:void(0)">Yesterday</a>
                                  </div>
                                  <div class="chat_1">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <span>12:00 AM</span>
                                  </div>                                        
                                  <div class="chat_1 chat_2">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="clearfix"></div>
                                    <span>12:00AM</span>
                                  </div>                                   
                                  <div class="chat_1 chat_2">
                                    <p>Lorem Ipsum is simply dummy text of the</p>
                                    <div class="clearfix"></div>
                                    <span>12:00AM</span>
                                  </div>                                                              
                                </div>
                                <div class="chat_input">
                                    <div class="form-group">
                                      <input type="text" placeholder="Your message here...!">
                                      <button><i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="contact_chat_2" role="tabpanel" aria-labelledby="contact-tab_chat_2">
                          <div class="textarea_main">
                            <div class="chat_right_main">
                                <div class="chat-top">
                                  <h3><img src="assets/img/profile-pic.avif" class="img-fluid" alt="">John Doe</h3>
                                </div>
                                <div class="chat-content">
                                 <div class="Yesterday">
                                    <a href="javascript:void(0)">Yesterday</a>
                                  </div>
                                  <div class="chat_1">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <span>12:00 AM</span>
                                  </div>                                        
                                  <div class="chat_1 chat_2">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="clearfix"></div>
                                    <span>12:00AM</span>
                                  </div>                                   
                                  <div class="chat_1 chat_2">
                                    <p>Lorem Ipsum is simply dummy text of the</p>
                                    <div class="clearfix"></div>
                                    <span>12:00AM</span>
                                  </div>                                                              
                                </div>
                                <div class="chat_input">
                                    <div class="form-group">
                                      <input type="text" placeholder="Your message here...!">
                                      <button><i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="contact_chat_3" role="tabpanel" aria-labelledby="contact-tab_chat_3">
                          <div class="textarea_main">
                            <div class="chat_right_main">
                                <div class="chat-top">
                                  <h3><img src="assets/img/profile-pic.avif" class="img-fluid" alt="">John Doe</h3>
                                </div>
                                <div class="chat-content">
                                 <div class="Yesterday">
                                    <a href="javascript:void(0)">Yesterday</a>
                                  </div>
                                  <div class="chat_1">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <span>12:00 AM</span>
                                  </div>                                        
                                  <div class="chat_1 chat_2">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="clearfix"></div>
                                    <span>12:00AM</span>
                                  </div>                                   
                                  <div class="chat_1 chat_2">
                                    <p>Lorem Ipsum is simply dummy text of the</p>
                                    <div class="clearfix"></div>
                                    <span>12:00AM</span>
                                  </div>                                                              
                                </div>
                                <div class="chat_input">
                                    <div class="form-group">
                                      <input type="text" placeholder="Your message here...!">
                                      <button><i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>                        
                        <div class="tab-pane fade" id="contact_chat_4" role="tabpanel" aria-labelledby="contact-tab_chat_4">
                          <div class="textarea_main">
                            <div class="chat_right_main">
                                <div class="chat-top">
                                  <h3><img src="assets/img/profile-pic.avif" class="img-fluid" alt="">John Doe</h3>
                                </div>
                                <div class="chat-content">
                                 <div class="Yesterday">
                                    <a href="javascript:void(0)">Yesterday</a>
                                  </div>
                                  <div class="chat_1">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <span>12:00 AM</span>
                                  </div>                                        
                                  <div class="chat_1 chat_2">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="clearfix"></div>
                                    <span>12:00AM</span>
                                  </div>                                   
                                  <div class="chat_1 chat_2">
                                    <p>Lorem Ipsum is simply dummy text of the</p>
                                    <div class="clearfix"></div>
                                    <span>12:00AM</span>
                                  </div>                                                              
                                </div>
                                <div class="chat_input">
                                    <div class="form-group">
                                      <input type="text" placeholder="Your message here...!">
                                      <button><i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>                        
                        <div class="tab-pane fade" id="contact_chat_5" role="tabpanel" aria-labelledby="contact-tab_chat_5">
                          <div class="textarea_main">
                            <div class="chat_right_main">
                                <div class="chat-top">
                                  <h3><img src="assets/img/profile-pic.avif" class="img-fluid" alt="">John Doe</h3>
                                </div>
                                <div class="chat-content">
                                 <div class="Yesterday">
                                    <a href="javascript:void(0)">Yesterday</a>
                                  </div>
                                  <div class="chat_1">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <span>12:00 AM</span>
                                  </div>                                        
                                  <div class="chat_1 chat_2">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="clearfix"></div>
                                    <span>12:00AM</span>
                                  </div>                                   
                                  <div class="chat_1 chat_2">
                                    <p>Lorem Ipsum is simply dummy text of the</p>
                                    <div class="clearfix"></div>
                                    <span>12:00AM</span>
                                  </div>                                                              
                                </div>
                                <div class="chat_input">
                                    <div class="form-group">
                                      <input type="text" placeholder="Your message here...!">
                                      <button><i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>                        
                        <div class="tab-pane fade" id="contact_chat_6" role="tabpanel" aria-labelledby="contact-tab_chat_6">
                          <div class="textarea_main">
                            <div class="chat_right_main">
                                <div class="chat-top">
                                  <h3><img src="assets/img/profile-pic.avif" class="img-fluid" alt="">John Doe</h3>
                                </div>
                                <div class="chat-content">
                                 <div class="Yesterday">
                                    <a href="javascript:void(0)">Yesterday</a>
                                  </div>
                                  <div class="chat_1">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <span>12:00 AM</span>
                                  </div>                                        
                                  <div class="chat_1 chat_2">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="clearfix"></div>
                                    <span>12:00AM</span>
                                  </div>                                   
                                  <div class="chat_1 chat_2">
                                    <p>Lorem Ipsum is simply dummy text of the</p>
                                    <div class="clearfix"></div>
                                    <span>12:00AM</span>
                                  </div>                                                              
                                </div>
                                <div class="chat_input">
                                    <div class="form-group">
                                      <input type="text" placeholder="Your message here...!">
                                      <button><i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
            </main>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>