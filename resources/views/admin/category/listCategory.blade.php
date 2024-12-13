@extends('admin.layout.default')

@section('title')
@parent
Dashboard
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12 align-items-stretch">
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-3">Category</h5>
                <div class="table-responsive">
                    @if (session('message'))
                        <div class="alert alert-primary" role="alert">
                            {{session('message')}}
                        </div>
                    @endif
                    @if (session('message_error'))
                        <div class="alert alert-danger" role="alert">
                            {{session('message_error')}}
                        </div>
                    @endif
                    <button type="button" class="btn btn-primary mb-4" style="margin-left: 950px;"
                        data-bs-toggle="modal" data-bs-target="#addCategory">Thêm mới</button>
                    <table class="table mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">ID</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Name</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Acction</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listCategory as $key => $value) 
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">{{ $key + 1 }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="mb-0 fw-normal">{{ $value->ten_dm }}</h6>
                                    </td>
                                
                                    <td class="border-bottom-0 d-flex">
                                        <button class="btn btn-warning m-1" data-bs-toggle="modal"
                                            data-bs-target="#editCategory" data-id="{{ $value->id }}"><i
                                                class="ti ti-edit"></i></button>
                                        <button class="btn btn-danger m-1" data-bs-toggle="modal"
                                            data-bs-target="#deleteCategory" data-id="{{ $value->id }}"><i
                                                class="ti ti-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example" style="margin-left: 900px; margin-top: 40px;">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal add-->
<div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="addCategoryLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCategoryLabel">Thêm mới danh mục</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('admin.categories.addCategory')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="ten_dm" class="form-label">Tên danh mục</label>
                        <input type="text" class="form-control" id="ten_dm" name="ten_dm">
                        @error('ten_dm')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Xác nhận thêm mới</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal delete-->
<div class="modal fade" id="deleteCategory" tabindex="-1" aria-labelledby="deleteCategoryLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteCategoryLabel">Cảnh báo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Bạnc có muốn xóa không?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <form action="" id="confirmDelete" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger">Xác nhận xóa</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal update -->
<div class="modal fade" id="editCategory" tabindex="-1" aria-labelledby="editCategoryLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCategoryLabel">Cập nhật</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.categories.updateCategory') }}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" value="" id="idCategoryUpdate" name="idCategory">
                        <div class="mb-3">
                            <label for="ten_dmUpdate" class="form-label">Tên danh mục</label>
                            <input type="text" class="form-control" id="ten_dmUpdate" name="ten_dm">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<script>
    // DELETE
    var deleteCategory = document.getElementById('deleteCategory')
    deleteCategory.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget
        var idCategory = button.getAttribute('data-id')
        console.log(idCategory);
        
        let confirmDelete = document.querySelector('#confirmDelete')
        confirmDelete.setAttribute('action', '{{ route('admin.categories.deleteCategory') }}?id=' + idCategory)
    })

    // UPDATE
    var editCategory = document.getElementById('editCategory')
    editCategory.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget
        var idCategory = button.getAttribute('data-id')
        // call api
        let url = "{{ route('admin.categories.detailCategory') }}?id=" + idCategory;
        fetch(url, {
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        })

            .then((response) => response.json())
            .then((data) => {
                   console.log(data);
                document.querySelector('#idCategoryUpdate').value = data.id
                document.querySelector('#ten_dmUpdate').value = data.ten_dm
            })

    })

</script>

@endsection