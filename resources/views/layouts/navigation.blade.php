<div class="h-full bg-white  overflow-auto flex flex-col justify-between px-3">
    <!-- l'image logo -->
    <div class="flex justify-end">
        <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple" @click="isOpen = !isOpen" aria-label="Menu">
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd">
                </path>
            </svg>
        </button>

    </div>

    <div class="flex items-center justify-start">

        <h1 class="mt-0 ml-4 text-3xl font-bold">
            <svg class="w-20 h-20 logo" width="66" height="47" viewBox="0 0 66 47" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect y="0.87262" width="66" height="45.28" fill="url(#pattern0)" />
                <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_2_2864" transform="scale(0.00980392 0.0142857)" />
                    </pattern>
                    {{-- <image id="image0_2_2864" width="102" height="70" xlink:href="data:image/png;base64,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UmVhZHlxyWU8AAADKGlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMwNjcgNzkuMTU3NzQ3LCAyMDE1LzAzLzMwLTIzOjQwOjQyICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxNSAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpEQkRGQTY5QTgyRjgxMUU4OTIwQ0YwQUQ2RDZERUNBRSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpEQkRGQTY5QjgyRjgxMUU4OTIwQ0YwQUQ2RDZERUNBRSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkRCREZBNjk4ODJGODExRTg5MjBDRjBBRDZENkRFQ0FFIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkRCREZBNjk5ODJGODExRTg5MjBDRjBBRDZENkRFQ0FFIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+V3YPNAAAGGFJREFUeNpi/P//PwOpgAVEMHrOYPhomIks/gaI2/hYGfqi78YzzJVfyPDrP4MyUOwOSDkTmiFu/Ec2M7AwMojwn1zR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" /> --}}
                </defs>
            </svg>
        </h1>
    </div>
    <!-- les elements du sidebar -->
    <nav class="my-6">
        <div>
            {{-- tableau de bord --}}
            <a class="element_sidebar {{ request()->is('dashboard*') ? 'element_sidebar_acitf' : '' }}" href="/dashboard">
                <span class="text-left">
                    <svg width="20" height="20" fill="inherit" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                        </path>
                    </svg>
                </span>
                <span class="mx-4 text-sm font-bold">
                    Tableau de bord
                </span>
            </a>

            {{-- Gestion des catégories --}}
            <a class="element_sidebar {{ request()->is('categories*') ? 'element_sidebar_acitf' : '' }}" href="/categories">
                <span class="text-left">
                    <svg width="20" height="20" fill="inherit" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                        </path>
                    </svg>
                </span>
                <span class="mx-4 text-sm font-bold">
                    Gestion des catégories
                </span>
            </a>


            {{-- Gestion des produits --}}
            <a class="element_sidebar {{ request()->is('produits*') ? 'element_sidebar_acitf' : '' }}" href="/produits">
                <span class="text-left">
                    <svg width="20" height="20" fill="inherit" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                        </path>
                    </svg>
                </span>
                <span class="mx-4 text-sm font-bold">
                    Gestion des produits
                </span>
            </a>

            {{-- Gestion des utilisateurs --}}
            <a class="element_sidebar {{ request()->is('admin/users*') ? 'element_sidebar_acitf' : '' }}" href="/admin/users">
                <span class="text-left">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                    </svg>
                </span>
                <span class="mx-4 text-sm font-bold">
                    Gestion des utilisateurs
                </span>
            </a>


           
            <div x-data="{ open: {{ request()->is('parametrage*') ? 'true' : 'false' }} }">

                <p type="button" class="element_sidebar relative
                {{ request()->is('parametrage*') ? 'element_sidebar_acitf' : ''}}" @click="open = !open">
                    <span class="text-left">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" class="h-6 w-6" viewBox="0 0 640 512">
                            <path d="M308.5 135.3c7.1-6.3 9.9-16.2 6.2-25c-2.3-5.3-4.8-10.5-7.6-15.5L304 89.4c-3-5-6.3-9.9-9.8-14.6c-5.7-7.6-15.7-10.1-24.7-7.1l-28.2 9.3c-10.7-8.8-23-16-36.2-20.9L199 27.1c-1.9-9.3-9.1-16.7-18.5-17.8C173.9 8.4 167.2 8 160.4 8h-.7c-6.8 0-13.5 .4-20.1 1.2c-9.4 1.1-16.6 8.6-18.5 17.8L115 56.1c-13.3 5-25.5 12.1-36.2 20.9L50.5 67.8c-9-3-19-.5-24.7 7.1c-3.5 4.7-6.8 9.6-9.9 14.6l-3 5.3c-2.8 5-5.3 10.2-7.6 15.6c-3.7 8.7-.9 18.6 6.2 25l22.2 19.8C32.6 161.9 32 168.9 32 176s.6 14.1 1.7 20.9L11.5 216.7c-7.1 6.3-9.9 16.2-6.2 25c2.3 5.3 4.8 10.5 7.6 15.6l3 5.2c3 5.1 6.3 9.9 9.9 14.6c5.7 7.6 15.7 10.1 24.7 7.1l28.2-9.3c10.7 8.8 23 16 36.2 20.9l6.1 29.1c1.9 9.3 9.1 16.7 18.5 17.8c6.7 .8 13.5 1.2 20.4 1.2s13.7-.4 20.4-1.2c9.4-1.1 16.6-8.6 18.5-17.8l6.1-29.1c13.3-5 25.5-12.1 36.2-20.9l28.2 9.3c9 3 19 .5 24.7-7.1c3.5-4.7 6.8-9.5 9.8-14.6l3.1-5.4c2.8-5 5.3-10.2 7.6-15.5c3.7-8.7 .9-18.6-6.2-25l-22.2-19.8c1.1-6.8 1.7-13.8 1.7-20.9s-.6-14.1-1.7-20.9l22.2-19.8zM112 176a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zM504.7 500.5c6.3 7.1 16.2 9.9 25 6.2c5.3-2.3 10.5-4.8 15.5-7.6l5.4-3.1c5-3 9.9-6.3 14.6-9.8c7.6-5.7 10.1-15.7 7.1-24.7l-9.3-28.2c8.8-10.7 16-23 20.9-36.2l29.1-6.1c9.3-1.9 16.7-9.1 17.8-18.5c.8-6.7 1.2-13.5 1.2-20.4s-.4-13.7-1.2-20.4c-1.1-9.4-8.6-16.6-17.8-18.5L583.9 307c-5-13.3-12.1-25.5-20.9-36.2l9.3-28.2c3-9 .5-19-7.1-24.7c-4.7-3.5-9.6-6.8-14.6-9.9l-5.3-3c-5-2.8-10.2-5.3-15.6-7.6c-8.7-3.7-18.6-.9-25 6.2l-19.8 22.2c-6.8-1.1-13.8-1.7-20.9-1.7s-14.1 .6-20.9 1.7l-19.8-22.2c-6.3-7.1-16.2-9.9-25-6.2c-5.3 2.3-10.5 4.8-15.6 7.6l-5.2 3c-5.1 3-9.9 6.3-14.6 9.9c-7.6 5.7-10.1 15.7-7.1 24.7l9.3 28.2c-8.8 10.7-16 23-20.9 36.2L315.1 313c-9.3 1.9-16.7 9.1-17.8 18.5c-.8 6.7-1.2 13.5-1.2 20.4s.4 13.7 1.2 20.4c1.1 9.4 8.6 16.6 17.8 18.5l29.1 6.1c5 13.3 12.1 25.5 20.9 36.2l-9.3 28.2c-3 9-.5 19 7.1 24.7c4.7 3.5 9.5 6.8 14.6 9.8l5.4 3.1c5 2.8 10.2 5.3 15.5 7.6c8.7 3.7 18.6 .9 25-6.2l19.8-22.2c6.8 1.1 13.8 1.7 20.9 1.7s14.1-.6 20.9-1.7l19.8 22.2zM464 304a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                        </svg>
                    </span>
                    <span class="mx-4 text-sm font-bold">
                        <span>Paramètre</span>
                    </span>
                    <i x-bind:class="{'fa-caret-down': open == false, 'fa-caret-up' : open == true }" class="fa-solid absolute right-0 mr-3"></i>

                </p>

                <div class="bg-gray-100 border-x border-2-maquette-gris rounded shadow-inner relative -top-2 overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container1" x-bind:style="open ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : 'border:none'">
                    <a class="element_sidebar {{ request()->is('parametrage/workflow*') ? 'sous_menu_sidebar_actif' : '' }}" href="">
                        <span class="text-left">
                            <svg height="1em" viewBox="0 0 512 512">
                                <path d="M512 96c0 50.2-59.1 125.1-84.6 155c-3.8 4.4-9.4 6.1-14.5 5H320c-17.7 0-32 14.3-32 32s14.3 32 32 32h96c53 0 96 43 96 96s-43 96-96 96H139.6c8.7-9.9 19.3-22.6 30-36.8c6.3-8.4 12.8-17.6 19-27.2H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320c-53 0-96-43-96-96s43-96 96-96h39.8c-21-31.5-39.8-67.7-39.8-96c0-53 43-96 96-96s96 43 96 96zM117.1 489.1c-3.8 4.3-7.2 8.1-10.1 11.3l-1.8 2-.2-.2c-6 4.6-14.6 4-20-1.8C59.8 473 0 402.5 0 352c0-53 43-96 96-96s96 43 96 96c0 30-21.1 67-43.5 97.9c-10.7 14.7-21.7 28-30.8 38.5l-.6 .7zM128 352a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM416 128a32 32 0 1 0 0-64 32 32 0 1 0 0 64z" />
                            </svg>

                        </span>
                        <span class="mx-4 text-sm font-bold">
                            Workflows
                        </span>
                    </a>
                    <a class="element_sidebar {{ request()->is('parametrage/type_demande*') ? 'sous_menu_sidebar_actif' : '' }}" href="">
                        <span class="text-left">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.18 8.03933L18.6435 7.57589C19.4113 6.80804 20.6563 6.80804 21.4241 7.57589C22.192 8.34374 22.192 9.58868 21.4241 10.3565L20.9607 10.82M18.18 8.03933C18.18 8.03933 18.238 9.02414 19.1069 9.89309C19.9759 10.762 20.9607 10.82 20.9607 10.82M18.18 8.03933L13.9194 12.2999C13.6308 12.5885 13.4865 12.7328 13.3624 12.8919C13.2161 13.0796 13.0906 13.2827 12.9882 13.4975C12.9014 13.6797 12.8368 13.8732 12.7078 14.2604L12.2946 15.5L12.1609 15.901M20.9607 10.82L16.7001 15.0806C16.4115 15.3692 16.2672 15.5135 16.1081 15.6376C15.9204 15.7839 15.7173 15.9094 15.5025 16.0118C15.3203 16.0986 15.1268 16.1632 14.7396 16.2922L13.5 16.7054L13.099 16.8391M13.099 16.8391L12.6979 16.9728C12.5074 17.0363 12.2973 16.9867 12.1553 16.8447C12.0133 16.7027 11.9637 16.4926 12.0272 16.3021L12.1609 15.901M13.099 16.8391L12.1609 15.901" stroke="inherit" stroke-width="1.5" />
                                <path d="M8 13H10.5" stroke="inherit" stroke-width="1.5" stroke-linecap="round" />
                                <path d="M8 9H14.5" stroke="inherit" stroke-width="1.5" stroke-linecap="round" />
                                <path d="M8 17H9.5" stroke="inherit" stroke-width="1.5" stroke-linecap="round" />
                                <path opacity="0.5" d="M3 10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H13C16.7712 2 18.6569 2 19.8284 3.17157C21 4.34315 21 6.22876 21 10V14C21 17.7712 21 19.6569 19.8284 20.8284C18.6569 22 16.7712 22 13 22H11C7.22876 22 5.34315 22 4.17157 20.8284C3 19.6569 3 17.7712 3 14V10Z" stroke="inherit" stroke-width="1.5" />
                            </svg>

                        </span>
                        <span class="mx-4 text-sm font-bold">
                            Type demande
                        </span>
                    </a>
                    <a class="element_sidebar {{ request()->is('parametrage/type_notification*') ? 'sous_menu_sidebar_actif' : '' }}" href="">
                        <span class="text-left">
                            <span class="text-left">
                                <svg height="1rem" viewBox="0 0 24 24" fill="inherit">
                                    <path d="M11.9426 1.25C9.63423 1.24999 7.82519 1.24998 6.41371 1.43975C4.96897 1.63399 3.82895 2.03933 2.93414 2.93414C2.03933 3.82895 1.63399 4.96897 1.43975 6.41371C1.24998 7.82519 1.24999 9.63423 1.25 11.9426V12.0574C1.24999 14.3658 1.24998 16.1748 1.43975 17.5863C1.63399 19.031 2.03933 20.1711 2.93414 21.0659C3.82895 21.9607 4.96897 22.366 6.41371 22.5603C7.82519 22.75 9.63423 22.75 11.9426 22.75H12.0574C14.3658 22.75 16.1748 22.75 17.5863 22.5603C19.031 22.366 20.1711 21.9607 21.0659 21.0659C21.9607 20.1711 22.366 19.031 22.5603 17.5863C22.75 16.1748 22.75 14.3658 22.75 12.0574V10.5C22.75 10.0858 22.4142 9.75 22 9.75C21.5858 9.75 21.25 10.0858 21.25 10.5V12C21.25 14.3782 21.2484 16.0864 21.0736 17.3864C20.9018 18.6648 20.5749 19.4355 20.0052 20.0052C19.4355 20.5749 18.6648 20.9018 17.3864 21.0736C16.0864 21.2484 14.3782 21.25 12 21.25C9.62178 21.25 7.91356 21.2484 6.61358 21.0736C5.33517 20.9018 4.56445 20.5749 3.9948 20.0052C3.42514 19.4355 3.09825 18.6648 2.92637 17.3864C2.75159 16.0864 2.75 14.3782 2.75 12C2.75 9.62178 2.75159 7.91356 2.92637 6.61358C3.09825 5.33517 3.42514 4.56445 3.9948 3.9948C4.56445 3.42514 5.33517 3.09825 6.61358 2.92637C7.91356 2.75159 9.62178 2.75 12 2.75H13.5C13.9142 2.75 14.25 2.41421 14.25 2C14.25 1.58579 13.9142 1.25 13.5 1.25H11.9426Z" fill="inherit" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19 1.25C16.9289 1.25 15.25 2.92893 15.25 5C15.25 7.07107 16.9289 8.75 19 8.75C21.0711 8.75 22.75 7.07107 22.75 5C22.75 2.92893 21.0711 1.25 19 1.25ZM16.75 5C16.75 3.75736 17.7574 2.75 19 2.75C20.2426 2.75 21.25 3.75736 21.25 5C21.25 6.24264 20.2426 7.25 19 7.25C17.7574 7.25 16.75 6.24264 16.75 5Z" fill="inherit" />
                                </svg>

                            </span>

                        </span>
                        <span class="mx-4 text-sm font-bold">
                            Type notification
                        </span>
                    </a>
                    <a class="element_sidebar {{ request()->is('parametrage/secteur*') ? 'sous_menu_sidebar_actif' : '' }}" href="">
                        <span class="text-left">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="inherit" stroke-width="1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>

                        </span>
                        <span class="mx-4 text-sm font-bold">
                            Secteur
                        </span>
                    </a>

                </div>



            </div>


            {{-- demande --}}
            <a class="element_sidebar {{ request()->is('demande*') ? 'element_sidebar_acitf' : '' }}" href="">
                <span class="text-left">
                    <svg class="h-6 w-6" viewBox="0 0 64 64" stroke-width="3" stroke="inherit" fill="none">
                        <path d="M55.5,23.9V53.5a2,2,0,0,1-2,2h-43a2,2,0,0,1-2-2v-43a2,2,0,0,1,2-2H41.64" />
                        <path d="M19.48,38.77l-.64,5.59a.84.84,0,0,0,.92.93l5.56-.64a.87.87,0,0,0,.5-.24L54.9,15.22a1.66,1.66,0,0,0,0-2.35L51.15,9.1a1.67,1.67,0,0,0-2.36,0L19.71,38.28A.83.83,0,0,0,19.48,38.77Z" />
                        <line x1="44.87" y1="13.04" x2="50.9" y2="19.24" />
                    </svg>

                </span>
                <span class="mx-4 text-sm font-bold">
                    Demandes
                </span>
            </a>


         


        </div>
    </nav>

    <div class="mb-1 mt-auto w-full flex items-center justify-start w-full text-maquette-gris hover:bg-secondaire hover:text-white px-2 rounded-md">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
            <g id="Help">
                <path id="Vector" d="M14.167 2.74463H5.83366C3.33366 2.74463 1.66699 4.4113 1.66699 6.9113V11.9113C1.66699 14.4113 3.33366 16.078 5.83366 16.078V17.853C5.83366 18.5196 6.57533 18.9196 7.12533 18.5446L10.8337 16.078H14.167C16.667 16.078 18.3337 14.4113 18.3337 11.9113V6.9113C18.3337 4.4113 16.667 2.74463 14.167 2.74463ZM10.0003 12.8863C9.65033 12.8863 9.37533 12.603 9.37533 12.2613C9.37533 11.9196 9.65033 11.6363 10.0003 11.6363C10.3503 11.6363 10.6253 11.9196 10.6253 12.2613C10.6253 12.603 10.3503 12.8863 10.0003 12.8863ZM11.0503 9.42797C10.7253 9.64464 10.6253 9.7863 10.6253 10.0196V10.1946C10.6253 10.5363 10.342 10.8196 10.0003 10.8196C9.65866 10.8196 9.37533 10.5363 9.37533 10.1946V10.0196C9.37533 9.05296 10.0837 8.57796 10.3503 8.39463C10.6587 8.1863 10.7587 8.04463 10.7587 7.82796C10.7587 7.4113 10.417 7.06963 10.0003 7.06963C9.58366 7.06963 9.24199 7.4113 9.24199 7.82796C9.24199 8.16963 8.95866 8.45296 8.61699 8.45296C8.27533 8.45296 7.99199 8.16963 7.99199 7.82796C7.99199 6.71963 8.89199 5.81963 10.0003 5.81963C11.1087 5.81963 12.0087 6.71963 12.0087 7.82796C12.0087 8.77796 11.3087 9.25297 11.0503 9.42797Z" fill="#929EAE" />
            </g>
        </svg>

        <span class="mx-4 text-sm font-bold p-2">
            <a href="#">
                Aide
            </a>
        </span>
    </div>
    <div class="mb-1 w-full flex items-center justify-start w-full text-maquette-gris hover:bg-secondaire hover:text-white px-2 rounded-md">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
            <path d="M6.56515 10.0583C6.56515 9.71663 6.84849 9.43329 7.19015 9.43329H11.7568V2.38329C11.7485 1.98329 11.4318 1.66663 11.0318 1.66663C6.12349 1.66663 2.69849 5.09163 2.69849 9.99996C2.69849 14.9083 6.12349 18.3333 11.0318 18.3333C11.4235 18.3333 11.7485 18.0166 11.7485 17.6166V10.675H7.19015C6.84015 10.6833 6.56515 10.4 6.56515 10.0583Z" fill="#929EAE" />
            <path d="M17.1179 9.6168L14.7512 7.24177C14.5096 7.0001 14.1096 7.0001 13.8679 7.24177C13.6262 7.48343 13.6262 7.88343 13.8679 8.1251L15.1679 9.42513H11.7512V10.6751H15.1596L13.8596 11.9751C13.6179 12.2168 13.6179 12.6168 13.8596 12.8585C13.9846 12.9835 14.1429 13.0418 14.3012 13.0418C14.4596 13.0418 14.6179 12.9835 14.7429 12.8585L17.1096 10.4835C17.3596 10.2501 17.3596 9.85847 17.1179 9.6168Z" fill="#929EAE" />
        </svg>

        <span class="mx-4 text-sm font-bold p-2">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Se déconnecter
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </span>
    </div>
    <div class="mb-5 w-full flex items-center justify-start w-full text-maquette-gris px-2 rounded-md">
        <span class="text-small font-bold pt-2">
            <a href="javascript:void(0);">
                A4l0u_c0d3
            </a>
        </span>
    </div>
</div>

