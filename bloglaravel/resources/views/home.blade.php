@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Session connecté</div>

                    <div class="panel-body">
                        Vous êtes connectés !
                            <p>
                        @if(Auth::check())
                            Bonjour {{ Auth::user()->name }}, vous allez reçevoir un e-mail de confirmation à l'adresse suivante : <br>
                            {{ Auth::user()->email }}. Merci de bien vouloir l'activer
                        @endif
                            </p>
                        <img src="{!!asset('../../img/valid.png')!!}">


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
