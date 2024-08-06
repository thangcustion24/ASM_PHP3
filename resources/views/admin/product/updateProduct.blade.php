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
                <h5 class="card-title fw-semibold mb-3">Thêm mới sản phẩm</h5>
                <div class="table-responsive">
                    <a href="#" class="btn btn-warning mb-4">Quay lại</a>
                    <div class="modal-content">
                        <div class="modal-header">
                        </div>
                        <form action="{{ route('admin.products.updatePatchProduct') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('Patch')
                            <div class="modal-body">
                                <input type="hidden" value="{{ $product->id }}" name="idProduct">
                                <div class="mb-3">
                                    <label for="ten_sp" class="form-label">Tên sản phẩm</label>
                                    <input type="text" class="form-control" id="ten_sp" name="ten_sp"
                                        value="{{ $product->ten_sp }}">
                                    @error('ten_sp')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    @foreach($product->images as $image)
                                        <img src="{{ asset($image->image_url) }}" alt="" style="width: 150px;">
                                    @endforeach
                                </div>
                                <div class="mb-3">
                                    <label for="images">Hình ảnh: </label>
                                    <input type="file" name="images[]" id="images" multiple class="form-control">
                                    @if ($errors->has('images'))
                                        @foreach ($errors->get('images') as $messages)
                                            @foreach ($messages as $message)
                                                <p class="text-danger">{{ $message }}</p>
                                            @endforeach
                                        @endforeach
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="gia_sp" class="form-label">Giá sản phẩm</label>
                                    <input type="number" class="form-control" id="gia_sp" name="gia_sp"
                                        value="{{ $product->gia_sp }}">
                                    @error('gia_sp')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="giam_gia" class="form-label">Giá giảm giá</label>
                                    <input type="number" class="form-control" id="giam_gia" name="giam_gia"
                                        value="{{ $product->giam_gia }}">
                                    @error('giam_gia')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="mo_ta" class="form-label">Mô tả sản phẩm</label>
                                    <textarea name="mo_ta" rows="3"
                                        class="form-control">{{ $product->mo_ta }}</textarea>
                                    @error('mo_ta')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="so_luong" class="form-label">Số lượng </label>
                                    <input type="number" class="form-control" id="so_luong" name="so_luong"
                                        value="{{ $product->so_luong }}">
                                    @error('so_luong')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="so_luot_xem" class="form-label">Số lượt xem</label>
                                    <input type="number" class="form-control" id="so_luot_xem" name="so_luot_xem"
                                        value="{{ $product->so_luot_xem }}">
                                    @error('so_luot_xem')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="id_dm" class="form-label">Danh mục</label>
                                    <select name="id_dm" id="id_dm" class="form-control">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" @if($category->id == $product->id_dm) selected
                                            @endif>
                                                {{ $category->ten_dm }} <!-- Sử dụng ten_dm thay vì name -->
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('id_dm')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Xác nhận thêm mới</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection