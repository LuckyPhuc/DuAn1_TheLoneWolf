 @extends('layouts.admin')
@section('title', 'Admin - Users - List')
<div class="page-wrapper">
@section('content')
 <div class="content">
          <div class="page-header">
            <div class="page-title">
              <h4>User List</h4>
              <h6>Manage your User</h6>
            </div>
            <div class="page-btn">
              <a href="adduser.html" class="btn btn-added"
                ><img
                  src="assets/img/icons/plus.svg"
                  alt="img"
                  class="me-2"
                />Add User</a
              >
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <div class="table-top">
                <div class="search-set">
                  <div class="search-path">
                    <a class="btn btn-filter" id="filter_search">
                      <img src="{{asset('assets/img/icons/filter.svg')}} " alt="img" />
                      <span
                        ><img src="{{asset('assets/img/icons/closes.svg')}} " alt="img"
                      /></span>
                    </a>
                  </div>
                  <div class="search-input">
                    <a class="btn btn-searchset">
                      <img src="{{asset('assets/img/icons/search-white.svg')}} " alt="img" />
                    </a>
                  </div>
                </div>
                <div class="wordset">
                  <ul>
                    <li>
                      <a
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="pdf"
                        ><img src="{{asset('assets/img/icons/pdf.svg')}} " alt="img"
                      /></a>
                    </li>
                    <li>
                      <a
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="excel"
                        ><img src="{{asset('assets/img/icons/excel.svg')}} " alt="img"
                      /></a>
                    </li>
                    <li>
                      <a
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="print"
                        ><img src="{{asset('assets/img/icons/printer.svg')}} " alt="img"
                      /></a>
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
                      <th>Profile</th>
                      <th>First name</th>
                      <th>Last name</th>
                      <th>User name</th>
                      <th>Phone</th>
                      <th>email</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <label class="checkboxs">
                          <input type="checkbox" />
                          <span class="checkmarks"></span>
                        </label>
                      </td>
                      <td class="productimgname">
                        <a href="javascript:void(0);" class="product-img">
                          <img
                            src="{{asset('assets/img/customer/customer4.jpg')}} "
                            alt="product"
                          />
                        </a>
                      </td>
                      <td>Grace</td>
                      <td>Halena</td>
                      <td>Grace2022</td>
                      <td>+12163547758</td>
                      <td>
                        <a
                          href="/cdn-cgi/l/email-protection"
                          class="__cf_email__"
                          data-cfemail="3e5d4b4d4a51535b4c7e5b465f534e525b105d5153"
                          >[email&#160;protected]</a
                        >
                      </td>
                      <td>
                        <div
                          class="status-toggle d-flex justify-content-between align-items-center"
                        >
                          <input
                            type="checkbox"
                            id="user18"
                            class="check"
                            checked=""
                          />
                          <label for="user18" class="checktoggle"
                            >checkbox</label
                          >
                        </div>
                      </td>
                      <td>
                        <a class="me-3" href="edituser.html">
                          <img src="{{asset('assets/img/icons/edit.svg')}} " alt="img" />
                        </a>
                        <a class="me-3 confirm-text" href="javascript:void(0);">
                          <img src="{{asset('assets/img/icons/delete.svg')}} " alt="img" />
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        @endsection
</div>
