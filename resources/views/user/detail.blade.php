@extends('app')
@section('main')
    
<!-- container -->
    <div class="container">
        <div class="row justify-content-center">
            
            <!-- show data user -->
            <div class="card mt-4 bg-black bg-opacity-10">
                <div class="card-header">
                tambah Data PIC Ruangan
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                                <tr>
                                    <th scope="col">Nama Lengkap</th>
                                    <td scope="col">:</td>
                                    <td scope="col">{{ $user->name }}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Nama panggilan</th>
                                    <td scope="col">:</td>
                                    <td scope="col">{{ $user->username }}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Email</th>
                                    <td scope="col">:</td>
                                    <td scope="col">{{ $user->email }}</td>
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- show data end user-->

             <!-- show data ruangan-->
            <div class="card mt-4 bg-black bg-opacity-10">
                <div class="card-header">
                detail rungan
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                                <tr>
                                    <th scope="col">Nama Runagan</th>
                                    <th scope="col">nomer ruangan</th>
                                </tr>

                                <tr>
                                    <td scope="col">ruangan sabun</td>
                                    <td scope="col">ruang 623</td>
                                </tr>

                            
                        </table>
                    </div>
                <a href="{{ url('user') }}" type="button" class="btn btn-info"><i class="bi bi-backspace-fill"></i></a>
                </div>
            </div>
            <!-- show data end  ruangan-->
        
        </div>
    </div>
@endsection


    <!-- container end -->