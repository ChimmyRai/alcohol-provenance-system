
        
          <div class="flex min-w-full break-words  mt-3 shadow-lg rounded-lg border-2">
           
            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
       
              <form>
                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-Rubik">
                  Bottle Information
                </h6>
               
                <div class="flex flex-wrap">
                  <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block text-blueGray-600 text-xs font-SourceSerif ">
                        Bottle_UID(start)
                      </label>
                      <input  id="start_uid" wire:model="start_uid" type="number" 
                      class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm 
                      shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      placeholder="">
                    </div>
                  </div>
                 
                  <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block text-blueGray-600 text-xs font-SourceSerif ">
                        Bottle_UID(end)
                      </label>
                      <input  id="end_uid" wire:model="end_uid"  type="number" 
                      class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm 
                      shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      placeholder="">
                    </div>
                  </div>
                  <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block  text-blueGray-600 text-xs font-SourceSerif" >
                        Stock Keeping Unit
                      </label>
                      <input id="sku" wire:model="sku" type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
                    </div>
                  </div>
                  <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block text-blueGray-600 text-xs SourceSerif" >
                        Volume(ml)
                      </label>
                      <input  id="volume" wire:model="volume" type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
                    </div>
                  </div>
                  <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block text-blueGray-600 text-xs  mb-2" >
                        Bottle Number
                      </label>
                      <input id="bottle_number" wire:model="bottle_number" type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
                    </div>
                  </div>
                  <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block  text-blueGray-600 text-xs  mb-2" >
                       No of Bottles/Batch
                      </label>
                      <input id="Total_bottles_each_batch" wire:model="Total_bottles_each_batch" type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                    </div>
                  </div>
                  
                </div>
        
                <hr
  class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100" bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100" >
        
                <h6 class="text-blueGray-400 text-sm mt-3 mb-6  font-Rubik">
                  Product Details
                </h6>
                <div class="flex flex-wrap">
                  <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block  text-blueGray-600 text-xs  mb-2" >
                        Product Name
                      </label>
                      <input id="productName" wire:model="productName" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                    </div>
                  </div>
                  <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block  text-blueGray-600 text-xs  mb-2" >
                        Product Variety
                      </label>
                      <input id="productVariety" wire:model="productVariety" type="text" list="productVarietyList" name="product_Variety_list" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                      <datalist  id="productVarietyList" name="ProductVariety">
                        <option value="Absinthe">Absinthe</option>
                        <option value="Albarino">Albarino</option>
                        <option value="Amaretto">Amaretto</option>
                        <option value="Aperitif">Aperitif</option>
                      </datalist >
                    </div>
                  </div>
                  <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block text-blueGray-600 text-xs  mb-2" >
                        Product Category
                      </label>
                      <input id="productCategory" wire:model="productCategory" type="text" list="productCategoryList" name="product_Variety_list" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                      <datalist  id="productCategoryList" name="ProductVariety">
                        <option value="Champagne">Champagne</option>
                        <option value="Cider">Cider</option>
                        <option value="Evolution Rewards">Evolution Rewards</option>
                        <option value="Fortified Wine">Fortified Wine</option>
                        <option value="Non Alcoholic">Non Alcoholic</option>
                      </datalist >
                    </div>
                  </div>
                  <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block  text-blueGray-600 text-xs  mb-2" >
                        appearance
                      </label>
                      <input id="appearance" wire:model="appearance" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                    </div>
                  </div>
                  <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block  text-blueGray-600 text-xs  mb-2" >
                     Alcohol Content
                      </label>
                      <input id="alcoholContent" wire:model="alcoholContent"  type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
                    </div>
                  </div>
                  <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block  text-blueGray-600 text-xs  mb-2" >
                        Date Of Creation
                      </label>
                      <input id="creation_date"  wire:model="creation_date" type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-xs shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
                    </div>
                  </div>
                  <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block  text-blueGray-600 text-xs  mb-2" >
                        Created By:
                      </label>
                      <input id="created_by" wire:model="created_by" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-xs shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
                    </div>
                  </div>
                </div>

                <hr
  class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100">
        
                <h6 class="text-blueGray-400 text-sm mt-3 mb-6  font-Rubik">
                Ingredients Details
                </h6>
                <div class="flex flex-wrap">
                  <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block  text-blueGray-600 text-xs  mb-2">
                        Ingredient Types
                      </label>
                      <input id="ingretype" wire:model="ingretype" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                    </div>
                  </div>

                  <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block  text-blueGray-600 text-xs  mb-2" >
                        Ingredient Origin
                      </label>
                      <input id="origin" wire:model="origin" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                    </div>
                  </div>

                  <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block  text-blueGray-600 text-xs  mb-2" >
                        Yeast
                      </label>
                      <input id="yeast" wire:model="yeast" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                    </div>
                  </div>

                  <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block  text-blueGray-600 text-xs  mb-2" >
                        Notes
                      </label>
                      <textarea id="notes" wire:model="notes" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" rows="4">Type here</textarea>
                    </div>
                  </div>
                  
                
                </div>
                <hr
  class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100">
        
                <h6 class="text-blueGray-400 text-sm mt-3 mb-6  font-Rubik">
                Taste Details
                </h6>
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                          <label class="block  text-blueGray-600 text-xs  mb-2" >
                            Nose
                          </label>
                          <textarea id="Nose" wire:model="Nose" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" rows="4">Type here</textarea>
                        </div>
                      </div>

                      <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                          <label class="block  text-blueGray-600 text-xs  mb-2" >
                            Palate
                          </label>
                          <textarea id="Palate" wire:model="Palate" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" rows="4">Type here</textarea>
                        </div>
                      </div>

                      <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                          <label class="block  text-blueGray-600 text-xs  mb-2" >
                            Finish
                          </label>
                          <textarea id="Finish" wire:model="Finish" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" rows="4"> Type here</textarea>
                        </div>
                      </div>

                  
                </div>
                

                <hr
  class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100">
        
                <h6 class="text-blueGray-400 text-sm mt-3 mb-6  font-Rubik">
                Distillation Details
                </h6>
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-3/12 px-4">
                        <div class="relative w-full mb-3">
                          <label class="block  text-blueGray-600 text-xs  mb-2" >
                            Distillatin process
                          </label>
                          <input id="process" wire:model="process" type="text" list="processList" name="product_Variety_list" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                          <datalist  id="processList" name="ProductVariety">
                            <option value="Single Distillation">Single Distillation</option>
                            <option value="Double Distillation">Double Distillation</option>
                          </datalist >
                        </div>
                      </div>

                      <div class="w-full lg:w-3/12 px-4">
                        <div class="relative w-full mb-3">
                          <label class="block  text-blueGray-600 text-xs  mb-2" >
                            Cask Type
                          </label>
                          <input id="caskType" wire:model="caskType"  type="text" list="caskTypeList" name="product_Variety_list" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                          <datalist  id="caskTypeList" name="ProductVariety">
                            <option value="Ex Bourbon">Ex Bourbon</option>
                            <option value="New American Oak">New American Oak</option>
                            <option value="New French Oak">New French Oak</option>
                            <option value="I dont Know">I dont Know</option>
                          </datalist >
                        </div>
                      </div>

                      <div class="w-full lg:w-3/12 px-4">
                        <div class="relative w-full mb-3">
                          <label class="block  text-blueGray-600 text-xs  mb-2" >
                            Char Level
                          </label>
                          <input id="charLevel" wire:model="charLevel"  type="text" list="charLevelList" name="product_Variety_list" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                          <datalist  id="charLevelList" name="ProductVariety">
                            <option value="Level 1">Level 1</option>
                            <option value="Level 2">Level 2</option>
                            <option value="Level 3">Level 3</option>
                            <option value="Level 4">Level 4</option>
                          </datalist >
                        </div>
                      </div>

                      <div class="w-full lg:w-3/12 px-4">
                        <div class="relative w-full mb-3">
                          <label class="block  text-blueGray-600 text-xs  mb-2" >
                           Cask Number
                          </label>
                          <input id="caskNumber" wire:model="caskNumber"  type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                        </div>
                      </div>

                      <div class="w-full lg:w-3/12 px-4">
                        <div class="relative w-full mb-3">
                          <label class="block  text-blueGray-600 text-xs  mb-2" >
                            Casked Date
                          </label>
                          <input id="caskedDate" wire:model="caskedDate" type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-xs shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                        </div>
                      </div>
                  
                      <div class="w-full lg:w-3/12 px-4">
                        <div class="relative w-full mb-3">
                          <label class="block  text-blueGray-600 text-xs  mb-2" >
                            Distiller Name
                          </label>
                          <input id="distillerName" wire:model="distillerName" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                        </div>
                      </div>

                      <div class="w-full lg:w-3/12 px-4">
                        <div class="relative w-full mb-3">
                          <label class="block  text-blueGray-600 text-xs  mb-2" >
                            Barrelling Date
                          </label>
                          <input id="barrelingDate" wire:model="barrelingDate" type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-xs shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                        </div>
                      </div>
                      <div class="w-full lg:w-3/12 px-4">
                        <div class="relative w-full mb-3">
                          <label class="block  text-blueGray-600 text-xs  mb-2" >
                            Disorgin Date
                          </label>
                          <input id="disorginDate" wire:model="disorginDate" type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-xs shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                        </div>
                      </div>


                </div>

                <hr
  class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100">
        
                <h6 class="text-blueGray-400 text-sm mt-3 mb-6  font-Rubik">
                Supplier Details
                </h6>
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-3/12 px-4">
                        <div class="relative w-full mb-3">
                          <label class="block  text-blueGray-600 text-xs  mb-2" >
                            Supplier Business Name
                          </label>
                          <input id="supplierBusinessName" wire:model="supplierBusinessName" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                        </div>
                    </div>
                    <div class="w-full lg:w-3/12 px-4">
                        <div class="relative w-full mb-3">
                          <label class="block  text-blueGray-600 text-xs  mb-2" >
                            Supplier Business Number
                          </label>
                          <input id="supplierBusinessNumber" wire:model="supplierBusinessNumber" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="">
                        </div>
                    </div>


                    <div class="w-full lg:w-3/12 px-4">
                        <div class="relative w-full mb-3">
                          <label class="block  text-blueGray-600 text-xs  mb-2" >
                            Supplier Business Address
                          </label>
                          <input id="supplierPhysicalAddress" wire:model="supplierPhysicalAddress" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="">
                        </div>
                    </div>


                </div>
                
                <hr
  class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100">
  <button  type="button" onclick="sendTransaction()"class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Details</button>
                
              </form>
            </div>

            
          </div>
         
       