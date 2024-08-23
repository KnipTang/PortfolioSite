const btn = document.querySelector("#clickedd");
btn.addEventListener("click", openForm)

function openForm() {
    console.log("g");
    document.getElementById("myForm").style.display = "flex";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}