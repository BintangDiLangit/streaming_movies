<div class="modal fade premodal premodal-login" id="modallogin" tabindex="-1" role="dialog"
    aria-labelledby="modallogintitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="tab-content">
                <div id="modal-tab-login" class="tab-pane active">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modallogintitle">Welcome back!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger mb-3" id="login-error" style="display: none;"></div>
                        <form class="preform" id="login-form" method="post">
                            <div class="form-group">
                                <label class="prelabel" for="email">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="name@email.com"
                                    name="email" required="">
                            </div>
                            <div class="form-group">
                                <label class="prelabel" for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password"
                                    name="password" required="">
                            </div>
                            <div class="form-check custom-control custom-checkbox">
                                <div class="float-left">
                                    <input type="checkbox" class="custom-control-input" name="remember" value="1"
                                        id="remember" checked="">
                                    <label class="custom-control-label" for="remember">Remember me</label>
                                </div>
                                <div class="float-right">
                                    <a href="javascript:;" class="link-highlight text-forgot forgot-tab-link">Forgot
                                        password?</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="form-group login-btn mb-0">
                                <button id="btn-login" class="btn btn-primary btn-block">Login</button>
                                <div class="loading-relative" id="login-loading" style="display: none;">
                                    <div class="loading">
                                        <div class="span1"></div>
                                        <div class="span2"></div>
                                        <div class="span3"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer text-center">
                        Don't have an account? <a class="link-highlight register-tab-link" title="Register">Register</a>
                        or <a class="link-highlight verify-tab-link" title="Account Verification">Verify</a>
                    </div>
                </div>
                <div id="modal-tab-register" class="tab-pane fade">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modallogintitle2">Create an Account</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger mb-3" id="register-error" style="display: none;"></div>
                        <div class="alert alert-success mb-3" id="register-success" style="display: none;">
                            An email has been sent to your email address containing an activation link. Please check
                            your email and click on the link to activate your account (It may get in the email spam
                            box).
                        </div>
                        <form class="preform" method="post" id="register-form">
                            <div class="form-group">
                                <label class="prelabel" for="re-username">Your name</label>
                                <input type="text" class="form-control" id="re-username" placeholder="Name"
                                    name="name" required="">
                            </div>
                            <div class="form-group">
                                <label class="prelabel" for="re-email">Email address</label>
                                <input type="email" class="form-control" id="re-email"
                                    placeholder="name@email.com" name="email" required="">
                            </div>
                            <div class="form-group">
                                <label class="prelabel" for="re-password">Password</label>
                                <input type="password" class="form-control" id="re-password" placeholder="Password"
                                    name="password" required="">
                            </div>
                            <div class="form-group">
                                <label class="prelabel" for="re-confirmpassword">Confirm Password</label>
                                <input type="password" class="form-control" id="re-confirmpassword"
                                    placeholder="Confirm Password" required="">
                            </div>
                            <div data-theme="dark" class="g-recaptcha mb-3" id="register-recaptcha">
                                <div style="width: 304px; height: 78px;">
                                    <div><iframe title="reCAPTCHA" width="304" height="78" role="presentation"
                                            name="a-vljyu2vxahlg" frameborder="0" scrolling="no"
                                            sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                                            src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lfz6fAmAAAAAKZdTpHpGUfe5OUYvosjXcpasbCd&amp;co=aHR0cHM6Ly9hbml3YXRjaC50bzo0NDM.&amp;hl=en&amp;v=x5WWoE57Fv0d6ATKsLDIAKnt&amp;theme=dark&amp;size=normal&amp;cb=bpf20f21fc7v"></iframe>
                                    </div>
                                    <textarea id="g-recaptcha-response-2" name="g-recaptcha-response" class="g-recaptcha-response"
                                        style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                </div>
                            </div>
                            <div class="form-group login-btn mb-0">
                                <button id="btn-register" class="btn btn-primary btn-block">Register</button>
                                <div class="loading-relative" id="register-loading" style="display: none;">
                                    <div class="loading">
                                        <div class="span1"></div>
                                        <div class="span2"></div>
                                        <div class="span3"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer text-center">
                        Have an account? <a class="link-highlight login-tab-link" title="Login">Login</a>
                    </div>
                </div>
                <div id="modal-tab-forgot" class="tab-pane fade">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modallogintitle3">Reset Password</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body" style="padding-bottom: 20px;">
                        <form class="preform" method="post" id="forgot-form">
                            <div class="alert alert-success mb-3" id="forgot-success" style="display:none">
                            </div>
                            <div class="alert alert-danger mb-3" id="forgot-error" style="display:none"></div>
                            <div class="form-group">
                                <label class="prelabel" for="forgot-email">Your Email</label>
                                <input required="" type="text" class="form-control" id="forgot-email"
                                    name="email" placeholder="name@email.com">
                            </div>
                            <div data-theme="dark" class="g-recaptcha mb-3" id="forgot-recaptcha">
                                <div style="width: 304px; height: 78px;">
                                    <div><iframe title="reCAPTCHA" width="304" height="78" role="presentation"
                                            name="a-pa4ij0mc6a89" frameborder="0" scrolling="no"
                                            sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                                            src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lfz6fAmAAAAAKZdTpHpGUfe5OUYvosjXcpasbCd&amp;co=aHR0cHM6Ly9hbml3YXRjaC50bzo0NDM.&amp;hl=en&amp;v=x5WWoE57Fv0d6ATKsLDIAKnt&amp;theme=dark&amp;size=normal&amp;cb=4wx85mgq3il1"></iframe>
                                    </div>
                                    <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response"
                                        style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                </div>
                            </div>
                            <div class="form-group login-btn mb-0">
                                <button class="btn btn-primary btn-block">Submit</button>
                                <div class="loading-relative" id="forgot-loading" style="display: none;">
                                    <div class="loading">
                                        <div class="span1"></div>
                                        <div class="span2"></div>
                                        <div class="span3"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer text-center">
                        <a class="link-highlight login-tab-link" title=""><i
                                class="fas fa-angle-left mr-2"></i>Back to Sign-in</a>
                    </div>
                </div>
                <div id="modal-tab-verify" class="tab-pane fade">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modallogintitle3">Send Verification Email</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body" style="padding-bottom: 20px;">
                        <form class="preform" method="post" id="verify-form">
                            <div class="alert alert-success mb-3" id="verify-success" style="display:none">
                            </div>
                            <div class="alert alert-danger mb-3" id="verify-error" style="display:none"></div>
                            <div class="form-group">
                                <label class="prelabel" for="verify-email">Your Email</label>
                                <input required="" type="text" class="form-control" id="verify-email"
                                    name="email" placeholder="name@email.com">
                            </div>
                            <div data-theme="dark" class="g-recaptcha mb-3" id="verify-recaptcha">
                                <div style="width: 304px; height: 78px;">
                                    <div><iframe title="reCAPTCHA" width="304" height="78" role="presentation"
                                            name="a-dhn3u8qp7p9z" frameborder="0" scrolling="no"
                                            sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                                            src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lfz6fAmAAAAAKZdTpHpGUfe5OUYvosjXcpasbCd&amp;co=aHR0cHM6Ly9hbml3YXRjaC50bzo0NDM.&amp;hl=en&amp;v=x5WWoE57Fv0d6ATKsLDIAKnt&amp;theme=dark&amp;size=normal&amp;cb=kamlxplwd1id"></iframe>
                                    </div>
                                    <textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response"
                                        style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                </div>
                            </div>
                            <div class="form-group login-btn mb-0">
                                <button class="btn btn-primary btn-block">Submit</button>
                                <div class="loading-relative" id="verify-loading" style="display: none;">
                                    <div class="loading">
                                        <div class="span1"></div>
                                        <div class="span2"></div>
                                        <div class="span3"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer text-center">
                        <a class="link-highlight login-tab-link" title=""><i
                                class="fas fa-angle-left mr-2"></i>Back to Sign-in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
