    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-bold mb-4">Gerenciar Conteúdos</h3>

                    <ul class="space-y-2">
                        <li>
                            <a href="{{ route('aprovados.index') }}" class="text-blue-600 hover:underline">
                                📜 Aprovados
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('professores.index') }}" class="text-blue-600 hover:underline">
                                👨‍🏫 Professores
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('novidades.index') }}" class="text-blue-600 hover:underline">
                                📰 Novidades
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('galerias.index') }}" class="text-blue-600 hover:underline">
                                🖼️ Galeria de Fotos
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </x-app-layout>
