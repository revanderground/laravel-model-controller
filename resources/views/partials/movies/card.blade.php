<div class="card col-3 m-3">

    <div class="card-img p-1 mt-3">
        <img src="{{ $movie->cover }}" class="card-img-top" alt="{{ $movie->title }}">
    </div>

    <div class="card-title text-center">
        <h2>
            {{ $movie->title }}
        </h2>
    </div>
    <div class="card-subtitle">
        <h5>
            RELEASE: {{ $movie->date }}
        </h5>

        <h5>
            VOTE: {{ $movie->vote }}
        </h5>

    </div>

</div>
