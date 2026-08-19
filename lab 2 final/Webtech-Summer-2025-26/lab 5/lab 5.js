function calculate() {
 
    let price = Number(document.getElementById("price").value);
    let quantity = Number(document.getElementById("qty").value);
 
    let amount = document.getElementById("amount");
    let message = document.getElementById("msg");
 
    if (quantity <= 0) {
        message.innerHTML = "Quantity must be greater than 0";
        amount.value = 0;
    } else {
        message.innerHTML = "";
        amount.value = price * quantity;
    }
}
 
window.onload = calculate;
document.getElementById("qty").onchange = calculate;
document.getElementById("price").onkeyup = calculate;