@php use Illuminate\Support\Str; @endphp
<x-admin-header/>
<x-admin-sidebar></x-admin-sidebar>
<div class="page-content bg-gray-200/80">
    <div class="container mt-5">
        <h2 class="mb-4">Products</h2>
        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Description</th>
                <th scope="col">Category</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td><img src="/products/{{ $product->image }}" class="img-fluid" alt="Product Image 1"
                             style="max-width: 150px;"></td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->price }}</td>
                    <td> {{ $product->quantity }}</td>
                    <td>{{ Str::words($product->description,10,'...') }}</td>
                    <td>{{ $product->category }}</td>
                </tr>
            @endforeach

            <!-- Add more products as needed -->
            </tbody>
        </table>
        <div class="m-4">
            {{ $products->links() }}
        </div>

    </div>

</div>

<x-admin-footer></x-admin-footer>
