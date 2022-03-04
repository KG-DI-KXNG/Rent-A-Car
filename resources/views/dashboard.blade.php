<x-app-layout>
  
  @if (request()->routeIs('dashboard'))
  <x-slot name="header">
          {{ __( $page ) }}
  </x-slot>
    @livewire('admin-dashboard')
  @else
    @livewire('category')
  @endif
 
</x-app-layout>