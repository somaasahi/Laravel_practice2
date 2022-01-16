@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit User</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            <form method="POST" enctype="multipart/form-data" action="{{ route('user.update',$user->id) }}">
                @csrf
                <input type="hidden" name="id" value="{{ $user->id }}">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="name">name</label>
                        <input name="name" class="form-control"
                    value="{{ $user->name }}" type="text">

             </div>

                    <!-- Context Field -->
                    <div class="form-group col-sm-12 col-lg-12">
                        <label for="email">email</label>
                        <input name="email" class="form-control"
                        value="{{ $user->email }}" type="text">
                    </div>
                    <div class="form-group col-sm-12 col-lg-12">
                        <label for="image">profile_img</label>
                        <img src="{{ asset(Auth::user()->icon)}}"
                        class="user-image elevation-2" alt="User Image" style="width: 30%">
                        <input type="file" class="form-control-file" name="icon" value="{{ $user->icon }}">

                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">
                    Update
                </button>
                <a href="{{ route('user.show') }}" class="btn btn-default">Cancel</a>
            </div>

        </form>

        </div>
    </div>

@endsection
