@extends('layout_master')

@section('content-layout-master')
    <link rel="stylesheet" href="{{ asset('css/contents/admins/admin_products/information_product.css') }}">
    <div class="container-infor-product">
        <form id="id-form-container-infor-product">
            <div class="header-infor-product">
                <div class="left-header">
                    <select class="number-row-select">
                        <option value="10" selected>10 dòng</option>
                        <option value="20">20 dòng</option>
                        <option value="30">30 dòng</option>
                    </select>

                    <div class="filter-infor-product">
                        <button type="button">
                            Bộ lọc
                        </button>
                    </div>
                </div>

                <div class="right-header">
                    <div class="search-zone">
                        <input type="text" placeholder="tìm kiếm sản phẩm">
                    </div>
                </div>
            </div>
            <div class="content-infor-product">
                <table class="table-infor-product">
                    <tr>
                        <th>STT</th>
                        <th>Hình ảnh sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Mã sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Số lượng sản phẩm</th>
                        <th>Voucher sản phẩm</th>
                        <th>Tùy chỉnh sản phẩm</th>
                    </tr>
                    <tbody class="detail-items">
                        @foreach ($dataProduct as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->name_product }}</td>
                                <td>
                                    <div class="img-infor-product-zone">
                                        <img src="{{ $item->image }}"class="img-infor-product">
                                    </div>
                                </td>
                                <td>{{ $item->code_product }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>Voucher sản phẩm</td>
                                <td>
                                    <div class="button-infor-product-zone">
                                        <a class="show-detail-product" data-id="{{ $item->id }}"
                                            href="{{ route('product.detail', ['id' => $item->id]) }}">
                                            Xem chi tiết
                                        </a>
                                        <a class="update-detail-product" data-id="{{ $item->id }}">
                                            Cập nhật
                                        </a>
                                        <a class="delete-detail-product" data-id="{{ $item->id }}">
                                            Xóa
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="list-count-product">
                    <ul class="detail-list-count-product">
                        @for ($i = 0; $i < ceil($countProduct / 10); $i++)
                            <li>
                                <a href="#">{{ $i + 1 }}</a>
                            </li>
                        @endfor
                    </ul>
                </div>
            </div>
        </form>
    </div>
@endsection
