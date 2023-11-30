@extends('layouts.admin')
@section('title', 'Admin - Customer - List')
<div class="page-wrapper">
@section('content')
  <div class="content">
          <div class="page-header">
            <div class="page-title">
              <h4>Customer List</h4>
              <h6>Manage your Customers</h6>
            </div>
            <div class="page-btn">
              <a href="addcustomer.html" class="btn btn-added"
                ><img src="{{asset('assets/img/icons/plus.svg')}} " alt="img" />Add
                Customer</a
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
                    <a class="btn btn-searchset"
                      ><img src="{{asset('assets/img/icons/search-white.svg')}} " alt="img"
                    /></a>
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
                          <input type="checkbox" id="select-all" />
                          <span class="checkmarks"></span>
                        </label>
                      </th>
                      <th>Customer Name</th>
                      <th>code</th>
                      <th>Customer</th>
                      <th>Phone</th>
                      <th>email</th>
                      <th>Country</th>
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
                        <a href="javascript:void(0);" class="product-imgs">
                          WC
                        </a>
                        <a href="javascript:void(0);">James Stawberry</a>
                      </td>
                      <td>681</td>
                      <td>Fred john</td>
                      <td>123-456-888</td>
                      <td>
                        <a
                          href="/cdn-cgi/l/email-protection"
                          class="__cf_email__"
                          data-cfemail="aec4c1c6c0eecbd6cfc3dec2cb80cdc1c3"
                          >[email&#160;protected]</a
                        >
                      </td>
                      <td>Albania</td>
                      <td>
                        <a class="me-3" href="editcustomer.html">
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
