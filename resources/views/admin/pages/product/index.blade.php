<x-admin.app>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-4">Product Table</div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4 d-flex justify-content-end">
                        <a href="{{ route('products.create') }}" class="btn btn-success">Add New Product</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                            <th>Name</th>
                            <th>SKU</th>
                            <th>Quantity</th>
                            <th>Image</th>
                            <th>Old Price</th>
                            <th>New Price</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->sku }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . ($product->image ?? 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg')) }}"
                                        alt="{{ $product->name }}" loading="lazy" style="width: 45px; height: 45px"
                                        class="rounded-circle" />
                                    {{-- if image is not link to the storage folder the the image are not loaded --}}
                                </td>
                                <td>{{ $product->old_price }}</td>
                                <td>{{ $product->new_price }}</td>
                                <td>{{ Str::limit($product->description, 20, '...') }}</td>
                                <td>
                                    <a class="text-white btn btn-link btn-sm bg-secondary btn-rounded mx-2"
                                        href="{{ route('products.edit', $product->id) }}">Edit</a>
                                    <a class="text-white btn btn-link btn-sm btn-rounded bg-info mx-2"
                                        href="{{ route('products.show', $product->id) }}">View</a>
                                    <a class="text-white btn btn-link btn-sm btn-rounded bg-danger delete"
                                        href="{{ route('products.destroy', $product->id) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    </div>

</x-admin.app>
