@extends('layouts.admin')

@section('content')

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0 text-dark text-center"> نظرة عامة  <small> </small></h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <section class="content">
      <div class="container-fluid">
  <!-- Small boxes (Stat box) -->
  <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner text-center text-center">
            <h3>{{$Materials->count()}}</h3>

            <p>الخامات</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner text-center text-center">
            <h3>{{$Categories->count()}}</h3>

            <p>الأصناف</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner text-center">
            <h3>{{$Calibers->count()}}</h3>

            <p>العيارات</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner text-center">
            <h3>{{$Suppliers->count()}}</h3>

            <p>الصاغة</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner text-center">
            <h3>{{$Products->count()}}</h3>

            <p>المجوهرات</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner text-center">
            <h3>{{$Clients->count()}}</h3>

            <p>العملاء</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner text-center">
            <h3>{{$Invoices->where('type','selling')->count()}}</h3>

            <p>فواتير البيع</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner text-center">
            <h3>{{$Invoices->where('type','purchase')->count()}}</h3>

            <p>فواتير الشراء</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          
        </div>
      </div>
      <!-- ./col -->
    </div>
    
  </div>
    </div>

@endsection
