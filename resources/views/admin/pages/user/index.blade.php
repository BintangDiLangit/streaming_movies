@extends('admin.partials.index')

@section('hed')
<title>Admin | User Management</title>
@endsection

@section('content')
@include('admin.components.error-validation')
<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0 d-flex justify-content-between align-items-center">
        <h6>User Registered</h6>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add new</button>
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">User</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($datas as $data)
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm">{{ $data->name }}</h6>
                      <p class="text-xs text-secondary mb-0">{{ $data->email }}</p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0">Role</p>
                  <p class="text-xs text-secondary mb-0">User</p>
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
                  <a href="javascript:;" class="text-secondary font-weight-bold text-xs me-5" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-id="{{ $data->id }}" data-bs-name="{{ $data->name }}" data-bs-email="{{ $data->email }}" data-toggle="tooltip" data-original-title="Edit user">
                    Edit
                  </a>

                  <a href="javascript:;" class="text-secondary font-weight-bold text-xs delete-alert" data-bs-url="{{ route('admin.film.destroy', $data->id) }}" data-bs-method="DELETE">
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
<form role="form text-left" action="{{ route('admin.user.store') }}" method="post">
  @csrf
  <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add new user</h1>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="email-addon" name="name" required>
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon" name="email" required>
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" name="password" required>
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

<!-- Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit User</h5>
      </div>
      <form role="form text-left" action="{{ route('admin.user.update') }}" method="post">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <input type="hidden" id="editUserId" name="id">
          <div class="mb-3">
            <label for="editName" class="form-label">Name*</label>
            <input type="text" class="form-control" id="editName" name="name" required>
          </div>
          <div class="mb-3">
            <label for="editEmail" class="form-label">Email*</label>
            <input type="email" class="form-control" id="editEmail" name="email" required>
          </div>
          <div class="mb-3">
            <label for="editPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="editPassword" name="password">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

@include('admin.components.modal-confirmation-delete')

<script>
  var editModal = document.getElementById('editModal');
  editModal.addEventListener('show.bs.modal', function(event) {
    // Button that triggered the modal
    var button = event.relatedTarget;

    // Extract info from data-bs-* attributes
    var userId = button.getAttribute('data-bs-id');
    var userName = button.getAttribute('data-bs-name');
    var userEmail = button.getAttribute('data-bs-email');

    // Update the modal's content.
    var modalTitle = editModal.querySelector('.modal-title');
    var inputId = editModal.querySelector('#editUserId');
    var inputName = editModal.querySelector('#editName');
    var inputEmail = editModal.querySelector('#editEmail');

    // Set values to modal inputs
    inputId.value = userId;
    inputName.value = userName;
    inputEmail.value = userEmail;
  });
</script>

@endsection
