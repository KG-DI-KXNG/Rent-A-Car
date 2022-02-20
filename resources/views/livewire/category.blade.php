<div class="">
    <style>
        /* 
Upload Post */

.uploadcontainer {
    max-width: 600px;
    width: 100%;
    margin: 0 auto;
    position: relative;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="number"],
#contact textarea,
#contact button[type="submit"] {
    font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
    background: #d3cecf;
    padding: 25px;
    /* margin: 150px 0; */
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
    display: block;
    font-size: 30px;
    font-weight: 300;
    margin-bottom: 10px;
}

#contact h4 {
    margin: 5px 0 15px;
    display: block;
    font-size: 13px;
    font-weight: 400;
}

fieldset {
    border: medium none !important;
    margin: 0 0 10px;
    min-width: 100%;
    padding: 0;
    width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="number"],
#posttype,
#Category,
#color,
#year,
#capacity,
#Location,
#newCategory,
#carpic,
#contact textarea {
    /* width: 100%; */
    border: 1px solid #ccc;
    background: #FFF;
    margin: 0 0 5px;
    padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="number"]:hover,
#contact textarea:hover {
    -webkit-transition: border-color 0.3s ease-in-out;
    -moz-transition: border-color 0.3s ease-in-out;
    transition: border-color 0.3s ease-in-out;
    border: 1px solid #aaa;
}

#contact textarea {
    height: 100px;
    max-width: 100%;
    resize: none;
}

.copyright {
    text-align: center;
}

#contact input:focus,
#contact textarea:focus {
    outline: 0;
    border: 1px solid #aaa;
}

::-webkit-input-placeholder {
    color: #888;
}

:-moz-placeholder {
    color: #888;
}

::-moz-placeholder {
    color: #888;
}

:-ms-input-placeholder {
    color: #888;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    /* display: none; <- Crashes Chrome on hover */
    -webkit-appearance: none;
    margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
}

input[type=number] {
    -moz-appearance:textfield; /* Firefox */
}   

/* End Upload Car */


.pulse:hover,
.pulse:focus {
  -webkit-animation: pulse 1s;
          animation: pulse 1s;
  box-shadow: 0 0 0 2em rgba(255, 255, 255, 0);
  border-color: var(--hover);
  color: #fff;
}

@-webkit-keyframes pulse {
  0% {
    box-shadow: 0 0 0 0 var(--hover);
  }
}

@keyframes pulse {
  0% {
    box-shadow: 0 0 0 0 var(--hover);
  }
}

.pulse{
    background: none;
  border: 2px solid;
  font: inherit;
  line-height: 1;
  margin: 0.5em;
  --color: #ff0000;
  --hover: #c03000;

  color: var(--color);
  transition: 0.25s;
}
    </style>
    <x-button class="ml-[80%]" wire:click="$set('view',true)">
        add
    </x-button>
    <div class="px-3 py-4 flex justify-center">
        <form wire:submit.prevent>
        <table class="text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Plate</th>
                    <th class="text-left p-3 px-5">Make</th>
                    <th class="text-left p-3 px-5">Model</th>
                    <th class="text-left p-3 px-5">Year</th>
                    <th class="text-left p-3 px-5">Type</th>
                    <th class="text-left p-3 px-5">Capacity</th>
                    <th class="text-left p-3 px-5">Color</th>
                    <th class="text-left p-3 px-5">Last Rented</th>
                    <th class="text-left p-3 px-5"></th>
                
                </tr>
                @forelse ($allVehicles as $v)
             <tr class="border-b hover:bg-orange-100 bg-gray-100">
                <td class="p-3 px-5">{{$v['license_no'] }}</td>
                    <td class="p-3 px-5">{{$v['Make']}}</td>
                    <td class="p-3 px-5">{{$v['Model']}}</td>
                    <td class="p-3 px-5">{{$v['year']}}</td>
                    <td class="p-3 px-5">{{$v['category']['type']}}</td>
                    <td class="p-3 px-5">{{$v['capacity']}}</td>
                    <td class="p-3 px-5">{{$v['color']}}</td>
                    <td class="p-3 px-5">{{$v['date_Rented']??""}}</td>
    
                    <td class="p-3 px-5 flex justify-end">
                        <button class="py-2 px-3">

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-view-list" viewBox="0 0 16 16">
                                <path d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1H3zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2zm0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14z"/>
                              </svg>
                        </button>
    
                        <button class="py-2 px-3 bg-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                              </svg>
                        </button>
                        
                        <button id="deleteBtn" wire:click="deleteVehicle({{$v['id']}})" class="py-2 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                              </svg>
                        </button>
                           
                    </td>
                    {{-- <td class="p-3 px-5">
                        <a href="/edit/{{$students->id}}" class="mr-3 text-sm bg-gray-500 hover:bg-gray-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">add</a>
                        <button 
                            formaction="/delete/{{$students->id}}"
                            name="_method"
                            value="delete"
                            class="text-sm bg-gray-500 hover:bg-gray-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                            view</button></td> --}}
                    
                </tr>  
                
                @empty
                    <tr>
                        <td colspan="4">No records</td>
                    </tr>
                @endforelse
                <tr>
                    <td colspan="6">{{ $allVehicles->links() }}</td>
                </tr>
                
                @isset($editStudent)
                    @foreach ($editStudent as $edit)
                    <tr class="border-b hover:bg-orange-100 bg-gray-100">
                        <td class="p-3 px-5"><input name="first_name" class="w-24 border-2 focus:border-red-600" selected type="text" value="{{$edit['first_nm']}}"></td>
                        <td class="p-3 px-5"><input name="last_name" class="w-24 border-2" type="text" value="{{$edit['last_nm']}}"></td>
                        <td class="p-3 px-5"><input name="email" class="w-48 border-2" type="email" value="{{$edit['email']}}"></td>
                        <td class="p-3 px-5"><input name="contact" class="w-24 border-2" type="number" value="{{$edit['phone_nbr']}}"></td>
                        <td class="p-3 px-5"><input name="gender" class="w-16 border-2" type="text" readonly value="{{$edit['gender']}}"></td>
                        <td class="p-3 px-5"><input name="date" class="w-34 border-2" type="date" value="{{$edit['dob']}}"></td>
                        <td class="p-3 px-5"><input name="class" class=" border-2" type="text" value="{{$edit['class']}}"></td>
                    
    
                        <td class="p-3 px-5 flex justify-end">
                            <button 
                                formaction="/update/{{$edit['id']}}" 
                                name="_method"
                                value="put"
                                class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                Update</button>
                            <a href="{{route('viewStudent')}}"><button 
                                type="button" 
                                class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                Cancel</button></a>
                        </td>
                    </tr>   
                    @endforeach
                                        
                @endisset
                
            </tbody>
        </table>
    </form>
    
    </div>

             <!----- ViEw MoDaL  ---->
             <x-dialog-modal wire:model="view" id="viewId" maxWidth="2xl" >
           
    
                <x-slot name="title">
                    {{-- {{"View"}} --}}
                    <button wire:click="$toggle('view')" class="pulse">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                            <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                          </svg>
                    </button>

                </x-slot>
                <x-slot name="content" >
        
                    <section>
                        <div class="uploadcontainer">  
                          <form id="contact" wire:submit.prevent="addVehicle">
                            <h2><a>Upload Car</a></h2>
                            <h4><a>Provide The Details</a></h4>
                            <fieldset>
                              <input class="w-full" placeholder="Car Make eg: Honda" type="text" wire:model.lazy="vehicle.make"  required autofocus>
                            @error('vehicle.make') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

                            </fieldset>
                            
                        
                            <fieldset>
                              <input class="w-full" placeholder="Car Model eg: Civic" type="text" wire:model.lazy="vehicle.model"  required>
                            @error('vehicle.model') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

                            </fieldset>
                        
                            <fieldset class="flex space-x-2">   
                            <select class="w-1/2" wire:model="vehicle.capacity" id="capacity">
                                <option value="4">4 Seater</option>
                                <option value="5" selected>5 Seater</option>
                                <option value="7">7 Seater</option>
                                <option value="8">8 Seater</option>
                            </select>
                            @error('vehicle.capacity') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

                            <select class="w-1/2" wire:model.lazy="vehicle.color" id="color">
                                @foreach ($carColor as $color)
                                <option value="{{$color}}">{{$color}}</option>
                                    
                                @endforeach
                            </select>
                            @error('vehicle.color') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

                            </fieldset>
                        
                            <fieldset class="flex">
                              <input class="w-full" placeholder="License Plate eg: AB1234" wire:model.lazy="vehicle.lic" type="text"  required>
                            @error('vehicle.lic') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

                            </fieldset>
                           
                            <fieldset class="flex space-x-2">
                                <input class="w-1/2" placeholder="Car Price Per Day eg: 12USD" type="number" wire:model.lazy="vehicle.per_day"  required>
                            @error('vehicle.per_day') <span class="text-red-500 text-sm">*</span> @enderror

                                <select class="w-1/2" wire:model.lazy="vehicle.year" required id="year">
                                    @for ($year=2005;$year<=2022;$year++)
                                        
                                    <option value="{{$year}}">{{$year}}</option>
                                    @endfor
                                </select>
                            @error('vehicle.year') <span class="text-red-500 text-sm">*</span> @enderror
                               
                              </fieldset>
                        
                            <fieldset>
                                <select class="w-full" wire:model="vehicle.category" id="Category" required>
                                <option value="" disabled selected>Select Category</option>
                                    @foreach ($allCategory as $cat)
                                        
                                    <option value="{{$cat['id']}}">{{$cat['type']}}</option>
                                    @endforeach
                                <optgroup>
                                    <option value="new_category" onclick="newCategory()">
                                        Add Category
                                    </option>
                                </optgroup>
                            </select>
                            @error('vehicle.category') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </fieldset>
                            @if ($showCategory)
                                <fieldset>
                                    <div class="category">
                                        <input class="w-full" type="text" wire:model="newCategory" id="newCategory" placeholder="Enter Category Name">
                                        @error('newCategory') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                        {{-- <x-button type="button" wire:click.prevent="addCategory()">Done</x-button> --}}
                                    </div>
                                </fieldset>
                            @endif
                            <div class="grid grid-cols-1 mt-5 mx-7">
                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Upload Photo</label>
                                  <div class='flex items-center justify-center w-full'>
                                      <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                                          <div class='flex flex-col items-center justify-center pt-7'>
                                            <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                            <p class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>Select a photo</p>
                                          </div>
                                        <input wire:model="photos" multiple type='file' class="hidden" />
                                      </label>
                                  </div>
                                  
                                  
                              </div>
                              <div wire:loading wire:target="photos">Uploading...</div>
                                  <div class="flex space-x-1 w-full overflow-scroll align-middle">
                                    @forelse ($photos as $photo)
                                        <div >
                                            
                                            <img style="width:100px ;  height:auto;" class="my-auto" src="{{ $photo->temporaryUrl() }}"> 
                                        </div>
                                    @empty
                                        0 Files Selected {{$test}}
                                    @endforelse
                                </div>
                          
                                
                        
                            
                        </div>

                       
                        
                        </section>
             
                </x-slot>
                <x-slot name="footer">
                    {{-- <button type="button" class="py-2 px-4 categorybtn mr-5 text-center rounded-md text-white hover:bg-green-500 bg-green-600" onclick="newCategory()">
                        add Category
                    </button> --}}

                        <button type="submit" id="add-vehicle" class="py-2 px-4 mr-5 text-center rounded-md text-white hover:bg-green-500 bg-green-600">Save</button>
                        
                       
                </x-slot>
            </form>
            </x-dialog-modal>


</div>