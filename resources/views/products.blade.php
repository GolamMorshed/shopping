@extends('admin_view.nav-sidebar')

@section('product')
<div class="container">
    <h2>Products</h2>          
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>image</th>
          <th>image1</th>
          {{-- <th>image2</th>
          <th>image3</th>
          <th>image4</th> --}}
          <th>name</th>
          <th>GUID</th>
          <th>UOP</th>
          <th>Price</th>
          <th style="text-align: center">Action</th>
        </tr>
      </thead>
      <tbody>     
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td><img src="{{ asset('storage/product_images/' . $product->image) }}" alt="Image" style="width:100px; height:100px"></td>
            <td><img src="{{ asset('storage/product_images/' . $product->image1) }}" alt="Image" style="width:100px; height:100px"></td>
            {{-- <td><img src="{{ asset('storage/product_images/' . $product->image2) }}" alt="Image" style="width:100px; height:100px"></td>
            <td><img src="{{ asset('storage/product_images/' . $product->image3) }}" alt="Image" style="width:100px; height:100px"></td>
            <td><img src="{{ asset('storage/product_images/' . $product->image4) }}" alt="Image" style="width:100px; height:100px"></td> --}}
            <td>{{$product->name}}</td>
            <td>{{$product->GUID}}</td>
            <td>{{$product->uop}}</td>
            <td>{{$product->price}}</td>
            <td style="float:right"><Button type="button" class="btn btn-success">Variation</Button>
              <Button type="button" class="btn btn-primary">Edit</Button>
              <Button type="button"  class="btn btn-danger">Deactive</Button></td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>



@endsection