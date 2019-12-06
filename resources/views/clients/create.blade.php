@extends('layouts.admin')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0 text-dark text-center">أضف جديدة </h1>
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
            <form action="{{ route('clients.store') }}" method="post">
                @csrf
                <div class="form-group col-md-6 offset-3" dir="rtl">
                    <input type="text" name="name" class="form-control" placeholder="الأسم" required>
                </div>
                <div class="form-group col-md-6 offset-3" dir="rtl">
                    <input type="text" name="phone" class="form-control" placeholder="رقم الهاتف" required>
                </div>
                <div class="form-group col-md-6 offset-3">
                    <button type="submit" class="btn btn-sm btn-block btn-info">حفظ</button>

                </div>
                <div class="form-group col-md-6 offset-3">
                    <a href="/clients" class="btn btn-block btn-outline-primary btn-sm">رجوع</a>

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

