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
                                <li role="presentation"><a href="#addnew" aria-controls="addnew" role="tab" data-toggle="tab">Nova despesa</a></li>
                            </ul>




                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="entradas">

                                    <div class="table-responsive">
                                    <table class="datatable mdl-data-table dataTable" cellspacing="0"
                                           width="100%" role="grid" style="width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome despesa</th>
                                            <th>Descrição</th>
                                            <th>Status</th>
                                            <th>Nivel</th>
                                            <th>Valor</th>
                                            {{--<th>Salary</th>--}}
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>

                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="saidas">...</div>
                                {{--<div role="tabpanel" class="tab-pane" id="messages">...</div>--}}
                                <div role="tabpanel" class="tab-pane" id="settings">...</div>
                                <div role="tabpanel" class="tab-pane" id="addnew">

                                    @if(Session::has('message'))
                                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                                    @endif
                                    <div class="well">

                                        {!! Form::open(['url' => '/api/despesa', 'class' => 'form-horizontal']) !!}

                                        <fieldset>

                                                <legend>Cadastrar nova despesa </legend>

                                            <!-- Email -->
                                            <div class="form-group">
                                                {!! Form::label('text', 'Name:', ['class' => 'col-lg-2 control-label']) !!}
                                                <div class="col-lg-10">
                                                    {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Nome da despesa']) !!}
                                                </div>
                                            </div>

                                            {{--<!-- Password -->--}}
                                            {{--<div class="form-group">--}}
                                                {{--{!! Form::label('password', 'Password:', ['class' => 'col-lg-2 control-label']) !!}--}}
                                                {{--<div class="col-lg-10">--}}
                                                    {{--{!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Password', 'type' => 'password']) !!}--}}
                                                    {{--<div class="checkbox">--}}
                                                        {{--{!! Form::label('checkbox', 'Checkbox') !!}--}}
                                                        {{--{!! Form::checkbox('checkbox') !!}--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            <!-- Text Area -->
                                            <div class="form-group">
                                                {!! Form::label('textarea', 'Descrição', ['class' => 'col-lg-2 control-label']) !!}
                                                <div class="col-lg-10">
                                                    {!! Form::textarea('descricao', $value = null, ['class' => 'form-control', 'rows' => 3]) !!}
                                                    <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                                                </div>
                                            </div>


                                            <!-- Select With One Default -->
                                            <div class="form-group">
                                                {!! Form::label('select', 'Categoria', ['class' => 'col-lg-2 control-label'] )  !!}
                                                <div class="col-lg-10">
                                                    {!!  Form::select('select', ['S' => 'Small', 'L' => 'Large', 'XL' => 'Extra Large', '2XL' => '2X Large'],  'S', ['class' => 'form-control' ]) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('select', 'Nível', ['class' => 'col-lg-2 control-label'] )  !!}
                                                <div class="col-lg-10">
                                                    {!!  Form::select('nivel', [1 => 'Small', 2 => 'Large', 3 => 'Extra Large', '2XL' => '2X Large'],  'S', ['class' => 'form-control' ]) !!}
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('select', 'Status', ['class' => 'col-lg-2 control-label'] )  !!}
                                                <div class="col-lg-10">
                                                    {!!  Form::select('status', [1 => 'Despesa', 2 => 'Receita', 3 => 'Despesa Provisionada'],  'S', ['class' => 'form-control' ]) !!}
                                                </div>
                                            </div>

                                            <!-- Select Multiple -->
                                            {{--<div class="form-group">--}}
                                                {{--{!! Form::label('multipleselect[]', 'Multi Select', ['class' => 'col-lg-2 control-label'] )  !!}--}}
                                                {{--<div class="col-lg-10">--}}
                                                    {{--{!!  Form::select('multipleselect[]', ['honda' => 'Honda', 'toyota' => 'Toyota', 'subaru' => 'Subaru', 'ford' => 'Ford', 'nissan' => 'Nissan'], $selected = null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            <!-- Submit Button -->
                                            <div class="form-group">
                                                <div class="col-lg-10 col-lg-offset-2">
                                                    {!! Form::submit('Cadastrar', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
                                                </div>
                                            </div>


                                        </fieldset>

                                        {!! Form::close()  !!}

                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- DataTables -->
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- Scripts -->
{{--<script src="{{ asset('js/app.js') }}"></script>--}}
<script>

    $(document).ready(function() {
        $('.datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url('/despesas') }}',
            columnDefs: [{
                targets: [0, 1, 2],
                className: 'mdl-data-table__cell--non-numeric'
            }],


        });
    });
</script>