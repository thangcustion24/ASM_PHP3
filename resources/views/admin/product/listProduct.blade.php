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
                <h5 class="card-title fw-semibold mb-3">Product</h5>
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
                    <a href="{{ route('admin.products.addProduct') }}" class="btn btn-primary mb-4"
                        style="margin-left: 950px;">Thêm mới</a>
                    <table class="table mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">ID</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Tên sản phẩm</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Danh mục</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Image </h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Acction</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listProduct as $key => $value) 
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">{{ $key + 1 }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="mb-0 fw-normal">{{ $value->ten_sp }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal">{{ $value->category->ten_dm }}</p>
                                        <div id="text-container"></div>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal">
                                            @foreach($value->images as $image)
                                                <img src="{{ asset($image->image_url) }}" alt="hinh-anh"
                                                    style="width:50px; height:50px; object-fit:cover;">
                                            @endforeach
                                        </p>
                                        <div id="text-container"></div>
                                    </td>
                                    <td class="border-bottom-0 d-flex">

                                        <a href="{{ route('admin.products.detailProduct', $value->id) }}"
                                            class="btn btn-success m-1"><i class="ti ti-zoom-code"></i></a>

                                        <a href="{{ route('admin.products.updateProduct', $value->id) }}"
                                            class="btn btn-warning m-1"><i class="ti ti-edit"></i></a>

                                        <button class="btn btn-danger m-1" data-bs-toggle="modal"
                                            data-bs-target="#deleteProduct" data-id="{{ $value->id }}"><i
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


<!-- Modal delete-->
<div class="modal fade" id="deleteProduct" tabindex="-1" aria-labelledby="deleteProductLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteProductLabel">Admin Cho Biết</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Anh Nguyên Đẹp Trai Có Muốn Xóa Không ???
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <form action="" id="confirmDelete" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger">Xóa</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    // DELETE
    var deleteProduct = document.getElementById('deleteProduct')
    deleteProduct.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget
        var idProduct = button.getAttribute('data-id')

        let confirmDelete = document.querySelector('#confirmDelete')
        confirmDelete.setAttribute('action', '{{ route('admin.products.deleteProduct') }}?id=' + idProduct)
    })
</script>

@endsection