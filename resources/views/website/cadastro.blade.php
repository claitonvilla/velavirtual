@extends('main')
@section('content')




    <section class="container" id="cadastro">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="formulario">
                    <div class="title">
                        <h1>Acender uma vela</h1>
                    </div>
                    <form action="{{ route('oracoes.cadastro.salvar') }}" method="POST" >
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Seu nome *</label>
                            <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Seu E-mail *</label>
                            <input type="email" name='email' class="form-control" id="exampleFormControlInput1" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Para quem? *</label>
                            <input type="text" name="pquem" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Intenção *</label>
                            <textarea name="intencao" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Qual solicitação *</label>
                            <select name="solicitacao" class="form-control" id="exampleFormControlSelect1" required>
                                <option value="1">Família</option>
                                <option value="2">Saúde</option>
                                <option value="3">Ação de Graças</option>
                                <option value="4">Falecimento</option>
                                <option value="5">Aniversário de nascimento</option>
                                <option value="6">Aniversário de casamento</option>
                                <option value="7">Profissional</option>
                                <option value="8">Financeiro</option>
                                <option value="9">Estudos</option>
                                <option value="10">Igreja</option>
                                <option value="11">Papa</option>                                
                                <option value="12">Mundo</option>
                                <option value="13">Outro</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input name="acept" class="form-check-input" type="checkbox" value="1" id="defaultCheck1" required>
                                <label class="form-check-label" for="defaultCheck1">
                                  Aceito os termos de uso e política de privacidade do portal.
                                </label>
                              </div>                            
                        </div>
                        <button class="btn btn-primary" type="submit">ENVIAR</button>
                    </form>
                </div>
            </div>
        </div>



    </section>

















































@endsection
