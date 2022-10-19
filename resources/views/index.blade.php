@extends('layouts.app')

@section('title') Аренда автомобилей @endsection
@section('description') Аренда автомобилей в Москве @endsection
@section('content')
    <div>
        <section>
            <div style="background-image: url('{{asset('storage/images/banner/631738a73a7cd.webp')}}');background-size: cover;
                background-repeat: no-repeat;
                background-position: center center; height: 60vh">
                <div class="container" style="height: 60vh;padding-top: 120px;">

                    <div style="background-color: rgb(38 36 36 / 74%); padding: 20px 10px">
                        <h1 class="display-4 text-light">Аренда автомобилей в Москве</h1>
                        <h2 class="lead text-light">Отправьте заявку, чтобы узнать, какие автомобили доступны прямо сейчас</h2>
                    </div>

                </div>
            </div>
        </section>
        <section>
            <div class="container" style="margin-top: 15px; margin-bottom: 20px;">
                <h3 >Услуги</h3>
                @include('services.items', ['services' => $services])
                <div class="col-md-2">
                    <a href="/services" class="btn btn-success">Показать все</a>
                </div>
            </div>
        </section>
        <div style="border-top: 1px solid #ddd"></div>
        <section style="padding-bottom: 35px; padding-top: 35px;">
            <div class="container" style="margin-top: 15px; margin-bottom: 20px;">
                <h3 >О компании</h3>
                <p class="lead">Описание о компании</p>

            </div>
        </section>
    </div>


@endsection
