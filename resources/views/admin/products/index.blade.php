@extends('admin.app')
@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Panel de Control</a></li>
<li class="breadcrumb-item active" aria-current="page">Productos</li>
@endsection
@section('content')
<div class="row d-block">
    <div class="col-sm-12">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
        @endif
    </div>
</div>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="h2">Productos</h2>

    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="{{route('admin.product.create')}}" class="btn btn-sm btn-outline-secondary">
            Agregar Producto
        </a>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm table-products">
        <thead>
            <tr>
                <th>id</th>
                <th>Producto</th>
                <th>Descripción</th>
                <th>Slug</th>
                <th>Categoría</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>Creado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @if($products->count() > 0)
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->title}}</td>
                <td>{!! $product->description !!}</td>
                <td>{{$product->slug}}</td>
                <td>
                    @if($product->categories()->count() > 0)
                    @foreach($product->categories as $children)
                    {{$children->title}},
                    @endforeach
                    @else
                    <strong>{{"producto"}}</strong>
                    @endif
                </td>
                <td>${{$product->price}}</td>
                <td><img src="{{asset('storage/'.$product->thumbnail)}}" {{-- alt="{{$product->title}}" --}} class="img-responsive" height="50"/></td>
                @if($product->trashed())
                <td>{{$product->deleted_at}}</td>
                <td><a class="btn btn-info btn-sm" href="{{route('admin.product.recover',$product->id)}}">Restaurar</a> | <a class="btn btn-danger btn-sm" href="javascript:;" onclick="confirmDelete('{{$product->id}}')">Eliminar</a>
                    <form id="delete-product-{{$product->id}}" action="{{ route('admin.product.destroy', $product->slug) }}" method="POST" style="display: none;">

                        @method('DELETE')
                        @csrf
                    </form>
                </td>
                @else
                <td>{{$product->created_at}}</td>
                <td><a class="btn btn-info btn-sm" href="{{route('admin.product.edit',$product->slug)}}">Editar</a> | <a id="trash-product-{{$product->id}}" class="btn btn-warning btn-sm" href="{{route('admin.product.remove',$product->slug)}}">A Papelera</a> | <a class="btn btn-danger btn-sm" href="javascript:;" onclick="confirmDelete('{{$product->id}}')">Eliminar</a>
                    <form id="delete-product-{{$product->id}}" action="{{ route('admin.product.destroy', $product->slug) }}" method="POST" style="display: none;">

                        @method('DELETE')
                        @csrf
                    </form>
                </td>
                @endif
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="7" class="alert alert-info">Producto no encontrado...</td>
            </tr>
            @endif

        </tbody>

    </table>
</div>
<div class="row">
    <div class="col-md-12">
        {{$products->links()}}
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
    function confirmDelete(id){
    let choice = confirm("Está seguro de eliminar permanentemente el producto ?")
            if (choice){
    document.getElementById('delete-product-' + id).submit();
    }
    }
</script>
@endsection