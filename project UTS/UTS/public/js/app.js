// const view_menu = document.getElementById("view_menu")
// const modal_container = document.getElementById("modal_container")
// const close_view = document.getElementById("close_view")

// view_menu.addEventListener('click', () => {
//     modal_container.classList.add('show');
// });


// close_view.addEventListener('click', () => {
//     modal_container.classList.remove('show');
// });

document.querySelectorAll(".view_menu").forEach((btn, index) => {
    btn.addEventListener("click", () => {
        document.querySelectorAll(".modal_container")[index].classList.add("show");
    });
});

document.querySelectorAll(".close_view").forEach((btn, index) => {
    btn.addEventListener("click", () => {
        document.querySelectorAll(".modal_container")[index].classList.remove("show");
    });
});

document.querySelectorAll(".pay_button").forEach((btn, index) => {
    btn.addEventListener("click", () => {
        payButton.addEventListener('click', function () {
                    // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
                    window.snap.pay('TRANSACTION_TOKEN_HERE');
                    // customer will be redirected after completing payment pop-up
                });
    });
});



// console.log("JS LOADED");

// document.querySelectorAll()
//                 // For example trigger on button clicked, or any time you need
//                 var payButton = document.getElementById('pay-button');
//                 payButton.addEventListener('click', function () {
//                     // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
//                     window.snap.pay('TRANSACTION_TOKEN_HERE');
//                     // customer will be redirected after completing payment pop-up
//                 });