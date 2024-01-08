<div x-show="showupdatemodal" x-data="{showupdatemodal: false}" @open-updatemodal.window="showupdatemodal = true" 
x-on:closemodal.window="showupdatemodal=false,showMessage=true" class="">
<div class=" h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover" >
   	<div class="absolute bg-black opacity-80 inset-0 z-0"></div>
       

       <div class="w-1/2 relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600  ">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Update Still Details 
                </h3>
               
                <button  x-on:click="showupdatemodal =!showupdatemodal" id="closetbtn" type="button" class="text-gray-400 bg-transparent 
                hover:bg-gray-200 hover:text-gray-900 rounded-lg 
                text-sm p-1.5 ml-auto inline-flex items-center 
                dark:hover:bg-gray-600 dark:hover:text-white" 
                data-modal-toggle="updatePostModal">
                    <svg aria-hidden="true" class="w-5 h-5" 
                    fill="currentColor" viewBox="0 0 20 20" 
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" 
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414
                     1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 
                     11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 
                     4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd">
                    </path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            
            <form>
               
                <div class="grid gap-4 mb-4">
               
                    <div>
                        <label for="stillName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                     Name
                        </label>
                        <input type="text" name="stillName" id="stillName" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
                         rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full 
                         p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                         dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                         wire:model="stillname">
                         
                    </div>
                    <div  class="text-red-500 text-xs">@error('stillname') {{ $message }} @enderror</div>
                </div>
                <div class="grid gap-4 mb-4 ">
                    <div>
                        <label  for="stillType" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type</label>
                        <input type="text" name="stillType" id="stillType" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
                         rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full 
                         p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                         dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        
                         wire:model="stilltype"/>
                    </div>

                    <div  class="text-red-500 text-xs">@error('stilltype') {{ $message }} @enderror</div>
                </div>
                
                <div class="grid gap-4 mb-4 ">
                    <div>
                        <label  for="stillBuildDate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Build Date</label>
                        <input type="date" name="stillBuildDate" id="stillBuildDate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
                         rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full 
                         p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                         dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                       
                         wire:model="stillbuilt"/>
                    </div>
                    <div  class="text-red-500 text-xs">@error('stillbuilt') {{ $message }} @enderror</div>
                </div>

                <div class="grid gap-4 mb-4 ">
                    <div>
                        <label  for="stillLocation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">still Location</label>
                        <input type="text" name="stillLocation" id="stillLocation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
                         rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full 
                         p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                         dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                       
                         wire:model="stillLocation"/>
                    </div>

                    <div  class="text-red-500 text-xs">@error('stillLocation') {{ $message }} @enderror</div>
                </div>
                <div class="flex items-center space-x-4">
                    
                    <button type="button" wire:click="updatestill()"  class="text-blue-600 inline-flex items-center
                     hover:text-white 
                     border border-blue-600 hover:bg-blue-600 focus:ring-4 focus:outline-none 
                     focus:ring-red-300 font-medium 
                     rounded-lg text-sm px-5 py-2.5 text-center 
                     dark:border-blue-500 dark:text-red-500 dark:hover:text-white 
                     dark:hover:bg-blue-600 dark:focus:ring-blue-900">
                        Update
                    </button>
                </div>

               
            </form>

          
        </div>








  </div>
</div>




