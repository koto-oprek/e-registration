@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Payment</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Payment</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-12">

                 <main class="c-main">
    <div class="container-fluid">
      <div class="fade-in">
        <div class="row">
          <div class="col-md-12">
            <div class="card border-0 rounded shadow-sm border-top-orange">
              <div class="card-header">
                <span class="font-weight-bold"><i class="fa fa-user"></i>  ADD New Payment</span>
              </div>
              <div class="card-body">

                <form @submit.prevent="#">

                  <div class="form-group">
                    <label>Payment Name</label>
                    <input type="text" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Payment Logo</label>
                    <input type="file" placeholder="Payment Logo" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Payment Token</label>
                    <input type="text" placeholder="Token" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Payment Status</label>
                    <select placeholder="Status" class="form-control">
                        <option value="">Sudah Bayar</option>
                        <option value="">Belum Bayar</option>
                    </select>
                  </div>
                    
                  <button class="btn btn-info mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                    SAVE</button>
                  <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i>
                    RESET</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
</section>

@endsection



