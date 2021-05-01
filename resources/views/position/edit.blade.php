@extends('layouts.master')
@section('content-header')
      <h1>
        Edit
        <small>Position</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Update Position</a></li>
        <li class="active">Update</li>
      </ol>
@endsection

@section('content')
<div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update Position</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/position/update" method="POST" ectype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  
                  <input type="hidden" name="_token" value="{{ csrf_token()}}">
                  <input type="hidden" name="_method" value="PUT">
                  <input type="hidden" name="id" value="{{ $data->id }}" class="form-control">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" value="{{ $data->name }}" name="name" placeholder="Enter nama">
                </div>
                <div class="form-group">
                <label>Department</label>
                  <select class="form-control" name="department_id">
                       <option value ="{{$data->department_id}}">{{$data->department->name}}</option>
                       
                        @foreach ($department as $dept)

                          @if ($data->department_id != $dept -> id)
                            <option value ="{{$dept->id}}">{{$dept->name}}</option>
                          @endif
                        
                        @endforeach
                  </select>
                </div>
                
               
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

@endsection