@extends('admin_view.nav')

@section('add_product_content')
<div class="" style="padding:100px">
    <form action="{{route('addProd')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Product Image:</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Product Image1:</label>
          <input type="file" name="image1" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Product Image2:</label>
          <input type="file" name="image2" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Product Image3:</label>
          <input type="file" name="image3" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Product Image4:</label>
          <input type="file" name="image4" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Name:</label>
            <input name="name" class="form-control" placeholder="Enter name">
        </div>
        <div class="form-group">
          <label for="">Price:</label>
          <input name="price" class="form-control" placeholder="Enter Price">
      </div>
        <div class="form-group">
            <label for="">UOP:</label>
            <input name="uop" class="form-control" placeholder="Enter UOP">
        </div>
        <div class="col-xs-6 form-group">
          <label for="" class="control-label">Variation Name</label>
          <input type="variation_name" class="form-control" placeholder="Enter Variation name">
        </div>
        <div class="col-xs-6 form-group">
          <label for="" class="control-label">Variation Price</label>
          <input type="variation_price" class="form-control" id="" placeholder="Price">
        </div>
        <div class="col-xs-6 form-group">
          
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
</div>

{{-- <div class="container">
  <h2>Large Modal</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Large Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>This is a large modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div> --}}
@endsection
