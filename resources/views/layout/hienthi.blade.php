
@foreach($data as $thongtin)
    {!! $thongtin->time !!}
    {!! $thongtin->stadium !!}
    {!! $thongtin->address !!}
    {!! $thongtin->match !!}
    {!! $thongtin->status !!}
    {!! $thongtin->note !!}
    {!! $thongtin->account_name!!}
    @endforeach
