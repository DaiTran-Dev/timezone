@extends('layouts.backEnd.layoutBackEnd')
@section('title_page','Blog Admin')
@section('title_form','Blog')
@section('css')
    <!-- summernote -->
    <link rel="stylesheet" href="public/backEnd/plugins/summernote/summernote-bs4.min.css">
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Blog</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
               @if(isset($product->id))
                    <form role="form" method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
                @else
                    <form role="form" method="PUT" action="{{route('products.update')}}" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="{{$product->id}}}">
                        @method('PUT')
               @endif
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            @error('name')
                                            <label class="col-form-label" for="inputError" style="color: red"><i
                                                    class="far fa-times-circle"></i>{{$message}}</label>
                                            @else
                                                <label for="">Product Name</label>
                                                @enderror
                                                <input type="text" class="form-control " placeholder="Enter Title..."
                                                       name="name" value="{{$product->name}}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    @error('price')
                                                    <label class="col-form-label" for="inputError" style="color: red">{{$message}}</label>
                                                    @else
                                                        <label for="">Enter Price</label>
                                                        @enderror
                                                        <input type="text" class="form-control "
                                                               placeholder="Enter Price..." name="price"
                                                               value="{{old('price')}}">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    @error('priceSale')
                                                    <label class="col-form-label" for="inputError" style="color: red">{{$message}}</label>
                                                    @else
                                                        <label for="">Enter Price Sale</label>
                                                        @enderror
                                                        <input type="text" class="form-control "
                                                               placeholder="Enter Price Sale..." name="priceSale"
                                                               value="{{old('priceSale')}}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    @error('quantity')
                                                    <label class="col-form-label" for="inputError" style="color: red"><i
                                                            class="far fa-times-circle"></i>{{$message}}</label>
                                                    @else
                                                        <label for="">Enter Quantity</label>
                                                        @enderror
                                                        <input type="text" class="form-control "
                                                               placeholder="Enter Quantity..." name="quantity"
                                                               value="{{old('quantity')}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    @error('thumbnail')
                                    <label class="col-form-label" for="inputError" style="color: red"><i
                                            class="far fa-times-circle"></i>{{$message}}</label>
                                    @else
                                        <label for="">Choose Thumbnail</label>
                                        @enderror

                                        <div class="form-group" data-toggle="modal" data-target="#exampleModal">
                                            <div class="row">
                                                <div class="col-md-11">
                                                    <input type="text" class="form-control"
                                                           placeholder="Choose Image" name="thumbnail" id="thumbnail"
                                                    >
                                                </div>
                                                <div class="col-md-1">
                                                    <button type="button" class="btn btn-primary"><i class="fas fa-upload"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="form-group">
                                    @error('listImage')
                                    <label class="col-form-label" for="inputError" style="color: red"><i
                                            class="far fa-times-circle"></i>{{$message}}</label>
                                    @else
                                        <label for="">Choose List Image</label>
                                        @enderror

                                        <div class="form-group" data-toggle="modal" data-target="#exampleModal2">
                                            <div class="row">
                                                <div class="col-md-11">
                                                    <input type="text" class="form-control"
                                                           placeholder="Choose Image" name="listImage" id="listImage"
                                                    >
                                                </div>
                                                <div class="col-md-1">
                                                    <button type="button" class="btn btn-primary"><i class="fas fa-upload"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    @error('description')
                                    <label class="col-form-label" for="inputError" style="color: red"><i
                                            class="far fa-times-circle"></i>{{$message}}</label>
                                    @else
                                        <label for="">Enter Description</label>
                                        @enderror
                                        <textarea name="description" id="description" cols="30" rows="10">{{old('description')}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 80%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="{{url('public/file/dialog.php?field_id=thumbnail')}}" style="width: 100%; height: 500px;overflow-y: auto;border: none"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 80%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="{{url('public/file/dialog.php?field_id=listImage')}}" style="width: 100%; height: 500px;overflow-y: auto;border: none"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <!-- Summernote -->
    <script src="public/backEnd/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function () {
            // Summernote
            $('#description').summernote({
                height:300
            })
        })
    </script>
@endsection
