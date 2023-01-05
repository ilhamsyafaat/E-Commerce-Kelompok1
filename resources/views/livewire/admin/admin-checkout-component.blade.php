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
                    <span></span> All Checkouts
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
                                        All Checkouts
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ route('admin.checkout.add') }}"
                                            class="btn btn-success float-end">Add New Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                            @if (Session::has('message'))
                                <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>                                
                            @endif
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = ($checkouts->currentPage() - 1) * $checkouts->perPage();
                                        @endphp
                                        @foreach ($checkouts as $checkout)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td><img src="{{ asset('assets/imgs/checkouts') }}/{{ $checkout->image }}" width="60"/></td>
                                                <td>{{ $checkout->name }}</td>
                                                <td>{{ $checkout->email }}</td>
                                                <td>{{ $checkout->telepon }}</td>
                                                <td>{{ $checkout->alamat }}</td>
                                                <td>
                                                    <a href="{{ route('admin.checkout.edit',['checkout_id'=>$checkout->id]) }}" class="text-info">Edit</a>
                                                    <a href="#" class="text-danger" onclick="deleteConfirmation({{ $checkout->id }})" style="margin-left:20px;">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $checkouts->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<div class="modal" id="deleteConfirmation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body pb-30 pt-30">
                <div class="row">
                    <div class="text-center col-md-12">
                        <h4 class="pb-3">Do you want to delete this record?</h4>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteConfirmation">Cancel</button>
                        <button type="button" class="btn btn-danger" onclick="deleteCheckout()">Delete</button>
                    </div>
                </div>            
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function deleteConfirmation(id)
        {
            @this.set('checkout_id',id);
            $('#deleteConfirmation').modal('show');
        }

        function deleteCheckout(){
            @this.call('deleteCheckout');
            $('#deleteConfirmation').modal('hide');
        }
    </script>
@endpush