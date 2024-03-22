<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">Company Profile</h2>
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
            <div class="row">
                <div class="col-xl-12">
                    <div class="filter cm-content-box box-primary">
                        <div class="cm-content-body form excerpt">
                            <div class="card-body pb-4">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <?php foreach ($company as $company): ?>
                                                <?php if ($company['id'] <= 5): ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $company['heading']; ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if ($company['content_type'] == 'Image') {
                                                                echo "<img src='{$company['content']}' style='height: 100px;background: grey;padding:10px';>";
                                                            } else {
                                                                echo $company['content'];
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="text-nowrap">
                                                            <a href="<?php echo base_url(); ?>profile/update/<?php echo $company['id']; ?>"
                                                                class="btn btn-warning btn-sm content-icon">
                                                                <i class="fa fa-edit"></i>
                                                            </a>

                                                        </td>
                                                    </tr>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="filter cm-content-box box-primary">
                        <div class="content-title">
                            <h4>
                                Social Media Details
                            </h4>
                        </div>

                        <div class="cm-content-body form excerpt">
                            <div class="card-body pb-4">
                                <div class="table-responsive">
                                    <table class="table">

                                        <tbody>
                                            <?php foreach ($social as $company): ?>
                                                <?php if ($company['id'] > 5): ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $company['heading']; ?>
                                                        </td>
                                                        <td><a href="<?php echo $company['content']; ?>" target="_blank">
                                                                <?php echo $company['content']; ?>
                                                            </a></td>
                                                        <td class="text-nowrap">
                                                            <a href="<?php echo base_url(); ?>welcome/update_profile/<?php echo $company['id']; ?>"
                                                                class="btn btn-warning btn-sm content-icon">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endif; ?>
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
</div>