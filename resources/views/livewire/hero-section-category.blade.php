<div>
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
