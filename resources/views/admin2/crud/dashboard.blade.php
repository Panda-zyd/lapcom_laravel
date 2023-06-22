@extends('admin2.home')
@section('content')


<div class="d-flex flex-row justify-content-around " style="margin: 0px;width:100%;flex-wrap:wrap;padding-top: 60px;">


    <div style="width: 300px;border-radius:10px;background: radial-gradient(circle, rgba(228,251,63,1) 0%, rgba(70,252,106,1) 100%);    box-shadow: 0 1.15rem 1.75rem 0 rgba(58,59,69,.15)!important;" class="d-flex flex-row py-4 mb-5 ">
        <div style="width: 35%" class="text-center">
            <i style="background-color: #769748!important;font-size: 60px;border-radius:50%;color:white" class="bi bi-cash-coin px-3 py-1"></i>
        </div>
        <div style="width: 65%" class="overflow-hidden position-relative text-center">
            <h5>Totale Revenue</h5>
            <h3>${{$totale_revenue}}</h3>
        </div>
    </div>

    <div style="width: 300px;border-radius:10px;background: radial-gradient(circle, rgba(174,238,192,1) 0%, rgba(148,187,233,1) 100%);;box-shadow: 0 1.15rem 1.75rem 0 rgba(58,59,69,.15)!important;" class="d-flex flex-row py-4 mb-5 ">
        <div style="width: 35%" class="text-center">
            <i style="background-color:rgb(143, 141, 248);font-size: 60px;border-radius:50%;color:white" class="bi bi-cart px-3 py-1"></i>
        </div>
        <div style="width: 65%" class=" px-3 pt-2 text-center">
            <h5>Total Products</h5>
            <h3>{{$products}}</h3>
        </div>
    </div>

    <div style="width: 300px;border-radius:10px;background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(213,183,93,1) 66%, rgba(188,244,255,1) 100%);box-shadow: 0 1.15rem 1.75rem 0 rgba(58,59,69,.15)!important;" class="d-flex flex-row py-4 mb-5 ">
        <div style="width: 35%" class="text-center">
            <i style="background-color:#ffa000;font-size: 60px;border-radius:50%;color:white" class="bi bi-cart-check px-3 py-1"></i>
        </div>
        <div style="width: 65%" class=" px-3 pt-2 text-center">
            <h5>Total Orders</h5>
            <h3>{{$orders_count}}</h3>
        </div>
    </div>

    <div style="width: 300px;border-radius:10px;background: linear-gradient(0deg, rgba(255,185,185,1) 0%, rgba(246,133,133,1) 32%, rgba(243,255,122,1) 100%);" class="d-flex flex-row py-4 mb-5 ">
        <div style="width: 35%" class="text-center">
            <i style="background-color:rgb(228, 1, 1);font-size: 60px;border-radius:50%;color:white" class="bi bi-people px-3 py-1"></i>
        </div>
        <div style="width: 65%" class=" px-3 pt-2 text-center">
            <h5>Total Customers</h5>
            <h3>{{$clients}}</h3>
        </div>
    </div>

    <div style="width: 300px;border-radius:10px;background:radial-gradient(circle, rgba(244,156,255,1) 0%, rgba(255,194,194,1) 100%);" class="d-flex flex-row py-4 mb-5 ">
        <div style="width: 35%" class="text-center">
            <i style="background-color:#ff0091;font-size: 60px;border-radius:50%;color:white" class="bi bi-check2-square px-3 py-1"></i>
        </div>
        <div style="width: 65%" class=" px-3 pt-2 text-center">
            <h5>Totale Delivered</h5>
            <h3>{{$order_delivered}}</h3>
        </div>
    </div>

    <div style="width: 300px;border-radius:10px;background: radial-gradient(circle, rgba(221,255,137,1) 0%, rgba(197,255,251,1) 32%, rgba(122,255,229,1) 100%);" class="d-flex flex-row py-4 mb-5 ">
        <div style="width: 35%" class="text-center">
            <i style="background-color:#96dd31;font-size: 60px;border-radius:50%;color:white" class="bi bi-truck px-3 py-1"></i>
        </div>
        <div style="width: 65%" class=" px-3 pt-2 text-center">
            <h5>Totale Processing</h5>
            <h3>{{$order_processing}}</h3>
        </div>
    </div>

</div>
@endsection
