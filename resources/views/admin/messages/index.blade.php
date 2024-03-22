@extends('layouts.admin')

@section('content')

<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Messages</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Messages</li>
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
                <h4 class="card-title">Daftar Pesan</h4>
                                {{-- <h6 class="card-subtitle">Add class <code>.table</code></h6> --}}
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Subject</th>
                                                <th>Pesan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($messages as $message)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $message->nama }}</td>
                                                    <td>{{ $message->email }}</td>
                                                    <td>{{ $message->subject }}</td>
                                                    <td>{{ $message->pesan }}</td>
                                                    <td>{{ $message->pesan }}</td>
                                                    <td>
                                                        <form onclick="return confirm('anda yakin hapus data ini?')" class="d-inline"  action="{{ route('admin.messages.destroy', $message->id) }}" method="post">
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
@endsection
