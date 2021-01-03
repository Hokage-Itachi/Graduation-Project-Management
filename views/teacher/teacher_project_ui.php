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
        <main role='main' class='col-md-9 ml-sm-auto col-lg-10 pt-3 px-3'>
            <div class='d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom'>
                <?php
                echo "<h3>" . $data['project']['name'] . "</h3>";
                ?>
                <div class='mb-2 mb-md-0'>
                    <button type='button' class='btn btn-sm btn-outline-secondary'>
                        <i class='fas fa-bell fa-2x'></i>
                    </button>
                </div>
            </div>
            <div class='container height-80vh'>
                <div class='row overflow-auto justify-content-around'>
                    <div class='col-4 height-85vh text-center border rounded overflow-auto'>
                        <div class='input-group my-3'>
                            <div class='input-group-prepend'>
                                <label class='input-group-text' for='phaseSelectBox'>Phase</label>
                            </div>
                            <?php
                            echo "<select class='custom-select' id='phaseSelectBox' onchange='changeSelect()'>";
                            foreach ($data['project']['phases'] as $phase) {
                                echo "<option value='" . $phase['id'] . "'>" . $phase['name'] . "</option>";
                            }
                            echo "</select>";
                            ?>
                        </div>
                        <?php
                        $selected = 1;
                        foreach ($data['project']['phases'] as $phase) {
                            if($selected){
                                echo "<div class='phase-content' id='" . $phase['id'] . "'>";
                                $selected = 0;
                            }
                            else {
                                echo "<div class='phase-content' id='" . $phase['id'] . "' style='display:none;'>";
                            }
                            echo "<div class='mt-3'>";
                            foreach ($phase['tasks'] as $task) {
                                echo "<div class='input-group input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <div class='input-group-text'>";
                                if ($task['status'] == '1') {
                                    echo "<input type='checkbox' aria-label='Checkbox for following text input' checked disabled>";
                                } else {
                                    echo "<input type='checkbox' aria-label='Checkbox for following text input' disabled>";
                                }
                                echo "</div>
                                </div>
                                <label class='form-control task-class'>" . $task['name'] . "</label>
                                <div class='input-group-prepend'>
                                    <div class='input-group-text'>
                                        <!-- Button trigger modal -->
                                        <i data-toggle='modal' data-target='#task-" . $task['id'] . "-detail' class='far fa-edit'></i>
                                        <div class='modal fade' id='task-" . $task['id'] . "-detail' tabindex='-1' aria-hidden='true'>
                                            <div class='modal-dialog'>
                                                <div class='modal-content'>
                                                    <div class='modal-header'>
                                                        <h5 class='modal-title'>Task detail</h5>
                                                        <button type='button' class='close' data-dismiss='modal'
                                                                aria-label='Close'>
                                                            <span aria-hidden='true'>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class='modal-body'>
                                                        <form id='task-" . $task['id'] . "-detail-form' action='/Graduation-Project-Management/task/update'
                                                              method='POST'>
                                                            <div class='input-group input-group-sm mb-3'>
                                                                <div class='input-group-prepend'>
                                                                    <div class='input-group-text'>
                                                                        Phase
                                                                    </div>
                                                                </div>
                                                                <label class='form-control bg-success text-white'>" . $phase['name'] . "</label>
                                                            </div>
                                                            <div class='input-group input-group-sm mb-3'>
                                                                <div class='input-group-prepend'>
                                                                    <div class='input-group-text'>
                                                                        Title
                                                                    </div>
                                                                </div>
                                                                <input class='form-control' type='text'
                                                                       value='" . $task['name'] . "' name='name'>
                                                            </div>
                                                            <div class='form-group'>
                                                                <label>Description</label>
                                                                <textarea class='form-control' rows='3' name='description'>" . $task['description'] . "
                                                                </textarea>
                                                            </div>
                                                            <div class='form-group'>
                                                                <label>Deadline</label>
                                                                <input type='date' class='form-control' value='" . $task['deadline'] . "' name='deadline'>
                                                            </div>
                                                            <div class='form-group'>
                                                                <label>Completed</label>";
                                if ($task['status'] == '1') {
                                    echo "<input type='checkbox' class='form-control' value='1' checked name='status'>";
                                } else {
                                    echo "<input type='checkbox' class='form-control' value='1' name='status'>";
                                }

                                echo " </div>
                                                            <input name='id' value='" . $task['id'] . "' type='hidden'>
                                                            <input name='project_id' value='" . $data['project']['id'] . "' type='hidden'>  
                                                            </form>
                                                            <form id='task-" . $task['id'] . "-deleted-form' action='/Graduation-Project-Management/task/delete' method='POST'>
                                                                <input name='id' value='" . $task['id'] . "' type='hidden'>
                                                                <input name='project_id' value='" . $data['project']['id'] . "' type='hidden'>
                                                           
                                                            </form>
                                                    </div>
                                                    <div class='modal-footer'>
                                                        <button type='button' class='btn btn-secondary'
                                                                data-dismiss='modal'>Close
                                                        </button>
                                                        <button type='submit' form='task-" . $task['id'] . "-detail-form'
                                                                class='btn btn-primary'>Save changes
                                                        </button>
                                                        <button type='submit' form='task-" . $task['id'] . "-deleted-form'
                                                                class='btn btn-danger' onclick='return confirmDelete()'>Delete
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
  
                            </div>";
                            }
                            echo "</div>
                        

                        <div class='text-right mb-3'>
                            <!-- Button trigger modal -->
                            <button type='button' class='btn btn-sm' data-toggle='modal' data-target='#newTask" . $phase['id'] . "Modal'>
                                <i class='fas fa-plus-circle'></i>
                                <span>New task</span>
                            </button>

                            <!-- Modal -->
                            <div class='modal fade text-left' id='newTask" . $phase['id'] . "Modal' tabindex='-1' role='dialog'
                                 aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title'>Task information</h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <form id='newTask" . $phase['id'] . "Form' action='/Graduation-Project-Management/task/add'
                                                  method='POST'>
                                                <div class='input-group input-group-sm mb-3'>
                                                    <div class='input-group-prepend'>
                                                        <div class='input-group-text'>
                                                            Phase
                                                        </div>
                                                    </div>
                                                    <label class='form-control bg-success text-white'>" . $phase['name'] . "</label>
                                                </div>
                                                <div class='input-group input-group-sm mb-3'>
                                                    <div class='input-group-prepend'>
                                                        <div class='input-group-text'>
                                                            Title
                                                        </div>
                                                    </div>
                                                    <input class='form-control' type='text'
                                                           value='Title' name='name'>
                                                </div>
                                                <div class='form-group'>
                                                    <label>Description</label>
                                                    <textarea class='form-control'
                                                              rows='3' name='description'>Some description here!</textarea>
                                                </div>
                                                <div class='form-group'>
                                                    <label>Deadline</label>
                                                    <input type='date' class='form-control' name='deadline'>
                                                </div>
                                                <input type='hidden' name='phase_id' value='" . $phase['id'] . "'>
                                                <input type='hidden' name='project_id' value='" . $data['project']['id'] . "'>
                                            </form>
                                        </div>
                                        <div class='modal-footer'>
                                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close
                                            </button>
                                            <button type='submit' form='newTask" . $phase['id'] . "Form' class='btn btn-primary'>
                                                Save task
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type='button' class='btn btn-sm' data-toggle='modal'
                                    data-target='#viewAllTask" . $phase['id'] . "Modal'>
                                <i class='fas fa-chart-line'></i>
                                <span>Analysis</span>
                            </button>
                            <!-- Modal -->
                            <div class='modal fade' id='viewAllTask" . $phase['id'] . "Modal' tabindex='-1' role='dialog'
                                 aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModal" . $phase['id'] . "Label'>" . $phase['name'] . " tasks</h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body text-center'>
                                            <div class='container'>
                                                <div class='row justify-content-around'>
                                                    <div class='col-5 bg-primary my-2 rounded'>
                                                        <h3 class='text-light'>" . count($phase['tasks']) . "</h3>
                                                        <p>Task in this phase</p>
                                                    </div>
                                                    <div class='col-5 bg-success my-2 rounded'>
                                                        <h3 class='text-light'>" . $phase['completed_tasks'] . "</h3>
                                                        <p>Task is completed</p>
                                                    </div>
                                                    <div class='col-5 bg-warning my-2 rounded'>
                                                        <h3 class='text-light'>" . $phase['uncompleted_tasks'] . "</h3>
                                                        <p>Task is uncompleted</p>
                                                    </div>
                                                </div>

                                                <h4 class='text-center'>Progress</h4>

                                                <div class='row justify-content-center'>
                                                    <div class='col-10'>
                                                        <div class='progress'>
                                                            <div class='progress-bar' role='progressbar'
                                                                 style='width: " . $phase['percent'] . "%;'
                                                                 aria-valuenow='" . $phase['percent'] . "' aria-valuemin='0'
                                                                 aria-valuemax='100'>
                                                                " . $phase['percent'] . "%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='modal-footer'>
                                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>";
                            echo "</div>";
                        }

                        ?>
                        <hr>
                        <!-- Button trigger modal -->
                        <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
                            Add Phase
                        </button>

                        <!-- Modal -->
                        <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog' role='document'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h5 class='modal-title' id='exampleModalLabel'>Add Phase</h5>
                                        <button type='button' class='close' data-dismiss=modal' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>
                                    <div class='modal-body'>
                                        <form id="newPhaseForm" action="/Graduation-Project-Management/phase/add" method="post">
                                            <div class='form-group'>
                                                <label for='phase_name'>Name</label>
                                                <input type='text' name='name' class='form-control' id='phase_name'>
                                            </div>
                                            <?php
                                            echo"<input type='hidden' name='project_id' value='".$data['project']['id']."'>";
                                            ?>
                                        </form>
                                    </div>
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                        <button type='submit' form="newPhaseForm" class='btn btn-primary'>Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                            <div class='border rounded text-center'>-->
                        <!--                                <h3>File here</h3>-->
                        <!--                                <form>-->
                        <!--                                    <label for='uploadFile'>You need to upload ?</label>-->
                        <!--                                    <input type='file' id='uploadFile' class='form-control'>-->
                        <!--                                    <button class='form-control btn btn-outline-primary' type='submit'>Upload</button>-->
                        <!--                                </form>-->
                        <!--                            </div>-->
                    </div>
                    <div class='col-7 border rounded'>
                        <div class='text-center'>
                            <div class='bottom-sticky'>
                                <div id='editor'></div>
                            </div>
                            <form action='/Graduation-Project-Management/post/add' method="post">
                                <input type='hidden' value='' name="content" id='post-content'>


                                <!-- Need to get text in editor first and put to input field-->
                                <button type='submit' class='btn form-control border-bottom' onclick='getPostContent()'>
                                    <i class='fas fa-upload'></i>
                                    <span>Post now</span>
                                </button>
                                <?php
                                echo "<input type='hidden' name='project_id' value='".$data['project']['id']."'>";
                                ?>
                            </form>
                        </div>
                        <?php
                        foreach ($data['project']['posts'] as $post) {
                            echo "
                        <div class='p-3 border rounded my-3'>
                            <div class='pb-3 border-bottom'>
                                <div class='container-fluid'>
                                    <div class='row'>
                                        <img src='/Graduation-Project-Management/assets/image/".$post['avatar']."' width='50'
                                             class='rounded rounded-circle'
                                             alt='...'>
                                        <div class='col'>
                                            <div><b>" . $post['user'] . "</b></div>
                                            <div>" . $post['created_at'] . "</div>
                                        </div>
                                    </div>
                                </div>
                                <div class='mt-2'>
                                    " . $post['content'] . "
                                </div>
                            </div>
                            <div class='pt-2'>
                                <small>" . count($post['comments']) . " comment about this post</small>";

                            echo "
                                <div class='container-fluid'>";
                            foreach ($post['comments'] as $comment) {
                                echo "<div class='row'>
                                                <img src='/Graduation-Project-Management/assets/image/".$comment['avatar']."' width='50'
                                                     class='p-1 rounded rounded-circle'
                                                     alt='...'>
                                                <div class='col'>
                                                    <div><b>" . $comment['user'] . "</b> - " . $comment['created_at'] . "</div>
                                                    <div>" . $comment['content'] . "</div>
                                                </div>
                                             </div>";
                            }
                            echo "
                                </div>
                                <form action='/Graduation-Project-Management/comment/add' method='POST' class='pt-2'>
                                    <div class='input-group input-group-sm mb-3'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text' id='inputGroup-sizing-sm'>Comment</span>
                                        </div>
                                        <input type='text' class='form-control' aria-label='Small'
                                               aria-describedby='inputGroup-sizing-sm' name='content'>
                                        <div class='input-group-append'>
                                        <span class='input-group-text'>
                                        <input type='hidden' name='post_id' value='".$post['id']."'>
                                        <input type='hidden' name='project_id' value='".$data['project']['id']."'>
                                            <button type='submit' class='p-0 border-0'>
                                                <i class='far fa-paper-plane'></i>
                                            </button>
                                        </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>";
                        }

                        ?>


                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<script type='application/javascript' rel='script'>
    const labels = document.getElementsByClassName('task-class');
    for (let i = 0; i < labels.length; i++) {
        const label = labels[i];
        if (label.innerHTML.length > 18) {
            label.innerHTML = label.innerHTML.slice(0, 16) + "...";
        }
    }

    ClassicEditor
        .create(document.querySelector("#editor"))
        .catch(error => {
            console.error(error);
        });
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>
<script src="/Graduation-Project-Management/assets/js/teacher_project_script.js"></script>
</body>

</html>