<nav class="nav">

    <h4 class="text-white logo">Task-App</h4>
    <form action="{{ route('logout') }}" method="POST" class="d-inline-block">
        @csrf
        <button class="btn btn-light mx-4 btn-sm">Logout</button>
    </form>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
</nav>
