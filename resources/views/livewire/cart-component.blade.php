<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Shop
                    <span></span> Your Cart
                </div>
            </div>
        </div>
            <section class="mt-50 mb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            @if (Cart::instance('cart')->count() > 0)
                                <div class="table-responsive">
                                    @if (Session::has('success_message'))
                                        <div class="alert alert-success">
                                            <strong>Success | {{ Session::get('success_message') }}</strong>
                                        </div>
                                    @endif
                                    @if (Cart::instance('cart')->count() > 0)
                                        <table class="table text-center shopping-summery clean">
                                            <thead>
                                                <tr class="main-heading">
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col">Subtotal</th>
                                                    <th scope="col">Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach (Cart::instance('cart')->content() as $item)
                                                    <tr>
                                                        <td class="image product-thumbnail"><img src="{{ asset('assets/imgs/products')}}/{{$item->model->image}}"
                                                                alt="#">
                                                        </td>
                                                        <td class="product-des product-name">
                                                            <h5 class="product-name"><a
                                                                    href="product-details.html">{{ $item->model->name }}</a>
                                                            </h5>
                                                            {{-- <p class="font-xs">Maboriosam in a tonto nesciung eget<br> distingy
                                                                magndapibus.
                                                            </p> --}}
                                                        </td>
                                                        <td class="price" data-title="Price">
                                                            <span>${{ $item->model->regular_price }} </span>
                                                        </td>
                                                        <td class="text-center" data-title="Stock">
                                                            <div class="m-auto border detail-qty radius">
                                                                <a href="#" class="qty-down"
                                                                    wire:click.prevent="decreaseQuantity('{{ $item->rowId }}')"><i
                                                                        class="fi-rs-angle-small-down"></i></a>
                                                                <span class="qty-val">{{ $item->qty }}</span>
                                                                <a href="#" class="qty-up"
                                                                    wire:click.prevent="increaseQuantity('{{ $item->rowId }}')"><i
                                                                        class="fi-rs-angle-small-up"></i></a>
                                                            </div>
                                                        </td>
                                                        <td class="text-right" data-title="Cart">
                                                            <span>${{ $item->subtotal }} </span>
                                                        </td>
                                                        <td class="action" data-title="Remove"><a href="#"
                                                                class="text-muted"
                                                                wire:click.prevent="destroy('{{ $item->rowId }}')"><i
                                                                    class="fi-rs-trash"></i></a></td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="6" class="text-end">
                                                        <a href="#" class="text-muted" wire:click.prevent="clearAll()"> <i
                                                                class="fi-rs-cross-small"></i>
                                                            Clear Cart</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        @else
                                            <p>No Item in Cart</p>
                                        @endif

                                    </div>
                                    <div class="cart-action text-end">
                                        <a class="mr-10 btn mb-sm-15"><i class="mr-10 fi-rs-shuffle"></i>Update Cart</a>
                                        <a class="btn "><i class="mr-10 fi-rs-shopping-bag"></i>Continue Shopping</a>
                                    </div>
                                    <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
                                        <div class="row mb-50">
                                            <div class="col-lg-6 col-md-12">
                                            <div class="border p-md-4 p-30 border-radius cart-totals">
                                                <div class="mb-3 heading_s1">
                                                    <h4>Cart Totals</h4>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td class="cart_total_label">Cart Subtotal</td>
                                                                <td class="cart_total_amount"><span
                                                                        class="font-lg fw-900 text-brand">${{ Cart::instance('cart')->subtotal() }}</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="cart_total_label">Tax</td>
                                                                <td class="cart_total_amount"><span
                                                                        class="font-lg fw-900 text-brand">${{ Cart::instance('cart')->tax() }}</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="cart_total_label">Shipping</td>
                                                                <td class="cart_total_amount"> <i class="mr-5 ti-gift"></i> Free
                                                                    Shipping</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="cart_total_label">Total</td>
                                                                <td class="cart_total_amount"><strong><span
                                                                            class="font-xl fw-900 text-brand">${{ Cart::instance('cart')->total() }}</span></strong>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <a href="{{ route('shop.checkout') }}"  class="btn "> <i class="mr-10 fi-rs-box-alt"></i>
                                                    Proceed To CheckOut</a>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class ="text-center" style="padding:30px 0;">
                                        <h1>Your cart is empty!</h1>
                                        <p>Add items to it now</p>
                                        <a href="/shop" class="btn btn-success">Shop Now</a>
                                    </div>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
    </main>
</div>
