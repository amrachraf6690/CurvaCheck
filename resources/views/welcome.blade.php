<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CurvaCheck</title>


        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            body
            {
                font-family: "Cairo", sans-serif !important;
            }
            </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" />
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <img class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" src="https://new.curvaegypt.com/img/logo.3c5737f9.png" alt="">
                        </div>
                    </header>

                    <div class="row mt-8 flex justify-center text-center">
                        <div class="">
                            <div class="max-w-md w-full bg-white bg-opacity-40 shadow-md rounded-lg p-12">
                                <form action="" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="email" class="block text-gray-100 mb-6">حط ايميلك يا جميل و شوف كده الدنيا</label>
                                        <input type="text" id="email" name="email" class="form-input mt-1 p-4 block w-full rounded-md border @error('email') border-red-500 @else border-gray-300 @enderror text-black shadow-sm">
                                        @error('email')
                                        <div class="text-red-500 mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="bg-black text-white py-2 px-4 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-indigo-600">نشوف كده</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        تم صنعه بكل الحب من قبل <a href="https://wa.me/+201028751528" target="_blank" class="underline hover:text-black/70 dark:hover:text-white/70">عمرو أشرف</a>
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
