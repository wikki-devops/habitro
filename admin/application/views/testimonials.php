<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">Testimonials</h2>
                <?php if ($this->session->flashdata('Error')): ?>
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            toastr.error('<?php echo $this->session->flashdata('Error'); ?>', 'Deleted!', {
                                positionClass: "toast-top-right",
                                timeOut: 5e3,
                                closeButton: !0,
                                debug: !1,
                                newestOnTop: !0,
                                progressBar: !0,
                                preventDuplicates: !0,
                                onclick: null,
                                showDuration: "300",
                                hideDuration: "1000",
                                extendedTimeOut: "1000",
                                showEasing: "swing",
                                hideEasing: "linear",
                                showMethod: "fadeIn",
                                hideMethod: "fadeOut",
                                tapToDismiss: !1
                            });
                        });
                    </script>
                <?php endif; ?>
                <?php if ($this->session->flashdata('success')): ?>
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            toastr.success('<?php echo $this->session->flashdata('success'); ?>', 'success!', {
                                positionClass: "toast-top-right",
                                timeOut: 500000000,
                                closeButton: !0,
                                debug: !1,
                                newestOnTop: !0,
                                progressBar: !0,
                                positionClass: "toast-top-right",
                                preventDuplicates: !0,
                                onclick: null,
                                showDuration: "300",
                                hideDuration: "1000",
                                extendedTimeOut: "1000",
                                showEasing: "swing",
                                hideEasing: "linear",
                                showMethod: "fadeIn",
                                hideMethod: "fadeOut",
                                tapToDismiss: !1
                            });
                        });
                    </script>
                <?php endif; ?>
            </div>
            <a href="<?php echo base_url(); ?>add-testimonials" class="btn btn-primary rounded light"
                style="margin-right: 10px">Add New</a>
            <a href="#" id="refreshBtn" class="btn btn-primary rounded light">Refresh</a>
        </div>
        <div class="row">
            <?php foreach ($testimonials as $testimonial): ?>
                <div class="col-xl-4">
                    <div class="card">
                        <?php if (isset($testimonial['video']) && !empty($testimonial['video']) && isset($testimonial['thumbnail']) && !empty($testimonial['thumbnail'])): ?>
                            <a href="<?php echo $testimonial['video']; ?>" class="popup-youtube">
                                <img class="card-img-top img-fluid" src="<?php echo $testimonial['thumbnail']; ?>" width="100%"
                                    alt="/">
                            </a>
                        <?php endif; ?>
                        <div class="card-body">
                            <p class="card-text">
                                <?php echo $testimonial['testimonial']; ?>
                            </p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text d-inline">
                                <?php echo $testimonial['company']; ?>
                            </p>
                            <a href="<?php echo base_url(); ?>welcome/delete/<?php echo $testimonial['id']; ?>?table=<?php echo base64_encode('testimonials'); ?>"
                                class="btn btn-danger card-link float-end">Delete</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>