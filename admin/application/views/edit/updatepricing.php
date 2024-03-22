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
                            <?php echo form_open_multipart('welcome/updatepricing/' . $masterpricing['id']); ?>
                            <input type="hidden" name="id" value="<?php echo $masterpricing['id']; ?>">
                            <div class="mb-3 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label">Variant</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo $masterpricing['variant']; ?>" name="variant"
                                        class="form-control text-uppercase" placeholder="" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label">No of BHKs</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo $masterpricing['bhks']; ?>" name="Bhks"
                                        class="form-control text-uppercase" placeholder="" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label">Price</label>
                                <div class="col-sm-9">
                                    <p style="display: inline-flex">₹&nbsp;&nbsp; 
                                        <input type="text" style="width: 130px" value="<?php echo $masterpricing['pricing']; ?>" name="pricing"class="form-control" placeholder="">&nbsp;&nbsp;
                                        <input type="text" style="width: 130px" value="<?php echo $masterpricing['amountinwords']; ?>" name="amountinwords" class="form-control" placeholder="">
                                    </p>
                                </div>
                            </div>
                            <div class="mb-3 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label">Includes</label>
                                <div class="col-sm-9">
                                    <textarea id="ckeditor" name="includes"><?php echo $masterpricing['includes']; ?></textarea>
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