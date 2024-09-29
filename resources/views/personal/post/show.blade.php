@extends('personal.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-3">{{ $post->title }}</h1>
                        <a href="{{ route('personal.post.edit', $post->id) }}" class="text-black-50 mr-2" title="редактировать"><i class="fas fa-pencil-alt"></i></a>
                        <div class="text-center">
                            <button type="button" class="border-0 bg-transparent text-black-50" title="удалить" data-toggle="modal" data-target="#modal-default">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <div class="modal fade" id="modal-default">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Вы точно хотите удалить пост?</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Нет</button>
                                            <form action="{{ route('personal.post.delete', $post->id) }}" method="POST">
                                                @csrf
                                                @method('Delete')
                                                <button type="submit" class="btn btn-danger">Да, удалить</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('personal.main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('personal.post.index') }}">Посты</a></li>
                            <li class="breadcrumb-item active">{{ $post->title }}</li>
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
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{ $post->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Название</td>
                                        <td>{{ $post->title }}</td>
                                    </tr>
                                    <tr>
                                        <td>Количество лайков</td>
                                        <td>{{ $post->liked_users_count }}</td>
                                    </tr>
                                    <tr>
                                        <td>Количество комментариев</td>
                                        <td>{{ $post->comments->count() }}</td>
                                    </tr>
                                    <tr>
                                        <td>Посмотреть пост</td>
                                        <td>
                                            <a href="{{ route('post.show', $post->id) }}" class="text-black-50" title="посмотреть"><i class="far fa-eye"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
