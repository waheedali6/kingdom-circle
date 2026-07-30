<?php include 'includes/header.php'; ?>

    <div class="dashboard">
        <?php
         $currentPage = "settings";
        include 'includes/sidebar.php'; ?>
        <div class="main">
           <?php include 'includes/topbar.php'; ?>
            <main class="content">
                <div class="main-title"> <h3>Settings</h3></div>
                <div class="setting-tabs">
                    <div class="tab-cont">
                        <button class="tab-btn active" data-tab = "notifications">Notifications</button>
                        <button class="tab-btn" data-tab = "terms-conditions">Terms & Conditions</button>
                    </div>
                    <div class="tab-cont">
                        <button class="tab-btn" data-tab = "privacy-policy">Privacy Policy</button>
                        <button class="tab-btn" data-tab = "support">Support</button>
                    </div>
                </div>
              
                    <div class="tab-pane active" id = "notifications">
                        <div class="main-title"> <h3>Notifications Settings</h3></div>
                        <div class="not">
                                <div class="chat">
                                    <div class="left">
                                        <div class="c-content ">
                                                <h5>Push Notification</h5>
                                                <p class="para black">Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy simply.</p>
                                            </div>
                                        </div>
                                    <span>
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider"></span>
                                        </label>
                                    </span>
                                </div>
                                <div class="chat">
                                    <div class="left">
                                        <div class="c-content ">
                                                <h5>Email Notification</h5>
                                                <p class="para black">Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy simply.</p>
                                            </div>
                                        </div>
                                    <span>
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider"></span>
                                        </label>
                                    </span>
                                </div>
                                <div class="chat">
                                    <div class="left">
                                        <div class="c-content ">
                                                <h5>SMS Notification</h5>
                                                <p class="para black">Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy simply.</p>
                                            </div>
                                        </div>
                                    <span>
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider"></span>
                                        </label>
                                    </span>
                                </div>
                        </div>
                    </div>
                    <div class="tab-pane" id = "terms-conditions">
                        <div class="main-title"> <h3>Terms & Conditions</h3></div>
                        <p class="para black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consectetur nisl sapien, in consectetur turpis posuere in. Vestibulum arcu metus, vestibulum in egestas quis, facilisis vel nisl. Curabitur aliquam felis et ullamcorper ultrices. Mauris iaculis sapien fermentum eros finibus, id interdum nulla scelerisque. Nulla lacinia volutpat consectetur. Nunc hendrerit odio at felis porttitor, vel ornare erat elementum. Aliquam nec massa neque.</p>
                        <p class="para black">Donec dignissim libero ac metus maximus, a accumsan diam bibendum. Nullam vitae urna ultricies, commodo tellus eu, tempor leo. Pellentesque lorem augue, viverra et eleifend eget, volutpat vitae mi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Donec non feugiat mi, vestibulum tincidunt ex.</p>
                        <p class="para black">Proin nec leo viverra, sollicitudin felis in, luctus dui. Nullam erat nisl, tempor at est id, consequat fringilla velit. Sed id nunc ligula. Suspendisse at massa consectetur, efficitur dui vel, eleifend libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis congue velit in nulla posuere sagittis ac ut ipsum. Mauris dignissim ullamcorper erat vel placerat. Curabitur id molestie arcu, non porta magna.</p>
                        <p class="para black">Aenean ullamcorper, turpis vel vehicula porta, ex lacus faucibus risus, non pellentesque tortor turpis vulputate nunc. Curabitur porta congue purus, vel fringilla libero tincidunt a. Aenean faucibus ut magna in iaculis. Fusce accumsan diam lectus, eleifend tincidunt enim semper a. Etiam feugiat lobortis lorem. Fusce volutpat elementum pretium. In semper ac purus consectetur vestibulum. Aenean elementum sapien at metus finibus, vel placerat erat dignissim. Proin id orci ac nulla sagittis hendrerit in nec ligula. Suspendisse feugiat diam sit amet faucibus molestie. Donec nisl orci, interdum id consectetur vitae, tincidunt sit amet leo. Ut in semper justo. Donec molestie varius elit ut rutrum. Maecenas ornare ante a rutrum maximus. Pellentesque eleifend felis sed viverra commodo.</p>
                    </div>
                    <div class="tab-pane" id = "privacy-policy">
                        <div class="main-title"> <h3>Privacy Policy</h3></div>
                        <p class="para black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consectetur nisl sapien, in consectetur turpis posuere in. Vestibulum arcu metus, vestibulum in egestas quis, facilisis vel nisl. Curabitur aliquam felis et ullamcorper ultrices. Mauris iaculis sapien fermentum eros finibus, id interdum nulla scelerisque. Nulla lacinia volutpat consectetur. Nunc hendrerit odio at felis porttitor, vel ornare erat elementum. Aliquam nec massa neque.</p>
                        <p class="para black">Donec dignissim libero ac metus maximus, a accumsan diam bibendum. Nullam vitae urna ultricies, commodo tellus eu, tempor leo. Pellentesque lorem augue, viverra et eleifend eget, volutpat vitae mi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Donec non feugiat mi, vestibulum tincidunt ex.</p>
                        <p class="para black">Proin nec leo viverra, sollicitudin felis in, luctus dui. Nullam erat nisl, tempor at est id, consequat fringilla velit. Sed id nunc ligula. Suspendisse at massa consectetur, efficitur dui vel, eleifend libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis congue velit in nulla posuere sagittis ac ut ipsum. Mauris dignissim ullamcorper erat vel placerat. Curabitur id molestie arcu, non porta magna.</p>
                        <p class="para black">Aenean ullamcorper, turpis vel vehicula porta, ex lacus faucibus risus, non pellentesque tortor turpis vulputate nunc. Curabitur porta congue purus, vel fringilla libero tincidunt a. Aenean faucibus ut magna in iaculis. Fusce accumsan diam lectus, eleifend tincidunt enim semper a. Etiam feugiat lobortis lorem. Fusce volutpat elementum pretium. In semper ac purus consectetur vestibulum. Aenean elementum sapien at metus finibus, vel placerat erat dignissim. Proin id orci ac nulla sagittis hendrerit in nec ligula. Suspendisse feugiat diam sit amet faucibus molestie. Donec nisl orci, interdum id consectetur vitae, tincidunt sit amet leo. Ut in semper justo. Donec molestie varius elit ut rutrum. Maecenas ornare ante a rutrum maximus. Pellentesque eleifend felis sed viverra commodo.</p>
                    </div>
                    <div class="tab-pane" id = "support">
                        <div class="main-title"> <h3>Privacy Policy</h3></div>
                        <div class="accordion" id="accordionExample">
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Question  01
                                      </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        <p class="para black">Lorem ipsum dolor sit amet consectetur adipiscing, elit congue nisi rutrum platea lacinia sapien, sed vel cras torquent scelerisque. Tempus pharetra quam congue natoque aptent sollicitudin et bibendum ullamcorper fames facilisis urna, ac tempor arcu ridiculus proin etiam diam taciti vivamus id pulvinar. Lorem ipsum dolor sit amet consectetur adipiscing, elit congue nisi rutrum platea lacinia sapien, sed vel cras torquent scelerisque. Tempus pharetra quam congue natoque aptent sollicitudin et bibendum ullamcorper fames facilisis urna, ac tempor arcu ridiculus proin etiam diam taciti vivamus id pulvinar.
                                      </p></div>
                                    </div>
                                  </div>
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Question  02
                                      </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        <p class="para black">Lorem ipsum dolor sit amet consectetur adipiscing, elit congue nisi rutrum platea lacinia sapien, sed vel cras torquent scelerisque. Tempus pharetra quam congue natoque aptent sollicitudin et bibendum ullamcorper fames facilisis urna, ac tempor arcu ridiculus proin etiam diam taciti vivamus id pulvinar. Lorem ipsum dolor sit amet consectetur adipiscing, elit congue nisi rutrum platea lacinia sapien, sed vel cras torquent scelerisque. Tempus pharetra quam congue natoque aptent sollicitudin et bibendum ullamcorper fames facilisis urna, ac tempor arcu ridiculus proin etiam diam taciti vivamus id pulvinar.
                                      </p></div>
                                    </div>
                                  </div>
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Question  03
                                      </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        <p class="para black">Lorem ipsum dolor sit amet consectetur adipiscing, elit congue nisi rutrum platea lacinia sapien, sed vel cras torquent scelerisque. Tempus pharetra quam congue natoque aptent sollicitudin et bibendum ullamcorper fames facilisis urna, ac tempor arcu ridiculus proin etiam diam taciti vivamus id pulvinar. Lorem ipsum dolor sit amet consectetur adipiscing, elit congue nisi rutrum platea lacinia sapien, sed vel cras torquent scelerisque. Tempus pharetra quam congue natoque aptent sollicitudin et bibendum ullamcorper fames facilisis urna, ac tempor arcu ridiculus proin etiam diam taciti vivamus id pulvinar.
                                      </p></div>
                                    </div>
                                  </div>
                                    <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFore">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFore" aria-expanded="false" aria-controls="collapseFore">
                                        Question  04
                                      </button>
                                    </h2>
                                    <div id="collapseFore" class="accordion-collapse collapse" aria-labelledby="headingFore" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        <p class="para black">Lorem ipsum dolor sit amet consectetur adipiscing, elit congue nisi rutrum platea lacinia sapien, sed vel cras torquent scelerisque. Tempus pharetra quam congue natoque aptent sollicitudin et bibendum ullamcorper fames facilisis urna, ac tempor arcu ridiculus proin etiam diam taciti vivamus id pulvinar. Lorem ipsum dolor sit amet consectetur adipiscing, elit congue nisi rutrum platea lacinia sapien, sed vel cras torquent scelerisque. Tempus pharetra quam congue natoque aptent sollicitudin et bibendum ullamcorper fames facilisis urna, ac tempor arcu ridiculus proin etiam diam taciti vivamus id pulvinar.
                                      </p></div>
                                    </div>
                                  </div>
                                    <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Question  05
                                      </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        <p class="para black">Lorem ipsum dolor sit amet consectetur adipiscing, elit congue nisi rutrum platea lacinia sapien, sed vel cras torquent scelerisque. Tempus pharetra quam congue natoque aptent sollicitudin et bibendum ullamcorper fames facilisis urna, ac tempor arcu ridiculus proin etiam diam taciti vivamus id pulvinar. Lorem ipsum dolor sit amet consectetur adipiscing, elit congue nisi rutrum platea lacinia sapien, sed vel cras torquent scelerisque. Tempus pharetra quam congue natoque aptent sollicitudin et bibendum ullamcorper fames facilisis urna, ac tempor arcu ridiculus proin etiam diam taciti vivamus id pulvinar.
                                      </p></div>
                                    </div>
                                  </div>
                                </div>
                    </div>
               
            </main>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>