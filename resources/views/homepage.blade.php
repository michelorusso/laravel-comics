@extends('layouts.app')

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
                    <img src="{{$comic["thumb"]}}" alt="{{$comic["title"]}}">
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

        {{-- Option --}}
        <div class="option">

        </div>
        {{-- End Option --}}

        

    </div>

@endsection