@extends('layouts.master')
@section('content-header')
      <h1>
        Create
        <small>Employe</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Employe</a></li>
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
              <h3 class="box-title">Insert Employe</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/employee/store" method="POST" enctype="multipart/form-data" >
           
              <div class="box-body">
              <div class="form-group">
                  
                  <input type="hidden" name="_token" value="{{ csrf_token()}}">
                  <input type="hidden" name="_method" value="POST">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  @error('name')
                    <div class="alert alert-danger">{{$message}} </div>
                  @enderror
                  <input type="text" class="form-control" name="name" placeholder="Nama">
                 
                
              </div>
              <div class="form-group">
             
                  <label>Alamat</label>
                  @error('name')
                    <div class="alert alert-danger">{{$message}} </div>
                  @enderror
                  <input type="text" class="form-control" name="alamat" placeholder="Alamat">
              </div>
              <div class="form-group">
                  <label>Phone</label>
                  @error('phone')
                    <div class="alert alert-danger">{{$message}} </div>
                  @enderror
                  <input type="text" class="form-control" name="phone" placeholder="phone">
              </div>
              <div class="form-group">
                  <label>Email</label>
                  @error('name')
                    <div class="alert alert-danger">{{$message}} </div>
                  @enderror
                  <input type="text" class="form-control" name="email" placeholder="email">
               </div>

              
              <div class="form-group">
              <label>Position</label>
              <select class="form-control" name="position_id">
                    @foreach ($position as $dept)
                       <option value ="{{$dept->id}}">{{$dept->name}}</option>
                    @endforeach
              </select>
              </div>

              <div class="form-group">
                  <label>Upload Photo</label>
                 
                  <input type="file" class="form-control" name="picture" >
               </div>
               
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

@endsection