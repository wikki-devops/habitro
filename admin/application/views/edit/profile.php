<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">Edt Company Profile</h2>
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
                            <?php echo form_open_multipart('welcome/update_profile/' . $company['id']); ?>
                            <input type="hidden" name="id" value="<?php echo $company['id']; ?>">
                            <div class="mb-3 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label">Heading</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo $company['heading']; ?>" name="heading"
                                        class="form-control" placeholder="" readonly>
                                </div>
                            </div>
                            <?php if ($company['content_type'] == 'Image'): ?>
                                <div class="mb-3 row align-items-center">
                                    <label class="col-sm-3 col-form-label form-label">Curent Image</label>
                                    <div class="col-sm-9">
                                        <img src="<?php echo $company['content']; ?>"
                                            style="max-width: 100%; max-height: 200px;background-color: #d4d4d4;padding:20px" />
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="mb-3 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label">Content or Image Url</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo $company['content']; ?>" name="content"
                                        class="form-control" id="imageUrlInput" placeholder="Enter Content">
                                </div>
                            </div>
                            <?php if ($company['content_type'] == 'Image'): ?>
                                <div class="mb-3 row align-items-center">
                                    <label class="col-sm-3 col-form-label form-label">Image Preview</label>
                                    <div class="col-sm-9">
                                        <img id="imagePreview" src="http://via.placeholder.com/640x360" alt="Image Preview"
                                            style="max-width: 100%; max-height: 200px;">
                                    </div>
                                </div>
                            <?php endif; ?>
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