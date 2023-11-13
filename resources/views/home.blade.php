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
    <div class="col-md-6 offset-md-3">
        @if(session('status'))
        <p class="alert alert-success " x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
            {{session('status')}}
        </p>
        @endif
    </div>
    <i class="fa fa-home" aria-hidden="true" style="font-size: 25px;"></i>
    <div class="row">
        <div class="col-md-3">
            <aside class="" style="margin-top: 5rem;">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                        </div>
                    </div>
                </div>
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
                                <img src="{{asset('/uploads/' . $img)}}" width="230" height="250">
                                @endforeach
                            </div>
                        </div>
                        <div class="caption">
                            <h4 class="text-center">{{$product->title}}</h4>
                            <p>{{substr($product->description,0,100)}}</p>
                            <p class="">
                                <a class="btn btn-primary ms-2 " role="button"> Detail</a>
                                <a class="btn btn-primary pull-right me-2" role="button" href="{{action('App\Http\Controllers\PageController@add',$product->id)}}">
                                    Add To Cart
                                </a>
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