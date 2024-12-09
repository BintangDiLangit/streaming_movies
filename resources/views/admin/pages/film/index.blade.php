@extends('admin.partials.index')

@section('hed')
    <title>Admin | User Management</title>
@endsection

@section('content')
    @include('admin.components.error-validation')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <form action="{{ route('admin.film.index') }}" method="get">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <h6>Film in database</h6>
                        <div class="input-group flex-nowrap w-50">
                            <span class="input-group-text" id="addon-wrapping">
                                <i class="fa fa-search"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Search title" aria-label="Search"
                                aria-describedby="addon-wrapping" name="search" value="{{ request()->input('search') }}">
                        </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add
                            new</button>
                    </div>
                </form>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Film
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Function</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Launch at</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $data->title }}</h6>
                                                    <p class="text-xs text-secondary mb-0">Movie</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $data->total_minute }}</p>
                                            <p class="text-xs text-secondary mb-0">Minutes</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">Active</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                {{ $data->created_at->diffForHumans() }}
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="{{ route('admin.film.edit', $data->id) }}"
                                                class="text-secondary font-weight-bold text-xs me-5" data-toggle="tooltip"
                                                data-original-title="Edit user">
                                                Edit
                                            </a>

                                            <a href="javascript:;"
                                                class="text-secondary font-weight-bold text-xs delete-alert"
                                                data-bs-url="{{ route('admin.film.destroy', $data->id) }}"
                                                data-bs-method="DELETE">
                                                <i class="fa fa-trash me-sm-1"></i>
                                                <span class="d-sm-inline d-none">Delete</span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{ $datas->links('admin.components.paginator') }}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <form role="form text-left" action="{{ route('admin.film.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal fade modal-lg" id="addModal" tabindex="-1" aria-labelledby="addModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add new film</h1>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="">Thumbnail</label>
                            <input type="file" class="form-control" placeholder="Email" aria-label="Email"
                                aria-describedby="email-addon" name="thumbnail" required>
                            @error('thumbnail')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Title</label>
                            <input type="text" class="form-control" placeholder="Title" aria-label="Title"
                                aria-describedby="title-addon" id="title" name="title" required>
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Slug</label>
                            <input type="text" class="form-control" placeholder="Slug (automation)" aria-label="Slug"
                                aria-describedby="slug-addon" id="slug" name="slug" readonly>
                            @error('slug')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">File Video</label>
                            <input type="file" accept="video/mp4" class="form-control"
                                placeholder="Video file, type embeded" aria-label="Path Source Vidio"
                                aria-describedby="email-addon" name="video_file" required>
                            @error('video_file')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <textarea type="text" class="form-control" placeholder="Description ..." aria-label="Password"
                                aria-describedby="password-addon" name="description"></textarea>
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    @include('admin.components.modal-confirmation-delete')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const titleInput = document.getElementById('title');
            const slugInput = document.getElementById('slug');

            titleInput.addEventListener('input', function() {
                let slug = titleInput.value
                    .toLowerCase()
                    .replace(/[^a-z0-9\s-]/g, '') // Menghapus karakter khusus
                    .replace(/\s+/g, '-') // Mengganti spasi dengan "-"
                    .replace(/-+/g, '-'); // Menghilangkan tanda "-" berlebih

                slugInput.value = slug;
            });
        });
    </script>
@endsection
