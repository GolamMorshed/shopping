@extends('admin_view.nav-sidebar')

@section('product')
<div class="container">
    <h2>Products</h2>          
    <table class="table">
      <thead>
        <tr>
          <th>Image</th>
          <th>Image1</th>
          <th>Image2</th>
          <th>Image3</th>
          <th>Image4</th>
          <th>name</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        @foreach($products as $product)
            
            <img src="{{ asset('storage/app/' . $product->image) }}" alt="Dynamic Image">
            
            <td>{{$product->image}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->uop}}</td>
        @endforeach
        </tr>
      </tbody>
    </table>
</div>
@endsection