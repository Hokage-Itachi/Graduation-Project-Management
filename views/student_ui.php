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
      <div class="header">
        <h1>Project name</h1>

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
                <ul id="taskList">
                  <li>
                    <input
                      type="checkbox"
                      id="task1"
                      onclick="handleCheckTask()"
                    />Task 1
                  </li>
                  <li>
                    <input
                      type="checkbox"
                      id="task2"
                      onclick="handleCheckTask()"
                    />Task 2
                  </li>
                  <li>
                    <input
                      type="checkbox"
                      id="task3"
                      onclick="handleCheckTask()"
                    />Task 3
                  </li>
                  <li>
                    <input
                      type="checkbox"
                      id="task4"
                      onclick="handleCheckTask()"
                    />Task 4
                  </li>
                  <li>
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
