{{-- reference: https://laravel.com/docs/12.x/blade#components --}}
<header class="flex justify-between bg-indigo-800 text-white p-4">
    <h1>laravel</h1>
    <nav>
        <ul class="flex gap-4">
            <li>Menu 1</li>
            <li>Menu 2</li>
            <li>Menu 3</li>
        </ul>
    </nav>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button>Logout</button>
    </form>
</header>
