<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">Banner Content</h2>
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
                                                    <a href="<?php echo base_url();?>welcome/update_banner/<?php echo $banner['id']; ?>"
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