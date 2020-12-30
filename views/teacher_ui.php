<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Graduation Project management System</title>
    <link href="/assets/css/admin-style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.0/css/all.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
</head>
<body>
<div class="container-fluid height-100vh">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar text-center">
            <div class="text-center">
                <img src="../assets/image/cool-panda-guc-prints.jpg" width="150px" height="150px" class="rounded"
                     alt="...">
            </div>
            <h5 class="border-bottom m-1 p-3">All project</h5>
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Website for manage staff
                        </a>
                    </li>
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="#">-->
<!--                            Another project-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="#">-->
<!--                            Another project again-->
<!--                        </a>-->
<!--                    </li>-->
                </ul>
                <a class="btn btn-outline-danger my-5" href="/library">Library</a>
            </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-3">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h3>Website for manage staff</h3>
                <div class="progress w-50">
                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                         aria-valuemax="100">75%
                    </div>
                </div>
                <div class="mb-2 mb-md-0">
                    <button type="button" class="btn btn-sm btn-outline-secondary">
                        <i class="fas fa-bell fa-2x"></i>
                    </button>
                </div>
            </div>
            <div class="container-fluid height-80vh">
                <div class="row overflow-auto justify-content-around">
                    <div class="col-4 height-85vh text-center border overflow-auto">
                        <div class="input-group my-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="phaseSelectBox">Phase</label>
                            </div>
                            <select class="custom-select" id="phaseSelectBox">
                                <option value="warm_up">Design system</option>
                                <option value="break_out">Code</option>
                                <option value="last_run">Test and Fix bug</option>
                            </select>
                        </div>
                        <div class="progress">
                            <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                 aria-valuemax="100">75%
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                    </div>
                                </div>
                                <label class="form-control task-class">Design database</label>
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <!-- Button trigger modal -->
                                        <i data-toggle="modal" data-target="#task-1-detail" class="far fa-edit"></i>
                                        <div class="modal fade" id="task-1-detail" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Task detail</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="task-1-detail-form">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        Title
                                                                    </div>
                                                                </div>
                                                                <input class="form-control" type="text"
                                                                       value="Design database">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        Description
                                                                    </div>
                                                                </div>
                                                                <input class="form-control" type="text"
                                                                       value="Design database">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        Deadline
                                                                    </div>
                                                                </div>
                                                                <input class="form-control" type="text"
                                                                       value="12/12/2020">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        Status
                                                                    </div>
                                                                </div>
                                                                <input class="form-control" type="text"
                                                                       value="Cmpleted">
                                                            </div>

                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <button type="submit" form="task-1-detail-form"
                                                                class="btn btn-primary">Save changes
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                    </div>
                                </div>
                                <label class="form-control task-class">Design Use Case and Actor</label>
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <!-- Button trigger modal -->
                                        <i data-toggle="modal" data-target="#task-1-detail" class="far fa-edit"></i>
                                        <div class="modal fade" id="task-1-detail" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Task detail</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="task-1-detail-form">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        Title
                                                                    </div>
                                                                </div>
                                                                <input class="form-control" type="text"
                                                                       value="Design UseCase and Actor">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        Description
                                                                    </div>
                                                                </div>
                                                                <input class="form-control" type="text"
                                                                       value="Design UseCase and Actor">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        Deadline
                                                                    </div>
                                                                </div>
                                                                <input class="form-control" type="text"
                                                                       value="22/12/2020">
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        Status
                                                                    </div>
                                                                </div>
                                                                <input class="form-control" type="text"
                                                                       value="Processing">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <button type="submit" form="task-1-detail-form"
                                                                class="btn btn-primary">Save changes
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-primary">
                            <i class="fas fa-lock"></i>
                            Completed phase
                        </button>
                        <hr>
                        <div class="border text-center">
                            <form action="/action_page.php">
                                <input type="file" id="myFile" name="filename" />
                                <input type="submit" />
                            </form>
                        </div>
                    </div>
                    <div class="col-7 border">
                        <div class="bottom-sticky">
                            <div id="editor"></div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script type="application/javascript" rel="script">
    const labels = document.getElementsByClassName("task-class");
    for (let i = 0; i < labels.length; i++) {
        const label = labels[i];
        if (label.innerHTML.length > 18) label.innerHTML = label.innerHTML.slice(0, 16) + "...";
    }
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>