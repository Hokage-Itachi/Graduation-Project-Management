<!doctype html>
<html lang='en'>

<head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>

    <title>Graduation Project management System</title>
    <link href='/assets/css/admin-style.css' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.0/css/all.min.css'>
    <script src='https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js'></script>

</head>

<body>
<div class='container-fluid height-100vh'>
    <div class='row'>
        <nav class='col-md-2 d-none d-md-block bg-light sidebar text-center'>
            <div class='text-center'>
                <a href='#' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                    <?php
                    echo "<img src='/assets/image/".$data['avatar']."' width='150px' height='150px' class='rounded' alt='...'>"
                    ?>
                </a>
                <div class='dropdown-menu'>
                    <a class='dropdown-item' href='/student/profile'>View detail profile</a>
                    <div class='dropdown-divider'></div>
                    <a class='dropdown-item' href='/logout'>Logout</a>
                </div>
            </div>

            <div class='sidebar-sticky'>
                <a class='btn btn-outline-danger my-5' href='/teacher'>Home</a>
                <a class='btn btn-outline-danger my-5' href='/library'>Library</a>
            </div>
        </nav>
        <main role='main' class='col-md-9 ml-sm-auto col-lg-10 pt-3 px-4'>

            <div class='col-md-9'>
                <div class='card'>
                    <div class='card-body'>
                        <div class='row'>
                            <div class='col-md-12'>
                                <h4>Your Profile</h4>
                                <hr>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-12'>
                                <?php
                                echo "<form action='/student/profile/update' method='post' enctype='multipart/form-data'>
                                    <div class='form-group row'>
                                        <label for='student_id' class='col-4 col-form-label'>Email</label>
                                        <div class='col-8'>
                                            <input id='student_id' name='student_id' class='form-control here' required type='text' value='".$data['student']['student_id']."' readonly>
                                        </div>
                                    </div>
                                    <div class='form-group row'>
                                        <label for='email' class='col-4 col-form-label'>Email</label>
                                        <div class='col-8'>
                                            <input id='email' name='email' class='form-control here' required type='text' value='".$data['student']['email']."'>
                                        </div>
                                    </div>
                                    <div class='form-group row'>
                                        <label for='name' class='col-4 col-form-label'>Full Name</label>
                                        <div class='col-8'>
                                            <input id='name' name='name' class='form-control here' required type='text' value='".$data['student']['name']."'>
                                        </div>
                                    </div>
                                    <div class='form-group row'>
                                        <label for='phone' class='col-4 col-form-label'>Phone</label>
                                        <div class='col-8'>
                                            <input id='phone' name='phone' class='form-control here' pattern='(09|03|07|08|05)+([0-9]{8})\b' required type='text' value='".$data['student']['phone']."'>
                                        </div>
                                    </div>

                                    <div class='form-group row'>
                                        <label for='select' class='col-4 col-form-label'>Branch</label>
                                        <div class='col-8'>
                                            <select id='select' name='branch' class='custom-select'>";
                                foreach ($data['branches'] as $branch) {
                                    if($branch['id'] == $data['student']['branch']){
                                        echo "<option selected value='".$branch['id']."'>".$branch['name']."</option>";
                                    } else{
                                        echo "<option value='".$branch['id']."'>".$branch['name']."</option>";
                                    }
                                }
                                echo "</select>
                                        </div>
                                    </div>
                                    <div class='form-group row'>
                                        <label for='year' class='col-4 col-form-label'>Year</label>
                                        <div class='col-8'>
                                            <input id='year' name='year' class='form-control here' type='text' value='".$data['student']['year']."'>
                                        </div>
                                    </div>
                                    <div class='form-group row'>
                                        <label for='class' class='col-4 col-form-label'>Class</label>
                                        <div class='col-8'>
                                            <input id='class' name='class' class='form-control here' type='text' value='".$data['student']['class']."'>
                                        </div>
                                    </div>
                                    <div class='form-group row'>
                                        <label for='new_password' class='col-4 col-form-label'>New Password</label>
                                        <div class='col-8'>
                                            <input id='new_password' name='new_password' class='form-control here' type='text'>
                                        </div>
                                    </div>
                                    <div class='form-group row'>
                                        <label for='avatar' class='col-4 col-form-label'>Avatar</label>
                                        <div class='col-8'>
                                            <input id='avatar' name='avatar' class='form-control here' type='file'>
                                        </div>
                                    </div>

                                    <div class='form-group row'>
                                        <div class='offset-4 col-8'>
                                            <button name='submit' type='submit' class='btn btn-primary'>Update My Profile</button>
                                        </div>
                                    </div>
                                </form>";
                                ?>

                            </div>
                        </div>

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
            label.innerHTML = label.innerHTML.slice(0, 16) + '...';
        }
    }
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>
<script src='/assets/js/teacher_project_script.js'></script>
</body>

</html>