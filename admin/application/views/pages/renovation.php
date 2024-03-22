<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">Renovation Before After Slider</h2>
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
            <a href="<?php echo base_url(); ?>add/before-after-slider" class="btn btn-primary rounded light"
                style="margin-right: 10px">Add New</a>
            <a href="#" id="refreshBtn" class="btn btn-primary rounded light">Refresh</a>
        </div>
        <div class="container">
            <div class="row">
                <?php foreach ($renovation as $renovation): ?>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Before After Image</h5>
                            </div>
                            <img-comparison-slider>
                                <img slot="first" src="<?php echo $renovation['first']; ?>" width="100%" />
                                <img slot="second" src="<?php echo $renovation['second']; ?>" width="100%" />
                            </img-comparison-slider>
                            <div class="card-footer">
                                <div class="change-btn align-items-center flex-wrap">
                                    <button type="button" class="btn btn-danger mb-2" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal<?php echo $renovation['id']; ?>">Delete</button>

                                    <div class="modal fade" id="deleteModal<?php echo $renovation['id']; ?>" tabindex="-1"
                                        role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Are you sure you want to
                                                        delete this?</h5>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">This will delete this
                                                    permanently. You cannot undo this action.</div>
                                                <div class="modal-footer">
                                                    <a type="button" class="btn btn-primary"
                                                        data-bs-dismiss="modal">Close</a>
                                                    <a href="<?php echo base_url(); ?>welcome/delete/<?php echo $renovation['id']; ?>?table=<?php echo base64_encode('renovation'); ?>"
                                                        type="button" class="btn btn-danger light">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>