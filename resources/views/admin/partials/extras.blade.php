@if(request()->ajax())

<div class="row align-items-center options">
    <div class="col-sm-12">
        <h5 class="pt-2 pb-2 bg-primary text-center" style="color:#fff;">Extras</h5>
    </div>

    <div class="col-sm-4">
        <label class="form-control-label">Opciones</label>
        <input type="text" name="option[]" class="form-control" value="" placeholder="tamaño">
    </div>
    <div class="col-sm-8">
        <label class="form-control-label">Valores</label>
        <input type="text" name="values[]" class="form-control" placeholder="opción 1 | opción 2 | opción 3" />
        <label class="form-control-label">Otros Precios</label>
        <input type="text" name="prices[]" class="form-control" placeholder="precio 1 | precio 1 | precio 3" />
    </div>
</div>

@else
<p class="alert alert-danger">No tiene suficientes privilegios!!!</p>
@endif