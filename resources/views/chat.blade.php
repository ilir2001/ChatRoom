<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
    <style>

         .list-group {
            overflow-y:auto;
            height: 30vh;
        }
        .friend-name{
            padding: 15px 10px;
            background-color: #0092e7;
            color: white;
            font-size: 17px;
            margin: 0px;
        }

    </style>
</head>
<style></style>
<body>

    <div class="container">
        <div style="padding: 200px 0px" class="row" id="app">
            <div class="offset-4 col-4 offset-sm-1 col-sm-10">
                <p class="friend-name">RoomChat <span class="badge rounded-pill bg-danger">People in room: @{{ numberOfUsers }}</span></p>
                <ul class="list-group" v-chat-scroll>
                    <Message
                        v-for="value,index in chat.message"
                        :key=value.index
                        :color=chat.color[index]
                        :float=chat.float[index]
                        :user=chat.user[index]
                        :time=chat.time[index]
                        > @{{ value }} </Message>
                  </ul>
                <div style="color: gray" class="badge badge-pill badge-primary">@{{ typing }}</div>

                  <input type="text" class="form-control my-2" placeholder="Message?"
                  v-model="message" @keyup.enter='send'>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
