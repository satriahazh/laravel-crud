@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data User
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control  @error('name') is-invalid @enderror"
                            value="{{$user->name}}" name="name" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email User</label>
                        <input type="email" class="form-control  @error('nis') is-invalid @enderror"
                            value="{{$user->name}}" name="email" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection