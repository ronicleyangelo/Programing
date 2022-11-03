@extends('layouts.front')
@section('conteudo')
    <style>
        li.pontos {
            list-style: none;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-12 py-5">
                <div class="card">
                    <div class="card-header bg-warning rounded-2">
                        <h1 class="text-uppercase">Rotina do {{ $dados['mensagens']['name']  }}, no período da tarde</h1>
                        <p class="text-uppercase">{{ $dados['mensagens']['horarios'] }}</p>
                    </div>
                    <div class="card-body">
                        <div class="list-group list-group-flush">
                            <ul class="bg-light text-dark-50 bg-light">
                                <li>Qual horário saio do trabalho?</li>
                                    <ul>
                                        <li>
                                            @if ($dados['horario']['tarde'][1] == '00:00:00')
                                                <p>Não saio do estágio</p>                                    
                                            @else
                                                <p>{{ $dados['mensagens']['trabalho'] }} neste horário {{ $dados['horario']['tarde'][1] }} da tarde.</p>
                                            @endif
                                        </li>
                                    </ul>
                                <li>Qual horário que chego em casa?</li>
                                <ul>
                                    <li>Se eu ficar até {{ $dados['horario']['tarde'][1] }} do estágio.</li>
                                        <ul>
                                            @if ($dados['horario']['tarde'][2] || $dados['horario']['tarde'][3] > 100)
                                                <li>chegou em cada por volta das {{ $dados['horario']['tarde'][3] }}</li>
                                            @endif
                                        </ul>
                                    <li>Caso se eu sair no horário normal de {{ $dados['horario']['tarde'][0] }} do estágio</li>
                                    <ul>
                                        @if ($dados['horario']['tarde'][2] < 100)
                                            <li>Estou em casa neste horário {{ $dados['horario']['tarde'][1] }} da tarde.</li>
                                        @endif
                                    </ul>
                                </ul>
                                <li>Almoço que horas?</li>
                                    <ul>
                                        <li>
                                            @if ($dados['horario']['tarde'][1] >= $dados['horario']['tarde'][3])
                                                <p>{{ $dados['mensagens']['Almoco'] }} {{ $dados['horairo']['tarde'][3] }}</p>                                    
                                            @else
                                                <p>{{ $dados['mensagens']['Almoco'] }} neste horário {{ $dados['horario']['tarde'][2] }} da tarde.</p>
                                            @endif
                                        </li>
                                    </ul>
                                <li>Dias que vou para faculdade?</li>
                                    <ul>
                                        <li>
                                            @if ($dados['dias']['terca'] && $dados['dias']['quinta'])
                                                <p>Vou para aula da faculdade nos dias de {{ $dados['dias']['terca'] }} e {{ $dados['dias']['quinta'] }} </p>                                
                                            @endif
                                        </li>
                                        <ul>
                                            <li>
                                                @if ($dados['horario']['tarde'][4] <> $dados['horario']['tarde'][2])
                                                    <p>Chegou na fcauldade às {{ $dados['horario']['tarde'][4] }} da tarde.</p>
                                                @else
                                                    <p>Chegou na faculdade às {{ $dados['horario']['tarde'][2] }} da tarde.</p>
                                                @endif
                                            </li>
                                        </ul>
                                    </ul>
                                <li>Qual horário que saio da faculdade?</li>
                                    <ul>
                                        <li>
                                            @if(($dados['dias']['quinta'] || $dados['horario']['tarde'][3] === '18:00') && $dados['horario']['tarde'][4] <> $dados['horario']['tarde'][4])
                                                <p>Saio da faculdade às {{ $dados['horario']['tarde'][2] }} da fim de tarde.</p>
                                            @else
                                                <p>Saio da faculdade possívelmente às {{ $dados['faculdade']['saio-da-faculdade'] }} da noite</p>
                                            @endif
                                        </li>
                                    </ul>
                            </ul>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Rotina da Noite
                            </button>
    
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <ul>
                                                    <li id="CasaNoite"></li>
                                                        <ul>
                                                            <li>
                                                                @if ($dados['horario']['noite'][0] <> $dados['horario']['noite'][1])
                                                                    <p>{{ $dados['mensagens']['Casa']}} {{ $dados['horario']['noite'][2] }} da noite </p>
                                                                @endif
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>Caso eu perde o Ônibus no terminal</li>
                                                        <ul>
                                                            <li>
                                                                @if ($dados['horario']['noite'][3] === $dados['horario']['noite'][3])
                                                                    <p>{{ $dados['mensagens']['Casa']}} {{ $dados['horario']['noite'][3] }} da noite </p>
                                                                @endif
                                                            </li>
                                                        </ul>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <a href="{{ route('rotina-manha') }}" class="btn btn-primary">Retorna Rotina da manhã</a>
                                        </div>
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
@section('script')
    <script type="text/javascript">
        let modal = document.getElementById('staticBackdropLabel').innerHTML = '<p class="text-uppercase">Rotina do {{ $dados['mensagens']['name']  }}, no período da tarde</p>';

        function modalBody() {
            let modalBody = document.getElementById('CasaNoite').innerHTML = 'Que horas que chego em casa?';
        }

        modalBody(modalBody);
    </script>
@endsection