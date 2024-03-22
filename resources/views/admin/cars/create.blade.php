@extends('layouts.admin')

@section('content')

<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Cars</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Cars</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
    </div>

</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <form action="{{ route('admin.cars.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_mobil">Nama Mobil</label>
                        <input type="text" name="nama_mobil" class="form-control" value="{{ old('nama_mobil') }}" >
                    </div>
                    <div class="form-group">
                        <label for="harga_mobil">Harga Mobil</label>
                        <input type="number" name="harga_mobil" class="form-control" value="{{ old('harga_mobil') }}" >
                    </div>
                    <div class="form-group">
                        <label for="bahan_bakar">Bahan Bakar</label>
                        <input type="text" name="bahan_bakar" class="form-control" value="{{ old('bahan_bakar') }}" >
                    </div>
                    <div class="form-group">
                        <label for="jumlah_kursi">Jumlah Kursi</label>
                        <input type="number" name="jumlah_kursi" class="form-control" value="{{ old('jumlah_kursi') }}"  >
                    </div>
                    <div class="form-group">
                        <label for="transmisi">Transmisi</label>
                        <select name="transmisi" id="transmisi" class="form-control" >
                            <option value="manual">Manual</option>
                            <option value="otomatis">Otomatis</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control" >
                            <option value="tersedia">Tersedia</option>
                            <option value="tidak tersedia">Tidak Tersedia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control" >{{ old('deskripsi') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="p3k">P3K</label>
                        <select name="p3k" id="p3k" class="form-control" >
                            <option value="1">Tersedia</option>
                            <option value="0">Tidak Tersedia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="audio">Audio</label>
                        <select name="audio" id="audio" class="form-control" >
                            <option value="1">Tersedia</option>
                            <option value="0">Tidak Tersedia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="charger">Charger</label>
                        <select name="charger" id="charger" class="form-control" >
                            <option value="1">Tersedia</option>
                            <option value="0">Tidak Tersedia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ac">AC</label>
                        <select name="ac" id="ac" class="form-control" >
                            <option value="1">Tersedia</option>
                            <option value="0">Tidak Tersedia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gambar" ></label>
                        <input type="file" class="form-control" name="gambar"  >
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" >Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->

@endsection
