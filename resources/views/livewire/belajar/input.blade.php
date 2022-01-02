<div>

    <form wire:submit.prevent="submit">
        <div>
            <label for="name">Ini nama</label>
            <input id="name" type="text" wire:model="name">
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="hp">No Handphone</label>
            <input id="hp" type="text" wire:model="no_handphone">
            @error('no_handphone') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="kartu">Kartu</label>
            <input id="kartu" type="text" wire:model="kartu">
            @error('kartu') <span class="error">{{ $message }}</span> @enderror
        </div>
        <button type="submit">OK</button>
    </form>
    <br>
    <br>

    <form>
        <input type="checkbox" wire:model="kartu1" id="kartu1" name="kartu1">
        <label for="kartu1"> Axis</label><br>
        <input type="checkbox" id="kartu2" name="kartu2">
        <label for="kartu2"> By.u</label><br>
        <input type="checkbox" id="kartu3" name="kartu3">
        <label for="kartu3"> three</label><br><br>
        <input type="submit" value="Submit">
    </form>
    @if ( session()->has('message'))
    <h3 class="text-red-800">{{session('message')}}</h3>
    @endif
    <h3 class="text-center text-purple-500">Tabel</h3>
    <input type="text" name="search" wire:model="search">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No Hp</th>
                <th>Kartu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $key => $contact)
            <tr>
                <td>{{$contacts->firstItem() + $key}}</td>
                <td>{{$contact->name}}</td>
                <td>{{$contact->no_handphone}}</td>
                <td>{{$contact->kartu}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $contacts->links() }}


    <div wire:offline>
        You are now offline.
    </div>

</div>