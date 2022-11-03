@extends('layouts.front')
@section('conteudo')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-12 col-sm-10">
					<div class="card-title mb-2">
						<h1 class="text-uppercase py-5">Rotina do {{ $dados['mensagens']['name']  }}, no período da mahã</h1>
					</div>
					<div class="card" >
						<div class="card-header bg-dark">
							<h2 class="card-title text-white">{{$dados['mensagens']['name']}}, estes são os {{$dados['mensagens']['horarios']}}.<h2>
						</div>

						<div class="card-body bg-light rounded-0">
							<h1>Horário que acordo pela manhã.</h1>							
							@if ($dados['horario']['manha'][0] >= 6)
								<p class="text-doby">Todos os dias acordo por volta das {{$dados['horario']['manha'][0] }} horas da manhã</p>	
							@else
								<p class="text-doby">Falha no sistema de lógica!!</p>
							@endif
							<div>
								<h3 >Caso eu não consiga chegar a tempo para pegar o ônibus</h3>
								@if ($dados['horario']['manha'][2] <= '6:25' || $dados['horario']['tarde'][1] >= '6:25')
									<p class="text-doby">Pego o ônibus para o trabalho às {{ $dados['horario']['manha'][1] }} horas da manhã</p>
								@elseif($dados['horario']['manha'][2] >= '6:10' && $dados['horario']['tarde'][1] <= '6:10')
									<p class="text-doby"> Espero relógio chegar no ponteiro às {{ $dados['horario']['manha'][1] }} da manhã para ir para o ponto de ônibus </p>
								@endif
							</div>
							<div>
								<h3 class="text-lowercase">{{$dados['mensagens']['trabalho']}}</h3>
								@if ($dados['horario']['manha'][2] >= $dados['horario']['manha'][3])
									<p class="text-doby">Falha no sistema de lógica!!</p>
								@else
									<p class="text-doby"> Chego no estágio por volta das {{$dados['horario']['manha'][3]}} manhã</p>
								@endif
							</div>
							<div>
								<h3 class="text-lowercase">{{$dados['mensagens']['trabalho']}}</h3>
								@if ($dados['horario']['manha'][4] >= $dados['horario']['tarde'][3])
									<p class="text-doby">Raramente faço uma pausa para comer salgados às {{ $dados['horario']['manha'][4] }} da manhã</p>
								@else
									<p class="text-doby">Compro salgados e falo uma pausa todos dias por volta das {{$dados['horario']['manha'][4]}} da manhã</p>
								@endif
							</div>
							<div class="col-12 offset-lg-4 col-xl-4 offset-xl-4 d-grid gap-1">
								<a class="btn btn-small  btn-warning rounded-1" href="{{ route('rotina-tarde') }}">Rotina da Tarde do {{ $dados['mensagens']['name'] }}</a>
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
	</script>
@endsection