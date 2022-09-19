<div>
   <div class="card">
    <div class="card-header bg-secondary">
        <h3><b>Add Customer</b></h3>
    </div>
    <div class="card-body">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" wire:model.defer='name'>
            <label for="name">Full Name</label>
            @error('name')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" wire:model.defer='address'>
            <label for="address">Address</label>
            @error('address')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" wire:model.debounce.500ms='email'>
            <label for="email">Email</label>
            @error('email')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" wire:model.defer='contact_number'>
            <label for="contact_number">Contact Number</label>
            @error('contact_number')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

         <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
            <button class="btn btn-secondary" type="submit" wire:click='addCustomer()'>
                <b>Add Customer</b>
            </button>
         </div>
    </div>
   </div>
</div>