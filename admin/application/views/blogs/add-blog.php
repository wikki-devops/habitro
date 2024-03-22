<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">New Blog</h2>
            </div>
            <a href="#" id="refreshBtn" class="btn btn-primary rounded light">Refresh</a>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="basic-form">
                            <?php echo form_open_multipart('welcome/add_blog/'); ?>
                            <div class="mb-3 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label">Blog Image</label>
                                <div class="col-sm-9">
                                    <input type="text" value="" name="image" id="imageUrlInput" class="form-control"
                                        placeholder="Enter Blog Image url" required>
                                </div>
                            </div>
                            <div class="mb-3 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label">Image Preview</label>
                                <div class="col-sm-9">
                                    <img id="imagePreview" src="http://via.placeholder.com/640x360"
                                        alt="Image Preview" style="max-width: 100%; max-height: 200px;" >
                                </div>
                            </div>
                            <div class="mb-3 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label">Title of Blog</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title" class="form-control" placeholder="Enter title">
                                </div>
                            </div>
                            <div class="mb-3 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label">Name and Company</label>
                                <div class="col-sm-9">
                                    <textarea  id="ckeditor" name="content"></textarea >
                                </div>
                            </div>
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