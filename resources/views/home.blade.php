@extends('layout.master')
@section('title','Home Page')

@section('content')
    <style>
        div.scroll-container {
        background-color: #333;
        overflow: auto;
        white-space: nowrap;
        /* padding: 10px; */
        }

        div.scroll-container img {
        /* padding: 10px; */
        width: 100%;
}
    </style>

    <div class="container mt-4  ">
        <i class="fa fa-home" aria-hidden="true" style="font-size: 25px;"></i>
            <div class="row">
                <div class="col-md-3">
                    <aside class="" style="margin-top: 5rem;">
                        <ul id="side_bar" class="list-group ">
                            <li class="list-group-item"><a href="">Category Create</a></li>
                            <li class="list-group-item"><a href="{{url('products/create')}}">Product </a></li>
                            <li class="list-group-item"><a href="">Product Create</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-9 ">
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-md-4">
                                <h2 class="text-center">{{$product->price}} MMK</h2>
                                <div class="thumbnail">
                                    <div class="text-center">
                                        <!-- fetching only a picture -->
                                             <!-- <img src="{{asset('/uploads/' . unserialize($product->imgs)[0])}}"  width="230" height="250"> -->
                                            <!-- fetching all pictures -->
                                        <div class="scroll-container">
                                            @foreach(unserialize($product->imgs) as $img)
                                             <img src="{{asset('/uploads/' . $img)}}"  width="230" height="250">
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h4 class="text-center">{{$product->title}}</h4>
                                        <p>{{$product->description}}</p>
                                        <p class="">
                                            <a class="btn btn-primary ms-2 " role="button"> Detail</a>
                                            <a class="btn btn-primary pull-right me-2"  role="button">Add To Cart</a>
                                        </p>
                                    </div>
                                </div>
                            </div>  
                        @endforeach                     
                    </div>         
                </div>
            </div>
        </div>  
    
@endsection