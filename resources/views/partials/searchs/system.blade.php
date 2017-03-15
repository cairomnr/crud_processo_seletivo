<div class="panel panel-default">
    <div class="panel-heading">
        Pesquisar Sistema
    </div>

    <form action="{{ url('/system/search') }}" method="get" class="form-horizontal">
        <h5 class="text-center p-b-15"><b>Filtro de consulta</b></h5>
        <div class="panel-body">
            <div class="form-group">
                <label for="description" class="col-xs-2 col-xs-offset-2 control-label">Descrição: </label>
                <div class="col-xs-6">
                    <input type="text" class="form-control" name="description" id="description" maxlength="100" >
                </div>
            </div>
            <div class="form-group">
                <label for="initials" class="col-xs-2 col-xs-offset-2 control-label">Sigla: </label>
                <div class="col-xs-6">
                    <input type="text" class="form-control" name="initials" id="initials" maxlength="10">
                </div>
            </div>
            <div class="form-group">
                <label for="email_support" class="col-xs-2 col-xs-offset-2 control-label">Email de atendimento do sistema: </label>
                <div class="col-xs-6">
                    <input type="email" class="form-control" name="email_support" id="email_support" maxlength="100">
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <div class="row" style="text-align: center;">
                <div class="col-md-2 col-md-offset-3">
                    <button type="submit" class="btn btn-default">
                        Pesquisar 
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </button>
                </div>
                <div class="col-md-2">
                    <a href="{{ url('system') }}" class="btn btn-default">
                        Limpar 
                        <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="{{ url('system/create') }}" class="btn btn-default">
                        Novo Sistema 
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>