@props(['name'])

<div 
        x-data="{ 
        name: '{{ $name }}', 
        show:false,
        showIfActive(activeTab) {
                this.show = this.name === activeTab
        }
        }" 
    x-show="show"
    >
        {{ $slot }}
</div>