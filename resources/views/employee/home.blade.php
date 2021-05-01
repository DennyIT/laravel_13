@extends('layouts.master')
@section('content-header')
      <!-- <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol> -->
@endsection

@section('content')
<div class="row">
      <h1>Employe</h1>
      <div class="col-md-8">
        <a  href="/employee/create">
          <button class="btn btn-block btn-success" type="button">
          Create Employe
          </button>
        </a>
      </div>
      <div class="col-md-8">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Employe</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Picture</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Position</th>
                  <th>Action</th>

                  
                </tr>
                @foreach($data as $d )
                <!-- <p>{{$d->nama}} </p> -->
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>
                      @if ($d->picture)

                      <img class="img-responsive"
                      src="{{ asset('/storage/employee/'.$d->picture)}}"
                        alt="Photo">
                      @endif
                  
                  </td>
                  <td>{{$d->name}}</td>
                  <td>{{$d->alamat}}</td>
                  <td>{{$d->phone}}</td>
                  <td>{{$d->email}}</td>
                  <td>{{$d->position->name}}</td>
                  <td>
                    <a href="/employee/edit {{$d->id}}">Edit</a>
                    <a href="/employee/delete {{$d->id}}">Delete</a>
                  </td>
                </tr> 
                
                @endforeach
                
              </table>
              {{ $data->links() }}
            </div>
            <!-- /.box-body -->
          </div>
  </div>
      <!-- @foreach($data as $d )
      <p>{{$d->nama}} </p>
      <br>
      @endforeach -->
@endsection