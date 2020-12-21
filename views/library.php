<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library</title>
    <link href="/assets/css/library-css/library-style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="/assets/Image/favicon.ico">


</head>

<body>
<div class='container-fluid'>
    <div class='row'>
        <div class=' left col-xl-3'>
            <div class='container-left'>
                <div class='search-div'>
                    <input type="text" placeholder="search..." id='search'>
                    <button type="button"><i class="fa fa-search" onclick="search()"></i></button>
                </div>
                <div class='select-div'>
                    <select class="selective" onchange="change_select(value)" id='fill_by'>
                        <option value="major">Ngành</option>
                        <option value="teacher">Giáo viên hướng dẫn</option>
                        <!-- <option value="year">Khóa</option> -->
                    </select>
                </div>
                <hr>
                <div class='checkbox-container' id='checkbox-container'>
                    <input class='mixed' type="checkbox" onchange="filter()">
                </div>
            </div>
        </div>
        <div class='right col-xl-9'>
            <div class="page-header">
                <h1>HUS PROJECT LIBRARY</h1>
                <div class="user">
                    <img src="assets/image/img_avatar2.png" class="rounded-circle" alt="Cinque Terre">
                    <a href="#">Login</a>
                </div>
            </div>
            <div class='card-column'>
                <div class='card'>
                    <div class='user-card'>
                        <i class='fa fa-user'></i>
                    </div>
                    <div class='project-info'>
                        <h1 class='name'>Tích Hợp Cơ Sở Dữ Liệu Và XML</h1>
                        <ul class='meta-data'>
                            <div class='info-y'>
                                <li>
                                    <label>Sinh viên:</label>
                                    <strong class='student'>Nguyễn Thế Hợp</strong>
                                </li>
                                <li>
                                    <label>Khóa:</label>
                                    <strong class='year'>QH2018</strong>
                                </li>
                                <li>
                                    <label>Người hướng dẫn:</label>
                                    <strong class='teacher'>Nguyễn Văn A</strong>
                                </li>
                                <li>
                                    <label>Chuyên ngành:</label>
                                    <strong class='branch'>Computer Science</strong>
                                </li>
                                <li>
                                    <label>Nội dung:</label>
                                    <strong class='content'>Xây dựng cài đặt thành công các thuật toán chuyển đổi dữ liệu từ XML sang CSDL quan hệ và ngược lại</strong>
                                </li>
                                <li>
                                    <label>Điểm số:</label>
                                    <strong class='point'>10/10</strong>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>

                <div class='card'>
                    <div class='user-card'>
                        <i class='fa fa-user'></i>
                    </div>
                    <div class='project-info'>
                        <h1 class='name'>Tích Hợp Cơ Sở Dữ Liệu Và XML</h1>
                        <ul class='meta-data'>
                            <div class='info-y'>
                                <li>
                                    <label>Sinh viên:</label>
                                    <strong class='student'>Nguyễn Thế Hợp</strong>
                                </li>
                                <li>
                                    <label>Khóa:</label>
                                    <strong class='year'>QH2018</strong>
                                </li>
                                <li>
                                    <label>Người hướng dẫn:</label>
                                    <strong class='teacher'>Nguyễn Văn A</strong>
                                </li>
                                <li>
                                    <label>Chuyên ngành:</label>
                                    <strong class='branch'>Computer Science</strong>
                                </li>
                                <li>
                                    <label>Nội dung:</label>
                                    <strong class='content'>Xây dựng cài đặt thành công các thuật toán chuyển đổi dữ liệu từ XML sang CSDL quan hệ và ngược lại</strong>
                                </li>
                                <li>
                                    <label>Điểm số:</label>
                                    <strong class='point'>10/10</strong>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>

                <div class='card'>
                    <div class='user-card'>
                        <i class='fa fa-user'></i>
                    </div>
                    <div class='project-info'>
                        <h1 class='name'>Tích Hợp Cơ Sở Dữ Liệu Và XML</h1>
                        <ul class='meta-data'>
                            <div class='info-y'>
                                <li>
                                    <label>Sinh viên:</label>
                                    <strong class='student'>Nguyễn Thế Hợp</strong>
                                </li>
                                <li>
                                    <label>Khóa:</label>
                                    <strong class='year'>QH2018</strong>
                                </li>
                                <li>
                                    <label>Người hướng dẫn:</label>
                                    <strong class='teacher'>Nguyễn Văn A</strong>
                                </li>
                                <li>
                                    <label>Chuyên ngành:</label>
                                    <strong class='branch'>Computer Science</strong>
                                </li>
                                <li>
                                    <label>Nội dung:</label>
                                    <strong class='content'>Xây dựng cài đặt thành công các thuật toán chuyển đổi dữ liệu từ XML sang CSDL quan hệ và ngược lại</strong>
                                </li>
                                <li>
                                    <label>Điểm số:</label>
                                    <strong class='point'>10/10</strong>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>

                <div class='card'>
                    <div class='user-card'>
                        <i class='fa fa-user'></i>
                    </div>
                    <div class='project-info'>
                        <h1 class='name'>Tích Hợp Cơ Sở Dữ Liệu Và XML</h1>
                        <ul class='meta-data'>
                            <div class='info-y'>
                                <li>
                                    <label>Sinh viên:</label>
                                    <strong class='student'>Nguyễn Thế Hợp</strong>
                                </li>
                                <li>
                                    <label>Khóa:</label>
                                    <strong class='year'>QH2018</strong>
                                </li>
                                <li>
                                    <label>Người hướng dẫn:</label>
                                    <strong class='teacher'>Nguyễn Văn A</strong>
                                </li>
                                <li>
                                    <label>Chuyên ngành:</label>
                                    <strong class='branch'>Computer Science</strong>
                                </li>
                                <li>
                                    <label>Nội dung:</label>
                                    <strong class='content'>Xây dựng cài đặt thành công các thuật toán chuyển đổi dữ liệu từ XML sang CSDL quan hệ và ngược lại</strong>
                                </li>
                                <li>
                                    <label>Điểm số:</label>
                                    <strong class='point'>10/10</strong>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>

                <div class='card'>
                    <div class='user-card'>
                        <i class='fa fa-user'></i>
                    </div>
                    <div class='project-info'>
                        <h1 class='name'>Tích Hợp Cơ Sở Dữ Liệu Và XML</h1>
                        <ul class='meta-data'>
                            <div class='info-y'>
                                <li>
                                    <label>Sinh viên:</label>
                                    <strong class='student'>Nguyễn Thế Hợp</strong>
                                </li>
                                <li>
                                    <label>Khóa:</label>
                                    <strong class='year'>QH2018</strong>
                                </li>
                                <li>
                                    <label>Người hướng dẫn:</label>
                                    <strong class='teacher'>Nguyễn Văn A</strong>
                                </li>
                                <li>
                                    <label>Chuyên ngành:</label>
                                    <strong class='branch'>Computer Science</strong>
                                </li>
                                <li>
                                    <label>Nội dung:</label>
                                    <strong class='content'>Xây dựng cài đặt thành công các thuật toán chuyển đổi dữ liệu từ XML sang CSDL quan hệ và ngược lại</strong>
                                </li>
                                <li>
                                    <label>Điểm số:</label>
                                    <strong class='point'>10/10</strong>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>

                <div class='card'>
                    <div class='user-card'>
                        <i class='fa fa-user'></i>
                    </div>
                    <div class='project-info'>
                        <h1 class='name'>Tích Hợp Cơ Sở Dữ Liệu Và XML</h1>
                        <ul class='meta-data'>
                            <div class='info-y'>
                                <li>
                                    <label>Sinh viên:</label>
                                    <strong class='student'>Nguyễn Thế Hợp</strong>
                                </li>
                                <li>
                                    <label>Khóa:</label>
                                    <strong class='year'>QH2018</strong>
                                </li>
                                <li>
                                    <label>Người hướng dẫn:</label>
                                    <strong class='teacher'>Nguyễn Văn A</strong>
                                </li>
                                <li>
                                    <label>Chuyên ngành:</label>
                                    <strong class='branch'>Computer Science</strong>
                                </li>
                                <li>
                                    <label>Nội dung:</label>
                                    <strong class='content'>Xây dựng cài đặt thành công các thuật toán chuyển đổi dữ liệu từ XML sang CSDL quan hệ và ngược lại</strong>
                                </li>
                                <li>
                                    <label>Điểm số:</label>
                                    <strong class='point'>10/10</strong>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script language="JavaScript">
    var majors = <?php echo $data['branches']['names']; ?>;
    var branch_ids = <?php echo $data['branches']['ids'] ?>;
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
                new_checkbox.addEventListener("change", filter);
                new_checkbox.classList.add("mixed");
                new_checkbox.name = teacher_names[i];
                // console.log(new_checkbox.name)
                new_checkbox.id = teacher_ids[i];

                const label = document.createElement('label');
                label.innerHTML = teacher_names[i];
                label.htmlFor = new_checkbox.id;

                divTag.appendChild(new_checkbox);
                divTag.appendChild(label);
            }
        } else if ($value == "year") {
            for (i = 0; i < years.length; i++) {
                const new_checkbox = document.createElement('input');
                new_checkbox.setAttribute("type", "checkbox");
                new_checkbox.innerHTML = years[i];
                new_checkbox.name = years[i];
                new_checkbox.classList.add("mixed");
                new_checkbox.addEventListener("change", filter);

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
                new_checkbox.name = majors[i];
                new_checkbox.id = branch_ids[i];
                new_checkbox.addEventListener("change", filter);
                new_checkbox.classList.add("mixed");

                const label = document.createElement('label');
                label.innerHTML = majors[i];
                label.htmlFor = new_checkbox.id;

                divTag.appendChild(new_checkbox);
                divTag.appendChild(label);
            }
        }
    }
</script>
<script src="/assets/js/library_script.js"></script>
</body>

</html>