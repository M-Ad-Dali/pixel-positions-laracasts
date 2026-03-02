{{-- <div {{ $attributes(['class' => 'p-4 bg-white/5 rounded-xl border border-transparent hover:border-blue-800 group transition-colors duration-400']) }}> //[طريقة 1]
  {{ $slot }}
</div> --}}

@php //[طريقة 2]
  $classes = 'p-4 bg-white/5 rounded-xl border border-transparent hover:border-blue-800 group transition-colors duration-400';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
  {{ $slot }}
</div>
