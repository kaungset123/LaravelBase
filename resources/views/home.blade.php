@extends('layout.master')
@section('title','Home Page')

@section('content')

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
                            <div class="col-md-4">
                                <h2 class="text-center">price 6$</h2>
                                <div class="thumbnail">
                                    <img src="{{asset('images/mala.jpg')}}" style="text-align:center;" width="230" height="250">
                                    <div class="caption">
                                        <h4 class="text-center">mala xingou</h4>
                                        <p>dkakkod</p>
                                        <p class="">
                                            <a class="btn btn-primary " role="button"> Detail</a>
                                            <a class="btn btn-primary pull-right"  role="button">Add To Cart</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h2 class="text-center">price 6$</h2>
                                <div class="thumbnail">
                                    <img src="{{asset('images/Tteokbokki.jpg')}}"  style="text-align:center;" width="230" height="250">
                                    <div class="caption">
                                        <h4 class="text-center">Tteokbokki</h4>
                                        <p>dkakkod</p>
                                        <p class="">
                                            <a class="btn btn-primary " role="button"> Detail</a>
                                            <a class="btn btn-primary pull-right"  role="button">Add To Cart</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h2 class="text-center">price 6$</h2>
                                <div class="thumbnail">
                                    <img src="{{asset('images/takoyaki.jpg')}}" style="text-align:center;" width="230" height="250">
                                    <div class="caption">
                                        <h4 class="text-center">takoyaki</h4>
                                        <p>dkakkod</p>
                                        <p class="">
                                            <a class="btn btn-primary " role="button"> Detail</a>
                                            <a class="btn btn-primary pull-right"  role="button">Add To Cart</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                    </div>         
                </div>
            </div>
        </div>  
    
@endsection