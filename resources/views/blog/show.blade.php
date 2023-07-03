<html>
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    />
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    />
    <title>
        Laravel App
    </title>
    <link
        rel="stylesheet"
        href="{{ asset('css/app.css') }}"
    />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="w-4/5 mx-auto">
        <div class="pt-10">
            <a href="{{ URL::previous() }}"
               class="text-green-500 italic hover:text-green-400  pb-3 transition-all py-20">
                < Back to previous page
            </a>
        </div>
        {{-- add button to go back home whihc is route '/' put it beside the previous button --}}
        <div class="flex flex-col items-center justify-center">
            <a href="{{ route('blog.index') }}"
               class="showLink text-green-500 font-bold hover:text-green-400  pb-3 transition-property-ease-in-out py-20">
                Home
            </a>
        </div>

        <h4 class="text-left sm:text-center text-2xl sm:text-4xl md:text-5xl font-bold text-gray-900 py-10 sm:py-20">
            {{ $post->title }}
        </h4>

        <div class="block lg:flex flex-row">
            <div class="basis-9/12 text-center sm:block sm:text-left">
                <span class="text-left sm:text-center sm:text-left sm:inline block text-gray-900 pb-10 sm:pt-0 pt-0 sm:pt-10 pl-0 sm:pl-4 -mt-8 sm:-mt-0">
                    Made by:
                    <a
                        href="https://github.com/Coder-Jon014"
                        target="_blank"
                        class="showLink font-bold text-green-500 italic hover:text-green-400  pb-3 transition-all py-20">
                        Coder Jon
                    </a>
                    On 17-07-2022
                </span>
            </div>
        </div>

        <div class="pt-10 pb-10 text-gray-900 text-xl">
            <p class="font-bold text-2xl text-black pt-10">
                {{ $post->excerpt }}
            </p>

            <p class="text-base text-black pt-10">
                {{ $post->body }}
            </p>
        </div>
    </div>
    </body>
</html>
