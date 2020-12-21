<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/assets/css/signup/signup-style.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="/assets/Image/favicon.ico">


</head>

<body>
<h1 class='header'>
    Sign up your granduation project
</h1>
<div class='container'>
    <form action="/student/addproject" method="POST">


        <div class='form-group'>
            <div class='form-child topic'>
              <input type="text" name="name" id="project" placeholder="Project name" required>
            </div>

        </div>
        <div class='form-group'>

            <div class='form-child st'>
                <label class='lab' for="branch">Branch</label><br>
                <select class='selective' id="branch" name="branch">
                <?php
                foreach ($data['branches'] as $branch){
                    echo "<option value='".$branch['id']."'>".$branch['name']."</option>";
                }
                ?>
                </select>
            </div>
            <div class='form-child st'>
                <label class='lab' for="teacher">Teacher</label><br>
              <select class='selective' id="teacher" name="teacher">
                  <?php
                  foreach ($data['teachers'] as $teacher){
                      echo "<option value='".$teacher['email']."'>".$teacher['name']."</option>";
                  }
                  ?>
              </select>
            </div>
        </div>
         <div class='form-content'>
             <textarea placeholder="Description"></textarea>
         </div>

        <button type="submit">Sign Up</button>

        </form>
    </div>
</body>

</html>