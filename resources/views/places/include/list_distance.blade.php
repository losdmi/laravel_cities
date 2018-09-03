<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <td>
            <a href='{{ route('places.edit', ['place' => $place->id]) }}'>
                {{ $place->address }}
            </a>
        </td>
        <th>Distance, kms</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php /** @var \App\Models\Place $place */?>
    @foreach ($places as $place)
        <tr>
            <th scope="row">{{ $place->id }}</th>
            <td>{{ $place->address }}</td>
            <td>{{ $place->getDistanceTo($placeFromFilter) }}</td>
            <td>
                <button type="button"
                        data-url='{{ route('places.destroy', ['place' => $place->id]) }}'
                        class="close text-danger delete-place"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
