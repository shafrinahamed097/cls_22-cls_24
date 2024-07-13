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
        
        <label>Price</label> <!-- Fixed typo here -->
        <input name="price" type="number">
        
        <button type="submit">Submit</button>
        
        @if(session('success'))
            <p>{{ session('success') }}</p>
        @endif

        @if($errors->any())
            @foreach($errors->all() as $error) <!-- Fixed this line -->
                <p>{{ $error }}</p>
            @endforeach
        @endif
    </form>
</x-layout>
