//progress bar
var i = 0;
function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 10;
    var id = setInterval(frame, 10);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
        elem.innerHTML = width + "%";
      }
    }
  }
}
// editor

ClassicEditor.create(document.querySelector("#editor")).catch((error) => {
  console.error(error);
});

//handle check task
const handleCheckTask = () => {
  let list = "";
  for (let i = 1; i < 5; i++) {
    if (document.getElementById(`task${i}`).checked) {
      list += `Task ${i} completed, `;
    }
  }
  alert(list);
};
//handle add task
const tasklist = [];
const handleAddTask = () => {
  /* document.getElementById("taskList").innerHTML += `<li><input
                      type="checkbox"
                      id="task2"
                      onclick="handleCheckTask()"
                    />Task @@</li>`;*/
  const addTask = document.getElementById("form-addTask");
  addTask.style.display = "block";
};
// task details
const taskDetails = () => {
  const modal = document.getElementById("myModal");

  modal.style.display = "block";
};

const closeModal = () => {
  const modal = document.getElementById("myModal");
  modal.style.display = "none";
};
window.onclick = (event) => {
  const modal = document.getElementById("myModal");
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
//handle account
const handleAccount = () => {
  const account = document.getElementById("account");
  account.style.display = "block";
};
