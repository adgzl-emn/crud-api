@extends('include.master')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <br><br>
                <a href="{{route('index',1)}}"><button type="button"  class="btn btn-primary" @if(\Illuminate\Support\Facades\Request::segment(1) == 1) disabled @endif>Önceki Sayfa<i class="bi bi-arrow-left"></i></button></a>
                <br><br>
                <a href="{{route('show.user')}}"><button type="button" class="btn btn-outline-success">Ekle<i class="fa fa-user"></i></button></a>
            </div>
            <div class="col-sm-8">
                <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12">
                    <div class="container">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Ad Soyad</th>
                                <th scope="col">Mail</th>
                                <th scope="col">Avatar</th>
                                <th scope="col">işlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($getdata['data'] as $data)
                                <tr>
                                    <th scope="row">{{$data['id']}}</th>
                                    <td>{{$data['first_name']}} {{$data['last_name']}}</td>
                                    <td>{{$data['email']}}</td>
                                    <td><img src="{{$data['avatar']}}"></td>
                                    <td>
                                        <a  href="{{route('single.user',$data['id'])}}">
                                            <i class="fa fa-info"></i>
                                        </a>

                                        <a href="{{route('user.delete',$data['id'])}}">
                                            <i class="fa fa-trash"></i>
                                        </a>

                                        <a href="{{route('user.update',$data['id'])}}">
                                            <i class="fa fa-pen"></i>
                                        </a>


                                    </td>
                                    <td class="align-middle">

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
            <div class="col--2">
                <br><br>
                <a href="{{route('index',2)}}"><button type="button" class="btn btn-primary" @if(\Illuminate\Support\Facades\Request::segment(1) == 2) disabled @endif>Sonraki Sayfa<i class="bi bi-arrow-right"></i></button></a>
                <br><br>
            </div>
        </div>
    </div>



@endsection


