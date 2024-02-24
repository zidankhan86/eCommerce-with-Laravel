<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Exception;
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
   public function addToWishlist(Request $request, $id)
{
    
    $user = Auth::user();
    //dd( $user);
    if (!$user->wishlistProducts->contains('id', $id)) {
        $wishlistItem = Wishlist::create([
            'product_id' => $id,
            'user_id' => $user->id
        ]);

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
            notify()->info('You do not have permission to remove this product from the wishlist.');
                return redirect()->route('product.page');
            }
            // Remove the Wishlist item
            $wishlistItem->delete();
            notify()->info('Product removed from wishlist successfully.');
            return redirect()->route('wishlist.index');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('wishlist.index')->with('error', 'Product not found in the wishlist.');
        } catch (Exception $e) {
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
        $product = $wishlistItem->product;

        if ($product) {
            $cart = session()->get('cart', []);

            // Check if the product already exists in the cart
            if (!isset($cart[$product->id])) {
                // Add the product to the cart
                $cart[$product->id] = [
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => 1,
                    'subtotal' => $product->price, // price x quantity
                    'image' => $product->image
                ];

                session()->put('cart', $cart);
                notify()->success('Product added to the cart');
            } else {
                // Increment the quantity and update subtotal
                $cart[$product->id]['quantity'] += 1;
                $cart[$product->id]['subtotal'] = $cart[$product->id]['quantity'] * $cart[$product->id]['price'];
                session()->put('cart', $cart);
                notify()->success('Cart updated.');
            }

            // Remove the product from the wishlist
            $wishlistItem->delete();

            return redirect()->route('wishlist.index')->with('success', 'Product moved to cart successfully.');
        }
    }

    return redirect()->route('wishlist.index')->with('error', 'Product not found in the wishlist.');
}

}
