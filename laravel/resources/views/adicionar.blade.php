@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Conta</div>

                <div class="panel-body">
                    <form action="store" method="POST">
                        <label for="contaTipo">Tipo/Conta:</label><br>
                        <input type="hidden" name="contaTipo" value="pagar"> 
                        
                                                
                        <label for="descricao">Descricao:</label><br>
                        <input type="text" name="descricao"><br>
                        
                        <label for="valor">Valor:</label><br>
                        <input type="text" name="valor"><br>
                        
                        <label for="vencimento">Vencimento:</label><br>
                        <input type="text" name="vencimento"><br>
                        
                        <input type="hidden" name="_token" value="{{csrf_token()}}"><br>
                        <input type="submit" name ="submit "value="Adicionar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection