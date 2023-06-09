<div>
    <x-back.table :table-type="'table-hover'" :headers="['Adı', 'Url', 'Oluşturulma Tarihi', 'İşlemler', 'Görünürlük']">
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>
                <td>{{ $category->created_at->diffForHumans() }}</td>
                <td>
                    <a class="text-decoration-none" href="{{ route('admin.categories.edit', $category->id) }}">
                        <x-back.button type="button" color="warning" class="btn-rounded btn-icon">
                            <i class="mdi mdi-border-color mdi-18px"></i>
                        </x-back.button>
                    </a>
                    <form style="display: inline;" method="post" action="{{ route('admin.categories.destroy', $category->id) }}">
                        @csrf
                        @method('DELETE')
                        <x-back.button type="submit" color="danger" class="btn-rounded btn-icon">
                            <i class="mdi mdi-delete mdi-18px"></i>
                        </x-back.button>
                    </form>
                </td>
                <td>
                    <x-back.form.checkbox wire:click="toggleStatus({{ $category->id }})" :is-checked="$category->status" name="status"/>
                </td>
            </tr>
        @endforeach
    </x-back.table>

    {{ $categories->links() }}
</div>
