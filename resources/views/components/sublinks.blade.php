@props(['title', 'links'])

<div>
    <div class="text-sm font-black sm:text-base lg:text-xl 2xl:text-2xl"><p>{{ $title }}</p></div>
    <ul class="text-xs mt-2 sm:text-sm">
        @foreach ($links as $linkText => $linkUrl)
            <li><a href="{{ $linkUrl }}" class="hover:text-[#3277db]">{{ $linkText }}</a></li>
        @endforeach
    </ul>
</div>
