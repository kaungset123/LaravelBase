@extends('layout.master')
@section('title','Product Create Page')

@section('content')
<style>
    a {
        text-decoration: none;
        color: black;
    }

    a:hover {
        color: black;
    }
</style>
<div class="container mt-4">
    <a href="{{url('/')}}">
        <i class="fa fa-home" aria-hidden="true" style="font-size: 25px;"></i>
    </a>
    <i class="fa fa-chevron-right" aria-hidden="true"></i>
    <span>Product</span>
</div>
<div class="col-md-6 offset-md-3">
    <div class="card mb-5" style="box-shadow: 1px 2px 9px black;" >
        <form action="" method="post" class="p-5" enctype="multipart/form-data">
            <h1 class="text-center">  Product Create Form </h1>
            {{csrf_field()}}
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
            @endforeach
            @if(session('status'))
                <p class="alert alert-success">{{session('status')}}</p>
            @endif
            <div class="">
                <div class="form-group">
                    <label for="title" class="form-label">title</label>
                    <input type="text" class="form-control" id="title" name="title" >
                </div>
            </div>
            <div class="">
                <div class="form-group">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" step="any" class="form-control" id="price" name="price" >
                </div>
            </div>

            <div class="form-group mt-3">
                <label for="description" class="mb-2">Description</label>
                <textarea class="form-control" id="description" name="description" rows="6" ></textarea>
            </div>
            <div class="form-group col-md-5 ">
                <label for="file"></label>
                <input type="file" class="form-control-file" id="file" name="file[]" multiple >
            </div>

            <div class="d-flex justify-content-end mt-3 ">
                <button type="reset" class="btn btn-sm bg-danger me-4 text-white" style="box-shadow: 1px 2px 9px black;">
                    cancel
                </button>
                <button type="submit" class="btn btn-sm bg-primary text-white" style="box-shadow: 1px 2px 9px black;">submit</button>
            </div>
        </form>
    </div>
</div>


@endSection