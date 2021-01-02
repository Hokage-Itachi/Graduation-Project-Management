function changeSelect(){
    let phases = document.getElementById('phaseSelectBox');
    // alert("here");
    for(let i = 0; i < phases.length; i++){
        if(phases[i].selected){
            document.getElementById(phases[i].value).style.display = 'block';
        } else {
            document.getElementById(phases[i].value).style.display = 'none';
        }
    }
}
function getPostContent(){
    let postDiv = document.getElementsByClassName("ck ck-reset ck-editor ck-rounded-corners")[0];
    // alert(postDiv.getElementsByTagName("P")[0].innerHTML);
    let postContent = postDiv.getElementsByTagName("P")[0].innerHTML;
    document.getElementById("post-content").value = postContent;
}
function confirmDelete(){
    return confirm("Are you sure want to delete this task?");
}
function teacherSearch(){
    let search_string = document.getElementById("search-field").value;
    // console.log(search_string);
    let found = 0;
    let table = document.getElementById('data-table');
    for (let i = 1; i < table.rows.length; i++) {
        let row = table.rows[i].cells;
        let n = row.length;

        for (let j = 1; j < n; j++) {
            let cell_content = row[j].innerHTML.toLowerCase();
            if (cell_content.search(search_string) != -1) {
                // console.log(cell_content);
                found = 1;
                j = row.length;
            }
        }
        // console.log(found);
        if (found == 0) {
            table.rows[i].style.display = "none";
        } else {
            table.rows[i].style.display = "table-row";
        }
        found = 0;
    }
}