<x-app-layout>
    <div class="form-box">       
        <p style="font-size: 21px;font-weight: bold;">Edit Student<p><br>       
           <form method="POST" action="{{url('user/' .$user->id)}}">
           @csrf
           @method("PATCH")
          <!-- Name -->
          <div>
             <x-label for="name" :value="__('Name')" />
   
             <x-input id="name" type="text" name="name" value="{{$user->name}}"  />
          </div>
   
          <!-- Email Address -->
          <div class="mt-4">
             <x-label for="email" :value="__('Email')" />
   
             <x-input id="email"  type="email" name="email" value="{{$user->email}}"  />
           </div>
       
           <div class="flex items-center justify-end mt-4">
             <x-button class="ml-4">Next</x-button>
           </div>
        </form> 
   </div>  
</x-app-layout>