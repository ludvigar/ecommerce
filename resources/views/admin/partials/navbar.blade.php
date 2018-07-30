<div class="sidebar-sticky">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link @if(request()->url() == route('admin.dashboard')) {{'active'}} @endif" href="{{route('admin.dashboard')}}">
                <span data-feather="home"></span>
                Panel de Control <span class="sr-only">(current)</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="file"></span>
                Pedidos
            </a>
        </li>
        <li class="nav-item dropdown">
            <a id="categoryDropdown" class="nav-link @if(request()->url() == route('admin.category.index')) {{'active'}} @else {{''}} @endif dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span data-feather="bar-chart-2"></span>
                Categorías
            </a>
            <div class="dropdown-menu" aria-labelledby="categoryDropdown">
                <a class="dropdown-item" href="{{route('admin.category.index')}}">Lista de Categorías</a>
                <a class="dropdown-item" href="{{route('admin.category.create')}}">Agregar Categoría</a>
                <a class="dropdown-item" href="{{route('admin.category.trash')}}">Categorías en Papelera</a>
            </div>

        </li>
        <li class="nav-item dropdown">
            <a id="productDropdown" class="nav-link @if(request()->url() == route('admin.product.index')) {{'active'}} @endif  dropdown-toggle" href="javascript:;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span data-feather="shopping-cart"></span>
                Productos
            </a>
            <div class="dropdown-menu" aria-labelledby="productDropdown">
                <a class="dropdown-item" href="{{route('admin.product.index')}}">Lista de Productos</a>
                <a class="dropdown-item" href="{{route('admin.product.create')}}">Agregar Producto</a>
                <a class="dropdown-item" href="{{route('admin.product.trash')}}">Productos en Papelera</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link  @if(request()->url() == route('admin.profile.index')) {{'active'}} @else {{''}} @endif" href="{{route('admin.profile.index')}}">
                <span data-feather="users"></span>
                Clientes
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                Integrations
            </a>
        </li>
    </ul>
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Saved reports</span>
        <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
        </a>
    </h6>
    <ul class="nav flex-column mb-2">
        <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Current month
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Last quarter
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Social engagement
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Year-end sale
            </a>
        </li>
    </ul>
</div>