<table class="table table-bordered">
    <tr>
        <th class="">User</th>
        @php
            $user= $payment->purchases->first()->user;
        @endphp
        <td>{{$user->first_name}} {{$user->last_name}}</td>
    </tr>
</table>

<table class="table table-bordered">
    <thead>
    <tr>
        <th class="bg-primary text-white">Books</th>
    </tr>
    </thead>
    <tbody>
    @foreach($payment->purchases as $purchase)
        <tr>
            <td>{{$purchase->book->title}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
