@extends('layouts.admin')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0 text-dark text-center">الفواتير <small>
        فواتير 
        @switch($type)
            @case("selling")
                {{ 'بيع' }}
                @break
            @case('purchase')
                {{ 'شراء' }}
                @break
            @default
                
        @endswitch
               
        
         </small></h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

    <div class="col-md-12" dir="rtl">
            <div class="card">
              <div class="card-header text-center">
                  <a href="/invoices/create?type={{ $type }}" class="btn btn-info" id="addnew">أضف جديد</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              @if ($type=='selling')
              <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th class="text-center">أسم العميل</th>
                      <th class="text-center">عدد المنتجات</th>
                      <th class="text-center">القيمة الإجمالية</th>
                      <th class="text-center">التحكم</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($invoices as $item)
                  
                    <tr>
                            <td class="text-center">{{ $item->id }}</td>
                            <td class="text-center">{{ $item->Client?$item->Client->name:'' }}</td>
                            <td class="text-center">{{ $item->prodects->count() }}</td>
                            <td class="text-center">
                              {{ $item->prodects()->sum('amount') }}
                            </td>
                            <td class="text-center">

                                <form action="{{ Route('invoices.destroy',$item->id ) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="/invoices/{{ $item->id }}?type={{ $type }}" class="btn btn-sm btn-info "> <i class="fa fa-eye"></i> </a>
                                    <a href="/invoices/{{ $item->id }}/edit?type={{ $type }}" class="btn btn-sm btn-info "> <i class="fa fa-edit"></i> </a>
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('هل أنت متأكد !')"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                          </tr>
                    @endforeach
                  </tbody>
                </table>

              @else
              <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th class="text-center">أسم العميل</th>
                      <th class="text-center">عدد المنتجات</th>
                      <th class="text-center">القيمة الإجمالية</th>
                      <th class="text-center">التحكم</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($invoices as $item)
                  
                    <tr>
                            <td class="text-center">{{ $item->id }}</td>
                            <td class="text-center">{{ $item->Supplier?$item->Supplier->name:'' }}</td>
                            <td class="text-center">{{ $item->prodects->count() }}</td>
                            <td class="text-center">
                              {{ $item->prodects()->sum('amount') }}
                            </td>
                            <td class="text-center">

                                <form action="{{ Route('invoices.destroy',$item->id ) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="/invoices/{{ $item->id }}?type={{ $type }}" class="btn btn-sm btn-info "> <i class="fa fa-eye"></i> </a>
                                    <a href="/invoices/{{ $item->id }}/edit?type={{ $type }}" class="btn btn-sm btn-info "> <i class="fa fa-edit"></i> </a>
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('هل أنت متأكد !')"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                          </tr>
                    @endforeach
                  </tbody>
                </table>

  
              @endif
               

          
              </div>
              <!-- /.card-body -->

            </div>
            <!-- /.card -->

          </div>

@endsection
