<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">Welcome<span class="text-capitalize"> <?php echo $this->session->userdata('name'); ?></span></h2>
                <?php if ($this->session->flashdata('success')): ?>
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            toastr.info('<?php echo $this->session->flashdata('success'); ?>', 'Success!', {
                                positionClass: "toast-top-right",
                                timeOut: 5e3,
                                closeButton: !0,
                                debug: !1,
                                newestOnTop: !0,
                                progressBar: !0,
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
            <a href="#" id="refreshBtn" class="btn btn-primary rounded light">Refresh</a>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="widget-stat card bg-danger">
                    <div class="card-body p-4">
                        <div class="media">
                            <span class="me-3">
                                <i class="flaticon-test"></i>
                            </span>
                            <div class="media-body text-white text-end">
                                <p class="mb-1">Testimonials</p>
                                <h3 class="text-white">
                                    <?php echo $count1; ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="widget-stat card bg-success">
                    <div class="card-body p-4">
                        <div class="media">
                            <span class="me-3">
                                <i class="flaticon-form"></i>
                            </span>
                            <div class="media-body text-white text-end">
                                <p class="mb-1">Leads</p>
                                <h3 class="text-white">
                                    <?php echo $count2; ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="widget-stat card bg-info">
                    <div class="card-body p-4">
                        <div class="media">
                            <span class="me-3">
                                <i class="flaticon-content-writing"></i>
                            </span>
                            <div class="media-body text-white text-end">
                                <p class="mb-1">Blogs</p>
                                <h3 class="text-white">
                                    <?php echo $count3; ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="widget-stat card bg-primary">
                    <div class="card-body p-4">
                        <div class="media">
                            <span class="me-3">
                                <i class="flaticon-381-user-7"></i>
                            </span>
                            <div class="media-body text-white text-end">
                                <p class="mb-1">Users</p>
                                <h3 class="text-white">
                                    <?php echo $count4; ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">New Leads</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 850px;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($leads as $lead): ?>
                                        <tr>
                                            <td>
                                                <?php echo $lead['name']; ?>
                                            </td>
                                            <td>
                                                <a href="tell:<?php echo $lead['phone']; ?>"><strong class="text-black">
                                                        <?php echo $lead['phone']; ?>
                                                    </strong></a>
                                            </td>
                                            <td>
                                                <a href="mailto:<?php echo $lead['email']; ?>"><strong class="text-black">
                                                        <?php echo $lead['email']; ?>
                                                    </strong></a>
                                            </td>
                                            <td>
                                                <?php echo $lead['date']; ?>
                                            </td>
                                            <td>
                                                <span class="badge light badge-success">
                                                    <?php echo $lead['status']; ?>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="<?php echo base_url(); ?>welcome/update_lead/<?php echo $lead['id']; ?>"
                                                        class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="<?php echo base_url(); ?>welcome/delete/<?php echo $lead['id']; ?>?table=<?php echo base64_encode('leadform'); ?>"
                                                        class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <h3 class="fs-18 text-black">Recent Blogs</h3>
                    </div>
                    <div class="card-body">
                        <div class="testimonial-one owl-carousel">
                            <?php if (empty($blogs)): ?>
                                <div class="alert alert-warning solid alert-rounded "><strong>Thank You!</strong> Content
                                    Will Update Soon.</div>
                            <?php else: ?>
                                <?php foreach ($blogs as $blog): ?>
                                    <div class="items">
                                        <a href="<?php echo base_url(); ?>blogs"><img src="<?php echo $blog['image']; ?>"
                                                style="height: 350px; width:5" alt="#" class="w-100 mw-100 mb-3 rounded" /></a>
                                        <h5 class="fs-16 font-w600"><a href="<?php echo base_url(); ?>blogs"
                                                class="mb-10 text-black">
                                                <?php echo $blog['title']; ?>
                                            </a></h5>
                                        <a href="javascript:void(0);"
                                            class="bgl-primary text-black p-1 ps-2 pe-2 me-3 font-w600 rounded">
                                            <i class="flaticon-381-album"></i>
                                            <?php echo $blog['date']; ?>
                                        </a>
                                        <a href="javascript:void(0);"
                                            class="bgl-primary text-black p-1 ps-3 pe-3 font-w600 rounded">
                                            <i class="flaticon-381-album"></i>
                                            By Habitro
                                        </a>
                                        <p class="fs-14 mt-3 mb-0">
                                            <?php echo word_limiter($blog['content'], 25); ?>
                                        </p>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>