@extends('layouts.admin')
@section('content')
<style>
  .uper {
    margin: 40px 0px;

  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Pst
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
        <form method="post" action="{{ route('pages.developer.update', $developer->id) }}">
            <div class="form-group">
                @csrf
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name"  value={{ $developer->name }}/>
            </div>
            <div class="form-group">
                <label for="price">Date of Birth :</label>
                <input type="text" class="form-control" name="dob" value={{ $developer->dob }}/>
            </div>
            <div class="form-group">
                <label for="quantity">Email :</label>
                <input type="text" class="form-control" name="email" value={{ $developer->email }}/>
            </div>
            <div class="form-group">
              <label for="quantity">Marital Status:</label>
              <input type="text" class="form-control" name="status" value={{ $developer->status }}/>
          </div>
          <div class="form-group">
              <label for="quantity">Title:</label>
              <input type="text" class="form-control" name="title" value={{ $developer->title }}/>
          </div>
          <div class="form-group">
              <label for="quantity">Bio:</label>
              <textarea name="bio" class="form-control" cols="30" rows="10" value={{ $developer->bio }}></textarea>
          </div>
            <button type="submit" class="btn btn-primary">Add Developer</button>
        </form>
    </div>
    </div>

  </div>
</div>
@endsection
