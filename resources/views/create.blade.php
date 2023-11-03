@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Create new client</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {!! session('success') !!}
            </div> 
        @endif
        <form action="{{route('client.store')}}" class="row g-3" method="POST">
          @csrf
          <div class="col-md-6">
            <label class="form-label">First Name</label>
            <input type="text" name="fname" class="form-control">
            @error('fname')
                <p class="text-danger">
                  {{$message}}
                </p>
            @enderror
          </div>
          <div class="col-md-6">
            <label class="form-label">Last Name</label>
            <input type="text" name="lname" class="form-control">
            @error('lname')
                <p class="text-danger">
                  {{$message}}
                </p>
            @enderror
          </div>
          <div class="col-md-6">
            <label class="form-label">Contact</label>
            <input type="text" name="contact" class="form-control">
            @error('contact')
                <p class="text-danger">
                  {{$message}}
                </p>
            @enderror
          </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="inputEmail4">
              @error('email')
              <p class="text-danger">
                {{$message}}
              </p>
          @enderror
            </div>
            <div class="col-md-6">
              <label class="form-label">Gender</label>
              <select class="form-select" name="gender" aria-label="Default select example">
                <option value="1">Male</option>
                <option value="2">Female</option>
              </select>
            </div>
            @error('gender')
              <p class="text-danger">
                {{$message}}
              </p>
            @enderror
            <div class="col-md-6">
              <label class="form-label">Date of Birth</label>
              <div class="input-group date">
                  <input type="text" name="dob" class="form-control datepicker">
                  <div class="input-group-addon">
                      <span class="glyphicon glyphicon-th"></span>
                  </div>
              </div>
              @error('dob')
                <p class="text-danger">
                  {{$message}}
                </p>
              @enderror
          </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">Street No</label>
              <input type="text" name="street_no" class="form-control" id="inputCity">
              @error('street_no')
                <p class="text-danger">
                  {{$message}}
                </p>
              @enderror
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" name="city" class="form-control" id="inputCity">
              @error('city')
                <p class="text-danger">
                  {{$message}}
                </p>
              @enderror
            </div>
            <div class="col-12">
              <label for="inputAddress2" class="form-label">Address 2</label>
              <input type="text" name="street_address" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
              @error('street_address')
                <p class="text-danger">
                  {{$message}}
                </p>
              @enderror
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" name="status" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Active
                </label>
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
    </div>  
@endsection