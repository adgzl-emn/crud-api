<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class CrudController extends Controller
{

    public function index(Request $request)
    {
        $page = $request->segment(1);

        $getdata = Http::get("https://reqres.in/api/users/?page=".$page);
        return view('table',compact('getdata'));
    }


    public function singleuser($id)
    {
        $getuser = Http::get("https://reqres.in/api/users/".$id);
        if ($getuser->status() == 200)
            return view('singleuser',compact('getuser'));
        else
        {
            toastr()->error('Böyle bir kullanıcı mevcut değil','HATA!');
            return redirect()->route('index');
        }
    }

    public function showadd()
    {
        return view('adduser');
    }

    public function adduser(Request $request)
    {
        $name = $request->name;
        $job = $request->job;

        $postuser = Http::asForm()->post("https://reqres.in/api/users/",
            [
                'name' => $name,
                'job' => $job,
            ]);
        $lastadd = $postuser->throw();
        if ($postuser->status() == 201)
        {
            toastr()->success('Tebrikler başarıyla eklendi','Başarılı!');
            return view('lastadd',compact('lastadd'));
        }
        else
        {
            toastr()->error('Kullanıcı eklenemedi','HATA!');
            return redirect()->route('index');
        }

    }

    public function updateshow($id)
    {

        $finduser = Http::get("https://reqres.in/api/users/".$id);
        if ($finduser->status() == 200)
            return view('update',compact('finduser'));
        else
        {
            toastr()->error('Böyle bir kullanıcı mevcut değil','HATA!');
            return redirect()->route('index');
        }

    }

    public function update(Request $request,$id)
    {
        $updateuser = Http::put("https://reqres.in/api/users/".$id, [
            'name' => $name = $request->name,
            'job' =>  $job = $request->job,
        ]);
        $lastadd = $updateuser->throw();
        if ($updateuser->status() == 200)
            return $lastadd;
        else
        {
            toastr()->error('Böyle bir kullanıcı mevcut değil','HATA!');
            return redirect()->route('index');
        }

    }

    public function delete($id)
    {
        $deleteduser = Http::delete("https://reqres.in/api/users/".$id);
        if ($deleteduser->status() == 204)
        {
            toastr()->success('Tebrikler başarıyla silindi','Başarılı!');
            return redirect()->route('index');
        }
        else
        {
             toastr()->error('Kullanıcı Silinemedi','HATA!');
             return redirect()->route('index');
        }

    }






}
