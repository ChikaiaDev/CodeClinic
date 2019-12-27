@extends('layouts.admin')
@section('content')
<style>
  .uper {
    margin: 40px 0px;

  }
</style>
<div class="card uper">
  <div class="card-header">
    Add New Developers
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <div class="container">
        <div class="col-md-6">

        <form method="POST" action="{{route('developer.store',app()->getLocale())}}" enctype="multipart/form-data">
            <div class="form-group">
                @csrf
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name"/>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth :</label>
                <input type="date" class="form-control" name="dob"/>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="text" class="form-control" name="email"/>
</div>
          <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title"/>
          </div>
          <div class="form-group">
              <label for="bio">Bio:</label>
              <textarea name="bio" class="form-control" cols="30" rows="10"></textarea>
          </div>
          <div class="form-group">
            <label for="profile">Profile Pic: </label>
            <p>Jpeg images</p>
            <br>
            <input type="file"  name="profile_pic"/>
        </div>
            <button type="submit" class="btn btn-primary">Add Developer</button>
        </form>
    </div>
    </div>

  </div>
</div>
@endsection
