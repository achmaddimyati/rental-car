@extends('layouts.admin')

@section('content')

<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Cars</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Cars</li>
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

                {{-- start content --}}
                <h4 class="card-title">Daftar Mobil</h4>
                                {{-- <h6 class="card-subtitle">Add class <code>.table</code></h6> --}}
                                <a href="{{ route('admin.cars.create') }}" class="btn pull-right btn-primary" >Tambah Mobil</a>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Mobil</th>
                                                <th>Gambar Mobil</th>
                                                <th>Status Mobil</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($cars as $car)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $car->nama_mobil }}</td>
                                                    <td>
                                                        <img src="{{ Storage::url($car->gambar) }}" width="200" height="100" alt="">
                                                    </td>
                                                    <td>{{ $car->harga_mobil }}</td>
                                                    <td>{{ $car->status }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.cars.edit', $car->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                                        <form onclick="return confirm('anda yakin hapus data ini?')" class="d-inline"  action="{{ route('admin.cars.destroy', $car->id) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-sm btn-danger" >Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="6" class="text-center" >Data Kosong</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>

                {{-- end of content --}}
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->

@endsection
