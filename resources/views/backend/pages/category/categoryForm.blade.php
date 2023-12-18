@extends('backend.master')

@section('content')

<br><br><div class="container">
    <div class="mx-auto mt-4 mb-4">
        <h4 class="text-success text-center">Category Form</h4>

        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data" class="mx-auto p-3" style="max-width: 600px;">
            @csrf

            @if(session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @endif

            <div class="mb-3">
                <label for="exampleInputName2" class="form-label">Type Name</label>
                <input type="text" value="{{ old('type') }}" class="form-control" id="exampleInputName2" name="type" placeholder="Category Type..">
                @error('type')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputName2" class="form-label">Status</label>
                <select class="form-control" name="status" id="">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>                  
                </select>
                @error('status')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>

                <br><div class="text-center">
                <button type="submit" class="btn btn-success">Create Category</button>
            </div>
        </form>
    </div>
</div>

@endsection
