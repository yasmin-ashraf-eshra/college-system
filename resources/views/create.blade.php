<x-app-layout>  
<div class="form-box">       
     <p style="font-size: 21px;font-weight: bold;">Add Student<p><br>       
        <form method="POST" action="{{route('user.store')}}">
    @csrf
    
       <!-- Name -->
       <div>
          <x-label for="name" :value="__('Name')" />

          <x-input id="name" type="text" name="name"  />
       </div>

       <!-- Email Address -->
       <div class="mt-4">
          <x-label for="email" :value="__('Email')" />

          <x-input id="email"  type="email" name="email"  />
        </div>
    
        <div class="flex items-center justify-end mt-4">
          <x-button class="ml-4">Next</x-button>
        </div>
     </form> 
</div>  
</x-app-layout>    
    