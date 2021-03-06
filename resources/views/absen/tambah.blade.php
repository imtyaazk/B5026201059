@extends('layout.ceria')

@section('title', 'Absen Pegawai')

<style>
    form{
        padding: 30px;
        width: 100%;
        margin: 10px, 10px, 10px, 10px;
        box-align: initial;
    }
</style>

@section('judulhalaman', 'Absen Pegawai')

@section('isikonten')

    <a href="/absen"> Kembali</a>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}
		Pegawai <select id="IDPegawai" name="IDPegawai" required="required">
            @foreach($pegawai as $p)
                <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
            @endforeach
        </select><br>
        <div class="form-group">
            <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
                <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                    <input type='text' class="form-control" name="tanggal" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#dtpickerdemo').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
                });
            </script>
            <br>
		Status <input type="radio" id="hadir" name="status" value="H">
        <label for="hadir">Hadir</label>
        <input type="radio" id="css" name="status" value="T" checked="checked">
        <label for="tidak">Tidak Hadir</label><br>

		<input type="submit" value="Simpan Data">
	</form>

@endsection
