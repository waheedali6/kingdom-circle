<?php include 'includes/header.php';?>


<div class="h-sec">
    
</div>

    <!-- Login Section Start -->
    <section class="login-wrapper">
        <div class="login-container">
            <svg class="login-decoration" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
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
            <div class="login-content">
                <!-- Login Header -->
                <div class="login-header">
                    <h1>Login</h1>
                </div>

                <!-- Login Form -->
                <form id="loginForm" class="login-form">
                    <!-- Email Input -->
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="Email" required>
                    </div>

                    <!-- Password Input -->
                    <div class="form-group">
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>

                    <!-- Remember & Forgot -->
                    <div class="remember-forgot">
                        <label>
                            <input type="checkbox" name="remember"> Remember me
                        </label>
                        <a href="forgot-password.php">Lost your password?</a>
                    </div>

                    <!-- Login Button -->
                    <button type="submit" class="login-btn">Login</button>
                </form>

                <!-- Sign Up Link -->
                <div class="signup-link">
                    Don't have an account? <a href="signup.php">Register</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Section End -->




<?php include 'includes/footer.php';?>