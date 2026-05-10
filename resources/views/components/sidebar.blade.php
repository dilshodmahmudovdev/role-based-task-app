<div class="sidebar">
    <div class="sidebar-content">
        <a href="{{ route('home') }}" class="link {{ request()->routeIs('home') ? 'active' : ''}}"><i class="bi bi-house"></i> Home</a>
        <a href="{{ route('tasks') }}" class="link {{ request()->routeIs('tasks') ? 'active' : ''}}"><i class="bi bi-list-columns-reverse"></i> Tasks</a>
        <a href="{{ route('workers') }}" class="link {{ request()->routeIs('workers') ? 'active' : ''}}"><i class="bi bi-person"></i> Workers</a>
    </div>

    <!-- An unexamined life is not worth living. - Socrates -->
</div>
