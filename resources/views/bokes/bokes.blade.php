@extends('layouts.app')


<ul class="media-list">
@foreach ($bokes as $boke)
    <li class="media">
        <div class="media-left">
            <img class="media-object img-rounded" src="{{ Gravatar::src($user->nickname, 50) }}" alt="">
        </div>
        <div class="media-body">
            <div>
                {!! link_to_route('users.show', $user->nickname, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $boke->created_at }}</span>
            </div>
            <div>
                <p>{{ $boke->nickname}}が{{$boke->filename}}で{{$boke->content}}とぼけた。</p>
            </div>
            
        </div>
    </li>
@endforeach
</ul>

{!! $bokes->render() !!}
