<table class="table table-bordered">
    <thead>
    <tr>
        <th>User</th>
        <th>Comment</th>
        <th></th>
    </tr>
    </thead>
    <tbody>

    @foreach($blog->comments as $comment)
        <tr>
            <td>{{$comment->user->first_name }} {{$comment->user->last_name }}</td>
            <td>{{$comment->content }}</td>
            <td>
                <form action='{{route('admin.blog.comment.destroy',['blog'=>$blog->id,'comment'=>$comment->id])}}'
                      method='POST' class='delete_form'>
                    @csrf
                    @method('DELETE')
                    <button type='submit' title='Delete' class='delete_data btn btn-danger btn-sm'>
                        Delete
                    </button>
                </form>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>
