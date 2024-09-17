@extends('personal.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование поста</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
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
                    <div class="col-12">
                        <form action="{{ route('personal.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <div class="form-group w-50">
                                    <input type="text" name="title" class="form-control" placeholder="Название поста"
                                           value="{{ $post->title }}">
                                    @error('title')
                                    <div class="text-danger">Это поле должно быть заполнено</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <textarea name="content" id="summernote">{{ $post->content }}</textarea>
                                    @error('content')
                                    <div class="text-danger">Это поле должно быть заполнено</div>
                                    @enderror
                                </div>
                                <div class="form-group w-50">
                                    <label for="inputFile">Добавить превью</label>
                                    <div class="mb-2">
                                        <img src="{{ url('storage/' . $post->preview_image) }}" alt="preview_image" class="w-50">
                                    </div>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="preview_image"
                                                   id="inputFile">
                                            <label class="custom-file-label">Выберите изображение</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Загрузка</span>
                                        </div>
                                    </div>
                                    @error('preview_image')
                                    <div class="text-danger">Это поле должно быть заполнено</div>
                                    @enderror
                                </div>
                                <div class="form-group w-50">
                                    <label for="inputFile">Добавить главное изображение</label>
                                    <div class="mb-2">
                                        <img src="{{ url('storage/' . $post->main_image) }}" alt="main_image" class="w-50">
                                    </div>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="main_image" id="inputFile">
                                            <label class="custom-file-label">Выберите изображение</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Загрузка</span>
                                        </div>
                                    </div>
                                    @error('preview_image')
                                    <div class="text-danger">Это поле должно быть заполнено</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="category">Выберите категорию</label>
                                    <select name="category_id" class="form-control w-50" id="category">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $category->id == $post->category_id ? 'selected' : '' }}
                                            >{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Обновить">
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
