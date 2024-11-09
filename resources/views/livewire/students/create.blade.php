<div>
    {{-- Do your work, then step back. --}}
    <!-- resources/views/livewire/students/create.blade.php -->
<form wire:submit.prevent="addStudent">
   <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
       <!-- Name Field -->
       <div>
           <label for="name" class="block mb-2 text-sm font-medium dark:text-white">Name</label>
           <input type="text" id="name" wire:model="form.name" class="form-control">
           @error('form.name') <span class="text-red-500">{{ $message }}</span> @enderror
       </div>

       <!-- Email Field -->
       <div>
           <label for="email" class="block mb-2 text-sm font-medium dark:text-white">Email</label>
           <input type="email" id="email" wire:model="form.email" class="form-control">
           @error('form.email') <span class="text-red-500">{{ $message }}</span> @enderror
       </div>

       <!-- Class Field -->
       <div>
           <label for="class_id" class="block mb-2 text-sm font-medium dark:text-white">Class</label>
           <select id="class_id" wire:model="form.class_id" class="form-control">
               <option value="">Select a class</option>
               @foreach ($classes as $class)
                   <option value="{{ $class->id }}">{{ $class->name }}</option>
               @endforeach
           </select>
           @error('form.class_id') <span class="text-red-500">{{ $message }}</span> @enderror
       </div>

       <!-- Section Field -->
       <div>
           <label for="section" class="block mb-2 text-sm font-medium dark:text-white">Section</label>
           <select id="section" wire:model="form.section_id" class="form-control">
               <option value="">Select a section</option>
               @foreach ($sections as $section)
                   <option value="{{ $section->id }}">{{ $section->name }}</option>
               @endforeach
           </select>
           @error('form.section_id') <span class="text-red-500">{{ $message }}</span> @enderror
       </div>
   </div>

   <div class="flex justify-end mt-4 gap-x-3">
       <button type="submit" class="btn btn-primary">Save</button>
   </div>
</form>

</div>
