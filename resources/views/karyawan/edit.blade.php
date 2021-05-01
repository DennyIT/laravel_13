@extends('layouts.master')
@section('content-header')
      <h1>
        Edit
        <small>Karyawan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Karyawan</a></li>
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
              <h3 class="box-title">Edit Karyawan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/karyawan/update" method="post" ectype="multipart/form-data">
              <div class="box-body">
              <div class="form-group">
                  
                  <input type="hidden" name="_token" value="{{ csrf_token()}}">
                  <input type="hidden" name="_method" value="PUT">
                  <input type="hidden" name="id" value="{{ $data->id }}" class="form-control">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" value="{{ $data->nama }}" name="nama" placeholder="Enter nama">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" value="{{ $data->alamat }}" name="alamat" placeholder="alamat">
                </div>
                <div class="form-group">
                  <label>Jabatan</label>
                  <input type="text" class="form-control" value="{{ $data->jabatan }}" name="jabatan" placeholder="jabatan">
                </div>
               
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

@endsection