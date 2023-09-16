<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="btn-group-sm">
                        {{-- <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-add"><i class="fas fa-plus"></i>Add Data</button> --}}
                        <a href="asset/create/view" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i>Add Data</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Owner</th>
                                <th scope="col">Asset Name</th>
                                <th scope="col">Value</th>
                                <th scope="col">Days</th>
                                <th scope="col">Added At</th>
                                <th scope="col">Last Check At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($assets as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->owner}}</td>
                                <td>{{$item->asset_name}}</td>
                                <td>{{$item->value}}</td>
                                <td>{{$item->days}}</td>
                                <td>{{$item->added_at}}</td>
                                <td>{{$item->last_check_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- Modal Add --}}
            {{-- <div class="modal fade" id="modal-add">
                <div class="modal-dialog">
                    <div class="modal-content bg-info">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Data</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="#" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="id">Id</label>
                                            <input class="form-control" type="number" name="id">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="owner">Owner</label>
                                            <input class="form-control" type="text" name="owner">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="asset_name">Asset</label>
                                            <input class="form-control" type="number" name="asset_name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="value">Value</label>
                                            <input class="form-control" type="number" name="value">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-default">Simpan</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div> --}}
            <!-- /.modal -->
        </div>
    </div>
</body>
</html>