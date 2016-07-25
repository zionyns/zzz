@extends('home')

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="box box-info">

        	<div class="box-header">
                <h3 class="box-title">REPORTES DEL SISTEMA</h3>
                <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="ingrese busqueda">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                </div>
            </div><!-- /.box-header -->

            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                   
                    <thead><tr>
                      <th>ID</th>
                      <th>REPORTE</th>
                      <th>VER</th>
                      <th>DESCARGAR</th>
                    </tr></thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Reporte de Usuarios</td>
                      <td><a href="crear_reporte_usuario/1" target="_blank" ><button class="btn btn-block btn-primary btn-xs">VER</button></a></td>
                      <td><a href="crear_reporte_usuario/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">DESCARGAR</button></a></td>
                    
                    </tr>
                   
                </tbody></table>
            </div><!-- /.box-body -->

        </div><!-- /.box -->
    </div>
</div>

@stop