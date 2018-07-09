@if (count($bokes) > 0)
<ul >
@foreach ($bokes as $boke)

    <li >
        <div>
            {{ $boke->nickname}}が{{$boke->filename}}で{{$boke->content}}とぼけた。

        </div>
    </li>
@endforeach
</ul>
{!! $bokes -> render() !!}
@endif