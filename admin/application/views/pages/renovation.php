<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">Renovation Page Content</h2>
                <?php if ($this->session->flashdata('success')): ?>
                                <?php echo '
                    <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                    </button>
                    <strong>Success!</strong> ' . $this->session->flashdata('success') . '
                    </div>'; ?>
                            <?php endif; ?>
            </div>
            <a href="<?php echo base_url();?>add-renovation" class="btn btn-primary rounded light" style="margin-right: 10px">Add New</a>
            <a href="#" id="refreshBtn" class="btn btn-primary rounded light">Refresh</a>
        </div>
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
                        <a href="<?php echo base_url(); ?>welcome/delete/<?php echo $renovation['id']; ?>?table=<?php echo base64_encode('renovation'); ?>" class="btn btn-danger card-link float-end">Delete</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>