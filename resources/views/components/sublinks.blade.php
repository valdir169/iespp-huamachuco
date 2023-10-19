@props(['title', 'links'])

<div class="grid gap-4">
    <div><p class="subtitle">{{ $title }}</p></div>
    <ul class="grid gap-2">
        @foreach ($links as $linkText => $linkUrl)
            <li><a href="{{ $linkUrl }}" class="hover:text-[#3477db]">{{ $linkText }}</a></li>
        @endforeach
    </ul>
</div>
