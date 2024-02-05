<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">Testimonials Section</h2>
                <?php if($this->session->flashdata('success')): ?><?php echo '
                    <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                    </button>
                    <strong>Success!</strong> '.$this->session->flashdata('success').'
                    </div>'; ?>
                <?php endif; ?>
            </div>
            <a href="<?php echo base_url();?>add-testimonials" class="btn btn-primary rounded light" style="margin-right: 10px">Add New</a>
            <a href="#" id="refreshBtn" class="btn btn-primary rounded light">Refresh</a>
        </div>
        <div class="row">
            <?php foreach ($testimonials as $testimonial): ?>
                <div class="col-xl-4">
                    <div class="card">
                        <a href="<?php echo $testimonial['video']; ?>" class="popup-youtube">
                            <img class="card-img-top img-fluid" src="<?php echo $testimonial['thumbnail']; ?>" width="100%"
                                alt="/">
                        </a>
                        <div class="card-body">
                            <p class="card-text">
                                <?php echo $testimonial['name']; ?>
                            </p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text d-inline">
                                <?php echo $testimonial['company']; ?>
                            </p>
                            <a href="<?php echo base_url(); ?>welcome/delete/<?php echo $testimonial['id']; ?>?table=<?php echo base64_encode('testimonials'); ?>" class="btn btn-danger card-link float-end">Delete</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>