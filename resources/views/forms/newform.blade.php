<x-layout title="Normal Form">
    <hgroup>
        <h1>Form Example</h1>
        <p>Form Validation Example</p>
    </hgroup>
    <form enctype="multipart/form-data" action="{{route('form.post')}}" method="post" >
        @csrf
        <label>Name</label>
        <input name="name">
        <label>Email</label>
        <input name="email">
        <br/>
        <button type="submit">Submit</button>

    </form>


    </x-layout>
