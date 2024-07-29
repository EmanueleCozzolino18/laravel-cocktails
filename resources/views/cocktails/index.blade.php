@extends('layouts.app')
@section('main')
<div class="container">
        <div class="row row-gap-4 my-5">
            @foreach ($cocktails as $cocktail)
            <div class="col-4">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<ul>
    @foreach ($cocktails as $cocktail)
    <li class="cocktails-list">
        <div>
            Nome Cocktail:{{ $cocktail->name }}
        </div>
        <div>
            Ingredienti: {{ $cocktail->ingredients }}
        </div>
        <div>
            Istruzioni:
            {{ $cocktail->instructions }}
        </div>



    </li>
    @endforeach
</ul>
{{-- <ul>
        @foreach ($cocktails as $cocktail)
            <li>
                Nome Cocktail:
                {{ $cocktail->name }}
</li>
@endforeach
</ul> --}}
@endsection
<style scoped>
    p {
        text-align: center
    }

    #list {
        text-align: center;
    }

    #list li {
        display: inline-block;
        padding: 20px
    }

    #list li a {
        /* list-style-type: none; */
        text-decoration: none;
        color: black;
    }

    .cocktails-list div {
        margin-bottom: 10px
    }
</style>