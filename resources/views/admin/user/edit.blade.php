@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование пользователя</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Пользователи</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.user.show', $user->id) }}">{{ $user->name }}</a></li>
                            <li class="breadcrumb-item active">Редактирование</li>
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
                    <div class="col-md-9 col-lg-7">
                        <form action="{{ route('admin.user.update', $user->id) }}" class="w-50" method="POST">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Имя пользователя" value="{{ $user->name }}">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $user->email }}">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="role">Выберите пользователя</label>
                                <select name="role" class="form-control w-50" id="role">
                                    @foreach($roles as $id => $role)
                                        <option value="{{ $id }}"
                                            {{ $id == $user->role ? 'selected' : '' }}
                                        >{{ $role }}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Обновить">
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
