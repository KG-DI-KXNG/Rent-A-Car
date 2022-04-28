<x-app-layout>
  
  @if (request()->routeIs('dashboard'))
 
    {{-- @livewire('admin-dashboard') --}}
    <admin-dashboard />
  @else
    {{-- @livewire('category') --}}
    <admin-vehicle vehicles="{{$allVehicle}}"/>
  @endif
 
</x-app-layout>