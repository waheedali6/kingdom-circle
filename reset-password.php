<?php include 'includes/header.php';?>

<div class="h-sec">

</div>


    <!-- Forgot Password Section Start -->
    <section class="forgot-wrapper">
        <div class="forgot-container">
            <div class="forgot-content">
                <!-- Forgot Password Header -->
                <div class="forgot-header">
                    <h1>Reset Password</h1>
                    <p>Enter your new password</p>
                </div>

                <!-- Forgot Password Form -->
                <form id="forgotForm" class="forgot-form">
                    <!-- Email Input -->
                    <div class="form-group">
                        <input type="password" id="reset-pass" name="pass" placeholder="Enter your password" required>
                    </div>
                    <div class="form-group">
                        <input type="password" id="reset-pass" name="pass" placeholder="Confirm password" required>
                    </div>

                    <!-- Send Reset Link Button -->
                    <button type="submit" class="reset-btn">Reset</button>
                </form>

                <!-- Back to Login Link -->
                <div class="login-link">
                    <a href="login.php"><i class="fas fa-arrow-left" style="margin-right: 5px;"></i>Back to Login</a>
                </div>
            </div>
        </div>
    </section>


<?php include 'includes/footer.php';?>