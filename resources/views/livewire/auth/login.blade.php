<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="h-screen overflow-hidden">
    <div class="h-full relative flex justify-center items-centerbg-wc-gray-light py-10">
        <div class="flex relative flex-col justify-center items-center
        bg-wc-gray rounded-[40px] w-md z-1000 shadow-strong">
            <img src="images/logo.png" alt="login image" class="w-16 absolute top-5 left-5">

            <div class="flex flex-col justify-center items-center">

                <img src="images/login.png" alt="login image" class="w-24 md:w-32 lg:w-40 xl:w-52">
                <div class="flex flex-col justify-center items-center mt-4">
                    <h1 class="font-sans text-white font-semibold text-[20px] mb-3">Login</h1>

                    <form>
                        <div class="mb-4">
                            <input
                                type="email"
                                class="w-full md:w-xs px-3 py-2 rounded-2xl text-wc-gray-light border border-wc-gray-light focus:outline-none focus:ring-2 focus:ring-wc-gray-light"
                                placeholder="Email">
                        </div>

                        <div class="mb-6">
                            <input
                                type="password"
                                class="w-full md:w-xs px-3 py-2 rounded-2xl text-wc-gray-light border border-wc-gray-light focus:outline-none focus:ring-2 focus:ring-wc-gray-light"
                                placeholder="Senha">
                        </div>
                        <button
                            class="w-full md:w-xs text-wc-gray-light py-2 rounded-2xl font-medium border border-wc-gray-light hover:scale-105 transition-transform duration-200 cursor-pointer">
                            Entrar
                        </button>
                    </form>
                </div>
            </div>


        </div>

        <img src="images/porc_1.png" alt="Pig" class="absolute
            hidden md:block 3xl:hidden
            top-1/2 -translate-y-1/2 
            md:right-[0%] mdl:right-[7%] lg:right-[7%] lgx:right-[10%] xl:right-[20%]
            md:w-64 lg:w-96 z-0
            animate-slide-in-right">

    </div>
    @livewireScripts
</body>

</html>