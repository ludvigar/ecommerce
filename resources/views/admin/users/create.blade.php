@extends('admin.app')
@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Panel de Control</a></li>
<li class="breadcrumb-item "><a href="{{route('admin.profile.index')}}">Usuarios</a></li>
<li class="breadcrumb-item active" aria-current="page">Agregar/Editar Usuario</li>
@endsection
@section('content')
<h2 class="modal-title">Agregar/Editar Usuario</h2>
<form  action="@if(isset($user)) {{route('admin.profile.update', $user)}} @else {{route('admin.profile.store')}} @endif" method="post" accept-charset="utf-8" enctype="multipart/form-data">
    <div class="row">
        @csrf
        @if(isset($user))
        @method('PUT')
        @endif
        <div class="col-lg-9">
            <div class="form-group row">
                <div class="col-sm-12">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                <div class="col-sm-12">
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                    @endif
                </div>
                <div class="col-sm-12 col-md-6">
                    <label class="form-control-label">Nombre: </label>
                    <input type="text" id="txturl" name="name" class="form-control " value="{{@$user->profile->name}}" />
                    <p class="small">{{route('admin.profile.index')}}/<span id="url">{{@$user->profile->slug}}</span>
                    <input type="hidden" name="slug" id="slug" value="{{@$user->profile->slug}}">
                </p>
            </div>
            <div class="col-sm-12 col-md-6">
                <label class="form-control-label">Email: </label>
                <input type="text" id="email" name="email" class="form-control " value="{{@$user->email}}" />
                
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12 col-md-6">
                <label class="form-control-label">Clave: </label>
                <input type="password" id="password" name="password" class="form-control " value="{{@$user->profile->name}}" />
                
            </div>
            <div class="col-sm-12 col-md-6">
                <label class="form-control-label">Reescriba la clave: </label>
                <input type="password" id="password_confirm" name="password_confirm" class="form-control " value="" />
                
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                <label class="form-control-label">Status</label>
                <div class="input-group mb-3">
                    <select class="form-control" id="status" name="status">
                        <option value="0" @if(isset($user) && $user->status == 0) {{'selected'}} @endif >Suspendido</option>
                        <option value="1" @if(isset($user) && $user->status == 1) {{'selected'}} @endif>Activo</option>
                    </select>
                </div>
            </div>
            @php
            $ids = (isset($user->role) && $user->role->count() > 0 ) ? array_pluck($user->role->toArray(), 'id') : null;
            @endphp
            
            <div class="col-sm-6">
                <label class="form-control-label">Seleccionar Privilegios</label>
                <select name="role_id" id="role" class="form-control">
                    @if($roles->count() > 0)
                    @foreach($roles as $role)
                    <option value="{{$role->id}}"
                        @if(!is_null($ids) && in_array($role->id, $ids))
                        {{'selected'}}
                    @endif>{{$role->name}}</option>
                    @endforeach
                    @endif
                </select>
            </div>
        </div>
        <div class="row">
            <h4 class="title">Domicilio</h4>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <label class="form-control-label">Domicilio: </label>
                <div class="input-group mb-3">
                    <input type="text" name="address" class="form-control " value="{{@$user->addrress}}" />
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 col-md-3">
                <label class="form-control-label">País: </label>
                <div class="input-group mb-3">
                    <select name="country_id" class="form-control" id="countries">
                        <option value="0">Seleccione un País</option>
                        @foreach($countries as $country)
                        <option value="{{$country->id}}">{{$country->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <label class="form-control-label">Provincia: </label>
                <div class="input-group mb-3">
                    <select name="state_id" class="form-control" id="states">
                        <option value="0">Seleccione una Provincia</option>
                    </select>
                </div>
            </div>
            
            <div class="col-sm-6 col-md-3">
                <label class="form-control-label">Localidad: </label>
                <div class="input-group mb-3">
                    <select name="city_id" class="form-control" id="cities">
                        
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <label class="form-control-label">Teléfono: </label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{@$user->phone}}" />
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <ul class="list-group row">
            
            <li class="list-group-item active"><h5>Imagen de Perfil</h5></li>
            <li class="list-group-item">
                <div class="input-group mb-3">
                    <div class="custom-file ">
                        <input type="file"  class="custom-file-input" name="thumbnail" id="thumbnail">
                        <label class="custom-file-label" for="thumbnail">Buscar foto</label>
                    </div>
                </div>
                <div class="img-thumbnail  text-center">
                    <img src="@if(isset($user)) {{asset('storage/'.$user->thumbnail)}} @else {{asset('images/no-thumbnail.jpeg')}} @endif" id="imgthumbnail" class="img-fluid" alt="">
                </div>
            </li>
            <li class="list-group-item">
                <div class="form-group row">
                    <div class="col-lg-12">
                        @if(isset($user))
                        <input type="submit" name="submit" class="btn btn-primary btn-block " value="Update user" />
                        @else
                        <input type="submit" name="submit" class="btn btn-primary btn-block " value="Agregar Usuario" />
                        @endif
                    </div>
                    
                </div>
            </li>
        </ul>
    </div>
</div>
</form>
@endsection
@section('scripts')
<script type="text/javascript">
    $(function(){
        $('#txturl').on('keyup', function(){
            const pretty_url = slugify($(this).val());
            $('#url').html(slugify(pretty_url));
            $('#slug').val(pretty_url);
        })
$('#thumbnail').on('change', function() {
var file = $(this).get(0).files;
var reader = new FileReader();
reader.readAsDataURL(file[0]);
reader.addEventListener("load", function(e) {
var image = e.target.result;
$("#imgthumbnail").attr('src', image);
});
});
// Set up the Select2 control
$('#countries').select2().trigger('change');
$('#states').select2();
$('#cities').select2();
//On Country Change
$('#countries').on('change', function(){
    var id = $('#countries').select2('data')[0].id;
    $('#states').val(null);
    $('#states option').remove();
    // Fetch the preselected item, and add to the control
var studentSelect = $('#states');
$.ajax({
type: 'GET',
url: "{{route('admin.profile.states')}}/" + id
}).then(function (data) {
    // create the option and append to Select2
    for(i=0; i< data.length; i++){
        var item = data[i]
        var option = new Option(item.name, item.id, true, true);
        studentSelect.append(option);
    }
studentSelect.trigger('change');
    });
})
//On state Change
$('#states').on('change', function(){
    var id = $('#states').select2('data')[0].id;
    // Fetch the preselected item, and add to the control
    var studentSelect = $('#cities');
    $('#cities').val(null);
    $('#cities option').remove();
$.ajax({
type: 'GET',
url: "{{route('admin.profile.cities')}}/" + id
}).then(function (data) {
    // create the option and append to Select2
    for(i=0; i< data.length; i++){
        var item = data[i]
        var option = new Option(item.name, item.id, false, false);
        studentSelect.append(option);
    }
    });
studentSelect.trigger('change');
})
})
</script>
@endsection