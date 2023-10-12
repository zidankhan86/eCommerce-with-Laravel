 <!-- Hero Section Begin -->
 <section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <span>All Categories</span>
                    </div>
                    <ul>
                        @foreach ($categories as $item)
                            <li><a href="{{ url('/category',$item->id) }}">{{ $item->type }}</a></li>
                        @endforeach
                    </ul>
                    {{-- <ul id="category-list">
                        @foreach ($categories as $item)
                            <li class="category-item">
                                <a href="{{ url('/category', $item->id) }}">{{ $item->type }}</a>
                                <ul class="sub-category-list">
                                    <!-- Subcategory items will go here -->
                                </ul>
                            </li>
                        @endforeach
                    </ul> --}}

                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="{{ route('user.search') }}">
                            @csrf
                            <input type="text" name="search_key"  placeholder="What do you need?">
                            <button type="submit" class="btn btn-dark">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>01711-004311</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
                @foreach ($heroBanners as $item)
                    <div class="hero__item" style="background-image: url('{{ url('/public/uploads/'.$item->image) }}'); background-size: cover;">
                        <div class="hero__text">
                            <span>{{ $item->small_tittle }}</span>
                            <h2>{{ $item->tittle }}</h2>
                            <p>{{ $item->description }}</p>
                            <a href="{{ url('/product') }}" class="btn btn-dark">SHOP NOW</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

{{-- <style>
    /* Style the category list */
#category-list {

}

/* Style each category item */
.category-item {
    position: relative; /* Position relative for absolute positioning of subcategory list */
    display: inline-block; /* Display inline-block for horizontal alignment */
    margin-right: 10px; /* Add spacing between categories */
}

/* Style the category link */
.category-item a {
    text-decoration: none;
    color: #333;
    padding: 2px;


    display: block; /* Make the link a block-level element */
    position: relative; /* Position relative for z-index */
}

/* Style the subcategory list */
.sub-category-list {
    position: absolute; /* Position absolute to overlay the category */
    top: 100%; /* Position below the category */
    left: 0;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    display: none; /* Initially hide subcategory list */
    min-width: 150px; /* Adjust width as needed */
    z-index: 1; /* Ensure the subcategory list is above other content */
}

/* Style individual subcategory items */
.sub-category-list li {
    padding: 5px 10px;
}

/* Hover effect to show the subcategory list */
.category-item:hover .sub-category-list {
    display: block;
}

</style> --}}

{{-- <script>
    // Function to fetch and populate subcategories
function fetchAndPopulateSubcategories(categoryId, subCategoryList) {
    // Make an AJAX request to fetch subcategories
    $.ajax({
        url: '/get-subcategories/' + categoryId, // Replace with your API endpoint
        method: 'GET',
        dataType: 'json',
        success: function (data) {
            // Clear the existing subcategory list
            subCategoryList.empty();

            // Iterate over data and append subcategory items to the list
            $.each(data, function (index, subcategory) {
                subCategoryList.append('<li><a href="#">' + subcategory.name + '</a></li>');
            });
        },
        error: function () {
            console.error('Error fetching subcategories');
        }
    });
}

$(document).ready(function () {
    // Attach hover event handler to category items
    $('.category-item').hover(function () {
        var categoryId = $(this).find('.category-link').data('category-id');
        var subCategoryList = $(this).find('.sub-category-list');

        // Check if subcategories are already loaded
        if (subCategoryList.children().length === 0) {
            // Fetch and populate subcategories
            fetchAndPopulateSubcategories(categoryId, subCategoryList);

            // Display the subcategory list
            subCategoryList.show();
        } else {
            // Subcategories are already loaded, just display them
            subCategoryList.show();
        }
    }, function () {
        // Hide subcategory list when mouse leaves the category
        $(this).find('.sub-category-list').hide();
    });
});

</script> --}}
