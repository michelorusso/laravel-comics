@extends('layouts.app')

@section('main_content')

    {{-- copertina --}}
    <div class="copertina">

        <div class="wrapper">
            <img src="{{$product["thumb"]}}" alt="{{$product["title"]}}"></a>
        </div>

    </div>
    {{-- end copertina --}}

    {{-- Product-details --}}
    <div class="product-details">

        <div class="wrapper">
            
            <div class="details">

                <h2>{{ $product['title'] }}</h2>

            </div>

            <div class="advertisment">

            </div>

        </div>
        

    </div>
    {{-- end Product-details --}}

@endsection