@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Siswa</div>

                <div class="card-body">
                <form action="{{ route('siswa.store') }}" method="post" encttype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-2" >
                    <label >Nis</label>
                    <input type="number" class="form-control" name="nis" placeholder="masukan Nis Anda">
                    </div>
                    <div class="form-group mb-2">
                    <label >Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="masukan Nama Anda">
                    </div>
                    <div class="form-group mb-2">
                    <label >Jenis Kelamin</label><br>
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-Laki">Laki-Laki
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan">Perempuan
                    </div>
                    <div class="form-group mb-2">
                    <label >Kelas</label>
                    <select class="form-control" name="kelas">
                        <option value="">Pilih Kelas Anda</option>
                        <option value="XI RPL 1">XI RPL 1</option>
                        <option value="XI RPL 2">XI RPL 2</option>
                        <option value="XI RPL 3">XI RPL 3</option>
                    </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
