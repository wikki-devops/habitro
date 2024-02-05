<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">Company Profile</h2>
            </div>
            <a href="#" id="refreshBtn" class="btn btn-primary rounded light">Refresh</a>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="filter cm-content-box box-primary">
                    <div class="content-title">
                        <h4>
                            User Details
                        </h4>
                    </div>

                    <div class="cm-content-body form excerpt">
                        <div class="card-body pb-4">
                            <div class="table-responsive">
                                <table class="table">

                                    <tbody>
                                        <?php foreach ($users as $users): ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $users['id']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $users['email']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $users['contact']; ?>
                                                    </td>
                                                    
                                                    <td class="text-nowrap">
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-warning btn-sm content-icon">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="javascript:void(0);"
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
    </div></div>
