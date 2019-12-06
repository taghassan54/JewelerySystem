@extends('layouts.admin')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0 text-dark text-center">المجوهرات  <small>   </small></h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<div class="col-12">
    <!-- Custom Tabs -->
    <div class="card">
      <div class="card-header d-flex p-0">
        <h3 class="card-title p-3"> <a href="/jewelry/create" class="btn btn-info btn-sm" id="addnew">أضف جديد</a></h3>
        <ul class="nav nav-pills ml-auto p-2">
            @foreach ($Material as $item)
            <li class="nav-item"><a class="nav-link" href="#tab_{{ $item->id }}" data-toggle="tab">{{ $item->name }}</a></li>
            @endforeach
        </ul>
      </div><!-- /.card-header -->
      <div class="card-body">
        <div class="tab-content">
                @foreach ($Material as $item)

                <div class="tab-pane " id="tab_{{ $item->id }}">



                        <div class="col-md-12" dir="rtl">
                                <div class="card">
                                  <div class="card-header text-center">
                                        <h5>{{ $item->name }}</h5>

                                  </div>
                                  <!-- /.card-header -->
                                  <div class="card-body">

                                    @foreach ($item->categories as $category)
                                <br>
                                            <h5 class="text-right">{{ $category->name }}</h5>
                                    <table class="table table-bordered">
                                            <thead>
                                              <tr>
                                                  <th style="width: 10px">#</th>
                                                  <th class="text-center">صورة</th>
                                                  <th class="text-center">الأسم</th>
                                                  <th class="text-center">وصف</th>
                                                  <th class="text-center">السعر</th>
                                                  <th class="text-center">عيار</th>
                                                  <th class="text-center">التحكم</th>
                                              </tr>
                                            </thead>
                                            <tbody>

                                              @foreach ($category->prodects as $prodect)
                                              <tr>
                                                      <td class="text-center">{{ $prodect->id }}</td>
                                                      <td class="text-center"><img src="{{ $prodect->img }}" alt="{{ $prodect->img }}" width="50" height="50" srcset=""></td>
                                                      <td class="text-center">{{ $prodect->name }}</td>
                                                      <td class="text-center">{{ $prodect->description }}</td>
                                                      <td class="text-center">{{ $prodect->price }}</td>
                                                      <td class="text-center">{{ $prodect->Caliber?$prodect->Caliber->name:'' }}</td>
                                                      <td class="text-center">

                                                          <form action="{{ Route('jewelry.destroy',$prodect->id ) }}" method="post">
                                                              @csrf
                                                              @method('delete')
                                                              <a href="/jewelry/{{ $prodect->id }}/edit" class="btn btn-sm btn-info "> <i class="fa fa-edit"></i> </a>
                                                              <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('هل أنت متأكد !')"><i class="fa fa-trash"></i></button>
                                                          </form>
                                                      </td>
                                                    </tr>
                                              @endforeach
                                            </tbody>
                                          </table>

                                    @endforeach

                                  </div>
                                  <!-- /.card-body -->

                                </div>
                                <!-- /.card -->

                              </div>



                      </div>
                      <!-- /.tab-pane -->

                @endforeach

        </div>
        <!-- /.tab-content -->
      </div><!-- /.card-body -->
    </div>
    <!-- ./card -->
  </div>
  <!-- /.col -->
@endsection
