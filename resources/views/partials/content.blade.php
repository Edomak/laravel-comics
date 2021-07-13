<main>
    <div class="container">
        <div class="content">
            @foreach ($comics as $comic)
            <div class="card">
                <img src="{{ $comic["thumb"] }}" alt="{{ $comic["series"] }}">
                <h4>{{ $comic["series"] }}</h4>
            </div>
            @endforeach
        </div>
</main>