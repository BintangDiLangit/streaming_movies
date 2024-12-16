@extends('admin.partials.index')

@section('hed')
    <title>Admin | Edit Film</title>
@endsection

@section('content')
    @include('admin.components.error-validation')

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h6>Edit Film</h6>
                </div>
                <div class="card-body">
                    <form id="filmForm" role="form text-left" action="{{ route('admin.film.update', $film->id) }}"
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row justify-content-between">
                            <!-- Left Column (Form Inputs) -->
                            <div class="col-md-6 order-2 order-md-1">
                                <div class="mb-3">
                                    <label for="">Thumbnail</label>
                                    <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                                    @error('thumbnail')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Title</label>
                                    <input type="text" class="form-control" placeholder="Title" aria-label="Title"
                                        id="title" name="title" value="{{ $film->title }}" required>
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Slug</label>
                                    <input type="text" class="form-control" placeholder="Slug (automated)" id="slug"
                                        name="slug" value="{{ $film->slug }}" readonly>
                                    @error('slug')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Total Minute</label>
                                    <input type="number" class="form-control" placeholder="Total Minute"
                                        name="total_minute" value="{{ $film->total_minute }}" required>
                                    @error('total_minute')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">URL video (embed link)</label>
                                    <input type="text" class="form-control" placeholder="URL video (embed link)"
                                        name="path_src_vidio" value="{{ $film->path_src_vidio }}" required>
                                    @error('path_src_vidio')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                {{-- <div class="mb-3">
                                    <label for="">File Video</label>
                                    <input type="file" id="videoFile" accept="video/mp4" class="form-control"
                                        placeholder="Video file, type embeded" aria-label="Path Source Vidio"
                                        aria-describedby="email-addon" name="video_file" required>
                                    @error('video_file')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div> --}}
                                <div class="mb-3">
                                    <label for="">Description</label>
                                    <textarea class="form-control" placeholder="Description..." name="description" style="height: 100px">{{ $film->description }}</textarea>
                                    @error('description')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="modal-footer">
                                    {{-- back button --}}
                                    <a href="{{ route('admin.film.index') }}" class="btn btn-secondary me-3">Back</a>
                                    {{-- save button --}}
                                    <button type="button" id="submitButton" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>

                            <!-- Right Column (Current Thumbnail Display) -->
                            <div class="col-md-6 text-center order-1 order-md-2 mb-3">
                                <h6>Thumbnail</h6>
                                <img id="thumbnailPreview" src="{{ $film->path_thumbnail }}" alt="Thumbnail"
                                    class="img-fluid rounded shadow-sm"
                                    style="width: 50%; height: auto; aspect-ratio: 3 / 4; object-fit: cover;">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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

    <!-- JavaScript for Slug Generation and Thumbnail Preview -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const titleInput = document.getElementById('title');
            const slugInput = document.getElementById('slug');
            const thumbnailInput = document.getElementById('thumbnail');
            const thumbnailPreview = document.getElementById('thumbnailPreview');

            // Update slug automatically based on title input
            titleInput.addEventListener('input', function() {
                let slug = titleInput.value
                    .toLowerCase()
                    .replace(/[^a-z0-9\s-]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-');
                slugInput.value = slug;
            });

            // Update thumbnail preview when a new file is selected
            thumbnailInput.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        thumbnailPreview.src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            });
        });

        const fileInput = document.getElementById('videoFile');

        document.getElementById('submitButton').addEventListener('click', async function(e) {
            e.preventDefault();

            const loadingOverlay = document.getElementById('loadingOverlay');
            const loadingMessage = document.getElementById('loadingMessage');
            loadingOverlay.style.display = 'flex';
            loadingMessage.style.display = 'none';


            try {
                loadingMessage.style.display = 'block';

                // Submit the Final Form
                const form = document.getElementById('filmForm');
                const formData = new FormData(form);

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
    </script>
@endsection
