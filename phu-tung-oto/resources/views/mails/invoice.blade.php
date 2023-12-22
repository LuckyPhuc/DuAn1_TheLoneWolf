<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xác nhận đơn hàng đăng ký dịch vụ tại Phu tung oto</title>
</head>

<body>
    <div class="container">
        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:30px">
            <tbody>
                <tr>
                    <td height="93" align="center" valign="middle" style="border-bottom:solid 3px #1769b2"><a
                            href="#" target="_blank"
                            data-saferedirecturl="https://www.google.com/url?q=https://tenten.vn/&amp;source=gmail&amp;ust=1703040186904000&amp;usg=AOvVaw1OO5sv5qU2lVQtTSO7uw8X">
                            <img src="{{ asset('assets/img/logo-users/1.png') }}" alt="phụ tùng oto" border="0"
                                style="border:0" class="CToWUd" data-bit="iit"></a></td>
                </tr>
                <tr>
                    <td>
                        @if ($groupedCart->isNotEmpty())
                            @php
                                $firstProduct = $groupedCart->first();
                                $orderDetail = $firstProduct->first();
                            @endphp
                            <p style="font:700 15px tahoma;color:#000;margin-top:25px">
                                Kính gửi: {{ $orderDetail->order->users->name }}!
                            </p>
                        @endif
                        <p style="font:13px tahoma;color:#404040;margin:10px 0 30px 0">Phụ tùng ô tô xin gửi lời cám
                            ơn
                            đến Quý
                            khách đã tin tưởng sử dụng dịch vụ của chúng tôi.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table width="100%" cellpadding="0" cellspacing="0" border="0"
                            style="background:#3eb8cd;color:#fff">
                            <tbody>
                                <tr>
                                    <td rowspan="2"
                                        style="font:700 15px tahoma;text-transform:uppercase;padding-left:10px">
                                        THÔNG TIN ĐƠN HÀNG
                                    </td>
                                    <td style="text-align:right;padding:10px 10px 5px 0;font:13px tahoma">Mã đơn hàng:
                                        <strong>11082357586</strong>
                                    </td>
                                </tr>
                                <tr>
                                    @foreach ($groupedCart as $productId => $items)
                                        @php
                                            $orderDetail = $items->first();
                                            $totalQuantity = $items->sum('quantity');
                                            $inputId = 'cartInput_' . $productId;

                                        @endphp
                                        <td style="text-align:right;padding:5px 10px 10px 0;font:13px tahoma">Thời gian
                                            đăng
                                            ký:
                                            {{ \Carbon\Carbon::parse($orderDetail->order->order_date)->timezone('Asia/Ho_Chi_Minh')->format('d-m-Y H:i:s') }}
                                        </td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr style="border-bottom:solid 1px #c7c7c7">
                                    <td
                                        style="text-align:center;background:#dfdfdf;border-right:solid 1px #c7c7c7;color:#000;padding:10px 5px;font:13px tahoma">
                                        STT
                                    </td>
                                    <td
                                        style="text-align:center;background:#dfdfdf;border-right:solid 1px #c7c7c7;color:#000;padding:10px 5px;font:13px tahoma">
                                        Hình ảnh sản phẩm
                                    </td>
                                    <td
                                        style="text-align:center;background:#dfdfdf;border-right:solid 1px #c7c7c7;color:#000;padding:10px 5px;font:13px tahoma">
                                        Tên Sản phẩm
                                    </td>
                                    <td
                                        style="text-align:center;background:#dfdfdf;border-right:solid 1px #c7c7c7;color:#000;padding:10px 5px;font:13px tahoma">
                                        Số lượng
                                    </td>
                                    <td
                                        style="text-align:center;background:#dfdfdf;border-right:solid 1px #c7c7c7;color:#000;padding:10px 5px;font:13px tahoma">
                                        Giá
                                    </td>
                                    <td
                                        style="text-align:center;background:#dfdfdf;color:#000;padding:10px 0;font:13px tahoma">
                                        Tổng cộng
                                    </td>
                                </tr>
                                @php
                                    $tong = 0;
                                @endphp
                                @foreach ($groupedCart as $productId => $items)
                                    @php
                                        $orderDetail = $items->first();
                                        $totalQuantity = $items->sum('quantity');
                                        $inputId = 'cartInput_' . $productId;
                                        $tong += $totalQuantity * $orderDetail->product->price;
                                    @endphp
                                    <tr>
                                        <td
                                            style="text-align:center;border:solid 1px #dfdfdf;border-top:none;padding:10px 5px;font:13px tahoma;color:#404040">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td
                                            style="text-align:center;border-right:solid 1px #dfdfdf;border-bottom:solid 1px #dfdfdf;padding:10px 5px;color:#1769b2;font:13px tahoma">

                                            <img style="width: 100px"
                                                src="{{ asset($orderDetail->product->image_features->first()->url_img) }}"
                                                alt="product">

                                        </td>
                                        <td
                                            style="text-align:center;border-right:solid 1px #dfdfdf;border-bottom:solid 1px #dfdfdf;padding:10px 5px;color:#1769b2;font:13px tahoma">
                                            <h5>

                                                {{ $orderDetail->product->name }}
                                            </h5>
                                        </td>
                                        <td
                                            style="text-align:center;border-right:solid 1px #dfdfdf;border-bottom:solid 1px #dfdfdf;padding:10px 5px;color:#1769b2;font:13px tahoma">
                                            {{ $orderDetail->quantity }} Cái
                                        </td>
                                        <td
                                            style="text-align:center;border-right:solid 1px #dfdfdf;border-bottom:solid 1px #dfdfdf;padding:10px 5px;color:#1769b2;font:13px tahoma">
                                            {{ number_format($orderDetail->product->price, 2) }} VND
                                        </td>
                                        <td
                                            style="text-align:center;border-right:solid 1px #dfdfdf;border-bottom:solid 1px #dfdfdf;padding:10px 5px;font:13px tahoma;color:#404040">
                                            {{ number_format($totalQuantity * $orderDetail->product->price, 2) }}
                                            VND
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="5"
                                        style="text-align:center;border:solid 1px #dfdfdf;border-top:none;border-bottom:none;padding:10px 5px 5px 5px;text-align:right;font:13px tahoma;color:#404040">
                                        <h3> Tổng tiền</h3>
                                    </td>
                                    <td
                                        style="text-align:center;border-right:solid 1px #dfdfdf;padding:10px 5px 5px 5px;text-align:right;font:13px tahoma;color:#404040; ">
                                        <h3>

                                            {{ number_format($tong, 2) }} VND
                                        </h3>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table width="100%" cellpadding="0" cellspacing="0" border="0"
                            style="background:#3eb8cd;color:#fff">
                            <tbody>
                                <tr>
                                    <td style="font:700 15px tahoma;text-transform:uppercase;padding:12px 10px">Thông
                                        tin khách hàng
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table width="100%" cellpadding="0" cellspacing="0" border="0"
                            style="border:solid 1px #d2d2d2;border-top:none;padding:10px">
                            <tbody>
                                <tr>
                                    <td style="padding:7px;font:13px tahoma;color:#404040">Họ và tên</td>
                                    @if ($groupedCart->isNotEmpty())
                                        @php
                                            $firstProduct = $groupedCart->first();
                                            $orderDetail = $firstProduct->first();

                                        @endphp
                                        <td style="padding:7px;font:700 13px tahoma;color:#404040">
                                            : {{ $orderDetail->order->users->name }}</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td style="padding:7px;font:13px tahoma;color:#404040">Quốc gia</td>
                                    <td style="padding:7px;font:700 13px tahoma;color:#404040">
                                        : VIET NAM</td>
                                </tr>
                                <tr>
                                    <td style="padding:7px;font:13px tahoma;color:#404040">Địa chỉ</td>
                                    @if ($groupedCart->isNotEmpty())
                                        @php
                                            $firstProduct = $groupedCart->first();
                                            $orderDetail = $firstProduct->first();

                                        @endphp
                                        <td style="padding:7px;font:700 13px tahoma;color:#404040">
                                            : {{ $orderDetail->address }}</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td style="padding:7px;font:13px tahoma;color:#404040">Điện thoại</td>
                                    @if ($groupedCart->isNotEmpty())
                                        @php
                                            $firstProduct = $groupedCart->first();
                                            $orderDetail = $firstProduct->first();

                                        @endphp
                                        <td style="padding:7px;font:700 13px tahoma;color:#404040">
                                            : {{ $orderDetail->sdt }}</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td style="padding:7px;font:13px tahoma;color:#404040">Email</td>
                                    @if ($groupedCart->isNotEmpty())
                                        @php
                                            $firstProduct = $groupedCart->first();
                                            $orderDetail = $firstProduct->first();

                                        @endphp
                                        <td style="padding:7px;font:700 13px tahoma;color:#404040">
                                            : <a href="mailto:{{ $orderDetail->order->users->email }}" target="_blank">
                                                {{ $orderDetail->order->users->email }}</a>
                                        </td>
                                    @endif
                                </tr>
                                <tr>
                                    <td style="padding:7px;font:13px tahoma;color:#404040">Tình trạng đơn hàng</td>
                                    @if ($groupedCart->isNotEmpty())
                                        @php
                                            $firstProduct = $groupedCart->first();
                                            $orderDetail = $firstProduct->first();

                                        @endphp
                                        <td style="padding:7px;font:700 13px tahoma">: <span
                                                style="color:red">{{ $orderDetail->order->status }}</span></td>
                                    @endif

                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height="30px"></td>
                </tr>
                <tr>
                    <td height="30px"></td>
                </tr>
                <tr>
                    <td>

                        @if ($orderDetail->order->status == 'Thanh toán khi nhận hàng')
                            <table width="100%" cellpadding="0" cellspacing="0" border="0"
                                style="background:#3eb8cd;color:#fff;padding:18px 39px">
                                <tbody>
                                    <tr>
                                        <td style="font:700 15px tahoma;text-transform:uppercase">Hình thức thanh toán
                                        </td>
                                        <td
                                            style="font:700 12px tahoma;text-transform:uppercase;text-align:right;background:#1a92ab;padding:7px 10px;float:right;border-radius:5px">
                                            Chuyển khoản thanh toán qua ngân hàng</td>
                                    </tr>
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0"
                                        style="border-top:none;background:#f4f4f4">
                                        <tbody>
                                            <tr>
                                                <td style="text-align: center;padding:10px 10px;font:700 12px tahoma; ">
                                                    <h2> Bạn chọn hình thức
                                                        thanh toán khi nhận
                                                        hàng</h2>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;">
                                                    <button class="btn btn-secondary">xác nhận
                                                        đơn hàng</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;padding:10px 10px;font:700 12px tahoma;">
                                                    <h3> Cảm ơn bạn đã mua hàng của cửa hàng chúng tôi !</h3>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- Các phần còn lại của HTML cho thanh toán khi nhận hàng -->
                                @elseif($orderDetail->order->status == 'Thanh toán online')
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0"
                                        style="background:#3eb8cd;color:#fff;padding:18px 39px">
                                        <tbody>
                                            <tr>
                                                <td style="font:700 15px tahoma;text-transform:uppercase">Hình thức
                                                    thanh toán
                                                </td>
                                                <td
                                                    style="font:700 12px tahoma;text-transform:uppercase;text-align:right;background:#1a92ab;padding:7px 10px;float:right;border-radius:5px">
                                                    Chuyển khoản thanh toán qua ngân hàng</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0"
                                        style="border-top:none;background:#f4f4f4">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p
                                                        style="padding:18px 39px;font:15px tahoma;color:#404040;line-height:22px;margin:0px">
                                                        Ngoài phương thức thanh toán online qua thẻ nội địa, Quý khách
                                                        có thể
                                                        chuyển tiền thanh toán tới một trong các tài khoản sau:</p>
                                                    <p
                                                        style="padding:16px 10px;background:#ebebeb;font:15px tahoma;color:#404040;margin:0;text-align:center;background:#ebebeb">
                                                        Chủ tài khoản: <strong
                                                            style="color:#323232;font:17px 700 tahoma">Chủ
                                                            thể công ty Phụ tùng ô tô </strong>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:15px 80px">
                                                    <table width="100%" cellpadding="0" cellspacing="0"
                                                        border="0" style="margin:0px">
                                                        <tbody>
                                                            <tr>
                                                                <td width="49%" rowspan="2"
                                                                    style="border-bottom:2px dashed #d3d3d3;padding:15px 25px">
                                                                    <div
                                                                        style="background:#fff;border:2px solid #0066b2;border-radius:10px;padding:20px 10px;text-align:center;max-width:188px;margin:0px auto">
                                                                        <img src="{{ asset('assets/img/Qr/qr.jpg') }}"
                                                                            style="width:188px" class="CToWUd"
                                                                            data-bit="iit">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0"
                                        style="border-top:none;background:#ebebeb">
                                        <tbody>
                                            <tr>
                                                <td style="padding:15px 10px;text-align:center">
                                                    <p
                                                        style="margin:0px 0;font:12px tahoma;color:#ed1b24;font-weight:700">
                                                        Nội
                                                        dung chuyển khoản ghi: mã đơn hàng (ví dụ 09092929) + tên của
                                                        quý khách
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
