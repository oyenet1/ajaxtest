<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800,900&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css'])
</head>
<body class="relative flex-col items-center justify-center w-screen h-screen p-4 antialiased lg:flex bg-slate-200">
    <div class="w-full max-w-xl p-4 py-8 mx-auto space-y-4 bg-white rounded-md shadow lg:py-12 xl:max-w-2xl">
        <h1 class="text-2xl font-bold text-center capitalize">Technical Assesssment from automatepro</h1>
        <div class="max-w-md p-3 mx-auto text-lg">
            <p class="pb-2 text-xl font-medium">Questions</p>
            <ol class="space-y-3 list-decimal list-inside">
                <li>
                    <span class="font-semibold">Show the Image with out page reload</span>
                    <ul class="ml-4 list-disc list-inside">
                        <li> Form</li>
                        <li>Save Form data in Ajax</li>
                        <li>Grid list in datatable in Ajax</li>
                    </ul>
                </li>
                <li>
                    <span class="font-semibold"> Please write the coding File Upload using AJax</span>
                    <ul class="ml-4 list-disc list-inside">
                        <li>Form</li>
                        <li>Save Upload data in Ajax</li>
                        <li>show the Image with out page reload</li>
                    </ul>
                </li>
            </ol>

        </div>
    </div>
    <p class="px-6 py-1 my-2 bg-white border border-gray-300 rounded shadow-sm">
        Designed and Coded by <a href="https://bowofade.com" class="inline-block italic font-medium text-center text-blue-500"><b>Bowofade</b></a>
    </p>

</body>
</html>
