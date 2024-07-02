@extends('layouts.app')

@section('title', 'お問い合わせフォーム')

@section('content')
<form method="POST" action="{{ route('contact.confirm') }}">
    @csrf
    <label for="first_name">姓</label>
    <input id="first_name" type="text" name="first_name" value="{{ old('first_name') }}" required>
    @error('first_name')
        <span>{{ $message }}</span>
    @enderror

    <label for="last_name">名</label>
    <input id="last_name" type="text" name="last_name" value="{{ old('last_name') }}" required>
    @error('last_name')
        <span>{{ $message }}</span>
    @enderror

    <label for="gender">性別</label>
    <select id="gender" name="gender" required>
        <option value="1">男性</option>
        <option value="2">女性</option>
        <option value="3">その他</option>
    </select>
    @error('gender')
        <span>{{ $message }}</span>
    @enderror

    <label for="email">メールアドレス</label>
    <input id="email" type="email" name="email" value="{{ old('email') }}" required>
    @error('email')
        <span>{{ $message }}</span>
    @enderror

    <label for="tell">電話番号</label>
    <input id="tell" type="text" name="tell" value="{{ old('tell') }}" required>
    @error('tell')
        <span>{{ $message }}</span>
    @enderror

    <label for="address">住所</label>
    <input id="address" type="text" name="address" value="{{ old('address') }}" required>
    @error('address')
        <span>{{ $message }}</span>
    @enderror

    <label for="building">建物名</label>
    <input id="building" type="text" name="building" value="{{ old('building') }}">

    <label for="categry_id">お問い合わせの種類</label>
    <select id="categry_id" name="categry_id" required>
        <option value="">選択してください</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->content }}</option>
        @endforeach
    </select>
    @error('categry_id')
        <span>{{ $message }}</span>
    @enderror

    <label for="detail">お問い合わせ内容</label>
    <textarea id="detail" name="detail" required>{{ old('detail') }}</textarea>
    @error('detail')
        <span>{{ $message }}</span>
    @enderror

    <button type="submit">確認画面</button>
</form>
@endsection