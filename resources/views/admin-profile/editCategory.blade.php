
<x-admin-header/>
<x-admin-sidebar></x-admin-sidebar>
<div class="page-content bg-gray-200/80">
    <form method="POST" action="{{ route('add_category') }}">
        @csrf
        <div class="container mt-5 bg-amber-100">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add Category</h3>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="categoryName">Category Name</label>
                                    <input type="text" class="form-control" id="categoryName" value="{{ $category->category_name}}" name="category_name">
                                </div>
                                @error('category_name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <button type="submit" class="btn btn-primary">Edit Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<x-admin-footer></x-admin-footer>
