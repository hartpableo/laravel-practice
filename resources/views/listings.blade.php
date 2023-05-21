<h1>{{ $heading }}</h1>

@if ( isset( $listings ) && count( $listings ) > 0 )

<section>

    @foreach ( $listings as $listing )
        <div>
            <p>{{ $listing['id'] }}</p>
            <h2>{{ $listing['title'] }}</h2>
            <div>{{ $listing['description'] }}</div>
        </div>
    @endforeach

</section>

@else

<h2>Empty!!!!</h2>

@endif