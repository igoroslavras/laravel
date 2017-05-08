@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Contas a Pagar</div>

                <div class="panel-body">
                    <table style="width:100%">
                        <tr>
                          <th>Descrição</th>
                          <th>Valor</th> 
                          <th>Vencimento</th>
                        </tr>
                        @foreach($contas as $conta)

                        <tr>
                            @if($conta->tipoConta === "pagar")
                          <td>{{$conta->descricao}}</td>
                          <td>R${{$conta->valor}}</td> 
                          <td>{{$conta->vencimento}}</td>
                        </tr>
                            @endif
                        @endforeach
                    </table>
                </div>
                
                <div class="panel-heading">Contas a Receber</div>
                <div class="panel-body">
                    <table style="width:100%">
                        <tr>
                          <th>Descrição</th>
                          <th>Valor</th> 
                          <th>Vencimento</th>
                        </tr>
                        @foreach($contas as $conta)

                        <tr>
                            @if($conta->tipoConta === "receber")
                          <td>{{$conta->descricao}}</td>
                          <td>R${{$conta->valor}}</td> 
                          <td>{{$conta->vencimento}}</td>
                        </tr>
                            @endif
                        @endforeach
                    </table>
                </div>
                <div class="panel-body">
                    <a href="/adicionar">Adicionar</a>
                    <a>Remover</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
