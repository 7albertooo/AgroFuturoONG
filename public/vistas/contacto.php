<?php

include_once 'header.php';


?>


<section class="w-full mx-auto p-10 flex flex-col items-center lg:min-h-150  justify-center">




    <div class="grid grid-cols-5 grid-rows-5 gap-4 w-full h-170 ml-100 mt-10">
        <div class="col-span-2 row-span-3 p-5 border border-gray-300 shadow-lg rounded-lg flex flex-col items-center hover:scale-103 transition-transform ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3175.529966501865!2d-7.210022200000002!3d37.2588581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1031c52bfcf10d%3A0x3d3cdb74ee712c96!2sIES%20La%20Arboleda!5e0!3m2!1ses!2ses!4v1770045220330!5m2!1ses!2ses" width="690" height="360" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-start-1 row-start-4 p-5 border border-gray-300 shadow-lg rounded-lg  justify-start items-start flex flex-col hover:scale-103 transition-transform">

            <h3 class="text-lg font-semibold bg-gradient-to-l from-green-500 to-green-800 text-transparent bg-clip-text "><?php echo $textos['contacto']['info']['horario']; ?></h3>
            <p class="text-sm text-gray-600"><?php echo $textos['contacto']['datos']['h_dias']; ?></p>
            <p class="text-sm text-gray-600"><?php echo $textos['contacto']['datos']['h_sab']; ?></p>
            <p class="text-sm text-gray-600"><?php echo $textos['contacto']['datos']['h_dom']; ?></p>
        </div>
        <div class="col-start-2 row-start-4 p-5 border border-gray-300 shadow-lg rounded-lg justify-start items-start flex flex-col hover:scale-103 transition-transform">
            <h3 class="text-lg font-semibold bg-gradient-to-l from-green-500 to-green-800 text-transparent bg-clip-text mb-1"><?php echo $textos['contacto']['info']['tel']; ?></h3>
            <p class="text-sm text-gray-600">Teléfono: +34 123 456 789</p>
        </div>
        <div class="col-start-1 row-start-5 p-5 border border-gray-300 shadow-lg rounded-lg justify-start items-start flex flex-col hover:scale-103 transition-transform">
            <h3 class="text-lg font-semibold bg-gradient-to-l from-green-500 to-green-800 text-transparent bg-clip-text mb-1"><?php echo $textos['contacto']['info']['dir']; ?></h3>
            <p class="text-sm text-gray-600">Av de la Arboleda, s/n, Av. Arboleda, 21440 Lepe, Huelva</p>
        </div>
        <div class="col-start-2 row-start-5 p-5 border border-gray-300 shadow-lg rounded-lg justify-start items-start flex flex-col hover:scale-103 transition-transform">
            <h3 class="text-lg font-semibold bg-gradient-to-l from-green-500 to-green-800 text-transparent bg-clip-text mb-2"><?php echo $textos['contacto']['info']['redes']; ?></h3>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-body sm:mb-0 md:mr-20 gap-10">
                <li class="w-6 h-6 hover:scale-105 transition-all duration-300">
                    <a href="#">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" fill="#858585"></path>
                                <path d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z" fill="#858585"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z" fill="#858585"></path>
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="w-6 h-6 hover:scale-105 transition-all duration-300">
                    <a href="#">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20 1C21.6569 1 23 2.34315 23 4V20C23 21.6569 21.6569 23 20 23H4C2.34315 23 1 21.6569 1 20V4C1 2.34315 2.34315 1 4 1H20ZM20 3C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H15V13.9999H17.0762C17.5066 13.9999 17.8887 13.7245 18.0249 13.3161L18.4679 11.9871C18.6298 11.5014 18.2683 10.9999 17.7564 10.9999H15V8.99992C15 8.49992 15.5 7.99992 16 7.99992H18C18.5523 7.99992 19 7.5522 19 6.99992V6.31393C19 5.99091 18.7937 5.7013 18.4813 5.61887C17.1705 5.27295 16 5.27295 16 5.27295C13.5 5.27295 12 6.99992 12 8.49992V10.9999H10C9.44772 10.9999 9 11.4476 9 11.9999V12.9999C9 13.5522 9.44771 13.9999 10 13.9999H12V21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3H20Z" fill="#858585"></path>
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="w-6 h-6 hover:scale-105 transition-all duration-300">
                    <a href="#">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M6.5 8C7.32843 8 8 7.32843 8 6.5C8 5.67157 7.32843 5 6.5 5C5.67157 5 5 5.67157 5 6.5C5 7.32843 5.67157 8 6.5 8Z" fill="#858585"></path>
                                <path d="M5 10C5 9.44772 5.44772 9 6 9H7C7.55228 9 8 9.44771 8 10V18C8 18.5523 7.55228 19 7 19H6C5.44772 19 5 18.5523 5 18V10Z" fill="#858585"></path>
                                <path d="M11 19H12C12.5523 19 13 18.5523 13 18V13.5C13 12 16 11 16 13V18.0004C16 18.5527 16.4477 19 17 19H18C18.5523 19 19 18.5523 19 18V12C19 10 17.5 9 15.5 9C13.5 9 13 10.5 13 10.5V10C13 9.44771 12.5523 9 12 9H11C10.4477 9 10 9.44772 10 10V18C10 18.5523 10.4477 19 11 19Z" fill="#858585"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20 1C21.6569 1 23 2.34315 23 4V20C23 21.6569 21.6569 23 20 23H4C2.34315 23 1 21.6569 1 20V4C1 2.34315 2.34315 1 4 1H20ZM20 3C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3H20Z" fill="#858585"></path>
                            </g>
                        </svg>
                    </a>
                </li>

            </ul>
        </div>


        <div class="col-span-2 row-span-5 col-start-3 row-start-1 p-5 border border-gray-300 shadow-lg rounded-lg flex flex-col items-center justify-center hover:scale-103 transition-transform ">
            <h2 class="text-2xl font-semibold bg-gradient-to-l from-green-500 to-green-800 text-transparent bg-clip-text mb-6">
                <?php echo $textos['contacto']['titulo']; ?>
            </h2>

            <form action="enviar.php" method="POST" class="space-y-5 w-full max-w-md">

                <div>
                    <label class="block text-sm text-gray-600 mb-1"><?php echo $textos['contacto']['form']['nombre']; ?></label>
                    <input
                        type="text"
                        name="nombre"
                        required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-1 focus:ring-green-700 focus:border-green-700 outline-none"
                        placeholder="<?php echo $textos['contacto']['placeholders']['nombre']; ?>">
                </div>

                <div>
                    <label class="block text-sm text-gray-600 mb-1"><?php echo $textos['contacto']['form']['email']; ?></label>
                    <input
                        type="email"
                        name="email"
                        required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-1 focus:ring-green-700 focus:border-green-700 outline-none"
                        placeholder="<?php echo $textos['contacto']['placeholders']['email']; ?>">
                </div>

                <div>
                    <label class="block text-sm text-gray-600 mb-1"><?php echo $textos['contacto']['form']['msj']; ?></label>
                    <textarea
                        name="mensaje"
                        rows="4"
                        required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-1 focus:ring-green-700 focus:border-green-700 outline-none"
                        placeholder="<?php echo $textos['contacto']['placeholders']['msj']; ?>"></textarea>
                </div>

                <button
                    type="submit"
                    class="w-full bg-gradient-to-l from-green-500 to-green-800 hover:bg-gradient-to-l hover:from-green-600 hover:to-green-900 text-white font-medium py-3 rounded-lg transition">
                    <?php echo $textos['contacto']['form']['btn']; ?>
                </button>

            </form>
        </div>
    </div>





</section>