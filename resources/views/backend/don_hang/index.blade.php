@extends('layouts.app_backend')
@section('title','Danh sách đơn hàng')
@section('content')

<div class="dataTables_wrapper dt-bootstrape bg-light">
    <div class="container">
        <h1 class="mb-5">Danh sách đơn hàng</h1>
        @include('layouts.flash_message')


        <div class="row">
            <div class="col-sm-12">
                <table id="example" class="table table-striped table-bordered bg-light" style="width:100%">
                    <thead style="text-align:center">
                        <tr>
                            <th>STT</th>
                            <th>Họ tên</th>
                            <th>Số điện thoại</th>
                            <th>Tổng tiền</th>
                            <th>Trạng thái</th>
                            <th>Ngày tạo</th>

                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1?>
                        @foreach($donhang as $item)

                        <tr>
                            <td><?php echo $i++;?></td>
                            <td>{{$item->hoten}}</td>
                            <td>
                                {{$item->sodienthoai}}
                            </td>
                            <td>
                                <span class="text-danger">{{number_format($item->tongtien,0,',',',')}} đ</span>
                            </td>
                            <td>
                                <span class="{{$item->getStatus($item->trangthai)['class']}}">{{$item->getStatus($item->trangthai)['name']}} </span>
                            </td>


                            <td>{{date('d/m/Y',strtotime($item->ngaytao))}}</td>


                            <td style="text-align:center">
                                <a href=" {{route('get_backend.don_hang.view',$item->id)}}"
                                    class="btn btn-xs btn-primary">Xem</a>


                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>



</div>


@stop
