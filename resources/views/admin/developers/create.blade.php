@extends('layouts.admin2')
@section('content')
<style>
  .uper {
    margin: 40px 40px;
  }
</style>
 <div class="col-lg-6">
    <div class="card">
    <div class="card-header">
        Add New Developer
    </div>
    <div >
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
            <div class="card-body card-block">

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
                <label for="category_id">Category</label>
                <select class="form-control" name="category_id" required>
                <option value="">Select a Category</option>

                @foreach ($categories as $category)
                    #<option value="{{ $category->id }}" {{ $category->id == old('category_id') ? 'selected' : '' }}>{{ $category->name }}</option>

                    @if ($category->children)
                    @foreach ($category->children as $child)
                        <option value="{{ $child->id }}" {{ $child->id == old('category_id') ? 'selected' : '' }}>&nbsp;&nbsp;{{ $child->name }}</option>
                    @endforeach
                    @endif
                @endforeach
                </select>
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
