@extends('main')
@section('content')

    <section class="container" id="dadosform">
        <div class="row">
            <div class="col-md-5">
                <img src="{{ asset('img/velanova.png') }}" width="100%" alt="">                
            </div>
            <div class="col-md-7">
                <div class="row mb-1">
                    <div class="col-md-12">
                        <h4>Nome:</h4>
                    </div>
                    <div class="col-md-12">
                        <h3>{{$oracao->nome}}</h3>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-md-12">
                        <h4>E-mail:</h4>
                    </div>
                    <div class="col-md-12">
                        <h3>{{$oracao->email}}</h3>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-md-12">
                        <h4>Para quem:</h4>
                    </div>
                    <div class="col-md-12">
                        <h3>{{$oracao->pquem}}</h3>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-md-12">
                        <h4>Intenção:</h4>
                    </div>
                    <div class="col-md-12">
                        <h3>{{$oracao->intencao}}</h3>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-md-12">
                        <h4>Solicitação:</h4>
                    </div>
                    @php
                        $categorias = [1 => 'Família', 2 => 'Saúde', 3 => 'Ação de Graças', 4 => 'Falecimento', 5 => 'Aniversário de nascimento', 6 => 'Aniversário de casamento', 7 => 'Profissional', 8 => 'Financeiro', 9 => 'Estudos', 10 => 'Igreja', 11 => 'Papa', 12 => 'Mundo', 13 => 'Outro'];
                    @endphp
                    <div class="col-md-12">
                        <h3>{{$categorias[$oracao->solicitacao]}}</h3>
                    </div>
                </div>
                <div class="row ">
                    <div class="div">
                        <a href="{{ route('oracoes.editar', [$oracao->id]) }}">
                            <button class="btn btn-info">Editar</button>
                        </a>
                        <a href="{{ route('oracoes.deletar', [$oracao->id]) }}">
                            <button class="btn btn-info">Excluir</button>
                        </a>    
                    </div>            

                </div>
            </div>
        </div>




    </section>




























@endsection
