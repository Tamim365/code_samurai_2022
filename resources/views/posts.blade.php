<html>
<head>
    <title>
        Create Post
    </title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('css/auth.css')}}">
</head>
<body>

@php
    $posts = DB::select('SELECT * FROM posts');
    // dd($users);
@endphp

<div class="container">
        <br><br><br><br><br><br><br><br>
        <h1>Please give your feedback</h1>
        <br>
        <form action="{{route('posts.add')}}" class="form" method="post">
            @csrf
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea class="form-control" name="content" cols="3" rows="5"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Save</button>
            </div>
 
        </form>


           <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th style="min-width:80%">title</th>
                                                    <th style="min-width:80%">content</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($posts as $post)
                                                @if ($post->status == "pending")
                                                <tr>
                                                    <td>
                                                        <h5>{{ $post->title }}</h5>
                                                    </td>
                                                    <td><p>{{ $post->content }}</p></td>
                                                        
                                                     
                                                    </tr>
                                                    @endif
                                                @endforeach

                                            </tbody>
                                        </table>

</div>
</body>
</html>