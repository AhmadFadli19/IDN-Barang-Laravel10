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
                    <form action="{{route('barang.update', $barang->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nama Barang</span>
                                <input type="text" class="form-control" placeholder="Nama Barang" name="nama_barang" value="{{$barang->nama_barang}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">kategori Barang</label>
                            <select class="form-select" id="inputGroupSelect01" name="id_kategori">
                                <option selected value="{{$barang->kategori->id}}">{{$barang->kategori->nama_kategori}}</option>
                                @foreach($kategori as $row)
                                <option value="{{$row->id}}">{{$row->nama_kategori}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect02">Nama Ruangan</label>
                            <select class="form-select" id="inputGroupSelect02" name="id_ruangan">
                                <option selected value="{{$barang->ruangan->id}}">{{$barang->ruangan->nama_ruangan}}</option>
                                @foreach($ruangan as $row)
                                <option value="{{$row->id}}">{{$row->nama_ruangan}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect03">Stok/Satuan</label>
                            <input type="text" name="stok" class="form-control" value="{{$barang->stok}}">
                            <select class="form-select" id="inputGroupSelect03" name="satuan">
                                <option selected value="{{$barang->satuan}}">{{$barang->satuan}}</option>
                                <option value="unit">Unit</option>
                                <option value="kilogram">Kilogram</option>
                                <option value="butir">Butir</option>
                                <option value="liter">Liter</option>
                                <option value="lembar">Lembar</option>
                            </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect04">Kondisi</label>
                            <select class="form-select" id="inputGroupSelect04" name="kondisi">
                                <option selected value="{{$barang->kondisi}}">{{$barang->kondisi}}</option>
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
                    <a href="index.html" type="button" class="btn btn-info"><i class="bi bi-backspace-fill"></i></a> 
                </div>
            </div>
            <!-- card end -->
        
        </div>
    </div>


    <!-- container end -->
@endsection