@extends('layouts.app')

@section('main-classes')
    home-shop
@endsection

@section('main_content')
    
    <div class="container">

        <div class="current">
            <h2>current series</h2>
        </div>

        {{-- Comics --}}
        <section class="comics">
            
            {{-- single-comic --}}
            @foreach ($comics_array as $comic)
            
            <div class="single-comic">

                <div class="poster">
                    <a href="{{ route('product', [
                        'id' => $comic['id'],
                    ]) }}">
                    <img src="{{$comic["thumb"]}}" alt="{{$comic["title"]}}"></a>
                </div>

                {{-- title-comic --}}
                <div class="title-comic">
                    {{$comic["series"]}}
                </div>
                {{-- end title-comic --}}
                
            </div>
            
            @endforeach
            {{-- single-comic --}}

        </section>
        {{-- End Comics --}}

        {{-- button --}}
        <div class="click">
            <button>LOAD MORE</button>
        </div>
        {{-- end button --}}

    </div>

        {{-- Option --}}
        <div class="option">

            <div class="container">

                <div class="single-opt">
                    <img src="{{asset("img/buy-comics-digital-comics.png")}}" alt="">
                    <span>Digital Comics</span>
                </div>
    
                <div class="single-opt">
                    <img src="{{asset("img/buy-comics-merchandise.png")}}" alt="">
                    <span>DC Merchandise</span>
                </div>
    
                <div class="single-opt">
                    <img src="{{asset("img/buy-comics-subscriptions.png")}}" alt="">
                    <span>Subscription</span>
                </div>
    
                <div class="single-opt">
                    <img src="{{asset("img/buy-comics-shop-locator.png")}}" alt="">
                    <span>Comic Shop Location</span>
                </div>
    
                <div class="single-opt">
                    <img src="{{asset("img/buy-dc-power-visa.svg")}}" alt="">
                    <span>DC Power Visa</span>
                </div>

            </div>

        </div>
        {{-- End Option --}}

@endsection