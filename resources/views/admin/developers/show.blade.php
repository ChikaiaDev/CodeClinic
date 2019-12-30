@extends('layouts.admin2')

@section('content')
<div class="col-md-6">
    <aside class="profile-nav alt">
        <section class="card">
            <div class="card-header user-header alt bg-dark">
                <div class="media">
                    <a href="#">
                        <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="/storage/profile_pictures/{{$developer->profile_pic}}">
                    </a>
                    <div class="media-body">
                        <h2 class="text-light display-6">{{$developer->name}}</h2>
                        <span class="badge badge-success">{{$developer->category? $developer->category->name : 'Uncategorized' }}</span>
                    </div>
                </div>
            </div>


            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a href="#"> <i class="fa fa-envelope-o"></i> Email  <span class=" pull-right">{{$developer->email}}</span></a>
                </li>
                <li class="list-group-item">
                    <a href="#"> <i class="fa fa-tasks"></i> Recent Activity <span class="badge badge-danger pull-right">15</span></a>
                </li>
                <li class="list-group-item">
                <a href="#"> <i class="fa fa-bell-o"></i> Birthday <span class=" pull-right">{{\Carbon\Carbon::parse($developer->dob)->format('d/m/Y')}}</span></a>
                </li>
                <li class="list-group-item">
                    <a href="#"> <i class="fa fa-comments-o"></i> Bio <span class=" pull-right r-activity">{{$developer->bio}}</span></a>
                </li>
            </ul>

        </section>
    </aside>
</div>
<div class="col-md-4">
    <a href="/developer/{{$developer->id}}/edit" class="btn btn-primary">Edit</a>
</div>

@endsection
