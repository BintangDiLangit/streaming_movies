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
        <form role="form text-left" action="{{ route('admin.film.update', $film->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="row justify-content-between">
            <!-- Left Column (Form Inputs) -->
            <div class="col-md-6 order-2 order-md-1">
              <div class="mb-3">
                <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                @error('thumbnail')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Title" aria-label="Title" id="title" name="title" value="{{ $film->title }}" required>
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Slug (automated)" id="slug" name="slug" value="{{ $film->slug }}" readonly>
                @error('slug')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <input type="number" class="form-control" placeholder="Total Minute" name="total_minute" value="{{ $film->total_minute }}" required>
                @error('total_minute')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="URL video (embed link)" name="path_src_vidio" value="{{ $film->path_src_vidio }}" required>
                @error('path_src_vidio')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <textarea class="form-control" placeholder="Description..." name="description" style="height: 100px">{{ $film->description }}</textarea>
                @error('description')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="modal-footer">
                {{-- back button --}}
                <a href="{{ route('admin.film.index') }}" class="btn btn-secondary me-3">Back</a>
                {{-- save button --}}
                <button type="submit" class="btn btn-primary">Save Changes</button>
              </div>
            </div>

            <!-- Right Column (Current Thumbnail Display) -->
            <div class="col-md-6 text-center order-1 order-md-2 mb-3">
              <h6>Thumbnail</h6>
              <img id="thumbnailPreview" src="{{ $film->path_thumbnail }}" alt="Thumbnail" class="img-fluid rounded shadow-sm" style="width: 50%; height: auto; aspect-ratio: 3 / 4; object-fit: cover;">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

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

</script>
@endsection
