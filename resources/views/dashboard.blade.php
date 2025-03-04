<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('SISTEMA DE INCIDENCIAS') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <h2 class="text-xl text-center font-semibold leading-tight text-gray-800">Lista de Usuarios</h2>
                        
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                            @livewire('table', ['model' => 'App\Models\User'])
                        </div>
                    </div> 
            </div>
        </div>
    </div>
</x-app-layout>
