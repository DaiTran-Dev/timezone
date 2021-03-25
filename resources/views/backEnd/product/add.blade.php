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
                <form role="form" method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
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
                                                       name="name" value="{{old('name')}}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    @error('price')
                                                    <label class="col-form-label" for="inputError" style="color: red"><i
                                                            class="far fa-times-circle"></i>{{$message}}</label>
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
                                                    <label class="col-form-label" for="inputError" style="color: red"><i
                                                            class="far fa-times-circle"></i>{{$message}}</label>
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
                                                    @error('priceSale')
                                                    <label class="col-form-label" for="inputError" style="color: red"><i
                                                            class="far fa-times-circle"></i>{{$message}}</label>
                                                    @else
                                                        <label for="">Enter Price Sale</label>
                                                        @enderror
                                                        <input type="text" class="form-control "
                                                               placeholder="Enter Price Sale..." name="priceSale"
                                                               value="{{old('priceSale')}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">

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
