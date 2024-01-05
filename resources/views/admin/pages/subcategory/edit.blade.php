<x-admin.app>
    <div class="container">
        <div class="row mt-5">
            <div class="card">
                <div class="card-header">Sub Category Update Form</div>
                <div class="card-body">
                    <form class="row g-3" action="{{ route('sub.categories.update', $subcategory->id) }}" method="POST">
                        @csrf
                        @method('PUT') {{-- Use the PUT method for updates --}}

                        <x-form-input colWidth="col-md-6" label="Category" id="category_id" name="category_id"
                            type="select">
                            <option selected disabled value="">Choose...</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if ($category->id === $subcategory->category_id) selected @endif>
                                    {{ $category->name }}</option>
                            @endforeach
                        </x-form-input>

                        <x-form-input colWidth="col-md-6" label="Subcategory" id="name" name="name"
                            value="{{ $subcategory->name }}" />

                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Update Subcategory</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin.app>
