<x-admin.app>
    <div class="container">
        <div class="row mt-5">
            <div class="card">
                <div class="card-header">Product Details</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <p>{{ $product->category ? $product->category->name : 'N/A' }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Subcategory</label>
                        <p>{{ $product->subcategory ? $product->subcategory->name : 'N/A' }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <p>{{ $product->name }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">SKU</label>
                        <p>{{ $product->sku }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Quantity</label>
                        <p>{{ $product->quantity }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <img src="{{ !empty($product->image) ? asset('storage/' . $product->image) : 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg' }}"
                            alt="{{ $product->name }}" loading="lazy" style="width: 45px; height: 45px"
                            class="rounded-circle img-fluid" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Old Price</label>
                        <p>{{ $product->old_price }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">New Price</label>
                        <p>{{ $product->new_price }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <p>{{ $product->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.app>
