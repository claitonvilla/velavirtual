@extends('main')
@section('content')




    <section class="container" id="cadastro">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="formulario">
                    <div class="title">
                        <h1>Acender uma vela</h1>
                    </div>
                    <form action="{{ route('oracoes.update', [$oracao->id]) }}" method="POST" >
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Seu nome *</label>
                            <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" value="{{$oracao->nome}}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Seu E-mail *</label>
                            <input type="email" name='email' class="form-control" id="exampleFormControlInput1" value="{{$oracao->email}}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Para quem? *</label>
                            <input type="text" name="pquem" class="form-control" id="exampleFormControlInput1" value="{{$oracao->pquem}}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Intenção *</label>
                            <textarea name="intencao" class="form-control" id="exampleFormControlTextarea1" rows="3" required>{{$oracao->intencao}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Qual solicitação *</label>
                            <select name="solicitacao" class="form-control" id="exampleFormControlSelect1" required>
                                <option value="1" {{ ($oracao->solicitacao == '1')? 'selected':''  }}>Família</option>
                                <option value="2" {{ ($oracao->solicitacao == '2')? 'selected':''  }}>Saúde</option>
                                <option value="3" {{ ($oracao->solicitacao == '3')? 'selected':''  }}>Ação de Graças</option>
                                <option value="4" {{ ($oracao->solicitacao == '4')? 'selected':''  }}>Falecimento</option>
                                <option value="5" {{ ($oracao->solicitacao == '5')? 'selected':''  }}>Aniversário de nascimento</option>
                                <option value="6" {{ ($oracao->solicitacao == '6')? 'selected':''  }}>Aniversário de casamento</option>
                                <option value="7" {{ ($oracao->solicitacao == '7')? 'selected':''  }}>Profissional</option>
                                <option value="8" {{ ($oracao->solicitacao == '8')? 'selected':''  }}>Financeiro</option>
                                <option value="9" {{ ($oracao->solicitacao == '9')? 'selected':''  }}>Estudos</option>
                                <option value="10" {{ ($oracao->solicitacao == '10')? 'selected':''  }}>Igreja</option>
                                <option value="11" {{ ($oracao->solicitacao == '11')? 'selected':''  }}>Papa</option>                                
                                <option value="12" {{ ($oracao->solicitacao == '12')? 'selected':''  }}>Mundo</option>
                                <option value="13" {{ ($oracao->solicitacao == '13')? 'selected':''  }}>Outro</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input name="acept" class="form-check-input" {{($oracao->acept == true)? 'checked':''}} type="checkbox" value="1" id="defaultCheck1" required>
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