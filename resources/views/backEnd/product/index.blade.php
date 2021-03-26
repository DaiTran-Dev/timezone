@extends('layouts.backEnd.layoutBackEnd')
@section('title_page','Blog Admin')
@section('title_form','Blog')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Responsive Hover Table</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Price Sale</th>
                            <th>Quantity</th>
                            <th>Modified Date</th>
                            <th>Tools</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $key=>$item)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->price}}</td>
                                <td><?php echo isset($item->priceSale)? $item->priceSale :'0'; ?></td>
                                <td>{{$item->quantity}}</td>
                                <td>{{$item->updated_at->format('d-m-y m:s:i')}}</td>
                                <td>
                                    <a href="{{route('products.edit',$item->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection
