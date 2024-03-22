<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">Gallery Wall</h2>
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
            <a href="<?php echo base_url(); ?>welcome/update_gallery" class="btn btn-primary"
                style="margin-right: 10px">Add New</a>
            <a href="#" id="refreshBtn" class="btn btn-primary rounded light">Refresh</a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="nav flex-column nav-pills mb-3">
                                        <a href="#work" data-bs-toggle="pill" class="nav-link active show">Work</a>
                                        <a href="#kitchen" data-bs-toggle="pill" class="nav-link">Kitchen</a>
                                        <a href="#bedroom" data-bs-toggle="pill" class="nav-link">Bedroom</a>
                                        <a href="#hall" data-bs-toggle="pill" class="nav-link">Hall</a>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="tab-content">
                                        <div id="work" class="tab-pane fade active show">
                                            <div class="row">
                                                <?php foreach ($gallery as $row): ?>
                                                    <?php if ($row['data_filter'] === 'work'): ?>
                                                        <div class="col-xl-4 col-xxl-4 col-md-6 col-sm-6 col-lg-4 m-b30">
                                                            <div class="property-card style-1">
                                                                <div class="dz-media">
                                                                    <img src="<?php echo $row['image']; ?>"
                                                                        style="width: 1005; height: 200px;object-fit: cover; "
                                                                        alt="/">
                                                                </div>
                                                                <div class="dz-content" style="padding: 10px">
                                                                    <div class="dz-footer">
                                                                        <ul>
                                                                            <li><a
                                                                                    href="<?php echo base_url(); ?>welcome/delete/<?php echo $row['id']; ?>?table=<?php echo base64_encode('galleries'); ?>"><i
                                                                                        class="fa-solid fa-trash"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                        <div id="kitchen" class="tab-pane fade show">
                                            <div class="row">
                                                <?php foreach ($gallery as $row): ?>
                                                    <?php if ($row['data_filter'] === 'kitchen'): ?>
                                                        <div class="col-xl-4 col-xxl-4 col-md-6 col-sm-6 col-lg-4 m-b30">
                                                            <div class="property-card style-1">
                                                                <div class="dz-media">
                                                                    <img src="<?php echo $row['image']; ?>"
                                                                        style="width: 1005; height: 200px;object-fit: cover; "
                                                                        alt="/">
                                                                </div>
                                                                <div class="dz-content" style="padding: 10px">
                                                                    <div class="dz-footer">
                                                                        <ul>
                                                                            <li><a
                                                                                    href="<?php echo base_url(); ?>welcome/delete/<?php echo $row['id']; ?>?table=<?php echo base64_encode('galleries'); ?>"><i
                                                                                        class="fa-solid fa-trash"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                        <div id="bedroom" class="tab-pane fade show">
                                            <div class="row">
                                                <?php foreach ($gallery as $row): ?>
                                                    <?php if ($row['data_filter'] === 'bedroom'): ?>
                                                        <div class="col-xl-4 col-xxl-4 col-md-6 col-sm-6 col-lg-4 m-b30">
                                                            <div class="property-card style-1">
                                                                <div class="dz-media">
                                                                    <img src="<?php echo $row['image']; ?>"
                                                                        style="width: 1005; height: 200px;object-fit: cover; "
                                                                        alt="/">
                                                                </div>
                                                                <div class="dz-content" style="padding: 10px">
                                                                    <div class="dz-footer">
                                                                        <ul>
                                                                            <li><a
                                                                                    href="<?php echo base_url(); ?>welcome/delete/<?php echo $row['id']; ?>?table=<?php echo base64_encode('galleries'); ?>"><i
                                                                                        class="fa-solid fa-trash"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                        <div id="hall" class="tab-pane fade show">
                                            <div class="row">
                                                <?php foreach ($gallery as $row): ?>
                                                    <?php if ($row['data_filter'] === 'hall'): ?>
                                                        <div class="col-xl-4 col-xxl-4 col-md-6 col-sm-6 col-lg-4 m-b30">
                                                            <div class="property-card style-1">
                                                                <div class="dz-media">
                                                                    <img src="<?php echo $row['image']; ?>"
                                                                        style="width: 1005; height: 200px;object-fit: cover; "
                                                                        alt="/">
                                                                </div>
                                                                <div class="dz-content" style="padding: 10px">
                                                                    <div class="dz-footer">
                                                                        <ul>
                                                                            <li><a
                                                                                    href="<?php echo base_url(); ?>welcome/delete/<?php echo $row['id']; ?>?table=<?php echo base64_encode('galleries'); ?>"><i
                                                                                        class="fa-solid fa-trash"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
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
    </div>
</div>