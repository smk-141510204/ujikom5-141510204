@extends('layouts.app')
@section('content')

<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading"><center><h1>Daftar Gaji</h1></center></div>
        <div class="panel-body">
        
            
         <table class="table table-striped table-hover table-bordered">
                        
         <div class="col-md-12">
          <center>

                        <h3>Nama : {{$penggajian->Tunjangan_pegawai->Pegawai->User->name}}</h3>
                        <h4>NIP:{{$penggajian->Tunjangan_pegawai->Pegawai->nip}}</h4>
                        <b>@if($penggajian->tanggal_pengambilan == ""&&$penggajian->status_pengambilan == "0")
                            Gaji Belum Diambil
                        @elseif($penggajian->tanggal_pengambilan == ""||$penggajian->status_pengambilan == "0")
                            Gaji Belum Diambil
                        @else
                            Gaji Sudah Diambil Pada {{$penggajian->tanggal_pengambilan}}
                        @endif</b>
                        <h5>Gaji Lembur Sebesar Rp.{{$penggajian->jumlah_uang_lembur}}<hr> Gaji Pokok Sebesar Rp.{{$penggajian->gaji_pokok}}<hr>Mendapat Tunjangan Sebesar Rp.{{$penggajian->Tunjangan_pegawai->Tunjangan->besar_uang}}<hr>Jadi Total Gaji Rp.{{$penggajian->total_gaji}}
                        </h5>
                        
 <hr><a class="btn btn-success col-md-12" href="{{url('penggajian')}}">Kembali</a>
                                
                        </center>
                        </div> 
                        
                    </table>
              
        
@endsection