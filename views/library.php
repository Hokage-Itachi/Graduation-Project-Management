<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/asserts/css/library-css/library-style.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="/asserts/Image/favicon.ico">

</head>

<body>
    <div class="container">
        <div class="left">
            <div class="sidebar">
                <div class="search">
                    <form class="search-form" action="/library/search" method="POST">
                        <input type="text" placeholder="Search..." name='name_string'>
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="select">
                    <form class="select-form">
                        <select class="selective" onchange="change_select(value)">
                            <option value="major">Ngành</option>
                            <option value="teacher">Giáo viên hướng dẫn</option>
                            <option value="year">Khóa</option>
                        </select>
                    </form>
                </div>
                <hr>
                <div class="checkbox-container" id="checkbox-container">
                    <input class="mixed" type="checkbox">


                </div>

            </div>

        </div>
        <div class="right">
            <div class="container-right">
                <div class="header">
                    <h1>HUS PROJECT LIBRARY</h1>
                    <div class="user">
                        <img src="/asserts/Image/purple-linear-outline-person-icon-user-icon-in-vector-29003247.jpg" style="width: 51.3px; height: 51.7px;display: inline">
                        <?php
                        if (!isset($_SESSION['user'])) {
                            echo "<span><a href='/login'> Login</a></span>";
                        } else {
                            if ($_SESSION['user']['role'] == 1) {
                                echo "<span><a href='#'>" . $data['user'] . "</a></span>";
                            } elseif ($_SESSION['user']['role'] == 2) {
                                echo "<span><a href='/teacher'>" . $data['user'] . "</a></span>";
                            } else {
                                echo "<span><a href='/student'>" . $data['user'] . "</a></span>";
                            }
                        }
                        ?>
                        <!-- <span><a href="#"> Login</a></span> -->
                    </div>
                </div>
                <div class="content">
                    <?php
                    for ($index = 0; $index < count($data['projects']); $index++) {
                        // for ($k = 0; $k < 3; $k++) {
                        echo "<div class='column'>";
                        echo " <div class='card'>
                            <div class='user-card'>
                                <i class='fa fa-user'></i>
                            </div>
                            <div class='project-info'>
                                <h1 class='name'>" . $data['projects'][$index]['project_name'] . "</h1>
                                <ul class='meta-data['projects']'>
                                    <div class='info-y'>
                                        <li>
                                            <label>Sinh viên:</label>
                                            <strong>" . $data['projects'][$index]['student'] . "</strong>
                                        </li>
                                        <li>
                                            <label>Khóa:</label>
                                            <strong>" . $data['projects'][$index]['year'] . "</strong>
                                        </li>
                                        <li>
                                            <label>Người hướng dẫn:</label>
                                            <strong>" . $data['projects'][$index]['teacher'] . "</strong>
                                        </li>
                                        <li>
                                            <label>Chuyên ngành:</label>
                                            <strong>" . $data['projects'][$index]['branch'] . "</strong>
                                        </li>
                                        <li>
                                            <label>Nội dung:</label>
                                            <strong>" . $data['projects'][$index]['content'] . "</strong>
                                        </li>
                                        <li>
                                            <label>Điểm số:</label>
                                            <strong>" . $data['projects'][$index]['point'] . "/10</strong>
                                        </li>
                                    </div>
                                </ul>
                            </div>
                        </div>";
                        //     if ($index >= count($data['projects'])) {
                        //         break;
                        //     }
                        // }
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
            <div class="footer-distributed">
                <p>&copy; Copyright 2020</p>
            </div>
        </div>
    </div>

    </div>
    <script language="JavaScript">
        var majors = <?php echo $data['branches']['names']; ?>;
        var branch_ids = <?php echo $data['branches']['ids']?>;
        // var majors = ["Math", "Literature", "English", "Chemistry", "Computer Science"];
        // var teachers = ["Nguyễn Văn B", "Trần Văn C", "Lê Thị D", "Vũ Văn H", "Hoàng Thị A"];
        var teacher_names = <?php echo $data['teachers']['names']; ?>;
        // console.log(teacher_names);
        var teacher_ids = <?php echo $data['teachers']['ids']; ?>;
        // console.log(teacher_ids);
        var years = ["QH2013", "QH2014", "QH2015", "QH2016", "QH2017"];
        // var labels = document.getElementsByTagName('label');
        var i;

        function change_select($value) {
            const divTag = document.getElementById('checkbox-container');
            divTag.innerHTML = "";

            if ($value == "teacher") {
                for (i = 0; i < teacher_names.length; i++) {
                    const new_checkbox = document.createElement('input');
                    new_checkbox.setAttribute("type", "checkbox");
                    new_checkbox.innerHTML = teacher_names[i];
                    new_checkbox.classList.add("mixed");
                    new_checkbox.name = "teacher_id[]";
                    console.log(new_checkbox.name)
                    new_checkbox.value = teacher_ids[i];

                    const label = document.createElement('label');
                    label.innerHTML = teacher_names[i];

                    divTag.appendChild(new_checkbox);
                    divTag.appendChild(label);
                }
            } else if ($value == "year") {
                for (i = 0; i < years.length; i++) {
                    const new_checkbox = document.createElement('input');
                    new_checkbox.setAttribute("type", "checkbox");
                    new_checkbox.innerHTML = years[i];
                    new_checkbox.classList.add("mixed");

                    const label = document.createElement('label');
                    label.innerHTML = years[i];

                    divTag.appendChild(new_checkbox);
                    divTag.appendChild(label);
                }
            } else {
                for (i = 0; i < majors.length; i++) {
                    const new_checkbox = document.createElement('input');
                    new_checkbox.setAttribute("type", "checkbox");
                    new_checkbox.innerHTML = majors[i];
                    new_checkbox.name = "branch_id[]";
                    new_checkbox.value = branch_ids[i];
                    new_checkbox.classList.add("mixed");

                    const label = document.createElement('label');
                    label.innerHTML = majors[i];

                    divTag.appendChild(new_checkbox);
                    divTag.appendChild(label);
                }
            }
        }
    </script>
</body>

</html>