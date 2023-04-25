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

    function Item(book) {
        this.book = book
    }

    // Save cart

    function saveCart() {
        localStorage.setItem('shoppingCart', JSON.stringify(cart))
        console.log("saveCart: ", cart)
    }

    // Load cart

    function loadCart() {
        cart = JSON.parse(localStorage.getItem('shoppingCart'))
        console.log("loadCart: ", cart)
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
            cart_book.total_price = cart_book.price.toFixed(2)
            cart.push(cart_book)
        } else {
            cart_book.count++
            cart_book.total_price = parseFloat(cart_book.price) * parseFloat(cart_book.count)
            cart_book.total_price.toFixed(2)
        }
        saveCart()
    }

    obj.addAddonToCart = function (book_id, addon_id) {
        const book = cart.find((book) => book.id === book_id);
        if (!book) {
            return;
        }
        const addon = book.book_addons.find((addon) => addon.id === addon_id);
        if (!addon) {
            return;
        }
        if (!book.cart_addons) {
            book.cart_addons = [];
        }
        if (!book.cart_addons.some((a) => a.id === addon.id)) {
            book.cart_addons.push(addon);
        }

        if (book.cart_addons) {
            let addonPrice = book.cart_addons.reduce((sum, a) => sum + a.price, 0);
            book.total_price = parseFloat(book.total_price) + parseFloat(addonPrice, 2)
            book.total_price = book.total_price.toFixed(2)
        }

        // let price_addon = 0
        // book.cart_addons.forEach(function (addon) {
        //     price_addon += parseFloat(addon.price)
        // })

        // cart.forEach(function (book) {
        //     if (book.id === book_id) {
        //         book.book_addons.forEach(function (addon) {
        //             if (addon.id === addon_id) {
        //                 if (!book.hasOwnProperty('cart_addons')) {
        //                     book.cart_addons = []
        //                     book.cart_addons.push(addon)
        //                 } else {
        //                     let cart_addon = book.cart_addons.find(a => a.id === addon.id)
        //                     if (!cart_addon) {
        //                         book.cart_addons.push(addon)
        //                     }
        //                 }
        //             }
        //         })
        //     }
        // })
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

    obj.removeAddonToCart = function (book_id, addon_id) {
        const book = cart.find((book) => book.id === book_id);
        if (!book || !book.cart_addons) {
            return;
        }
        const addonIndex = book.cart_addons.findIndex((addon) => addon.id === addon_id);
        if (addonIndex === -1) {
            return;
        }
        book.cart_addons.splice(addonIndex, 1);
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

    obj.showCheckoutButton = function () {
        let books = shoppingCart.listCart()
        books.forEach(function (book) {
            let book_class = 'cart-btn-' + book.id
            if ($('.' + book_class).length) {
                $('.' + book_class).hide()
                $('.checkout-btn-' + book.id).show()
            }
        })
    }

    obj.showCartButton = function () {
        let books = shoppingCart.listCart()
        books.forEach(function (book) {
            let cart_btn = $('.cart-btn-' + book.id)
            if (cart_btn.length) {
                cart_btn.show()
                $('.checkout-btn-' + book.id).hide()
            }
        })
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
$(document).on('click', '.buy-btn', function (e) {
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
    shoppingCart.showCheckoutButton()
    displayHeaderCart()

    if (book.book_addons.length === 0) {
        return false
    }

    $('#cart_modal_title').text(book.title);
    $('#cart_book_addons').html('<h6>Would you like to Purchase the Video / Audio Guide at a discounted price?</h6>')
    book.book_addons.forEach(function (addon) {
        $('#cart_book_addons').append('<div class="row">' +
            '                        <div class="col-md-6">' +
            '                            <div class="form-group mb-2">' +
            '                                <div class="form-check">' +
            '                                    <input class="form-check-input addons-add-to-cart" type="checkbox" data-book="' + book.id + '" data-addon="' + addon.id + '" id="addon_checkbox_' + addon.id + '">' +
            '                                    <label class="form-check-label" for="addon_checkbox_' + addon.id + '">' + addon.name + '</label>' +
            '                                </div>' +
            '                            </div>' +
            '                        </div>' +
            '                        <div class="col-md-6">' +
            '                            <span>$ ' + addon.price + '</span>' +
            '                        </div>' +
            '                    </div>')
    })


    $('#cart_modal').modal('show')
})

$(document).on('click', '.addons-add-to-cart', function (e) {
    let book_id = $(this).data('book')
    let addon_id = $(this).data('addon')
    if (!book_id || !addon_id) {
        return false
    }

    if ($(this).is(':checked')) {
        shoppingCart.addAddonToCart(book_id, addon_id)
    } else {
        shoppingCart.removeAddonToCart(book_id, addon_id)
    }
    // shoppingCart.showCheckoutButton()
    displayHeaderCart()
})

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
    shoppingCart.showCheckoutButton()
    displayHeaderCart()
})

function displayHeaderCart() {

    var cartArray = shoppingCart.listCart()
    var output = ''
    var header_cart_count = 0
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
        '<h6 class="text-secondary">Total = $ ' + total_cart_price.toFixed(2) + '</h6></li>' +
        '<li class="text-center d-flex"><a href="' + CART_ROUTE + '" class="btn btn-sm btn-primary me-2 btnhover w-100">' +
        'View Cart</a>' +
        '<a href="' + CHECKOUT_ROUTE + '" class="btn btn-sm btn-outline-primary btnhover w-100">Checkout</a></li>'

    $('#header_cart_count').text(shoppingCart.totalCount())
    $('.header-cart-list').html(output)
    shoppingCart.showCheckoutButton()
}

function displayCartPage() {

    var cartArray = shoppingCart.listCart()
    var output = ''
    var total_cart_price = 0.00
    for (var i in cartArray) {
        let book = cartArray[i]
        total_cart_price += parseFloat(book.total_price)
        let addon_names = '';
        if (book.cart_addons) {
            addon_names = '(' + book.cart_addons.map((a) => a.name).join(', ') + ')';
        }

        let addon_prices = '';
        if (book.cart_addons) {
            addon_prices = '(' + book.cart_addons.map((a) => a.price).join('+ ') + ')';
        }


        output += '<tr>' +
            '<td class="product-item-img"><img src="' + book.image_url + '" alt=""></td>' +
            '<td class="product-item-name">' + book.title + ' <small>' + addon_names + '</small></td>' +
            '<td class="product-item-price">$ ' + book.price + ' <small>' + addon_prices + '</small></td>' +
            '</td>' +
            '<td class="product-item-totle">$ ' + book.total_price + '</td>' +
            '<td class="product-item-close"><a href="javascript:;" data-id="' + book.id + '" class="ti-close item_remove"></a></td>' +
            '</tr>'
    }
    $('#cart_page_list').html(output)
    $('#cart_page_total_price').text('$ ' + total_cart_price.toFixed(2))
}

function displayCartOutPage() {

    var cartArray = shoppingCart.listCart()
    var output = ''
    var total_cart_price = 0.00
    for (var i in cartArray) {
        let book = cartArray[i]
        total_cart_price += parseFloat(book.total_price)

        let addon_names = '';
        if (book.cart_addons) {
            addon_names = '(' + book.cart_addons.map((a) => a.name).join(', ') + ')';
        }

        output += '<tr>' +
            '<td class="product-item-img"><img src="' + book.image_url + '" alt=""></td>' +
            '<td class="product-item-name">' + book.title + ' <small>' + addon_names + '</small></td>' +
            '<td class="product-price">$ ' + book.total_price + '</td>' +
            '</tr>'
    }
    $('#checkout_list').html(output)
    $('#checkout_total_price').text('$ ' + total_cart_price.toFixed(2))
}

// Delete item button

// -1

$(document).on('click', '.minus-item', function (event) {
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
    shoppingCart.showCartButton()
    shoppingCart.removeItemFromCartAll(id)
    displayHeaderCart()
    displayCartPage()
    displayCartOutPage()
})

displayHeaderCart()
