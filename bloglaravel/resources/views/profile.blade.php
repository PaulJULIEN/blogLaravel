@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if( Auth::check())
                            DU BON GROS LARAVEL SA DARONNE QUI BOIT DU SPRITE
                        <ul>
                            <li>Ton blaze : {{ Auth::user()->name }}</li>
                            <li>Ton mail {{ Auth::user()->email }}</li>
                            <li>Enregistré le : {{ Auth::user()->created_at }}</li>
                        </ul>
                            @else
                                T'es pas co ptite merde
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
