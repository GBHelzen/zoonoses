<div>
    {{-- The best athlete wants his opponent at his best. --}}



    <div class="mt-10 sm:mt-0">
        @include('_flash-messages')


        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Informações Socioeconômicas </h3>
                    <p class="mt-1 text-sm text-gray-600">
                        Essas informações serão utilizadas para validar as guias de serviços
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form wire:submit.prevent="store" method="POST">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">

                                {{-- Renda familiar --}}
                                <div class="col-span-6 sm:col-span-3">

                                    <x-label class="inline-flex" for="nome" :value="__('Renda Familiar')" /> <span
                                        class="ml-1 text-sm text-red-700 inline-flex">*</span>
                                    <x-masked-input :mask="'##.###,##'" wire:model="renda_familiar" id="renda_familiar"
                                        class="block mt-1 w-full" type="text" name="renda_familiar"
                                        :value="old('renda_familiar')" />
                                    <x-input />
                                    @error('renda_familiar') <span class="text-red-700">{{ $message }}</span> @enderror
                                </div>

                                {{-- Pessoas em domicilio --}}
                                <div class="col-span-6 sm:col-span-3">

                                    <x-label class="inline-flex" for="nome"
                                        :value="__('Pessoas em domicílio')" /> <span
                                        class="ml-1 text-sm text-red-700 inline-flex">*</span>

                                    <x-input wire:model="pessoas_em_domicilio" id="pessoas_em_domicilio"
                                        class="block mt-1 w-full" type="text" name="pessoas_em_domicilio"
                                        :value="old('pessoas_em_domicilio')" />
                                    @error('pessoas_em_domicilio') <span class="text-red-700">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="col-span-6 sm:col-span-3">

                                    <x-label class="inline-flex" for="nome"
                                        :value="__('Cães macho em domicílio')" /> <span
                                        class="ml-1 text-sm text-red-700 inline-flex">*</span>

                                    <p class="text-sm text-gray-500">
                                        {{__('Se não possuir nenhum, informe 0')}}
                                    </p>

                                    <x-input wire:model="quantidade_cachorro_macho" id="quantidade_cachorro_macho"
                                        class="block mt-1 w-full" type="number" min="0" name="quantidade_cachorro_macho"
                                        :value="old('quantidade_cachorro_macho')" />
                                    @error('quantidade_cachorro_macho') <span class="text-red-700">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">

                                    <x-label class="inline-flex" for="nome" :value="__('Cadelas em domicílio')" /> <span
                                        class="ml-1 text-sm text-red-700 inline-flex">*</span>
                                    <p class="text-sm text-gray-500">
                                        {{__('Se não possuir nenhum, informe 0')}}
                                    </p>

                                    <x-input wire:model="quantidade_cachorro_femea" id="quantidade_cachorro_femea"
                                        class="block mt-1 w-full" type="number" min="0" name="quantidade_cachorro_femea"
                                        :value="old('quantidade_cachorro_femea')" />
                                    @error('quantidade_cachorro_femea') <span class="text-red-700">{{ $message }}</span>
                                    @enderror
                                </div>


                                {{-- Gatos --}}


                                {{-- <div class="col-span-6 sm:col-span-3">

                                    <x-label class="inline-flex" for="nome"
                                        :value="__('Quantidade gatos em domicílio')" /> <span
                                        class="ml-1 text-sm text-red-700 inline-flex">*</span>

                                    <x-input wire:model="quantidade_gato_total" id="quantidade_gato_total"
                                        class="block mt-1 w-full" type="number" min="0" name="quantidade_gato_total"
                                        :value="old('quantidade_gato_total')" />
                                    @error('quantidade_gato_total') <span class="text-red-700">{{ $message }}</span>
                                @enderror
                            </div> --}}

                            <div class="col-span-6 sm:col-span-3">

                                <x-label class="inline-flex" for="nome"
                                    :value="__('Quantidade gatos macho em domicílio')" /> <span
                                    class="ml-1 text-sm text-red-700 inline-flex">*</span>
                                <p class="text-sm text-gray-500">
                                    {{__('Se não possuir nenhum, informe 0')}}
                                </p>

                                <x-input wire:model="quantidade_gato_macho" id="quantidade_gato_macho"
                                    class="block mt-1 w-full" type="number" min="0" name="quantidade_gato_macho"
                                    :value="old('quantidade_gato_macho')" />
                                @error('quantidade_gato_macho') <span class="text-red-700">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">

                                <x-label class="inline-flex" for="nome"
                                    :value="__('Quantidade gatos fêmea em domicílio')" /> <span
                                    class="ml-1 text-sm text-red-700 inline-flex">*</span>
                                <p class="text-sm text-gray-500">
                                    {{__('Se não possuir nenhum, informe 0')}}
                                </p>

                                <x-input wire:model="quantidade_gato_femea" id="quantidade_gato_femea"
                                    class="block mt-1 w-full" type="number" min="0" name="quantidade_gato_femea"
                                    :value="old('quantidade_gato_femea')" />
                                @error('quantidade_gato_femea') <span class="text-red-700">{{ $message }}</span>
                                @enderror
                            </div>





                            {{-- Programa Social --}}

                            <fieldset class="col-span-6 sm:col-span-6">
                                <div>
                                    <x-label class="inline-flex" for="nome"
                                        :value="__('Participa de programa social ?')" />
                                    <span class="ml-1 text-sm text-red-700 inline-flex">*</span>
                                    <p class="text-sm text-gray-500">
                                    </p>
                                </div>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-center">
                                        <input wire:model="participa_programa_social" id="participa_programa_socialS"
                                            name="participa_programa_social" type="radio"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                            value="1" {{ $this->participa_programa_social  == '1' ? 'checked' : '' }}>
                                        <label for="push_everything"
                                            class="ml-3 block text-sm font-medium text-gray-700">
                                            Sim
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input wire:model="participa_programa_social" id="participa_programa_socialN"
                                            name="push_notifications" type="radio"
                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                            value="0" {{ $this->participa_programa_social == '0' ? 'checked' : '' }}>
                                        <label for="push_email" class="ml-3 block text-sm font-medium text-gray-700">
                                            Não
                                        </label>
                                    </div>
                                    @error('participa_programa_social') <span class="text-red-700">{{ $message }}</span>
                                    @enderror
                                </div>
                            </fieldset>

                            @if ($this->participa_programa_social)

                            {{-- Programas Sociais --}}
                            <div class="col-span-6 inline">
                                <x-label class="inline-flex" for="nome" :value="__('Programas Sociais')" /> <span
                                    class="ml-1 text-sm text-red-700 inline-flex">*</span>

                                <p class="text-sm text-gray-500">
                                    {{__('Selecione o(s) programa(s) que você participa')}}
                                </p>


                                {{-- <select wire:model="programas_sociais" id="programas_sociais" name="programas_sociais"
                                autocomplete="programas_sociais"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                multiple>
                                @foreach (config('helper')['form-socio-economico-programas'] as $key =>
                                $programa)
                                <option value="{{$key}}">{{$programa}}</option>
                                @endforeach
                                </select> --}}
                                @foreach (config('helper')['form-socio-economico-programas'] as $key =>
                                $programa)
                                <fieldset class="inline-flex mt-4 mx-2">
                                    <legend class="  text-base font-medium text-gray-900">{{$programa}}</legend>
                                    <div class=" space-y-4">
                                        <div class="flex items-start">
                                            <div class="flex items-center h-5">
                                                <input wire:model="programas_sociais" name="programas_sociais[]"
                                                    id="{{$key}}" name="comments" type="checkbox" value="{{$key}}"
                                                    class="focus:ring-indigo-500 inline h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                @endforeach


                                @error('programas_sociais') <span class="text-red-700">{{ $message }}</span>
                                @enderror
                            </div>
                            @else
                            <div class="col-span-6 sm:col-span-6">
                            </div>

                            @endif


                        </div>
                    </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <a href="{{ route('dashboard') }}" type="button"
                    class="py-auto mr-4 inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-900 bg-white hover:bg-gray-50  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Voltar
                </a>
                <button type="submit"
                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Salvar
                </button>
            </div>
        </div>
        </form>
    </div>
</div>
</div>
</div>



@push('scripts')
<script>
    window.addEventListener('livewire:load', () => {
        @this.on('saved', () => {
            window.scrollTo(0,100)
        })
    })
</script>
@endpush
