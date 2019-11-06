@extends('home')
@section('title','add food')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="post" action="{{route('foods.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Food's name</label>
                        <input type="text" class="form-control
                        @if($errors->has('name'))
                            border-danger
                        @endif
                            " placeholder="Enter Food's name" name="name">
                        @if($errors->has('name'))
                            <p class="text-danger"><img src="https://img.icons8.com/nolan/20/000000/warning-shield.png">{{$errors->first('name')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Describe the food</label>
                        <input type="text" class="form-control
                        @if($errors->has('desc'))
                            border-danger
                        @endif
                            " placeholder="Enter Describe the food" name="desc">
                        @if($errors->has('desc'))
                            <p class="text-danger"><img src="https://img.icons8.com/nolan/20/000000/warning-shield.png">{{$errors->first('desc')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Dish prices</label>
                        <input type="text" class="form-control
                        @if($errors->has('price'))
                            border-danger
                        @endif
                            " placeholder="Enter Dish prices" name="price">
                        @if($errors->has('price'))
                            <p class="text-danger"><img src="https://img.icons8.com/nolan/20/000000/warning-shield.png">{{$errors->first('price')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Dish photos</label>
                        <input type="file" class="form-control-file" name="image">
                        @if($errors->has('image'))
                            <p class="text-danger"><img src="https://img.icons8.com/nolan/20/000000/warning-shield.png">{{$errors->first('image')}}</p>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Add new dish</button>
                </form>
            </div>
        </div>
    </div>

@endsection
