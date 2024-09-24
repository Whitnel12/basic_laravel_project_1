@extends('layout')

@section('konten')

{{-- route from the web.php where is the name --}}
<form action="{{ route('siswa.submit') }}" method="POST">
  @csrf
  <label>NIS</label>
  <input type="number" name="nis" class="form-control mb-2">
  <label>NAMA</label>
  <input type="text" name="nama" class="form-control mb-2">
  <label>ALAMAT</label>
  <input type="text" name="alamat" class="form-control mb-2">
  <label>NO HP</label>
  <input type="text" name="nohp" class="form-control mb-2">
  <label>JENIS KELAMIN</label>
  <input type="text" name="jenis_kelamin" class="form-control mb-2">
  <label>HOBI</label>
  <input type="text" name="hobi" class="form-control mb-2">

  <button class="btn btn-primary">Tambah</button>
</form>

@endsection