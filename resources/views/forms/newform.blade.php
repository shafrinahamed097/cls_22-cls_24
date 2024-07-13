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

        
        
        
    </form>
</x-layout>
