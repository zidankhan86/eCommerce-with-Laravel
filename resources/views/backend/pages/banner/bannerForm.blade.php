@extends('backend.master')

@section('content')
<script src="{{ asset('js/dropify.js') }}"></script>
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include Dropify CSS and JS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>


<div class="container">
<div class="container">
<div class="container">

<br><h4 class=" text-success text-center">Banner Form</h4>

<form action="{{route('banner.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

        @if(session('success'))
        <p class="alert alert-success"> {{session('success')}}</p>

        @endif
           @if(session('error'))
        <p class="alert alert-danger"> {{ session('error') }}
            @endif



            <div class="mb-3 mx-sm-2">
            <label for="exampleInputName1" class="form-label">Banner Title(Optional)</label>
            <input type="text" class="form-control" value="{{ old('tittle') }}" id="exampleInputName1" name="tittle" placeholder="Dry Food..">
            @error('tittle')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
            </div>



            <div class="mb-3 mx-sm-2">
            <label for="exampleInputName2" class="form-label">Upload Image <strong>*(IMAGE SIZE MAX 200kb)*</strong></label>
            <input type="file" class="form-control dropify" data-height="300" value="{{ old('image') }}" id="dropify"  name="image">
            @error('image')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
            </div>


      <div class="text-center">
        <button type="submit" class="btn btn-primary">Post</button>
      </div>

  </form>
  </div>
  </div>
  </div>
  
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


@endsection


