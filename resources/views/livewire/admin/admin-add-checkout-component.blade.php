<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block;
        }
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Add Checkout
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        Add Checkout
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ route('admin.checkouts') }}" class="btn btn-success float-end">All
                                            Checkouts</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                            @endif
                                <form wire:submit.prevent="storeCheckout">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Username</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter your Username *" wire:model="name" />
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control" placeholder="Enter your Email *" wire:model="email" />
                                        @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="telepon" class="form-label">Phone Number</label>
                                        <input type="number" name="telepon" class="form-control" placeholder="Enter your Phone Number *" wire:model="telepon" />
                                        @error('telepon')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat" class="form-label">Address</label>
                                        <input type="text" name="alamat" class="form-control" placeholder="Enter your Address *" wire:model="alamat" />
                                        @error('alamat')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>

                                    <div class="mt-3 mb-3">
                                        <label for="image" class="form-label">Image</label>
                                         <input type="file" class="form-control" wire:model="newimage"/>
                                    @error('newimage')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    @if ($newimage)
                                        <img src="{{ $newimage->temporaryUrl() }}" width="120"/>
                                    @else
                                        <img src="{{ asset('assets/imgs/checkouts')}}/{{ $image }}" width="120"/>
                                    @endif
                                    </div>
                                    
                                    {{-- <div class="mt-3 mb-3">
                                        <label for="utype" class="form-label">User Type</label>
                                    <select class="form-control" name="utype" wire:model="utype">
                                        <option value="USR">USR</option>
                                        <option value="ADM">ADM</option>
                                    </select>
                                    @error('utype')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    </div> --}}
                                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>
</div>
