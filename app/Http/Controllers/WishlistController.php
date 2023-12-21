<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlistItems = Auth::user()->wishlistProducts;
        $productIds    = $wishlistItems->pluck('id');
        $products      = Product::whereIn('id', $productIds)->get();

        return view('frontend.components.wishlist', compact('wishlistItems', 'products'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function addToWishlist( Request $request ,$id)
    {
        $user = Auth::user();
    if (!$user->wishlistProducts->contains('id', $id)) {
        $wishlistItem = new Wishlist(['product_id' => $id, 'user_id' => $user->id]);
        $wishlistItem->save();
        notify()->success('Item added to wishlist.');
        return redirect()->back();
    }
        notify()->info('Product is already in the wishlist');
        return redirect()->back();
}

    public function removeFromWishlist($id)
    {

        try {

            $wishlistItem = Wishlist::where('user_id', auth()->user()->id)
            ->where('product_id', $id)
            ->firstOrFail();
            
        if ($wishlistItem->user_id !== auth()->user()->id) {
                return redirect()->route('product.page')->with('error', 'You do not have permission to remove this product from the wishlist.');
            }
            // Remove the Wishlist item
            $wishlistItem->delete();
            return redirect()->route('wishlist.index')->with('success', 'Product removed from wishlist successfully.');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('wishlist.index')->with('error', 'Product not found in the wishlist.');
        } catch (\Exception $e) {
            return redirect()->route('wishlist.index')->with('error', 'An error occurred while removing the product from the wishlist.');
        }
    }



    public function addToCartFromWishlist($id)
    {
        // Find the product in the wishlist
        $wishlistItem = Wishlist::where('user_id', auth()->user()->id)
            ->where('product_id', $id)
            ->first();

        if ($wishlistItem) {
           
            $quantity = $wishlistItem->quantity ?? 1;

            // Add the product to the cart
            \Cart::session(auth()->user()->id)->add(
                $wishlistItem->product->id,
                $wishlistItem->product->name,
                $wishlistItem->product->price,
                $quantity,

                ['image' => $wishlistItem->product->image]
            );

            // Remove the product from the wishlist
            $wishlistItem->delete();

            return redirect()->route('wishlist.index')->with('success', 'Product moved to cart successfully.');
        }

        return redirect()->route('wishlist.index')->with('error', 'Product not found in the wishlist.');
    }
}
