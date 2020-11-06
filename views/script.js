

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

//list phase of project
const phase = [
  {
    phase: "Phase 1",
    tasks: [
      "task1",
      "task1",
      "task1",
      "task1",
      "task1",
      "task1",
      "task1",
      "task1",
      "task1",
      "task1",
      "task1",
      "task1",
    ],
  },
  {
    phase: "Phase 2",
    tasks: [
      "task2",
      "task2",
      "task2",
      "task2",
      "task2",
      "task2",
      "task2",
      "task2",
      "task2",
      "task2",
      "task2",
      "task2",
    ],
  },
  {
    phase: "Phase 3",
    tasks: [
      "task3",
      "task3",
      "task3",
      "task3",
      "task3",
      "task3",
      "task3",
      "task3",
      "task3",
      "task3",
      "task3",
      "task3",
    ],
  },
];
// handle select box, render list task of phase
const handleSelect = () => {
  document.getElementById("task_list-menu").innerHTML = "";
  const value = document.getElementById("select-phase").value;
  phase.forEach((element) => {
    if (element.phase === value) {
      for (let i = 0; i < element.tasks.length; i++) {
        document.getElementById(
          "task_list-menu"
        ).innerHTML += `<li class=" list-group-item"><a href="/">${element.tasks[i]}</a></li>`;
      }
    }
  });
};
