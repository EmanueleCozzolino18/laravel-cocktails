@extends('layouts.app')
@section('main')
{{-- dati di seeder: info di cocktail --}}
<div class="container">
        <div class="row row-gap-4 my-5">
            @foreach ($cocktails as $cocktail)
            <div class="col-4">
                <div class="card h-250">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title"><strong class="rosso">Nome Cocktail:</strong><em> {{ $cocktail->name }}</em></h5>
                        <p class="card-text"><strong class="rosso">Ingredienti:</strong> {{ $cocktail->ingredients }}</p>
                        <p class="card-text"><strong class="rosso">Instruzioni:</strong> {{ $cocktail->instructions }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

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