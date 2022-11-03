<form wire:submit.prevent="submit" validate class="zForm" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="fname" class="form-label">Fullname</label>
        <input type="text" class="form-control" id="fname" wire:model="name" placeholder="John Doe" required value="{{ $name }}">
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="tel" class="form-control" id="phone" wire:model="phone" placeholder="+91 XXXXX XXXXX" required>
        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label for="pincode" class="form-label">Pincode</label>
        <input type="text" class="form-control" id="pincode" wire:model="pincode" placeholder="Enter Pincode" required>
        @error('pincode') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <textarea class="form-control" id="address" rows="3" required wire:model="address" placeholder="Somewhere on Earth, preferably in Kerala"></textarea>
        @error('address') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label for="electronic" class="form-label">Electronic Appliance</label>
        <select class="form-select" aria-label="Select an Electronics Appliance" wire:model="electronic_appliance" id="electronic" required>
            <optgroup label="Refrigeration Appliances">
                <option value="Freezers">Freezers</option>
                <option value="Refrigerators">Refrigerators</option>
                <option value="Water Coolers">Water Coolers</option>
                <option value="Ice Makers">Ice Makers</option>
            </optgroup>
            <optgroup label="Cooking Appliances">
                <option value="Kitchen Stoves">Kitchen Stoves</option>
                <option value="Rice Cookers">Rice Cookers</option>
                <option value="Roti Makers">Roti Makers</option>
                <option value="Steamer Ovens">Steamer Ovens</option>
                <option value="Microwaves">Microwaves</option>
            </optgroup>
            <optgroup label="Washing & Drying Appliances">
                <option value="Washing Machines">Washing Machines</option>
                <option value="Clothes Dryer">Clothes Dryer</option>
                <option value="Drying Cabinets">Drying Cabinets</option>
                <option value="Dishwashers">Dishwashers</option>
            </optgroup>
            <optgroup label="Heating & Cooling Appliances">
                <option value="Air Conditioners">Air Conditioners</option>
                <option value="Radiators">Radiators</option>
                <option value="Water Heaters">Water Heaters</option>
            </optgroup>
            <optgroup label="Kitchen Appliances">
                <option value="Coffee Makers">Coffee Makers</option>
                <option value="Blenders">Blenders</option>
                <option value="Mixers">Mixers</option>
                <option value="Toasters">Toasters</option>
                <option value="Water Purifiers">Water Purifiers</option>
                <option value="Kitchen Hoods">Kitchen Hoods</option>
                <option value="Food Processors">Food Processors</option>
                <option value="Deep Fryers">Deep Fryers</option>
                <option value="Air fryers">Air fryers</option>
                <option value="Food Dehydrators">Food Dehydrators</option>
            </optgroup>
            <optgroup label="Other Home Appliances">
                <option value="Iron press or clothing irons">Iron press or clothing irons</option>
                <option value="Electric Drills">Electric Drills</option>
                <option value="Kettles">Kettles</option>
                <option value="Vacuum Cleaners">Vacuum Cleaners</option>
                <option value="Electric Fans">Electric Fans</option>
                <option value="Televisions">Televisions</option>
            </optgroup>
            <optgroup label="Miscellaneous Appliances List">
                <option value="Lamp">Lamp</option>
                <option value="Lantern">Lantern</option>
                <option value="Torch">Torch</option>
                <option value="Evaporative cooler">Evaporative cooler</option>
                <option value="Humidifier">Humidifier</option>
                <option value="Air Purifier">Air Purifier</option>
                <option value="Waffle Iron">Waffle Iron</option>
                <option value="Bread Machine">Bread Machine</option>
                <option value="Popcorn Machine">Popcorn Machine</option>
                <option value="Smart Home Tech">Smart Home Tech</option>
            </optgroup>
        </select>
        @error('electronic_appliance') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label for="problem" class="form-label">Problem Description</label>
        <textarea class="form-control" id="problem" wire:model="problem_description" rows="3" required placeholder="My Oven is not cold enough"></textarea>
        @error('problem_description') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Attach Image (optional)</label>
        <input class="form-control" type="file" wire:model="attach_image" id="formFile">
        @error('attach_image') <span class="text-danger">{{ $message }}</span> @enderror
        @if ($attach_image)
            Photo Preview:
            <img src="{{ $attach_image->temporaryUrl() }}" width="20">
        @endif
    </div>
    <button class="mainBtn" type="submit">Submit</button>
</form>
