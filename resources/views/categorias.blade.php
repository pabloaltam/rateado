@extends('bulma')

@section('seccion')
    <div class="section">
        <div class="container">
            {{--<div class="section has-text-centered">
                <h1 class="title">Categorías</h1>
                <h2 class="subtitle">Aquí se encuentran las categorías disponibles.</h2>
            </div>--}}
            <article class="message is-info">
                <div class="message-body">
                    <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                    </span>
                    ¿No encuentras la categoría que buscas? <a style="text-decoration: none;" href="javascript:void(0)"><strong>Sugiérela</strong>.</a>
                </div>
            </article>
            <div class="columns">
                <div class="column is-full">
                    <div class="tile is-ancestor" style="flex-wrap: wrap;">
                        @foreach($categories as $item)
                            <div class="tile is-4 is-parent">

                                <article class="tile is-child box">
                                    <span class="tag is-danger is-clearfix is-pulled-right">{{count($item->subcategory)}}</span>
                                    <p class="title">{{$item->name}}</p>
                                    <p class="subtitle">{{$item->description}}</p>
                                    {{--@foreach($item->subcategory as $subcat)
                                        <p class="font-weight-bold">{{$subcat->name}}</p>
                                    @endforeach--}}
                                </article>
                            </div>
                        @endforeach()
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
