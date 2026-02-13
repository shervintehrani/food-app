@extends('layout')


@section('content')
    <h3>Your Cart</h3>


    @php $total = 0; @endphp


    {{-- Loop through cart items stored in session --}}
    @foreach(session('cart', []) as $item)
        <div class="card mb-2">
            <div class="card-body d-flex justify-content-between">
                <span>{{ $item['name'] }}</span>
                <span>${{ $item['price'] }}</span>
            </div>
        </div>


        @php $total += $item['price']; @endphp
    @endforeach


    <h4>Total: ${{ $total }}</h4>


    <!-- Checkout form -->
    <form method="POST" action="/checkout">
        @csrf
        <button class="btn btn-success">Checkout</button>
    </form>
@endsection
