<div class="card bg-black col-2 m-2">

    <div class="card-img mt-3">
        <img class="movie-cover"src="{{ $movie->cover }}" class="card-img-top" alt="{{ $movie->title }}">
    </div>

    <div class="card-title pt-1">
        <div class="movie-title">
            {{ $movie->original_title }}
        </div>
    </div>
    <div class="card-subtitle d-flex justify-content-between">
        <div class="movie-details">
           {{ $movie->date }}
        </div>

        <div class="movie-details  my-blue">
            <span> <img class="US-flag" src="assets/images/USA-flag.svg" alt="US-flag"> </span> <i class="fa-solid fa-star"></i> {{ $movie->vote }}
         </div>


    </div>

</div>

