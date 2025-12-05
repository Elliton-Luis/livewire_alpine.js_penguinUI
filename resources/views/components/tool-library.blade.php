<div
    x-data="{ open: true }"
    class="w-full max-w-4xl mx-auto mt-10 p-6 rounded-3xl bg-gray-900 border border-gray-800 shadow-lg space-y-6"
>

    <!-- Header -->
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-semibold text-gray-100">
            Biblioteca de Ferramentas
        </h1>

        <button
            @click="open = !open"
            class="px-4 py-1.5 text-sm rounded-xl bg-gray-800 border border-gray-700 text-gray-300 hover:bg-gray-700 transition"
        >
            <span x-show="open">Ocultar</span>
            <span x-show="!open">Mostrar</span>
        </button>
    </div>

    <div x-show="open" x-transition class="space-y-6">

        <!-- ITEM TEMPLATE -->
        <div class="rounded-2xl p-4 bg-gray-800 border border-gray-700 hover:border-indigo-600 transition group">
            <h2 class="text-lg font-semibold text-indigo-300 flex items-center gap-2">
                <x-heroicon-o-bolt class="h-5 w-5 text-indigo-400 group-hover:text-indigo-300 transition" />
                Livewire
            </h2>
            <p class="text-gray-400 text-sm mt-1">
                Componentes reativos para criar interfaces dinâmicas no Blade sem esforço.
            </p>
        </div>

        <div class="rounded-2xl p-4 bg-gray-800 border border-gray-700 hover:border-purple-600 transition group">
            <h2 class="text-lg font-semibold text-purple-300 flex items-center gap-2">
                <x-heroicon-o-sparkles class="h-5 w-5 text-purple-400 group-hover:text-purple-300 transition" />
                Alpine.js
            </h2>
            <p class="text-gray-400 text-sm mt-1">
                Comportamento reativo minimalista para interações leves com HTML.
            </p>
        </div>

        <div class="rounded-2xl p-4 bg-gray-800 border border-gray-700 hover:border-blue-600 transition group">
            <h2 class="text-lg font-semibold text-blue-300 flex items-center gap-2">
                <x-heroicon-o-cube class="h-5 w-5 text-blue-400 group-hover:text-blue-300 transition" />
                PenguinUI
            </h2>
            <p class="text-gray-400 text-sm mt-1">
                Componentes sóbrios, espaçosos e elegantes para interfaces minimalistas.
            </p>
        </div>

        <div class="rounded-2xl p-4 bg-gray-800 border border-gray-700 hover:border-green-600 transition group">
            <h2 class="text-lg font-semibold text-green-300 flex items-center gap-2">
                <x-heroicon-o-photo class="h-5 w-5 text-green-400 group-hover:text-green-300 transition" />
                HeroIcons
            </h2>
            <p class="text-gray-400 text-sm mt-1">
                Ícones SVG bonitos, consistentes e perfeitos para qualquer UI moderna.
            </p>
        </div>

    </div>
</div>
