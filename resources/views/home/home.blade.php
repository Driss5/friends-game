<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Home</title>
</head>
<body>
    <div class="navbarr">
        <div class="navb-logo">
            <p>Let's Try</p>
        </div>
        <div class="navb-links">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#howPlay">How To Play</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
    
    <div class="full-bg">
        <div class="container test">
            <div class="header">
                <div class="header-p">
                    <p>Whos Fake, And Whos Real</p>
                    <p>Friend <span><img src="/images/header/emojie-1.png" alt=""></span></p>
                </div>
            </div>
            <div>
                <div class="header-img">
                    <img src="/images/header/friend-1.png" alt="" srcset="">
                </div>
                <div class="header-content">
                    <div class="header-cont-text">
                        <p>Create Your Best Friend Quiz & See Who Knows You Best</p>
                    </div>
                    <div class="header-cont-btns">
                        <button><a href="{{Route('createQ')}}">Create Your Quiz</a></button> 
                        <button><a href="{{Route('joinQ')}}">Join a Friens's Quiz</a></button>
                    </div>
                    <div class="header-cont-text-two">
                        <p>Test Your Friend Now</p>
                    </div>
                </div>
            </div>
            <div class="header-parent">
                <div class="header-footer">
                    <p>How To Play</p>
                    <div class="flesh">
                        <div class="flesh-down"></div>
                        <div class="flesh-up"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="howPlay" id="howPlay">
        <div class="howPlay-header">
            <p>How To Make A Quiz</p>
        </div>
        <div class="howPlay-content">
            <div class="howP-con-create">
                <div class="howP-c-header">
                    <p>Create Quiz</p>
                </div>
                <div class="howP-c-con">
                    <p>You’re the quiz master! Start by creating your own quiz with a few simple steps. Give your quiz a unique code, 
                        write fun and challenging questions, and provide four answer options for each one. You also get to choose which answer is correct.
                        Once you're done, your quiz will be ready to share. Just send the code to your friends and let the competition begin!
                    </p>
                </div>
            </div>
            <div class="howP-con-join">
                <div class="howP-c-header">
                    <p>Join Quiz</p>
                </div>
                <div class="howP-c-con">
                    <p>Got a quiz code from a friend? All you need to do is enter the code and your name. Once you join, the quiz will start and you’ll be able 
                        to answer each question one by one.
                        Choose carefully—each question has only one correct answer. Your score will be calculated based on your correct choices. It’s a great way to challenge 
                        yourself or have fun with your friends!
                    </p>
                </div>
            </div>
            <div class="howP-con-join">
                <div class="howP-c-header">
                    <p>Enjooy</p>
                </div>
                <div class="howP-c-con">
                    <p>Whether you're competing with friends or just testing your own knowledge, our quizzes are made to be fun, fast, and friendly. 
                        After you finish the quiz, you'll see your score and can compare it with others. If you created the quiz, you can also check how your friends performed.
                        Ready to have fun, learn something new, and maybe even win? Let’s go!
                    </p>
                </div>
            </div>
        </div>
        <div class="how-video">
            <p>You Can See Video</p>
            <div class="video">
                <video src="/images/videos/video-3.mp4" controls></video>
            </div>
        </div>
    </div>

    <div class="contuct mt-4" id="contact">
        <div class="part-1">
            <div class="part-1-header">
                <p>Contact Us</p>
            </div>
            <div class="part-1-def">
                <p>Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
            </div>
            <div class="part-1-content">
                <form action="{{Route('contact')}}" method="POST">
                    @csrf
                    <div class="inputs">
                        <input type="text" name="name" placeholder="Your Name" class="form-control ">
                        <input type="text" name="email" placeholder="Your Email" class="form-control ">
                        <textarea name="message" cols="30" rows="4" class="form-control" placeholder="Your Message"></textarea>
                    </div>
                    <div class="btn">
                        <button type="submit" type="submit">Submit</button>
                    </div>
                </form>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $err)
                                <li>{{ $err }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <div class="part-2">
            <img src="/images/contuct/contuct.jpg" alt="">
        </div>
    </div>

    <div class="footer">
        <p>No Copyright Bro</p>
    </div>

    
</body>
</html>