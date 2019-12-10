@extends('layouts.admin')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0 text-dark text-center">أضف فاتورة  جديده </h1>
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
            <form action="{{ route('invoices.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="row">

                    <div class="col-md-6">
                      <h4 class="text-center"  ><span data-price="0.0" id="price">0.0</span> جنية سوداني</h4>
                    </div>


                    <div class="col-md-6">
                      <div class="form-group" dir="rtl">
                              <label  class="text-right float-right" for="">المورد </label>
                          <select  class="form-control" name="supplier_id" id="">
                              @foreach ($Suppliers as $Supplier)
                              <option value="{{ $Supplier->id }}">{{ $Supplier->name }}</option>
                              @endforeach
                          </select>
                      </div>
                    </div>

<div class="col-md-12">
<div class="row">


<div class="col-12">
    <!-- Custom Tabs -->
    <div class="card">
      <div class="card-header d-flex p-0">
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



<div class="row" dir="rtl">
                                    @foreach ($item->categories as $category)
                                              @foreach ($category->prodects as $prodect)

                                              <div class="card col-2 text-center m-1">
                                                <img src="{{ $prodect->img }}" alt="{{ $prodect->img }}" width="100%" height="250" srcset="">
                                                        <br>
                                                        <div class="form-group clearfix">
                                                            <input id="checkboxPrimary{{ $prodect->id }}"  value="{{ $prodect->id }}" data-price='{{ $prodect->price }}' type="checkbox" name="productes[]" class="form-control checkbox">
                                                            <label for="checkboxPrimary{{ $prodect->id }}">
                                                              أضف للفاتورة
                                                            </label>
                                                        </div>
                                                        <br>
                                                <h5>{{ $prodect->name }}</h5> 
                                                <h6>{{ $prodect->price }}</h6> 
                                              </div>
                                             
                                              @endforeach
                          
                                    @endforeach
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

</div>
</div>

<input type="hidden" name="type" value="{{ $type }}">

                    <div class="col-md-6 offset-3">
                                 <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-block btn-info">حفظ</button>

                </div>
                <div class="form-group">
                    <a href="/invoices?type={{ $type }}" class="btn btn-block btn-outline-primary btn-sm">رجوع</a>
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

<!-- jQuery -->
<script src="/admin/plugins/jquery/jquery.min.js"></script>
<script>
$(".checkbox").change( function(){
  var old=parseInt($('#price').data('price'))
      var new_price=parseInt($(this).data('price'))
   if( $(this).is(':checked') ) {
    $('#price').data('price',old+new_price)
    $('#price').html(old+new_price)
    }else{
      $('#price').data('price',old-new_price)
    $('#price').html(old-new_price)
   }
   
});


</script>
@endsection

