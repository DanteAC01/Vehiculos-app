{!! Form::open('route'=>['mensajes.destroy', $mensaje->id])l, 'method' => 'delete' !!}
<div class="container">
    <div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" id="modaldelete{{ $mensaje->id }}">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header btn btn-danger">
                    <h5><i class="fas fa-plus"> </i> Eliminar</h5>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>¿Estas seguro deeliminar el mensaje <b>{{ $mensaje->mensaje }}</b></p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="submit"><i class="fas fa-thumbs-up"></i> Confirmar</button>
                    <button data-dismiss="modal" class="btn btn-primary"><i class="fas fa-ban"></i> Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}