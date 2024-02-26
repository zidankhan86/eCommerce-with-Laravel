@extends('backend.master')

@section('content')

   <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Product Table
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th scope="col">serial</th>
                                            <th scope="col">Image</th>
                                            <th scope="col"> Name</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Weight</th>
                                            <th scope="col">Total Stock</th>
                                            <th scope="col">Inhouse Stock</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Dicount</th>
                                            <th scope="col">Shipping</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        @php
            $id = 1;
        @endphp
        @foreach ($products as $item)

      <tr>



        <th scope="row">{{ $id++}}</th>
        <td><img height="100px" width="100px" src="{{url('/public/uploads/'.$item->image)}}" alt=""></td>
        <td>{{ $item->name}}</td>
        <td>{{ $item->ProductCategory->type}}</td>
        <td>{{ $item->weight}} Kg</td>
        <td>{{ $item->product_stock}}</td>
        <td>{{ $item->stock}}</td>
        <td>{{ $item->price}} Tk.</td>
        <td>{{ $item->discount}}.00%</td>
        <td>{{ $item->time}}</td>
        <td>{{ $item->status == 1 ? 'Active' : ($item->status == 2 ? 'Trending' : 'Inactive') }}</td>

        <td>
            <a href="{{route('product.edit',$item->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>


            <div class="">
            <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
            <i class="fas fa-action"></i> </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('trending.status', ['id' => $item->id]) }}">
                <i class="fas fa-arrow-up"></i> Trending
                </a>
                <a class="dropdown-item" href="#">
                <i class="fas fa-check-circle"></i> Active
                </a>
                <a class="dropdown-item" href="#">
                <i class="fas fa-times-circle"></i> Inactive
                </a>
            </div>
            </div>

            <a href="{{route('product.delete',$item->id)}}" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><i class="fas fa-trash"></i></a>
           

        </td>

      </tr>
      @endforeach
                                        
                                       
                                        
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>

@endsection


