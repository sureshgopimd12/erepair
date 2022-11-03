<form wire:submit.prevent="submit">
    @csrf
    <div class="mb-1">
        <input type="tel" class="form-control" id="phone-1" wire:model="phone" placeholder="Phone Number" required>
        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="text-end">
        <button type="submit" class="mainBtn normal">Submit</button>
    </div>
</form>
