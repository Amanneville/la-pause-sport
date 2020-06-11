@extends('tchat.appTchat')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">

<!-- Liste des membres du tchat -->
                <div class="user-wrapper">
                    <ul class="users">
                        <li class="user">
                            <span class="pending">1</span>
                            <div class="media">
                                <div class="media-left">
                                    <img src="https://via.placeholder.com/150" alt="" class="media-object">
                                </div>
                                <div class="media-body">
                                    <p class="name">Bob Machin</p>
                                    <p class="email">bob@mail.com</p>
                                </div>
                            </div>
                        </li>
                        <li class="user">
                            <span class="pending">1</span>
                            <div class="media">
                                <div class="media-left">
                                    <img src="https://via.placeholder.com/150" alt="" class="media-object">
                                </div>
                                <div class="media-body">
                                    <p class="name">Bob Machin</p>
                                    <p class="email">bob@mail.com</p>
                                </div>
                            </div>
                        </li>
                        <li class="user">
                            <span class="pending">1</span>
                            <div class="media">
                                <div class="media-left">
                                    <img src="https://via.placeholder.com/150" alt="" class="media-object">
                                </div>
                                <div class="media-body">
                                    <p class="name">Bob Machin</p>
                                    <p class="email">bob@mail.com</p>
                                </div>
                            </div>
                        </li>
                        <li class="user">
                            <span class="pending">1</span>
                            <div class="media">
                                <div class="media-left">
                                    <img src="https://via.placeholder.com/150" alt="" class="media-object">
                                </div>
                                <div class="media-body">
                                    <p class="name">Bob Machin</p>
                                    <p class="email">bob@mail.com</p>
                                </div>
                            </div>
                        </li>
                        <li class="user">
                            <span class="pending">1</span>
                            <div class="media">
                                <div class="media-left">
                                    <img src="https://via.placeholder.com/150" alt="" class="media-object">
                                </div>
                                <div class="media-body">
                                    <p class="name">Bob Machin</p>
                                    <p class="email">bob@mail.com</p>
                                </div>
                            </div>
                        </li>
                        <li class="user">
                            <span class="pending">1</span>
                            <div class="media">
                                <div class="media-left">
                                    <img src="https://via.placeholder.com/150" alt="" class="media-object">
                                </div>
                                <div class="media-body">
                                    <p class="name">Bob Machin</p>
                                    <p class="email">bob@mail.com</p>
                                </div>
                            </div>
                        </li>
                        <li class="user">
                            <span class="pending">1</span>
                            <div class="media">
                                <div class="media-left">
                                    <img src="https://via.placeholder.com/150" alt="" class="media-object">
                                </div>
                                <div class="media-body">
                                    <p class="name">Bob Machin</p>
                                    <p class="email">bob@mail.com</p>
                                </div>
                            </div>
                        </li>
                        <li class="user">
                            <span class="pending">1</span>
                            <div class="media">
                                <div class="media-left">
                                    <img src="https://via.placeholder.com/150" alt="" class="media-object">
                                </div>
                                <div class="media-body">
                                    <p class="name">Bob Machin</p>
                                    <p class="email">bob@mail.com</p>
                                </div>
                            </div>
                        </li>
                        <li class="user">
                            <span class="pending">1</span>
                            <div class="media">
                                <div class="media-left">
                                    <img src="https://via.placeholder.com/150" alt="" class="media-object">
                                </div>
                                <div class="media-body">
                                    <p class="name">Bob Machin</p>
                                    <p class="email">bob@mail.com</p>
                                </div>
                            </div>
                        </li>
                        <li class="user">
                            <span class="pending">1</span>
                            <div class="media">
                                <div class="media-left">
                                    <img src="https://via.placeholder.com/150" alt="" class="media-object">
                                </div>
                                <div class="media-body">
                                    <p class="name">Bob Machin</p>
                                    <p class="email">bob@mail.com</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

<!-- Partie messages échangés -->
            <div class="col-md-8" id="message">
                <div class="message-wrapper">
                    <ul class="messages">
                        <li class="message clearfix">
                            <div class="sent">
                                <p>Lorem ipsum dolor sit amet.</p>
                                <p class="date">11 juin 2020</p>
                            </div>
                        </li>

                        <li class="message clearfix">
                            <div class="received">
                                <p>Lorem ipsum dolor sit amet.</p>
                                <p class="date">11 juin 2020</p>
                            </div>
                        </li>

                        <li class="message clearfix">
                            <div class="sent">
                                <p>Lorem ipsum dolor sit amet.</p>
                                <p class="date">11 juin 2020</p>
                            </div>
                        </li>

                        <li class="message clearfix">
                            <div class="received">
                                <p>Lorem ipsum dolor sit amet.</p>
                                <p class="date">11 juin 2020</p>
                            </div>
                        </li>

                        <li class="message clearfix">
                            <div class="sent">
                                <p>Lorem ipsum dolor sit amet.</p>
                                <p class="date">11 juin 2020</p>
                            </div>
                        </li>

                        <li class="message clearfix">
                            <div class="received">
                                <p>Lorem ipsum dolor sit amet.</p>
                                <p class="date">11 juin 2020</p>
                            </div>
                        </li>

                        <li class="message clearfix">
                            <div class="sent">
                                <p>Lorem ipsum dolor sit amet.</p>
                                <p class="date">11 juin 2020</p>
                            </div>
                        </li>

                        <li class="message clearfix">
                            <div class="received">
                                <p>Lorem ipsum dolor sit amet.</p>
                                <p class="date">11 juin 2020</p>
                            </div>
                        </li>

                    </ul>
                </div>

                <div class="input-text">
                    <input type="text" name="message" class="submit">
                </div>

            </div>
        </div>
    </div>
@endsection
