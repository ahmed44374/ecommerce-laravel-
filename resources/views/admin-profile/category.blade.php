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
                                        <input type="text" class="form-control" id="categoryName" placeholder="Enter category name" name="category_name">
                                    </div>
                                     @error('category_name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <button type="submit" class="btn btn-primary">Add Category</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>

    <div class="container mt-5">
        <h2>Category Names</h2>
        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Category Name</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->category_name}}</td>
                    <td>
                                <a class="btn btn-primary btn-sm" href="/edit_category/{{ $category->id }}">Edit</a>
                            <form class="d-inline-block" method="POST" action="/view_category/{{ $category->id }}">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                    </td>
                </tr>
            @endforeach

            <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>


</div>
<x-admin-footer></x-admin-footer>
