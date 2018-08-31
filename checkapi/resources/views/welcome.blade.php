@extends('master')
@section("content")
<div id="crud-app"></div>

<script>
    var api = {
        getPaged:'{{route("api.user.getPaged")}}',
        CreateUser:'{{route("api.user.create")}}',
        DeleteUser:'{{route("api.user.delete")}}',
        EditUser:'{{route("api.user.edit")}}',
    };

    window.api = api;

</script>

<script src="{{asset('js/dist/react/index.js')}}"></script>
@endsection
