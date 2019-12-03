<!-- popups -->
<section class="bd-popup">

    <!-- sign-in -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" data-dismiss="modal" aria-label="Close"></span>
                </div>
                <div class="modal-body">
                    <h2 class="popup-head">Log in to Bisdesk</h2>
                    <p>Easily Using</p>
                    <div class="easy-use">
                        <a href="#"><span class="icon"><img src="assets/images/fb.svg" alt="icon"></span> Face book</a>
                        <a href="#"><span class="icon"><img src="assets/images/google.svg" alt="icon"></span> Google</a>
                        <a href="#"><span class="icon"><img src="assets/images/linked_in.svg" alt="icon"></span> Linked In</a>
                    </div>
                    <p>Or Using Email</p>
                    <div class="login-form">
                        <form action="product_submit" id="request-a-free-consultation" method="get" accept-charset="utf-8">
                            <div class="input-holder">
                                <input type="text" class="form-control" placeholder="Your Email Address" name="" value="">
                            </div>
                            <div class="input-holder tgl-password">
                                <input type="password" class="form-control " placeholder="Enter Password" name="" value="">
                                <div class="toggle-password" onclick="togglePassword(this)">
                                    <span class="tgl-pswd-show">
								<svg class="stUf5b" fill="currentColor" height="24px" viewBox="0 0 24 24" width="24px" xmlns="https://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M10.58,7.25l1.56,1.56c1.38,0.07,2.47,1.17,2.54,2.54l1.56,1.56C16.4,12.47,16.5,12,16.5,11.5C16.5,9.02,14.48,7,12,7 C11.5,7,11.03,7.1,10.58,7.25z"></path><path d="M12,6c3.79,0,7.17,2.13,8.82,5.5c-0.64,1.32-1.56,2.44-2.66,3.33l1.42,1.42c1.51-1.26,2.7-2.89,3.43-4.74 C21.27,7.11,17,4,12,4c-1.4,0-2.73,0.25-3.98,0.7L9.63,6.3C10.4,6.12,11.19,6,12,6z"></path><path d="M16.43,15.93l-1.25-1.25l-1.27-1.27l-3.82-3.82L8.82,8.32L7.57,7.07L6.09,5.59L3.31,2.81L1.89,4.22l2.53,2.53 C2.92,8.02,1.73,9.64,1,11.5C2.73,15.89,7,19,12,19c1.4,0,2.73-0.25,3.98-0.7l4.3,4.3l1.41-1.41l-3.78-3.78L16.43,15.93z M11.86,14.19c-1.38-0.07-2.47-1.17-2.54-2.54L11.86,14.19z M12,17c-3.79,0-7.17-2.13-8.82-5.5c0.64-1.32,1.56-2.44,2.66-3.33 l1.91,1.91C7.6,10.53,7.5,11,7.5,11.5c0,2.48,2.02,4.5,4.5,4.5c0.5,0,0.97-0.1,1.42-0.25l0.95,0.95C13.6,16.88,12.81,17,12,17z"></path></svg>
								</span>
                                    <span class="tgl-pswd-hide">
								<svg class="stUf5b" fill="currentColor" height="24px" viewBox="0 0 24 24" width="24px" xmlns="https://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M12,7c-2.48,0-4.5,2.02-4.5,4.5S9.52,16,12,16s4.5-2.02,4.5-4.5S14.48,7,12,7z M12,14.2c-1.49,0-2.7-1.21-2.7-2.7 c0-1.49,1.21-2.7,2.7-2.7s2.7,1.21,2.7,2.7C14.7,12.99,13.49,14.2,12,14.2z"></path><path d="M12,4C7,4,2.73,7.11,1,11.5C2.73,15.89,7,19,12,19s9.27-3.11,11-7.5C21.27,7.11,17,4,12,4z M12,17 c-3.79,0-7.17-2.13-8.82-5.5C4.83,8.13,8.21,6,12,6s7.17,2.13,8.82,5.5C19.17,14.87,15.79,17,12,17z"></path><path fill="none" d="M0,0h24v24H0V0z"></path></svg>
								</span>
                                </div>
                            </div>
                            <div class="btn-holder">
                                <a class="btn full-width" href="">Log In</a>
                            </div>
                        </form>
                    </div>
                    <div class="popup-footer d-flx alingnVcenter">
                        <p><a href="" class="link" data-toggle="modal" data-target="#forgot-password" data-dismiss="modal" aria-label="Close">Forgot password?</a></p>
                        <p>New to Bisdesk? <a href="" class="link" data-toggle="modal" data-target="#signup" data-dismiss="modal" aria-label="Close"> Create Account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- sign-up -->
    <div class="modal fade signup" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" data-dismiss="modal" aria-label="Close"></span>
                </div>
                <div class="modal-body">
                    <h2 class="popup-head">Signup with Bisdesk</h2>
                    <p>Easily Using</p>
                    <div class="easy-use">
                        <a href="#"><span class="icon"><img src="assets/images/fb.svg" alt="icon"></span> Face book</a>
                        <a href="#"><span class="icon"><img src="assets/images/google.svg" alt="icon"></span> Google</a>
                        <a href="#"><span class="icon"><img src="assets/images/linked_in.svg" alt="icon"></span> Linked In</a>
                    </div>
                    <p>Or Using Email</p>
                    <div class="login-form">
                        <form action="product_submit" id="request-a-free-consultation" method="get" accept-charset="utf-8">
                            <div class="input-holder">
                                <input type="text" class="form-control" placeholder="Your Full Name" name="" value="">
                            </div>
                            <div class="input-holder">
                                <input type="email" class="form-control" placeholder="Email address" name="" value="">
                            </div>
                            <div class="input-holder tgl-password">
                                <input type="password" class="form-control " placeholder="Enter Password" name="" value="">
                                <div class="toggle-password">
                                    <span class="tgl-pswd-show">
								<svg class="stUf5b" fill="currentColor" height="24px" viewBox="0 0 24 24" width="24px" xmlns="https://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M10.58,7.25l1.56,1.56c1.38,0.07,2.47,1.17,2.54,2.54l1.56,1.56C16.4,12.47,16.5,12,16.5,11.5C16.5,9.02,14.48,7,12,7 C11.5,7,11.03,7.1,10.58,7.25z"></path><path d="M12,6c3.79,0,7.17,2.13,8.82,5.5c-0.64,1.32-1.56,2.44-2.66,3.33l1.42,1.42c1.51-1.26,2.7-2.89,3.43-4.74 C21.27,7.11,17,4,12,4c-1.4,0-2.73,0.25-3.98,0.7L9.63,6.3C10.4,6.12,11.19,6,12,6z"></path><path d="M16.43,15.93l-1.25-1.25l-1.27-1.27l-3.82-3.82L8.82,8.32L7.57,7.07L6.09,5.59L3.31,2.81L1.89,4.22l2.53,2.53 C2.92,8.02,1.73,9.64,1,11.5C2.73,15.89,7,19,12,19c1.4,0,2.73-0.25,3.98-0.7l4.3,4.3l1.41-1.41l-3.78-3.78L16.43,15.93z M11.86,14.19c-1.38-0.07-2.47-1.17-2.54-2.54L11.86,14.19z M12,17c-3.79,0-7.17-2.13-8.82-5.5c0.64-1.32,1.56-2.44,2.66-3.33 l1.91,1.91C7.6,10.53,7.5,11,7.5,11.5c0,2.48,2.02,4.5,4.5,4.5c0.5,0,0.97-0.1,1.42-0.25l0.95,0.95C13.6,16.88,12.81,17,12,17z"></path></svg>
								</span>
                                    <span class="tgl-pswd-hide">
								<svg class="stUf5b" fill="currentColor" height="24px" viewBox="0 0 24 24" width="24px" xmlns="https://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M12,7c-2.48,0-4.5,2.02-4.5,4.5S9.52,16,12,16s4.5-2.02,4.5-4.5S14.48,7,12,7z M12,14.2c-1.49,0-2.7-1.21-2.7-2.7 c0-1.49,1.21-2.7,2.7-2.7s2.7,1.21,2.7,2.7C14.7,12.99,13.49,14.2,12,14.2z"></path><path d="M12,4C7,4,2.73,7.11,1,11.5C2.73,15.89,7,19,12,19s9.27-3.11,11-7.5C21.27,7.11,17,4,12,4z M12,17 c-3.79,0-7.17-2.13-8.82-5.5C4.83,8.13,8.21,6,12,6s7.17,2.13,8.82,5.5C19.17,14.87,15.79,17,12,17z"></path><path fill="none" d="M0,0h24v24H0V0z"></path></svg>
								</span>
                                </div>
                            </div>
                            <div class="input-holder tgl-password">
                                <input type="password" class="form-control " placeholder="Confirm Password" name="" value="">
                                <div class="toggle-password">
                                    <span class="tgl-pswd-show">
								<svg class="stUf5b" fill="currentColor" height="24px" viewBox="0 0 24 24" width="24px" xmlns="https://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M10.58,7.25l1.56,1.56c1.38,0.07,2.47,1.17,2.54,2.54l1.56,1.56C16.4,12.47,16.5,12,16.5,11.5C16.5,9.02,14.48,7,12,7 C11.5,7,11.03,7.1,10.58,7.25z"></path><path d="M12,6c3.79,0,7.17,2.13,8.82,5.5c-0.64,1.32-1.56,2.44-2.66,3.33l1.42,1.42c1.51-1.26,2.7-2.89,3.43-4.74 C21.27,7.11,17,4,12,4c-1.4,0-2.73,0.25-3.98,0.7L9.63,6.3C10.4,6.12,11.19,6,12,6z"></path><path d="M16.43,15.93l-1.25-1.25l-1.27-1.27l-3.82-3.82L8.82,8.32L7.57,7.07L6.09,5.59L3.31,2.81L1.89,4.22l2.53,2.53 C2.92,8.02,1.73,9.64,1,11.5C2.73,15.89,7,19,12,19c1.4,0,2.73-0.25,3.98-0.7l4.3,4.3l1.41-1.41l-3.78-3.78L16.43,15.93z M11.86,14.19c-1.38-0.07-2.47-1.17-2.54-2.54L11.86,14.19z M12,17c-3.79,0-7.17-2.13-8.82-5.5c0.64-1.32,1.56-2.44,2.66-3.33 l1.91,1.91C7.6,10.53,7.5,11,7.5,11.5c0,2.48,2.02,4.5,4.5,4.5c0.5,0,0.97-0.1,1.42-0.25l0.95,0.95C13.6,16.88,12.81,17,12,17z"></path></svg>
								</span>
                                    <span class="tgl-pswd-hide">
								<svg class="stUf5b" fill="currentColor" height="24px" viewBox="0 0 24 24" width="24px" xmlns="https://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M12,7c-2.48,0-4.5,2.02-4.5,4.5S9.52,16,12,16s4.5-2.02,4.5-4.5S14.48,7,12,7z M12,14.2c-1.49,0-2.7-1.21-2.7-2.7 c0-1.49,1.21-2.7,2.7-2.7s2.7,1.21,2.7,2.7C14.7,12.99,13.49,14.2,12,14.2z"></path><path d="M12,4C7,4,2.73,7.11,1,11.5C2.73,15.89,7,19,12,19s9.27-3.11,11-7.5C21.27,7.11,17,4,12,4z M12,17 c-3.79,0-7.17-2.13-8.82-5.5C4.83,8.13,8.21,6,12,6s7.17,2.13,8.82,5.5C19.17,14.87,15.79,17,12,17z"></path><path fill="none" d="M0,0h24v24H0V0z"></path></svg>
								</span>
                                </div>
                            </div>
                            <!-- <div class="input-holder">
										<input type="password" class="form-control" placeholder ="Password" name="" value="">
									</div>
									<div class="input-holder">
										<input type="password" class="form-control" placeholder ="Confirm password" name="" value="">
									</div> -->
                            <div class="btn-holder">
                                <a class="btn full-width" href="">Register</a>
                            </div>
                        </form>
                    </div>
                    <div class="popup-footer">
                        <p>Already have an account? <a href="" class="link" data-toggle="modal" data-target="#login" data-dismiss="modal" aria-label="Close"> Login </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Forgot Password -->
    <div class="modal fade forgot-text" id="forgot-password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" data-dismiss="modal" aria-label="Close"></span>
                </div>
                <div class="modal-body">
                    <h2 class="popup-head">Forgot password?</h2>
                    <p>No worries. Enter your email address and we’ll help you reset it.</p>
                    <div class="login-form">
                        <form action="product_submit" id="request-a-free-consultation" method="get" accept-charset="utf-8">
                            <div class="input-holder">
                                <input type="text" class="form-control" placeholder="Enter your email address" name="" value="">
                            </div>
                            <div class="btn-holder">
                                <a class="btn full-width" href="">Submit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Reset password -->
    <div class="modal fade forgot-text" id="reset-password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" data-dismiss="modal" aria-label="Close"></span>
                </div>
                <div class="modal-body">
                    <h2 class="popup-head">Reset password?</h2>
                    <p>No worries. Enter your email address and we’ll help you reset it.</p>
                    <div class="login-form">
                        <form action="product_submit" id="request-a-free-consultation" method="get" accept-charset="utf-8">
                            <div class="input-holder">
                                <input type="password" class="form-control" placeholder="New Password" name="" value="">
                            </div>
                            <div class="input-holder">
                                <input type="password" class="form-control" placeholder="Confirm Password" name="" value="">
                            </div>
                            <div class="btn-holder">
                                <a class="btn full-width" href="">Submit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enquiry -->
    <div class="modal fade enquiry" id="enquiry_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" data-dismiss="modal" aria-label="Close"></span>
                </div>
                <div class="modal-body">
                    <h2 class="popup-head">Send Enquiry</h2>
                    <div class="login-form">
                        <form action="product_submit">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-holder">
                                        <input type="text" id="enq-name" class="form-control" placeholder="Name*">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-holder">
                                        <input type="mail" id="enq-mail" class="form-control"  placeholder="Email-Address*">
                                        
                                    </div>
                                </div>
								<!-- <div class="col-sm-6">
                                    <div class="input-holder tgl-password">
                                        <input type="password" class="form-control " placeholder="Enter Password" name="" value="">
                                        <div class="toggle-password" onclick="togglePassword(this)">
                                            <span class="tgl-pswd-show">
								<svg class="stUf5b" fill="currentColor" height="24px" viewBox="0 0 24 24" width="24px" xmlns="https://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M10.58,7.25l1.56,1.56c1.38,0.07,2.47,1.17,2.54,2.54l1.56,1.56C16.4,12.47,16.5,12,16.5,11.5C16.5,9.02,14.48,7,12,7 C11.5,7,11.03,7.1,10.58,7.25z"></path><path d="M12,6c3.79,0,7.17,2.13,8.82,5.5c-0.64,1.32-1.56,2.44-2.66,3.33l1.42,1.42c1.51-1.26,2.7-2.89,3.43-4.74 C21.27,7.11,17,4,12,4c-1.4,0-2.73,0.25-3.98,0.7L9.63,6.3C10.4,6.12,11.19,6,12,6z"></path><path d="M16.43,15.93l-1.25-1.25l-1.27-1.27l-3.82-3.82L8.82,8.32L7.57,7.07L6.09,5.59L3.31,2.81L1.89,4.22l2.53,2.53 C2.92,8.02,1.73,9.64,1,11.5C2.73,15.89,7,19,12,19c1.4,0,2.73-0.25,3.98-0.7l4.3,4.3l1.41-1.41l-3.78-3.78L16.43,15.93z M11.86,14.19c-1.38-0.07-2.47-1.17-2.54-2.54L11.86,14.19z M12,17c-3.79,0-7.17-2.13-8.82-5.5c0.64-1.32,1.56-2.44,2.66-3.33 l1.91,1.91C7.6,10.53,7.5,11,7.5,11.5c0,2.48,2.02,4.5,4.5,4.5c0.5,0,0.97-0.1,1.42-0.25l0.95,0.95C13.6,16.88,12.81,17,12,17z"></path></svg>
								</span>
                                            <span class="tgl-pswd-hide">
								<svg class="stUf5b" fill="currentColor" height="24px" viewBox="0 0 24 24" width="24px" xmlns="https://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M12,7c-2.48,0-4.5,2.02-4.5,4.5S9.52,16,12,16s4.5-2.02,4.5-4.5S14.48,7,12,7z M12,14.2c-1.49,0-2.7-1.21-2.7-2.7 c0-1.49,1.21-2.7,2.7-2.7s2.7,1.21,2.7,2.7C14.7,12.99,13.49,14.2,12,14.2z"></path><path d="M12,4C7,4,2.73,7.11,1,11.5C2.73,15.89,7,19,12,19s9.27-3.11,11-7.5C21.27,7.11,17,4,12,4z M12,17 c-3.79,0-7.17-2.13-8.82-5.5C4.83,8.13,8.21,6,12,6s7.17,2.13,8.82,5.5C19.17,14.87,15.79,17,12,17z"></path><path fill="none" d="M0,0h24v24H0V0z"></path></svg>
								</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-holder tgl-password">
                                        <input type="password" class="form-control " placeholder="Confirm Password" name="" value="">
                                        <div class="toggle-password" onclick="togglePassword(this)">
                                            <span class="tgl-pswd-show">
								<svg class="stUf5b" fill="currentColor" height="24px" viewBox="0 0 24 24" width="24px" xmlns="https://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M10.58,7.25l1.56,1.56c1.38,0.07,2.47,1.17,2.54,2.54l1.56,1.56C16.4,12.47,16.5,12,16.5,11.5C16.5,9.02,14.48,7,12,7 C11.5,7,11.03,7.1,10.58,7.25z"></path><path d="M12,6c3.79,0,7.17,2.13,8.82,5.5c-0.64,1.32-1.56,2.44-2.66,3.33l1.42,1.42c1.51-1.26,2.7-2.89,3.43-4.74 C21.27,7.11,17,4,12,4c-1.4,0-2.73,0.25-3.98,0.7L9.63,6.3C10.4,6.12,11.19,6,12,6z"></path><path d="M16.43,15.93l-1.25-1.25l-1.27-1.27l-3.82-3.82L8.82,8.32L7.57,7.07L6.09,5.59L3.31,2.81L1.89,4.22l2.53,2.53 C2.92,8.02,1.73,9.64,1,11.5C2.73,15.89,7,19,12,19c1.4,0,2.73-0.25,3.98-0.7l4.3,4.3l1.41-1.41l-3.78-3.78L16.43,15.93z M11.86,14.19c-1.38-0.07-2.47-1.17-2.54-2.54L11.86,14.19z M12,17c-3.79,0-7.17-2.13-8.82-5.5c0.64-1.32,1.56-2.44,2.66-3.33 l1.91,1.91C7.6,10.53,7.5,11,7.5,11.5c0,2.48,2.02,4.5,4.5,4.5c0.5,0,0.97-0.1,1.42-0.25l0.95,0.95C13.6,16.88,12.81,17,12,17z"></path></svg>
								</span>
                                            <span class="tgl-pswd-hide">
								<svg class="stUf5b" fill="currentColor" height="24px" viewBox="0 0 24 24" width="24px" xmlns="https://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M12,7c-2.48,0-4.5,2.02-4.5,4.5S9.52,16,12,16s4.5-2.02,4.5-4.5S14.48,7,12,7z M12,14.2c-1.49,0-2.7-1.21-2.7-2.7 c0-1.49,1.21-2.7,2.7-2.7s2.7,1.21,2.7,2.7C14.7,12.99,13.49,14.2,12,14.2z"></path><path d="M12,4C7,4,2.73,7.11,1,11.5C2.73,15.89,7,19,12,19s9.27-3.11,11-7.5C21.27,7.11,17,4,12,4z M12,17 c-3.79,0-7.17-2.13-8.82-5.5C4.83,8.13,8.21,6,12,6s7.17,2.13,8.82,5.5C19.17,14.87,15.79,17,12,17z"></path><path fill="none" d="M0,0h24v24H0V0z"></path></svg>
								</span>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="input-holder">
                                <input type="tel" id="phone" class="form-control your-contact" value="+91" placeholder="Your Contact number*">
                            </div>
                            <div class="input-holder drop-down-bd">
                                <ul class="list-unstyled" id="#li_option">
                                    <li class="init">When you need it?</li>
                                    <li data-value="value 1">In 2 week</li>
                                    <li data-value="value 2">Within 2 months</li>
                                    <li data-value="value 3">Within 3 months</li>
                                    <li data-value="value 3" class="date-picker">Specify a date
                                        <span class="date">
											<img src="assets/images/calender.svg" alt="calender bd">
										</span>
                                    </li>
                                </ul>
                                <input class="datepicker" id="date-picker-1" value="Specify a date" placeholder="Specify a date" />
                            </div>
                            <div class="input-holder">
                                <div class="request-tour-chk bd-from">
                                    <input type="checkbox" name="cb" id="cb2">
                                    <label for="cb2">Request a tour</label>
                                </div>
                            </div>

                            <div class="btn-holder">
                                <a class="btn full-width" target="_blank" href="thank-you.php">Submit</a>
                            </div>
                        </form>
                    </div>
                    <div class="popup-footer d-flx alingnVcenter">
                        <p>Already have an account? <a href="" class="link" data-toggle="modal" data-target="#login" data-dismiss="modal" aria-label="Close"> Login</a></p>
                        <p>New to Bisdesk? <a href="" class="link" data-toggle="modal" data-target="#signup" data-dismiss="modal" aria-label="Close"> Create Account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enquiry -->
    <!-- <div class="modal fade enquiry" id="enquiry_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<span class="close" data-dismiss="modal" aria-label="Close"></span>
				</div>
				<div class="modal-body">
					<h2 class="popup-head">Send Enquiry</h2>
					<div class="login-form">
						<form action="product_submit">
							<div class="input-holder tel-input-none">
								<input type="tel" id="phone" class="form-control tel-dropdown" value="+91" placeholder="Your Contact number*">
							</div>
							<div class="input-holder drop-down-bd">
								<ul class="list-unstyled" id="#li_option">
									<li class="init">When you need it?</li>
									<li data-value="value 1">In 2 week</li>
									<li data-value="value 2">Within 2 months</li>
									<li data-value="value 3">Within 3 months</li>
									<li data-value="value 3" class="date-picker">Specify a date
										<span class="date">
											<img src="assets/images/calender.svg" alt="calender bd">
										</span>
									</li>
								</ul>
								<input class="datepicker" id="date-picker-2" value="Specify a date" />
							</div>
							<div class="input-holder">
								<div class="request-tour-chk bd-from">
									<input type="checkbox" name="cb" id="cb1"><label for="cb1">Request a tour</label>
								</div>
							</div>

							<div class="btn-holder">
								<a class="btn full-width" href="">Submit</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div> -->
    </div>

    <!-- Thank you -->
    <div class="modal fade forgot-text thank-you" id="thank-you" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" data-dismiss="modal" aria-label="Close"></span>
                </div>
                <div class="modal-body">
                    <span class="img_bd">
						<img src="assets/images/bd_logo.svg" alt="bisdesk">
					</span>
                    <h2 class="popup-head">Thank you for your enquiry</h2>
                    <p>We will get in touch with you shortly</p>
                    <div class="login-form">
                        <div class="btn-holder">
                            <a class="btn" href="">VIEW YOUR ENQUIRIES</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Image Gallery	 -->
    <div class="modal fade bd-image-popup-gallery" id="image-gallery-bk" tabindex="-1" role="dialog" aria-labelledby="image-gallery-bk" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" data-dismiss="modal" aria-label="Close"></span>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mainSliderImg col-md-9">
                            <div class="slider-for">
                                <div class="slide">
                                    <figure class="img-center h100">
                                        <img src="assets/images/popup1.png" alt="images" class="img-responsive">
                                    </figure>
                                </div>
                                <div class="slide">
                                    <figure class="img-center h100">
                                        <img src="assets/images/popup2.png" alt="images" class="img-responsive">
                                    </figure>
                                </div>
                                <div class="slide">
                                    <figure class="img-center h100">
                                        <img src="assets/images/popup3.png" alt="images" class="img-responsive">
                                    </figure>
                                </div>
                                <div class="slide">
                                    <figure class="img-center h100">
                                        <img src="assets/images/popup1.png" alt="images" class="img-responsive">
                                    </figure>
                                </div>
                                <div class="slide">
                                    <figure class="img-center h100">
                                        <img src="assets/images/popup1.png" alt="images" class="img-responsive">
                                    </figure>
                                </div>
                                <div class="slide">
                                    <figure class="img-center h100">
                                        <img src="assets/images/popup2.png" alt="images" class="img-responsive">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="slideDetails col-md-3 ">
                            <div>
                                <div class="thumbSliders">
                                    <div class="slider-nav">
                                        <div class="slide-box">
                                            <figure class="img-center">
                                                <img src="assets/images/popup1.png" alt="images">
                                            </figure>
                                        </div>
                                        <div class="slide-box">
                                            <figure class="img-center">
                                                <img src="assets/images/popup2.png" alt="images">
                                            </figure>
                                        </div>
                                        <div class="slide-box">
                                            <figure class="img-center">
                                                <img src="assets/images/popup3.png" alt="images">
                                            </figure>
                                        </div>
                                        <div class="slide-box">
                                            <figure class="img-center">
                                                <img src="assets/images/popup1.png" alt="images">
                                            </figure>
                                        </div>
                                        <div class="slide-box">
                                            <figure class="img-center">
                                                <img src="assets/images/popup1.png" alt="images">
                                            </figure>
                                        </div>
                                        <div class="slide-box">
                                            <figure class="img-center">
                                                <img src="assets/images/popup2.png" alt="images">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-image-popup-gallery" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="image-gallery" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body bd-container">
                    <div class="modal-header">
                        <span class="close-msg" data-dismiss="modal" aria-label="Close"></span>
                        <div class="slide-no-details d-flx">
                            <h4>View of office reception</h4>

                        </div>
                    </div>
                    <div class="mainSliderImg">
                        <div class="slider-for">
                            <div class="slide">
                                <figure class="img-center" style="background:url('assets/images/uploads/pop-banner-1.jpg')no-repeat center">
                                    <!-- <img src="assets/images/uploads/pop-banner-1.jpg" alt="images" class="img-responsive"> -->
                                </figure>
                            </div>
                            <div class="slide">
                                <figure class="img-center" style="background:url('assets/images/uploads/pop-banner-2.jpg')no-repeat center">
                                    <!-- <img src="assets/images/uploads/pop-banner-2.jpg" alt="images" class="img-responsive"> -->
                                </figure>
                            </div>
                            <div class="slide">
                                <figure class="img-center" style="background:url('assets/images/uploads/pop-banner-3.jpg')no-repeat center">
                                    <!-- <img src="assets/images/uploads/pop-banner-3.jpg" alt="images" class="img-responsive"> -->
                                </figure>
                            </div>
                            <div class="slide">
                                <figure class="img-center" style="background:url('assets/images/uploads/pop-banner-1.jpg')no-repeat center">
                                    <!-- <img src="assets/images/uploads/pop-banner-1.jpg" alt="images" class="img-responsive"> -->
                                </figure>
                            </div>
                            <div class="slide">
                                <figure class="img-center" style="background:url('assets/images/uploads/pop-banner-4.jpg')no-repeat center">
                                    <!-- <img src="assets/images/uploads/pop-banner-4.jpg" alt="images" class="img-responsive"> -->
                                </figure>
                            </div>
                            <div class="slide">
                                <figure class="img-center" style="background:url('assets/images/uploads/pop-banner-5.jpg')no-repeat center">
                                    <!-- <img src="assets/images/uploads/pop-banner-5.jpg" alt="images" class="img-responsive"> -->
                                </figure>
                            </div>
                            <div class="slide">
                                <figure class="img-center" style="background:url('assets/images/uploads/pop-banner-3.jpg')no-repeat center">
                                    <!-- <img src="assets/images/uploads/pop-banner-3.jpg" alt="images" class="img-responsive"> -->
                                </figure>
                            </div>
                            <div class="slide">
                                <figure class="img-center" style="background:url('assets/images/uploads/pop-banner-3.jpg')no-repeat center">
                                    <!-- <img src="assets/images/uploads/pop-banner-3.jpg" alt="images" class="img-responsive"> -->
                                </figure>
                            </div>
                            <div class="slide">
                                <figure class="img-center" style="background:url('assets/images/uploads/pop-banner-1.jpg')no-repeat center">
                                    <!-- <img src="assets/images/uploads/pop-banner-1.jpg" alt="images" class="img-responsive"> -->
                                </figure>
                            </div>
                            <div class="slide">
                                <figure class="img-center" style="background:url('assets/images/uploads/pop-banner-4.jpg')no-repeat center">
                                    <!-- <img src="assets/images/uploads/pop-banner-4.jpg" alt="images" class="img-responsive"> -->
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="slideDetails">
                        <div>
                            <div class="thumbSliders">
                                <div class="slider-nav">
                                    <div class="slide-box">
                                        <figure class="img-center">
                                            <img src="assets/images/uploads/pop-banner-1.jpg" alt="images">
                                        </figure>
                                    </div>
                                    <div class="slide-box">
                                        <figure class="img-center">
                                            <img src="assets/images/uploads/pop-banner-2.jpg" alt="images">
                                        </figure>
                                    </div>
                                    <div class="slide-box">
                                        <figure class="img-center">
                                            <img src="assets/images/uploads/pop-banner-3.jpg" alt="images">
                                        </figure>
                                    </div>
                                    <div class="slide-box">
                                        <figure class="img-center">
                                            <img src="assets/images/uploads/pop-banner-1.jpg" alt="images">
                                        </figure>
                                    </div>
                                    <div class="slide-box">
                                        <figure class="img-center">
                                            <img src="assets/images/uploads/pop-banner-4.jpg" alt="images">
                                        </figure>
                                    </div>
                                    <div class="slide-box">
                                        <figure class="img-center">
                                            <img src="assets/images/uploads/pop-banner-5.jpg" alt="images">
                                        </figure>
                                    </div>
                                    <div class="slide-box">
                                        <figure class="img-center">
                                            <img src="assets/images/uploads/pop-banner-3.jpg" alt="images">
                                        </figure>
                                    </div>
                                    <div class="slide-box">
                                        <figure class="img-center">
                                            <img src="assets/images/uploads/pop-banner-4.jpg" alt="images">
                                        </figure>
                                    </div>
                                    <div class="slide-box">
                                        <figure class="img-center">
                                            <img src="assets/images/uploads/pop-banner-5.jpg" alt="images">
                                        </figure>
                                    </div>
                                    <div class="slide-box">
                                        <figure class="img-center">
                                            <img src="assets/images/uploads/pop-banner-3.jpg" alt="images">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-sort opup-->

    </div>
</section>