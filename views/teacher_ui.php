<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Teacher</title>
    <link rel="stylesheet" href="./asserts/css/Styles.css" />
    <link rel="icon" type="image/png" href="./asserts/Image/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
</head>

<body>
    <div class="main_teacher container">
        <div>
            <h5 style="text-align: right">
                <a style="color: #000" href="library">Go to library</a>
            </h5>
        </div>
        <div class="row">
            <div class="main_teacher-left col-md-3 col-sm-12">
                <div style="margin-top: 2rem" class="teacher_info">
                    <div class="card">
                        <img class="card-img-top" src="./asserts/Image/img_avatar2.png" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Teacher</h5>
                            <p class="card-text">Info</p>
                            <a href="#" class="btn btn-primary">Change info</a>
                        </div>
                    </div>
                </div>
                <div class="list-project">
                    <h5 style="margin-top: 2rem">All Projects</h5>
                    <ul class="list-group" id="ul-projects" style="overflow: auto; height: 400px; margin-top: 2rem"></ul>
                </div>
            </div>
            <div class="main_teacher-center col-md-6 col-sm-12 container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="project_info">
                            <h3>Project information</h3>
                            <ul class="project_info-list list-group" id="project_info-list">
                                <li class="project_info-item list-group-item">Name</li>
                                <li class="project_info-item list-group-item">Branch</li>
                                <li class="project_info-item list-group-item">
                                    Teacher Guide
                                </li>
                            </ul>
                        </div>
                        <div class="phase">
                            <progress max="100" value="50">Progress</progress>
                            <h5>Phase</h5>
                            <form>
                                <select class="form-group custom-select" id="select-phase" onChange="handleSelect()">
                                    <option value="Phase 1">Phase 1</option>
                                    <option value="Phase 2">Phase 2</option>
                                    <option value="Phase 3">Phase 3</option>
                                </select>
                            </form>
                            <ul class="task_list list-group" style="overflow: auto; height: 400px" id="task_list-menu"></ul>
                        </div>
                        <div class="file_import">
                            <label for="file">File if have</label>
                            <input type="file" id="file" name="file" />
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 chat-box">
                        <h3 style="text-align: center">Chat box</h3>
                        <form onsubmit="sendMessage(event)">
                            <div class="chat_box">
                                <div class="chat_box-content">
                                    <ul id="ul-message"></ul>
                                </div>
                                <div class="type_text">
                                    <input class="input-message" id="type_text" type="text" placeholder="Type a message" />
                                    <button class="btn-send" id="send_message" type="submit">
                                        <i class="fas fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="main_teacher-right col-md-3 col-sm-12">
                <h3 style="margin-top: 2rem">Nontification</h3>
                <p>
                    <a href="/Nontification">Nontification</a>
                    <span class="badge badge-secondary">New</span>
                </p>
                <p>
                    <a href="/Nontification">Nontification</a>
                    <span class="badge badge-secondary">New</span>
                </p>
                <p>
                    <a href="/Nontification">Nontification</a>
                    <span class="badge badge-secondary">New</span>
                </p>
                <p>
                    <a href="/Nontification">Nontification</a>
                    <span class="badge badge-secondary">New</span>
                </p>
                <p>
                    <a href="/Nontification">Nontification</a>
                    <span class="badge badge-secondary">New</span>
                </p>
            </div>
        </div>
    </div>
    <script src="./asserts/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0343562330.js" crossorigin="anonymous"></script>
    <script>
        //list Project
        const listProject = [
            "Games",
            "Maths",
            "English",
            "History",
            "Physical",
            "Information Technology",
            "Literature",
            "Chemistry",
        ];

        // render list Project in Teacher page
        for (let i = 0; i < listProject.length; i++) {
            const element = listProject[i];
            document.getElementById(
                "ul-projects"
            ).innerHTML += `<li class="list-group-item"><a href="/">${element}</a></li>`;
        }
    </script>
</body>

</html>