<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">Construction Page Content</h2>
            </div>
            <a href="#" id="refreshBtn" class="btn btn-primary rounded light">Refresh</a>
        </div>
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-captalize">standard package</h4>
                        <a href="#" class="btn btn-primary">Edit</a>
                    </div>
                    <div class="card-body">
                        <div class="accordion accordion-danger-solid" id="accordion_standard">
                            <?php
                            $desiredStandard = 'standard';
                            foreach ($package as $standard) {
                                if ($standard['package'] == $desiredStandard) {
                                    ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#bordered_collapseStandard<?php echo $standard['id']; ?>">
                                                <?php echo $standard['title']; ?>
                                            </button>
                                        </h2>
                                        <div id="bordered_collapseStandard<?php echo $standard['id']; ?>"
                                            class="accordion-collapse collapse" data-bs-parent="#accordion_standard">
                                            <div class="accordion-body">
                                                <?php echo $standard['content']; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Premium Package -->
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-captalize">premium package</h4>
                        <a href="#" class="btn btn-primary">Edit</a>
                    </div>
                    <div class="card-body">
                        <div class="accordion accordion-danger-solid" id="accordion_premium">
                            <?php
                            $desiredStandard = 'premium';
                            foreach ($package as $standard) {
                                if ($standard['package'] == $desiredStandard) {
                                    ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#bordered_collapsePremium<?php echo $standard['id']; ?>">
                                                <?php echo $standard['title']; ?>
                                            </button>
                                        </h2>
                                        <div id="bordered_collapsePremium<?php echo $standard['id']; ?>"
                                            class="accordion-collapse collapse" data-bs-parent="#accordion_premium">
                                            <div class="accordion-body">
                                                <?php echo $standard['content']; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Luxury Package -->
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-captalize">luxury package</h4>
                        <a href="#" class="btn btn-primary">Edit</a>
                    </div>
                    <div class="card-body">
                        <div class="accordion accordion-danger-solid" id="accordion_luxury">
                            <?php
                            $desiredStandard = 'luxury';
                            foreach ($package as $standard) {
                                if ($standard['package'] == $desiredStandard) {
                                    ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#bordered_collapseLuxury<?php echo $standard['id']; ?>">
                                                <?php echo $standard['title']; ?>
                                            </button>
                                        </h2>
                                        <div id="bordered_collapseLuxury<?php echo $standard['id']; ?>"
                                            class="accordion-collapse collapse" data-bs-parent="#accordion_luxury">
                                            <div class="accordion-body">
                                                <?php echo $standard['content']; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
<div class="card-header">
                        <h4 class="card-title text-captalize">Associate Partber</h4>
                        <a href="#" class="btn btn-primary">Edit</a>
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
                                                    style="width:300px;" alt="/">
                                        </td>
                                        <td class="text-nowrap">

                                            <a href="#" type="button" class="btn btn-danger">Delete</a>
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