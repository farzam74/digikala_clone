@extends('layouts.app')

    @section('content')


            <script>
                var msgLiked='{{session('liked')}}';
                var likeExist='{{session()->has('liked')}}';

                if (likeExist){
                    alert(msgLiked);
                }

            </script>

            <script>
                var msgDisliked='{{session('disliked')}}';
                var dislikeExist='{{session()->has('disliked')}}';

                if (dislikeExist){
                    alert(msgDisliked);
                }

            </script>

        <main class="single-product default" >

            @forelse($errors->all() as $error)
                {{$error}}
            @empty

            @endforelse
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav >
                            <div class="d-flex justify-content-end flex-row-reverse">

                                <div>
                                    {{$product->fa_title}}
                                </div>

                                <div>
                                    <a href="#" class="text-muted"><span>{{$category->name}}</span></a> /
                                </div>

                                @while($category->parentCategory()->first() !=null)
                                <div>
                                    <a href="#" class="text-muted"><span>{{$category->parentCategory()->first()->name}}</span></a> /

                                    @php
                                        $category=$category->parentCategory()->first();
                                    @endphp

                                </div>
                                @endwhile

                            </div>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <article class="product">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="product-gallery default">
                                        <a href="{{asset('storage/'.$product->primary_img)}}">
                                            <img class="zoom-img" id="img-product-zoom" src="{{asset('storage/'.$product->primary_img)}}" data-zoom-image="{{asset('storage/'.$product->primary_img)}}" width="411" />
                                        </a>
                                        <div id="gallery_01f" style="width:500px;float:left;">
                                            <ul class="gallery-items">

                                                @forelse($gallery as $image)
                                                <li>
                                                    <a href="{{asset('storage/'.$image)}}" class="elevatezoom-gallery active" data-update="" data-image="{{asset('storage/'.$image)}}" data-zoom-image="assets/img/product/2114766.jpg">
                                                        <img src="{{asset('storage/'.$image)}}" width="100" /></a>
                                                </li>

                                                @empty

                                                    <li>
                                                        <a href="{{asset('storage/'.$product->primary_img)}}" class="elevatezoom-gallery active" data-update="" data-image="{{asset('storage/'.$primary_img)}}" data-zoom-image="assets/img/product/2114766.jpg">
                                                            <img src="{{asset('storage/'.$primary_img)}}" width="100" /></a>
                                                    </li>

                                                @endforelse

                                            </ul>
                                        </div>
                                    </div>

                     </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="product-title default">
                                        <h1>
                                            {{$product->category()->first()->name}} {{$product->fa_title}}

                                            <span class="d-flex justify-content-start">{{$product->en_title}}</span>
                                        </h1>
                                    </div>



                                    <form action="" method="post">
                                    <div class="product-variants default">


                                        <span>انتخاب رنگ: </span>

                                        <div class="radio">

                                        @foreach($attributes as $attribute)

                                            @if(array_key_exists('رنگ',$attribute))
                                            <input type="radio" name="radio1" id="radio{{$loop->index}}" value="{{$attribute['رنگ']}}">
                                            <label for="radio{{$loop->index}}">
                                                {{$attribute['رنگ']}}
                                            </label>

                                            @endif

                                        @endforeach

                                        </div>


                                    </div>

                                    <div class="product-guarantee default">
                                        <i class="fa fa-check-circle"></i>
                                        <p class="product-guarantee-text">گارانتی اصالت و سلامت فیزیکی کالا</p>
                                    </div>

                                    <div class="price-product defualt">
                                        <div class="price-value">
                                            <del>
                                                {{$product->price}}
                                            </del>
                                        </div>

                                        <div class="price-value">

                                    {{--  calculate price with self discount and amazing offer discount--}}
                                            <span> {{($product->price)-($product->price)*(($product->amazingOffer()->first()->discount ?? 0)+$product->discount)/100}} </span>
                                            <span class="price-currency">تومان</span>
                                        </div>
                                        <div class="price-discount">
                                            <span>
                                                {{($product->amazingOffer()->first() != null) ? ($product->amazingOffer()->first()->discount.'% تخفیف شگفت انگیز+') : ''}}{{'%'.$product->discount}}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="product-add default">
                                        <div class="parent-btn">
                                            <button  type="submit" class="dk-btn dk-btn-info" type="submit">

                                                افزودن به سبد خرید

                                            </button>
                                        </div>
                                    </div>

                                </form>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 center-breakpoint">

                                    <div class="product-params default">
                                        <ul>


                                            @forelse($uniqueAtts as $key => $value)
                                                <li class="d-flex justify-content-start">
                                                    <span>{{$key}}</span> :
                                                    <span> {{$value}} </span>
                                                </li>
                                                @if($loop->index==3)
                                                    @break
                                                @endif
                                            @empty

                                            @endforelse

                                            <li>
                                                <span>ویژگی‌های خاص: </span>
                                                <span>
                                                    <ul>
                                                    @forelse($otherAtts as $value)
                                                            <li> {{$value}} </li>

                                                    @empty

                                                    @endforelse
                                                    </ul>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                        <div class="col-12 default no-padding">
                            <div class="product-tabs default">
                                <div class="box-tabs default">
                                    <ul class="nav" role="tablist">
                                        <li class="box-tabs-tab">
                                            <a class="active" data-toggle="tab" href="#desc" role="tab" aria-expanded="true">
                                                <i class="now-ui-icons objects_umbrella-13"></i> نقد و بررسی
                                            </a>
                                        </li>
                                        <li class="box-tabs-tab">
                                            <a data-toggle="tab" href="#params" role="tab" aria-expanded="false">
                                                <i class="now-ui-icons shopping_cart-simple"></i> مشخصات
                                            </a>
                                        </li>
                                        <li class="box-tabs-tab">
                                            <a data-toggle="tab" href="#comments" role="tab" aria-expanded="false">
                                                <i class="now-ui-icons shopping_shop"></i> نظرات کاربران
                                            </a>
                                        </li>

                                        @auth
                                        <li class="box-tabs-tab">
                                            <a data-toggle="tab" href="#questions" role="tab" aria-expanded="false">
                                                <i class="now-ui-icons ui-2_settings-90"></i> ارسال نظر
                                            </a>
                                        </li>
                                        @endauth

                                    </ul>
                                    <div class="card-body default">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="desc" role="tabpanel" aria-expanded="true">
                                                <article>
                                                    <h2 class="param-title">
                                                        نقد و بررسی تخصصی

                                                        <span>{{$product->category()->first()->name}} {{$product->fa_title}}</span>

                                                    </h2>
                                                    <di>
                                                        {!! $product->description !!}

                                                    </di>
                                                </article>
                                            </div>
                                            <div class="tab-pane params" id="params" role="tabpanel" aria-expanded="false">
                                                <article>
                                                    <h2 class="param-title">
                                                        مشخصات فنی
                                                        <span>{{$product->en_title}}</span>
                                                    </h2>
                                                    <div>
                                                        <h3 class="params-title">مشخصات کلی</h3>
                                                        <ul class="params-list">

                                                            @forelse($uniqueAtts as $key => $value)
                                                            <li>
                                                                <div class="params-list-key">
                                                                    <span class="block">{{$key}}</span>
                                                                </div>
                                                                <div class="params-list-value">
                                                                    <span class="block">
                                                                        {{$value}}
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            @empty

                                                            @endforelse

                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <h3 class="params-title">ویژگی های خاص</h3>
                                                        <p>{{$otherAttsP}}</p>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="tab-pane" id="comments" role="tabpanel" aria-expanded="false">
                                                <article>
                                                    <h2 class="param-title">
                                                        نظرات کاربران
                                                        <span> {{count($comments).'نظر'}}</span>
                                                    </h2>
                                                    <b>مرتب سازی بر اساس</b>
                                                    <a href="{{route('comments.sortbydate')}}" >جدیدترین</a> |
                                                    <a href="{{route('comments.sortbylike')}}">مفیدترین</a>

                                                    <div class="comments-area default">
                                                        <ol class="comment-list">
                                                            <!-- #comment-## -->
                                                            @forelse($comments as $comment)

                                                                <li>
                                                                    <div class="comment-body">
                                                                        <div class="comment-author">
                                                                            <img src="{{asset('storage/'.$comment->user()->first()->avatar)}}" class="avatar"><cite class="fn">{{$comment->user()->first()->name}}</cite>
                                                                            <span class="says">گفت:</span> </div>

                                                                        <div class="commentmetadata"><a href="#">
                                                                            {{$comment->created_at}}</a> </div>

                                                                        <p>{{$comment->content}}</p>

                                                                        <span class="ml-2"><a class="comment-reply-link" href="{{route('likes.store',['comment_id'=>$comment->id])}}"><i class="fa fa-thumbs-up"></i></a> {{count($comment->likes)}}</span>
                                                                        <span class="mr-2"><a class="comment-reply-link" href="{{route('dislikes.store',['comment_id'=>$comment->id])}}"><i class="fa fa-thumbs-down"></i></a> {{count($comment->dislikes)}}</span>
                                                                    </div>
                                                                </li>
                                                                <!-- #comment-## -->

                                                            @empty

                                                            @endforelse

                                                        </ol>
                                                    </div>
                                                </article>
                                            </div>
                                            @auth
                                            <div class="tab-pane form-comment" id="questions" role="tabpanel" aria-expanded="false">
                                                <article>
                                                    <h2 class="param-title">
                                                        افزودن نظر
                                                        <span>نظر خود را در مورد محصول مطرح نمایید</span>
                                                    </h2>
                                                    <form action="{{route('comments.store')}}" method="post" class="comment" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                                        <textarea class="form-control" placeholder="نظر" rows="5" name="content"></textarea>
                                                        <button class="btn btn-default" type="submit">ارسال نظر</button>
                                                    </form>
                                                </article>
                                            </div>
                                            @endauth
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    @endsection