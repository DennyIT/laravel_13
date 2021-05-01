@extends('layouts.master')
@section('content-header')

@endsection

@section('content')
<div class="row">
      <h1>Pengunjung </h1>
      <div class="col-md-8">
     
      </div>
      <div class="col-md-8">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pengunjung</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Nama</th>
                  <th>Action</th>
                  
                </tr>
                @foreach($data as $d )
                <!-- <p>{{$d->nama}} </p> -->
                <tr>
                  <td>#</td>
                  <td>{{$d->name}}</td>
               
                </tr> 
                
                @endforeach
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
  </div>
      <!-- @foreach($data as $d )
      <p>{{$d->nama}} </p>
      <br>
      @endforeach -->
@endsection