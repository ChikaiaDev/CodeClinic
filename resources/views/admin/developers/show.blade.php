@extends('layouts.admin')

@section('content')
<br>
<div class="row content-panel">
    <div class="col-md-4 profile-text mt mb centered">
      <div class="right-divider hidden-sm hidden-xs">
        <h4>{{$developer->dob}}</h4>
        <h6>Birthday</h6>
        <h4>{{$developer->email}}</h4>
        <h6>Email</h6>
      </div>
    </div>
    <!-- /col-md-4 -->
    <div class="col-md-4 profile-text">
      <h3>{{$developer->name}}</h3>
        <h6>{{$developer->title}}</h6>
        <p>{{$developer->bio}}</p>
      <br>
      <p><button class="btn btn-theme"><i class="fa fa-envelope"></i> Send Message</button></p>
    </div>
    <!-- /col-md-4 -->
    <div class="col-md-4 centered">
      <div class="profile-pic">
        <p><img src="/storage/profile_pictures/{{$developer->profile_pic}}" class="img-circle"></p>
          </div>
    </div>
    <!-- /col-md-4 -->
  </div>
  <!-- /row -->
</div>

<div class="col-lg-12 mt">
    <div class="row content-panel">
      <div class="panel-heading">
        <ul class="nav nav-tabs nav-justified">
          <li>
            <a data-toggle="tab" href="#contact" class="contact-map">Contact</a>
          </li>
          <li>
            <a data-toggle="tab" href="#edit">Edit Profile</a>
          </li>
        </ul>
      </div>
      <!-- /panel-heading -->
      <div class="panel-body">
        <div class="tab-content">
          <!-- /tab-pane -->
          <div id="contact" class="tab-pane">
            <div class="row">
              <div class="col-md-6">
                <div id="map"></div>
              </div>
              <!-- /col-md-6 -->
              <div class="col-md-6 detailed">
                <h4>Location</h4>
                <div class="col-md-8 col-md-offset-2 mt">
                  <p>
                    Postal Address<br/> PO BOX 12988, Sutter Ave<br/> Brownsville, New York.
                  </p>
                  <br>
                  <p>
                    Headquarters<br/> 844 Sutter Ave,<br/> 9003, New York.
                  </p>
                </div>
                <h4>Contacts</h4>
                <div class="col-md-8 col-md-offset-2 mt">
                  <p>
                    Phone: +33 4898-4303<br/> Cell: 48 4389-4393<br/>
                  </p>
                  <br>
                  <p>
                    Email: hello@dashiotheme.com<br/> Skype: UseDashio<br/> Website: http://Alvarez.is
                  </p>
                </div>
              </div>
              <!-- /col-md-6 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /tab-pane -->
          <div id="edit" class="tab-pane">
            <div class="row">
              <div class="col-lg-8 col-lg-offset-2 detailed">
                <h4 class="mb">Personal Information</h4>
                <form role="form" class="form-horizontal">
                  <div class="form-group">
                    <label class="col-lg-2 control-label"> Avatar</label>
                    <div class="col-lg-6">
                      <input type="file" id="exampleInputFile" class="file-pos">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Company</label>
                    <div class="col-lg-6">
                      <input type="text" placeholder=" " id="c-name" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Lives In</label>
                    <div class="col-lg-6">
                      <input type="text" placeholder=" " id="lives-in" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Country</label>
                    <div class="col-lg-6">
                      <input type="text" placeholder=" " id="country" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Description</label>
                    <div class="col-lg-10">
                      <textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /col-lg-8 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /tab-pane -->
        </div>
        <!-- /tab-content -->
      </div>
      <!-- /panel-body -->
    </div>
    <!-- /col-lg-12 -->
  </div>
@endsection
