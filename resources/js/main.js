const btnAccount = document.querySelector(".btnAccount");
const infoAccount = document.querySelector(".infoAccount");

btnAccount.addEventListener("click", () => {
    infoAccount.classList.toggle("hidden");
});
