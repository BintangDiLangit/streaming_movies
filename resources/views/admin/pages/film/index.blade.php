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
                                        {{-- @dd($data) --}}
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
                                                class="text-secondary font-weight-bold text-xs delete-alert me-5"
                                                data-bs-url="{{ route('admin.film.destroy', $data->id) }}"
                                                data-bs-method="DELETE">
                                                <i class="fa fa-trash me-sm-1"></i>
                                                <span class="d-sm-inline d-none">Delete</span>
                                            </a>
                                            <a class="text-secondary font-weight-bold text-xs copy-url" href="#"
                                                data-url="{{ env('APP_URL') . '/detail/' . $data->slug }}"
                                                onclick="copyToClipboard(this)">
                                                Copy URL
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
    <form id="filmForm" role="form text-left" action="{{ route('admin.film.store') }}" method="post"
        enctype="multipart/form-data">
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
                            <label for="">URL video (embed link)</label>
                            <input type="text" class="form-control" placeholder="URL video (embed link)"
                                name="path_src_vidio" required>
                            @error('path_src_vidio')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            {{-- <label for="">File Video</label>
                            <input type="file" id="videoFile" accept="video/mp4" class="form-control" name="video_file"
                                required>
                            @error('video_file')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror --}}
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
                        <button type="button" id="submitButton" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Loading Overlay -->
    <div id="loadingOverlay"
        style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9999; align-items: center; justify-content: center;">
        <div style="text-align: center; color: white;">
            <div id="progressContainer" style="display: none;">
                <p>Uploading video...</p>
                <progress id="progressBar" value="0" max="100" style="width: 300px;"></progress>
            </div>
            <div id="loadingMessage" style="display: none;">
                <p>Submitting data, please wait...</p>
                <div class="spinner"
                    style="border: 4px solid #f3f3f3; border-top: 4px solid #3498db; border-radius: 50%; width: 40px; height: 40px; animation: spin 2s linear infinite;">
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Spinner animation */
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>

    @include('admin.components.modal-confirmation-delete')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const titleInput = document.getElementById('title');
            const slugInput = document.getElementById('slug');

            titleInput.addEventListener('input', function() {
                let slug = titleInput.value
                    .toLowerCase()
                    .replace(/[^a-z0-9\s-]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-');

                slugInput.value = slug;
            });
        });

        // const fileInput = document.getElementById('videoFile');

        document.getElementById('submitButton').addEventListener('click', async function(e) {
            e.preventDefault();

            // const fileInput = document.getElementById('videoFile');
            // const file = fileInput.files[0];

            // if (!file) {
            //     alert('Please select a video file.');
            //     return;
            // }
            // const fileName = file.name;

            // const chunkSize = 10 * 1024 * 1024; // 10MB per chunk
            // const totalChunks = Math.ceil(file.size / chunkSize);

            const loadingOverlay = document.getElementById('loadingOverlay');
            // const progressBar = document.getElementById('progressBar');
            // const progressContainer = document.getElementById('progressContainer');
            const loadingMessage = document.getElementById('loadingMessage');
            loadingOverlay.style.display = 'flex';
            // progressContainer.style.display = 'block';
            loadingMessage.style.display = 'none';


            try {
                // Process Chunk Upload with Progress Bar
                // for (let chunkIndex = 0; chunkIndex < totalChunks; chunkIndex++) {
                //     const chunk = file.slice(chunkIndex * chunkSize, (chunkIndex + 1) * chunkSize);

                //     const formData = new FormData();
                //     formData.append('chunk', chunk);
                //     formData.append('chunkIndex', chunkIndex);
                //     formData.append('totalChunks', totalChunks);
                //     formData.append('fileName', fileName);

                //     try {
                //         const response = await fetch('{{ route('admin.film.uploadChunk') }}', {
                //             method: 'POST',
                //             headers: {
                //                 'X-CSRF-TOKEN': '{{ csrf_token() }}'
                //             },
                //             body: formData
                //         });

                //         // Update Progress Bar
                //         progressBar.value = Math.round(((chunkIndex + 1) / totalChunks) * 100);
                //     } catch (error) {
                //         console.error('Error uploading chunk:', error);
                //         alert('Error uploading file. Please try again.');
                //         loadingOverlay.style.display = 'none'; // Hide the overlay
                //         return;
                //     }
                // }

                // Once all chunks are uploaded, hide progress bar and show loading message
                // progressContainer.style.display = 'none';
                loadingMessage.style.display = 'block';

                // Submit the Final Form
                const form = document.getElementById('filmForm');
                const formData = new FormData(form);
                // formData.append('video_file_name', fileName);

                const response = await fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: formData
                });

                const result = await response.json();
                if (result.status === 'success') {
                    console.log(result.data);
                    // Hide the overlay and reload the page
                    loadingOverlay.style.display = 'none';
                    window.location.reload();
                } else {
                    console.error(`Error: ${result.message}`);
                    alert(`Error: ${result.message}`);
                    loadingOverlay.style.display = 'none'; // Hide the overlay
                }
            } catch (error) {
                console.error('Error saving form:', error);
                alert('An unexpected error occurred.');
                loadingOverlay.style.display = 'none'; // Hide the overlay
            }
        });

        function copyToClipboard(element) {
            const url = element.getAttribute('data-url');

            const tempInput = document.createElement('input');
            tempInput.value = url;
            document.body.appendChild(tempInput);

            tempInput.select();
            tempInput.setSelectionRange(0, 99999);
            document.execCommand('copy');

            document.body.removeChild(tempInput);

            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: 'URL Copied!',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                customClass: {
                    popup: 'colored-toast'
                },
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer);
                    toast.addEventListener('mouseleave', Swal.resumeTimer);
                }
            });
        }
    </script>
@endsection
