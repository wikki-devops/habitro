<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">Edit Package Details</h2>
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
                        <?php echo form_open_multipart('welcome/update_package/' . $package['id']); ?>
                            <input type="hidden" name="id" value="<?php echo $package['id']; ?>">
                            <div class="mb-3 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo $package['title']; ?>" name="title"
                                        class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="mb-3 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label">Content</label>
                                <div class="col-sm-9">
                                    <textarea  id="ckeditor" name="content"><?php echo $package['content']; ?></textarea >
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