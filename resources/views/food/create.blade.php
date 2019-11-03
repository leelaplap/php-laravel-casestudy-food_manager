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
                        <input type="text" class="form-control" placeholder="Enter Food's name" name="name">
                    </div>
                    <div class="form-group">
                        <label>Describe the food</label>
                        <input type="text" class="form-control" placeholder="Enter Describe the food" name="desc">
                    </div>
                    <div class="form-group">
                        <label>Dish prices</label>
                        <input type="text" class="form-control" placeholder="Enter Dish prices" name="price">
                    </div>
                    <div class="form-group">
                        <label>Dish photos</label>
                        <input type="file" class="form-control-file" name="image">
                    </div>

                    <button type="submit" class="btn btn-primary">Add new dish</button>
                </form>
            </div>
        </div>
    </div>

@endsection
