@extends('app')
@section('main')

    <!-- container -->

    <div class="container">
        <div class="row justify-content-center">
            <!-- card -->
            <div class="card mt-4 bg-black bg-opacity-10">
                <div class="card-header">
                    tambah Data k ategori
                </div>
                <div class="card-body">
                    <form action="{{ route('kategori.store') }}" method="post">
                        @csrf
                        <div class="col-md-10">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nama kategori</span>
                                <input type="text" class="form-control" placeholder="Nama kategori" name="nama_kategori">
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
                    Data kategori
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nama kategori</th>
                                    <th scope="col">Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategori as $item)
                                <tr>
                                    <td scope="row">{{ $item->nama_kategori }}</td> 
                                    <td>
                                        <form action="{{ route('kategori.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        <button type="submit" class="btn btn-danger" 
                                        onclick="return confirm('apakah anda akan menghapus {{ $item->nama_kategori }}')">
                                            <i class="bi bi-file-earmark-x"></i>
                                            Delete
                                        </button>
                                        <a href="{{ route('kategori.edit', $item->id) }}" type="button" class="btn btn-warning">
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