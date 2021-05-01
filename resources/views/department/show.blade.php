@extends('layouts.master')
@section('content-header')

@endsection

@section('content')
<div class="row">
      <h1>Detail </h1>
      <div class="col-md-8">
        
      </div>
      <div class="col-md-8">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Detail Department {{ $data->name}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>

                  <th style="width: 10px">#</th>
                  <th>Nama</th>
                 
                </tr>
                  @foreach ($data->position as $p )
                  
                  <tr>
                    <td>#</td>
                    <td>{{$p->name}}</td>
                  
                  </tr> 
                  
                  @endforeach
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
  </div>
     
@endsection