@extends('layout.ceria')

@section('title', 'BAGIAN')

@section('judulhalaman', 'Detail Bagian')

@section('isikonten')

<div class="col-sm-offset-2 col-sm-10">
    <button class="btn btn-warning" type="reset" value="kembali"><a href="/bagian">Kembali</a></button>
</div>


        @foreach($pegawai as $p)
        <div class="container">
            <div class="form-body">
                <div class="row">
                    <div class="col-md-4">
                        <label>Nama</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <label class="control-label col-sm-2">{{ $b->namabagian }}</label>
                    </div>
                    <div class="col-md-4">
                        <label>Jumlah</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <label class="control-label col-sm-2">{{ $b->jumlahbagian }}</label>
                    </div>
                    <div class="col-md-4">
                        <label>Tersedia</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <label class="control-label col-sm-2">{{ $b->tersedia}}</label>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
