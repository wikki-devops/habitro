<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">Lead Form Details</h2>
            </div>
            <a href="#" id="refreshBtn" class="btn btn-primary rounded light">Refresh</a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <?php echo form_open_multipart('welcome/update_lead/' . $leads['id']); ?>
                                <input type="hidden" name="id" value="<?php echo $leads['id']; ?>">

                                <div class="mb-3 row align-items-center">
                                    <label class="col-sm-3 col-form-label form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="name" name="name" value="<?php echo $leads['name']; ?>"
                                            class="form-control" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="mb-3 row align-items-center">
                                    <label class="col-sm-3 col-form-label form-label">Phone</label>
                                    <div class="col-sm-9">
                                        <input type="phone" name="phone" value="<?php echo $leads['phone']; ?>"
                                            class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="mb-3 row align-items-center">
                                    <label class="col-sm-3 col-form-label form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" value="<?php echo $leads['email']; ?>"
                                            class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="mb-3 row align-items-center">
                                    <label class="col-sm-3 col-form-label form-label">Message</label>
                                    <div class="col-sm-9">
                                        <textarea name="message"
                                            class="form-control" placeholder="Message"><?php echo $leads['message']; ?></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 row align-items-center">
                                    <label class="col-sm-3 col-form-label form-label">Status</label>
                                    <div class="col-sm-9">
                                        <select class="default-select form-control wide" name="status">
                                            <option value="prospect">Prospect</option>
                                            <option value="onhold">Onhold</option>
                                            <option value="drop">Drop</option>
                                        </select>
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
</div>