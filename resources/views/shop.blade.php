@extends('layouts.template')

@section('main_content')
<div class="container mt-5">
    <h1>Shops</h1>
    <form action="/shop" method="GET" class="form-inline w-25 d-flex gap-2">
        <input class="form-control" type="search" name="search" placeholder="Search">
        <button type="submit" class="btn btn-outline-success">Search</button>
    </form>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Shop Name</th>
                <th scope="col">Shop Address</th>
                <th scope="col">Products</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shops as $shop)
            <tr>
                <td>{{$shop->shop_name}}</td>
                <td>{{$shop->address}}</td>
                <td>
                    {{$shop->avail->name}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $shops->links() }}
    </div>
</div>
@endsection
