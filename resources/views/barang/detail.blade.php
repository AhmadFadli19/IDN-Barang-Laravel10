@extends('app')
@section('main')
    <!-- container -->

    <div class="container">
        <div class="row justify-content-center">
            <!-- show data -->

            <div class="card bg-black bg-opacity-10 mt-4">
                <div class="card-heade">
                    Detail Barang
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" >
                                <tr>
                                    <th scope="col">Nomer Barang</th>
                                    <td scope="col">:</td>
                                    <td>{{$barang->nomor_barang}}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Nama kategori</th>
                                    <td scope="col">:</td>
                                    <td>{{$barang->kategori->nama_kategori}}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Nama Ruangan</th>
                                    <td scope="col">:</td>
                                    <td scope="col">{{ $barang->ruangan->nama_ruangan }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">kondisi</th>
                                    <td scope="col">:</td>
                                    <td scope="col">
                                        @if ($barang->kondisi == 'baik')
                                        <span>baik</span>
                                        @elseif ($barang->kondisi == 'rusak')
                                        <span>rusak</span>        
                                        @elseif ($barang->kondisi == 'tidak_layak')
                                        <span>tidak layak</span> 
                                        @endif     
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="col">Stok/Satuan</th>
                                    <td scope="col">:</td>
                                    <td>{{$barang->stok}} {{$barang->satuan}}</td>
                                </tr>
                            </table>
                    </div>
                    <a href="index.html" type="button" class="btn btn-info"><i class="bi bi-backspace-fill"></i></a>    
                </div>
            </div>

            <!-- show data end -->
        
        </div>
    </div>


    <!-- container end -->
@endsection
