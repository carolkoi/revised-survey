<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body style="background-color: #e5e9ec;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">
<div class="email-logo" style="margin-top:0;background-color: transparent;padding: 20px 0">
    <div style="width: 80%;display: block;margin:0 auto;">
    </div>
</div>

<div class="email-body" style="
            padding: 0 0 20px;
            background-clip: content-box;
            background-color: #fff;
            width: 90%;
            margin: auto;
            max-width: 900px;">
    <div style="margin-bottom: 5px;background-color: #e5e9ec; border-bottom: 10px solid #e5e9ec ">
        <div class="email-logo" style="margin-top:0;background-color: #ffffff;padding: 10px 0;">
            <div style="width: 80%;display: block;margin:0 auto;">
                <img class="e-logo" style="
           width: 50%;max-width:150px;height:auto;" src="https://www.wizag.biz/wp-content/uploads/2019/05/wizag-logo.png">

                <p style="font-size: 80%;float: right;color:#003366;">{{env('APP_NAME','Workflow Approval')}}</p>
            </div>
        </div>
    </div>

    <div class="email-description" style="padding: 10px;
            line-height: 1.5em;
            font-weight: 300;
             margin:auto;
            width: 80%;
            color: #565656;">
        @yield('content')
    </div>
    <div class="email-image">

    </div>
    <div class="login" style=" margin-top: 20px;
            margin-bottom: 20px;">
        <a href="{{env('APP_URL')}}/{{ isset($url) ? $url : '' }}" class="btn btn-primary" style="
            display: block;
            font-weight: normal;
            text-align: center;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            background-image: none;
            white-space: nowrap;
            padding: 15px 12px;
            font-size: 18px;
            line-height: 1.42857;
            border-radius: 4px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
             color: #fff;
            background-color: #006b5b;
            border-color: #006b5b;
              margin: auto;
              width: 40%;
           text-decoration: none;">
            {{ isset($text) ? $text : env('APP_NAME','Workflow') }}
        </a>
    </div>
    <div class="email-logo" style="margin-top:0; background-color: #ffffff; border-top: 10px solid #e5e9ec; padding: 10px 0">
        <div style="width: 80%; max-width: 900px; display: block; margin:0 auto;">
            <div>
                <div style="display: inline-block; width: 49%; text-align: left;">
                    <p class="e-logo" style=" color: #003366; font-size: 12px; height:auto;">Generated by <strong>{{env('APP_NAME','Workflow')}}</strong></p>
                </div>
                <div style="display: inline-block; width: 49%; text-align: right;">
                    <p style="font-size: 12px; width: 100%; text-align: right; color:#003366;"> A product of <strong><a style="color: #003366; text-decoration: none; font-weight: 800;" href="http://wizag.biz">Wizag.biz</a></strong></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="email-logo" style="margin-top:0;background-color: transparent;padding: 20px 0">
    <div style="width: 80%;display: block;margin:0 auto;">
    </div>
</div>

</body>
</html>