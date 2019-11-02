@extends('home')
@section('title','food list')
@section('content')
    <h1 style="text-align: center;color: rebeccapurple">Đạt's food</h1>

<div class="row">
    @foreach($foods as $food)

        <div class="col-4 d-flex justify-content-center">
            <div class="card" style="width: 18rem; margin-top: 50px">
                <img src="{{asset('storage/'.$food->image)}}" class="card-img-top" alt="{{$food->id}}">
                <div class="card-body">
                    <h5 class="card-title">{{$food->name}}</h5>
                    <p class="card-text">{{$food->desc}}</p>
                    <p class="card-text">{{$food->price}} VNĐ</p>
                    <a href="{{route('foods.destroy',$food->id)}}" class="btn btn-primary">Xóa món</a>
                    <a href="{{route('foods.edit',$food->id)}}" class="btn btn-primary">Sửa chi tiết</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
