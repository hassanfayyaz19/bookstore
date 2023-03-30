@component('mail::message')

    Hello {{Auth::user()->first_name}}.

    @component('mail::panel')
        Purchased Books
    @endcomponent
    @component('mail::table')
        |        Name       |      Download link   |
        | ------------------| :------------------- |
        @foreach($payment->purchases as $purchase )
            |   {{$purchase->book->title}}  |   <a
                href="{{route('book.download',['book'=>encrypt($purchase->book_id)])}}">Click Here to Download</a>     |
        @endforeach

    @endcomponent

    Thanks,

    {{ config('app.name') }}
@endcomponent
