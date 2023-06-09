<div>
    <x-back.form.input type="text" name="name" wire:model="name" title="{{ $title }}"/>
    <x-back.form.input disabled type="text" wire:model="slug" title="{{ $slugTitle }}"/>

    <script>
        window.addEventListener('slugUpdated', event => {

            document.querySelector('input[name="slug"]').value = event.detail
        })
    </script>
</div>
