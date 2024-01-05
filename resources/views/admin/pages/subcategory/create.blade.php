<x-admin.app>
    <div class="container">
        <div class="row mt-5">
            <div class="card">
                <div class="card-header">Sub Category Create Form</div>
                <div class="card-body">
                    <form class="row g-3" action="{{ route('sub.categories.store') }}" method="POST">
                        @csrf
                        <x-form-input colWidth="col-md-6" label="Category" id="category_id" name="category_id"
                            type="select">
                            <option selected disabled value="">Choose...</option>
                            @foreach ($categorys as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </x-form-input>
                        <x-form-input colWidth="col-md-6" label="Subcategory" id="name" name="name"
                            value="" />
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin.app>
