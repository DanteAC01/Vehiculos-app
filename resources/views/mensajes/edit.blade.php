{!! Form::open('route'=>['mensajes.update', $mensaje->id])l, 'method' => 'put' !!}
<div class="container">
    <div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" id="modaledit{{ $mensaje->id }}">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header btn btn-success">
                    <h5><i class="fas fa-plus"> </i> Editar</h5>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <label for="">Mensaje</label>
                    <input class="form-control" type="text" name="mensaje" value="{{ $mensaje->mensaje }}">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit"><i class="fas fa-upload"></i> Guardar</button>
                    <button data-dismiss="modal" class="btn btn-success"><i class="fas fa-ban"></i> Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}