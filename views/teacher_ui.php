<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Teacher</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./styles.css" />
  </head>
  <body>
    <div class="container">
      <div class="nav-bar">
        <ul class="nav-ul">
          <li class="nav-li"><a href="#">Home</a></li>
          <li class="nav-li"><a href="#">Student</a></li>
          <li class="nav-li"><a href="#">Teacher</a></li>
        </ul>
        <div class="info">
          <!-- Button trigger modal -->
          <button
            type="button"
            class="btn btn-primary"
            data-toggle="modal"
            data-target="#exampleModal"
          >
            User
          </button>

          <!-- Modal -->
          <div
            class="modal fade"
            id="exampleModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5
                    class="modal-title"
                    id="exampleModalLabel"
                    style="margin-left: auto"
                  >
                    User
                  </h5>
                  <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                  >
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="card" style="width: 18rem; margin: auto">
                    <img
                      class="card-img-top"
                      src="./images/teacher.jpg"
                      alt="Card image cap"
                    />
                    <div class="card-body" style="margin: auto">
                      <h5 class="card-title" style="margin: auto">
                        User Profile
                      </h5>

                      <ul class="info-list">
                        <li class="info-btn">
                          <a href="#" class="btn btn-primary">Details</a>
                        </li>

                        <li class="info-btn">
                          <a href="#" class="btn btn-primary">Update</a>
                        </li>
                        <li class="info-btn">
                          <a href="#" class="btn btn-primary"
                            >Change password</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="modal-footer" style="margin: auto">
                  <button
                    type="button"
                    class="btn btn-secondary"
                    data-dismiss="modal"
                  >
                    Close
                  </button>
                  <button type="button" class="btn btn-primary">
                    Save changes
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="jumbotron">
        <h1 class="display-4">Graduation-Project-Management</h1>
        <p class="lead">
          Graduation-Project-Management Graduation-Project-Management
          Graduation-Project-Management Graduation-Project-Management
          Graduation-Project-Management
        </p>
        <hr class="my-4" />
        <p>
          Graduation-Project-Management Graduation-Project-Management
          Graduation-Project-Management Graduation-Project-Management
          Graduation-Project-Management
        </p>
      </div>
      <div class="row">
        <div
          class="col-sm col-lg-4"
          style="border: 1px solid rgb(51, 100, 206)"
        >
          <div class="list-project" style="margin-top: 2rem">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01"
                  >Options</label
                >
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>List Projects</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
                <option value="5">Five</option>
                <option value="6">Six</option>
              </select>
            </div>
            <ul class="list-group">
              <li class="list-group-item">List project</li>
              <li class="list-group-item">List project</li>
              <li class="list-group-item">List project</li>
              <li class="list-group-item">List project</li>
              <li class="list-group-item">List project</li>
            </ul>
          </div>
        </div>
        <div
          class="col-sm col-lg-3"
          style="border: 1px solid rgb(51, 100, 206)"
        >
          <h3>Project information</h3>
          <div style="border: 1px solid rgb(51, 100, 206)" class="info">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01"
                  >Project Information</label
                >
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>Info</option>
                <option value="Name">Name</option>
                <option value="Branch">Branch</option>
                <option value="Teacher">Teacher</option>
              </select>
            </div>
          </div>

          <div style="border: 1px solid rgb(51, 100, 206)" class="progress">
            <div
              class="progress-bar"
              role="progressbar"
              style="width: 75%"
              aria-valuenow="25"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01"
                >Phases</label
              >
            </div>
            <select class="custom-select" id="inputGroupSelect01">
              <option selected>Choose phase...</option>
              <option value="1">Phase 1</option>
              <option value="2">Phase 2</option>
              <option value="3">Phase 3</option>
            </select>
          </div>

          <ul class="list-group" style="border: 1px solid rgb(51, 100, 206)">
            <li class="list-group-item">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="defaultCheck1"
                />
                <label class="form-check-label" for="defaultCheck1">
                  Example
                </label>
              </div>
            </li>
            <li class="list-group-item">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="defaultCheck1"
                />
                <label class="form-check-label" for="defaultCheck1">
                  Example
                </label>
              </div>
            </li>
            <li class="list-group-item">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="defaultCheck1"
                />
                <label class="form-check-label" for="defaultCheck1">
                  Example
                </label>
              </div>
            </li>
            <li class="list-group-item">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="defaultCheck1"
                />
                <label class="form-check-label" for="defaultCheck1">
                  Example
                </label>
              </div>
            </li>
            <li class="list-group-item">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="defaultCheck1"
                />
                <label class="form-check-label" for="defaultCheck1">
                  Example
                </label>
              </div>
            </li>
          </ul>

          <form>
            <div class="form-group">
              <label for="exampleFormControlFile1">Example file input</label>
              <input
                type="file"
                class="form-control-file"
                id="exampleFormControlFile1"
              />
            </div>
          </form>
        </div>
        <div class="col-sm" style="border: 1px solid rgb(51, 100, 206)">
          <div class="progress" style="border: 1px solid rgb(51, 100, 206)">
            <div
              class="progress-bar"
              role="progressbar"
              style="width: 75%"
              aria-valuenow="25"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>
          <div class="chat-box" style="border: 1px solid rgb(51, 100, 206)">
            <form onsubmit="sendMessage(event)">
              <div class="chat_box">
                <div class="chat_box-content">
                  <ul id="ul-message"></ul>
                </div>
                <div class="type_text">
                  <input
                    class="input-message"
                    id="type_text"
                    type="text"
                    placeholder="Type a message"
                  />
                  <button class="btn-send" id="send_message" type="submit">
                    <i class="fas fa-paper-plane"></i>
                  </button>
                </div>
              </div>

              >
            </form>
          </div>
          <div class="comment">
            <div class="form-group" style="border: 1px solid rgb(51, 100, 206)">
              <label for="exampleFormControlTextarea1">Comment...</label>
              <textarea
                class="form-control"
                id="exampleFormControlTextarea1"
                rows="4"
              ></textarea>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/0343562330.js"
      crossorigin="anonymous"
    ></script>
    <script src="./script.js"></script>
  </body>
</html>
