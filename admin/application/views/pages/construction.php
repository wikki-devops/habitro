<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">Construction Page</h2>
            </div>
            <a href="#" id="refreshBtn" class="btn btn-primary rounded light">Refresh</a>
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
        <div class="container">
            <div class="row">
                <div class="card-header">
                    <h4 class="card-title text-captalize">Package Details </h4>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">New Package</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <?php echo form_open_multipart('welcome/add_package/'); ?>
                                <div class="mb-3 row align-items-center">
                                    <label class="col-sm-3 col-form-label form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="" name="title" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <h4 class="card-title text-center">Standard
                        Package</h4>
                    <div class="" style="padding: 10px">
                        <?php
                        $desiredStandard = 'standard';
                        foreach ($package as $standard) {
                            if ($standard['package'] == $desiredStandard) {
                                ?>
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">
                                            <?php echo $standard['title']; ?>
                                        </h5>
                                    </div>
                                    <div class="card-body" style="padding: 10px">
                                        <?php echo $standard['content']; ?>
                                    </div>
                                    <div class="card-footer border-0 pt-0">
                                        <p class="card-text d-inline"><a
                                                href="<?php echo base_url(); ?>welcome/delete/<?php echo $standard['id']; ?>?table=<?php echo base64_encode('package'); ?>">Delete</a>
                                        </p>
                                        <a href="<?php echo base_url(); ?>welcome/update_package/<?php echo $standard['id']; ?>"
                                            class="card-link float-end">Edit</a>
                                    </div>
                                </div>


                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="col-xl-4">
                    <h4 class="card-title text-center">Premium
                        Package</h4>
                    <div class="" style="padding: 10px">
                        <?php
                        $desiredStandard = 'premium';
                        foreach ($package as $standard) {
                            if ($standard['package'] == $desiredStandard) {
                                ?>
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">
                                            <?php echo $standard['title']; ?>
                                        </h5>
                                    </div>
                                    <div class="card-body" style="padding: 10px">
                                        <?php echo $standard['content']; ?>
                                    </div>
                                    <div class="card-footer border-0 pt-0">
                                        <p class="card-text d-inline"><a
                                                href="<?php echo base_url(); ?>welcome/delete/<?php echo $standard['id']; ?>?table=<?php echo base64_encode('package'); ?>">Delete</a>
                                        </p>
                                        <a href="<?php echo base_url(); ?>welcome/update_package/<?php echo $standard['id']; ?>"
                                            class="card-link float-end">Edit</a>
                                    </div>
                                </div>


                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="col-xl-4">
                    <h4 class="card-title text-center">Luxury
                        Package</h4>
                    <div class="" style="padding: 10px">
                        <?php
                        $desiredStandard = 'luxury';
                        foreach ($package as $standard) {
                            if ($standard['package'] == $desiredStandard) {
                                ?>
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">
                                            <?php echo $standard['title']; ?>
                                        </h5>
                                    </div>
                                    <div class="card-body" style="padding: 10px">
                                        <?php echo $standard['content']; ?>
                                    </div>
                                    <div class="card-footer border-0 pt-0">
                                        <p class="card-text d-inline"><a
                                                href="<?php echo base_url(); ?>welcome/delete/<?php echo $standard['id']; ?>?table=<?php echo base64_encode('package'); ?>">Delete</a>
                                        </p>
                                        <a href="<?php echo base_url(); ?>welcome/update_package/<?php echo $standard['id']; ?>"
                                            class="card-link float-end">Edit</a>
                                    </div>
                                </div>


                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card-header">
                        <h4 class="card-title text-captalize">Associate
                            Partner</h4>
                        <a href="<?php echo base_url(); ?>add-partner" class="btn btn-primary">Add New</a>
                    </div>
                    <div class="card-body pb-4">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Images</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($brands as $brand): ?>
                                        <tr>
                                            <td>

                                                <img class="rounded" src="<?php echo $brand['image']; ?>"
                                                    style="width:250px;background: #535328;padding: 20px;" alt="/">
                                            </td>
                                            <td class="text-nowrap">

                                                <a href="<?php echo base_url(); ?>welcome/delete/<?php echo $brand['id']; ?>?table=<?php echo base64_encode('brands'); ?>"
                                                    type="button" class="btn btn-danger">Delete</a>
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