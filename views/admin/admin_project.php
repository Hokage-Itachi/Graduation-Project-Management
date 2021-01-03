<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico"> -->
    <link rel="icon" type="image/png" href="/Graduation-Project-Management/assets/Image/favicon.ico">


    <title>Admin | Project</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/Graduation-Project-Management/assets/css/admin-style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- <script src="https://kit.fontawesome.com/f83b9ba1b1.js" crossorigin="anonymous"></script> -->
</head>

<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">HUS-Admin</a>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search" id='search-field' onkeyup="search('project')">
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="/Graduation-Project-Management/logout">Log out</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="/Graduation-Project-Management/admin">
                            <i class="fas fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/Graduation-Project-Management/admin/projects">
                            <i class="fas fa-file-alt"></i>
                            <span>Projects</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Graduation-Project-Management/admin/students">
                            <i class="fas fa-users"></i>
                            <span>Students</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Graduation-Project-Management/admin/teachers">
                            <i class="fas fa-user-tie"></i>
                            <span>Teachers</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Graduation-Project-Management/library">
                            <i class="fas fa-server "></i>
                            <span>Library</span>
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
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
                <h1 class="h2">Project</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#addStudent">
                        <i class="fas fa-plus"></i>
                        Upload Project
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="addStudent" tabindex="-1" role="dialog" aria-labelledby="addStudentLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addStudentLabel">Upload Project</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="addStudentForm" action="/Graduation-Project-Management/admin/projects/add" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="name">Project Name</label>
                                                <input type="text" class="form-control" name="project_name" id="name" placeholder="Project Name" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="student_id">Student ID</label>
                                                <input type="number" name="student_id" min="10000000" max="99999999" class="form-control" id="student_id" onblur="autoDetectPassword('studentId')" placeholder="Student ID" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="teacher_id">Teacher ID</label>
                                                <input type="number" name="teacher_id" class="form-control" id="teacher_id" placeholder="Teacher ID" value="" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="branch">Branch</label>
                                                <!--                                                    <input type="text" name="year" minlength="3" maxlength="8" class="form-control" id="year" placeholder="Year" value="" required>-->
                                                <select name="branch" id="branch" class="form-control">
                                                    <?php
                                                    foreach ($data['branches'] as $branch){
                                                        echo "<option value='".$branch['branch_id']."' name='branch_name'>".$branch['branch_name']."</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Point</label>
                                                <input type="text" name="point" class="form-control" id="password" value="" min="1" max="10" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="date">Presentation Day</label>
                                                <input type="date" name="presentation_day" class="form-control" id="date" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="file">Document</label>
                                                <input type="file" name="content" class="form-control" id="file" value="" required>
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
                </div>
            </div>
            <!-- <h2>Student</h2> -->
            <div class="table-responsive">
                <table class="table table-striped table-sm" id='data-table'>
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Student</th>
                        <th>Teacher</th>
                        <th>Status</th>
                        <th>Detail</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    for ($i = 0; $i < count($data['projects']); $i++) {
                        $j = $i + 1;
                        echo "<tr>
                                        <td>" . $j . "</td>
                                        <td>" . $data['projects'][$i]['id'] . "</td>
                                        <td>" . $data['projects'][$i]['name'] . "</td>
                                        <td>" . $data['projects'][$i]['student'] . "</td>
                                        <td>" . $data['projects'][$i]['teacher'] . "</td>
                                        <td>" . $data['projects'][$i]['status'] . "</td>
                                        <td>
                                            <button type='button' data-toggle='modal' data-target='#student-" . $j . "-detail'>
                                                <i class='fas fa-user-edit'></i>
                                            </button>
                                            <div class='modal fade' id='student-" . $j . "-detail' tabindex='-1' role='dialog' aria-hidden='true'>
                                                <div class='modal-dialog' role='document'>
                                                    <div class='modal-content'>
                                                        <div class='modal-header'>
                                                            <h5 class='modal-title'>Project
                                                                Information
                                                                Detail</h5>
                                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                                <span aria-hidden='true'>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class='modal-body'>
                                                            <form id='updateProject" . $data['projects'][$i]['id'] . "Form' action='/Graduation-Project-Management/admin/projects/update' enctype='multipart/form-data' method='POST'>
                                                                <div class='form-group'>
                                                                    <label>ProjectID</label>
                                                                    <input class='form-control' name='project_id' value='" . $data['projects'][$i]['id'] . "' readonly>
                                                                </div>
                                                                <div class='form-group'>
                                                                    <label>Name</label>
                                                                    <input class='form-control' name='name' value='" . $data['projects'][$i]['name'] . "' readonly>
                                                                </div>
                                                                <div class='form-group'>
                                                                    <label>Student</label>
                                                                    <input class='form-control' name='email' value='" . $data['projects'][$i]['student'] . "' readonly>
                                                                </div>
                                                                <div class='form-group'>
                                                                    <label>Teacher</label>
                                                                    <input class='form-control' name='email' value='" . $data['projects'][$i]['teacher'] . "' readonly>
                                                                </div>
                                                                <div class='form-group'>
                                                                    <label>Branch</label>
                                                                    <input class='form-control' name='email' value='" . $data['projects'][$i]['branch'] . "' readonly>
                                                                </div>
                                                                <div class='form-group'>
                                                                    <label>Point</label>";
                                                                    if($data['projects'][$i]['status'] != "Reviewing"){
                                                                        echo "<input class='form-control' name='point' value='" . $data['projects'][$i]['point'] . "' readonly>";
                                                                    } else {
                                                                        echo "<input class='form-control' name='point' value='" . $data['projects'][$i]['point'] . "'>";
                                                                    }

                                                                echo "</div>";
                                                                    if($data['projects'][$i]['status'] != "Processing"){
                                                                        if($data['projects'][$i]['status'] == "Public") {
                                                                            echo "<div class='form-group'>
                                                                                <label>Public?</label>
                                                                                <input name='status' value='1' type='checkbox' checked>
                                                                            </div>";
                                                                        } else {
                                                                            echo "<div class='form-group'>
                                                                                <label>Public?</label>
                                                                                <input name='status' value='1' type='checkbox'>
                                                                            </div>";
                                                                        }
                                                                    }
                                                                if($data['projects'][$i]['content'] || $data['projects'][$i]['status'] == "Processing"){
                                                                    echo "<div class='form-group'>
                                                                    <label>Document</label>
                                                                    <input class='form-control' name='content' value='" . $data['projects'][$i]['content'] . "' readonly>
                                                                     </div>";
                                                                } else {
                                                                    echo "<div class='form-group'>
                                                                    <label>Document</label>
                                                                        <input type='file' class='form-control' name='content'>
                                                                    </div>";
                                                                }
                                                       
                                                        echo"</form>
                                                        </div>
                                                        <div class='modal-footer'>
                                                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close
                                                            </button>
                                                            <button type='submit' class='btn btn-primary' form='updateProject" . $data['projects'][$i]['id'] . "Form'>Save changes
                                                            </button>
                                               
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/Graduation-Project-Management/assets/js/admin_script.js"></script>
</body>

</html>