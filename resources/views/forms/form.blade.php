
<x-layout title="Normal Form">
 <hgroup>
 <h1>Normal Form</h1>
 <p>How to create and handle forms in Laravel</p>
 </hgroup>

 <form  enctype="multipart/form-data" action="{{ route ('form.post')}}" method="POST">
    @csrf
    <label>Name</label>
    <input type='text' name="name">
    <br>
    <label>Email</label>
    <input name="email">
    <br>
    <label>Profile Picture</label>
    <input type="file" name="profile_picture">
    <br>

    <button type="submit">Submit</button>
    
   <!-- Show Success Message -->

    <!-- <p>{{session("success")}}</p>
    <p>{{session("name")}}</p>
    <p>{{session("email")}}</p> -->

    <!-- Show Error Message -->

    <p>{{session ("error")}}</p>


 </form>
</x-layout>