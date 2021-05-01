@extends('layouts.master')
@section('content-header')
      <h1>
        Edit
        <small>Employee</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Update Employee</a></li>
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
              <h3 class="box-title">Update Employee</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/employee/update" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  
                  <input type="hidden" name="_token" value="{{ csrf_token()}}">
                  <input type="hidden" name="_method" value="PUT">
                  <input type="hidden" name="id" value="{{ $data->id }}" class="form-control">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  @error('name')
                    <div class="alert alert-danger">{{$message}} </div>
                  @enderror
                  <input type="text" class="form-control" value="{{ $data->name }}" name="name" placeholder="Enter nama">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" value="{{ $data->alamat }}" name="alamat" placeholder="Enter alamat">
                </div>
                <div class="form-group">
                  <label>Phone</label>
                  <input type="text" class="form-control" value="{{ $data->email }}" name="phone" placeholder="Enter phone">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" value="{{ $data->email }}" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                <label>Position</label>
                  <select class="form-control" name="position_id">
                       <option value ="{{$data->position_id}}">{{$data->position->name}}</option>
                       
                        @foreach ($position as $dept)

                          @if ($data->position_id != $dept -> id)
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