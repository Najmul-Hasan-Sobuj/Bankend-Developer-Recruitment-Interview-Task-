<x-admin.app>
    <div class="container">
        <div class="row mt-5">
            <div class="card">
                <div class="card-header">Category Update Form</div>
                <div class="card-body">
                    <form class="row g-3" action="{{ route('categories.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PUT') {{-- Use the PUT method for updates --}}
                        <x-form-input colWidth="col-md-12" label="Name" name="name" :value="$category->name" />
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Update Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin.app>
