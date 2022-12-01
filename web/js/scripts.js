$(document).ready(() => {
    $(".cart-counter")[0].innerText = localStorage.getItem('cart') || "0";
})

const addToCart = (e) => {
    e.preventDefault();
    let name = $(this).data('id');
    const newCartItems = (Number($(".cart-counter")[0].innerText) + 1).toString()
    $(".cart-counter")[0].innerText = newCartItems;
    localStorage.setItem('cart', newCartItems);
}

$('.add_to_cart_index').on('click', addToCart);
$('.add_to_cart_item').on('click', addToCart);