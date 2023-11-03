@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>{{$client->fname}} Details</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {!! session('success') !!}
            </div>
         @endif
        <form action="{{route('client.update',$client->id)}}" class="row g-3" method="POST">
            @method('PUT')
          @csrf
          <div class="col-md-6">
            <label class="form-label">First Name</label>
            <input type="text" name="fname" value="{{$client->fname}}" class="form-control">
          </div>
          <div class="col-md-6">
            <label class="form-label">Last Name</label>
            <input type="text" name="lname" value="{{$client->lname}}" class="form-control">
          </div>
          <div class="col-md-6">
            <label class="form-label">Contact</label>
            <input type="text" name="contact" value="{{$client->contact}}" class="form-control">
          </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" name="email" value="{{$client->email}}" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label class="form-label">Gender</label>
                <select class="form-select" name="gender" aria-label="Default select example">
                  <option value="1" {{ old('gender', $client->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                  <option value="2"{{ old('gender', $client->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Date of Birth</label>
                <div class="input-group date">
                    <input type="text" name="dob" value="{{$client->dob}}" class="form-control datepicker">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
              </div>
              </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">Street No</label>
              <input type="text" name="street_no" value="{{$client->street_no}}" class="form-control" id="inputCity">
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" name="city"  value="{{$client->city}}" class="form-control" id="inputCity">
            </div>
            <div class="col-12">
              <label for="inputAddress2" class="form-label">Address 2</label>
              <input type="text" name="street_address" value="{{$client->street_address}}" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" name="status" {{ $client->status == "active" ? 'checked' : '' }} type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Active
                </label>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </div>
          </form>
    </div>  
@endsection