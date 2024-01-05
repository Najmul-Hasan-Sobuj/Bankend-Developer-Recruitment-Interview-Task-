<x-admin.app>
    <div class="container">
        <div class="row mt-5">
            <div class="card">
                <div class="card-header">Category Create Form</div>
                <div class="card-body">
                    <form class="row g-3" action="{{ route('categories.store') }}" method="POST">
                        @csrf
                        <x-form-input colWidth="col-md-12" label="Name" name="name" value="" />
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin.app>
