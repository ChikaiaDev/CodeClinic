@extends('layouts.admin2')
@section('content')

    @if(count($developers)>0)
    <br>
    <div class="col-md-6 col-sm-12 mb">
        <div class="card">
            <div class="card-header">
            <h5 class="card-title">Developers</h5>
          </div>
          <div class="table-stats order-table ov-h">
          <table class="table">
            <thead>
                <tr>
                  <th class="serial">#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Title</th>
                <th>Field</th>
                  <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($developers as $developer)
                <tr>
                    <td>{{$developer->id}}</td>
                    <td>{{$developer->name}}</td>
                    <td>{{$developer->email}}</td>
                    <td></td>
                    <td>{{$developer->category? $developer->category->name : 'Uncategorized' }}</td>

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
          </div>
          <footer class="twt-footer">
            <a href="#"><i class="fa fa-user"></i></a>
            No. of Developers:
            <span class="pull-right">
                {{$count}}
            </span>
        </footer>
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
