<x-admin.app>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">All CAtegory</div>
            <div class="card-body">
                <!-- Tabs navs -->
                <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a data-mdb-tab-init class="nav-link active" id="ex1-tab-1" href="#ex1-tabs-1" role="tab"
                            aria-controls="ex1-tabs-1" aria-selected="true">Category</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a data-mdb-tab-init class="nav-link" id="ex1-tab-2" href="#ex1-tabs-2" role="tab"
                            aria-controls="ex1-tabs-2" aria-selected="false">Sub Category</a>
                    </li>
                </ul>
                <!-- Tabs navs -->

                <!-- Tabs content -->
                <div class="tab-content" id="ex1-content">
                    <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-end">
                                <a href="{{ route('categories.create') }}" class="btn btn-success">Add New
                                    Category</a>
                            </div>
                        </div>
                        <table class="table align-middle mb-0 bg-white">
                            <thead class="bg-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <a class="text-white btn btn-link btn-sm bg-secondary btn-rounded mx-2"
                                                href="{{ route('categories.edit', $category->id) }}">Edit</a>
                                            <a class="text-white btn btn-link btn-sm btn-rounded bg-danger delete"
                                                href="{{ route('categories.destroy', $category->id) }}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-end">
                                <a href="{{ route('sub.categories.create') }}" class="btn btn-success">Add New
                                    Sub Category</a>
                            </div>
                        </div>
                        <table class="table align-middle mb-0 bg-white">
                            <thead class="bg-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subCategories as $subCategory)
                                    <tr>
                                        <td>{{ $subCategory->name }}</td>
                                        <td>
                                            <a class="text-white btn btn-link btn-sm bg-secondary btn-rounded mx-2"
                                                href="{{ route('sub.categories.edit', $subCategory->id) }}">Edit</a>
                                            <a class="text-white btn btn-link btn-sm btn-rounded bg-danger delete"
                                                href="{{ route('sub.categories.destroy', $subCategory->id) }}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Tabs content -->
            </div>
        </div>
    </div>
</x-admin.app>
