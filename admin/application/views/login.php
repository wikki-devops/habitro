<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Login</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png" />
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
</head>

<body style="background-image: url('<?php echo base_url(); ?>assets/images/login-background.jpg');background-repeat: no-repeat;background-size: cover;">
    <div class="fix-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <div class="card mb-0 h-auto">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <a href="<?php echo base_url();?>"><img class="logo-auth"
                                        src="https://ik.imagekit.io/habitro/company/sticky-logo.png?updatedAt=1706601985466"
                                        alt="" /></a>
                            </div>
                            <h4 class="text-center mb-4">Sign in your account</h4>
                            <?php if ($this->session->flashdata('danger')): ?>
                                <?php echo '
                                <div class="alert alert-danger solid alert-dismissible fade show">
									<svg class="alert-icon me-2" viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" ><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
									<strong>Error!</strong> ' . $this->session->flashdata('danger') . '
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                    </button>
                                </div>'; ?>
                            <?php endif; ?>
                            <?php echo form_open(base_url('welcome/adminLogin')); ?>
                            <div class="form-group mb-4">
                                <label class="form-label" for="email">User Name</label>
                                <input type="text" class="form-control" placeholder="Enter User Name" id="email"
                                    name="email" required />
                            </div>
                            <div class="form-group mb-3 mb-sm-4">
                                <label class="form-label">Password</label>
                                <div class="position-relative">
                                    <input type="password" id="dz-password" class="form-control" placeholder="Enter Password"
                                        name="password" required />
                                    <span class="show-pass eye">
                                        <i class="fa fa-eye-slash"></i>
                                        <i class="fa fa-eye"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?php echo base_url(); ?>assets/vendor/global/global.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/deznav-init.js"></script>
    </div>
</body>

</html>