<?php

use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Models\Request;

new class extends Component
{
    #[Computed]
    public function requests()
    {
        return Request::orderBy('id', 'desc')->get();
    }
};
?>

<div>
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
                    @foreach ($this->requests as $request)
                    <tr class="hover:bg-slate-50">
                        <td class="p-4">
                            <p class="text-sm font-bold">
                                {{ $request->id }}
                            </p>
                        </td>
                        <td class="p-4">
                            <p class="text-sm">
                                Polo->nome
                            </p>
                        </td>
                        <td class="p-4">
                            <p class="text-sm">
                                {{ $request->espaco_tipo }}
                            </p>
                        </td>
                        <td class="p-4">
                            <p class="text-sm">
                                UserAluno->curso
                            </p>
                        </td>
                        <td class="p-4">
                            <p class="text-sm">
                                UserProfessor->nome
                            </p>
                        </td>
                        <td class="p-4">
                            <p class="text-sm">
                                3
                            </p>
                        </td>
                        <td class="p-4">
                            <p class="text-sm">
                                {{ $request->agendado_data }}
                            </p>
                        </td>
                        <td class="p-4">
                            <a href="#" class="text-sm font-semibold ">
                                Edit
                            </a>
                        </td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
</div>