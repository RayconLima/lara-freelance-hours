@props([
    'icon',
    'text'
])
<div class="uppercase font-bold text-white flex items-center space-x-2 px-[8px] py-[4px] rounded-full bg-[#181826] border border-[#1E1E2C]">
    @switch($icon)
        @case('javascript')
            <i class="fa-brands fa-js"></i>
            @break
    
        @case('vue')
            <i class="fa-brands fa-vuejs"></i>
            @break
    
        @case(!in_array($icon, ['laravel', 'vue', 'php', 'react']))
            <x-dynamic-component component="ui.icons.{{ $icon }}" class="w-5 h-5"/>
            @break
    
        @default
            <i class="fab fa-{{ $icon }}"></i> 
    @endswitch

    <span class="text-[12px] tracking-wider text-[#C3C3D1]">{{ $text }}</span>
</div>
