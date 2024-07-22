@extends('layouts.app')
@section('main')
    <p>

    </p>
    <ul id="List">
        <li>
            <a href="">
                Torna alla Home
            </a>
        </li>
        <li>
            <a href="">
                Lista Cocktails
            </a>
        </li>
        <li>
            <a href="">
                Crea il tuo cocktail
            </a>
        </li>
    </ul>

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
