<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/createAndJoin.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="containerr">
        <div class="test">
            <div>
                
                <div class="content">
                    <div class="header">
                        @yield('header-text-1')
                        @yield('header-text-2')
                    </div>
                    <div class="frm-sub">
                            @yield('frm-action')
                            @csrf
                            <div>
                                @yield('frm-inp-1')
                            </div>
                            <div>
                                @yield('frm-inp-2')
                            </div>
                            <div class="btns">
                                @yield('frm-btn')
                            </div>
                        </form>
                        <div class="err-mssg mt-3">
                            @yield('error-mssg')
                        </div>
                        <div class="final-text">
                            <p>Let's Start ! <span><img src="/images/icones/emojie.png" alt=""></span></p>
                        </div>
                    </div>
                </div>
                <div class="back-btn">
                    <img src="/images/icones/left-flesh.png" alt="" srcset="">
                    <a href="{{Route('home')}}">Back</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>