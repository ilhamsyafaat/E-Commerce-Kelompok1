<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Shop
                    <span></span> Checkout
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
                    <div class="mb-25">
                        <h4>Informasi Pembayaran</h4>
                        {{-- <p>Pesanan anda sudah sukses dicheck out selanjutnya untuk pembayaran silahkan 
                            transfer <br> di rekening <strong>Bank BRI Nomer Rekening : 32113-821312-123</strong>
                            dengan nominal : <strong>$.{{ Cart::instance('cart')->total() }}</strong>
                        </p> --}}
                    </div>
                    @if (Cart::instance('cart')->count() > 0)
                        <form wire:submit.prevent="checkout">
                            <div class="form-group">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Name *" wire:model="name" />
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Enter Email *" wire:model="email" />
                                @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="telepon" class="form-label">Telephone</label>
                                <input type="number" name="telepon" class="form-control" placeholder="Enter telepon *" wire:model="telepon" />
                                @error('telepon')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" placeholder="Enter Alamat *" wire:model="alamat" />
                                @error('alamat')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="image" class="form-label">Upload Bukti Pembayaran *</label>
                                <input type="file" class="form-control" wire:model="image" />
                                @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                @if ($image)
                                    <img src="{{ $image->temporaryUrl() }}" width="120" />
                                @endif
                            </div>

                            {{-- <hr>
                            <p>Pilih Metode Pembayaran</p>
                            <div class="form-check">
                                <label class="from-check-label">
                                    <input type="radio" class="form-check-input" value="" name="">
                                    <input type="radio" class="form-check-input" value="" name="">Option 1
                                    <input type="radio" class="form-check-input" value="" name="">Option 1
                                    <input type="radio" class="form-check-input" value="" name="">Option 1
                                </label>
                            </div> --}}
                            {{-- <div class="form-group">
                                <div class="checkbox">
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="createaccount">
                                        <label class="form-check-label label_info" data-bs-toggle="collapse" href="#collapsePassword" data-target="#collapsePassword" aria-controls="collapsePassword" for="createaccount"><span>Create an account?</span></label>
                                    </div>
                                </div>
                            </div> --}}
                            <button type="submit" class="btn btn-primary float-end">Submit</button>
                        </form>
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
                                        @foreach (Cart::instance('cart')->content() as $item)
                                            <tr>
                                                <td class="image product-thumbnail"><img src="{{ asset('assets/imgs/products')}}/{{$item->model->image}}" alt="#"></td>
                                                <td>
                                                    <h5><a href="product-details.html">{{ $item->model->name }}</a></h5> <span class="product-qty">x{{ $item->qty }}</span>
                                                </td>
                                                <td>${{ $item->model->regular_price }}</td>
                                            </tr>
                                            {{-- <tr>
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
                                            </tr> --}}
                                            @endforeach
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
                                                <td colspan="2" class="product-subtotal"><span class="font-xl text-brand fw-900">${{ Cart::instance('cart')->total() }}</span></td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                            <div class="payment_method">
                                <div class="mb-10">
                                    <h4>Pembayaran</h4>
                                        <img class="mr-3" src="{{ url('assets/imgs/bri.png')}}" alt="Bank BRI" width="120">
                                        <div class="media-body">
                                        <h5 class="mt-0">BANK BRI</h5>  No. Rekening 012345-678-910 atas nama <strong> Pihak WO</strong>
                                        </div>
                                </div>
                                {{-- <div class="payment_option">
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
                                </div> --}}
                            </div>
                        </div>
                    @else
                    <p>No Item in Cart</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
       
    </main>
</div>
</div>
