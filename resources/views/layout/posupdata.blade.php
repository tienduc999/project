<form action="/app/public/updatePost/{{ $data->id }}" method="post">
    {!! csrf_field() !!}
    <input type="text" name="time" value="{!! $data->time !!}">
    <input type="text" name="stadium" value="{!! $data->stadium !!}">
    <input type="text" name="address" value="{!! $data->address !!}">
    <input type="text" name="level" value="{!! $data->match !!}">
    <input type="text" name="match" value="{!! $data->level !!}">
    <input type="text" name="status" value="{!! $data->status !!}">
    <input type="text" name="note" value="{!! $data->note !!}">
    <input type="text" name="user_id">


    <input type="submit" name="nhap">
</form>






