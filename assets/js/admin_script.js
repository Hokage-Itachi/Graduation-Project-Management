function search(type) {
    var search_string = document.getElementById("search-field").value;
    console.log(search_string);
    var found = 0;
    var table = document.getElementById('data-table');
    for (i = 1; i < table.rows.length; i++) {
        row = table.rows[i].cells;
        n = row.length;
        if (type != "admin") {
            n = 4;
        }
        for (j = 1; j < n; j++) {
            cell_content = row[j].innerHTML.toLowerCase();
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

function autoDetectPassword(elementId) {
    const passwordInput = document.getElementById("password");
    const element = document.getElementById(elementId);

    passwordInput.value = element.value + "abc";
}