{{-- @props(['employer','width' => 90])
<img src="{{ asset($employer->logo) }}" alt="" class="rounded-xl" width="{{ $width }}"> --}}


@props(['employer','width' => 90])

<img 
    src="{{ str_starts_with($employer->logo, 'http') 
            ? $employer->logo       {{-- رابط خارجي من Factory --}}
            : asset('storage/' . $employer->logo)  {{-- صورة محلية --}}
        }}" 
    alt="" 
    class="rounded-xl" 
    width="{{ $width }}">