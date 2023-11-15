@extends('layout.master')
@section('title','Register Page')

@section('content')
        <div class="card col-md-6 offset-md-3 mt-5">
            <form action="" method="post" class="p-5" enctype="multipart/form-data">
                <h1 class="text-center"> Role Creation Form </h1>
                @csrf
                @if(session('status'))
                    <p class="alert alert-success "  x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
                        {{session('status')}}
                    </p>
                @endif
                <div class="mb-3">
                    <div class="form-group">
                        <label for="role" class="form-label">Role Name</label>
                        <input type="text" class="form-control" name="name" value="{{old('name')}}" >
                        @error('name')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="d-flex justify-content-end mt-3 ">
                    <button type="reset" class="btn btn-sm bg-danger me-4 text-white" style="box-shadow: 1px 2px 9px black;">
                        cancel
                    </button>
                    <button type="submit" class="btn btn-sm bg-primary text-white" style="box-shadow: 1px 2px 9px black;">submit</button>
                </div>
            </form>
        </div>
@endsection