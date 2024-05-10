@extends('backend.master')

@section('content')

<div class="container mt-4">
    <div class="container">
    <h4 class="text-success text-center">Product</h4>

    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif

        <div class="row mt-4">
            <div class="mb-3 col-md-6">
                <label for="exampleInputName1" class="form-label">Name</label>
                <input type="text" class="form-control" value="{{ old('name') }}" id="exampleInputName1" name="name" placeholder="Vaseline..">
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label for="exampleInputCategory" class="form-label">Select Category</label>
                <select name="category_id" id="js-example-disabled-results" class="form-control js-example-basic-single">
                    <option value="">SELECT A CATEGORY</option>
                    @foreach ($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->type }}</option>
                    @endforeach
                </select>
                @error('category_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-md-12 mb-3">
            <label for="exampleInputImage" class="form-label">Image <strong>*(IMAGE SIZE MAX 200kb)*</strong></label>
            <input type="file" class="form-control dropify" name="image" placeholder="Product Image..">
            @error('image')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="row">
            <div class="mb-3 col-md-4">
                <label for="exampleInputWeight" class="form-label">Weight</label>
                <input type="number" class="form-control" step="0.01" value="{{ old('weight') }}" id="exampleInputWeight" name="weight" placeholder="0.5kg..">
                @error('weight')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 col-md-4">
                <label class="form-label">Stock</label>
                <input type="number" class="form-control" value="{{ old('stock') }}" id="exampleInputInhouseStock" name="stock" placeholder="70..">
                @error('stock')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 col-md-4">
                <label for="exampleInputPrice" class="form-label">Price</label>
                <input type="number" class="form-control" id="exampleInputPrice" value="{{ old('price') }}" name="price" placeholder="500..">
                @error('price')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-4">
                <label for="exampleInputDiscount" class="form-label">Discount</label>
                <input type="number" class="form-control" id="exampleInputDiscount" value="{{ old('discount') }}" name="discount" placeholder="25%..">
                @error('discount')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 col-md-4">
                <label for="exampleInputShippingTime" class="form-label">Shipping time</label>
                <input type="number" class="form-control" id="exampleInputShippingTime" name="time" value="{{ old('time') }}" placeholder="3 days in Dhaka..">
                @error('time')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4 mb-3">
                <label for="exampleInputStatus" class="form-label">Status</label>
                <select name="status" id="exampleInputStatus" class="form-control">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
                @error('status')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-md-12">
            <div class="mb-3">
                <label class="form-label">Description*</label>
                <textarea rows="5" value="{{ old('long_description') }}" name="description" id="editor" class="form-control" placeholder="Product Description"></textarea>
            </div>
            @error('description')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-12">
            <div class="mb-3">
                <label class="form-label">Information*</label>
                <textarea rows="5" value="{{ old('product_information') }}" name="product_information" id="editor2" class="form-control" placeholder="Write something here.."></textarea>
            </div>
            @error('product_information')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>



        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary">Create Product</button>
        </div>

    </form>
    </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#editor2'))
        .catch(error => {
            console.error(error);
        });
</script>

<style>
    #container {
        width: 1000px;
        margin: 20px auto;
    }

    .ck-editor__editable[role="textbox"] {
        /* editing area */
        min-height: 200px;
        width: 100%; /* Set width to 100% */
    }

    .ck-content .image {
        /* block images */
        max-width: 80%;
        margin: 20px auto;
    }
</style>


<script>
    $('.dropify').dropify({
    messages: {
        'default': 'Drag and drop a file here or click',
        'replace': 'Drag and drop or click to replace',
        'remove':  'Remove',
        'error':   'Ooops, something wrong happended.'
    }
    });
    </script>

    <script>
      $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
                </script>
@endsection
