<div class="row">
    <div class="col-lg-12 animate__animated animate__fadeIn animate__slow grid-margin">
        <div class="card">
            <div class="card-body">
                <form wire:submit.prevent="store" method="post">
                    @csrf
                    <x-back.form.select name="parent"
                                        label="Ebeveyn Kategori (Ebeveyn Kategori Oluşturmak için boş bırakın.)"
                                        placeholder="Kategori seçiniz.." :options="$categories"/>
                    <livewire:back.slug title="Ürün Adı" slug-title="Ürün URL"/>
                    <input type="hidden" name="slug">
                    <x-back.form.input type="text" name="meta_title" title="Ürün Meta Başlığı"/>
                    <x-back.textarea.default id="meta_description" name="meta_description"
                                             title="Ürün Meta Açıklaması"/>
                    <x-back.form.file :id="'featured_image'" :name="'featured_image'" title="Ürün Resmi"/>
                    <x-back.form.switchbox wire:model="variantStatus" id="variantStatus"
                                           label="Varyant Oluşturulsun mu ?"/>


                    <div x-data="{ variantStatus: @entangle('variantStatus').defer }" x-show="variantStatus">
                        <h3 class="card-title"> Varyant Oluştur </h3>
                        <x-back.button class="btn-sm form-group" type="button" wire:click="resetVariant"
                                       color="primary">
                            Reset
                        </x-back.button>

                        {{-- <div wire:ignore
                              x-data="{ addProductAttribute: @entangle('show'), get isActive() { return $this.open === 'AddProductAttribute'}, productAttribute: '', }" x-show="addProductAttribute">
                             <div x-init="select2 = $($refs.select).select2();" class="form-group">
                                 <label>Ürün Özellikleri</label>
                                 <select x-data="{ attributes: @js($attributes) }"
                                         x-model="productAttribute" x-ref="select" id="product-attributes"
                                         class="js-example-basic-multiple select2 select2-hidden-accessible"
                                         multiple style="width:100%" tabindex="-1" aria-hidden="true">
                                     <template x-for="productAttribute in attributes">
                                         <option :value="productAttribute.id" x-text="productAttribute.name"></option>
                                     </template>
                                 </select>
                             </div>

                             <span x-text="productAttribute"></span>
                             <x-back.button type="button"
                                            x-on:click="$wire.set('productAttributes', productAttribute)"
                                            wire:click="AddProductAttribute" color="primary">
                                 Ekle
                             </x-back.button>
                         </div>--}}
                        <div wire:ignore
                             x-data="{ open: @entangle('show'), get isActive() { return this.open === 'AddProductAttribute'}, selectedAttributes: [] }"
                             x-show="isActive">
                            <div x-data="{ attributes: @js($attributes) }"
                                 x-init="
                                  $nextTick(() => {
             const selectElement = $refs.select;
             $(selectElement).select2();
             $(selectElement).on('change', () => {
                 selectedAttributes = $(selectElement).val();
             });
         })" class="form-group">
                                <label>Ürün Özellikleri</label>
                                <select x-model="selectedAttributes" x-ref="select" id="product-attributes"
                                        class="js-example-basic-multiple select2 select2-hidden-accessible"
                                        multiple style="width:100%" tabindex="-1" aria-hidden="true">
                                    <template x-for="productAttribute in attributes">
                                        <option :value="productAttribute.id" x-text="productAttribute.name"></option>
                                    </template>
                                </select>
                            </div>

                            <span x-text="selectedAttributes"></span>
                            <x-back.button type="button"
                                           x-on:click="$wire.set('productAttributes', selectedAttributes), $wire.addProductAttribute()"
                                           color="primary">
                                Ekle
                            </x-back.button>
                        </div>


                        <div class="row" wire:ignore
                             x-data="{ open: @entangle('show'), get isActive() { return this.open === 'SelectAttributeValues'}, selectedAttributeValues: [] }"
                             x-show="isActive">
                            @foreach($productAttributes as $productAttribute)
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Varyant</label>
                                        <select id="selectedAttributeValues{{ $productAttribute }}"
                                                class="js-example-basic-multiple select2 select2-hidden-accessible"
                                                multiple=""
                                                style="width:100%" tabindex="-1" aria-hidden="true">
                                        </select>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-12">
                                <x-back.button color="primary" type="button" class="btn-sm"
                                               wire:click="combineVariants"> Varyant Oluştur
                                </x-back.button>
                            </div>
                        </div>

                        <div x-data="{ createVariants: false }" x-show="createVariants">
                            @foreach($variants as $index => $variant)
                                <div class="row">
                                    @foreach($variant as $value => $details)
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label>Varyant</label>
                                                <x-back.form.select disabled>
                                                    <option value="{{ $value }}"
                                                            selected> {{ $details['detail']->name }} </option>
                                                </x-back.form.select>
                                            </div>
                                            @endforeach
                                            <div class="col-sm-2">
                                                <x-back.form.input title="Stok" type="number"
                                                                   wire:model="variants.{{ $index }}.{{ $value }}.stock"
                                                                   min="0"/>
                                            </div>

                                            <div class="col-sm-2">
                                                <x-back.form.input title="Tutar" type="number"
                                                                   wire:model="variants.{{ $index }}.{{ $value }}.price"
                                                                   min="0"/>
                                            </div>
                                        </div>
                                    @endforeach
                                    <x-back.button color="primary" type="button" class="btn-sm"
                                                   wire:click="createVariants"> Varyantları Oluştur
                                    </x-back.button>
                                </div>
                                <hr>
                        </div>

                        <x-back.button type="submit" color="success">Oluştur</x-back.button>
                </form>
            </div>
        </div>
    </div>
</div>

