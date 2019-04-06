var cpt = 0;

function loadToDo() {
    let cookies = document.cookie.split(";");
    for (let i = 0; i < cookies.length ; ++i)
    {
        if (!(cookies[i].includes('=')))
            return ;
        let spl = cookies[i].trim().split("=");
        let id = spl[0];
        let val = spl[1];
        console.log('"' + id + '"' + "=" + '"' + val + '"');
        if (cpt < id)
            cpt = parseInt(id) + 1;
        insertToDo(id, val);
    }
}

function addToDo() {
    let input = prompt("Create a new To Do :");
    if (!input || input == "")
        return;
    if (input.includes(";") || input.includes("="))
        {
            alert("; and = forbidden.")
            return ;
        }
    let id = (++cpt);
    insertToDo(id, input);
    setCookie(parseInt(id), input, 30);
}

function insertToDo(id, input) {
    let parent = document.getElementById("ft_list");
    let d = document.createElement("div");
    d.className += "todo";
    d.id = id;
    d.setAttribute("onclick", "delToDo(this)");
    let p = document.createElement("p");
    d.appendChild(p);
    p.textContent = input;
    parent.insertBefore(d, parent.firstChild);
}

function delToDo(target) {
    if (!confirm("Pressing 'OK' will delete this To Do."))
        return;
    target.remove();
    delCookie(target.id);
}

function setCookie(name, value, days) {
    let expires = "";
    if (days) {
        let date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function delCookie(name) {
    setCookie(name, null, -1);
}