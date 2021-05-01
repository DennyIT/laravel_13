@extends('layouts.master')
@section('content-header')
     
@endsection

@section('content')
{{dd($data)}}
<div class="row">
      <h1>Position </h1>
      <div class="col-md-8">
        <a  href="/position/create">
          <button class="btn btn-block btn-success" type="button">
          Create Position
          </button>
        </a>
      </div>
      <div class="col-md-8">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Position</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Nama</th>
                  <th>Department</th>
                  <th>Action</th>

                  
                </tr>
                @foreach($data as $d )
                <!-- <p>{{$d->nama}} </p> -->
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$d->name}}</td>
                  <td>{{$d->department->name}}</td>
                  <td>
                    <a href="/position/edit {{$d->id}}">Edit</a>
                    <a href="/position/delete {{$d->id}}">Delete</a>
                  </td>
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