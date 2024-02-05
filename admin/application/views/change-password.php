<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">Change Password</h2>
                <?php if ($this->session->flashdata('success')): ?>
                    <?php echo '
                    <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                    </button>
                    <strong>Success!</strong> ' . $this->session->flashdata('success') . '
                    </div>'; ?>
                <?php endif; ?>
                <?php $oldPasswordError = form_error('old_password'); ?>
                <?php if (!empty($oldPasswordError)): ?>
                    <div class="alert alert-danger solid alert-dismissible fade show">
                        <?php echo $oldPasswordError; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
                    </div>
                <?php endif; ?>
            </div>
            <a href="#" id="refreshBtn" class="btn btn-primary rounded light">Refresh</a>
        </div>
        <div class="row">
            <div class="col-xl-10 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="basic-form">
                            <?php echo form_open_multipart('welcome/change_password'); ?>
                            <div class="mb-3 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" value="<?php echo $this->session->userdata('email'); ?>"
                                        class="form-control" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label">Password</label>
                                <div class="col-sm-9">
                                    <div class="position-relative">
                                        <input type="password" id="dz-password" class="form-control"
                                            placeholder="Old Password" name="old_password" id="old_password" required />
                                        <span class="show-pass eye">
                                            <i class="fa fa-eye-slash"></i>
                                            <i class="fa fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label">New Password</label>
                                <div class="col-sm-9">
                                    <div class="position-relative">
                                        <input type="password" id="password" class="form-control"
                                            placeholder="New Password" name="new_password" id="new_password"
                                            oninput="validatePassword()" required />
                                        <span class="show-pass eye">
                                            <i class="fa fa-eye-slash"></i>
                                            <i class="fa fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label">Confirm New Password</label>
                                <div class="col-sm-9">
                                    <div class="position-relative">
                                        <input type="password" id="confirmPassword" class="form-control"
                                            placeholder="Confirm New Password" id="confirm_new_password"
                                            onkeyup="checkPass(); return false;" name="confirm_new_password"
                                            oninput="validatePassword()" required />
                                        <span class="show-pass eye">
                                            <i class="fa fa-eye-slash"></i>
                                            <i class="fa fa-eye"></i>
                                        </span>
                                    </div>
                                    <p id="error-message" class="error-message" style="color: red;"></p>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </div>
                            </div>
                            </form>
                            <script>
                                function validatePassword() {
                                    var password = document.getElementById("password").value;
                                    var confirmPassword = document.getElementById("confirmPassword").value;
                                    var errorMessage = document.getElementById("error-message");

                                    if (password.length < 8) {
                                        errorMessage.textContent = "Password must be at least 8 characters long.";
                                    } else if (password !== confirmPassword) {
                                        errorMessage.textContent = "Passwords do not match.";
                                    } else {
                                        errorMessage.textContent = "";
                                    }
                                }
                            </script>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>