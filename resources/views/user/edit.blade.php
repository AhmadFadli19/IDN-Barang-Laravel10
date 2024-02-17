@extends('app')
@section('main')


    <!-- container -->

    <div class="container">
        <div class="row justify-content-center">
            
            <!-- card -->
            <div class="card mt-4 bg-black bg-opacity-10">
                
                <div class="card-header">
                Ubah Data PIC Ruangan
                </div>
                <div class="card-body">
                    
                    <form action="{{ route('user.update', $user->id) }}" method="post">
                        @csrf
                        @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nama Lengkap</span>
                                <input type="text" class="form-control" placeholder="Nama Lengkap" name="name" value="{{ $user->name }}">
                            </div>
                        </div>
                    
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nama Panggilan</span>
                                <input type="text" class="form-control" placeholder="nama" name="username" value="{{ $user->username }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Email</span>
                                <input type="email" class="form-control" placeholder="@example.com" name="email" value="{{ $user->email }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">password</span>
                                <input type="password" class="form-control" placeholder="****" name="password">
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

        

        </div>
        <a href="{{ url('user') }}" type="button" class="btn btn-info mt-3"><i class="bi bi-backspace-fill"></i></a>

    </div>


    <!-- container end -->
    
@endsection