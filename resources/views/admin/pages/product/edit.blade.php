<x-admin.app>
    <div class="container">
        <div class="row mt-5">
            <div class="card">
                <div class="card-header">Edit Product</div>
                <div class="card-body">
                    <form class="row g-3 needs-validation" novalidate
                        action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') {{-- Use the PUT method for updating --}}

                        <!-- Category Select Input -->
                        <x-form-input colWidth="col-md-4" label="Category" id="category_id" name="category_id"
                            type="select">
                            <option selected disabled value="">Choose...</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </x-form-input>

                        <!-- Subcategory Select Input -->
                        <x-form-input colWidth="col-md-4" label="Subcategory" id="sub_category_id"
                            name="sub_category_id" type="select">
                            <option selected disabled value="">Choose...</option>
                            @foreach ($subcategories as $subcategory)
                                <option value="{{ $subcategory->id }}"
                                    {{ $product->sub_category_id == $subcategory->id ? 'selected' : '' }}>
                                    {{ $subcategory->name }}
                                </option>
                            @endforeach
                        </x-form-input>

                        <!-- Name Input -->
                        <x-form-input colWidth="col-md-4" label="Name" name="name" value="{{ $product->name }}" />

                        <!-- SKU Input -->
                        <x-form-input colWidth="col-md-4" label="SKU" name="sku" value="{{ $product->sku }}" />

                        <!-- Quantity Input -->
                        <x-form-input colWidth="col-md-4" label="Quantity" name="quantity"
                            value="{{ $product->quantity }}" />

                        <!-- Image URL Input -->
                        <x-form-input colWidth="col-md-4" label="Image URL" name="image" type="file"
                            value="{{ $product->image }}" />

                        <!-- Old Price Input -->
                        <x-form-input colWidth="col-md-4" label="Old Price" name="old_price"
                            value="{{ $product->old_price }}" />

                        <!-- New Price Input -->
                        <x-form-input colWidth="col-md-4" label="New Price" name="new_price"
                            value="{{ $product->new_price }}" />

                        <!-- Description Textarea -->
                        <x-form-input colWidth="col-md-8" type="textarea" name="description" label="Description"
                            :value="old('description', $product->description ?? '')"></x-form-input>

                        <!-- Submit Button -->
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Update Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelector('#category_id').addEventListener('change', function() {
                    let categoryId = this.value;
                    fetch(`/get-subcategories?category_id=${categoryId}`)
                        .then(response => response.json())
                        .then(subcategories => {
                            let subCategorySelect = document.querySelector('#sub_category_id');
                            subCategorySelect.innerHTML =
                                '<option selected disabled value="">Choose...</option>';
                            subcategories.forEach(sc => {
                                subCategorySelect.innerHTML +=
                                    `<option value="${sc.id}">${sc.name}</option>`;
                            });
                        });
                });
            });
        </script>
    @endpush
</x-admin.app>
