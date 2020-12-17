<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./grid.css" />
    <link rel="stylesheet" href="./styles.css" />
    <script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
    <style>
      * {
        box-sizing: border-box;
      }

      .col {
        text-align: center;
        border: 1px solid #000;
        border-radius: 1px solid;
        background-clip: content-box;
        margin-top: 15px;
        margin-bottom: 8px;
        padding: 1rem;
      }
    </style>
    <title>Document</title>
  </head>

  <body style="background-color: #fff">
    <div class="grid">
      <!--Account information-->
      <div class="card" id="account">
        <img src="" alt="Image" style="width: 100%" />
        <h1>Student name</h1>
        <p class="title">Information</p>
        <p>sssssssssssssssssssssssssssssssss</p>

        <button style="margin-left: 6rem; margin-top: 4rem" class="box-btn">
          Update
        </button>
      </div>
      <!--  -->
      <div class="header">
        <div style="display: flex; justify-content: space-evenly">
          <h1>Project name</h1>
          <button
            style="position: absolute; top: 2rem; right: 1rem"
            class="box-btn"
          >
            Sign out
          </button>
          <button
            style="position: absolute; top: 2rem; right: 7rem"
            class="box-btn"
            onclick="handleAccount()"
          >
            Account
          </button>
        </div>

        <div id="myProgress">
          <div id="myBar">80%</div>
        </div>
      </div>
      <div style="margin-top: 2rem" class="row">
        <div class="col l-3 menu">
          <h2>Project information</h2>
          <ul>
            <li><a href="">Project name</a></li>
            <li><a href="">Branch</a></li>
            <li><a href="">Teacher Guide</a></li>
          </ul>
          <div style="margin-top: 4rem; text-align: center">
            <button class="box-btn" type="button">Librarry</button>
          </div>
        </div>
        <div class="col l-9 c-12">
          <div class="row">
            <div class="col l-6 c-12">
              <div class="select">
                <select>
                  <option value="">Phase</option>
                  <option value="">Phase</option>
                  <option value="">Phase</option>
                  <option value="">Phase</option>
                  <option value="">Phase</option>
                </select>
              </div>
              <div class="tasks">
                <!-- The Modal show task details  -->
                <div id="myModal" class="modal">
                  <!-- Modal content -->
                  <div class="modal-content">
                    <span onclick="closeModal()" class="close">&times;</span>
                    <p>Task details here</p>
                  </div>
                </div>
                <ul id="taskList">
                  <li onclick="taskDetails()">
                    <input
                      type="checkbox"
                      id="task1"
                      onclick="handleCheckTask()"
                    />Task 1
                  </li>

                  <li onclick="taskDetails()">
                    <input
                      type="checkbox"
                      id="task2"
                      onclick="handleCheckTask()"
                    />Task 2
                  </li>
                  <li onclick="taskDetails()">
                    <input
                      type="checkbox"
                      id="task3"
                      onclick="handleCheckTask()"
                    />Task 3
                  </li>
                  <li onclick="taskDetails()">
                    <input
                      type="checkbox"
                      id="task4"
                      onclick="handleCheckTask()"
                    />Task 4
                  </li>
                  <li onclick="taskDetails()">
                    <input
                      type="checkbox"
                      id="task5"
                      onclick="handleCheckTask()"
                    />Task 5
                  </li>
                </ul>
                <div class="addTask">
                  <button
                    class="box-btn"
                    type="button"
                    onclick="handleAddTask()"
                  >
                    Add task
                  </button>
                  <!-- Form add task  -->

                  <div class="form-addTask" id="form-addTask">
                    <form action="/action_page.php">
                      <label for="taskname">Task Name</label>
                      <input
                        type="text"
                        id="taskname"
                        name="taskname"
                        placeholder="Task name.."
                      />

                      <label for="taskdetails">Task Details</label>
                      <input
                        type="text"
                        id="taskdetails"
                        name="taskdetails"
                        placeholder="Task details.."
                      />

                      <input type="submit" value="Submit" />
                    </form>
                  </div>
                </div>
                <div class="addFile">
                  <form action="/action_page.php">
                    <input type="file" id="myFile" name="filename" />
                    <input type="submit" />
                  </form>
                </div>
              </div>
            </div>
            <div class="col l-6 c-12">
              <h3>Comment</h3>
              <div id="editor"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="./script.js"></script>
  </body>
</html>
