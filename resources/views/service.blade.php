@extends('layouts.app')

@section('services') active @endsection
@section('title') Аренда авто @endsection
@section('description') Аренда авто @endsection
@section('content')

    <div style="background-color: #f3f3f3; padding-top: 30px; padding-bottom: 20px;">
        <div class="container bg-light rounded" style="padding-top: 25px;">
            <section>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Услуги</li>
                    </ol>
                </nav>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item"><a href="/services/">Услуги</a></li>
                        <li class="breadcrumb-item"><a href="/services/{{$service->category->slug}}/">{{$service->category->name}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$service->name}}</li>
                    </ol>
                </nav>
            </section>
            <section>
                <h1 class="display-4">{{$service->name}}</h1>
                <div class="row">
                    <div class="col-md-7">
                        <div >
                            <a href="{{asset('storage/images/services/origin/'.$service->image->filename)}}" data-fancybox="gallery">
                                <img src="{{asset('storage/images/services/resize/main/'.explode('.', $service->image->filename)[0].'.webp')}}" alt="" style="width: 100%">
                            </a>
                        </div>
                        <div>
                            <div class="row" style="margin-left: 0px;">
                                @foreach($service->images as $key => $image)
                                    @if($key == 0) @continue @endif
                                    <div style="width: 30%; padding: 0; margin: 5px;">
                                        <a href="{{asset('storage/images/services/origin/'.$image->filename)}}" data-fancybox="gallery">
                                            <img src="{{asset('storage/images/services/resize/sub/'.explode('.', $image->filename)[0].'.webp')}}" alt="" width="100%">
                                        </a>
                                    </div>
                               @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div style="padding-bottom: 60px;">
                            <p class="display-6"> <b>Цена:</b> {{$service->price}} руб.</p>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Оформить заказ</button>
                        </div>
                        @include('layouts.order', ['order_id' => $service->id])
                        <div style="padding-bottom: 60px;">
                            <h2 >Характеристики</h2>
                            <table class="table">
                                @foreach($service->options as $option)
                                    <tr>
                                        <td>{{$option->name}}</td>
                                        <td>{{$option->value}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>

                    </div>
                </div>

            </section>

            <section style="padding: 50px;">
                <h2>Описание</h2>
                {!! $service->description !!}
            </section>
            <section style="padding: 50px;">
                <h2>Похожие проекты</h2>
                <div class="row">
                    @foreach($services as $service)

                            <div class="card" style="width: 18rem; margin: 5px; border: none; box-shadow: 0px 0px 1px 1px #f3f3f3">
                                <a href="/services/{{$service->category->slug}}/{{$service->slug}}" style="text-decoration: none; color: black">
                                <img src="{{asset('storage/images/services/resize/another/'.explode('.', $image->filename)[0].'.webp')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$service->name}}</h5>
                                    <p class="card-text">{{$service->price}} руб.</p>

                                </div>
                        </a>
                            </div>


                    @endforeach
                </div>
            </section>
            <section style="padding: 50px;">
                <div  class="alert alert-primary" role="alert">
                    <h3>Остались вопросы?</h3>
                    <p>
                        Получите бесплатную консультацию по подбору и получению авто от нашего эксперта по телефону:
                    </p>
                    <a href="#" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">Позвонить</a>
                </div>
            </section>
        </div>
    </div>


@endsection
