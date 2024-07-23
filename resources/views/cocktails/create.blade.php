@extends('layouts.app')
@section('main')
    <h1>Create</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('cocktails.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="ingredients" class="form-label">ingredients</label>
            <input type="text" class="form-control" id="ingredients" name="ingredients">
        </div>
        <div class="mb-3">
            <label for="instructions" class="form-label">instructions</label>
            <input type="text" class="form-control" id="instructions" name="instructions">
        </div>
        <button type="submit">INVIA</button>
    </form>
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
