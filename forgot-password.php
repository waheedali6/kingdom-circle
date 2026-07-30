<?php include 'includes/header.php';?>

<div class="h-sec">

</div>


    <!-- Forgot Password Section Start -->
    <section class="forgot-wrapper">
        <div class="forgot-container">
            <div class="forgot-content">
                <!-- Forgot Password Header -->
                <div class="forgot-header">
                    <h1>Forget Password</h1>
                    <p>Enter your email address and we'll send you a link to reset your password</p>
                </div>

                <!-- Info Box -->
                <div class="info-box">
                    <i class="fas fa-info-circle"></i> Check your email for a password reset link. It may take a few minutes to arrive.
                </div>

                <!-- Success Message -->
                <div class="success-message" id="successMessage">
                    <i class="fas fa-check-circle"></i> Reset link sent! Check your email.
                </div>

                <!-- Forgot Password Form -->
                <form id="forgotForm" class="forgot-form">
                    <!-- Email Input -->
                    <div class="form-group">
                        <input type="email" id="forgot-email" name="email" placeholder="Enter your email" required>
                        <div class="error-message"></div>
                    </div>

                    <!-- Send Reset Link Button -->
                    <a type="submit" class="reset-btn">Send Reset Link</a>
                </form>

                <!-- Back to Login Link -->
                <div class="login-link">
                    <a href="login.php"><i class="fas fa-arrow-left" style="margin-right: 5px;"></i>Back to Login</a>
                </div>
            </div>
        </div>
    </section>


<?php include 'includes/footer.php';?>