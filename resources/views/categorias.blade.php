@extends('bulma')

@section('seccion')
    <section class="section">
        <div class="container">
            <h1 class="title">Categorías</h1>
            <h2 class="subtitle">
                Definición de categorías existentes.
            </h2>
            <div class="is-half">
                <table class="table is-striped is-narrow is-hoverable is-fullwidth">
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
                </table>
            </div>
        </div>
    </section>
@endsection
