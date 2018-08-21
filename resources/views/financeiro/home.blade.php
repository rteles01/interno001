@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Módulo financeiro</div>

                    <div class="panel-body">
                        {{--@if (session('status'))--}}
                            {{--<div class="alert alert-success">--}}
                                {{--{{ session('status') }}--}}
                            {{--</div>--}}
                        {{--@endif--}}

                        {{--You are logged in!--}}

                        <div>

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#entradas" aria-controls="entradas" role="tab" data-toggle="tab">Entradas</a></li>
                                <li role="presentation"><a href="#saidas" aria-controls="saidas" role="tab" data-toggle="tab">Saidas</a></li>
                                {{--<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">C</a></li>--}}
                                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Configurações</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="entradas">...</div>
                                <div role="tabpanel" class="tab-pane" id="saidas">...</div>
                                {{--<div role="tabpanel" class="tab-pane" id="messages">...</div>--}}
                                <div role="tabpanel" class="tab-pane" id="settings">...</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
