@extends('include.master')
@section('content')

    <div class="col-xl-6 col-lg-12 offset-xl-2">
        <br>
        <h3>Kullanıcı Ekleme Alanı</h3>

        <form method="post" action="{{route('add.user')}}">
            @csrf
        <div class="form-group">
            <label for="exampleInput">İsim</label>
            <input name="name" class="form-control" type="text" placeholder="isim" required>
        </div>
        <div class="form-group">
            <label for="exampleInput1">İş</label>
            <input name="job" class="form-control" type="text" placeholder="iş" required>
        </div>
        <button type="submit" class="btn btn-primary">Ekle</button>
    </form>
    </div>
@endsection
