<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Siti Pagos Soft</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=$webroot;?>media/image/favicon.png"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="<?=$webroot;?>vendors/bundle.css" type="text/css">

    <!-- Prism -->
    <link rel="stylesheet" href="<?=$webroot;?>vendors/prism/prism.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="<?=$webroot;?>css/app.min.css" type="text/css">
</head>
<body>

<!-- begin::preloader-->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- end::preloader -->

<!-- begin::header -->
<div class="header">

    <div>
        <ul class="navbar-nav">
            <li class="nav-item navigation-toggler">
                
            </li>
        </ul>
    </div>

    <div>
        <ul class="navbar-nav">

            <!-- begin::header minimize/maximize -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                    <i class="maximize" data-feather="maximize"></i>
                    <i class="minimize" data-feather="minimize"></i>
                </a>
            </li>
            <!-- end::header minimize/maximize -->

            <!-- begin::user menu -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false">
                        <figure class="avatar avatar-sm">
                            <img src="https://via.placeholder.com/128X128" class="rounded-circle" alt="avatar">
                        </figure>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                        <div class="p-3 text-center" data-backround-image="https://via.placeholder.com/1000X563">
                            <figure class="avatar mb-3">
                                <img src="https://via.placeholder.com/128X128" class="rounded-circle" alt="image">
                            </figure>
                        </div>
                        <div class="dropdown-menu-body">

                            <div class="list-group list-group-flush">

                                <a href="#" class="list-group-item" data-sidebar-target="#settings">Billing</a>
                                <a href="#" class="list-group-item" data-sidebar-target="#settings">Need help?</a>
                                <a href="#" class="list-group-item text-danger" data-sidebar-target="#settings">Cerrar Session</a>
                            </div>
                        </div>
                    </div>
            </li>
            <!-- end::user menu -->
        </ul>

        <!-- begin::mobile header toggler -->
        <ul class="navbar-nav d-flex align-items-center">
            <li class="nav-item header-toggler">
                <a href="#" class="nav-link">
                    <i data-feather="arrow-down"></i>
                </a>
            </li>
        </ul>
        <!-- end::mobile header toggler -->
    </div>

</div>
<!-- end::header -->

<!-- begin::main -->
<div id="main">

    <!-- begin::navigation -->
    <div class="navigation">

        <div class="navigation-menu-tab" style="width:3% !important;">
            <div>
                
            </div>
        </div>

        <!-- begin::navigation menu -->
        <div class="navigation-menu-body">

            <!-- begin::navigation-logo -->
            <div>
                <div id="navigation-logo">
                    <a href="index.html">
                        <img class="logo" src="<?=$webroot;?>media/image/logo.png" alt="logo">
                        <img class="logo-light" src="<?=$webroot;?>media/image/logo-light.png" alt="light logo">
                    </a>
                </div>
            </div>
            <!-- end::navigation-logo -->

            <div class="navigation-menu-group">

                <div id="dashboards">
                    <ul>
                        <li class="navigation-divider">Dashboards</li>
                        <li><a href="index.html">CRM System</a></li>
                        <li><a href="dashboard-two.html">Ecommerce <span class="badge badge-danger">2</span></a></li>
                        <li><a href="dashboard-three.html">Analytics</a></li>
                        <li><a href="dashboard-four.html">Project Management</a></li>
                        <li><a href="dashboard-five.html">Helpdesk Management</a></li>
                        <li class="navigation-divider">Contacts</li>
                        <li>
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item d-flex align-items-center">
                                    <div>
                                        <div class="avatar avatar-sm m-r-10">
                                            <img src="https://via.placeholder.com/128X128" class="rounded-circle" alt="image">
                                        </div>
                                    </div>
                                    <span>Valentine Maton</span>
                                </a>
                                <a href="#" class="list-group-item d-flex align-items-center">
                                    <div>
                                        <div class="avatar avatar-sm m-r-10">
                                            <img src="https://via.placeholder.com/128X128" class="rounded-circle" alt="image">
                                        </div>
                                    </div>
                                    <span>Holmes Cherryman</span>
                                </a>
                                <a href="#" class="list-group-item d-flex align-items-center">
                                    <div>
                                        <div class="avatar avatar-sm m-r-10">
                                            <img src="https://via.placeholder.com/128X128" class="rounded-circle" alt="image">
                                        </div>
                                    </div>
                                    <span>Kenneth Hune</span>
                                </a>
                            </div>
                        </li>
                        <li class="navigation-divider">Followers</li>
                        <li>
                            <div class="avatar-group ml-4">
                                <a href="#" class="avatar">
                                    <span class="avatar-title bg-success rounded-circle">E</span>
                                </a>
                                <a href="#" class="avatar">
                                    <img src="https://via.placeholder.com/128X128" class="rounded-circle" alt="avatar">
                                </a>
                                <a href="#" class="avatar">
                                    <img src="https://via.placeholder.com/128X128" class="rounded-circle" alt="avatar">
                                </a>
                                <a href="#" class="avatar">
                                    <span class="avatar-title bg-info rounded-circle">C</span>
                                </a>
                                <a href="#" class="avatar">
                                    <span class="avatar-title bg-dark rounded-circle">+30</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="apps">
                    <ul>
                        <li class="navigation-divider">Web Apps</li>
                        <li>
                            <a href="chat.html">
                                <span>Chat</span>
                                <span class="badge badge-danger">5</span>
                            </a>
                        </li>
                        <li>
                            <a href="inbox.html">
                                <span>Mail</span>
                            </a>
                        </li>
                        <li>
                            <a href="app-todo.html">
                                <span>Todo</span>
                                <span class="badge badge-warning">2</span>
                            </a>
                        </li>
                        <li>
                            <a class="active" href="file-manager.html">
                                <span>File Manager</span>
                            </a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <span>Calendar</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="open" id="elements">
                    <ul>
                        <li class="navigation-divider">Portal</li>
                        <li>
                            <a href="#">Basic</a>
                            <ul>
                                <li><a href="alerts.html">Alert</a></li>
                                <li><a href="accordion.html">Accordion</a></li>
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="dropdown.html">Dropdown</a></li>
                                <li><a href="list-group.html">List Group</a></li>
                            </ul>
                        </li>
                </div>
                <div id="pages">
                    <ul>
                        <li class="navigation-divider">Pages</li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="recover-password.html">Recovery Password</a></li>
                        <li><a href="lock-screen.html">Lock Screen</a></li>
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="timeline.html">Timeline</a></li>
                        <li><a href="invoice.html">Invoice</a></li>

                        <li><a href="pricing-table.html">Pricing Table</a></li>
                        <li><a href="search-result.html">Search Result</a></li>
                        <li>
                            <a href="#">Error Pages</a>
                            <ul>
                                <li><a href="404.html">404</a></li>
                                <li><a href="404-2.html">404 V2</a></li>
                                <li><a href="503.html">503</a></li>
                                <li><a href="mean-at-work.html">Mean at Work</a></li>
                            </ul>
                        </li>
                        <li><a href="blank-page.html">Starter Page</a></li>
                        <li>
                            <a href="#">Email Templates</a>
                            <ul>
                                <li><a href="email-template-basic.html">Basic</a></li>
                                <li><a href="email-template-alert.html">Alert</a></li>
                                <li><a href="email-template-billing.html">Billing</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Menu Level</a>
                            <ul>
                                <li>
                                    <a href="#">Menu Level</a>
                                    <ul>
                                        <li>
                                            <a href="#">Menu Level </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end::navigation menu -->

    </div>
    <!-- end::navigation -->

    <!-- begin::main-content -->
    <div class="main-content">

        <!-- begin::page-header -->
        <div class="page-header">
            <div class="container-fluid d-sm-flex justify-content-between">
                <h4>Siti Pagos Soft</h4>
           
            </div>
        </div>
        <!-- end::page-header -->

        <!-- begin::body -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-body">
                            <?= $this->Flash->render() ?>
                            <?= $this->fetch('content') ?>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- begin::body -->

        <!-- begin::footer -->
        <footer>
            <div class="container-fluid">
                <div>© Desarrollado por Juan Antonio Jacinto</div>
            </div>
        </footer>
        <!-- end::footer -->

    </div>
    <!-- end::main-content -->

</div>
<!-- end::main -->

<!-- Plugin scripts -->
<script src="vendors/bundle.js"></script>

<!-- Prism -->
<script src="<?=$webroot;?>vendors/prism/prism.js"></script>

<!-- App scripts -->
<script src="<?=$webroot;?>js/app.min.js"></script>
</body>
</html>