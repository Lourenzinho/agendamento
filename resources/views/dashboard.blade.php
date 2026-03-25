<x-layouts::app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern
                    class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern
                    class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern
                    class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>
        <div
            class="relative flex flex-col w-full h-full overflow-scroll text-gray-200 shadow-md rounded-lg bg-clip-border">
            <table class="w-full text-left table-auto min-w-max text-slate-800 bg-zinc-900 dark:bg-zinc-900 rounded-lg">
                <thead>
                    <tr class="text-slate-500 border-b border-slate-300 bg-slate-50">
                        <th class="p-4">
                            <p class="text-sm leading-none font-normal">
                                Protocolo
                            </p>
                        </th>
                        <th class="p-4">
                            <p class="text-sm leading-none font-normal">
                                Polo
                            </p>
                        </th>
                        <th class="p-4">
                            <p class="text-sm leading-none font-normal">
                                Espaço
                            </p>
                        </th>
                        <th class="p-4">
                            <p class="text-sm leading-none font-normal">
                                Curso
                            </p>
                        </th>
                        <th class="p-4">
                            <p class="text-sm leading-none font-normal">
                                Professor
                            </p>
                        </th>
                        <th class="p-4">
                            <p class="text-sm leading-none font-normal">
                                Semestre
                            </p>
                        </th>
                        <th class="p-4">
                            <p class="text-sm leading-none font-normal">
                                Data e hora
                            </p>
                        </th>
                        
                        <th class="p-4">
                            <p></p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-slate-50">
                        <td class="p-4">
                            <p class="text-sm font-bold">
                                000113
                            </p>
                        </td>
                        <td class="p-4">
                            <p class="text-sm">
                                Guarulhos
                            </p>
                        </td>
                        <td class="p-4">
                            <p class="text-sm">
                                Rádio
                            </p>
                        </td>
                        <td class="p-4">
                            <p class="text-sm">
                                Pintologia
                            </p>
                        </td>
                        <td class="p-4">
                            <p class="text-sm">
                                Wagner
                            </p>
                        </td>
                        <td class="p-4">
                            <p class="text-sm">
                                3
                            </p>
                        </td>
                        <td class="p-4">
                            <p class="text-sm">
                                11/09/2001 09:46
                            </p>
                        </td>
                        <td class="p-4">
                            <a href="#" class="text-sm font-semibold ">
                                Edit
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts::app>
