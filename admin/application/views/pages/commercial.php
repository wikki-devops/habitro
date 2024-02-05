<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">Commercial Page Content</h2>
            </div>
            <a href="#" id="refreshBtn" class="btn btn-primary rounded light">Refresh</a>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="filter cm-content-box box-primary">
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
        <div class="row">
            <div class="card-header">
                <h4 class="card-title">Recentwork Section</h4>
                <?php if ($this->session->flashdata('success')): ?>
                                <?php echo '
                    <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                    </button>
                    <strong>Success!</strong> ' . $this->session->flashdata('success') . '
                    </div>'; ?>
                            <?php endif; ?>
                <a href="add-recentwork" class="btn btn-primary">Add</a>
            </div>
            <?php foreach ($recentwork as $recentwork): ?>
                <div class="col-xl-4" style="padding: 20px">
                    <div class="card">
                        <a href="<?php echo $recentwork['video']; ?>" class="popup-youtube">
                            <img class="card-img-top img-fluid" src="<?php echo $recentwork['image']; ?>"
                                style="height: 500px;width: 500px;" alt="/">
                        </a>
                        <div class="card-footer">
                            <a href="<?php echo base_url(); ?>welcome/delete/<?php echo $recentwork['id']; ?>?table=<?php echo base64_encode('recentwork'); ?>" class="btn btn-danger card-link float-end">Delete</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>