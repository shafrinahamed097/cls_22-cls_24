<x-layout title="New Form">
    <hgroup>
        <h1>Form Exam</h1>
        <p>Form Validation Example</p>
    </hgroup>

    <form enctype="multipart/form-data" action="{{ route('form1.post') }}" method="POST">
        @csrf
        <label>Name</label>
        <input name="name">
        <label>Email</label>
        <input name="email">

        <br/>
        <button>Submit</button>
        <!-- Show Success Message -->
        @if(session("success"))
          <p>{{session("success")}}</p>
        @endif

        <!-- Show Error Message -->
         @if($errors->any())
         <p>{{$errors->first()}}</p>
         @endif
        
        
    </form>
</x-layout>
