<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">Dashboard</h2>
                <?php if ($this->session->flashdata('success')): ?>
                    <?php echo '
                    <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                    </button>
                    <strong>Success!</strong> ' . $this->session->flashdata('success') . '
                    </div>'; ?>
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
                                <i class="flaticon-381-calendar-1"></i>
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
                                <i class="flaticon-381-diamond"></i>
                            </span>
                            <div class="media-body text-white text-end">
                                <p class="mb-1">Recent Work Videos</p>
                                <h3 class="text-white">
                                    <?php echo $count1; ?>
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
                                <i class="flaticon-381-heart"></i>
                            </span>
                            <div class="media-body text-white text-end">
                                <p class="mb-1">Before After Images</p>
                                <h3 class="text-white">
                                    <?php echo $count1; ?>
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
                                    <?php echo $count1; ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <h3 class="fs-18 text-black">Recent Property</h3>
                        <div class="dropdown ms-auto">
                            <div class="btn-link" data-bs-toggle="dropdown">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                        <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                        <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                    </g>
                                </svg>
                            </div>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                <a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="testimonial-one owl-carousel">
                            <div class="items">
                                <a href="property-details.html"><img src="images/testimonial/1.png" alt="#"
                                        class="w-100 mw-100 mb-3 rounded" /></a>
                                <h5 class="fs-16 font-w600 mb-0"><a href="property-details.html" class="text-black">98AB
                                        Alexander Court, London</a></h5>
                                <span class="fs-14 d-block mb-4">45 Connor St. London, 44523</span>
                                <a href="javascript:void(0);"
                                    class="bgl-primary text-black p-1 ps-2 pe-2 me-3 font-w600 rounded">
                                    <svg class="me-2" width="20" height="13" viewBox="0 0 20 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.8125 5.54171C17.6264 5.54171 19.1667 7.01538 19.1667 8.89588V11.7709H17.7292V12.7292H16.7708V11.7709H2.39583V12.7292H1.4375V11.7709H0V8.89588C0 7.08201 1.48814 5.54171 3.35417 5.54171H15.8125ZM14.8542 0.270874C16.1425 0.270874 17.2504 1.30663 17.25 2.66671L17.2504 4.95601C16.8146 4.71707 16.3271 4.58337 15.8125 4.58337L14.8542 4.58289C14.8542 3.76226 14.1822 3.14587 13.4167 3.14587H10.5417C10.1735 3.14587 9.8377 3.28427 9.58338 3.51186C9.32939 3.28444 8.99338 3.14587 8.625 3.14587H5.75C4.95625 3.14587 4.31276 3.78921 4.3125 4.58289L3.35417 4.58337C2.83975 4.58337 2.35239 4.71699 1.91667 4.95579V2.66671C1.91667 1.37835 2.95002 0.270874 4.3125 0.270874H14.8542ZM8.625 4.10397C8.88503 4.10397 9.10417 4.34355 9.10417 4.58337L5.27083 4.58289C5.27083 4.28973 5.50427 4.10421 5.75 4.10421L8.625 4.10397ZM13.4167 4.10743C13.6878 4.10397 13.8956 4.33738 13.8958 4.58289H10.0625C10.0625 4.28554 10.2959 4.10421 10.5417 4.10421L13.4167 4.10743Z"
                                            fill="#3B4CB8" />
                                    </svg>
                                    4
                                </a>
                                <a href="javascript:void(0);"
                                    class="bgl-primary text-black p-1 ps-3 pe-3 font-w600 rounded">
                                    <svg class="me-2" width="13" height="15" viewBox="0 0 13 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.92 7.00064L12.6744 8.22859C12.2819 10.1913 10.4996 11.6677 8.55634 11.6677H7.95079L9.11756 14.7791H1.5557V7.00064H12.92ZM3.50032 0C4.54604 0 5.44495 0.871336 5.44495 1.94462V5.05602H12.8345V5.83387H5.44495V6.22279H0.777849L0.777769 7.38965C0.327309 7.05126 0 6.47802 0 5.83387V1.94462C0 0.8989 0.851593 0 1.94462 0H3.50032Z"
                                            fill="#3B4CB8" />
                                    </svg>
                                    2
                                </a>
                                <p class="fs-14 mt-3 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini</p>
                            </div>
                            <div class="items">
                                <a href="property-details.html"><img src="images/testimonial/2.png" alt="#"
                                        class="w-100 mw-100 mb-3 rounded" /></a>
                                <h5 class="fs-16 font-w600 mb-0"><a href="property-details.html" class="text-black">2AB
                                        Historical landmark, Paris</a></h5>
                                <span class="fs-14 d-block mb-4">45 Connor St. London, 44523</span>
                                <a href="javascript:void(0);"
                                    class="bgl-primary text-black p-1 ps-2 pe-2 me-3 font-w600 rounded">
                                    <svg class="me-2" width="20" height="13" viewBox="0 0 20 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.8125 5.54171C17.6264 5.54171 19.1667 7.01538 19.1667 8.89588V11.7709H17.7292V12.7292H16.7708V11.7709H2.39583V12.7292H1.4375V11.7709H0V8.89588C0 7.08201 1.48814 5.54171 3.35417 5.54171H15.8125ZM14.8542 0.270874C16.1425 0.270874 17.2504 1.30663 17.25 2.66671L17.2504 4.95601C16.8146 4.71707 16.3271 4.58337 15.8125 4.58337L14.8542 4.58289C14.8542 3.76226 14.1822 3.14587 13.4167 3.14587H10.5417C10.1735 3.14587 9.8377 3.28427 9.58338 3.51186C9.32939 3.28444 8.99338 3.14587 8.625 3.14587H5.75C4.95625 3.14587 4.31276 3.78921 4.3125 4.58289L3.35417 4.58337C2.83975 4.58337 2.35239 4.71699 1.91667 4.95579V2.66671C1.91667 1.37835 2.95002 0.270874 4.3125 0.270874H14.8542ZM8.625 4.10397C8.88503 4.10397 9.10417 4.34355 9.10417 4.58337L5.27083 4.58289C5.27083 4.28973 5.50427 4.10421 5.75 4.10421L8.625 4.10397ZM13.4167 4.10743C13.6878 4.10397 13.8956 4.33738 13.8958 4.58289H10.0625C10.0625 4.28554 10.2959 4.10421 10.5417 4.10421L13.4167 4.10743Z"
                                            fill="#3B4CB8" />
                                    </svg>
                                    4
                                </a>
                                <a href="javascript:void(0);"
                                    class="bgl-primary text-black p-1 ps-3 pe-3 font-w600 rounded">
                                    <svg class="me-2" width="13" height="15" viewBox="0 0 13 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.92 7.00064L12.6744 8.22859C12.2819 10.1913 10.4996 11.6677 8.55634 11.6677H7.95079L9.11756 14.7791H1.5557V7.00064H12.92ZM3.50032 0C4.54604 0 5.44495 0.871336 5.44495 1.94462V5.05602H12.8345V5.83387H5.44495V6.22279H0.777849L0.777769 7.38965C0.327309 7.05126 0 6.47802 0 5.83387V1.94462C0 0.8989 0.851593 0 1.94462 0H3.50032Z"
                                            fill="#3B4CB8" />
                                    </svg>
                                    2
                                </a>
                                <p class="fs-14 mt-3 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>