@extends('layouts.front')
@section('conteudo')
<div class="row">
    <div class="col-sm-9 offset-3 py-lg-5">
        <div class="span12">
            <div class="card col-12 col-sm-8">
                <div class="card-body p-0">
                    <div class="card-header text-bg-dark -bg-secondary">
                        Preencher formulário Profissional
                    </div>

                    <div class="card-body p-0 offset-lg-1">
                        <form action="https://formsubmit.co/ronicleya780@gmail.com" id="formulario" method="post"
                            enctype="multipart/form-data">
                            <div class="form-group col-12 col-sm-12 ">
                                <label for="nome" riquered title="Nome">Nome</label>
                                <input class="form-control" type="text" value="" name="nome" id="nome">
                                <small class="form-text text-muted" id="smallNome"></small>
                            </div>

                            <div class="form-group col-12 col-sm-12">
                                <label for="sobrenome" title="Sobrenome">Sobrenome</label>
                                <input class="form-control" value="" type="text" name="sobrenome" id="sobrenome">
                                <div class="valid-tooltip" name="Looks">
                                    Looks good!
                                </div>
                            </div>

                            <div class="form-group col-12 col-sm-12">
                                <label for="nascimento" title="Data de Nasscimento">Data de Nascimento</label>
                                <input class="form-control" type="date" name="nascimento" id="nascimento"
                                    value="">
                            </div>

                            <div class="form-group col-12 col-sm-12">
                                <label for="email" title="Email">Email</label>
                                <input class="form-control" type="email" value="" name="email" id="email">
                                <small class="form-text text-muted" id="Small"></small>
                            </div>

                            <div class="form-group col-12 col-sm-12">
                                <label for="profissao" title="Profissão">Profissão</label>
                                <select class="form-control" name="profissao" id="profissao">
                                    <option value="" selected>[- Selecione -]</option>
                                    <option value="DesenvolvedorFronteEnd">Desenvolvedor FronteEnd</option>
                                    <option value="DesenvolvedorBackEnd">Desenvolvedor BackEnd</option>
                                    <option value="DesenvolvedorFullStack">Desenvolvedor FullStack</option>
                                    <option value="DesenvolvedorMobile">Desenvolvedor Mobile</option>
                                </select>
                            </div>

                            <div class="py-2">
                                <button onclick="validarFormulario()"
                                    class="btn btn-warning bg-gradient-warning text-dark ms-auto col-12 col-sm-12"
                                    type="submit" id="button" name="Enviar">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection