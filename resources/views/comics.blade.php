@extends('layouts.app')

@section('main_content')



    {{-- Comic cover --}}
    <section>

        <div class="bg-blue banner-bar">

            <div class="small-container">

                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">

            </div>
        </div>

    </section>
    {{-- end Comic cover --}}



    {{-- Comic description --}}
    <section>

        <div class="small-container">

            <div class="description-container">

                {{-- Description --}}
                <div class="comic-description">

                    <h1>{{ $comic['title'] }}</h1>


                    <div class="description-details">
                        
                        <div class="details-price">

                            <div class="details-price-us">U.S. Price: <span>{{ $comic['price'] }}</span></div>                            

                        </div>

                        <div class="availability">
                            
                            <div class="availability-available">Available</div>                            
                            <div class="availability-check"><a href="">Check Availability <i class="fas fa-caret-down"></i></a></div>
                        </div>      

                    </div>            


                    <p>{{ $comic['description'] }}</p>

                </div>
                {{-- end Description --}}


                {{-- Advertisement --}}
                <div class="advertisement">

                    <h6>Advertisement</h6>
                    <img src="{{ asset('img/adv.jpg') }}" alt="">

                </div>
                {{-- end Advertisement --}}


            </div>

        </div>    

    </section>
    {{-- end Comic description --}}









    {{-- Comic details --}}
    <section class="bg-grey">

        <div class="small-container">
            
            <div class="comic-details">

                {{-- Talent --}}
                <div class="talent">

                    <h5>Talent</h5>

                    <div class="talent-artist">

                        <div>Art by: </div>                        
                        
                        <span>
                            @foreach($comic['artists'] as $artist )
                            {{ $artist }}
                            @endforeach
                        </span>

                        

                    </div>

                    <div class="talent-writers">

                        <div>Written by: </div>                        
                        
                        <span>
                            @foreach($comic['writers'] as $writer )
                            {{ $writer }}
                            @endforeach
                        </span>

                    </div>

                </div>
                {{-- end Talent --}}


                {{-- Specs --}}
                <div class="specs">
                    <h5>Specs</h5>

                    <div class="specs-series">

                        <div>Series: </div>                        
                        
                        <span>
                            {{ $comic['series'] }}
                        </span>                        

                    </div>

                    <div class="specs-price">

                        <div>U.S. Price: </div>                        
                        
                        <span>
                            {{ $comic['price'] }}
                        </span>                        

                    </div>

                    <div class="specs-onsale">

                        <div>On Sale Date: </div>                        
                        
                        <span>
                            {{ $comic['sale_date'] }}
                        </span>                        

                    </div>

                    

                </div>
                {{-- end Specs --}}

            </div>

        </div>

    </section>
    {{-- Comic details --}}






    {{-- DC Shop --}}
    <section></section>
    {{-- end DC Shop --}}

@endsection

