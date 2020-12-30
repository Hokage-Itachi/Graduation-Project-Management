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
                <a href="#" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="../assets/image/cool-panda-guc-prints.jpg" width="150px" height="150px" class="rounded"
                         alt="...">
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">View detail profile</a>
                    <a class="dropdown-item" href="#">Update profile</a>
                    <a class="dropdown-item" href="#">Any Action here</a>
                    <a class="dropdown-item" href="#">Change Password</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Logout</a>
                </div>
            </div>
            <h5 class="border-bottom m-1 p-3">All project</h5>
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            First Project
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Another project
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Another project again
                        </a>
                    </li>
                </ul>
                <a class="btn btn-outline-danger my-5" href="/library">Library</a>
            </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-3">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h3>Project's name here................</h3>
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
            <div class="container height-80vh">
                <div class="row overflow-auto justify-content-around">
                    <div class="col-4 height-85vh text-center border rounded overflow-auto">
                        <div class="input-group my-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="phaseSelectBox">Phase</label>
                            </div>
                            <select class="custom-select" id="phaseSelectBox">
                                <option value="warm_up">Warm up</option>
                                <option value="break_out">Break out</option>
                                <option value="last_run">Last run</option>
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
                                <label class="form-control task-class">Create Something</label>
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
                                                        <form id="task-1-detail-form" action="/task/...something"
                                                              method="POST">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        Phase
                                                                    </div>
                                                                </div>
                                                                <label class="form-control bg-success text-white">Warm
                                                                    up</label>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        Title
                                                                    </div>
                                                                </div>
                                                                <input class="form-control" type="text"
                                                                       value="I'm title here@">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Description</label>
                                                                <textarea class="form-control" rows="3">Some description here!
                                                                </textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Dateline</label>
                                                                <input type="date" class="form-control">
                                                            </div>
                                                            <div class="form-group text-right">
                                                                <button type="button" class="btn btn-success mr-3">
                                                                    Completed
                                                                </button>
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
                                <label class="form-control task-class">Create Something to long long long long</label>
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
                                                        <form id="task-2-detail-form" action="/task/...something"
                                                              method="POST">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        Phase
                                                                    </div>
                                                                </div>
                                                                <label class="form-control bg-success text-white">Warm
                                                                    up</label>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        Title
                                                                    </div>
                                                                </div>
                                                                <input class="form-control" type="text"
                                                                       value="I'm title here@">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Description</label>
                                                                <textarea class="form-control" rows="3">Some description here!</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Dateline</label>
                                                                <input type="date" class="form-control">
                                                            </div>
                                                            <div class="form-group text-right">
                                                                <button type="button" class="btn btn-success mr-3">
                                                                    Completed
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <button type="submit" form="task-2-detail-form"
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
                        <div class="text-right mb-3">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#newTaskModal">
                                <i class="fas fa-plus-circle"></i>
                                <span>New task</span>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade text-left" id="newTaskModal" tabindex="-1" role="dialog"
                                 aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Task information</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="newTaskForm" action="/task/addNew..."
                                                  method="POST">
                                                <div class="input-group input-group-sm mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            Phase
                                                        </div>
                                                    </div>
                                                    <label class="form-control bg-success text-white">Warm
                                                        up</label>
                                                </div>
                                                <div class="input-group input-group-sm mb-3">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            Title
                                                        </div>
                                                    </div>
                                                    <input class="form-control" type="text"
                                                           value="I'm title here@">
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea class="form-control"
                                                              rows="3">Some description here!</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Dateline</label>
                                                    <input type="date" class="form-control">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                            </button>
                                            <button type="submit" form="newTaskForm" class="btn btn-primary">
                                                Save task
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-sm" data-toggle="modal"
                                    data-target="#viewAllTaskModal">
                                <i class="fas fa-chart-line"></i>
                                <span>Analysis</span>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="viewAllTaskModal" tabindex="-1" role="dialog"
                                 aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Warm up task</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <div class="container">
                                                <div class="row justify-content-around">
                                                    <div class="col-5 bg-primary my-2 rounded">
                                                        <h3 class="text-light">20</h3>
                                                        <p>task in this phase</p>
                                                    </div>
                                                    <div class="col-5 bg-success my-2 rounded">
                                                        <h3 class="text-light">10</h3>
                                                        <p>task is completed</p>
                                                    </div>
                                                    <div class="col-5 bg-warning my-2 rounded">
                                                        <h3 class="text-light">10</h3>
                                                        <p>task is uncompleted</p>
                                                    </div>
                                                </div>

                                                <h4 class="text-center">Progress</h4>

                                                <div class="row justify-content-center">
                                                    <div class="col-10">
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar"
                                                                 style="width: 50%;"
                                                                 aria-valuenow="50" aria-valuemin="0"
                                                                 aria-valuemax="100">
                                                                25%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                            </button>
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
                        <div class="border rounded text-center">
                            <h3>File here</h3>
                            <form>
                                <label for="uploadFile">You need to upload ?</label>
                                <input type="file" id="uploadFile" class="form-control">
                                <button class="form-control btn btn-outline-primary" type="submit">Upload</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-7 border rounded">
                        <div class="text-center">
                            <div class="bottom-sticky">
                                <div id="editor"></div>
                            </div>
                            <form action="/....savePost">
                                <input type="hidden" value="...">
                                <!-- Need to get text in editor first and put to input field-->
                                <button type="submit" class="btn form-control border-bottom" onclick="...">
                                    <i class="fas fa-upload"></i>
                                    <span>Post now</span>
                                </button>
                            </form>
                        </div>
                        <div class="p-3 border rounded my-3">
                            <div class="pb-3 border-bottom">
                                <div class="container-fluid">
                                    <div class="row">
                                        <img src="../assets/image/img_avatar2.png" width="50"
                                             class="rounded rounded-circle"
                                             alt="...">
                                        <div class="col">
                                            <div><b>Master Shifu</b></div>
                                            <div>19 December</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    Data of post here. This data will auto have a format. I just create some thing for
                                    demo.
                                    Just not meaning word. Don't cary about this. something ... something something ...
                                    something.
                                </div>
                            </div>
                            <div class="pt-2">
                                <small>10 comment about this post</small>
                                <div class="container-fluid">
                                    <div class="row">
                                        <img src="../assets/image/img_avatar2.png" width="50"
                                             class="p-1 rounded rounded-circle"
                                             alt="...">
                                        <div class="col">
                                            <div><b>Vu Thu Thanh</b> - 20 December</div>
                                            <div>Hello guys</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <img src="../assets/image/img_avatar2.png" width="50"
                                             class="p-1 rounded rounded-circle"
                                             alt="...">
                                        <div class="col">
                                            <div><b>Nguyen Van An</b> - 20 December</div>
                                            <div>Hello guys too</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <img src="../assets/image/img_avatar2.png" width="50"
                                             class="p-1 rounded rounded-circle"
                                             alt="...">
                                        <div class="col">
                                            <div><b>Nguyen The Hop</b> - 20 December</div>
                                            <div>Lè lè **Chổng mông**</div>
                                        </div>
                                    </div>
                                </div>
                                <form action="/post..comment.." method="POST" class="pt-2">
                                    <div class="input-group input-group-sm mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Comment</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Small"
                                               aria-describedby="inputGroup-sizing-sm">
                                        <div class="input-group-append">
                                        <span class="input-group-text">
                                            <button type="submit" class="p-0 border-0">
                                                <i class="far fa-paper-plane"></i>
                                            </button>
                                        </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="p-3 border rounded my-3">
                            <div class="pb-3 border-bottom">
                                <div class="container-fluid">
                                    <div class="row">
                                        <img src="../assets/image/img_avatar2.png" width="50"
                                             class="rounded rounded-circle"
                                             alt="...">
                                        <div class="col">
                                            <div><b>Master Shifu</b></div>
                                            <div>19 December</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    Data of post here. This data will auto have a format. I just create some thing for
                                    demo.
                                    Just not meaning word. Don't cary about this. something ... something something ...
                                    something.
                                </div>
                            </div>
                            <div class="pt-2">
                                <small>10 comment about this post</small>
                                <div class="container-fluid">
                                    <div class="row">
                                        <img src="../assets/image/img_avatar2.png" width="50"
                                             class="p-1 rounded rounded-circle"
                                             alt="...">
                                        <div class="col">
                                            <div><b>Vu Thu Thanh</b> - 20 December</div>
                                            <div>Hello guys</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <img src="../assets/image/img_avatar2.png" width="50"
                                             class="p-1 rounded rounded-circle"
                                             alt="...">
                                        <div class="col">
                                            <div><b>Nguyen Van An</b> - 20 December</div>
                                            <div>Hello guys too</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <img src="../assets/image/img_avatar2.png" width="50"
                                             class="p-1 rounded rounded-circle"
                                             alt="...">
                                        <div class="col">
                                            <div><b>Nguyen The Hop</b> - 20 December</div>
                                            <div>Lè lè **Chổng mông**</div>
                                        </div>
                                    </div>
                                </div>
                                <form action="/post..comment.." method="POST" class="pt-2">
                                    <div class="input-group input-group-sm mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Comment</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Small"
                                               aria-describedby="inputGroup-sizing-sm">
                                        <div class="input-group-append">
                                        <span class="input-group-text">
                                            <button type="submit" class="p-0 border-0">
                                                <i class="far fa-paper-plane"></i>
                                            </button>
                                        </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
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