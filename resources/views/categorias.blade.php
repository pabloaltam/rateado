@extends('bulma')

@section('seccion')
    <div class="section">
        <div class="container">
            <div class="section has-text-centered">
                <h1 class="title">Categorías</h1>
                <h2 class="subtitle">Aquí se encuentran las categorías disponibles.</h2>
            </div>
            <article class="message is-info">
                <div class="message-body">
                    <span class="icon has-text-info">
                        <i class="fas fa-info-circle"></i>
                    </span>
                    ¿No encuentras la categoría que buscas? <a style="text-decoration: none;" href="javascript:void(0)"><strong>Sugierela</strong>.</a>
                </div>
            </article>
            <div class="columns">
                <div class="column is-full">
                    <div class="tile is-ancestor" style="flex-wrap: wrap;">
                        @foreach($categorias as $item)
                            <div class="tile is-4 is-parent">
                                <article class="tile is-child box">
                                    <p class="title">{{$item->name}}</p>
                                    <p class="subtitle">{{$item->description}}</p>
                                </article>
                            </div>
                        @endforeach()
                    </div>
                </div>
            </div>
            {{--<table class="table is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categorias as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                    </tr>
                @endforeach()
                </tbody>
            </table>--}}
        </div>
    </div>

@endsection
