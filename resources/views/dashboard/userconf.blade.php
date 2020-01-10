@extends('dashboard.index')
@section('title','User Configuration')
@section('aktifuser','active')
@section('content')
<!-- Default box -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Category</h3>

        <div class="card-tools">
            <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahkategori">
                <i class=" fas fa-plus-circle"></i> Tambah data pengguna
            </a>
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
        {{-- MODAL TAMBAH KATEGORI --}}
        <div class="modal fade" id="tambahkategori">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" style="color: #000 !important;">Tambah data pengguna</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/tambah-data-kategori" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group" style="color: #000 !important;">
                                <label for="kategori">Nama kategori</label>
                                <input type="text" name="nama_kategori" id="nama_kategori" class="form-control"
                                    placeholder="Masukkan nama kategori" autofocus>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        {{-- END MODAL TAMBAH KATEGORI --}}
    </div>
    <?php $i=1 ?>
    <div class="card-body">
        <table id="tableJs" class="table table-bordered table-hover">
            {{-- ALERT  --}}
            @if(session('sukses'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="far fa-check-circle"></i> Berhasil!</strong> {{session('sukses')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            {{-- END ALERT --}}
            <thead>
                <tr>
                    <th width="10px">No.</th>
                    <th>Nama Lengkap</th>
                    <th>Username</th>
                    <th>Status</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($userdata->count()>0)
                @foreach ($userdata as $user)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$user->name}}
                    </td>
                    <td>{{$user->status}}</td>
                    <td>{{$user->role}}</td>
                    <td><a href="/delete-kategori/{{$user->id}}" class="btn btn-danger btn-sm"><i
                                class="fas fa-trash"></i></a> <a href="/update-kategori/{{$user->id}}"
                            class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a></td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="3" class="text-center">No data founded!</td>
                </tr>
                @endif
            </tbody>
            <tfoot>
                <tr>
                    <th>No.</th>
                    <th>Kategori</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>

    <!-- /.card-footer-->
</div>
@endsection
