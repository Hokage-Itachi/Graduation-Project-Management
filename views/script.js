 <<<<<<< HEAD
// handle message
const sendMessage = (event) => {
  event.preventDefault();
  const value = document.getElementById("type_text").value;
  if (value) {
    document.getElementById(
      "ul-message"
    ).innerHTML += `<li id="li-message" >${value} <i class="fas fa-user-tie list-group-item"></i></li>`;
    document.getElementById("type_text").value = "";
  }
};
=======
// handle message
const sendMessage = (event) => {
  event.preventDefault();
  const value = document.getElementById("type_text").value;
  if (value) {
    document.getElementById(
      "ul-message"
    ).innerHTML += `<li id="li-message" >${value} <i class="fas fa-user-tie list-group-item"></i></li>`;
    document.getElementById("type_text").value = "";
  }
};
>>>>>>> v1.0-dev
