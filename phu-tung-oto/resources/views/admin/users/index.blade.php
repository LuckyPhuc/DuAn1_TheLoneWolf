 @extends('layouts.admin')
 @section('title', 'Admin - Users - List')
 @section('content')
     <div class="content">
         <div class="page-header">
             <div class="page-title">
                 <h4>User List</h4>
                 <h6>Manage your User</h6>
             </div>
             <div class="page-btn">
                 <a href="{{ Route('admin.users.create') }}" class="btn btn-added"><img
                         src="{{ asset('assets/img/icons/plus.svg') }}" alt="img" class="me-2" />Add User</a>
             </div>
         </div>

         <div class="card">
             <div class="card-body">
                 <div class="table-top">
                     <div class="search-set">
                         <div class="search-path">
                             <a class="btn btn-filter" id="filter_search">
                                 <img src="{{ asset('assets/img/icons/filter.svg') }} " alt="img" />
                                 <span><img src="{{ asset('assets/img/icons/closes.svg') }} " alt="img" /></span>
                             </a>
                         </div>
                         <div class="search-input">
                             <a class="btn btn-searchset">
                                 <img src="{{ asset('assets/img/icons/search-white.svg') }} " alt="img" />
                             </a>
                         </div>
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
                                         <input type="checkbox" />
                                         <span class="checkmarks"></span>
                                     </label>
                                 </th>
                                 <th>Full name</th>
                                 <th>Phone</th>
                                 <th>email</th>
                                 <th>Address</th>
                                 <th>Status</th>
                                 <th>Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($users as $user)
                                 <tr>
                                     <td>
                                         <label class="checkboxs">
                                             <input type="checkbox" />
                                             <span class="checkmarks"></span>
                                         </label>
                                     </td>
                                     <td>{{ $user->name }}</td>
                                     <td>{{ $user->phone }} </td>
                                     <td>{{ $user->email }} </td>
                                     <td>{{ $user->address }} </td>
                                     <td>{{ $user->role === 1 ? 'admin' : 'users' }}</td>
                                     <td>
                                         <a class="me-3" href="">
                                             <img src="{{ asset('assets/img/icons/edit.svg') }} " alt="img" />
                                         </a>
                                         <a class="me-3 confirm-text" href="javascript:void(0);">
                                             <img src="{{ asset('assets/img/icons/delete.svg') }} " alt="img" />
                                         </a>
                                     </td>
                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 @endsection
