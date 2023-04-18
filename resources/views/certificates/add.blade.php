@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add certificate</h2>

    <form method="post" action="/console/certificates/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="name">Certificate Name:</label>
            <input type="text" name="name" id="name" value="{{old('name')}}" required>
            
            @if ($errors->first('name'))
                <br>
                <span class="w3-text-red">{{$errors->first('name')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="level">Level:</label>
            <input type="text" name="level" id="level" value="{{old('level')}}">

            @if ($errors->first('level'))
                <br>
                <span class="w3-text-red">{{$errors->first('level')}}</span>
            @endif
        </div>
        
        <div class="w3-margin-bottom">
            <label for="skill_id">skill:</label>
            <select name="skill_id" id="skill_id">
                <option></option>
                @foreach ($skills as $skill)
                    <option value="{{$skill->id}}"
                        {{$skill->id == old('skill_id') ? 'selected' : ''}}>
                        {{$skill->name}}
                    </option>
                @endforeach
            </select>
            @if ($errors->first('skill_id'))
                <br>
                <span class="w3-text-red">{{$errors->first('skill_id')}}</span>
            @endif
        </div>

        <button skill="submit" class="w3-button w3-green">Add certificate</button>

    </form>

    <a href="/console/certificates/list">Back to certificate List</a>

</section>

@endsection