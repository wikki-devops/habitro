<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">Commercial Page Content</h2>
            </div>
            <a href="#" id="refreshBtn" class="btn btn-primary rounded light">Refresh</a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="filter cm-content-box box-primary"
                        style="box-shadow: -1.21px 6.894px 15px 0px rgba(0, 0, 0, 0.07);">
                        <div class="cm-content-body form excerpt">
                            <div class="card-header">
                                <h4 class="card-title">Tail Section</h4>
                                <?php if ($this->session->flashdata('success')): ?>
                                    <?php echo '
                                    <div class="alert alert-success alert-dismissible fade show">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                    </button>
                                    <strong>Success!</strong> ' . $this->session->flashdata('success') . '
                                    </div>'; ?>
                                <?php endif; ?>
                                <a href="add-tail" class="btn btn-primary">Add Tail Section</a>
                            </div>
                            <div class="card-body pb-4">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Tail Heading</th>
                                                <th>Tail Content</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($tailcontent as $tailcontent): ?>
                                                <tr>
                                                    <td>

                                                        <img class="rounded" src="<?php echo $tailcontent['image']; ?>"
                                                            style="width:80%;" alt="habitri-commercial">

                                                    </td>
                                                    <td>
                                                        <?php echo $tailcontent['heading']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $tailcontent['paragraph']; ?>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <a href="<?php echo base_url(); ?>welcome/update_tail/<?php echo $tailcontent['id']; ?>"
                                                            class="btn btn-warning btn-sm content-icon">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="<?php echo base_url(); ?>welcome/delete/<?php echo $tailcontent['id']; ?>?table=<?php echo base64_encode('commercial'); ?>"
                                                            class="btn btn-danger btn-sm content-icon">
                                                            <i class="fa fa-times"></i>
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
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Commercial Page Recent Work Gallery</h4>
                            <a href="add-recentwork" class="btn btn-primary">Add</a>

                        </div>
                        <div class="card-body">
                            <div id="lightgallery" class="row">
                            <?php foreach ($recentwork as $recentwork): ?>

                                <div class="col-xl-4" >
                                    <a href="<?php echo $recentwork['image']; ?>" data-src="<?php echo $recentwork['image']; ?>"
                                        class="lg-item col-lg-3 col-md-6 mb-4">
                                        <img class="rounded" src="<?php echo $recentwork['image']; ?>" style="width: 100%;" alt="/" />
                                    </a>
                                </div>
                                
                                <?php endforeach;?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>