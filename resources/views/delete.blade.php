<x-page title="Esborra">
        {{-- named slots --}}
    <x-slot name="title">Esborra</x-slot>
    <x-slot name="alert">
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>Benvingut a la meva web! </strong>No pateixis. Farem grans coses.
        </div>
    </x-slot>
   {{-- $slot --}}
     <div class="mx-auto p-2" style="width: 300px;">
      <x-form></x-form>
     </div>
</x-page>
