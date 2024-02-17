@extends('app')
@section('main')
    <!-- container -->

    <div class="container">
        <div class="row justify-content-center">
            <!-- card -->
            <div class="card mt-4 bg-black bg-opacity-10">
                <div class="card-header">
                    Ubah Data kategori
                </div>
                <div class="card-body">
                    <form action="{{ route('kategori.update', $kategori->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-10">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nama kategori</span>
                                <input type="text" class="form-control" placeholder="Nama kategori" name="nama_kategori" value="{{ $kategori->nama_kategori }}">
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
                    <a href="{{ url('kategori') }}" type="button" class="btn btn-info"><i class="bi bi-backspace-fill"></i></a> 
                </div>
            </div>
            <!-- card end -->
        </div>
    </div>


    <!-- container end -->
@endsection