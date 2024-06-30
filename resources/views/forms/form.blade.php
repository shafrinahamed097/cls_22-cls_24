
<x-layout title="Normal Form">
 <hgroup>
 <h1>Normal Form</h1>
 <p>How to create and handle forms in Laravel</p>
 </hgroup>

 <form action="{{ route ('form.post')}}" method="POST">
    @csrf
    <label>Name</label>
    <input type='text' name="name">
    <label>Email</label>
    <input name="email">
    <button type="submit">Submit</button>
    

    <p>{{session("success")}}</p>
    <p>{{session("name")}}</p>
    <p>{{session("email")}}</p>


 </form>
</x-layout>