<div x-data="{'showdelmodal':false,'id':0,'showMessage':false,'showupdatemodal':false,'showaddmodal':false}"  x-on:keydown.escape="showdelmodal =false" x-on:closemodal.window="showdelmodal=false" 
id="tablediv"  class="relative overflow-x-auto ">

<x-flashmessage />
<x-delete-still-modal internalmsg="Do you really want to delete this Still details? This process cannot be undone"/>
<x-update-still-modal />
<x-add-still-modal />

<div class="flex w-full">
    <div class="mr-auto pt-2 relative mb-4 text-gray-600">
        <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
        wire:model.live.debounce.500ms="searchTerm"  type="search" name="search" placeholder="Search">

        </input>
        
      </div>
      <div class="ml-auto sm:w-1/8 text-right m-5 ">
      <button  x-on:click="$dispatch('open-addmodal')" 
      class="bg-blue-500 px-4 py-2 font-semibold text-white 
      inline-flex items-center space-x-2 rounded">
         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
         </svg>
        <span>Add Still</span>
      </button>
        
     </div>

</div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                     ID
                </th>
                <th scope="col" class="px-6 py-3">
                     Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Type
                </th>
                <th scope="col" class="px-6 py-3">
                 Build
                </th>
                <th scope="col" class="px-6 py-3">
                 Location
                </th>

                <th scope="col" class="px-6 py-3">
                 Actions
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach($stills as $still)
       
            <tr wire:key="org-{{$still->id}}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$still->id}}
                </th>
                <td class="px-6 py-4">
                {{$still->stillName}}
                </td>
                <td class="px-6 py-4">
                {{$still->stillType}}
                </td>

                <td class="px-6 py-4">
                {{$still->stillBuildDate}}
                </td>

                <td class="px-6 py-4">
                {{$still->stillLocation}}
                </td>
              <td>
                <div class="w-full sm:w-1/8 text-right m-5 max-w-fit">
                <button type="button" wire:click="populatemodal('{{$still->id}}','{{$still->stillName}}',
                '{{$still->stillType}}','{{$still->stillBuildDate}}','{{$still->stillLocation}}')"
                 x-on:click="$dispatch('open-updatemodal')"  
                 class="text-blue-600 inline-flex items-center
                     hover:text-white 
                     border border-blue-600 hover:bg-blue-600 focus:ring-4 focus:outline-none 
                     focus:ring-red-300 font-medium 
                     rounded-lg text-sm px-5 py-2.5 text-center 
                     dark:border-blue-500 dark:text-red-500 dark:hover:text-white 
                     dark:hover:bg-blue-600 dark:focus:ring-blue-900">
                        Update
                    </button>
                </div>
                <div class="w-full sm:w-1/8 text-right m-5 max-w-fit">
                <button wire:key="org-{{$still->id}}" type="button" x-on:click="showdelmodal=!showdelmodal,showMessage=true,id={{$still->id}}" class="text-red-600 inline-flex items-center
                     hover:text-white 
                     border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none 
                     focus:ring-red-300 font-medium 
                     rounded-lg text-sm px-5 py-2.5 text-center 
                     dark:border-red-500 dark:text-red-500 dark:hover:text-white 
                     dark:hover:bg-red-600 dark:focus:ring-red-900">
                        Delete
                    </button>
                </div>
                
                </td>
            </tr>

        @endforeach
            
        </tbody>
    </table>

    <br/>
    {{ $stills->links('pagination::tailwind') }}




</div>