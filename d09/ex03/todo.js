var cpt = 0;

function loadToDo(input = -1) {
    if (input == -1) {
        $.ajax({
            url: 'select.php',
            type: 'POST',
            dataType: 'json',
            success: function (data) {
                loadToDo(data);
            }
        });
        return;
    }
    for (let i = 0; i < input.length; ++i) {
        if (input[i] == null || !(input[i].includes(';')))
            continue;
        let spl = input[i].trim().split(";");
        let id = spl[0];
        let val = spl[1];
        if (cpt < id)
            cpt = parseInt(id) + 1;
        insertToDo(id, val);
    }
}

function addToDo() {
    let input = prompt("Create a new To Do :");
    if (!input || input == "")
        return;
    if (input.includes(";")) {
        alert("; forbidden.")
        return;
    }

    let id = (++cpt);
    insertToDo(id, input);
    addToCSV(parseInt(id), input);
}

function insertToDo(id, input) {
    let parent = $("#ft_list");
    let d = $("<div class='todo' id=" + id + "></div>");
    d.attr('onClick', 'delToDo(this);');
    let p = $("<p></p>").append(input);
    d.append(p);
    parent.prepend(d);
}

function delToDo(target) {
    if (!confirm("Pressing 'OK' will delete this To Do."))
        return;
    target.remove();
    delFromCSV(target.id);
}

function addToCSV(id, input) {
    let line = id + ";" + input;
    $.ajax({
        url: 'insert.php',
        type: 'POST',
        data: { line: line },
    })
}

function delFromCSV(id) {
    $.ajax({
        url: 'delete.php',
        type: 'POST',
        data: { id: id },
    })
}