@extends('layouts.admin')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0 text-dark text-center">التقارير </h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->


<div class="col-md-12" dir="rtl">
    <div class="card">
      <div class="card-header text-center">
   {{--       <p>
            <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">تقرير المشتريات</a>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">تقرير المبيعات</button>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample2">تقرير العملاء</button>
          </p>  --}}
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        
        <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0 text-right">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    تقرير المشتريات
                  </button>
                </h2>
              </div>
          
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="width: 10px">#</th>
                            <th class="text-center">أسم العميل</th>
                            <th class="text-center">عدد المنتجات</th>
                            <th class="text-center">القيمة الإجمالية</th>
                          </tr>
                        </thead>
                        <tbody>
      
                          @foreach  (App\Models\Invoices::where('type','selling')->get() as $item)
                        
                          <tr>
                                  <td class="text-center">{{ $item->id }}</td>
                                  <td class="text-center">{{ $item->Client?$item->Client->name:'' }}</td>
                                  <td class="text-center">{{ $item->prodects->count() }}</td>
                                  <td class="text-center">
                                    {{ $item->prodects()->sum('amount') }}
                                  </td>
                                  
                                </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0 text-right">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    تقرير المبيعات
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="width: 10px">#</th>
                            <th class="text-center">أسم العميل</th>
                            <th class="text-center">عدد المنتجات</th>
                            <th class="text-center">القيمة الإجمالية</th>
                          </tr>
                        </thead>
                        <tbody>
        
                          @foreach  (App\Models\Invoices::where('type','purchase')->get() as $item)
                        
                          <tr>
                                  <td class="text-center">{{ $item->id }}</td>
                                  <td class="text-center">{{ $item->Supplier?$item->Supplier->name:'' }}</td>
                                  <td class="text-center">{{ $item->prodects->count() }}</td>
                                  <td class="text-center">
                                    {{ $item->prodects()->sum('amount') }}
                                  </td>
                                </tr>
                          @endforeach
                        </tbody>
                      </table>
        
                  
                          </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0 text-right">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    تقرير العملاء
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                              <th style="width: 10px">#</th>
                              <th class="text-center">الأسم</th>
                              <th class="text-center">رقم الهاتف</th>
                          </tr>
                        </thead>
                        <tbody>
        
                          @foreach (App\Models\ClientModel::all() as $item)
                          <tr>
                                  <td class="text-center">{{ $item->id }}</td>
                                  <td class="text-center">{{ $item->name }}</td>
                                  <td class="text-center">{{ $item->phone }}</td>
                                 
                                </tr>
                          @endforeach
                        </tbody>
                      </table>
                        </div>
              </div>
            </div>
          </div>
{{--  
  <div class="row">

    <div class="col-12">
      <div class="collapse multi-collapse" id="multiCollapseExample1">
        <div class="card card-body">
        
            


            <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th class="text-center">أسم العميل</th>
                      <th class="text-center">عدد المنتجات</th>
                      <th class="text-center">القيمة الإجمالية</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach  (App\Models\Invoices::where('type','selling')->get() as $item)
                  
                    <tr>
                            <td class="text-center">{{ $item->id }}</td>
                            <td class="text-center">{{ $item->Supplier?$item->Supplier->name:'' }}</td>
                            <td class="text-center">{{ $item->prodects->count() }}</td>
                            <td class="text-center">
                              {{ $item->prodects()->sum('amount') }}
                            </td>
                          </tr>
                    @endforeach
                  </tbody>
                </table>

            
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="collapse multi-collapse" id="multiCollapseExample2">
        <div class="card card-body">
        
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th class="text-center">أسم العميل</th>
                    <th class="text-center">عدد المنتجات</th>
                    <th class="text-center">القيمة الإجمالية</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach  (App\Models\Invoices::where('type','purchase')->get() as $item)
                
                  <tr>
                          <td class="text-center">{{ $item->id }}</td>
                          <td class="text-center">{{ $item->Supplier?$item->Supplier->name:'' }}</td>
                          <td class="text-center">{{ $item->prodects->count() }}</td>
                          <td class="text-center">
                            {{ $item->prodects()->sum('amount') }}
                          </td>
                        </tr>
                  @endforeach
                </tbody>
              </table>

          
       </div>
      </div>
    </div>

    <div class="col-12">
      <div class="collapse multi-collapse" id="multiCollapseExample3">
        <div class="card card-body">
            <table class="table table-bordered">
                <thead>
                  <tr>
                      <th style="width: 10px">#</th>
                      <th class="text-center">الأسم</th>
                      <th class="text-center">رقم الهاتف</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach (App\Models\ClientModel::all() as $item)
                  <tr>
                          <td class="text-center">{{ $item->id }}</td>
                          <td class="text-center">{{ $item->name }}</td>
                          <td class="text-center">{{ $item->phone }}</td>
                         
                        </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
      </div>
    </div>  --}}
  </div>


      </div>
      <!-- /.card-body -->

    </div>
    <!-- /.card -->

  </div>

@endsection
