@extends('layouts.admin')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0 text-dark text-center"> تعديل البيانات </h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->


<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">

      <!-- /.col-md-12 -->
      <div class="col-lg-12">


        <div class="card card-primary card-outline">
          <div class="card-header">
            <h5 class="m-0"></h5>
          </div>
          <div class="card-body" >
            <form action="{{ route('jewelry.update',$jewelry->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row" dir="rtl">
                    <div class="col-6">
                            <div class="form-group " dir="rtl">
                                    <label for=""></label>
                                        <input type="text" name="name" value="{{ $jewelry->name }}" class="form-control" placeholder="الأسم" required>
                                    </div>



                                <div class="form-group " dir="rtl">
                                    <label for=""></label>
                                    <input type="text" name="price" value="{{ $jewelry->price }}" class="form-control" placeholder=" السعر " required>
                                </div>

                                <div class="form-group " dir="rtl">
                                        <label for="" style="float:right">عيار  </label>
                                            <select name="caliber_id" id="caliber_id" class="form-control">
                                                <option value="{{ $jewelry->Caliber->id }}">{{ $jewelry->Caliber->name }}</option>
                                                @foreach ($Caliber as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                    </div>
                    </div>
                    <div class="col-6">

                            <div class="form-group " dir="rtl">
                                    <label for="" style="float:right">صورة العرض</label>
                                        <input type="file" name="img" class="form-control" >
                                    </div>

                                <div class="form-group " dir="rtl">
                                    <label for="" style="float:right">التصنيف </label>
                                        <select name="category_id" id="category_id" class="form-control">
                                                <option value="{{ $jewelry->Category->id }}">{{ $jewelry->Category->name }}  -> {{ $jewelry->Category->material?$jewelry->Category->material->name:'' }} </option>

                                            @foreach ($Category as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }} -> {{ $item->material?$item->material->name:'' }}</option>
                                            @endforeach
                                        </select>
                                </div>

                                <div class="form-group " dir="rtl">
                                        <label for=""></label>
                                        <input type="text" value="{{ $jewelry->matrial_weight }}" name="matrial_weight" class="form-control" placeholder=" الوزن " required>
                                    </div>

                    </div>
                    <div class="col-12">
                            <div class="form-group " dir="rtl">
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="الوصف" required>{{ $jewelry->description }}</textarea>
                    </div>
                    </div>
                            <div class="form-group col-md-3"></div>
                            <div class="form-group col-md-6">
                                    <button type="submit" class="btn btn-sm btn-block btn-info">حفظ</button>
                                </div>
                                <div class="form-group col-md-3"></div>

                                <div class="form-group col-md-3"></div>
                                <div class="form-group col-md-6">
                                    <a href="/jewelry" class="btn btn-block btn-outline-primary btn-sm">رجوع</a>

                                </div>
                    </div>
                </div>

            </form>
          </div>
        </div>
      </div>
      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->


</div>

@endsection

