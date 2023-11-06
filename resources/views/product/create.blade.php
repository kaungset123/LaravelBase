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
<h1 class="text-center"> Here is Product Create Page </h1>
@endSection