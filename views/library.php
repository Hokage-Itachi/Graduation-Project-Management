<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="./asserts/css/library-css/library-style.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="./asserts/Image/favicon.ico">

</head>

<body>
    <div class="container">
        <div class="left">
            <div class="sidebar">
                <div class="search">
                    <form class="search-form">
                        <input type="text" placeholder="Search...">
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
                        <img src="./asserts/Image/purple-linear-outline-person-icon-user-icon-in-vector-29003247.jpg" style="width: 51.3px; height: 51.7px;display: inline">
                        <span><a href="#"> Login</a></span>
                    </div>
                </div>
                <div class="content">
                    <div class="column">
                        <?php

                        echo "<div class='card'>";
                        echo "<div class='user-card'>";
                        echo "<i class='fa fa-user'></i>";
                        echo "</div>";
                        echo "<div class='project-info'>";
                        echo "<h1 class='name'>".$data['project_name']."</h1>";
                        echo "<ul class='meta-data'>";
                        echo "<div class='info-y'>";
                        echo "<li>";
                        echo "<label>Sinh viên:</label>";
                        echo "<strong>Nguyễn Thế Hợp</strong>";
                        echo "</li>";
                        echo "<li>";
                        echo "<label>Khóa:</label>";
                        echo "<strong>QH2018</strong>";
                        echo "</li>";
                        echo "<li>";
                        echo "<label>Người hướng dẫn:</label>";
                        echo "<strong>TS. Nguyễn Văn B</strong>";
                        echo "</li>";
                        echo "<li>";
                        echo "<label>Chuyên ngành:</label>";
                        echo "<strong>Computer Science</strong>";
                        echo "</li>";
                        echo "<li>";
                        echo "<label>Nội dung:</label>";
                        echo "<strong>Xây dựng cài đặt thành công các thuật toán chuyển đổi dữ liệu từ XML
                                                sang CSDL quan hệ và ngược lại</strong>";
                        echo "</li>";
                        echo "<li>";
                        echo "<strong>10/10</strong>";
                        echo "</li>";
                        echo "</div>";
                        echo "</ul>";
                        echo "</div>";
                        echo "</div>";
                        ?>
                        <div class="card">
                            <div class="user-card">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="project-info">
                                <h1 class="name">Tích Hợp Cơ Sở Dữ Liệu Và XML </h1>
                                <ul class="meta-data">
                                    <div class="info-y">
                                        <li>
                                            <label>Sinh viên:</label>
                                            <strong>Nguyễn Thế Hợp</strong>
                                        </li>
                                        <li>
                                            <label>Khóa:</label>
                                            <strong>QH2018</strong>
                                        </li>
                                        <li>
                                            <label>Người hướng dẫn:</label>
                                            <strong>TS. Nguyễn Văn B</strong>
                                        </li>
                                        <li>
                                            <label>Chuyên ngành:</label>
                                            <strong>Computer Science</strong>
                                        </li>
                                        <li>
                                            <label>Nội dung:</label>
                                            <strong>Xây dựng cài đặt thành công các thuật toán chuyển đổi dữ liệu từ XML
                                                sang CSDL quan hệ và ngược lại</strong>
                                        </li>
                                        <li>
                                            <label>Điểm số:</label>
                                            <strong>10/10</strong>
                                        </li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <div class="user-card">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="project-info">
                                <h1 class="name">Tích Hợp Cơ Sở Dữ Liệu Và XML </h1>
                                <ul class="meta-data">
                                    <div class="info-y">
                                        <li>
                                            <label>Sinh viên:</label>
                                            <strong>Nguyễn Thế Hợp</strong>
                                        </li>
                                        <li>
                                            <label>Khóa:</label>
                                            <strong>QH2018</strong>
                                        </li>
                                        <li>
                                            <label>Người hướng dẫn:</label>
                                            <strong>TS. Nguyễn Văn B</strong>
                                        </li>
                                        <li>
                                            <label>Chuyên ngành:</label>
                                            <strong>Computer Science</strong>
                                        </li>
                                        <li>
                                            <label>Nội dung:</label>
                                            <strong>Xây dựng cài đặt thành công các thuật toán chuyển đổi dữ liệu từ XML
                                                sang CSDL quan hệ và ngược lại</strong>
                                        </li>
                                        <li>
                                            <label>Điểm số:</label>
                                            <strong>10/10</strong>
                                        </li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <div class="user-card">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="project-info">
                                <h1 class="name">Tích Hợp Cơ Sở Dữ Liệu Và XML </h1>
                                <ul class="meta-data">
                                    <div class="info-y">
                                        <li>
                                            <label>Sinh viên:</label>
                                            <strong>Nguyễn Thế Hợp</strong>
                                        </li>
                                        <li>
                                            <label>Khóa:</label>
                                            <strong>QH2018</strong>
                                        </li>
                                        <li>
                                            <label>Người hướng dẫn:</label>
                                            <strong>TS. Nguyễn Văn B</strong>
                                        </li>
                                        <li>
                                            <label>Chuyên ngành:</label>
                                            <strong>Computer Science</strong>
                                        </li>
                                        <li>
                                            <label>Nội dung:</label>
                                            <strong>Xây dựng cài đặt thành công các thuật toán chuyển đổi dữ liệu từ XML
                                                sang CSDL quan hệ và ngược lại</strong>
                                        </li>
                                        <li>
                                            <label>Điểm số:</label>
                                            <strong>10/10</strong>
                                        </li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-distributed">
                    <p>&copy; Copyright 2020</p>
                </div>
            </div>
        </div>

    </div>
    <script language="JavaScript">
        var majors = ["Math", "Literature", "English", "Chemistry", "Computer Science"];
        var teachers = ["Nguyễn Văn B", "Trần Văn C", "Lê Thị D", "Vũ Văn H", "Hoàng Thị A"];
        var years = ["QH2013", "QH2014", "QH2015", "QH2016", "QH2017"];
        // var labels = document.getElementsByTagName('label');
        var i;

        function change_select($value) {
            const divTag = document.getElementById('checkbox-container');
            divTag.innerHTML = "";

            if ($value == "teacher") {
                for (i = 0; i < teachers.length; i++) {
                    const new_checkbox = document.createElement('input');
                    new_checkbox.setAttribute("type", "checkbox");
                    new_checkbox.innerHTML = teachers[i];
                    new_checkbox.classList.add("mixed");

                    const label = document.createElement('label');
                    label.innerHTML = teachers[i];

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