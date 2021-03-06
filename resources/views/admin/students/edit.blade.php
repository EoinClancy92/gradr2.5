@extends('layouts.appAdmin')
<link rel="stylesheet" href="{{ URL::asset('css/master.css') }}" />
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="card">
        <div class="card-header">
          Edit Student
        </div>
        <div class="card-body">
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
          @endif
          <form method="POST" action="{{route('admin.students.update', $students->id)}}">

            <input type="hidden" name="_method" value ="PUT">
            <input type="hidden" name="_token">
                {{ csrf_field() }}

            <div class="form-group">
              <label for="title">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{old('name', $students->name)}}" />
            </div>

            <div class="form-group">
              <label for="publisher">Phone</label>
              <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone', $students->phone)}}" />
            </div>

            <div class="form-group">
              <label for="author">Email</label>
              <input type="text" class="form-control" id="email" name="email" value="{{old('email', $students->email)}}" />
            </div>

            <div class="form-group">
              <label for="year">Address</label>
              <input type="text" class="form-control" id="address" name="address" value="{{old('address', $students->address)}}" />
            </div>




            <a href="{{route('admin.students.index')}}" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn submit float-right">Submit</button>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
