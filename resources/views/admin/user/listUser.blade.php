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
                <h5 class="card-title fw-semibold mb-3">Account</h5>
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
                        data-bs-toggle="modal" data-bs-target="#addUser">Thêm mới</button>
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
                                    <h6 class="fw-semibold mb-0">Email</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Office</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Acction</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listUser as $key => $value) 
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">{{ $key + 1 }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">{{ $value->ho_va_ten }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="mb-0 fw-normal">{{ $value->email }}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="mb-0 fw-normal">
                                            @if ($value->role == '1')
                                                <p class="text-primary">Admin</p>
                                            @elseif($value->role == '2')
                                                <p>User</p>
                                            @endif
                                        </h6>
                                    </td>
                                    <td class="border-bottom-0 d-flex">
                                        <button class="btn btn-success m-1" data-bs-toggle="modal"
                                            data-bs-target="#detailUser" data-id="{{ $value->id }}"><i
                                                class="ti ti-zoom-code"></i></button>
                                        <button class="btn btn-warning m-1" data-bs-toggle="modal"
                                            data-bs-target="#editUser" data-id="{{ $value->id }}"><i
                                                class="ti ti-edit"></i></button>
                                        <button class="btn btn-danger m-1" data-bs-toggle="modal"
                                            data-bs-target="#deleteUser" data-id="{{ $value->id }}"><i
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
<div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserLabel">Thêm mới tài khoản</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('admin.users.addUser')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="ho_va_ten" class="form-label">Tên người dùng</label>
                        <input type="text" class="form-control" id="ho_va_ten" name="ho_va_ten">
                        @error('ho_va_ten')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="so_dien_thoai" class="form-label">Số điện thoại </label>
                        <input type="text" class="form-control" id="so_dien_thoai" name="so_dien_thoai">
                        @error('so_dien_thoai')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="dia_chi" class="form-label">Địa chỉ</label>
                        <textarea name="dia_chi" rows="2" class="form-control"></textarea>
                        @error('dia_chi')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Chức vụ</label>
                        <select name="role" class="form-control" id="role">
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                        </select>
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
<div class="modal fade" id="deleteUser" tabindex="-1" aria-labelledby="deleteUserLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteUserLabel">Cảnh báo</h5>
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
<div class="modal fade" id="editUser" tabindex="-1" aria-labelledby="editUserLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserLabel">Cập nhật thông tin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.users.updateUser') }}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" value="" id="idUserUpdate" name="idUser">
                        <div class="mb-3">
                            <label for="ho_va_tenUpdate" class="form-label">Tên người dùng</label>
                            <input type="text" class="form-control" id="ho_va_tenUpdate" name="ho_va_ten">
                            @error('ho_va_ten')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="emailUpdate" class="form-label">Email</label>
                            <input type="email" class="form-control" id="emailUpdate" name="email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="so_dien_thoaiUpdate" class="form-label">Số điện thoại </label>
                            <input type="text" class="form-control" id="so_dien_thoaiUpdate" name="so_dien_thoai">
                            @error('so_dien_thoai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="dia_chiUpdate" class="form-label">Địa chỉ</label>
                            <textarea name="dia_chi" id="dia_chiUpdate" rows="2" class="form-control"></textarea>
                            @error('dia_chi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="roleUpdate" class="form-label">Chức vụ</label>
                            <select name="role" class="form-control" id="roleUpdate">
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                            </select>
                            @error('role')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
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

<!-- Modal detail -->
<div class="modal fade" id="detailUser" tabindex="-1" aria-labelledby="detailUserLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailUserLabel">Cập nhật thông tin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="ho_va_tenDetail" class="form-label">Tên người dùng</label>
                            <input type="text" class="form-control" id="ho_va_tenDetail" name="ho_va_ten" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="emailDetail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="emailDetail" name="email" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="so_dien_thoaiDetail" class="form-label">Số điện thoại </label>
                            <input type="text" class="form-control" id="so_dien_thoaiDetail" name="so_dien_thoai"
                                disabled>
                        </div>
                        <div class="mb-3">
                            <label for="dia_chiDetail" class="form-label">Địa chỉ</label>
                            <textarea name="dia_chi" id="dia_chiDetail" rows="2" class="form-control"
                                disabled></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="roleDetail" class="form-label">Chức vụ</label>
                            <select name="role" class="form-control" id="roleDetail" disabled>
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    // DELETE
    var deleteUser = document.getElementById('deleteUser')
    deleteUser.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget
        var idUser = button.getAttribute('data-id')

        let confirmDelete = document.querySelector('#confirmDelete')
        confirmDelete.setAttribute('action', '{{ route('admin.users.deleteUser') }}?id=' + idUser)
    })

    // UPDATE
    var editUser = document.getElementById('editUser')
    editUser.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget
        var idUser = button.getAttribute('data-id')
        // call api
        let url = "{{ route('admin.users.detailUser') }}?id=" + idUser;
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
                document.querySelector('#idUserUpdate').value = data.id
                document.querySelector('#ho_va_tenUpdate').value = data.ho_va_ten
                document.querySelector('#emailUpdate').value = data.email
                document.querySelector('#roleUpdate').value = data.role
                document.querySelector('#so_dien_thoaiUpdate').value = data.so_dien_thoai
                document.querySelector('#dia_chiUpdate').value = data.dia_chi
            })
    })

    // DETAIL
    var detailUser = document.getElementById('detailUser')
    detailUser.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget
        var idUser = button.getAttribute('data-id')
        console.log(idUser);

        // call api
        let url = "{{ route('admin.users.detailUser') }}?id=" + idUser;
        fetch(url, {
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        })

            .then((response) => response.json())
            .then((data) => {
                // console.log(data);
                document.querySelector('#ho_va_tenDetail').value = data.ho_va_ten
                document.querySelector('#emailDetail').value = data.email
                document.querySelector('#roleDetail').value = data.role
                document.querySelector('#so_dien_thoaiDetail').value = data.so_dien_thoai
                document.querySelector('#dia_chiDetail').value = data.dia_chi
            })

    })
</script>

@endsection