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
#Location,
#newCategory,
#carpic,
#contact textarea {
    width: 100%;
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
    </style>
    <x-button class="ml-[80%]" wire:click="$set('view',true)">
        add
    </x-button>
    <div class="px-3 py-4 flex justify-center">
        <form method="post">@csrf
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
                
                </tr>
                {{-- @forelse ($student as $students) --}}
             <tr class="border-b hover:bg-orange-100 bg-gray-100">
                <td class="p-3 px-5">{{--$students->first_nm--}}</td>
                    <td class="p-3 px-5">{{--$students->last_nm--}}</td>
                    <td class="p-3 px-5">{{--$students->email--}}</td>
                    <td class="p-3 px-5">{{--$students->phone_nbr--}}</td>
                    <td class="p-3 px-5">{{--$students->gender--}}</td>
                    <td class="p-3 px-5">{{--$students->dob--}}</td>
                    <td class="p-3 px-5">{{--$students->class--}}</td>
    
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
                        
                        <button class="py-2 px-3">
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
                
                {{-- @empty --}}
                    {{-- <tr>
                        <td colspan="4">No records</td>
                    </tr> --}}
                {{-- @endforelse --}}
                <tr>
                    <td colspan="6">{{-- $student->links() --}}</td>
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
           
    
                <x-slot name="title" class="">
                    {{"View"}}
                </x-slot>
                <x-slot name="content" >
        
                    <section>
                        <div class="uploadcontainer">  
                          <form id="contact" action="{{--route('car_details.store')--}}" method="POST" enctype=multipart/form-data>
                             @csrf
                            <h2><a>Upload Car</a></h2>
                            <h4><a>Provide The Details</a></h4>
                            <fieldset>
                              <input placeholder="Car Make eg: Honda" type="text" wire:model.lazy="vehicle.make"  required autofocus>
                            </fieldset>
                            <fieldset>
                              <input placeholder="Car Price Per Day eg: 12USD" type="number" wire:model.lazy="vehicle.per_day"  required>
                            </fieldset>
                        
                            <fieldset>
                              <input placeholder="Car Model eg: Civic" type="number" wire:model.lazy="vehicle.model"  required>
                            </fieldset>
                        
                            <fieldset>   
                            <input placeholder="Capacity eg: 5" type="number" wire:model.lazy="vehicle.capacity"  required>
                            </fieldset>
                        
                            <fieldset class="flex">
                              <input placeholder="License Plate eg: AB1234" wire:model.lazy="vehicle.lic" type="text"  required>
                              {{-- <input placeholder="Color" value="" wire:model.lazy="vehicle.color" type="color" required> --}}
                            </fieldset>
                            <fieldset>
                            {{-- </fieldset>
                            <fieldset> --}}
                           <input id="carpic" type="file" wire:model.lazy="carpic"  required>
                            </fieldset>
                          
                            <fieldset>
                         
                          <select wire:model.lazy="vehicle.category" id="posttype">
                          <option value="" disabled selected>Select Car Type</option>
                            <option value="With Driver">With Driver</option>

                                <option value="Without Driver">Without Driver</option>

                          </select>
                            </fieldset>
                        
                            <fieldset>
                                <select wire:model="vehicle.category" onchange="newCayegory(e)" id="Category" required>
                                <option value="" disabled selected>Select The City</option>
                                <option value="Islamabad">Islamabad</option>
                                <optgroup>
                                    <option value="new_category" onclick="newCategory()">
                                        Add Category
                                    </option>
                                </optgroup>
                            </select>
                        
                            </fieldset>
                            
                          </form>
                        </div>

                        <div class="category hidden">
                            <input type="text" wire:model="category" id="newCategory" placeholder="Enter Category Name">
                        </div>
                        
                        </section>
             
                </x-slot>
                <x-slot name="footer">
                    <button class="left-0" onclick="newCategory()">
                        add Category
                    </button>
                    
                       
                       <button class="py-2 px-4 mr-5 text-center rounded-md text-white hover:bg-green-500 bg-green-600">Upload</button>
                    
                    
                    <x-button wire:click="$toggle('view')">Close</x-button>
                </x-slot>
                
            </x-dialog-modal>
  
    <script>
        const uploadCar = document.querySelector('.uploadcontainer')
        const category = document.querySelector('.category')
        let toggle = true;
        function newCategory(){
            console.log('yes');
            if(toggle){
                uploadCar.classList.add('hidden')
                category.classList.remove('hidden')

                return toggle = false
            }else{
                category.classList.add('hidden')
                uploadCar.classList.remove('hidden')
                return toggle = true
            }
        }
        

    </script>
</div>