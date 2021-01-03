<!doctype html>
<html lang='en'>

<head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>

    <title>Teacher GPMS</title>
    <link href='/Graduation-Project-Management/assets/css/admin-style.css' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.0/css/all.min.css'>
    <link rel="icon" type="image/png" href="/Graduation-Project-Management/assets/image/favicon.ico">
    <script src='https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js'></script>

</head>

<body>
    <div class='container-fluid height-100vh'>
        <div class='row'>
            <nav class='col-md-2 d-none d-md-block bg-light sidebar text-center'>
                <div class='text-center'>
                    <a href='#' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        <?php
                            echo "<img src='/Graduation-Project-Management/assets/image/".$data['avatar']."' width='150px' height='150px' class='rounded' alt='...'>"
                        ?>
                    </a>
                    <div class='dropdown-menu'>
                        <a class='dropdown-item' href='/Graduation-Project-Management/teacher/profile'>View detail profile</a>
                        <div class='dropdown-divider'></div>
                        <a class='dropdown-item' href='/Graduation-Project-Management/logout'>Logout</a>
                    </div>
                </div>

                <div class='sidebar-sticky'>
                    <a class='btn btn-outline-danger my-5' href='/Graduation-Project-Management/teacher'>Home</a>
                    <a class='btn btn-outline-danger my-5' href='/Graduation-Project-Management/library'>Library</a>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <input id="search-field" class="form-control" type="text" placeholder="Search" aria-label="Search" onkeyup="teacherSearch()">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
                    <h1 class="h2">Your project</h1>
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
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        for ($i = 0; $i < count($data['projects']); $i++) {
                            $j = $i + 1;
                            echo "<tr>
                                        <td>" . $j . "</td>
                                        <td>" . $data['projects'][$i]['id'] . "</td>
                                        <td>
                                            <a href='/Graduation-Project-Management/teacher/project/" . $data['projects'][$i]['id'] . "'>" . $data['projects'][$i]['name'] . "</a>
                                        </td>
                                        
                                        <td>" . $data['projects'][$i]['student']['name'] . "</td>
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
                                                            <form id='updateStudent" . $data['projects'][$i]['id'] . "Form'>
                                                                <div class='form-group'>
                                                                    <label>ProjectID</label>
                                                                    <input class='form-control' name='student_id' value='" . $data['projects'][$i]['id'] . "' readonly>
                                                                </div>
                                                                <div class='form-group'>
                                                                    <label>Name</label>
                                                                    <input class='form-control' name='name' value='" . $data['projects'][$i]['name'] . "' readonly>
                                                                </div>
                                                                <div class='form-group'>
                                                                    <label>Student</label>
                                                                    <input class='form-control' name='email' value='" . $data['projects'][$i]['student']['name'] . "' readonly>
                                                                </div>
                                                           
                                                                <div class='form-group'>
                                                                    <label>Branch</label>
                                                                    <input class='form-control' name='email' value='" . $data['projects'][$i]['branch'] . "' readonly>
                                                                </div>
                                                                <div class='form-group'>
                                                                    <label>Point</label>
                                                                    <input class='form-control' name='email' value='" . $data['projects'][$i]['point'] . "' readonly>
                                                                </div>

                                                            </form>
                                                        </div>
                                                        <div class='modal-footer'>
                                                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>
    <script src="/Graduation-Project-Management/assets/js/teacher_project_script.js"></script>
</body>

</html>