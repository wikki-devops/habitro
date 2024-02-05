<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">Edit Banner Details</h2>
            </div>
            <a href="#" id="refreshBtn" class="btn btn-primary rounded light">Refresh</a>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">New Content</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <?php echo form_open_multipart('welcome/update_banner/' . $banner['id']); ?>
                            <input type="hidden" name="id" value="<?php echo $banner['id']; ?>">
                            <div class="mb-3 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label">Page Heading</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo $banner['page_heading']; ?>"
                                        name="page_heading" class="form-control" placeholder="" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label">Banner Image Url</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo $banner['bannerimage']; ?>" id="imageUrlInput"
                                        name="bannerimage" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="mb-3 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label">Image Preview</label>
                                <div class="col-sm-9">
                                    <img id="imagePreview" src="<?php echo $banner['bannerimage']; ?>"
                                        alt="Image Preview" style="max-width: 100%; max-height: 200px;">
                                </div>
                            </div>
                            <div class="mb-3 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label">Banner Heading</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo $banner['heading']; ?>" name="heading"
                                        class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="mb-3 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label">Banner Content</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo $banner['banner_p']; ?>" name="banner_p"
                                        class="form-control" placeholder="">
                                </div>
                            </div>
                            <fieldset class="mb-3">
                                <div class="row">
                                    <label class="col-form-label col-sm-3 pt-0 form-label">LeadForm Need?</label>
                                    <div class="col-sm-9">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="component" value="1"
                                                <?php echo ($banner['component'] == 1) ? 'checked' : ''; ?>>
                                            <label class="form-check-label">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="component" value="0"
                                                <?php echo ($banner['component'] == 0) ? 'checked' : ''; ?>>
                                            <label class="form-check-label">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="mb-3 row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="javascript:history.back()" class="btn btn-primary">Go Back</a>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>