@extends('admin.app')
@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Panel de Control</a></li>
<li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Categorías</a></li>
<li class="breadcrumb-item active" aria-current="page">Agregar/Editar Categoría</li>
@endsection
@section('content')
<form action="@if(isset($category)) {{route('admin.category.update', $category)}} @else {{route('admin.category.store')}} @endif" method="post" accept-charset="utf-8">
    @csrf
    @if(isset($category))
    @method('PUT')
    @endif
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
        <div class="col-sm-12">
            <label class="form-control-label">Nombre: </label>
            <input type="text" id="txturl" name="title" class="form-control " value="{{@$category->title}}">
            <p class="small">{{config('app.url').'/'}}<span id="url">{{@$category->slug}}</span></p>
            <input type="hidden" name="slug" id="slug" value="{{@$category->slug}}">
        </div>
    </div>
    <div class="form-group row">

        <div class="col-sm-12">
            <label class="form-control-label">Descripción: </label>
            <textarea name="description" id="editor" class="form-control " rows="10" cols="80">{!! @$category->description !!}</textarea>
        </div>
    </div>
    <div class="form-group row">
        @php 
        $ids = (isset($category->childrens) && $category->childrens->count() > 0 ) ? array_pluck($category->childrens, 'id') : null
        @endphp
        <div class="col-sm-12">
            <label class="form-control-label">Seleccionar Categoría: </label>
            <select name="parent_id[]" id="parent_id" class="form-control" multiple>
                @if(isset($categories))
                <option value="0">Categoría Raíz</option>
                @foreach($categories as $cat)
                <option value="{{$cat->id}}" @if(!is_null($ids) && in_array($cat->id, $ids)) {{'selected'}} @endif>{{$cat->title}}</option>
                @endforeach
                @endif
                option
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12">
            @if(isset($category))
            <input type="submit" name="submit" class="btn btn-primary" value="Editar Categoría" />
            @else
            <input type="submit" name="submit" class="btn btn-primary" value="Agregar Categoría" />
            @endif
        </div>

    </div>

</form>
@endsection
@section('scripts')
<script type="text/javascript">
    $(function () {
        ClassicEditor.create(document.querySelector('#editor'), {
            toolbar: ['Heading', 'Link', 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote', 'undo', 'redo'],
        }).then(editor => {
            console.log(editor);
        }).catch(error => {
            console.error(error);
        });
        $('#txturl').on('keyup', function () {
            var url = slugify($(this).val());
            $('#url').html(url);
            $('#slug').val(url);
        })
        $('#parent_id').select2({
            placeholder: "Seleccioná la Categoría",
            allowClear: true,
            minimumResultsForSearch: Infinity
        });
    })
</script>
@endsection