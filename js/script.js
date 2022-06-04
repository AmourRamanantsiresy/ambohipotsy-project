const nav = $("nav").children;
const body = $("body").children;
let state = false;


bienvenue();
visibility(0, [0, 1, 1]);
visibility(1, [1, 0, 1]);
visibility(2, [1, 1, 0]);
close();
function visibility(index, states) {
    const state = ["visible", "hidden"];
    nav[index].addEventListener("click", () => {
        let position = states.indexOf(0);
        nav[position].classList.add("selected");
        for (let i = 0; i < 3; i++) {
            body[i + 1].style.visibility = state[states[i]];
            if (i != position) {
                nav[i].classList.remove("selected");
            }
        }
    })
}

function bienvenue() {
    const bienvenueClick = $("bienvenue");
    bienvenueClick.addEventListener("click", () => {
        if (!state) {
            state = true;
            $("arrow").classList.remove("arrow1");
            $("arrow").classList.add("arrow2");
            $("bieContainer").classList.remove("h0");
        } else {
            state = false;
            $("arrow").classList.remove("arrow2");
            $("arrow").classList.add("arrow1");
            $("bieContainer").classList.add("h0");
        }
    });
}

function $(className) {
    return document.getElementById(className);
}
function close() {

    $("x").addEventListener("click", () => {
        for (let i = 1; i < 4; i++) {
            body[i].style.visibility = "hidden";
            nav[i - 1].classList.remove("selected");
        }
    })
    $("x1").addEventListener("click", () => {
        for (let i = 1; i < 4; i++) {
            body[i].style.visibility = "hidden";
            nav[i - 1].classList.remove("selected");
        }
    })
    $("x2").addEventListener("click", () => {
        for (let i = 1; i < 4; i++) {
            body[i].style.visibility = "hidden";
            nav[i - 1].classList.remove("selected");
        }
    })
}