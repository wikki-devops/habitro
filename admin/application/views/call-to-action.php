<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">Call to action content</h2>
                <?php if($this->session->flashdata('success')): ?><?php echo '
                    <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                    </button>
                    <strong>Success!</strong> '.$this->session->flashdata('success').'
                    </div>'; ?>
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
                                            <th>CTA Content</th>
                                            <th>Edit CTA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($calltoaction as $calltoaction): ?>
                                            <tr>
                                                <td>
                                                    <?php echo $calltoaction['page_title']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $calltoaction['copyhead']; ?>
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="<?php echo base_url();?>welcome/update_cta/<?php echo $calltoaction['id']; ?>"
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