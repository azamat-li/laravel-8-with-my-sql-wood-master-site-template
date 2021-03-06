<!DOCTYPE html>

@section('head')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Добавить клиента</title>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700"
          rel="stylesheet"/>
    <link href="{{asset('css/default.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/fonts.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/app.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
@endsection

@extends ('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div class="section">
                <h1 class="heading has-text-weight-bold is-size-4">Новый Клиент</h1>
                <form method="POST" action="/clients">
                    @csrf
                    <div class="field">
                        <div class="field">
                            <label class="label" for="name">Имя Клиента</label>
                            <div class="control">
                                <input type="text" class="input @error('name') alert @enderror" name="name" id="name"
                                       required
                                       value="{{ old('name') }}">

                            @error('name')
                            <p class="help is-danger alert">{{ $errors->first('name') }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="about">Тёплые слова о клиенте</label>

                        <div class="control">
                            <textarea class="textarea @error('about') is-danger alert @enderror" name="about" id="about"
                                      required> {{old('about')}} </textarea>
                            @error('about')
                            <p class="help is-danger alert">{{ $errors->first('about') }}</p>
                            @enderror
                        </div>
                    </div>


                    <div class="field">
                        <label class="label" for="tags">Область работ</label>
                        <div class="select is-multiple">
                            <select multiple name="tags[]" id="tags">
                                @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}">
                                    {{ $tag->name }}
                                </option>
                                @endforeach
                            </select>
                            @error('about')
                            <p class="help is-danger alert">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button
                                class="border border-green-500 text-green-500 hover:bg-green-500 hover:text-gray-100 rounded px-4 py-2"
                                type="submit">Добавить Клиента
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
