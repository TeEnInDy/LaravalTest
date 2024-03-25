@extends('layout.default')

@section('title', 'Titles')

@section('contentStarter_Page')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Final SE_CAMP</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    </ol>

                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">เพิ่มผู้ใช้งาน</h3>
                        </div>
                        <form action="/titles<?php if (isset($title_id)) {
                            echo '/' . $title_id->tit_id;
                        } ?>" method="post">
                            <?php if (isset($title_id)) { ?>
                            @method('PUT')
                            <?php } ?>
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">คำนำหน้าชื่อ</label>
                                    <input type="text" name="tit_name" value="<?php if (isset($title_id)) {
                                        echo $title_id->tit_name;
                                    } ?>" class="form-control"
                                        id="exampleInputEmail1" placeholder="เช่น นาย นาง นางสาว ฯลฯ">
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="tit_is_active" <?php if(isset($title_id) &&
                                                $title_id->tit_is_active == 1){?> checked
                                        <?php }?> class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">ยืนยัน</label>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button onclick="myFunction1()" type="submit" class="btn btn-success">✅Successful</button>
                            </div>
                            <script>
                                function myFunction1() {
                                    alert("Add Successfully!!!");
                                }
                            </script>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">ผลลัพธ์</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>คำนำหน้าชื่อ</th>
                                        <th>สถานะการใช้งาน</th>
                                        <th>เครื่องมือ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($titles as $index => $title) {?>
                                    <tr>
                                        <td>{{ $index + 1 }}.</td>
                                        <td>{{ $title->tit_name }}</td>
                                        <td>
                                            {{ $title->tit_is_active }}
                                        </td>
                                        <td>
                                            <a href="{{ url('/titles/' . $title->tit_id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <form method="post" action="/titles/{{ $title->tit_id }}">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="myFunction2()" type="submit" class="btn btn-danger">Delete</button>
                                                <script>
                                                    function myFunction2() {
                                                        alert("Delete Successfully!!!");
                                                    }
                                                </script>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
