<x-app-layout>
<div class="form-box">
   <form action="{{route('student.store')}}" method="POST">
    @csrf
    <div>
          <x-label for="level" :value="__('Level:')" />

          <x-input id="level" type="text" name="level"  />
       </div>
       <div >
          <x-label for="GPA" :value="__('GPA:')" />

          <x-input id="GPA"  type="text" name="gpa"  />
        </div>
        <div >
          <x-label for="contact" :value="__('Contact-Info:')" />

          <x-input id="contact"  type="text" name="contact"  />
        </div>
    <div class="flex items-center justify-end mt-4">
          <x-button class="ml-4" onclick="showAlert()">Register</x-button>
        </div>
    </form>
</div>
</x-app-layout> 