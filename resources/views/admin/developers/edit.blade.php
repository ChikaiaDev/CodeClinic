@extends('layouts.admin2')
@section('content')
<style>
  .uper {
    margin: 40px 0px;

  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Developer
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
        <form method="post" action="{{ route('developer.update', $developer->id) }}">
            <div class="form-group">
                @csrf
                @method('PUT')
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name"  value={{ $developer->name }}>
            </div>
            <div class="form-group">
                <label for="price">Date of Birth :</label>
                <input type="text" class="form-control" name="dob" value={{ $developer->dob }}>
            </div>
            <div class="form-group">
                <label for="quantity">Email :</label>
                <input type="text" class="form-control" name="email" value={{ $developer->email }}>
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select class="form-control" name="category_id" required>
                    <option value="">Select a Category</option>

                    @foreach ($categories as $category)
                      <option value="{{ $category->id }}" {{ $category->id == $developer->category_id ? 'selected' : '' }}>{{ $category->name }}</option>

                      @if ($category->children)
                        @foreach ($category->children as $child)
                          <option value="{{ $child->id }}" {{ $child->id == $developer->category_id ? 'selected' : '' }}>&nbsp;&nbsp;{{ $child->name }}</option>
                        @endforeach
                      @endif
                    @endforeach
                  </select>
              </div>
          <div class="form-group">
              <label for="quantity">Bio:</label>
              <textarea name="bio" class="form-control" cols="30" rows="10" value={{$developer->bio}}></textarea>
          </div>
            <button type="submit" class="btn btn-primary">Update Details</button>
        </form>
    </div>
    </div>

  </div>
</div>
@endsection
