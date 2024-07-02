@extends('layouts.app')

@section('title', 'Register')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    body {
        background-color: #f5ece3;
    }
    .container {
        max-width: 400px;
        margin-top: 50px;
        padding: 30px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-group label {
        font-weight: bold;
    }
    .form-group input::placeholder {
        color: #bbb;
    }
    .btn-primary {
        background-color: #8e8076;
        border-color: #8e8076;
        border: 2px solid #8e8076;
        width: 10em;
        height: 3em;
        text-align: center;
    }
    .btn-primary:hover {
        background-color: #a0522d;
        border-color: #a0522d;
    }
    .navbar {
        background-color: #ffffff;
        border-bottom: 1px solid #dcdcdc;
    }
    .navbar-brand {
        font-family: 'Times New Roman', Times, serif;
        font-size: 24px;
        margin: 0 auto;
    }
    .nav-link {
        color: #8b4513;
        font-size: 16px;
        border: 2px solid #8b4513;
        border-radius: 5px;
        padding: 5px 10px;
    }
    .nav-link:hover {
        color: #a0522d;
    }
    .header-content {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .header-content .navbar-brand {
        flex: 1;
        text-align: center;
    }
    .header-content .nav-item {
        margin-right: 15px;
    }
    .header-content .nav-item:last-child {
        margin-right: 0;
    }
    .register-header {
        text-align: center;
        padding: 20px;
        background-color: #c8c5c5;
        margin-bottom: 30px;
        border-radius: 10px 10px 0 0;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="header-content">
        <a class="navbar-brand" href="#">FashionablyLate</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
        </ul>
    </div>
</nav>

<div><h2 style="text-align:center">Register</h2></div>
<div class="container">
    
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">お名前</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="例: 山田　太郎" value="{{ old('name') }}" required>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}" required>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">パスワード</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="例: coachtech1106" required>
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-block">登録</button>
    </form>
</div>
@endsection
