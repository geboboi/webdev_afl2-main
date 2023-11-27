@extends('layouts.template')

@section('main_content')
<div class="container mt-5">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Shop Address</th>
                <th scope="col">Products</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shops as $shop)
            <tr>
                <td>{{$shop->address}}</td>
                <td>
                    {{$shop->avail->name}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
