@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form action="/createmployee" method="post">
            <div class="form-group">
                Product ID
                <input type="text" class="form-control" name="idProduct">
                <p>

                </p>
                Quantity
                <input type="text" class="form-control" name="quantity">
                <p>

                </p>
                Inventory ID
                <input type="text" class="form-control" name="idInventory">

            </div>
            <button type="submit" class="btn btn-primary">Create Customer</button>
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection