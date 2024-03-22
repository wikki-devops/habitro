<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">Residential Price Update</h2>
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
            <?php if (!empty($masterpricing)): ?>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <span class="badge badge-info"><?php echo $masterpricing[0]['variant']; ?></span>
                            <h4 class="card-title text-uppercase">
                                <?php echo $masterpricing[0]['bhks']; ?>
                            </h4>
                            <span class="badge badge-secondary">Rs
                                <?php echo $masterpricing[0]['pricing']; ?> / Lakhs
                            </span>
                            <!--a href="add-includes" class="btn btn-primary">Add Includes</!--a-->
                        </div>
                        <div class="card-body">
                            <ol><?php echo $masterpricing[0]['includes']; ?><ol>
                            <div class="card-footer border-0 pt-0">
                                <a href="<?php echo base_url(); ?>residential/price/update/<?php echo $masterpricing[0]['id']; ?>"
                                    class="card-link float-end">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <span class="badge badge-info"><?php echo $masterpricing[1]['variant']; ?></span>
                            <h4 class="card-title text-uppercase">
                                <?php echo $masterpricing[1]['bhks']; ?>
                            </h4>
                            <span class="badge badge-secondary">Rs
                                <?php echo $masterpricing[1]['pricing']; ?> / Lakhs
                            </span>
                            <!--a href="add-includes" class="btn btn-primary">Add Includes</!--a-->
                        </div>
                        <div class="card-body">
                            <ol><?php echo $masterpricing[1]['includes']; ?><ol>
                            <div class="card-footer border-0 pt-0">
                                <a href="<?php echo base_url(); ?>residential/price/update/<?php echo $masterpricing[1]['id']; ?>"
                                    class="card-link float-end">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <span class="badge badge-info"><?php echo $masterpricing[2]['variant']; ?></span>
                            <h4 class="card-title text-uppercase">
                                <?php echo $masterpricing[2]['bhks']; ?>
                            </h4>
                            <span class="badge badge-secondary">Rs
                                <?php echo $masterpricing[2]['pricing']; ?> / Lakhs
                            </span>
                            <!--a href="add-includes" class="btn btn-primary">Add Includes</!--a-->
                        </div>
                        <div class="card-body">
                            <ol><?php echo $masterpricing[2]['includes']; ?><ol>
                            <div class="card-footer border-0 pt-0">
                                <a href="<?php echo base_url(); ?>residential/price/update/<?php echo $masterpricing[2]['id']; ?>"
                                    class="card-link float-end">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <span class="badge badge-info"><?php echo $masterpricing[3]['variant']; ?></span>
                            <h4 class="card-title text-uppercase">
                                <?php echo $masterpricing[3]['bhks']; ?>
                            </h4>
                            <span class="badge badge-secondary">Rs
                                <?php echo $masterpricing[3]['pricing']; ?> / Lakhs
                            </span>
                            <!--a href="add-includes" class="btn btn-primary">Add Includes</!--a-->
                        </div>
                        <div class="card-body">
                            <ol><?php echo $masterpricing[3]['includes']; ?><ol>
                            <div class="card-footer border-0 pt-0">
                                <a href="<?php echo base_url(); ?>residential/price/update/<?php echo $masterpricing[3]['id']; ?>"
                                    class="card-link float-end">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <span class="badge badge-info"><?php echo $masterpricing[4]['variant']; ?></span>
                            <h4 class="card-title text-uppercase">
                                <?php echo $masterpricing[4]['bhks']; ?>
                            </h4>
                            <span class="badge badge-secondary">Rs
                                <?php echo $masterpricing[4]['pricing']; ?> / Lakhs
                            </span>
                            <!--a href="add-includes" class="btn btn-primary">Add Includes</!--a-->
                        </div>
                        <div class="card-body">
                            <ol><?php echo $masterpricing[4]['includes']; ?><ol>
                            <div class="card-footer border-0 pt-0">
                                <a href="<?php echo base_url(); ?>residential/price/update/<?php echo $masterpricing[4]['id']; ?>"
                                    class="card-link float-end">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <span class="badge badge-info"><?php echo $masterpricing[5]['variant']; ?></span>
                            <h4 class="card-title text-uppercase">
                                <?php echo $masterpricing[5]['bhks']; ?>
                            </h4>
                            <span class="badge badge-secondary">Rs
                                <?php echo $masterpricing[5]['pricing']; ?> / Lakhs
                            </span>
                            <!--a href="add-includes" class="btn btn-primary">Add Includes</!--a-->
                        </div>
                        <div class="card-body">
                            <ol><?php echo $masterpricing[5]['includes']; ?><ol>
                            <div class="card-footer border-0 pt-0">
                                <a href="<?php echo base_url(); ?>residential/price/update/<?php echo $masterpricing[5]['id']; ?>"
                                    class="card-link float-end">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <span class="badge badge-info"><?php echo $masterpricing[6]['variant']; ?></span>
                            <h4 class="card-title text-uppercase">
                                <?php echo $masterpricing[6]['bhks']; ?>
                            </h4>
                            <span class="badge badge-secondary">Rs
                                <?php echo $masterpricing[6]['pricing']; ?> / Lakhs
                            </span>
                            <!--a href="add-includes" class="btn btn-primary">Add Includes</!--a-->
                        </div>
                        <div class="card-body">
                            <ol><?php echo $masterpricing[6]['includes']; ?><ol>
                            <div class="card-footer border-0 pt-0">
                                <a href="<?php echo base_url(); ?>residential/price/update/<?php echo $masterpricing[6]['id']; ?>"
                                    class="card-link float-end">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <span class="badge badge-info"><?php echo $masterpricing[7]['variant']; ?></span>
                            <h4 class="card-title text-uppercase">
                                <?php echo $masterpricing[7]['bhks']; ?>
                            </h4>
                            <span class="badge badge-secondary">Rs
                                <?php echo $masterpricing[7]['pricing']; ?> / Lakhs
                            </span>
                            <!--a href="add-includes" class="btn btn-primary">Add Includes</!--a-->
                        </div>
                        <div class="card-body">
                            <ol><?php echo $masterpricing[7]['includes']; ?><ol>
                            <div class="card-footer border-0 pt-0">
                                <a href="<?php echo base_url(); ?>residential/price/update/<?php echo $masterpricing[7]['id']; ?>"
                                    class="card-link float-end">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <span class="badge badge-info"><?php echo $masterpricing[8]['variant']; ?></span>
                            <h4 class="card-title text-uppercase">
                                <?php echo $masterpricing[8]['bhks']; ?>
                            </h4>
                            <span class="badge badge-secondary">Rs
                                <?php echo $masterpricing[8]['pricing']; ?> / Lakhs
                            </span>
                            <!--a href="add-includes" class="btn btn-primary">Add Includes</!--a-->
                        </div>
                        <div class="card-body">
                            <ol><?php echo $masterpricing[8]['includes']; ?><ol>
                            <div class="card-footer border-0 pt-0">
                                <a href="<?php echo base_url(); ?>residential/price/update/<?php echo $masterpricing[8]['id']; ?>"
                                    class="card-link float-end">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>