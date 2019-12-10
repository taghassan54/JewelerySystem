@extends('layouts.admin')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0 text-dark text-center">تفاصيل الفاتورة <small>
                    
         </small></h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

@if ($type=='selling')
<div class="col-md-12" dir="rtl">
        <div class="card">
          <div class="card-header text-center">
              فاتورة بيع
          </div>
          <!-- /.card-header -->
          <div class="card-body" dir="rtl">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="float-right">أسم العميل  : {{ $invoices->Client?$invoices->Client->name:'' }}</h5>
                        </div>
                        <div class="col-12 mt-3">
                            <h5 class="float-right">بواسطة   : {{ $invoices->User?$invoices->User->name:'' }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <h5 class="float-right">تاريخ الفاتورة  : {{ $invoices->created_at }}</h5>
                </div>
                <div class="col-12">
                    <!-- /.row -->
                    <div class="row mt-3">
                      <div class="col-12">
                        <div class="card invoice" >
                          <div class="card-header">
                            <h3 class="card-title float-right">المجوهرات</h3>
            
                            <div class="card-tools">
                      
                            </div>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body table-responsive  p-0" style="height: 500px;">
                            <table class="table table-head-fixed">
                              <thead>
                                <tr>
                                  <th class="text-center">المنتج</th>                                      <th class="text-center">العيار </th>

                                  <th class="text-center">سعر الوحدة</th>
                                  <th class="text-center">الكمية</th>
                                  <th class="text-center">السعر الإجمالي</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @php
                                      $total=0;
                                  @endphp
                                  @foreach ($invoices->prodects as $item)
                                  <tr>
                                        <td class="text-center">{{ $item->prodects->name }}</td>
                                        <td class="text-center">{{ $item->prodects->Caliber?$item->prodects->Caliber->name:'' }}</td>
                                        <td class="text-center">{{ $item->prodects->price }}</td>
                                        <td class="text-center">{{ $item->Quantity }}</td>
                                        @php
                                        $total+=$item->amount;
                                        @endphp
                                        <td class="text-center">{{ $item->amount }}</td>
                                       
                                      </tr>
                                  @endforeach
                                <tr><td class="text-center"><h5 class="float-right">الإجمالي : {{ $total }}</h5></td></tr>
                            </tbody>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <a onclick="printInvoice()" id="print" class="btn btn-block btn-outline-primary">طباعة</a>
                        <a href="/invoices?type={{ $type }}" id="back" class="btn btn-block btn-outline-secondary">رجوع</a>
                    </div>
                    </div>
                </div>
            </div>
          </div>
          <!-- /.card-body -->

        </div>
        <!-- /.card -->

      </div>

@else
<div class="col-md-12" dir="rtl">
        <div class="card">
          <div class="card-header text-center">
              فاتورة شراء
          </div>
          <!-- /.card-header -->
          <div class="card-body" dir="rtl">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="float-right">أسم المورد  : {{ $invoices->Supplier?$invoices->Supplier->name:'' }}</h5>
                        </div>
                        <div class="col-12 mt-3">
                            <h5 class="float-right">بواسطة   : {{ $invoices->User?$invoices->User->name:'' }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <h5 class="float-right">تاريخ الفاتورة  : {{ $invoices->created_at }}</h5>
                </div>
                <div class="col-12">
                    <!-- /.row -->
                    <div class="row mt-3">
                      <div class="col-12">
                        <div class="card invoice" >
                          <div class="card-header">
                            <h3 class="card-title float-right">المجوهرات</h3>
            
                            <div class="card-tools">
                      
                            </div>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body table-responsive  p-0" style="height: 500px;">
                            <table class="table table-head-fixed">
                              <thead>
                                <tr>
                                  <th class="text-center">المنتج</th>                                      <th class="text-center">العيار </th>

                                  <th class="text-center">سعر الوحدة</th>
                                  <th class="text-center">الكمية</th>
                                  <th class="text-center">السعر الإجمالي</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @php
                                      $total=0;
                                  @endphp
                                  @foreach ($invoices->prodects as $item)
                                  <tr>
                                        <td class="text-center">{{ $item->prodects->name }}</td>
                                        <td class="text-center">{{ $item->prodects->Caliber?$item->prodects->Caliber->name:'' }}</td>
                                        <td class="text-center">{{ $item->prodects->price }}</td>
                                        <td class="text-center">{{ $item->Quantity }}</td>
                                        @php
                                        $total+=$item->amount;
                                        @endphp
                                        <td class="text-center">{{ $item->amount }}</td>
                                       
                                      </tr>
                                  @endforeach
                                <tr><td class="text-center"><h5 class="float-right">الإجمالي : {{ $total }}</h5></td></tr>
                            </tbody>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <a onclick="printInvoice()" id="print" class="btn btn-block btn-outline-primary">طباعة</a>
                        <a href="/invoices?type={{ $type }}" id="back" class="btn btn-block btn-outline-secondary">رجوع</a>
                    </div>
                    </div>
                </div>
            </div>
          </div>
          <!-- /.card-body -->

        </div>
        <!-- /.card -->

      </div>


@endif



<script>
        function printInvoice(){
            $('#print').fadeOut()
            $('#back').fadeOut()
          setTimeout(function(){
                print()
            },1000)
            setTimeout(function(){
              $('#print').fadeIn()
              $('#back').fadeIn()
            },2000)
           
        }
    </script>

   @endsection
