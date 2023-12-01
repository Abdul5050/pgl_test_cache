<form method="GET" action="{{ route('search') }}">
    <input type="text" name="query" placeholder="Search for products">
    <button type="submit">Search</button>
</form>

@if(isset($results))
    <h2>Search Results:</h2>
    @foreach($results as $product)
        <div>
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->description }}</p>
        </div>
    @endforeach
@endif