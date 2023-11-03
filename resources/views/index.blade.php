@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="text-center">Clients</h1>
    <a href="{{route('client.create')}}" class="btn btn-success mb-3">Create new client</a>
    <table class="table table-bordered">
        <thead>
            <th>ID</th>
            <th>First Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Status</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr>
                <td>{{$client->id}}</td>
                <td>{{$client->fname}}</td>
                <td>{{$client->contact}}</td>
                <td>{{$client->email}}</td>
                <td>{{$client->status}}</td>
                <td>
                    <a href="{{route('client.show',$client->id)}}" class="btn btn-primary">Show</a>
                    <a href="{{route('client.edit',$client->id)}}" class="btn btn-secondary">edit</a>
                    <a href="{{route('client.destroy',$client->id)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
    
