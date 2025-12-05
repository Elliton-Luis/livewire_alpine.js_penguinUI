<div x-data="{ open: false }" class="flex flex-col items-center justify-center min-h-[250px] p-4">

    <button x-show="!open"
            x-transition:enter="transition ease-out duration-300 delay-200"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            @click="open = true"
            class="group relative px-8 py-3 bg-slate-900 hover:bg-slate-800 text-white font-semibold rounded-full shadow-lg hover:shadow-slate-500/30 hover:-translate-y-0.5 transition-all duration-300 flex items-center gap-2 overflow-hidden">
        <span class="relative z-10 flex items-center gap-2">
            Entrar
            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
        </span>
    </button>

    <div x-show="open" x-cloak
         x-transition:enter="transition ease-out duration-[400ms]"
         x-transition:enter-start="opacity-0 translate-y-8 scale-95"
         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 translate-y-0 scale-100"
         x-transition:leave-end="opacity-0 translate-y-8 scale-95"
         class="bg-white rounded-[2rem] shadow-2xl shadow-slate-200/50 border border-slate-100 w-full max-w-md text-center relative overflow-hidden">

        <div class="absolute top-0 left-0 w-full h-1 bg-slate-900"></div>

        <div class="p-8">
            <div class="mb-6 inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-slate-50 text-slate-700 shadow-inner border border-slate-100">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
            </div>

            <h3 class="text-xl font-bold text-slate-900 mb-3">Development Stack</h3>

            <div class="text-slate-500 text-sm flex flex-wrap justify-center gap-2 items-center mb-6">
                Feito com
                <span class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-600 font-medium text-xs border border-slate-200">Tailwind</span>
                <span class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-600 font-medium text-xs border border-slate-200">AlpineJs</span>
                <span class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-600 font-medium text-xs border border-slate-200">HeroIcons</span>
                e
                <span class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-600 font-medium text-xs border border-slate-200">Bootstrap Icons</span>.
            </div>

            <div class="flex items-center justify-center gap-2 text-sm text-slate-400 border-t border-slate-50 pt-6">
                <a href="https://github.com/Elliton-Luis" target="_blank" class="flex items-center gap-2 hover:text-slate-800 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
                    <span class="font-medium">Elliton</span>
                </a>
            </div>

            <button @click="open = false" class="mt-6 text-xs text-slate-400 hover:text-slate-600 transition-colors uppercase tracking-widest font-semibold">
                Voltar
            </button>
        </div>
    </div>

</div>
