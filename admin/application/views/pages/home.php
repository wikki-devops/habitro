<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">Menu - Title and Meta Tags</h2>
            </div>
            <a href="#" id="refreshBtn" class="btn btn-primary rounded light">Refresh</a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="filter cm-content-box box-primary">
                        <div class="content-title d-sm-flex d-block flex-wrap">
                            <div class="cpa d-flex align-items-center flex-wrap">
                                <span class="pe-3 pb-sm-0 pb-3">Update Content</span>
                                <?php if ($this->session->flashdata('success')): ?>
                                    <script>
                                        document.addEventListener('DOMContentLoaded', function () {
                                            toastr.success('<?php echo $this->session->flashdata('success'); ?>', 'success!', {
                                                positionClass: "toast-top-right",
                                                timeOut: 500000000,
                                                closeButton: !0,
                                                debug: !1,
                                                newestOnTop: !0,
                                                progressBar: !0,
                                                positionClass: "toast-top-right",
                                                preventDuplicates: !0,
                                                onclick: null,
                                                showDuration: "300",
                                                hideDuration: "1000",
                                                extendedTimeOut: "1000",
                                                showEasing: "swing",
                                                hideEasing: "linear",
                                                showMethod: "fadeIn",
                                                hideMethod: "fadeOut",
                                                tapToDismiss: !1
                                            });
                                        });
                                    </script>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="cm-content-body form excerpt rounded-0">
                            <div class="card-body">
                                <div class="col-xl-7">
                                    <div class="dd" id="nestable">
                                        <ol class="dd-list accordion" id="accordionExample">
                                            <!-- <div class="dd-handle"></div> -->
                                            <?php foreach ($menu as $index => $menu_item): ?>
                                                <li class="accordion-item dd-item menu-ac-item"
                                                    data-id="<?php echo $index + 1; ?>" style="list-style-type: none !important">
                                                    <div class="accordion-header position-relative">
                                                        <div class="move-media dd-handle">
                                                            <i class="fa-solid fa-arrows-up-down-left-right"></i>
                                                        </div>
                                                        <button class="accordion-button" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapse_<?php echo $index; ?>"
                                                            aria-expanded="false"
                                                            aria-controls="collapse_<?php echo $index; ?>">
                                                            <?php echo $menu_item['menu']; ?>
                                                        </button>
                                                    </div>
                                                    <div id="collapse_<?php echo $index; ?>"
                                                        class="accordion-collapse collapse"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <?php echo form_open_multipart('welcome/update_menu/' . $menu_item['id']); ?>
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">URL</label>
                                                                        <input type="text" name="slug"
                                                                            class="form-control solid"
                                                                            value="https://habitro.com/<?php echo $menu_item['slug']; ?>"
                                                                            readonly />
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Meta Title</label>
                                                                        <input type="text" name="meta_title"
                                                                            class="form-control solid"
                                                                            value="<?php echo $menu_item['meta_title']; ?>" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Meta Content</label>
                                                                        <textarea class="form-control" name="meta_content"
                                                                            id="comment"
                                                                            rows="4"><?php echo $menu_item['meta_content']; ?></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <button class="btn btn-primary btn-xs" name="submit"
                                                                        href="javascript:void(0);">save</button>
                                                                </div>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php endforeach; ?>
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
</div>