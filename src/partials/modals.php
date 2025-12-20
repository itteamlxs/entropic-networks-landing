<!-- Login Modal -->
<div class="modal modal-login" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 id="loginModalLabel" class="modal-title justify-content-center">Log in to your account</h4>
            </div>
            <div class="modal-body">
                <div class="social-login text-center">
                    <ul class="list-unstyled social-login">
                        <li><button class="twitter-x-btn btn" type="button"><i class="fa-brands fa-x-twitter"></i>Log in with Twitter</button></li>
                        <li><button class="facebook-btn btn" type="button"><i class="fa-brands fa-facebook-f"></i>Log in with Facebook</button></li>
                        <li><button class="google-btn btn" type="button"><i class="fa-brands fa-google"></i>Log in with Google</button></li>
                    </ul>
                </div>
                <div class="divider"><span>Or</span></div>
                <div class="login-form-container">
                    <form class="login-form">
                        <div class="form-group email mb-3">
                            <i class="fas fa-envelope"></i>
                            <label class="sr-only" for="login-email">Your email</label>
                            <input id="login-email" name="login-email" type="email" class="form-control login-email" placeholder="Your email">
                        </div>
                        <div class="form-group password mb-3">
                            <i class="fas fa-lock"></i>
                            <label class="sr-only" for="login-password">Password</label>
                            <input id="login-password" name="login-password" type="password" class="form-control login-password" placeholder="Password">
                            <p class="forgot-password">
                                <a href="#" id="resetpass-link" data-bs-toggle="modal" data-bs-target="#resetpass-modal">Forgot password?</a>
                            </p>
                        </div>
                        <button type="submit" class="btn btn-block btn-cta-primary">Log in</button>
                        <div class="form-check remember mt-2">
                            <input class="form-check-input" type="checkbox" value="" id="RememberPassword">
                            <label class="form-check-label" for="RememberPassword">Remember me</label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <p>New to <?=t('site_title',$dict)?>? <a class="signup-link" id="signup-link" href="#">Sign up now</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Signup Modal -->
<div class="modal modal-signup" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 id="signupModalLabel" class="modal-title text-center">New to <?=t('site_title',$dict)?>? Sign up now.</h4>
            </div>
            <div class="modal-body">
                <p class="intro text-center">It only takes 3 minutes!</p>
                <div class="social-login text-center">
                    <ul class="list-unstyled social-login">
                        <li><button class="twitter-x-btn btn" type="button"><i class="fa-brands fa-x-twitter"></i>Sign up with Twitter</button></li>
                        <li><button class="facebook-btn btn" type="button"><i class="fa-brands fa-facebook-f"></i>Sign up with Facebook</button></li>
                        <li><button class="google-btn btn" type="button"><i class="fa-brands fa-google"></i>Sign up with Google</button></li>
                    </ul>
                    <p class="note">Don't worry, we won't post anything without your permission.</p>
                </div>
                <div class="divider"><span>Or</span></div>
                <div class="login-form-container">
                    <form class="login-form">
                        <div class="form-group email mb-3">
                            <i class="fas fa-envelope"></i>
                            <label class="sr-only" for="signup-email">Your email</label>
                            <input id="signup-email" name="signup-email" type="email" class="form-control login-email" placeholder="Your email">
                        </div>
                        <div class="form-group password mb-3">
                            <i class="fas fa-lock"></i>
                            <label class="sr-only" for="signup-password">Your password</label>
                            <input id="signup-password" name="signup-password" type="password" class="form-control login-password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-block btn-cta-primary">Sign up</button>
                        <p class="note">By signing up, you agree to our terms of services and privacy policy.</p>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <p>Already have an account? <a class="login-link" id="login-link" href="#">Log in</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Reset Password Modal -->
<div class="modal modal-resetpass" id="resetpass-modal" tabindex="-1" role="dialog" aria-labelledby="resetpassModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 id="resetpassModalLabel" class="modal-title text-center">Password Reset</h4>
            </div>
            <div class="modal-body">
                <div class="resetpass-form-container">
                    <p class="intro">Please enter your email address below and we'll email you a link to a page where you can easily create a new password.</p>
                    <form class="resetpass-form">
                        <div class="form-group email mb-3">
                            <i class="fas fa-envelope"></i>
                            <label class="sr-only" for="reg-email">Your email</label>
                            <input id="reg-email" name="reg-email" type="email" class="form-control login-email" placeholder="Your email">
                        </div>
                        <button type="submit" class="btn btn-block btn-cta-primary">Reset Password</button>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <p>I want to <a class="back-to-login-link" id="back-to-login-link" href="#">return to login</a></p>
            </div>
        </div>
    </div>
</div>
