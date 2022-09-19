<div>
    <div class="container">
    <div class="card">
     <div class="card-header">
         <h3>Edit Customer</h3>
     </div>
     <div class="card-body">
         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='name'>
             <label for="name">Customer Name</label>
             @error('name')
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
             <input type="text" class="form-control" wire:model.defer='address'>
             <label for="address">Address</label>
             @error('address')
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
 
          <div class="form-group mb-2 d-grip gap-2 d-md-flex justify-content-end">
            <button class="btn btn-primary" wire:click="editCustomer()">
                Save Changes
            </button>
            <button class="btn btn-info mx-2" wire:click="back()">
                Back
            </button>
        </div>
     </div>
    </div>
 </div>
 
</div>