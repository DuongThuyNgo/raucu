<form action="" method="post">
    @csrf
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputTenLoaiDoUong">Tên loại sản phẩm</label>
                <input type="text" class="form-control" name="tenloai" aria-describedby="nameHelp"
                    value="{{old('tenloai',$loaisanphams->tenloai  ??  '')}}" placeholder="Tên loại sản phẩm">
                @if($errors->first('tenloai'))
                <small id="nameHelp" class="form-text text-danger">{{$errors->first('tenloai')}}</small>
                @endif
            </div>


        </div>
        <div class="col-sm-6">

            <div class="form-group">
                <label for="exampleInputMoTa">Mô tả</label>
                <input type="text" class="form-control" id="mota1" name="mota" aria-describedby="MoTaHelp"
                    value="{{old('mota',$loaisanphams->mota  ??  '')}}" placeholder="Mô tả">
                @if($errors->first('mota'))
                <small id="MoTaHelp" class="form-text text-danger">{{$errors->first('mota')}}</small>
                @endif
            </div>



        </div>

    </div>
    @if(\Request::route()->getName()=='get_backend.loai_san_pham.create')
        <button type="submit" class="btn btn-primary mb-5">Thêm mới</button>
    @elseif (\Request::route()->getName()=='get_backend.loai_san_pham.update')
        <button type="submit" class="btn btn-primary mb-5">Cập nhật</button>
    @else

    @endif

</form>
