@extends('home')
@section('title','edit food')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="post" action="{{route("foods.update",$food->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Food's name</label>
                        <input type="text" class="form-control" placeholder="Enter Food's name" name="name"  value="{{$food->name}}">
                    </div>
                    <div class="form-group">
                        <label>Describe the food</label>
                        <input type="text" class="form-control" placeholder="Enter Describe the food" name="desc" value="{{$food->desc}}">
                    </div>
                    <div class="form-group">
                        <label>Dish prices</label>
                        <input type="text" class="form-control" placeholder="Enter Dish prices" name="price" value="{{$food->price}}">
                    </div>
                    <div class="form-group">
                        <label>Dish photos</label>
                        <img src="{{asset('storage/'.$food->image)}}" alt="anh" >
                        <input type="file" class="form-control-file" name="image" >
                    </div>

                    <button type="submit" class="btn btn-primary">edit dish</button>
                </form>
            </div>
        </div>
    </div>

@endsection
