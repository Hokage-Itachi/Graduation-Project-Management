<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico"> -->
    <link rel="icon" type="image/png" href="/assets/Image/favicon.ico">


    <title>Admin | Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/assets/css/admin-style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- <script src="https://kit.fontawesome.com/f83b9ba1b1.js" crossorigin="anonymous"></script> -->
</head>

<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">HUS-Admin</a>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"
           id='search-field' onkeyup="search('student')">
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="/logout">Log out</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="fas fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/projects">
                            <i class="fas fa-file-alt"></i>
                            <span>Projects</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/students">
                            <i class="fas fa-users"></i>
                            <span>Students</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/teachers">
                            <i class="fas fa-user-tie"></i>
                            <span>Teachers</span>
                        </a>
                    </li>
                </ul>
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Some Actions</span>
                    <a class="d-flex align-items-center text-muted" href="#">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal"
                            data-target="#addStudent">
                        <i class="fas fa-user-plus"></i>
                        Button
                    </button>
                    <div class="btn-group mr-2">
                        <button class="btn btn-sm btn-outline-secondary">Import</button>
                        <button class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-36 col-md-5 col-lg-4 col-xl-3 mb-3">
                        <div class="card text-center bg-light">
                            <div class="card-body">
                                <h5 class="card-title">1200</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Students</h6>
                                <p class="card-text">All is learning online now because of N.Covi 19</p>
                                <a href="/admin/students" class="card-link">Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-36 col-md-5 col-lg-4 col-xl-3 mb-3">
                        <div class="card text-center bg-info">
                            <div class="card-body">
                                <h5 class="card-title">170</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Teachers</h6>
                                <p class="card-text">All is masters, doctors, professors</p>
                                <a href="/admin/teachers" class="card-link">Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-36 col-md-5 col-lg-4 col-xl-3 mb-3">
                        <div class="card text-center bg-warning">
                            <div class="card-body">
                                <h5 class="card-title">257</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Projects</h6>
                                <p class="card-text">From more than 200 student</p>
                                <a href="/admin/projects" class="card-link">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="/assets/js/admin_script.js"></script>
</body>

</html>