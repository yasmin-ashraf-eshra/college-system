<x-app-layout>
    <div class="form-box">
       <form action="{{url('student/' .$student->id)}}" method="POST">
        @csrf
        @method("PATCH")
        <div>
              <x-label for="level" :value="__('Level:')" />
    
              <x-input id="level" type="text" name="level" value="{{$student->level}}" class="form-control" />
           </div>
           <div >
              <x-label for="GPA" :value="__('GPA:')" />
    
              <x-input id="GPA"  type="text" name="gpa" value="{{$student->gpa}}" class="form-control" />
            </div>
            <div >
              <x-label for="contact" :value="__('Contact-Info:')" />
    
              <x-input id="contact"  type="text" name="contact"  value="{{$student->contact}}" class="form-control" />
            </div>
            <div class="flex items-center justify-end mt-4">
              <x-button class="ml-4">Register</x-button>
            </div>
        </form>
    </div>
    </x-app-layout> 