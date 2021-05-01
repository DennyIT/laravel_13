@extends('layouts.master')
@section('content-header')
      <h1>
        Edit
        <small>Department</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Department</a></li>
        <li class="active">Create</li>
      </ol>
@endsection

@section('content')
<div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Departemen</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/department/update" method="POST" ectype="multipart/form-data">
              <div class="box-body">
              <div class="form-group">
                  
                  <input type="hidden" name="_token" value="{{ csrf_token()}}">
                  <input type="hidden" name="_method" value="PUT">
                  <input type="hidden" name="id" value="{{ $data->id }}" class="form-control">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" value="{{ $ata->name }}" name="name" placeholder="Enter nama">
                </div>
                
               
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

@endsection