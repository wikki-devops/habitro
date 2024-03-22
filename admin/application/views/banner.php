<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">Banner Content</h2>
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
        <div class="row">
            <div class="col-xl-12">
                <div class="filter cm-content-box box-primary">
                    <div class="cm-content-body form excerpt">
                        <div class="card-body pb-4">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Page Title</th>
                                            <th>Banner Image</th>
                                            <th>Banner Title </th>
                                            <th>Banner Contnet</th>
                                            <th>Lead Form</th>
                                            <th>Edit Banner</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($banners as $banner): ?>
                                            <tr>
                                                <td>
                                                    <?php echo $banner['page_heading']; ?>
                                                </td>
                                                <td >
                                                    
                                                        <img class="rounded"
                                                            src="<?php echo $banner['bannerimage']; ?>"
                                                            style="width:80%;" alt="/">
                                                </td>
                                                <td>
                                                    <?php echo $banner['heading']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $banner['banner_p']; ?>
                                                </td>
                                                <td>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            id="flexSwitchCheckChecked" <?php echo ($banner['component'] == '1') ? 'checked' : ''; ?>>
                                                    </div>
                                                </td>

                                                <td class="text-nowrap">
                                                    <a href="<?php echo base_url();?>website-banner/update/<?php echo $banner['id']; ?>"
                                                        class="btn btn-warning btn-sm content-icon">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>