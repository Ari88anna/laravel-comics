@extends('layouts.app')

@section('main_content')
    {{-- Comic list section --}}
    <section class="comics_list_section">

        <div class="container">

            <h1>Current Series</h1>

            {{-- Comics list --}}
            <div class="comics-list">

                @foreach ($comics as $comic)
                
                {{-- single comic book--}}
                <div class="comic-book">

                    <a href="{{ route('comics', ['id' => $comic['id']]) }}">

                        <div class="comic-cover">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                        </div>
                        
                    </a>    
    
                        <div class="comic-title">
                            <h5>{{ $comic['series'] }}</h5>
                        </div>

                </div>
                {{-- end single comic book --}}   
                
                @endforeach

                
            </div>
            {{-- end Comics list --}}

        </div>

        
        <div class="btn-container">
            <button class="load-btn">Load More</button>
        </div>
        

    </section>
    {{-- end Comic list section --}}

    {{-- Shop section --}}
    <section class="shop-section">

        <div class="container">
            <ul class="shop-list">

                <li>
                    
                    <img src="{{ asset('img/buy-comics-digital-comics.png')}}" alt="">
                    <a href="#">digital comics</a>
                    
                </li>
    
                <li>
                    
                    <img src="{{ asset('img/buy-comics-merchandise.png')}}" alt="">
                    <a href="#">dc merchandise</a>
                    
                </li>
    
                <li>
                    
                    <img src="{{ asset('img/buy-comics-subscriptions.png')}}" alt="">
                    <a href="#">subscription</a>
                    
                </li>
    
                <li>
                    
                    <img src="{{ asset('img/buy-comics-shop-locator.png')}}" alt="">
                    <a href="#">comic shop locator</a>
                    
                </li>
    
                <li>
                    
                    <img src="{{ asset('img/buy-dc-power-visa.svg')}}" alt="">
                    <a href="#">dc power visa</a>
                    
                </li>
    
                
            </ul>
        </div>
         


    </section>
    {{-- end Shop section --}}


@endsection