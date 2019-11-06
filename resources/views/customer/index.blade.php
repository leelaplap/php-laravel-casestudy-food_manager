@extends('home')
@section('title','customer list')
@section('content')
    <h1 style="text-align: center;color: rebeccapurple">Customer List <img
            src="https://img.icons8.com/nolan/64/000000/online-store.png"></h1>
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success">
            {{\Illuminate\Support\Facades\Session::get('success')}}
        </div>
    @endif

    <a href="{{route('customers.create')}}">Add new Customer</a>

    <form action="{{route('customers.search')}}" method="get" class="d-flex justify-content-center">
        <input type="search" name="search" placeholder="Name you need">
        <button type="submit">Search</button>
    </form>


    <div class="row">
        @foreach($customers as $customer)

            <div class="col-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem; margin-top: 50px">
                    <div class="card-body">
                        <h5 class="card-title">Name:{{$customer->name}}</h5>
                        <p class="card-text">Phone :{{$customer->phone}}</p>
                        <p class="card-text">Address:{{$customer->address}}</p>
                        <a href="{{route('customers.destroy',$customer->id)}}"
                           class="btn btn-primary">@lang('message.Delete')</a>
                        <a href="{{route('customers.edit',$customer->id)}}"
                           class="btn btn-primary">@lang('message.Edit')</a>
                        <a href="" class="btn btn-primary">@lang('message.Order')</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
