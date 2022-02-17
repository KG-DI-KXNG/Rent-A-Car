<x-app-layout>
  <x-slot name="header">
          {{ __( $page ) }}
  </x-slot>

  @if (request()->routeIs('dashboard'))
    @livewire('admin-dashboard')
  @else
    @livewire('category')
  @endif
 
</x-app-layout>