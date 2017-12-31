@extends('layouts.master')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h1>@yield('title')</h1>
    </div>
    <div class="col-md-4">
      <h5>Total Number of Employees <span>316</span></h5>
      <button class="btn btn-success btn-xs" type="button" name="button"><i class="la la-plus"></i>&nbsp;Add Task</button>
      <button class="btn btn-default btn-xs" type="button" name="button"><i class="la la-refresh"></i>&nbsp;Refresh</button>
      <button class="btn btn-default btn-xs" type="button" name="button"><i class="la la-question"></i></button>
      <button class="btn btn-default btn-xs" type="button" name="button"><i class="la la-edit"></i>&nbsp;Feedback</button>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-default fixed-panel-size">
        <div class="panel-heading">
          <h5 class="panel-title">Todo List</h5>
        </div>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>Description</th>
              <th>Due Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Some Task bi lydat</td>
              <td>20th May, 2017</td>
              <td><a href="#" class="text-info"> <i class="la la-pencil"></i></a> <a href="#" class="text-danger"> <i class="la la-trash"></i></a></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Some Task bi lydat</td>
              <td>20th May, 2017</td>
              <td><a href="#" class="text-info"> <i class="la la-pencil"></i></a> <a href="#" class="text-danger"> <i class="la la-trash"></i></a></td>
            </tr>
            <tr>
              <td>3</td>
              <td>Some Task bi lydat</td>
              <td>20th May, 2017</td>
              <td><a href="#" class="text-info"> <i class="la la-pencil"></i></a> <a href="#" class="text-danger"> <i class="la la-trash"></i></a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-md-3">
      <div class="panel panel-default fixed-panel-size">
        <div class="panel-heading">
          <h5 class="panel-title">Upcoming Birthdays</h5>
        </div>
        <div class="list-group">
          <a href="#" class="list-group-item">
            <p><i class="la la-user"></i> Emmanuel Yaweh <small class="pull-right">24th Oct</small></p>
          </a>
          <a href="#" class="list-group-item">
            <p><i class="la la-user"></i> Emmanuel Yaweh <small class="pull-right">24th Oct</small></p>
          </a>
          <a href="#" class="list-group-item">
            <p><i class="la la-user"></i> Emmanuel Yaweh <small class="pull-right">24th Oct</small></p>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="panel panel-default fixed-panel-size">
        <div class="panel-heading">
          <h5 class="panel-title">Quick Links</h5>
        </div>
        <div class="panel-body">
          <a href="#"><i class="la la-link"></i> Company Website</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-5">
      <div class="panel panel-default fixed-panel-size">
        <div class="panel-heading">
          <h5 class="panel-title">Time Off Requests</h5>
        </div>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Date</th>
              <th>Request</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Some Task bi lydat</td>
              <td>20th May</td>
              <td>Vacation</td>
              <td><a href="#" class="text-success"> <i class="la la-check"></i></a> <a href="#" class="text-danger"> <i class="la la-times"></i></a></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Some Task bi lydat</td>
              <td>20th May</td>
              <td>Vacation</td>
              <td><a href="#" class="text-success"> <i class="la la-check"></i></a> <a href="#" class="text-danger"> <i class="la la-times"></i></a></td>
            </tr>
            <tr>
              <td>3</td>
              <td>Some Task bi lydat</td>
              <td>20th May</td>
              <td>Vacation</td>
              <td><a href="#" class="text-success"> <i class="la la-check"></i></a> <a href="#" class="text-danger"> <i class="la la-times"></i></a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-default fixed-panel-size">
        <div class="panel-heading">
          <h5 class="panel-title">Upcoming Holidays</h5>
        </div>
        <div class="list-group">
          <a href="#" class="list-group-item">
            <p><i class="la la-arrow-right"></i> Eid Fitr <small class="pull-right">24th Oct</small></p>
          </a>
          <a href="#" class="list-group-item active">
            <p><i class="la la-arrow-right"></i> Independence Day <small class="pull-right">6th March</small></p>
          </a>
          <a href="#" class="list-group-item">
            <p><i class="la la-arrow-right"></i> Founders Day <small class="pull-right">24th Oct</small></p>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
