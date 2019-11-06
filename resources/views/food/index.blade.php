@extends('home')
@section('title','food list')
@section('content')
    <h1 style="text-align: center;color: rebeccapurple">Đạt's foods <img
            src="https://img.icons8.com/nolan/64/000000/online-store.png"></h1>
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success">
            {{\Illuminate\Support\Facades\Session::get('success')}}
        </div>
    @endif



    <div class="row">
        @foreach($foods as $food)

            <div class="col-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem; margin-top: 50px">
                    <img src="{{asset('storage/'.$food->image)}}" class="card-img-top" alt="{{$food->id}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$food->name}}</h5>
                        <p class="card-text">{{$food->desc}}</p>
                        <p class="card-text">{{$food->price}} VNĐ</p>
                        <p class="card-text">Người đã mua:{{$food->customer->name}}</p>
                        <a href="{{route('foods.destroy',$food->id)}}" class="btn btn-primary">@lang('message.Delete')</a>
                        <a href="{{route('foods.edit',$food->id)}}" class="btn btn-primary">@lang('message.Edit')</a>
                        <a href="{{route('addToCart',$food->id)}}" class="btn btn-primary">@lang('message.Order')</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
