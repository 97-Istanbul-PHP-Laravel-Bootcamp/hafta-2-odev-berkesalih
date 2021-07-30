@extends("layouts.index")
@section("title")
    Ürün Ekleme/Düzenleme
@endsection
@section("content")
    <div class="row">
        <div class="col-md-12">
            <div class="card-body">
                <form class="form" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="product-name-column">Product Name</label>
                                <input type="text" id="product-name-column" value="" class="form-control" placeholder="Product Name" name="pname">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="category-name-column">Category Name</label>
                                <input type="text" id="category-name-column" class="form-control" placeholder="Category Name" name="catname">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="price-column">Price</label>
                                <input type="text" id="price-column" class="form-control" placeholder="Price($)" name="price">
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
