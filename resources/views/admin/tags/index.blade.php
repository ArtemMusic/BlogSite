@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Теги</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Главная</a></li>
                        <li class="breadcrumb-item active">AdminPanel</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="mb-3 row">
                <div class="col-1"><a href="{{route('admin.tag.create')}}" class="btn btn-block btn-primary">Создать</a></div>
            </div>
            <div class="row">
                <div class="col-5">
                    <div class="card">
                        <div class="card-header">

                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Название</th>
                                            <th colspan="3" class="text-center">Действия</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($tags as $tag)
                                        <tr>
                                            <td>{{$tag->id}}</td>
                                            <td>{{$tag->title}}</td>
                                            <td><a href="{{route('admin.tag.show', $tag->id)}}"><i class="fa-thin fas fa-eye"></i></a></td>
                                            <td><a href="{{route('admin.tag.edit', $tag->id)}}"><i class="fa-thin fas fa-pen text-success"></i></a></td>
                                            <td>
                                                <form action="{{route('admin.tag.delete', $tag->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="border-0 bg-transparent"><i class="fa-thin fas fa-trash text-danger" role="button"></i></button>
                                                </form>
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
                <!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection