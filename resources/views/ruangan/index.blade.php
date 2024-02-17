@extends('app')
@section('main')

    

 <!-- container -->

    <div class="container">
        <div class="row justify-content-center">
            <!-- card -->
            <div class="card mt-4 bg-black bg-opacity-10">
                <div class="card-header">
                    tambah Data Ruangan
                </div>
                <div class="card-body">
                    <form action="{{ route('ruangan.store') }}" method="post" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nama Ruangan</span>
                                <input type="text" class="form-control" placeholder="Nama Ruangan" name="nama_ruangan">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Ukuran</label>
                            <select class="form-select" id="inputGroupSelect01" name="ukuran">
                                <option selected>Pilih...</option>
                                <option value="small">small</option>
                                <option value="medium">medium</option>
                                <option value="large">large</option>
                            </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect02">PIC Ruangan</label>
                            <select class="form-select" id="inputGroupSelect02" name="user_id">
                                <option selected>Pilih...</option>
                                @foreach ($user as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>


                        <div class="col-md-6">
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
                    Data Ruangan
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Ruangan</th>
                                    <th scope="col">Nomer Ruangan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ruangan as $item)
                                    
                                <tr>
                                    <td scope="row">{{ $item->nama_ruangan }}</td>
                                    <td>{{ $item->nomor_ruangan }}</td>
                                    <td>
                                        <form action="{{ route('ruangan.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        <a href="{{ route('ruangan.show', $item->id) }}" type="submit" class="btn btn-primary">
                                            <i class="bi bi-ticket-detailed"></i>
                                            Detail
                                        </a>
                                        <button type="submit" class="btn btn-danger" 
                                        onclick="return confirm('apakah anda akan menghapus {{ $item->nama_ruangan }}')">
                                            <i class="bi bi-file-earmark-x"></i>
                                            Delete
                                        </button>
                                        <a href="{{ route('ruangan.edit', $item->id) }}" type="button" class="btn btn-warning">
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