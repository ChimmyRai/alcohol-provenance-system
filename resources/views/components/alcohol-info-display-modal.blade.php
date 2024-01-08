<!-- Modal -->
<div id="alcoholInfoModal" data-modal-placement="center" tabindex="-1" 
class="hidden fixed top-0 ml-50 right-0 z-50  w-full p-4 
overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)]  w-screen">
    <div class="">
        <!-- Modal content -->
        <div class="bg-white rounded-lg shadow bg-purple-600 bg-opacity-25">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600 bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90%">
                <h3 class="text-xl  font-medium text-gray-900 dark:text-white">
                   Information for the bottle
                </h3>
                <button onclick="closeModalFunction()" type="button" class="text-gray-900 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="top-left-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
        <div class="grid mb-8 border border-gray-200 rounded-lg shadow-sm  md:mb-12 md:grid-cols-2">
                <figure class="flex flex-col  justify-center p-8 text-center bg-white  border-b border-gray-200 rounded-bl-lg md:border-b-1 md:border-r dark:bg-gray-800">
                                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Supplier details</h3>
                                </blockquote>
                                <table class="min-w-full text-sm">
                                        <tr class="text-left">
                                            <td class="font-semibold">Bottle Number:</td> <td> <div id="s1"></div></td>
                                        </tr>
                                        <tr class="text-left">
                                            <td class="font-semibold">Batch Number:</td> <td> <div id="s2"></div></td>
                                        </tr>
                                        <tr class="text-left">
                                            <td class="font-semibold">Volume:</td> <td> <div id="s3"></div></td>
                                        </tr>
                                        <tr class="text-left">
                                            <td class="font-semibold">stock keeping unit:</td> <td><div id="s4"></div></td>
                                        </tr>       
                                </table>
                    
                </figure>

                
                <figure class="flex flex-col  justify-center p-8 text-center bg-white border-b border-gray-200 rounded-tr-lg dark:bg-gray-800 ">
                        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Product Details</h3>
                        
                        </blockquote>
        
                        <table class="min-w-full text-sm">
                                <tr class="text-left">
                                <td class="font-semibold">Product Name:</td> <td> <div id="s6"></div></td>
                                </tr>
                                <tr class="text-left">
                                    <td class="font-semibold">Variety:</td> <td> <div id="s7"></div></td>
                                </tr>
                                <tr class="text-left">
                                    <td class="font-semibold">Category:</td> <td> <div id="s8"></div></td>
                                </tr>
                                <tr class="text-left">
                                    <td class="font-semibold">Appearance:</td> <td><div id="s9"></div></td>
                                </tr>
                                <tr class="text-left">
                                    <td class="font-semibold">Alcohol Content:</td> <td><div id="s10"></div></td>
                                </tr>
                                <tr class="text-left">
                                    <td class="font-semibold">Date of Creation:</td> <td><div id="s11"></div></td>
                                </tr>
                                <tr class="text-left">
                                    <td class="font-semibold">Creator:</td> <td><div id="s12"></div></td>
                                </tr>
                                     
                        </table>
            </figure>

            <figure class="flex flex-col p-8 bg-white border-b border-gray-200 rounded-bl-lg md:border-b-1 md:border-r dark:bg-gray-800 ">
                        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 ">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Ingredients Details</h3>
                            
                        </blockquote>
                        
                        <table class="min-w-full text-sm">
                                <tr class="text-left">
                                     <td class="font-semibold">Type:</td> <td> <div id="s13"></div></td>
                                </tr>
                                <tr class="text-left">
                                    <td class="font-semibold">Origin:</td> <td> <div id="s14"></div></td>
                                </tr>
                                <tr class="text-left">
                                    <td class="font-semibold">Yeast:</td> <td> <div id="s15"></div></td>
                                </tr>
                                <tr class="text-left">
                                    <td class="font-semibold">Notes:</td> <td><div id="s16"></div></td>
                                </tr>            
                        </table>
                    
        </figure>

        <figure class="flex flex-col  justify-center p-8 text-center bg-white border-b border-gray-200 rounded-bl-lg md:border-b-1 md:border-r dark:bg-gray-800">
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Distillation details</h3>
                    
                </blockquote>

                <table class="min-w-full text-sm">
                        <tr class="text-left">
                        <td class="font-semibold">Process:</td> <td><div id="s17"></div></td>
                        </tr>
                        <tr class="text-left">
                            <td class="font-semibold">Still details:</td> <td> <div id="s18"></div></td>
                        </tr>
                        <tr class="text-left">
                            <td class="font-semibold">Cask Type:</td> <td> <div id="s19"></div></td>
                        </tr>
                        <tr class="text-left">
                            <td class="font-semibold">Char Level:</td> <td><div id="s20"></div></td>
                        </tr>
                        <tr class="text-left">
                            <td class="font-semibold">Cask number:</td> <td><div id="s21"></div></td>
                        </tr>
                        <tr class="text-left">
                            <td class="font-semibold">Casked Date:</td> <td><div id="s22"></div></td>
                        </tr>
                        <tr class="text-left">
                            <td class="font-semibold">Distiller Name:</td> <td><div id="s23"></div></td>
                        </tr>
                        <tr class="text-left">
                            <td class="font-semibold">Barelling date:</td> <td><div id="s24"></div></td>
                        </tr>

                        <tr class="text-left">
                            <td class="font-semibold">Disorgin Date:</td> <td><div id="s25"></div></td>
                        </tr>      
                </table>
                 
        </figure>
        <figure class="flex flex-col  justify-center p-8 text-center bg-white  border-b border-gray-200 rounded-bl-lg md:border-b-1 md:border-r dark:bg-gray-800">
                    <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Taste details</h3>
                    </blockquote>
                    <table class="min-w-full text-sm">
                            <tr class="text-left">
                            <td class="font-semibold">Nose:</td> <td> <div id="s26"></div></td>
                            </tr>
                            <tr class="text-left">
                                <td class="font-semibold">Palate:</td> <td> <div id="s27"></div></td>
                            </tr>
                            <tr class="text-left">
                                <td class="font-semibold">Finish:</td> <td> <div id="s28"></div></td>
                            </tr>        
                    </table>
          
         </figure>
       
         <figure class="flex flex-col  justify-center p-8 text-center bg-white  border-b border-gray-200 rounded-bl-lg md:border-b-1 md:border-r dark:bg-gray-800">
                        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Supplier details</h3>
                        </blockquote>
                        <table class="min-w-full text-sm">
                                <tr class="text-left">
                                <td class="font-semibold">Business Name:</td> <td> <div id="s29"></div></td>
                                </tr>
                                <tr class="text-left">
                                    <td class="font-semibold">ABN:</td> <td> <div id="s30"></div></td>
                                </tr>
                                <tr class="text-left">
                                    <td class="font-semibold">Address:</td> <td> <div id="s31"></div></td>
                                </tr>        
                        </table>
              
         </figure>

        </div> <!--end Modal body -->
        </div>

        
    </div>

       
</div>