@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Ppdb</div>

                <div class="card-body">
                <form action="{{ route('ppdb.store') }}" method="post" encttype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-2" >
                    <label >Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="masukan Nama Anda">
                    </div>
                    <div class="form-group mb-2">
                    <label >Jenis Kelamin</label><br>
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-Laki">Laki-Laki
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan">Perempuan
                    </div>
                    <div class="form-group mb-2">
                    <label >Agama</label>
                    <select class="form-control" name="agama">
                        <option value="">Pilih Agama Anda</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Budha">Budha</option>
                        <option value="Khatolik">Khatolik</option>
                    </select>
                    <div class="form-group mb-2">
                    <label >alamat</label>
                    <input type="text-area" class="form-control" name="alamat" placeholder="masukan alamat Anda">
                    </div>
                    <div class="form-group mb-2" >
                    <label >Telepon</label>
                    <input type="number" class="form-control" name="telepon" placeholder="masukan No Anda">
                    </div>
                    <div class="form-group mb-2" >
                    <label >Asal Sekolah</label>
                    <input type="text" class="form-control" name="asal_sekolah" placeholder="masukan Nama Anda">
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
