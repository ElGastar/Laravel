<a href='{{ route("news.create") }} '>Add news</h2></a>
</br>

@forelse ($news as  $key=>$new)
 @php $key++; @endphp
 {{ $new }} <a href='{{ route('news.edit', ['news' => $key ]) }} '> edit</a></br>

 @empty

have not news

@endforelse

