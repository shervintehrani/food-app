@extends('layout')


@section('content')
    <div class="row">


        {{-- Loop through menu items --}}
        @foreach($menu as $item)
            <div class="col-md-4">
                <div class="card mb-3 shadow-sm">
                    <div class="card-body">


                        <h5>{{ $item['name'] }}</h5>
                        <p>${{ $item['price'] }}</p>


                        <!-- Add to cart form -->
                        <form method="POST" action="/add">
                            @csrf


                            <!-- Hidden inputs to send item data -->
                            <input type="hidden" name="id" value="{{ $item['id'] }}">
                            <input type="hidden" name="name" value="{{ $item['name'] }}">
                            <input type="hidden" name="price" value="{{ $item['price'] }}">


                            <button class="btn btn-primary">Add</button>
                        </form>


                    </div>
                </div>
            </div>
        @endforeach


    </div>
