<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">Residential Page Content</h2>
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
            <a href="#" id="refreshBtn" class="btn btn-primary rounded light">Refresh</a>
        </div>
        <div class="container">
            <div class="card-header">
                <h4 class="card-title text-captalize">Service Content</h4>
                <a href="<?php echo base_url(); ?>add-residential" class="btn btn-primary">Add New</a>
            </div>
            <div class="my-3 row">
                <div class="tab-content">
                    <div id="navpills-1" class="tab-pane active">
                        <div class="row">
                            <?php foreach ($cards as $card): ?>
                                <div class="col-xl-3 col-xxl-4 col-md-6 col-sm-6 col-lg-4 m-b30">
                                    <div class="property-card style-1">
                                        <div class="dz-media">
                                            <img src="<?php echo $card['image']; ?>" alt="/" />
                                        </div>
                                        <div class="dz-content">
                                            <h3 class="title">
                                                <?php echo $card['content']; ?>
                                            </h3>
                                            <p>
                                                <?php echo $card['descripition']; ?>
                                            </p>
                                            <hr />
                                            <div class="dz-footer">
                                                <a href="<?php echo base_url(); ?>welcome/delete/<?php echo $card['id']; ?>?table=<?php echo base64_encode('residentialcard'); ?>"
                                                    class="btn btn-danger">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <div class="col-xl-12">
                                <div class="card-header">
                                    <h4 class="card-title text-captalize">Associate
                                        Partner</h4>
                                    <a href="<?php echo base_url(); ?>add/residential-page/associate-partner"
                                        class="btn btn-primary">Add New</a>
                                </div>
                                <div class="card-body pb-4">
                                    <div class="row">
                                        <?php foreach ($brands as $brand): ?>
                                            <div class="col-md-3 col-lg-3" style="padding: 10px">
                                                <div class="avatar-upload align-items-center">
                                                    <div class="position-relative">
                                                        <div class="avatar-preview">
                                                            <div id="imagePreview"
                                                                style="background-image: url(<?php echo $brand['image']; ?>);">
                                                            </div>
                                                        </div>
                                                        <div class="change-btn align-items-center flex-wrap">
                                                            <button type="button" class="btn btn-danger mb-2"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#deleteModal<?php echo $brand['id']; ?>">Delete</button>

                                                            <div class="modal fade"
                                                                id="deleteModal<?php echo $brand['id']; ?>" tabindex="-1"
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
                                                                            <a href="<?php echo base_url(); ?>welcome/delete/<?php echo $brand['id']; ?>?table=<?php echo base64_encode('residentialbrands'); ?>"
                                                                                type="button"
                                                                                class="btn btn-danger light">Delete</a>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>