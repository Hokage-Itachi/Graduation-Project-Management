<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico"> -->
    <link rel="icon" type="image/png" href="/assets/Image/favicon.ico">


    <title>Admin | Teacher</title>

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
           id='search-field' onkeyup="search('teacher')">
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
                        <a class="nav-link" href="/admin">
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
                        <a class="nav-link active" href="#">
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
                <h1 class="h2">Teacher</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal"
                            data-target="#addTeacher">
                        <i class="fas fa-user-plus"></i>
                        Add teacher
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="addTeacher" tabindex="-1" role="dialog"
                         aria-labelledby="addTeacherLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addTeacherLabel">Add new teacher</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="addStudentForm" action="/admin/teachers/add" method="POST">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="name">Teacher Name</label>
                                                <input type="text" class="form-control" id="name"
                                                       placeholder="Teacher Name" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email address</label>
                                                <input type="email" class="form-control" id="email"
                                                       onblur="autoDetectPassword('email')"
                                                       placeholder="Teacher email" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="class">Work address</label>
                                                <input type="text" class="form-control"
                                                       id="class"
                                                       placeholder="Work address" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="text" class="form-control" id="password"
                                                       value="password"
                                                       readonly>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" form="addStudentForm" class="btn btn-primary">Save changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group mr-2">
                        <button class="btn btn-sm btn-outline-secondary">Import</button>
                        <button class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>
                </div>
            </div>
            <!-- <h2>Student</h2> -->
            <div class="table-responsive">
                <table class="table table-striped table-sm" id='data-table'>
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Work Place</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    for ($i = 0; $i < count($data['teachers']); $i++) {
                        $j = $i + 1;
                        echo "<tr>
                                        <td>" . $j . "</td>
                                        <td>" . $data['teachers'][$i]['name'] . "</td>
                                        <td>" . $data['teachers'][$i]['email'] . "</td>
                                        <td>" . $data['teachers'][$i]['work_place'] . "</td>
                                        <td>
                                            <button type='button' data-toggle='modal' data-target='#teacher-" . $j . "-detail'>
                                                <i class='fas fa-user-edit'></i>
                                            </button>
                                            <div class='modal fade' id='teacher-" . $j . "-detail' tabindex='-1' role='dialog' aria-labelledby='teacher-detail' aria-hidden='true'>
                                                <div class='modal-dialog' role='document'>
                                                    <div class='modal-content'>
                                                        <div class='modal-header'>
                                                            <h5 class='modal-title' id='teacher-detail'>Teacher Information Detail</h5>
                                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                                <span aria-hidden='true'>&times;</span>
                                                            </button>
                                                        </div>
                                                        <form>
                                                        <div class='modal-body'>
                                                            <form id='updateTeacherForm' action='/admin/teachers/update' method='POST'>
                                                                <div class='form-group'>
                                                                    <label>Name</label>
                                                                    <input class='form-control' value='" . $data['teachers'][$i]['name'] . "'>
                                                                </div>
                                                                <div class='form-group'>
                                                                    <label>Email</label>
                                                                    <input class='form-control' value='" . $data['teachers'][$i]['email'] . "'>
                                                                </div>
                                                                <div class='form-group'>
                                                                    <label>StudentID</label>
                                                                    <input class='form-control' value='" . $data['teachers'][$i]['work_place'] . "'>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class='modal-footer'>
                                                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close
                                                            </button>
                                                            <input type='submit' form='updateTeacherForm' class='btn btn-primary' value='Save Changes'/>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <button  type='button' data-toggle='modal' data-target='#teacher-" . $j . "-delete'><i class='fas fa-user-minus'></i></button>
                                             <div class='modal fade' id='teacher-" . $j . "-delete' tabindex='-1' role='dialog' aria-hidden='true'>
                                                <div class='modal-dialog' role='document'>
                                                    <div class='modal-content'>
                                                        <div class='modal-header'>
                                                            <h6 class='modal-title'>Are you sure to delete teacher (" . $data['teachers'][$i]['email'] . ") ?</h6>
                                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                                <span aria-hidden='true'>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class='modal-body'>
                                                            <h4 class='text-danger'>To be carefully, this action can't be undo!</h4>
                                                            <form id='deleteStudentForm' action='/admin/teachers/delete' method='POST'>
                                                                <input type='hidden' value='" . $data['teachers'][$i]['email'] . "'>
                                                            </form>
                                                        </div>
                                                        <div class='modal-footer'>
                                                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancel
                                                            </button>
                                                            <button type='submit' form='deleteStudentForm' class='btn btn-primary'>Confirm delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>";
                    }
                    ?>
                    </tbody>
                </table>
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