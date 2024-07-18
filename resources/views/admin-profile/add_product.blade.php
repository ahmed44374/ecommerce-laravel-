
<x-admin-header/>
<x-admin-sidebar></x-admin-sidebar>
<div class="page-content bg-gray-200/80 text-white">
<div class="container mt-5">
    <h2 class="mb-4">Product Form</h2>
    <form enctype="multipart/form-data" class="text-white" method="POST" action="{{ route('insert_product') }}" >
        @csrf
        <div class="form-group">
            <label for="productType">Product Title</label>
            <input type="text" class="form-control" id="productType" placeholder="Enter product Title" name="title">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" rows="3" placeholder="Enter product description"></textarea>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input name="price" type="number" class="form-control" id="price" placeholder="Enter price">
        </div>

        <div class="form-group">
            <label for="price">Quantity</label>
            <input name="quantity" type="number" class="form-control" id="quantity" placeholder="Enter Quantity">
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" class="form-control" id="category">
                @foreach($categories as $category)
                    <option>{{ $category->category_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="image">Product Image</label>
            <input name="image" type="file" class="form-control-file" id="image">
        </div>
        <button type="submit" class="btn btn-success">ِAdd Product</button>
    </form>
</div>

</div>
<x-admin-footer></x-admin-footer>
