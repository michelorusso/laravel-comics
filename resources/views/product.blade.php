@extends('layouts.app')

@section('main_content')

    {{-- copertina --}}
    <div class="copertina-container">

        <div class="wrapper">

            <div class="copertina">

                <img src="{{$product["thumb"]}}" alt="{{$product["title"]}}"></a>

                <div class="type">{{$product["type"]}}</div>

                <div class="gallery">view gallery</div>

            </div>
            

            
        </div>

    </div>
    {{-- end copertina --}}

    {{-- Product-details --}}
    <div class="product-details">

        <div class="wrapper">
            
            {{-- description container --}}
            <div class="description-container">

                <div class="description-content">

                    <h2>{{ $product['title'] }}</h2>

                    {{-- check --}}
                    <div class="check">
                        
                        <div class="check-price">

                            <div>
                                <span class="green">U.S Price:</span> 
                                <span class="white">{{ $product['price'] }}</span>
                            </div>

                            <div>
                                <span class="green">AVAILABLE</span>
                            </div>
                            
                        </div>

                        <div class="aviable">
                            <span class="white">Check Aviability <i class="fas fa-sort-down"></i></span>
                        </div>
                        
                    </div>
                    {{-- end check --}}

                    <div>
                        <p class=description>
                            {{ $product['description'] }}
                        </p>
                    </div>

                </div>
                
                <div class="advertisment">

                    <span>advertisment</span>

                    <div>
                        <img src="{{asset("img/adv.jpg")}}" alt="">
                    </div>
                    
                </div>
                

            </div>
            {{-- end description container --}}

        </div>

        {{-- info details --}}
        <div class="info-details">

            <div class="wrapper">

                <div class="details-content">
                    
                    <div class="writers">

                        <h5>Talent</h5>

                        <div class="box">

                            <span class="subtitle">Art By:</span>

                            <span class="dt">
                                @foreach ($product['artists'] as $artist)
                                    {{ $artist }}
                                @endforeach
                            </span>
                            
                        </div>

                        <div class="box">

                            <span class="subtitle">Writen By:</span>

                            <span class="dt">
                                @foreach ($product['writers'] as $write)
                                    {{ $write }}
                                @endforeach
                            </span>
                            
                        </div>

                    </div>

                    <div class="info">

                        <h5>Specs</h5>

                        <div class="box">

                            <span class="subtitle">Series:</span>

                            <span class="dt">
                                {{$product["series"]}}
                            </span>
                            
                        </div>

                        <div class="box">

                            <span class="subtitle">U.S Price:</span>

                            <span class="dt s">
                                {{$product["price"]}}
                            </span>
                            
                        </div>

                        <div class="box">

                            <span class="subtitle">On Sale Date:</span>

                            <span class="dt s">
                                {{$product["sale_date"]}}
                            </span>
                            
                        </div>

                    </div>


                </div>

            </div>

        </div>
        {{-- end info details --}}
        

    </div>
    {{-- end Product-details --}}

@endsection