@include('navbar')
<div class="container p-3">
    <h2>Members</h2>
    <a href="{{ route('member.create') }}" class="btn btn-primary">Add Member</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Status</th>
                <th scope="col">Photo</th>
                <th scope="col">Payment Receipt</th>
                <th scope="col">Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($members as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->phone }}</td>
                    <td><i class="fas fa-link"></i>{{ $item->status }}</td>
                    <td>
                        @if ($item->photo)
                            <img src="{{ asset('storage/' . $item->photo) }}" alt="Photo" class="img-thumbnail"
                                style="width: 100px; height: auto;"
                                onclick="showImage('{{ asset('storage/' . $item->photo) }}')" />
                        @else
                            No Photo
                        @endif
                    </td>
                    <td>
                        @if ($item->payment_receipt)
                            <img src="{{ asset('storage/' . $item->payment_receipt) }}" alt="Photo"
                                class="img-thumbnail" style="width: 100px; height: auto;"
                                onclick="showImage('{{ asset('storage/' . $item->photo) }}')" />
                        @else
                            No Receipt
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('member.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                        <button title="Delete" class="btn btn-danger delete-btn" data-id="{{ $item->id }}"
                            data-bs-toggle="modal" data-bs-target="#handleDelete">
                            Hapus
                        </button>

                        <form action="{{ route('member.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- IMAGE OVERLAY --}}
    <div id="imageOverlay" class="image-overlay" style="display: none;" onclick="closeImageOverlay()">&times;">
        <div class="a"></div>
        <span class="close-btn" onclick="closeImageOverlay()">&times;</span>
        <img id="overlayImage" src="" class="overlay-image">
    </div>
    {{-- END OF IMAGE OVERLAY --}}

    <!-- DELETE MODAL -->
    <div class="modal fade" id="handleDelete">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this item?</p>
                    <form id="deleteForm" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary">Delete</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF DELETE MODAL -->

</div>
