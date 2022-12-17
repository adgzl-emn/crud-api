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
        <div class="card-body">
            <h5 class="card-title"> ID - {{$lastadd['id']}}</h5>
            <p class="card-text"><br>
                NAME : {{$lastadd['name']}}<br>
                JOB : {{$lastadd['job']}}<br>
                CREATED_AT : {{$lastadd['createdAt']}}
            </p>
            <a href="{{route('index')}}" class="btn btn-primary">Tabloya Dön</a>
        </div>
    </div>

@endsection
