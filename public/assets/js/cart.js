// ************************************************

// Shopping Cart API

// ************************************************

// showing pop msg

var shoppingCart = (function () {

    // =============================

    // Private methods and propeties

    // =============================

    cart = []

    // Constructor

    function Item (book) {
        this.book = book
    }

    // Save cart

    function saveCart () {
        localStorage.setItem('shoppingCart', JSON.stringify(cart))
    }

    // Load cart

    function loadCart () {

        cart = JSON.parse(localStorage.getItem('shoppingCart'))

    }

    if (localStorage.getItem('shoppingCart') != null) {

        loadCart()

    }

    // =============================

    // Public methods and propeties

    // =============================

    var obj = {}

    // Add to cart

    obj.addItemToCart = function (book) {

        let cart_book = cart.find(c => c.id == book.id)
        if (!cart_book) {
            cart_book = book
            cart_book.count = 1
            cart_book.total_price = cart_book.price
            cart.push(cart_book)
        } else {
            cart_book.count++
            cart_book.total_price = parseFloat(cart_book.price) * parseFloat(cart_book.count)
        }
        console.log('cart_book: ', cart_book)
        saveCart()
    }

    // Set count from item

    obj.setCountForItem = function (prodid, variantid, vendorid, campaign_vendor_product_id, count) {

        for (var i in cart) {

            if (cart[i].prodid == prodid && cart[i].vendorid == vendorid && cart[i].variantid == variantid && cart[item].campaign_vendor_product_id == campaign_vendor_product_id) {

                cart[i].count = count

                break

            }

        }

    }

    // Remove item from cart

    obj.removeItemFromCart = function (book) {
        for (var item in cart) {
            if (cart[item].id == book.id) {
                cart[item].count--
                if (cart[item].count === 0) {
                    cart.splice(item, 1)
                }
                break
            }
        }
        saveCart()
    }

    // Remove all items from cartremoveItemFromCart(prodid,type,SelectedFeatureID)

    obj.removeItemFromCartAll = function (id) {

        for (var item in cart) {
            if (cart[item].id == id) {
                cart.splice(item, 1)
                break
            }
        }
        saveCart()
    }

    obj.TotalDeliveryCharges = function (prodid, variantid, vendorid, campaign_vendor_product_id) {

        var delivery_charges = 0

        for (var item in cart) {

            if (cart[item].prodid == prodid && cart[item].variantid == variantid && cart[item].vendorid == vendorid && cart[item].campaign_vendor_product_id == campaign_vendor_product_id) {

                delivery_charges += parseFloat(cart[item].delivery_charges)

                break

            }

        }

    }

    // Clear cart

    obj.clearCart = function () {
        cart = []
        saveCart()
        displayHeaderCart()
    }

    // Count cart

    obj.totalCount = function () {

        var totalCount = 0

        for (var item in cart) {
            totalCount += 1

        }

        return totalCount

    }

    // Total cart

    obj.totalCart = function () {

        var totalCart = 0

        for (var item in cart) {

            totalCart += cart[item].price * cart[item].count

        }

        return Number(totalCart.toFixed(2))

    }

    // List cart

    obj.listCart = function () {

        var cartCopy = []

        for (i in cart) {

            item = cart[i]

            itemCopy = {}

            for (p in item) {

                itemCopy[p] = item[p]

            }

            itemCopy.total = Number(item.price * item.count).toFixed(2)

            cartCopy.push(itemCopy)

        }

        return cartCopy

    }

    obj.DisplayItemQty = function (prodid, variantid, vendorid, campaign_vendor_product_id) {

        var totalQtyCount = 0

        for (var item in cart) {

            if (cart[item].prodid == prodid && cart[item].variantid == variantid && cart[item].vendorid == vendorid && cart[item].campaign_vendor_product_id == campaign_vendor_product_id) {

                totalQtyCount = cart[item].count

            }

        }

        return totalQtyCount

    }

    // cart : Array

    // Item : Object/Class

    // addItemToCart : Function

    // removeItemFromCart : Function

    // removeItemFromCartAll : Function

    // clearCart : Function

    // countCart : Function

    // totalCart : Function

    // listCart : Function

    // saveCart : Function

    // loadCart : Function

    return obj

})()

// *****************************************

// Triggers / Events

// *****************************************

// Clear items

$(document).on('click', '.clear-cart', function () {

    shoppingCart.clearCart()

    //  $('.total-cart').html('0.00');

    displayHeaderCart()
    displayCartPage()
    displayCartOutPage()

    window.location.reload()

})

// Add item

// shoppingCart.clearCart()

$(document).on('click', '.add-to-cart', function (e) {

    e.preventDefault()
    let book = $(this).data('book')
    if (!book) {
        return false
    }
    Toast.fire({
        icon: 'success',
        title: book.title + ' is Added'
    })

    shoppingCart.addItemToCart(book)

    displayHeaderCart()
})

function displayHeaderCart () {

    var cartArray = shoppingCart.listCart()
    var output = ''
    var header_cart_count = 0
    console.log(cartArray)
    var total_cart_price = 0.00
    for (var i in cartArray) {
        let book = cartArray[i]
        total_cart_price += parseFloat(book.total_price)

        output += '<li class="cart-item">' +
            '<div class="media">' +
            '<div class="media-left">' +
            '<a href="books-detail.html">' +
            '<img alt="" class="media-object" src="' + book.image_url + '"></a>' +
            '</div>' +
            '<div class="media-body">' +
            '<h6 class="dz-title">' +
            '<a href="books-detail.html" class="media-heading">' + book.title + '</a></h6>' +
            '<span class="dz-price">$ ' + book.total_price + '</span>' +
            '<span class="item-close item_remove" data-id="' + book.id + '">&times;</span>' +
            '</div>' +
            '</div>' +
            '</li>'
    }

    output += '<li class="cart-item text-center">' +
        '<h6 class="text-secondary">Total = $ ' + total_cart_price + '</h6></li>' +
        '<li class="text-center d-flex"><a href="' + CART_ROUTE + '" class="btn btn-sm btn-primary me-2 btnhover w-100">' +
        'View Cart</a>' +
        '<a href="' + CHECKOUT_ROUTE + '" class="btn btn-sm btn-outline-primary btnhover w-100">Checkout</a></li>'

    $('#header_cart_count').text(shoppingCart.totalCount())
    $('.header-cart-list').html(output)
}

function displayCartPage () {

    var cartArray = shoppingCart.listCart()
    var output = ''
    console.log(cartArray)
    var total_cart_price = 0.00
    for (var i in cartArray) {
        let book = cartArray[i]
        total_cart_price += parseFloat(book.total_price)

        output += '<tr>' +
            '<td class="product-item-img"><img src="' + book.image_url + '" alt=""></td>' +
            '<td class="product-item-name">' + book.title + '</td>' +
            '<td class="product-item-price">$ ' + book.price + '</td>' +
            '</td>' +
            '<td class="product-item-totle">$ ' + book.total_price + '</td>' +
            '<td class="product-item-close"><a href="javascript:;" data-id="' + book.id + '" class="ti-close item_remove"></a></td>' +
            '</tr>'
    }
    $('#cart_page_list').html(output)
    $('#cart_page_total_price').text('$ ' + total_cart_price)
}

function displayCartOutPage () {

    var cartArray = shoppingCart.listCart()
    var output = ''
    var total_cart_price = 0.00
    for (var i in cartArray) {
        let book = cartArray[i]
        total_cart_price += parseFloat(book.total_price)

        output += '<tr>' +
            '<td class="product-item-img"><img src="' + book.image_url + '" alt=""></td>' +
            '<td class="product-item-name">' + book.title + '</td>' +
            '<td class="product-price">$ ' + book.total_price + '</td>' +
            '</tr>'
    }
    $('#checkout_list').html(output)
    $('#checkout_total_price').text('$ ' + total_cart_price)
}

// Delete item button

// -1

$(document).on('click', '.minus-item', function (event) {
    console.log('minus-item called')
    let book_id = $(this).data('id')
    let book = cart.find(c => c.id == book_id)
    if (!book) {
        return false
    }
    shoppingCart.removeItemFromCart(book)
    displayHeaderCart()
    displayCartPage()

})

// +1

$(document).on('click', '.plus-item', function (event) {
    console.log('plus-item called')
    let book_id = $(this).data('id')
    let book = cart.find(c => c.id == book_id)
    if (!book) {
        return false
    }
    shoppingCart.addItemToCart(book)
    displayHeaderCart()
    displayCartPage()
})

$(document).on('click', '.item_remove', function (event) {
    const id = $(this).data('id')
    if (id == undefined) {
        return false
    }
    shoppingCart.removeItemFromCartAll(id)
    displayHeaderCart()
    displayCartPage()
    displayCartOutPage()
})

displayHeaderCart()
