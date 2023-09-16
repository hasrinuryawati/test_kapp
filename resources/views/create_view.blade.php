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
    <form action="{{route('asset')}}" method="POST">
        @csrf
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="id">Id</label>
                        <input class="form-control" type="number" name="id" placeholder="optional">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="owner">Owner</label>
                        <input class="form-control" type="email" name="owner">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="asset_name">Asset</label>
                        <input class="form-control" type="text" name="asset_name">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="value">Value</label>
                        <input class="form-control" type="number" name="value">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="added_at">Added At</label>
                        <input class="form-control" type="date" name="added_at">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="last_check_at">Last Check At</label>
                        <input class="form-control" type="date" name="last_check_at">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</body>
</html>