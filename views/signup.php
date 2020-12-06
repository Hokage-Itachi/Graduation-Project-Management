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
    Đăng Ký Đồ Án Tốt Nghiệp
</h1>
<div class='container'>
    <form>


        <div class='form-group'>
            <div class='form-child topic'>
              <input type="text" id="projec" placeholder="Đề tài" required>
            </div>

        </div>
        <div class='form-group'>

            <div class='form-child st'>
                <label class='lab' for="branch">Chuyên Ngành</label><br>
                <select class='selective' id="branch">
                   <option>Math</option>
                   <option>Computer and Science Information</option>
                </select>
            </div>
            <div class='form-child st'>
                <label class='lab' for="teacher">Người Hướng Dẫn</label><br>
              <select class='selective' id="teacher">
                  <option>Teacher A</option>
                  <option>Teacher B</option>
              </select>
            </div>
        </div>
         <div class='form-content'>
             <textarea placeholder="Nội Dung Đề Tài"></textarea>
         </div>

        <button type="button">Add</button>

    </form>
</div>
</body>
</html>