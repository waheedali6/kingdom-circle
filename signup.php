<?php include 'includes/header.php';?>


<div class="h-sec">
    
</div>


    <!-- Sign Up Section Start -->
    <section class="signup-wrapper">
        <div class="signup-container">
            <svg class="signup-decoration" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <g stroke="#D4A574" stroke-width="2" fill="none">
                    <path d="M 80 40 Q 100 30 120 40 L 120 80"/>
                    <path d="M 70 50 Q 90 40 110 50 L 110 90"/>
                    <path d="M 90 30 L 90 100"/>
                    <path d="M 110 30 L 110 100"/>
                    <line x1="70" y1="60" x2="130" y2="60"/>
                    <path d="M 75 50 Q 85 45 95 50"/>
                    <path d="M 105 50 Q 115 45 125 50"/>
                </g>
            </svg>
            <div class="signup-content">
                <!-- Sign Up Header -->
                <div class="signup-header">
                    <h1>Registration</h1>
                </div>

                <!-- Sign Up Form -->
                <form id="signupForm" class="signup-form">
                     <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input type="text"  placeholder="FullName" required>
                                <div class="error-message"></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                         <div class="form-group">
                             <input type="email" placeholder="Email" required>
                             <div class="error-message"></div>
                         </div>
                        </div>
                        <div class="col-12 col-md-6">
                             <div class="form-group">
                                <input type="password" id="signup-password" name="password" placeholder="Password" required>
                                <div class="error-message"></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                         <div class="form-group">
                            <input type="password" id="confirm-password" name="confirmPassword" placeholder="Password Confirmation" required>
                            <div class="error-message"></div>
                        </div>
                        </div>
                     </div>

                    <div class="col-12 col-md-12">
                        <div class="form-group">
                            <input type="tel" placeholder="Phone" required>
                            <div class="error-message"></div>
                        </div>
                    </div>

                    <div class="col-12 col-md-12">
                        <div class="form-group">
                            <input type="text" placeholder="Address" required>
                            <div class="error-message"></div>
                        </div>
                    </div>

                    <div class="col-12 col-md-12">
                        <label class="mb-2" for=""><strong>Signup as</strong></label>
                        <div class="form-group">
                            <select name="" id="">
                                <option value="">individual</option>
                                <option value="">Church</option>
                                <option value="">Ministry</option>
                                <option value="">Non-Profit organization</option>
                            </select>
                            <!-- <input type="text" placeholder="Address" required> -->
                            <div class="error-message"></div>
                        </div>
                    </div>
                    

                    <div class="terms-checkbox">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms">I agree to the <a href="javascript:void(0)">Terms & Conditions</a></label>
                    </div>

                    <!-- Sign Up Button -->
                    <button type="submit" class="signup-btn">Register</button>
                </form>

                <!-- Login Link -->
                <div class="login-link">
                    Already have an account? <a href="login.php">Log In</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Sign Up Section End -->


<?php include 'includes/footer.php';?>