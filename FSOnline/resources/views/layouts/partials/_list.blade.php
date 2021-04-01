<div class="row">


    @foreach($movies as $key => $value)
        <div class="col-sm-4">
            <a href="{{ route('movies.show', $value->id) }}">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $value->name }}</h5>

                        <p>{{ $value->description }} </p>
                    </div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Genre: {{ $value->genre }}</li>
                        <li class="list-group-item">Language: {{ $value->language }}</li>
                        <li class="list-group-item">Release date: {{ $value-> release }}</li>
                        <li class="list-group-item">Rating: {{ $value-> rating }}</li>
                    </ul>
                </div>
            </a>

        </div>
    @endforeach



</div>
