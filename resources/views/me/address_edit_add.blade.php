@extends('layout.layout')

@section('main')
    <main id="mainContent" class="main-content">
        <!-- Page Container -->
        <div class="page-container ptb-60">
            <div class="container">
                <div class="row row-rl-10 row-tb-20">
                    <div class="page-content col-xs-12 col-sm-8 col-md-9">

                        <!-- Checkout Area -->
                        <section class="section checkout-area panel prl-30 pt-20 pb-40">
                            <h2 class="h3 mb-20 h-title">我的收货地址: <i style="font-size: 8px">*必填</i></h2>
                            <form class="mb-30">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>用户名</label>
                                            <input type="text" name="name" class="form-control" placeholder="用户名">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>手机号码</label>
                                            *<input type="text" name="phone" class="form-control" placeholder="手机号码">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>省/市/区</label>
                                            *<input type="text" name="address" class="form-control" placeholder="省/市/区">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            *<label>详细地址</label>
                                            <input type="text" name="detail" class="form-control" placeholder="详细地址">
                                        </div>
                                    </div>

                                </div>
                            </form>
                            <button class="btn btn-lg btn-rounded mr-10">新增收货地址</button>
                        </section>
                        <!-- End Checkout Area -->

                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Container -->


    </main>
@stop