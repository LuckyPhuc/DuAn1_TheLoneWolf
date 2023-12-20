 @extends('layouts.admin')
 @section('title', 'Admin - Users - List')
 @section('content')
     <div class="content">
         <div class="page-header">
             <div class="page-title">
                 <h4>Danh sách người dùng</h4>
             </div>
             <div class="page-btn">
                 <a href="{{ Route('admin.users.create') }}" class="btn btn-added"><img
                         src="{{ asset('assets/img/icons/plus.svg') }}" alt="img" class="me-2" />Thêm Người Dùng</a>
             </div>
         </div>
         @if (session('success'))
             <div class="alert alert-success">
                 {{ session('success') }}
             </div>
         @endif
         <div class="card">
             <div class="card-body">
                 <div class="table-top">
                     <div class="search-path">
                         <form action="{{ route('admin.users.search') }}" method="POST">
                             @csrf
                             <input type="text" placeholder="Bạn muốn tìm kiếm gì?" name="search">
                             <button class="btn btn-primary" type="submit"
                                 style="background: #ff9f43;color:#fff; padding:0.5rem"><i
                                     class="bi bi-search"></i></button>
                         </form>
                     </div>
                     <div class="wordset">
                         <ul>
                             <li>
                                 <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                         src="{{ asset('assets/img/icons/pdf.svg') }} " alt="img" /></a>
                             </li>
                             <li>
                                 <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                         src="{{ asset('assets/img/icons/excel.svg') }} " alt="img" /></a>
                             </li>
                             <li>
                                 <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                         src="{{ asset('assets/img/icons/printer.svg') }} " alt="img" /></a>
                             </li>
                         </ul>
                     </div>
                 </div>
                 <div class="table-responsive">
                     <table class="table datanew">
                         <thead>
                             <tr>
                                 <th>
                                     <label class="checkboxs">
                                         <input type="checkbox" id="select-all" />
                                         <span class="checkmarks"></span>
                                     </label>
                                 </th>
                                 <th>STT</th>
                                 <th>Họ Và tên</th>
                                 <th>Số Điện Thoại</th>
                                 <th>Email</th>
                                 <th>Địa Chỉ</th>
                                 <th>Vai Trò</th>
                                 <th>Hành Động</th>
                             </tr>
                         </thead>
                         <tbody>
                             @forelse ($users as $user)
                                 <tr>
                                     <td>
                                         <label class="checkboxs">
                                             <input type="checkbox" />
                                             <span class="checkmarks"></span>
                                         </label>
                                     </td>
                                     <td>{{ $loop->iteration }}</td>
                                     <td>{{ $user->name }}</td>
                                     <td>{{ $user->phone }} </td>
                                     <td>{{ $user->email }} </td>
                                     <td>{{ $user->address }} </td>
                                     <td>{{ $user->role === 0 ? 'admin' : 'users' }}</td>
                                     <td>
                                         <a class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top"
                                             title="Sửa mục này" style="background: green; padding:0.5rem"
                                             href="{{ route('admin.users.edit', ['id' => $user->id]) }}">
                                             <i class="bi bi-pencil"></i>
                                         </a>


                                         <a class="btn btn-danger">
                                             <form action="{{ route('admin.users.destroy', ['id' => $user->id]) }}"
                                                 method="POST">
                                                 @csrf
                                                 @method('DELETE')
                                                 <button type="submit" data-bs-toggle="tooltip" data-bs-placement="top"
                                                     title="Xóa mục này" style="background: red; padding:0.5rem"
                                                     onclick="return confirm('Bạn có chắc chắn muốn xóa người dùng này?')">
                                                     <i class="bi bi-trash3"></i></button>
                                             </form>
                                         </a>
                                     </td>
                                 </tr>
                             @empty
                                 Không tồn tại
                             @endforelse
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 @endsection
