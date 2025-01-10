@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Melihat Data Ppdb</div>

                <div class="card-body">
                <form action="{{ route('ppdb.update', $ppdb->id) }}" method="post" encttype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-2" >
                    <label >Nama</label>
                    <input type="text" class="form-control"  value="{{ $ppdb->nama }}" name="nama" disabled>
                    </div>
                    <div class="form-group mb-2">
                    <label >Jenis Kelamin</label><br>
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-Laki" disabled>Laki-Laki
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" disabled>Perempuan
                    </div>
                    <div class="form-group mb-2">
                    <label >Agama</label>
                    <select class="form-control" name="agama" disabled>
                        <option value="">Pilih Agama Anda</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Budha">Budha</option>
                        <option value="Khatolik">Khatolik</option>
                    </select>
                    <div class="form-group mb-2">
                    <label >alamat</label>
                    <input type="text-area" class="form-control"  value="{{ $ppdb->alamat }}" name="alamat" disabled>
                    </div>
                    <div class="form-group mb-2" >
                    <label >Telepon</label>
                    <input type="number" class="form-control"  value="{{ $ppdb->telepon }}" name="telepon" disabled>
                    </div>
                    <div class="form-group mb-2" >
                    <label >Asal Sekolah</label>
                    <input type="text" class="form-control"  value="{{ $ppdb->asal_sekolah }}" name="asal_sekolah" disabled>
                    </div>
                    </div>
                    <a href="{{ route('ppdb.index') }}" class="btn btn-primary">back</a>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
