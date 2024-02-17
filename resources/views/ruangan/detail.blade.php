@extends('app')
@section('main')
 <!-- container -->

    <div class="container">
        <div class="row justify-content-center">
        

            <!-- show data -->

            <div class="card bg-black bg-opacity-10 mt-4">
                <div class="card-heade">
                    Data Ruangan
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" >
                                <tr>
                                    <th scope="col">Nama Ruangan</th>
                                    <td scope="col">:</td>
                                    <td scope="col">{{ $ruangan->nama_ruangan }}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Nomer Ruangan</th>
                                    <td scope="col">:</td>
                                    <td scope="col">{{ $ruangan->nomor_ruangan }}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Ukuran Ruangan</th>
                                    <td scope="col">:</td>
                                    <td scope="col">
                                        @if ($ruangan->ukuran == 'small')
                                        <span>small</span>
                                        @elseif ($ruangan->ukuran == 'medium')
                                        <span>medium</span>        
                                        @elseif ($ruangan->ukuran == 'large')
                                        <span>large</span> 
                                        @endif     
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col">PIC Ruangan</th>
                                    <td scope="col">:</td>
                                    <td scope="col">{{ $ruangan->users->name }}</td>
                                </tr>
                        </table>
                    </div>
                    <a href="{{ url('ruangan') }}" type="button" class="btn btn-info"><i class="bi bi-backspace-fill"></i></a>    
                </div>
            </div>

            <!-- show data end -->

        

        </div>
    </div>


    <!-- container end -->\
    
@endsection