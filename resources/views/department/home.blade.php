@extends('layouts.master')
@section('content-header')

@endsection

@section('content')
<div class="row">
      <h1>Departemen </h1>
      <div class="col-md-8">
        <a  href="/department/create">
          <button class="btn btn-block btn-success" type="button">
          Create Departemen
          </button>
        </a>
      </div>
      <div class="col-md-8">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Department</h3>
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
                  <td>
                    <a href="/department/show {{$d->id}}">Show</a>
                    
                  </td>
                
                  <td>
                    <a href="/department/edit {{$d->id}}">Edit</a>
                    |
                    <a href="/department/delete {{$d->id}}">Delete</a>
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