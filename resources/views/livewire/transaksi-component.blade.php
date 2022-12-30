<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Shop
                    <span></span> Detail Pembayaran
                </div>
            </div>
        </div>
    <section class="mt-50 mb-50">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="divider mt-50 mb-50"></div>
            </div>
        </div>
                {{-- <div class="col">
                    <a href="{{ route('shop.cart') }}" class="btn btn-sm btn-dark"><i class="fas fa-arrow-left"></i>Kembali</a>
                </div> --}}

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-100 md-50">
                    <h5>Pesanan anda sudah sukses dicheck out selanjutnya untuk pembayaran silahkan transfer di rekening <strong> Bank BRI Nomer Rekening : 32113-821312-123</strong>
                    sesuai dengan nominal : <strong> Rp. {{ Cart::instance('cart')->total() }}</strong></h5> 
                        {{-- <p>Pesanan anda sudah sukses dicheck out selanjutnya untuk pembayaran silahkan 
                            transfer <br> di rekening <strong>Bank BRI Nomer Rekening : 32113-821312-123</strong>
                            dengan nominal : <strong>$.{{ Cart::instance('cart')->total() }}</strong>
                        </p> --}}
                    </div>
                    <a href="{{ route('shop.checkout') }}" class="btn "> <i class="mr-10 fi-rs-box-alt"></i>
                       Next</a>
                </div>
                <div class="col-md-6">
                    <div class="order_review">
                        <div class="mb-20">
                            <h4>Your Orders</h4>
                        </div>
                        <div class="table-responsive order_table text-center">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2">Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="image product-thumbnail"><img src="assets/imgs/shop/product-1-1.jpg" alt="#"></td>
                                        <td>
                                            <h5><a href="product-details.html">Yidarton Women Summer Blue</a></h5> <span class="product-qty">x 2</span>
                                        </td>
                                        <td>$180.00</td>
                                    </tr>
                                    <tr>
                                        <td class="image product-thumbnail"><img src="assets/imgs/shop/product-2-1.jpg" alt="#"></td>
                                        <td>
                                            <h5><a href="product-details.html">LDB MOON Women Summe</a></h5> <span class="product-qty">x 1</span>
                                        </td>
                                        <td>$65.00</td>
                                    </tr>
                                    <tr>
                                        <td class="image product-thumbnail"><img src="assets/imgs/shop/product-3-1.jpg" alt="#"></td>
                                        <td><i class="ti-check-box font-small text-muted mr-10"></i>
                                            <h5><a href="product-details.html">Women's Short Sleeve Loose</a></h5> <span class="product-qty">x 1</span>
                                        </td>
                                        <td>$35.00</td>
                                    </tr>
                                    <tr>
                                        <th>SubTotal</th>
                                        <td class="product-subtotal" colspan="2">${{ Cart::instance('cart')->subtotal() }}</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td colspan="2"><em>Free Shipping</em></td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td colspan="2" class="product-subtotal"><span class="font-xl text-brand fw-900">{{ Cart::instance('cart')->total() }}</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                        <div class="payment_method">
                            <div class="mb-25">
                                <h5>Payment</h5>
                            </div>
                            <div class="payment_option">
                                <div class="custome-radio">
                                    <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3">
                                    <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#cashOnDelivery" aria-controls="cashOnDelivery">Cash On Delivery</label>                                        
                                </div>
                                <div class="custome-radio">
                                    <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios4">
                                    <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse" data-target="#cardPayment" aria-controls="cardPayment">Card Payment</label>                                        
                                </div>
                                <div class="custome-radio">
                                    <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios5">
                                    <label class="form-check-label" for="exampleRadios5" data-bs-toggle="collapse" data-target="#paypal" aria-controls="paypal">Paypal</label>                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
       
    </main>
</div>
</div>
