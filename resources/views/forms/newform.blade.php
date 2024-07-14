<x-layout title="New Form">
    <hgroup>
        <h1>Form Exam</h1>
        <p>Form Validation Example</p>
    </hgroup>

    <form enctype="multipart/form-data" action="{{ route('form1.post') }}" method="POST">
        @csrf
        <label>Name</label>
        <input name="name" value={{old('name')}}>
        <label>Email</label>
        <input name="email" value="{{old('price')}}">
        <br />
        <label>Price</label>
        <input name="price" type="number" value={{old('price')}}>

        <br/>
        <button>Submit</button>
        <!-- Show Success Message -->
        @if(session("success"))
          <p>{{session("success")}}</p>
        @endif

        <!-- Show Error Message -->
         @if ($errors->any())
          @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
          @endforeach
        @endif
            
        
        
        
    </form>
</x-layout>
