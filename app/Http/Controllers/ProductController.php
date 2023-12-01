<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Product;

class ProductController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Generate a unique cache key for the search query
        $cacheKey = 'product_search_' . md5($query);

        // Check if the results are in the cache
        $results = Cache::get($cacheKey);

        if ($results === null) {
            // If not in the cache, perform the search and store results in the cache
            $results = Product::where('name', 'like', "%$query%")->get();

            // Cache the results for 60 minutes (adjust the time as needed) php artisan db:seed --class=ProductSeeder

            Cache::put($cacheKey, $results, 60); 
        }

        return view('products.search', ['results' => $results]);
    }
}
?>
