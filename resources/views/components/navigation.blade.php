<header>
<nav>
    <ul>
        <li><a href="/">Sākums</a></li>
        <li><a href="/todos">Visi uzdevumi</a></li>
        <li><a href="/todos/create">Izveidot uzdevumu</a></li>
        <li><a href="/why">Kāpēc?</a></li>
        <li><a href="/diaries">Dienasgrāmatas</a></li>
        <li><a href="/diaries/create">Izveidot ierakstu</a></li>
        <li>    @auth
                <form action="/logout" method="POST">
                    @csrf
                <button>Atteikties</button>
                </form>
                @endauth
        </li>
    </ul>
</nav>
</header>
         