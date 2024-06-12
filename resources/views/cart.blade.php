@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Cart</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            @if(session('cart'))
                <table class="table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(session('cart') as $id => $details)
                            <tr data-id="{{ $id }}">
                                <td><img src="{{ asset($details['image']) }}" width="50" height="50" class="img-fluid" /></td>
                                <td>{{ $details['name'] }}</td>
                                <td>${{ $details['price'] }}</td>
                                <td>
                                    <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                                </td>
                                <td>${{ $details['price'] * $details['quantity'] }}</td>
                                <td>
                                    <a href="{{ route('remove.from.cart', $id) }}" class="btn btn-danger btn-sm">Remove</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    <a href="#" class="btn btn-primary">Proceed to Checkout</a>
                </div>
            @else
                <p>Your cart is empty!</p>
            @endif
        </div>
    </div>
</div>

<script type="text/javascript">
    $(".quantity").change(function() {
        var id = $(this).closest('tr').data('id');
        var quantity = $(this).val();

        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: id,
                quantity: quantity
            },
            success: function(response) {
                window.location.reload();
            }
        });
    });
</script>
@endsection
