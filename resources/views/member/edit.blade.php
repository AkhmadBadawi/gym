@include('navbar')
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if (session('errors'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="container p-3">
    <form action="{{ route('member.update', $member->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div></div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $member->name }}">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $member->address }}">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $member->phone }}">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status">
                <option value=1 {{ old('status', $member->status) == 1 ? 'selected' : '' }}>Active</option>
                <option value=0 {{ old('status', $member->status) == 0 ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" class="form-control" id="photo" name="photo" value="{{ $member->photo }}">
            <small class="form-text text-muted">Upload jpg, png, jpeg</small>
        </div>
        <div class="mb-3">
            <label for="payment_receipt" class="form-label">Payment Receipt</label>
            <input type="file" class="form-control" id="payment_receipt" name="payment_receipt"
                value="{{ $member->payment_receipt }}">
            <small class="form-text text-muted">Upload jpg, png, jpeg</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
