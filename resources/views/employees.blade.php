@extends('layouts.master')

@section('title', 'Manage Employees')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h1>@yield('title')</h1>
    </div>
    <div class="col-md-4">
      <h5>Total Employees <span>316</span></h5>
      <button class="btn btn-default btn-xs" type="button" name="button"><i class="la la-refresh"></i>&nbsp;Refresh</button>
      <button class="btn btn-default btn-xs" type="button" name="button"><i class="la la-question"></i></button>
      <button class="btn btn-default btn-xs" type="button" name="button"><i class="la la-edit"></i>&nbsp;Feedback</button>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="row">
            <div class="col-md-8">
              <div class="input-group">
                <input type="text" class="form-control" name="" value="" placeholder="Search Employee...">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-default" name="button"><i class="la la-search"></i></button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <button type="button" class="btn btn-success pull-right" name="button"><i class="la la-plus"></i>&nbsp;New Employee</button>
            </div>
          </div>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th>Employee Name</th>
              <th>Employment Status</th>
              <th>Job Title</th>
              <th>Department</th>
              <th>Location</th>
              <th>Hire Date</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>

</div>
@endsection
