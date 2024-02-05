<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">Residential Page Content</h2>
                <?php if ($this->session->flashdata('success')): ?>
                    <?php echo '
                    <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                    </button>
                    <strong>Success!</strong> ' . $this->session->flashdata('success') . '
                    </div>'; ?>
                <?php endif; ?>
            </div>
            <a href="<?php echo base_url(); ?>add-residential" class="btn btn-primary rounded light"
                style="margin-right: 10px">Add New</a>
            <a href="#" id="refreshBtn" class="btn btn-primary rounded light">Refresh</a>
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
                                        <h3 class="title">
                                            <?php echo $card['content_2']; ?>
                                        </h3>
                                        <p>
                                            <?php echo $card['descripition_2']; ?>
                                        </p>
                                        <hr />
                                        <div class="dz-footer">
                                            <a href="<?php echo base_url(); ?>welcome/delete/<?php echo $card['id']; ?>?table=<?php echo base64_encode('residentialcard'); ?>" class="btn btn-danger">Delete</a>
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