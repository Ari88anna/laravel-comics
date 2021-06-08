@extends('layouts.app')

@section('comics_list_section')

    <section class="comics_list_section">

        <div class="container">

            <h1>Current Series</h1>

            {{-- Comics list --}}
            <div class="comics-list">

                @foreach ($comics as $comic)
                
                {{-- single comic book--}}
                <div class="comic-book">

                    <a href="#">
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


@endsection