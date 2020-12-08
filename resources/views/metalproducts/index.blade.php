<!DOCTYPE html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Brushwood
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20131025

-->


<!-- Google Fonts from API -->
<script src="https://apis.google.com/js/api.js"></script>
<script>
    // let AllFonts = [];

    /**
     * Sample JavaScript code for webfonts.webfonts.list
     * See instructions for running APIs Explorer code samples locally:
     * https://developers.google.com/explorer-help/guides/code_samples#javascript
     */

    function loadClient() {
        gapi.client.setApiKey("AIzaSyAZY_Gc1qDQ8jPTMR9-7OZlSqVLhsb2SFk");
        return gapi.client.load("https://www.googleapis.com/discovery/v1/apis/webfonts/v1/rest")
            .then(function () {
                    console.log("GAPI client loaded for API");
                },
                function (err) {
                    console.error("Error loading GAPI client for API", err);
                });
    }

    // Make sure the client is loaded before calling this method.
    function execute() {
        return gapi.client.webfonts.webfonts.list({})
            .then(function (response) {
                    // Handle the results here (response.result has the parsed body).
                    console.log("Response", response);
                    return response.result;
                },
                function (err) {
                    console.error("Execute error", err);
                });
    }

    gapi.load("client");

    function generateUrl() {
        var apiUrl = [];
        apiUrl.push('https://fonts.googleapis.com/css?family=');
        apiUrl.push(anonymousPro.family.replace(/ /g, '+'));
        if (contains('italic', anonymousPro.variants)) {
            apiUrl.push(':');
            apiUrl.push('italic');
        }
        if (contains('greek', anonymousPro.subsets)) {
            apiUrl.push('&subset=');
            apiUrl.push('greek');
        }

        // url: 'https://fonts.googleapis.com/css?family=Anonymous+Pro:italic&subset=greek'
        return apiUrl.join('');
    }

</script>

<!-- Google Fonts -->
<!-- Font used are Roboto, Padauk, Inconsolanta, Open Sans -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Padauk:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">


@livewireStyles
<body>
@extends ('layout')

@section('content')
<div class="text-blue-800 font-semibold text-red-500 bg-blue-300">Alpha Version.
    <div class="text-sm font-bold ">Страница разрабатывается.</div>
</div>
<div id="page-wrapper" class="text-gray-600 text-2xl">
    Запросить адресную табличку дома
</div>
<div id="page-wrapper" class="text-lg pb-4 p-2 text-center">
    Здесь можно спроектировать и закать табличку номера дома.
</div>
<div id="wrapper">
    <livewire:address-label/>
    <!--    For Google Fonts API   -->
    <!--        <div class="text-center button-small">-->
    <!--            <button type="button" onclick="loadClient()">Load</button>-->
    <!--            <button type="button" onclick="execute()">Execute</button>-->
    <!--        </div>-->

    @if (session('message'))
    <p class="text-green-600">
        {{ session('message') }}
    </p>
    @endif

</div>
@endsection

@livewireScripts
</body>

