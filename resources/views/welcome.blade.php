<!DOCTYPE html>
@section('head')
<title>ИП Алибаев</title>
<meta
    content="столярной цех в Учалинском районе, столярной цех в Учалинском районе, столярной цех в селе Ахуново, столярной цех села Ахуново, Ильдар Ильгамович Алибаев"
    name="keywords"/>
<meta
    content="Столярной цех ИП Алибаев по производству изделий из дерева"
    name="description"/>
<meta
    content="ИП Алибаев"
    name="author"/>

@endsection

@section('auto-type')
<script type = "text/javascript">
    // DISCLAIMER: This function does require jQuery. I've used it here because the project I'm building this for already uses jQuery, so I thought why not. It can be modified quite simply to be done in raw JavaScript.  Just thought I'd let you know.
    // This is the funtion you need to copy
    // Copy from line 9 to 34

    function autoType(elementClass, typingSpeed) {
        var thhis = $(elementClass);
        thhis.css({
            "position": "relative",
            "display": "inline-block"
        });
        thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
        thhis = thhis.find(".text-js");
        var text = thhis.text().trim().split('');
        var amntOfChars = text.length;
        var newString = "";
        thhis.text("|");
        setTimeout(function () {
            thhis.css("opacity", 1);
            thhis.prev().removeAttr("style");
            thhis.text("");
            for (var i = 0; i < amntOfChars; i++) {
                (function (i, char) {
                    setTimeout(function () {
                        newString += char;
                        thhis.text(newString);
                    }, i * typingSpeed);
                })(i + 1, text[i]);
            }
        }, 1500);
    }

    $(document).ready(function firstType() {
        // Now to start autoTyping just call the autoType function with the
        // class of outer div
        // The second paramter is the speed between each letter is typed.
        autoType(".type-js", 162);

    });

</script>

{{-- For  mobile screen--}}
<div class="lg:hidden block flex">
    <div class="bg-gray-800 bg-gradient  rounded-full  block flex my-2 ">
         </h1><h1 class="float-left flex text-4xl p-4">Изделия из дерева.</h1>
    </div>
</div>

{{-- For large screen--}}
<div class="hidden lg:block">
    <div class="type-js bg-gradient bg-gray-800 rounded-full block mt-4">
        </h1><h1 class="text-js float-left text-4xl p-4">Изделия из дерева.</h1>
    </div>
</div>
@endsection

@extends ('layout')

@section('content')
    <div id="page-wrapper">
        <div id="page" class="container">
            <div class="title">
                <h2>Рады видеть постетителя <strong>#{{ $visits ?? 'число которого мы пока не подсчитываем' }}</strong> нашей мастерской.</h2>
            </div>
            <div id="page-hint">Столярный цех <strong>ИП Алибаев</strong> - это индивидуальный подход и учёт желаний
                каждого клиента.
            </div>
        </div>
    </div>
    <div id="wrapper"></div>
@endsection
