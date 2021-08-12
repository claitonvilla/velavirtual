@extends('main')
@section('content')



    <section class="container introducao">
        <div class="row">
            <div class="col-md-12">
                <h1>Vela Virtual</h1>
                <div></div>
                <p>Acender uma vela virtual é uma forma de manter acesa a chama divina que irradia de nossa fé.</p>
                <p>O Projeto Juntos Pela Vida é apoiador desta iniciativa, e a sua contribuição é ajuda a manter viva a
                    chama das velas de centenas de fiéis. <i><b>"Eu sou a LUZ do mundo, aquele que me segue não andará nas
                            trevas,
                            mas terá a LUZ da vida” (João 8,12)."</b></i></p>
                <p>Acender velas é um meio de manter viva a chama de nossa fé diante da Luz de Deus. Nossa oração nos une
                    com a oração da Igreja e com Nosso Senhor Jesus Cristo, Vivo e Ressuscitado, a Luz do mundo.</p>
                <b>ACENDA SUA VELA E VAMOS SEGUIR JUNTOS, EM UMA MESMA ORAÇÃO!</b>
            </div>
        </div>
        <div class="row botao">
            <div class="col-md-12">
                <a href="{{ route('oracoes.cadastro') }}">
                    <button type="button" class="btn btn-primary btn-lg">Acender uma vela<i
                            class="fas fa-menorah"></i></button>
                </a>
            </div>
        </div>
        <div class="row oracoes">

            @foreach ($oracoes as $oracao)


                <div class="col-sm-3">
                    <div class='box'>
                        <div class="row">
                            <div class="col-6 icon">
                                <img src="{{ asset('img/vela.png') }}" height="60" alt="">
                                <span>{{ $oracao->created_at->format('d/m/Y') }}</span>
                            </div>
                            <div class="col-6 categorias">
                                @php
                                    $categorias = [1 => 'Família', 2 => 'Saúde', 3 => 'Ação de Graças', 4 => 'Falecimento', 5 => 'Aniversário de nascimento', 6 => 'Aniversário de casamento', 7 => 'Profissional', 8 => 'Financeiro', 9 => 'Estudos', 10 => 'Igreja', 11 => 'Papa', 12 => 'Mundo', 13 => 'Outro'];
                                @endphp
                                <div>
                                    {{ $categorias[$oracao->solicitacao] }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <h3><span> De:</span>{{ $oracao->nome }}</h3>
                                    <h3><span> Para:</span>{{ $oracao->pquem }}</h3>
                                </div>
                                <div class="effects">
                                    <a href="{{ route('oracoes.cadastro.dados', [$oracao->id]) }}">
                                        <button class="btn btn-info">Ver vela</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach



        </div>
    </section>
































@endsection
