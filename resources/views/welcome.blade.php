<x-page title="Ignasi">
        {{-- named slots --}}
    <x-slot name="title">Ignasi</x-slot>
    <x-slot name="alert">
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>Benvingut a la meva web! </strong>No pateixis. Farem grans coses.
        </div>
    </x-slot>
   {{-- $slot --}}
    
      <x-hero></x-hero>
 
</x-page>
