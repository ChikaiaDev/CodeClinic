@extends('layouts.admin')
@section('content')
    @if(count($developers)>0)
    <br>
    <div class="col-md-6 col-sm-12 mb">
        <div class="grey-panel pn donut-chart">
          <div class="grey-header">
            <h5>Developers</h5>
          </div>
          <table class="table table-striped">
            <thead>
                <tr>
                  <td>ID</td>
                  <td>Name</td>
                  <td>Email</td>
                  <td>Title</td>
                  <td colspan="3">Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($developers as $developer)
                <tr>
                    <td>{{$developer->id}}</td>
                    <td>{{$developer->name}}</td>
                    <td>{{$developer->email}}</td>
                    <td>{{$developer->title}}</td>

                <td><a href="/developer/{{$developer->id}}/edit" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="/developer/{{$developer->id}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                    <td>
                      <a href="/developer/{{$developer->id}}" class="btn btn-success">View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
          <div class="row">
            <div class="col-sm-6 col-xs-6 goleft">
              <p>Number of<br/>Developers:</p>
            </div>
            <div class="col-sm-6 col-xs-6">
            <h2>{{$count}}</h2>
            </div>
          </div>
        </div>
        <!-- /grey-panel -->
      </div>
          @else
          <h2>No developers Found</h2>
          @endif
        </div>

        <div class="col-md-4">
          <a href="{{route('developer.create',app()->getLocale())}}" class="btn btn-primary">Add Developer</a>
        </div>
        <div>
          </div>
            @endsection
