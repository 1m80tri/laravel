@extends("product.shop")

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Giỏ hàng</h1>
            <p>Hiện đang có {{Cart::count()}} trong giỏ hàng</p>
            <form action="{{route("cart.update")}}" method="POST">
                @csrf
                @if(Cart::count() > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Thành tiền</th>
                            <th scope="col">Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php 
                            $t = 0
                        @endphp

                        @foreach(Cart::content() as $row)
                        @php 
                            $t ++;
                        @endphp
                        <tr>
                            <td scope="row">{{$t}}</td>
                            <td>
                                <img src="{{asset($row->options->image)}}" width="100px" alt="">
                            </td>
                            <td scope="col"><a href="">{{$row->name}}</a></td>
                            <td scope="col">{{$row->price}} đ</td>
                            <td scope="col">
                                <input type="number" min=1 name="qty[{{$row->rowId}}]" style="width:50px; text-align: center" value="{{$row->qty}}">
                            </td>
                            <td scope="col">{{$row->total}}</td>
                            <td><a href="{{route("cart.delete", $row->rowId)}}" class="text-danger">Xóa</a></td>
                        </tr>
                        @endforeach
                        
                        
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan='6' class="text-right">Tổng:</td>
                            <td><strong>{{Cart::total()}} đ</strong></td>
                        </tr>
                    </tfoot>
                    <a href="{{route("cart.destroy")}}">Xóa tất cả</a>
                </table>
                <input type="submit" value="Cập nhập giỏ hàng" class="btn  btn-primary" name="btn_update">
                @endif
            </form>
        </div>
    </div>
</div>
@endsection