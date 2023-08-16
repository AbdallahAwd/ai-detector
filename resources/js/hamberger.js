const hamberger = document.getElementById("hamberger");
const menu = document.getElementById("menu");
const hLink = document.getElementById("hLink");
const faSolid = document.querySelector(".fa-solid");

hamberger.addEventListener("click", () => {
    menu.classList.toggle("hidden");
    faSolid.classList.toggle("fa-xmark");
});

if (faSolid.className("text-white")) {
    faSolid.classList.add("text-white");
}
