function filter() {
    // alert("here");
    let filterBy = document.getElementById('fill_by').value;
    let filter_value = [];
    if (filterBy === 'major') {
        let selected = document.getElementsByClassName('mixed');
        for (i = 0; i < selected.length; i++) {
            if (selected[i].checked === true) {
                filter_value.push(selected[i].name);
            }
        }
        let cards = document.getElementsByClassName('card');
        for (let i = 0; i < cards.length; i++) {
            let branch = cards[i].querySelector(".branch");
            console.log(branch.innerHTML);
            if (filter_value.length === 0) {
                cards[i].style.display = 'block';
                continue;
            }
            if (filter_value.includes(branch.innerHTML) === false) {
                cards[i].style.display = 'none';
            } else {
                cards[i].style.display = 'block';
            }
        }
    } else if (filterBy === "teacher") {
        let selected = document.getElementsByClassName('mixed');
        for (i = 0; i < selected.length; i++) {
            if (selected[i].checked === true) {
                filter_value.push(selected[i].name);
            }
        }
        let cards = document.getElementsByClassName('card');
        for (let i = 0; i < cards.length; i++) {
            let teacher = cards[i].querySelector(".teacher");
            // console.log(branch.innerHTML);
            if (filter_value.length === 0) {
                cards[i].style.display = 'block';
                continue;
            }
            if (filter_value.includes(teacher.innerHTML) === false) {
                cards[i].style.display = 'none';
            } else {
                cards[i].style.display = 'block';
            }
        }
    } else {
        let selected = document.getElementsByClassName('mixed');
        for (i = 0; i < selected.length; i++) {
            if (selected[i].checked === true) {
                filter_value.push(selected[i].name);
            }
        }
        let cards = document.getElementsByClassName('card');
        for (let i = 0; i < cards.length; i++) {
            let year = cards[i].querySelector(".year");
            // console.log(branch.innerHTML);
            if (filter_value.length === 0) {
                cards[i].style.display = 'block';
                continue;
            }
            if (filter_value.includes(year.innerHTML) === false) {
                cards[i].style.display = 'none';
            } else {
                cards[i].style.display = 'block';
            }
        }
    }

}
function search() {
    // alert("here");
    let search_name = document.getElementById('search').value;
    let cards = document.getElementsByClassName("card");

    for (let i = 0; i < cards.length; i++) {
        let project_name = cards[i].querySelector('.name').innerHTML;
        if (project_name === "") {
            cards[i].style.display = 'block';
        } else
            if (project_name.includes(search_name)) {
                cards[i].style.display = 'block';
            } else {
                cards[i].style.display = 'none';
            }
    }
}