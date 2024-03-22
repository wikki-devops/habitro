<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">All Blogs</h2>
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
            <a href="<?php echo base_url(); ?>add/new-blog" class="btn btn-primary rounded light"
                style="margin-right: 10px">Add New Blog</a>
            <a href="#" id="refreshBtn" class="btn btn-primary rounded light">Refresh</a>
        </div>
        <div class="row">
            <?php foreach ($blogs as $blog): ?>
                <div class="col-xl-6 col-xxl-6 col-md-6 col-sm-12 col-lg-6 m-b30">
                    <div class="property-card style-1">
                        <div class="dz-media">
                            <img src="<?php echo $blog['image']; ?>" alt="/" style="height: 400px;" />
                        </div>
                        <div class="dz-content">
                            <h3 class="title">
                                <?php echo $blog['title']; ?>
                            </h3>
                            <p>
                                <?php echo $blog['content']; ?>
                            </p>
                            <hr />
                            <div class="dz-footer">
                                <div class="property-card">
                                    <h6 class="title mb-0">By Habitro</h6>
                                </div>
                                <ul>
                                    <li>
                                        <a href="<?php echo base_url(); ?>welcome/delete/<?php echo $blog['id']; ?>?table=<?php echo base64_encode('blogs'); ?>"
                                            class="btn btn-danger card-link float-end">Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>