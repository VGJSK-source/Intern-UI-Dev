<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-2 col-md-3 sidebar bg-light">
                <div class="px-3 pt-2">
                    <!-- Logo and Company Name -->
                    <!-- <div class="d-flex align-items-center mb-4">
                        <img src="assets/images/countrylogo.png" alt="Logo" style="width: 50px; height: auto;">
                        <div class="ms-2" style="line-height: 1;">
                            <div class="logotext"><strong>RE</strong></div>
                            <div class="logotext"><strong>Eduversity</strong></div>
                        </div>
                        
                        <div class="toggle-button ms-auto">
                            <i class="bi bi-chevron-double-right toggle-icon "></i>
                        </div>
                    </div> -->
                    <div class="d-flex align-items-center mb-4">
                        <img src="assets/images/countrylogo.png" alt="Logo" style="width: 50px; height: auto;">
                        <div class="ms-2" style="line-height: 1;">
                            <div class="logotext"><strong>RE</strong></div>
                            <div class="logotext"><strong>Eduversity</strong></div>
                        </div>
                        <!-- Toggle button -->
                        <div class="toggle-button ms-4">
                            <i class="bi bi-chevron-double-right toggle-icon"></i>
                        </div>
                    </div>

                    <!-- Navigation Menu -->
                    <div class="d-flex flex-column align-items-center align-items-sm-start min-vh-100">
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                            id="menu">
                            <li class="nav-item">
                                <a href="#" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                                    <i class="bi bi-chevron-double-down tlogo ps-4"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="#" class="nav-link px-0 align-middle">
                                            <span class="ms-1 d-none d-sm-inline">Profile</span>
                                        </a>
                                    </li>
                                </ul>
                            <li>
                                <a href="#" class="nav-link px-0 align-middle">
                                    <span class="ms-1 d-none d-sm-inline">Apply Now</span>
                                </a>
                                <a href="#" class="nav-link px-0 align-middle">
                                    <i class="bi bi-layers-half"></i> <span
                                        class="ms-1 d-none d-sm-inline">Placements</span>

                                </a>
                                <a href="#" class="nav-link px-0 align-middle">
                                    <i class="bi bi-slash-circle-fill"></i> <span class="ms-1 d-none d-sm-inline">Live
                                        Project</span>

                                </a>
                                <a href="#" class="nav-link px-0 align-middle">
                                    <i class="bi bi-clipboard-x"></i><span
                                        class="ms-1 d-none d-sm-inline">Internships</span>

                                </a>
                                <a href="#" class="nav-link px-0 align-middle">
                                    <i class="bi bi-yelp"></i> <span class="ms-1 d-none d-sm-inline">Events</span>

                                </a>
                            </li>


                            </li>
                            <!-- <li>
                                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-speedometer2"></i> <span
                                        class="ms-1 d-none d-sm-inline">Dashboard</span>
                                </a>
                            </li> -->
                            <!-- More items -->
                        </ul>
                        <hr>
                    </div>
                </div>
            </div>


            <!-- Main content -->
            <div class="col-lg-10 col-md-9">
                <!-- Header -->
                <header class="shadow bg-light" style="border-radius:10px;">
                    <div class="d-flex justify-content-between align-items-center p-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-search"></i>
                            <input type="search" class="form-control ms-2" placeholder="Search..."
                                style="min-width: 200px;">
                        </div>
                        <div class="d-flex align-items-center">
                            <img src="assets/images/countrylogo.png" alt="Flag" class="rounded-circle me-2"
                                style="width: 30px; height: 30px;">
                            <i class="bi bi-bell me-2"></i>
                            <img src="assets/images/vikas.jpg" alt="User" class="rounded-circle"
                                style="width: 30px; height: 30px;">
                        </div>
                    </div>
                </header>

                <!-- Content Area -->
                <div class="p-3">
                    <h1>Welcome to the Dashboard</h1>
                    <p>This is a simple example of a responsive sidebar layout with Bootstrap 5.</p>
                    <!-- Your content here -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/script.js"></script>
</body>

</html>