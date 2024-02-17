@extends('app')
@section('main')
    <!-- container -->

    <div class="container">
        <div class="row justify-content-center">
            <!-- card -->
            <div class="card mt-4 bg-black bg-opacity-10">
                <div class="card-header">
                    tambah Data Barang
                </div>
                <div class="card-body">
                    <form action="{{ route('barang.store') }}" method="post" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nama Barang</span>
                                <input type="text" class="form-control" placeholder="Nama Barang" name="nama_barang">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">kategori Barang</label>
                            <select class="form-select" id="inputGroupSelect01" name="id_kategori">
                                <option selected>select pilih...</option>
                                @foreach ( $kategori as $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->nama_kategori }}
                                </option>
                                @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect02">Nama Ruangan</label>
                            <select class="form-select" id="inputGroupSelect02" name="id_ruangan">
                                <option selected>select pilih...</option>
                                @foreach ( $ruangan as $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->nama_ruangan }}
                                </option>
                                @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect03">Stok/Satuan</label>
                            <input type="text" name="stok" class="form-control">
                            <select class="form-select" id="inputGroupSelect03" name="satuan">
                                <option selected>select pilih...</option>
                                <option value="unit">Unit</option>
                                <option value="kilogram">kilogram</option>
                                <option value="butir">butir</option>
                                <option value="lembar">lembar</option>
                            </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect04">Kondisi</label>
                            <select class="form-select" id="inputGroupSelect04" name="kondisi">
                                <option selected>select pilih...</option>
                                <option value="baik">baik</option>
                                <option value="rusak">rusak</option>
                                <option value="tidak_layak">tidak layak</option>
                            </select>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-folder-plus"></i>
                                Berhasil
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <!-- card end -->

            <!-- show data -->

            <div class="card mt-4 bg-black bg-opacity-10">
                <div class="card-header">
                    Data Barang
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nomer Barang</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">tempat</th>
                                    <th scope="col">Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang as $item)
                                <tr>
                                    <td scope="row">{{ $item->nomor_barang }}</td>
                                    <td scope="row">{{ $item->nama_barang }}</td>
                                    <td scope="row">{{ $item->ruangan->nama_ruangan }}</td>
                                    <td>
                                        <form action="{{ route('barang.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        <a href="{{ route('barang.show', $item->id) }}" type="submit" class="btn btn-primary">
                                            <i class="bi bi-ticket-detailed"></i>
                                            Detail
                                        </a>
                                        <button type="submit" class="btn btn-danger" 
                                        onclick="return confirm('apakah anda akan menghapus {{ $item->nama_barang }}')">
                                            <i class="bi bi-file-earmark-x"></i>
                                            Delete
                                        </button>
                                        <a href="{{ route('barang.edit', $item->id) }}" type="button" class="btn btn-warning">
                                            <i class="bi bi-pencil-square"></i>
                                            Edit
                                        </a>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- show data end -->
        
        </div>
    </div>


    <!-- container end -->
@endsection