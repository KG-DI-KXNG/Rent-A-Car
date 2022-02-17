<x-app-layout>
    <style>
        .my-actions { margin: 0 2em; }
        .order-1 { order: 1; }
        .order-2 { order: 2; }
        .order-3 { order: 3; }
        
        .right-gap {
        margin-right: auto;
        }

        /* RED BORDER ON INVALID INPUT */
        .check input:invalid {
                border-color: red;
            }

            /* FLOATING LABEL */
            .label-floating input:not(:placeholder-shown),
            .label-floating textarea:not(:placeholder-shown) {
                padding-top: 1.4rem;
            }
            .label-floating input:not(:placeholder-shown) ~ label,
            .label-floating textarea:not(:placeholder-shown) ~ label {
                font-size: 0.8rem;
                transition: all 0.2s ease-in-out;
                color: #1f9d55;
                opacity: 1;
            }   
    </style>
    <x-slot name="header">
        {{ __('Users') }}
    </x-slot>

    <div class="inline-block overflow-hidden min-w-full rounded-lg shadow">

        <div class="inline-flex overflow-hidden w-full bg-white rounded-lg shadow-md">
            <div class="flex justify-center items-center w-12 bg-blue-500">
                <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"></path>
                </svg>
            </div>

            <div class="px-4 py-2 -mx-3">
                <div class="mx-3">
                    <span class="font-semibold text-blue-500">Info</span>
                    <p class="text-sm text-gray-600">All Users </p>
                </div>
            </div>
            
            @if(Auth()->user()->user_type)
            <div class="ml-auto px-8 flex">
                <button 
                    onclick="addUser()"
                    class="bg-blue-500 px-4 py-2 rounded-full hover:bg-blue-400 transform hover:scale-105 transition-all text-white ring-2 ring-blue-600 flex my-auto gap-2 items-baseline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                </svg> New User</button>
            </div>
            @endif
        </div>

        <table class="min-w-full leading-normal">
            <thead>
            <tr>
                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Name
                </th>
                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Email
                </th>
                @if(Auth()->user()->user_type)
                <th class="px-2 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    User Level
                </th>
                <th class="px-2 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Action
                </th>
                @endif
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $user->name }}</p>
                    </td>
                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $user->email }}</p>
                    </td>
                    @if(Auth()->user()->user_type)
                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $user->user_type ? "Admin" : "Clerk", "Null" }}</p>
                    </td>
                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">

                        <button 
                            id="delete"
                            class="hover:text-red-500"
                            onclick="dU({{ $user->id.','}}`{{$user->name}}` )"
                             >
                            
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                        </button>
                    </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="flex flex-col items-center px-5 py-5 bg-white border-t xs:flex-row xs:justify-between">
            {{ $users->links() }}
        </div>
    </div>

<!----- NeW UsEr MoDaL  ---->
     <div id="userModal" class="fixed hidden inset-0 bg-gray-500 bg-opacity-75" >

        <div id="modalUser" class="absolute left-1/4 top-12 rounded-md z-50 w-1/2 px-6 bg-white py-4" id="header">
           <!---Header---->
            <div class="text-lg bg-gray-100 px-6 py-4 rounded-md">
                New User
                <div onclick="closeUserModal()" class="absolute right-6 rounded-r-md cursor-pointer  top-4 bg-red-300 opacity-40 hover:opacity-100 hover:bg-red-500 p-4" style="height:60px;" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                      </svg>
                </div>
            </div>
            <!----content--->
            <form method="post" id="contact-me" action="{{route('new_user')}}" class="w-full mx-auto max-w-3xl bg-white shadow p-8 text-gray-700 ">
                @csrf
                <!-- name field -->
                <div class="flex flex-wrap mb-6">
                    <div class="relative w-full appearance-none label-floating">
                        <input name="name" value="" id="name" autocomplete="off" class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                        id="name" type="text" placeholder="Your name"required>
                        <label for="name" class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">
                            Your name
                        </label>
                    </div>
                </div>
                <!-- email field -->
                <div class="flex flex-wrap mb-6">
                    <div class="relative w-full appearance-none label-floating">
                        <input name="email" id="email" value="" class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                        id="name" type="text" placeholder="Your email"required>
                        <label for="email" class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">
                            Your email
                        </label>
                    </div>
                </div>
                <div class="flex flex-wrap mb-6">
                    <div class="relative w-full appearance-none label-floating">
                        
                        <select name="user_type" id=""  class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="clerk">Clerk</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                </div>
                <!-- Message field -->
                <div class="flex flex-wrap mb-6">
                    <div class="relative w-full appearance-none label-floating">
                        <input name="password" id="password" required type="password" autocomplete="new-password" class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                            id="password" type="text" placeholder="Password..." />
                            <label for="password" class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">Password...
                        </label>
                        <div class="absolute -mt-14 right-0 p-3 cursor-pointer rounded-lg" onclick="showP()">
                            <i id="passwordEye" class="fas fa-eye"></i>
                        </div>
                    </div>
                </div>
            
           
            
            <!-----footer--->
            <div class="bg-gray-100 px-6 py-4 rounded-md sm:space-x-10 flex" id="footer">
                <button
                    class="py-2 px-8 text-center rounded-md text-green-800 font-bold  border-2 border-green-500 hover:text-white hover:bg-green-400 flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                </svg><p class="hidden md:block ml-1 whitespace-nowrap">Submit</p></button>
            </div>
         </form>
        </div>
</div>

<!-----EnD NeW UsEr MoDaL  ---->

<script>
    let modalUser = document.querySelector('#userModal');

    //RED BORDER ON INVALID INPUT
    document.getElementById('contact-me').addEventListener("invalid", function (event) {
                this.classList.add('check');
            }, true);


    function addUser(){
        modalUser.classList.remove("hidden");
    }

    function closeUserModal(){
        modalUser.classList.add("hidden");
    }

    let showPassword = document.querySelector('#passwordEye');
    let password = true;
    function showP()
    {
        if(password){
            console.log('true');
            document.querySelector("#password").type="text";
            showPassword.classList.remove("fa-eye");
            showPassword.classList.add("fa-eye-slash");
            password = false;
        }else{
            console.log('fasle');
            document.querySelector("#password").type="password";
            showPassword.classList.remove("fa-eye-slash");
            showPassword.classList.add("fa-eye");
            password = true;
        }
    }


    function dU(clientId, clientName){
            Swal.fire({
        title: 'Are you sure you want to remove '+clientName+' ?',
        width: 600,
        padding: '3em',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: "Confirm",
        confirmButtonColor: "green",
        denyButtonColor: "red",
        denyButtonText: 'Cancel',
        customClass: {
            actions: 'my-actions',
            cancelButton: 'order-1 right-gap',
            confirmButton: 'order-2 right-gap',
            denyButton: 'order-3',
        }
        }).then((result) => {
        if (result.isConfirmed) {
            axios.delete('/api/user/' + clientId)
            .then(response => {
                // console.log(response);
                if(response.status == 200){
                    Swal.fire('Delete Successfull', '', 'success').then((result) => {  location.reload(); });
                }else{
                    Swal.fire('Error: Please Refresh and Try again!', '', 'error').then((result) => {  location.reload(); });
                   
                }
            });
        } else if (result.isDenied) {
            Swal.fire('Delete Cancelled', '', 'error')
        }
        })
    }
</script>
    
</x-app-layout>
