<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Members</h1>
    </div>
    @if (auth()->user()->access == '1')
        <div class="add mb-4">
            <a href="{{ route('member.create') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add Member</a>
        </div>
    @endif

    <!-- Search Bar -->
    <div class="mb-3">
        <input type="text" id="tableSearch" class="form-control" placeholder="Search members...">
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">History Members</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Status</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Payment Receipt</th>
                            @if (auth()->user()->access == '1')
                                <th scope="col">Actions</th>
                            @endif


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($members as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>
                                    @if ($item->status == '1')
                                        <span class="m-0 font-weight-bold text-success">Active</span>
                                    @else
                                        <span class="m-0 font-weight-bold text-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($item->photo)
                                        <img src="{{ asset('storage/' . $item->photo) }}" alt="Photo"
                                            class="img-thumbnail dark-thumb" style="width: 100px; height: auto;"
                                            onclick="showImage('{{ asset('storage/' . $item->photo) }}')" />
                                    @else
                                        No Photo
                                    @endif
                                </td>
                                <td>
                                    @if ($item->payment_receipt)
                                        <img src="{{ asset('storage/' . $item->payment_receipt) }}" alt="Photo"
                                            class="img-thumbnail dark-thumb" style="width: 100px; height: auto;"
                                            onclick="showImage('{{ asset('storage/' . $item->photo) }}')" />
                                    @else
                                        No Receipt
                                    @endif
                                </td>
                                @if (auth()->user()->access == '1')
                                    <td>
                                        <a href="{{ route('member.edit', $item->id) }}"
                                            class="btn btn-warning btn-sm"><i
                                                class="fa-solid fa-pen-to-square"></i>Edit</a>
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#handleDelete"
                                            onclick="document.getElementById('deleteForm').action = '{{ route('member.destroy', $item->id) }}'"><i
                                                class="fa-solid fa-trash"></i> Delete</button>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

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
<!-- /.container-fluid -->
