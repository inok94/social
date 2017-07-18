@extends('layouts.base')

@section('content')
    {{ csrf_field() }}
    <section id="content" class="section-dropdown">
        <p class="select-header"> Выбирете новостной ресурс: </p>
        <label class="select">
            <select name="news_sources" id="news_sources">
                <option value="{{@$source_id}} : {{@$source_name}}">{{$source_name}}</option>
                @foreach ($news_sources as $news_source)
                    <option value="{{$news_source['id']}} : {{$news_source['name'] }}">{{$news_source['name']}}</option>
                @endforeach
            </select>
        </label>

    </section>
    <p> Новости от : {{$source_name}}</p>
    <section class="news">
        @foreach($news as $selected_news)
            <article>
                <img src="{{$selected_news['urlToImage']}}" alt="" />
                <div class="text">
                    <h1>{{$selected_news['title']}}</h1>
                    <p style="font-size: 14px">{{$selected_news['description']}} <a href="{{$selected_news['url']}}" target="_blank"><small>читать дальше...</small></a> </p>
                    <div style="padding-top: 5px;font-size: 12px">Автор: {{$selected_news['author'] or "Unknown" }}</div>
                    @if($selected_news['publishedAt'] != null)
                        <div style="padding-top: 5px;">Дата публикации: {{ Carbon\Carbon::parse($selected_news['publishedAt'])->format('l jS of F Y ') }}</div>
                    @else
                        <div style="padding-top: 5px;">Дата публикации: Неуказана</div>

                    @endif

                </div>
            </article>
        @endforeach
    </section>
    </div>
@endsection