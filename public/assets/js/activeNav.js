function setActiveNavBtn() {
    var url = window.location.href;
    var dashboard = document.getElementById("dashboard");
    var listagem = document.getElementById("listagem");
    var cadastro = document.getElementById("cadastro");

    if (url.includes("dashboard")) {
        dashboard.classList.add("active");
    } else if (url.includes("system")) {
        listagem.classList.add("active");
    } else if (url.includes("register")) {
        cadastro.classList.add("active");
    }
}

window.addEventListener("load", setActiveNavBtn);