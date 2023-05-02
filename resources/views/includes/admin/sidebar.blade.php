<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('admin.orders.index') }}" class="nav-link">
                <i class="nav-icon fas fa-solid fa-comment-dollar"></i>
                <p>
                    Заказы
                    <span class="right badge badge-primary">2</span>
                    <span class="right badge badge-danger">22</span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.products.index') }}" class="nav-link">
                <i class="nav-icon fas fa-solid fa-seedling"></i>
                <p>
                    Букеты
                    <span class="right badge badge-danger">New</span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.profiles.index') }}" class="nav-link">

                <i class="nav-icon fas fa-solid fa-users"></i>
                <p>
                    Пользователи
                    <span class="right badge badge-danger">New</span>
                </p>
            </a>
        </li>

    </ul>
</nav>
