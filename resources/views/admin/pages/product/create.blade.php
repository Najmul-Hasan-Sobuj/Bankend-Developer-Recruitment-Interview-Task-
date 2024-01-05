<x-admin.app>
    <div class="container">
        <div class="row mt-5">
            <div class="card">
                <div class="card-header">Product Create Form</div>
                <div class="card-body">
                    <form class="row g-3" action="{{ route('products.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <x-form-input colWidth="col-md-4" label="Category" id="category_id" name="category_id"
                            type="select">
                            <option selected disabled value="">Choose...</option>
                            @foreach ($categorys as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </x-form-input>
                        <x-form-input colWidth="col-md-4" label="Subcategory" id="sub_category_id"
                            name="sub_category_id" type="select">
                            <option selected disabled value="">Choose...</option>
                            {{-- Subcategories will be loaded here --}}
                        </x-form-input>
                        <x-form-input colWidth="col-md-4" label="Name" name="name" value="" />
                        <x-form-input colWidth="col-md-4" label="SKU" name="sku" value="" />
                        <x-form-input colWidth="col-md-4" label="Quantity" name="quantity" value="" />
                        <x-form-input colWidth="col-md-4" label="Image URL" name="image" type="file"
                            value="" />
                        <x-form-input colWidth="col-md-4" label="Old Price" name="old_price" value="" />
                        <x-form-input colWidth="col-md-4" label="New Price" name="new_price" value="" />
                        <x-form-input colWidth="col-md-8" type="textarea" name="description" label="Description" />
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
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
