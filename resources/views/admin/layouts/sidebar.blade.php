<div class="sidebar d-flex flex-column flex-shrink-0 p-3 text-white">
    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <i class="bi bi-shield-shaded me-2 fs-4"></i>
        <span class="fs-4">Admin Panel</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="#" class="nav-link active bg-primary" aria-current="page">
                <i class="bi bi-speedometer2 me-2"></i> Главная
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <i class="bi bi-people me-2"></i> Подданные
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <i class="bi bi-bar-chart-line me-2"></i> Статистика
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <i class="bi bi-gear me-2"></i> Настройки
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1"
           data-bs-toggle="dropdown" aria-expanded="false">
            <strong><i class="bi bi-person-crown me-2"></i>{{ auth()->user()->name }}</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">Профиль</a></li>
            <li>
                <hr class="dropdown-content-divider">
            </li>
            <li>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">Выйти</button>
                </form>
            </li>
        </ul>
    </div>
</div>
