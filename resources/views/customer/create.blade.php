@extends('home')
@section('title','add customer')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="post" action="{{route('customers.store')}}">
                    @csrf
                    <div class="form-group">
                        <label>customer name</label>
                        <input type="text" class="form-control
                        @if($errors->has('name'))
                            border-danger
                        @endif
                            " placeholder="Enter customer name" name="name">
                        @if($errors->has('name'))
                            <p class="text-danger"><img src="https://img.icons8.com/nolan/20/000000/warning-shield.png">{{$errors->first('name')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>phone</label>
                        <input type="text" class="form-control
                        @if($errors->has('phone'))
                            border-danger
                        @endif
                            " placeholder="Enter phone" name="phone">
                        @if($errors->has('phone'))
                            <p class="text-danger"><img src="https://img.icons8.com/nolan/20/000000/warning-shield.png">{{$errors->first('phone')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>address</label>
                        <input type="text" class="form-control
                        @if($errors->has('address'))
                            border-danger
                        @endif
                            " placeholder="Enter address" name="address">
                        @if($errors->has('address'))
                            <p class="text-danger"><img src="https://img.icons8.com/nolan/20/000000/warning-shield.png">{{$errors->first('address')}}</p>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Add new customer</button>
                </form>
            </div>
        </div>
    </div>

@endsection
