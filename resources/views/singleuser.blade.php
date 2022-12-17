@extends('include.master')
@section('content')

    <style>
        .card {
            border: 5px solid;
            margin: auto;
            width: 70%;
            padding: 10px;
        }
    </style>
<br>
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{$getuser['data']['avatar']}}" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">ID : {{$getuser['data']['id']}}</h5>
        <p class="card-text">
            NAME - LASTNAME :  <br>{{$getuser['data']['first_name']}} {{$getuser['data']['last_name']}} <br>
            E-MAIL : {{$getuser['data']['email']}}</p>
        <a href="{{route('index')}}" class="btn btn-primary">Tabloya Dön</a>
    </div>
</div>

@endsection
