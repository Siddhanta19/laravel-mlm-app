<!DOCTYPE html>
<html data-theme="forest" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        {{-- header variable uses the x-slot name='header' element if it is defined on the page where this layout component is used. --}}
        @if (isset($header))
            <header class="border-b border-primary sm:hidden">
                <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <footer
            class="footer mt-14 items-center justify-center rounded px-5 py-10 text-base-content md:justify-between">

            {{-- <div>
                <div class="relative">
                    <input class="input-bordered input w-full pr-16 focus:border-primary focus:outline-none"
                        type="text" placeholder="" />
                    <button class="btn-primary btn absolute top-0 right-0 rounded-l-none">Email Us</button>
                </div>
            </div> --}}
            <div class="grid-flow-col items-center">

                <x-jet-application-mark class="block h-9 w-auto"></x-jet-application-mark>
                <p class="text-base">Copyright © 2023 - All rights reserved by Lavearn</p>
            </div>

            <div class="flex flex-row items-center justify-center gap-4 md:hidden">
                <span class="text-xl font-semibold"> Contact Us -</span>
                <a class="link-primary link text-xl"> lavearn@gmail.com</a>
            </div>

            <div class="grid-flow-col gap-0 md:place-self-center md:justify-self-end">
                {{-- Upi Logo --}}
                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="120" height="50" fill-rule="evenodd">
                    <path d="M95.678 42.9L110 29.835l-6.784-13.516z" fill="#097939" />
                    <path d="M90.854 42.9l14.322-13.065-6.784-13.516z" fill="#ed752e" />
                    <path
                        d="M22.41 16.47l-6.03 21.475 21.407.15 5.88-21.625h5.427l-7.05 25.14c-.27.96-1.298 1.74-2.295 1.74H12.31c-1.664 0-2.65-1.3-2.2-2.9l6.724-23.98zm66.182-.15h5.427l-7.538 27.03h-5.58zM49.698 27.582l27.136-.15 1.81-5.707H51.054l1.658-5.256 29.4-.27c1.83-.017 2.92 1.4 2.438 3.167L81.78 29.49c-.483 1.766-2.36 3.197-4.19 3.197H53.316L50.454 43.8h-5.28z"
                        fill="#747474" />
                </svg> --}}

                {{-- phonepe Logo --}}
                <svg id="Layer_1" data-name="Layer 1" width="auto" height="30" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 122.88 122.88">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #5f259f;
                            }

                            .cls-2 {
                                fill: #fff;
                            }
                        </style>
                    </defs>
                    <title>Phonepe</title>
                    <path class="cls-1" d="M75.56,1.66a61.42,61.42,0,1,0,45.66,73.9A61.42,61.42,0,0,0,75.56,1.66Z" />
                    <path class="cls-2"
                        d="M89.32,45.41A4.54,4.54,0,0,0,84.86,41H76.62L57.75,19.33a7,7,0,0,0-7.21-2.06L44,19.33a1.52,1.52,0,0,0-.69,2.4L63.92,41.29H32.7A1.63,1.63,0,0,0,31,43v3.43a4.54,4.54,0,0,0,4.46,4.46h4.81V67.37c0,12.35,6.52,19.56,17.5,19.56a23.66,23.66,0,0,0,9.61-1.72v11a5.42,5.42,0,0,0,5.49,5.49h4.8a2.22,2.22,0,0,0,2.06-2.06V50.56H87.6a1.63,1.63,0,0,0,1.72-1.72V45.41Zm-22,29.51a16.38,16.38,0,0,1-6.87,1.37c-5.49,0-8.23-2.74-8.23-8.92V50.9h15.1v24Z" />
                </svg>

                {{-- paytm logo --}}
                <svg xmlns="http://www.w3.org/2000/svg" height="30" width="auto"
                    viewBox="-2.5242255 -1.318595 21.876621 7.91157">
                    <title>Paytm</title>
                    <g fill="none">
                        <path
                            d="M16.77137 1.55572c-.15275-.43674-.56903-.75036-1.05798-.75036h-.01023c-.31785 0-.6043.13229-.80821.34466-.20426-.21237-.49072-.34466-.80822-.34466h-.01023c-.2794 0-.5348.1023-.73095.27164V.99092c-.0067-.08573-.07726-.1531-.1644-.1531h-.75c-.09172 0-.1658.07408-.1658.16615v4.07282c0 .09207.07408.16616.1658.16616h.75c.08361 0 .1524-.06244.16334-.14323l-.00035-2.92382a.26293.26293 0 01.0014-.02928c.012-.13053.1076-.23777.2586-.25118h.13827c.06315.00564.11642.02787.1584.06138.06526.05186.1016.13159.1016.21908l.00282 2.90936c0 .09207.07443.1665.1658.1665h.75c.08856 0 .16052-.07055.16476-.15839l-.00035-2.92135c-.00036-.09596.0441-.18274.12206-.23425.03845-.0247.08467-.04127.13793-.04621h.13829c.16228.01411.26035.13723.26.28046l.00282 2.90548c0 .09207.07444.16615.1658.16615h.75001c.09137 0 .1658-.07408.1658-.16615V1.95259c0-.21308-.02398-.30374-.05679-.39687M11.69398.84843h-.42897V.15134C11.265.06773 11.19727 0 11.11366 0c-.00988 0-.0194.0014-.02857.00317-.47555.13053-.3803.78917-1.24848.84526h-.08432c-.0127 0-.02469.00176-.03633.00423h-.0007l.0007.00035c-.07409.01659-.12982.0822-.12982.16123v.75c0 .09137.07443.1658.16615.1658h.45262l-.0007 3.1803c0 .09066.07337.16404.16403.16404h.74154c.09031 0 .1637-.07338.1637-.16404l.00034-3.1803h.42016c.09137 0 .1658-.07443.1658-.1658v-.75c0-.09137-.07443-.1658-.1658-.1658"
                            fill="#00BAF2" />
                        <path
                            d="M8.99555.84843h-.75c-.09137 0-.16546.07444-.16546.1658v1.55082c-.00176.09595-.07937.17286-.17568.17286h-.31397c-.09737 0-.17604-.07832-.17604-.17569l-.00282-1.54798c0-.09137-.07444-.1658-.1658-.1658h-.75001c-.09172 0-.1658.07443-.1658.1658v1.69968c0 .64558.46037 1.10596 1.1063 1.10596 0 0 .48472 0 .49954.00282.08749.00988.15557.08325.15557.17356 0 .08926-.06667.16228-.1531.17322-.00423.0007-.00811.00176-.0127.00247l-1.09679.00388c-.09172 0-.1658.07443-.1658.1658v.74966c0 .09172.07408.1658.1658.1658h1.22626c.64628 0 1.1063-.46002 1.1063-1.10595v-3.1369c0-.09137-.07408-.1658-.1658-.1658M1.73602 2.22268v.46285c0 .097-.07867.17603-.17568.17603l-.4759.00035v-.92745h.4759c.09701 0 .17568.07831.17568.17568zM1.80199.84825H.16263C.07267.84825 0 .92128 0 1.01088v.73484c0 .00141.00035.00282.00035.00423 0 .00353-.00035.00706-.00035.01023v3.32599c0 .09031.06773.16405.1517.16616h.7641c.09137 0 .1658-.07408.1658-.1658l.00283-1.13983h.71755c.60042 0 1.01882-.41663 1.01882-1.01953V1.8692c0-.6029-.4184-1.02094-1.01882-1.02094zM4.8479 3.98346v.11712c0 .00953-.0014.0187-.00281.02752a.17498.17498 0 01-.00706.02434c-.02329.06562-.0889.11324-.16687.11324h-.3122c-.09737 0-.17674-.07408-.17674-.1651v-.14146c0-.00176-.00036-.00353-.00036-.00529l.00036-.37641v-.11784l.00035-.00105c.00035-.09067.07902-.16404.17639-.16404h.3122c.09772 0 .17675.07373.17675.1651zM4.72868.85256h-1.0407c-.09207 0-.1665.06985-.1665.15557v.29175c0 .00176.00035.00388.00035.00564 0 .00212-.00036.00423-.00036.00635v.3997c0 .09067.07903.16475.1764.16475h.99094c.07832.01235.14041.0695.14923.15875v.09666c-.00882.08502-.0702.1471-.145.15416h-.4907c-.65264 0-1.1176.43357-1.1176 1.04246v.87207c0 .60537.3997 1.0361 1.04774 1.0361h1.35996c.24412 0 .44203-.18485.44203-.41239V1.97827c0-.69003-.3556-1.12571-1.2058-1.12571z"
                            fill="#1F336B" />
                    </g>
                </svg>

                {{-- gpay logo --}}
                <svg id="Layer_1" style="enable-background:new 0 0 123.84 104.9" version="1.1" width="auto"
                    height="30" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" viewBox="0 0 123.84 104.9" xml:space="preserve">
                    <style type="text/css">
                        <![CDATA[
                        .st0 {
                            clip-path: url(#SVGID_3_);
                        }

                        .st1 {
                            clip-path: url(#SVGID_4_);
                        }

                        .st2 {
                            clip-path: url(#SVGID_9_);
                        }

                        .st3 {
                            fill: #2DA94F;
                        }

                        .st4 {
                            fill: #FDBD00;
                        }

                        .st5 {
                            clip-path: url(#SVGID_10_);
                        }
                        ]]>
                    </style>
                    <title>Google Pay</title>
                    <g>
                        <g>
                            <defs>
                                <path id="SVGID_1_"
                                    d="M65.7,63.18l30.4-52.66l16.56,9.56c10.69,6.17,14.36,19.85,8.18,30.54l-17.12,29.65 c-3.86,6.68-12.4,8.97-19.09,5.12l-15.37-8.87C64.6,73.81,63,67.84,65.7,63.18L65.7,63.18z" />
                            </defs>
                            <defs>
                                <rect id="SVGID_2_" y="0.02" width="123.84" height="104.88" />
                            </defs>
                            <clipPath id="SVGID_3_">
                                <use style="overflow:visible" xlink:href="#SVGID_1_" />
                            </clipPath>
                            <clipPath class="st0" id="SVGID_4_">
                                <use style="overflow:visible" xlink:href="#SVGID_2_" />
                            </clipPath>
                            <g class="st1">
                                <defs>
                                    <rect id="SVGID_5_" x="64.32" y="10.34" width="59.52" height="77.04" />
                                </defs>
                                <clipPath id="SVGID_6_">
                                    <use style="overflow:visible" xlink:href="#SVGID_5_" />
                                </clipPath>
                                <g style="clip-path:url(#SVGID_6_)">
                                    <image style="overflow:visible" width="132" height="164"
                                        xlink:href="data:image/jpeg;base64,/9j/4AAQSkZJRgABAgEAlgCWAAD/7AARRHVja3kAAQAEAAAAHgAA/+4AIUFkb2JlAGTAAAAAAQMA EAMCAwYAAANVAAAEYAAABk//2wCEABALCwsMCxAMDBAXDw0PFxsUEBAUGx8XFxcXFx8eFxoaGhoX Hh4jJSclIx4vLzMzLy9AQEBAQEBAQEBAQEBAQEABEQ8PERMRFRISFRQRFBEUGhQWFhQaJhoaHBoa JjAjHh4eHiMwKy4nJycuKzU1MDA1NUBAP0BAQEBAQEBAQEBAQP/CABEIAKUAhQMBIgACEQEDEQH/ xACwAAEBAQEBAQEAAAAAAAAAAAAAAgEFBAYHAQEAAgMBAAAAAAAAAAAAAAAAAQYCBAUDEAACAAMG BgMBAAAAAAAAAAAAASADBTACEjM1BhAxMgQ0FSITIxERAAEBBQgCAQIHAAAAAAAAAAIBABAwsQMR oXKSM3MENNLTkTITITFxEiJSFBIAAQECDgEDBQAAAAAAAAAAAQAQAiAwETFxkXKSogMzQ6NEMiFB EoFCEyMU/9oADAMBAAIRAxEAAADrcn2cTT7/AEa51Ye3Q3wUe54iPa8RPteIj2vEPbXgo/RBv1v4 vidviaVi2orD3uouG7moAAAVNI/RB0ax8XxO3xNKxKncPe6ii9nYjQAAKmkfog6NY+L4nb4mlYgw 96qKLqKiKAAAqaR+iDo1j4vidviaViDD32oouoorc2IAAVNI/RB0ax8XxO3xNKxBh7twXUUXs1Ea ABU0fog6NX+L4nb4mlYgw9wNuKL2aiKZoAqaP0QdGr/F8Tt8TSsQYe4Cp0uoovZqIAVNH6IOjV/i +J2+JpWIMPcBuCrii9mojQKmj9EHRq/xfE7fE0rEGHuABtRRdRUK3NQqaP0QdGr/ACnJNbrhj6ga BoVoVoKEfbjb4n//2gAIAQIAAQUAmXr2PFeMV4xXjFeMV4xXjFe4TOuwmddhM67CZ12EzrsJnXYT OuwmddhM67C//MXxPifE+J8T4nx4f//aAAgBAwABBQDtZUtyPplH0yj6ZR9Mo+mUfTKHJlfw7Tx4 nyO08eJ8jtPHifI7Tx4nyO08eJ8jtPHifI7Tx4nyO08eJ8jtPHifIkY/q/Q/Q/Q/Q/Q/Qf2fw//a AAgBAQABBQDctT7/ALWoquVYVcqwq3VRVqqHuaoe5qh7mqHuaoe5qh7mqHuaoe5qh7mqHuaoS6xU 3fN26qIQhWUvMN26qIQhWUvMN26qIQhWUvMN26rwQhCsZeYbt1XghCFYy8w3bqvBCEIVhLzDduq8 UIQrCXmG7dV4oQhWEvMN26rAhCFHLzDduqwIQhRy8w3bqsCEIUcvMN26rChCFFLzDduqwoQhRS8w 3bqsKEIQoZeYbt1WJCEKGXmG7dViQhCFBLzDduqxoQhQS8w3bqsaEIUEvMN26rGhCELjLzDcqprq OGhmGhmGhmGhmGhmGhmGhmGhiu0QV2iCu0Uw0Yw0Yw0Yl3aPjP/aAAgBAgIGPwB71M6nNanNa8jW vI1ryNa8jWpzWx6mJepiXqYl6mJepiXqYl6mJepiXqYk6c/vKtvEtvEtvEtvEtvEtvEtvEz/2gAI AQMCBj8AyyXHCS6J3QtNy6FpuXQtNy6FpuXQtNy6FpuXQj+ty6GZdgQyzLsCGWZdgQyzLsCGWZdg QyzLsCGWZdgQyzLsCGWZdgQyxyT+mT4/b+P4/SX1Xb412+NdvjXb412+NdvjXb42f//aAAgBAQEG PwBKXHrlTD7Yr+0fytVSbtH8o3aP5Ru0fyjdk7m7J3N2Tubsnc3ZO5uydzdk7m7J3N2Tubsnc3ZO 5hReSdiqlrk2hmUcMSTcm0MyjhiSbk2hmUcMSTcm0MyjhiSbk2hmUcMSTcm0MyjhiSbk2hmUcMST cm0MyjhiSbk2hmUcMSTcm0MyjhiSbk2hmUcMSTcm0MyjhiSbk2hmUcMSTcm0MyjhiSbk2hmUcMST cm0MyjhiSbk2hmUcMSTcm0MyjhiSbk2hmUcP1Sbk/wBR1xqfbH8KQgQ2Wl/YkbU5WSn7G1OVkp+x tTlZKfsbU5WSn7G1OVkp+xtTlZKfsbU5WSn7G1OVkp+xtTlZKfsbU5WSn5tqcnJT82+vk5Kfm318 nJT82+vk5Kfmw2HybbUs/hT83f/Z"
                                        transform="matrix(0.48 0 0 -0.48 63.3027 88.1797)" />
                                </g>
                            </g>
                        </g>
                        <path class="st4"
                            d="M62.46,26.62l-37.82,65.5l16.56,9.56c10.69,6.17,24.37,2.51,30.54-8.18l24.53-42.49 c3.86-6.68,1.57-15.23-5.12-19.09l-15.37-8.87C71.12,20.35,65.16,21.95,62.46,26.62L62.46,26.62z" />
                        <path class="st3"
                            d="M96.1,10.51L84.38,3.75C71.02-3.97,53.93,0.61,46.21,13.98L24.47,51.62c-3.86,6.68-1.57,15.23,5.12,19.09 l11.72,6.76c6.68,3.86,15.23,1.57,19.09-5.12l25.95-44.95l0,0c5.39-9.34,17.33-12.53,26.66-7.14L96.1,10.51L96.1,10.51z M96.1,10.51L96.1,10.51L96.1,10.51L96.1,10.51z" />
                        <g>
                            <defs>
                                <path id="SVGID_7_"
                                    d="M49.58,25.01l-12.93-7.45c-5.76-3.32-13.13-1.35-16.46,4.4L4.67,48.77c-7.64,13.2-3.11,30.08,10.12,37.7 l9.85,5.67l11.94,6.88l5.18,2.98c-9.2-6.16-12.12-18.5-6.5-28.21l4.02-6.94l14.71-25.42C57.32,35.69,55.35,28.33,49.58,25.01 L49.58,25.01z" />
                            </defs>
                            <defs>
                                <rect id="SVGID_8_" y="0.02" width="123.84" height="104.88" />
                            </defs>
                            <clipPath id="SVGID_9_">
                                <use style="overflow:visible" xlink:href="#SVGID_7_" />
                            </clipPath>
                            <clipPath class="st2" id="SVGID_10_">
                                <use style="overflow:visible" xlink:href="#SVGID_8_" />
                            </clipPath>
                            <g class="st5">
                                <defs>
                                    <rect id="SVGID_11_" x="0.96" y="15.86" width="54.72"
                                        height="86.16" />
                                </defs>
                                <clipPath id="SVGID_12_">
                                    <use style="overflow:visible" xlink:href="#SVGID_11_" />
                                </clipPath>
                                <g style="clip-path:url(#SVGID_12_)">
                                    <image style="overflow:visible" width="120" height="182"
                                        xlink:href="data:image/jpeg;base64,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 hZtD6Qoy/9k="
                                        transform="matrix(0.48 0 0 -0.48 0.3071 102.542)" />
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>

                {{-- Amazon Pay --}}
                <svg style="isolation:isolate" xmlns="http://www.w3.org/2000/svg" height="30" width="auto"
                    viewBox="-26.477235 -8.46575 229.46937 50.7945">
                    <defs>
                        <clipPath id="a">
                            <path d="M0 0h176.515v33.863H0z" />
                        </clipPath>
                    </defs>
                    <title>Amazon Pay</title>
                    <g clip-path="url(#a)" fill-rule="evenodd">
                        <path fill="#F79C34"
                            d="M69.652 26.489c-6.523 4.814-15.98 7.374-24.124 7.374-11.413 0-21.691-4.219-29.469-11.242-.61-.552-.066-1.305.668-.878 8.391 4.883 18.769 7.824 29.486 7.824 7.23 0 15.178-1.501 22.491-4.603 1.103-.467 2.028.727.948 1.525z" />
                        <path fill="#F79C34"
                            d="M72.367 23.389c-.835-1.068-5.515-.506-7.618-.254-.637.077-.736-.48-.162-.883 3.734-2.623 9.853-1.866 10.564-.987.716.885-.189 7.02-3.687 9.947-.539.45-1.051.21-.812-.384.788-1.967 2.55-6.369 1.715-7.439z" />
                        <path fill="#333E47"
                            d="M64.897 3.724V1.176c.002-.388.294-.646.646-.645L76.965.53c.365 0 .659.265.659.643v2.185c-.004.367-.313.845-.86 1.604l-5.917 8.448c2.196-.051 4.519.278 6.515 1.399.45.253.571.628.606.995v2.719c0 .375-.41.808-.842.583-3.515-1.842-8.18-2.043-12.068.022-.397.212-.812-.216-.812-.591v-2.585c0-.413.008-1.121.425-1.751l6.854-9.834-5.968-.001c-.365 0-.658-.26-.66-.642zM23.233 19.641h-3.475c-.331-.021-.595-.269-.622-.587l.003-17.835c0-.356.3-.641.671-.641l3.236-.001c.338.017.61.273.631.599v2.328h.066c.843-2.252 2.432-3.303 4.573-3.303 2.173 0 3.536 1.051 4.509 3.303.843-2.252 2.757-3.303 4.8-3.303 1.46 0 3.049.601 4.022 1.952 1.103 1.502.877 3.678.877 5.592L42.52 19c0 .355-.299.641-.67.641h-3.47c-.35-.022-.624-.298-.624-.64l-.001-9.455c0-.75.065-2.626-.098-3.339-.259-1.202-1.037-1.54-2.042-1.54-.844 0-1.72.563-2.077 1.463-.357.902-.324 2.402-.324 3.416V19c0 .355-.3.641-.67.641h-3.471c-.349-.022-.624-.298-.624-.64l-.004-9.455c0-1.989.325-4.915-2.14-4.915-2.498 0-2.4 2.851-2.4 4.915L23.903 19c0 .355-.3.641-.67.641zM87.488 3.842c-2.562 0-2.724 3.489-2.724 5.666 0 2.177-.032 6.831 2.693 6.831 2.692 0 2.822-3.753 2.822-6.042 0-1.501-.066-3.303-.52-4.729-.389-1.239-1.168-1.726-2.271-1.726zM87.457.201c5.157 0 7.946 4.43 7.946 10.059 0 5.44-3.081 9.757-7.946 9.757-5.061 0-7.818-4.429-7.818-9.945 0-5.555 2.789-9.871 7.818-9.871zm14.635 19.44h-3.463c-.347-.022-.623-.298-.623-.64L98 1.16c.03-.327.318-.582.668-.582l3.223-.001c.304.016.554.222.618.499v2.728h.065c.974-2.44 2.335-3.603 4.735-3.603 1.557 0 3.082.563 4.055 2.102.908 1.426.908 3.827.908 5.554V19.08c-.038.316-.322.561-.666.561h-3.483c-.322-.02-.581-.257-.619-.561V9.397c0-1.952.228-4.805-2.173-4.805-.843 0-1.622.563-2.011 1.426-.487 1.089-.552 2.177-.552 3.379V19c-.006.355-.306.641-.676.641zm-42.798-.044c-.229.206-.56.22-.82.081-1.154-.959-1.361-1.402-1.992-2.316-1.907 1.943-3.258 2.526-5.729 2.526-2.925 0-5.201-1.806-5.201-5.416 0-2.821 1.529-4.739 3.706-5.679 1.885-.828 4.518-.978 6.534-1.204v-.451c0-.829.065-1.805-.423-2.52-.423-.64-1.235-.903-1.95-.903-1.326 0-2.503.679-2.793 2.086-.061.313-.289.624-.603.64l-3.369-.365c-.284-.065-.6-.293-.519-.727C46.9 1.32 50.498.064 53.768.03h.258c1.674.021 3.812.48 5.114 1.729 1.691 1.58 1.527 3.686 1.527 5.981v5.413c0 1.629.677 2.343 1.312 3.22.223.317.272.692-.011.924-.71.595-1.971 1.69-2.664 2.308zm-3.502-8.472c0 1.354.032 2.482-.65 3.686-.553.977-1.431 1.579-2.406 1.579-1.332 0-2.112-1.015-2.112-2.52 0-2.96 2.654-3.498 5.168-3.498zm-42.049 8.472c-.23.206-.562.22-.821.081-1.155-.959-1.362-1.402-1.992-2.316-1.908 1.943-3.258 2.526-5.729 2.526C2.276 19.888 0 18.082 0 14.472c0-2.821 1.527-4.739 3.706-5.679 1.885-.828 4.518-.978 6.533-1.204v-.451c0-.829.066-1.805-.422-2.52-.423-.64-1.236-.903-1.95-.903-1.326 0-2.505.679-2.793 2.086-.06.313-.289.624-.604.64l-3.368-.365c-.285-.065-.601-.293-.519-.727C1.346 1.32 4.945.064 8.216.03h.258c1.674.021 3.812.48 5.114 1.729 1.69 1.58 1.527 3.686 1.527 5.981v5.413c0 1.629.677 2.343 1.312 3.22.221.317.272.692-.011.924-.71.595-1.972 1.69-2.665 2.308zm-3.504-8.472c0 1.354.033 2.482-.65 3.686-.552.977-1.43 1.579-2.406 1.579-1.332 0-2.112-1.015-2.112-2.52 0-2.96 2.655-3.498 5.168-3.498zm149.534 14.914v-1.31c0-.373.183-.63.572-.607.726.103 1.753.206 2.482.056.952-.198 1.635-.873 2.039-1.798.569-1.302.946-2.352 1.184-3.041l-7.229-17.908c-.122-.304-.158-.868.449-.868h2.527c.482 0 .678.306.786.606l5.241 14.546 5.003-14.546c.102-.298.307-.606.785-.606h2.383c.603 0 .569.563.449.868l-7.171 18.467c-.928 2.458-2.164 6.373-4.948 7.053-1.396.365-3.157.233-4.191-.2-.261-.131-.361-.481-.361-.712zm-3.371-7.489c0 .333-.273.606-.608.606h-1.782c-.385 0-.648-.278-.697-.606l-.179-1.213c-.819.693-1.824 1.302-2.914 1.726-2.096.814-4.512.949-6.56-.309-1.481-.909-2.267-2.686-2.267-4.519 0-1.418.437-2.824 1.406-3.845 1.293-1.395 3.167-2.08 5.43-2.08 1.367 0 3.323.161 4.746.626V6.495c0-2.482-1.045-3.556-3.8-3.556-2.106 0-3.717.318-5.959 1.015-.359.012-.569-.261-.569-.594V1.968c0-.334.285-.657.594-.755C144.844.515 147.112.08 149.523 0c3.143 0 6.879.709 6.879 5.543zm-3.425-3.564v-3.683c-1.196-.327-3.175-.463-3.941-.463-1.21 0-2.535.286-3.227 1.031-.517.546-.751 1.33-.751 2.088 0 .98.339 1.963 1.131 2.449.92.625 2.347.549 3.688.168 1.289-.366 2.499-1.013 3.1-1.59zm-22.85-11.992c3.954 0 5.031 3.109 5.031 6.669.022 2.4-.419 4.54-1.662 5.765-.93.917-1.969 1.167-3.533 1.167-1.392 0-3.223-.726-4.591-1.737V4.679c1.424-1.094 3.241-1.685 4.755-1.685zm-5.361 23.684h-2.387c-.334 0-.607-.273-.607-.606V1.201c0-.333.273-.606.607-.606h1.827c.384 0 .647.278.696.606l.192 1.303c1.711-1.519 3.914-2.493 6.013-2.493 5.879 0 7.812 4.844 7.812 9.881 0 5.389-2.957 9.719-7.958 9.719-2.106 0-4.075-.777-5.589-2.127v8.588c0 .333-.273.606-.606.606z" />
                    </g>
                </svg>

                {{-- Mobikwik --}}
                <svg height="25" viewBox="-.006 12.447 29.913 6.635" width="auto"
                    xmlns="http://www.w3.org/2000/svg">
                    <title>Mobikwik</title>
                    <path
                        d="m10.875 16.95v-.012c0-.553-.405-1.01-.98-1.01-.587 0-.962.452-.962.998v.012c0 .547.405 1.004.974 1.004.593 0 .968-.452.968-.992zm-2.674 0v-.012c0-.897.726-1.64 1.706-1.64s1.7.731 1.7 1.628v.012c0 .891-.726 1.634-1.712 1.634-.974 0-1.694-.73-1.694-1.622zm6.37-.01v-.013c0-.606-.417-1.004-.913-1.004s-.932.404-.932 1.004v.012c0 .6.436 1.004.932 1.004.502 0 .913-.386.913-1.004zm-2.56-2.45c0-.202.158-.357.364-.357s.369.154.369.357v1.397c.236-.327.569-.588 1.089-.588.75 0 1.482.582 1.482 1.628v.012c0 1.04-.726 1.628-1.482 1.628-.532 0-.865-.26-1.09-.553v.161a.362.362 0 0 1 -.368.357.36.36 0 0 1 -.363-.357zm3.764 1.201c0-.202.157-.362.363-.362s.369.16.369.362v2.484a.359.359 0 0 1 -.37.357.357.357 0 0 1 -.362-.357zm-.055-1.17c0-.215.18-.352.417-.352s.417.137.417.351v.036c0 .214-.181.357-.417.357s-.417-.143-.417-.357zm1.488.153c0-.202.163-.363.375-.363.206 0 .369.161.369.363v1.76l2.008-1.986a.394.394 0 0 1 .308-.137c.206 0 .345.161.345.34a.35.35 0 0 1 -.133.272l-1.32 1.248 1.429 1.741a.39.39 0 0 1 .103.262c0 .202-.163.357-.375.357-.145 0-.236-.07-.315-.172l-1.361-1.706-.69.654v.862a.363.363 0 0 1 -.37.362.364.364 0 0 1 -.374-.362v-3.494zm4.356 3.56-.86-2.389a.59.59 0 0 1 -.035-.184c0-.172.139-.333.357-.333.18 0 .302.12.357.285l.617 1.902.623-1.902c.054-.166.187-.285.375-.285h.042c.188 0 .32.12.375.285l.629 1.902.623-1.908c.048-.155.163-.279.357-.279.2 0 .345.155.345.333a.584.584 0 0 1 -.03.16l-.871 2.413c-.08.22-.23.321-.405.321h-.024c-.181 0-.333-.1-.4-.309l-.622-1.866-.63 1.866c-.066.208-.217.31-.392.31h-.024c-.181 0-.333-.102-.405-.322zm4.198-2.543c0-.202.157-.362.363-.362s.369.16.369.362v2.484a.359.359 0 0 1 -.37.357.357.357 0 0 1 -.362-.357zm-.055-1.17c0-.215.18-.352.417-.352s.417.137.417.351v.036c0 .214-.181.357-.417.357s-.417-.143-.417-.357zm1.404-.03c0-.197.157-.358.363-.358s.369.16.369.357v2.318l1.373-1.325c.097-.095.188-.154.315-.154.194 0 .32.154.32.327 0 .12-.06.208-.162.303l-.847.767.968 1.242c.067.09.097.155.097.238 0 .196-.157.327-.345.327-.145 0-.23-.047-.321-.16l-.913-1.195-.484.452v.547a.359.359 0 0 1 -.37.357.357.357 0 0 1 -.362-.357v-3.685zm-18.825.917c-.184 0-.334-.147-.334-.328s.15-.329.334-.329c.185 0 .335.148.335.33s-.15.327-.335.327zm.617-.505c-.064-.586-.667-.35-.667-.35-.428.162-.526.093-.526.093l.08-1.14c-.045-.534-.758-.349-.758-.349.386.175.307.38.307.38s-.42 4.2-.468 4.47-.42.158-.42.158v.46h.484c.355 0 .387-.476.387-.476l.237-2.23c.374-.062.667-.147.667-.147.794-.265.677-.868.677-.868zm-.43.177a.185.185 0 0 1 -.187.183c-.102 0-.186-.083-.186-.183a.187.187 0 0 1 .373 0zm-3.396-1.245a.055.055 0 0 1 .006-.008.419.419 0 0 1 .336-.258.43.43 0 0 0 -.372.226l-1.141 1.998-.194.676zm-4.615 4.728a.414.414 0 0 1 -.178-.563l2.822-5.263a.42.42 0 0 1 .287-.21l.019-.006c.016-.002.035-.005.053-.005l.02-.002.016.002c.013 0 .025.002.038.004a.34.34 0 0 1 .073.017.351.351 0 0 1 .06.024c.003.001.006.001.006.003a.275.275 0 0 1 .066.043c.004.003.008.005.01.008l.024.023c-.007-.01-.013-.022-.021-.03a.412.412 0 0 0 -.059-.059l-.011-.01c-.02-.013-.038-.027-.06-.038l-.006-.006c-.003 0-.006 0-.01-.002-.018-.009-.037-.018-.06-.024l-.023-.008c-.016-.004-.034-.006-.051-.009a.256.256 0 0 0 -.04-.003l-.015-.002-.022.002-.054.005-.02.005a.427.427 0 0 0 -.293.215l-2.88 5.371a.422.422 0 0 0 .182.576.44.44 0 0 0 .445-.026.439.439 0 0 1 -.321-.029zm3.025-.424a.418.418 0 0 1 -.42-.412v-3.127l-.07.13v3.036a.43.43 0 1 0 .727.3.426.426 0 0 1 -.238.073zm1.986-.222a.418.418 0 0 1 -.42-.412v-1.832l-.067.131v1.765a.436.436 0 0 0 .848.142.419.419 0 0 1 -.361.207zm-1.761-1.447c.194-.69.194-.69 0 0zm2.982-3.756s-1.343.223-2.788.46v2.62c-.194.676-.194.676 1.17-1.958a.055.055 0 0 1 .007-.008.42.42 0 0 1 .809.15v3.527c0 .227-.19.412-.42.412s-.42-.186-.42-.412v-1.832l-1.115 2.117a.383.383 0 0 1 -.058.08.42.42 0 0 1 -.813-.143v-3.127l-2.031 3.787a.431.431 0 0 1 -.574.175.414.414 0 0 1 -.178-.564l2.488-4.64c-1.191.194-2.224.362-2.358.38-.333.041-.408.326-.408.326s-.011 4.49 0 4.712c.01.222.248.264.248.264s5.613.042 5.903 0 .344-.369.344-.369l.57-5.674c-.021-.37-.376-.286-.376-.286z"
                        fill="#0043cf" />
                </svg>
            </div>
        </footer>
    </div>


    @stack('modals')

    @livewireScripts
</body>

</html>
