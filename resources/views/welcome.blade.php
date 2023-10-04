@extends('layouts.guest')
@section('content')

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
    <p class="flex items-center justify-center space-x-4">
        <a href="" class="inline-block px-6 py-2 text-white bg-blue-600 rounded-md shadow-sm b">Solution 1</a>
        <a href="" class="inline-block px-6 py-2 text-white bg-blue-600 rounded-md shadow-sm b">Solution 2</a>
    </p>
</div>
@endsection
