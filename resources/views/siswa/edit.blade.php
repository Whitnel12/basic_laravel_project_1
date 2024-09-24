@extends('layout')

@section('konten')

{{-- route from the web.php where is the name --}}
<form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
  @csrf
  <label>NIS</label>
  <input type="number" name="nis" value="{{ $siswa->nis }}"  class="form-control mb-2">
  <label>NAMA</label>
  <input type="text" name="nama" value="{{ $siswa->nama }}" class="form-control mb-2">
  <label>ALAMAT</label>
  <input type="text" name="alamat" value="{{ $siswa->alamat }}" class="form-control mb-2">
  <label>NO HP</label>
  <input type="text" name="nohp" value="{{ $siswa->no_hp }}" class="form-control mb-2">
  <label>JENIS KELAMIN</label>
  <input type="text" name="jenis_kelamin" value="{{ $siswa->jenis_kelamin }}" class="form-control mb-2">
  <label>HOBI</label>
  <input type="text" name="hobi" value="{{ $siswa->hobi }}" class="form-control mb-2">

  <button class="btn btn-primary">Edit</button>
</form>

@endsection