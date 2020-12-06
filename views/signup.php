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
        Sign up your project
    </h1>
    <div class='container'>
        <form action="/addproject" method="POST">
            <div class='form-group'>
                <div class='form-child'>
                    <input type='text' id="name" name="name" placeholder="Full Name" required>
                </div>
                <div class='form-child'>
                    <input type='number' id="msv" name="student_id" placeholder="Student ID" required>
                </div>
                <div class='form-child'>
                    <input type="text" id="lop" name="class" placeholder="Class" required>
                </div>
            </div>
            <div class='gender'>
                <div class='content'>
                    <p>Gender</p>
                    <div class='form-check'>
                        <input class='form-input' id="male" type="radio" name="gender" value="1">
                        <label for="male" class='form-label'>Male</label>
                    </div>
                    <div class='form-check'>
                        <input class='form-input' id="female" type="radio" name="gender" value="2">
                        <label for="female" class='form-label'>Female</label>
                    </div>
                </div>

            </div>
            <div class='form-group'>
                <div class="form-child">
                    <input type='text' id="nganh" name="branch" placeholder="Branch" required>
                </div>
                <div class='form-child'>
                    <input type="text" id="year" name="year" placeholder="Year" required>
                </div>
                <div class='form-child'>
                    <input type="text" id="Khoa" name="faculty" placeholder="Faculty" required>
                </div>
            </div>
            <div class='form-group'>
                <div class="form-child">
                    <input type='text' id="school" name="university" placeholder="University" required>
                </div>
                <div class='form-child'>
                    <input type="text" id="projec" name="project" placeholder="Topic" required>
                </div>

            </div>
            <div class="form-group">
                <div class='form-child'>
                    <label class='lab' for="teacher">Teacher</label><br>
                    <select class='selective' id="teacher" name="teacher">
                        <option value="1111">Teacher A</option>
                        <option value="1112">Teacher B</option>
                    </select>
                </div>
            </div>
            <!-- <div class='form-content'>
                <textarea placeholder="Topic"></textarea>
            </div> -->
            <button type="submit">Add</button>

        </form>
    </div>
</body>

</html>