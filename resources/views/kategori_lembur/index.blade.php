@extends('layouts.app')
@section('kategori')
    active
@endsection
@section('content')
<div class="container">
	<div class="panel panel-info">
		<div class="panel-heading"><center><h1>Kategori Lembur</h1></center></div>
		<div class="panel-body">
		<a class="btn btn-primary" href="{{url('kategori/create')}}">Tambah Data</a><br><br>
			<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr class="bg-primary">
				<th>No</th>
				<th>Kode Kategori Lembur</th>
				<th>Nama Golongan</th>
				<th>Nama Jabatan</th>
				<th>Besar Uang</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		@php $no=1; @endphp
		<tbody>
			@foreach($kategori as $data)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$data->kode_l}}</td>
				<td>{{$data->golongan->nama_g}}</td>
				<td>{{$data->jabatan->nama_j}}</td>
				<td>{{$data->besar_uang}}</td>
				<td>
					<a href="{{route('kategori.edit',$data->id)}}" class='btn btn-warning'> Edit </a>
				</td>
				<td>
					{!! Form::open(['method'=>'DELETE','route'=>['kategori.destroy',$data->id]]) !!}
					{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	

@endsection