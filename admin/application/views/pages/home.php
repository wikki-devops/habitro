<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">Home Page</h2>
                <p class="mb-0">Welcome to Habitro Admin</p>
            </div>
            <a href="#" id="refreshBtn" class="btn btn-primary rounded light">Refresh</a>
        </div>
        <div class="row">
            <div class="col-xl-12">
    <div class="filter cm-content-box box-primary">
        <div class="content-title d-sm-flex d-block flex-wrap">
            <div class="cpa d-flex align-items-center flex-wrap">
                <span class="pe-3 pb-sm-0 pb-3">Menu Name</span>
            </div>
            <button type="button" class="btn btn-secondary btn-sm ms-sm-auto mb-2 mb-sm-0">New Menu</button>
        </div>
        <div class="cm-content-body form excerpt rounded-0">
            <div class="card-body">
                <div class="col-xl-7">
                    <div class="dd" id="nestable">
                        <ol class="dd-list accordion" id="accordionExample">
                            <!-- <div class="dd-handle"></div> -->
                            <?php foreach($menu as $index => $menu_item): ?>
    <li class="accordion-item dd-item menu-ac-item" data-id="<?php echo $index + 1; ?>">
        <div class="accordion-header position-relative">
            <div class="move-media dd-handle">
                <i class="fa-solid fa-arrows-up-down-left-right"></i>
            </div>
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_<?php echo $index; ?>" aria-expanded="false" aria-controls="collapse_<?php echo $index; ?>">
                <?php echo $menu_item['menu'];?>
            </button>
        </div>
        <div id="collapse_<?php echo $index; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="mb-3">
                                <label class="form-label">URL</label>
                                <input type="text" class="form-control solid" placeholder="https://habitro.com/<?php echo $menu_item['slug'];?>" />
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label class="form-label">Navigation Label</label>
                                <input type="text" class="form-control solid" placeholder="Contact Us" />
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label class="form-label">Title Attribute</label>
                                <input type="text" class="form-control solid" placeholder="Contact Us" />
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <a class="text-hover remove" href="javascript:void(0);">Remove</a><span class="mx-2">|</span>
                            <a class="text-hover cancel" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapse_<?php echo $index; ?>" aria-expanded="false" aria-controls="collapse_<?php echo $index; ?>">
                                Edit
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </li>
<?php endforeach;?>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        </div>
    </div>
</div>
